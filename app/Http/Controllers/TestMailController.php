<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\RequestException;
use App\Models\Correspondant;
use App\Models\Demandeur;
use App\Repositories\Repository;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\User;

class TestMailController extends Controller
{

    protected $users;
    protected $user;

    public function __construct()
    {
        $this->users = new User();
        $this->user = new Repository($this->users);
    }

    public function SendMail()
    {

        // 
        $iduser = Auth::id();

        // RECUPERATION DES INFOS DU USER
        $monemail = $this->user->showuser($iduser);


        foreach ($monemail as $monmail) {
            // RECUPERATION MAIL DU USER
            $mail = $monmail->email;
            // VARIABLE SESSION MAIL
            Session::put('email', $mail);
        }
        // echo $monemail;



        //echo $mail;
        // echo 'test envoie de mail';
        $essaie = 'mes donnees';
        Mail::send('mailing.mailpatient', ['donnee' => $essaie], function ($message) {
            $message->from('zoureabdoulaye@gmail.com', 'RECOP');

            //	echo $mail;
            //$message->to('montestk21@gmail.com'); 

            //echo session('email');
            $message->to(session('email'));

            $message->subject("Inscription correspondant");
            $message->attach(storage_path() . '/' . "app/public/recipisse/recipissecorrespondant.pdf");
        });
    }


    public function mailgrouper($mail, $rendezvous)
    {
        echo $mail;
        echo "<br>";
        foreach ($rendezvous as $rd) {
            echo " $rd->nompatient $rd->prenompatient $rd->agepatient $rd->jourrendezvous";
            echo "<br>";
        }
        echo "<br>";
        echo "--------------------------------";
        echo "<br>";


        Mail::send('mailing.mailconsultgrouper', ['donnee' => $rendezvous], function ($message) {
            $message->from('traore.ibrahim06@gmail.com', 'MeetDoc');

            $message->to('ib_fire@yahoo.fr');
            $message->subject("Liste de vos rendez-vous");
        });
    }
}
