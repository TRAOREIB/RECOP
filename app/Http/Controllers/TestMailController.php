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
    public $cheminfichier;

    public function __construct()
    {
        $this->users = new User();
        $this->user = new Repository($this->users);
    }

    public function SendMailCorrespondant()
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
        $nomfichier=session("nomfichier");
        $this->cheminfichier="\app\public\\recipisse_correspondant\\"."$nomfichier";
       
        Mail::send('mailing.mailrecipisse', ['donnee' => $essaie], function ($message) {
            $message->from('peacop.mcrp@communication.gov.bf', 'PEACOP');

            //	echo $mail;
            //$message->to('montestk21@gmail.com'); 

            //echo session('email');
            $message->to(session('email'));

            $message->subject("Inscription correspondant");
            $message->attach(storage_path() . $this->cheminfichier);
        });
    }

    public function SendMailDemandeur()
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
		//add
		$nomfichier=session("nomfichier");
        $this->cheminfichier="\app\public\\recipisse_accreditation\\"."$nomfichier";
		
        Mail::send('mailing.mailrecipisse', ['donnee' => $essaie], function ($message) {
            $message->from('peacop.mcrp@communication.gov.bf', 'PEACOP');

            //	echo $mail;
            //$message->to('montestk21@gmail.com'); 

            //echo session('email');
            $message->to(session('email'));

            $message->subject("Demande d'accreditation");
            $message->attach(storage_path() . $this->cheminfichier);
        });
    }

    public function SendMailAttestation($mail)
    {

        // 
        //$iduser = Auth::id();
          Session::put('email', $mail);
		  
		  
        // RECUPERATION DES INFOS DU USER
       // $monemail = $this->user->showuser($iduser);


       // foreach ($monemail as $monmail) {
            // RECUPERATION MAIL DU USER
       //     $mail = $monmail->email;
            // VARIABLE SESSION MAIL
         //   Session::put('email', $mail);
      //  }
        // echo $monemail;



        //echo $mail;
        // echo 'test envoie de mail';
        $essaie = 'mes donnees';
		//add
		$nomfichier=session("nomfichier");
		//echo $nomfichier;
        $this->cheminfichier="\app\public\\attestation_provisoire\\"."$nomfichier";
		
        Mail::send('mailing.mailattestation', ['donnee' => $essaie], function ($message) {
            $message->from('peacop.mcrp@communication.gov.bf', 'PEACOP');

            //	echo $mail;
            //$message->to('montestk21@gmail.com'); 

            //echo session('email');
            $message->to(session('email'));

            $message->subject("Attestation d'Accreditation Provisoire");
            $message->attach(storage_path() . $this->cheminfichier);
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
