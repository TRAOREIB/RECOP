<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
//20_06
use App\Repositories\Repository;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Http\Controllers\Auth\RegisterController;

//23_06

use App\Models\Accreditation;

class CreationUtilisateurController extends Controller
{
    protected $users;
    protected $user;
    protected $enreguser;
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct() {
    
            $this->users=new User();
            $this->user=new Repository($this->users);
            $this->enreguser=new RegisterController();
    
    }
     
    //index changement de mot de passe
    public function index(Request $request)
    {
        
        $iduser = Auth::id();      
        return view("auth.passwords.reset", compact("iduser"));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        Session::put("name", $request->name);
        Session::put("email", $request->email);
        Session::put('identifiant', $request->identifiant);
		Session::put("telephone", $request->telephone);
        Session::put('telephone1', $request->telephone1);
        Session::put('service', $request->service);
        Session::put("profil", $request->profil);

        
        
        // echo Session('name');
        // echo Session('email');
        // echo Session('identifiant');
        // echo Session('profil');
        // echo $request->email;
        //enregistrer l'utilisateur dans les users
        $this->enreguser->register($request);

        
        $alluser=$this->user->alluser();
        return view('auth.panneau', compact('alluser'));
		//echo ('OK');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    //MAJ changement de mot de passe
     public function update(Request $request)
    {
        $iduser = Auth::id();
        $motdepasse=bcrypt($request->password);
        Session::put('password',$motdepasse);
        $this->user->update($request->only($this->user->getModel()->fillable), $iduser);
       // return back();
        //
        return view("auth.passwords.reset_message");
        }

        public function updatereset(Request $request)
        {
            $iduser=$request->id;
     
         $motdepasse=bcrypt($request->password);
         Session::put('password',$motdepasse);
        $this->user->update($request->only($this->user->getModel()->fillable), $iduser);
        $alluser=$this->users->all();
        return view('auth.panneau', compact('alluser'));

        }


        public function updateadmin(Request $request)
        {
            $identifiant=$request->identifiant;
            //echo ($identifiant);
           // Recuperation du User ID
            $monuser=$this->user->showiduser($identifiant);
            foreach ($monuser as $monid) {
                $iduser=$monid->id;
            }
            $motdepasse=bcrypt($request->password);
            Session::put('password',$motdepasse);
           $this->user->update($request->only($this->user->getModel()->fillable), $iduser);
           // return back();
            //
           return view("auth.passwords.reset_message");
            }
// add 24 & 25			
	public function listeuser()
    {
        //$allaccreditation=$this->accreditation->all();
		 $alluser=$this->user->alluser();
        return view('auth.panneau', compact('alluser'));
    }		
		
		public function creeruser()
    {
		
		return view('auth.register');
    }
	
	public function edituser(Request $request, $id)
    {
	//	$idcorrespondant = $request->idcorrespondant;
        // $idpiecesjointes = $request->idpiecesjointes;
        // $correspondant = $this->correspondant->show($idcorrespondant);
        // return view("correspondant.modif_correspondant", compact("correspondant", "idcorrespondant", "idpiecesjointes"));
        //
		$user=$this->user->show($id);
        
        return view("auth.modif_user", compact("user","id"));
		
		
    }

    public function updateuser(Request $request)
    {
       // $iduser = Auth::id();
        
        $iduser=$request->id;
       
       $this->user->update($request->only($this->user->getModel()->fillable), $iduser);
       $alluser=$this->user->alluser();
       return view('auth.panneau', compact('alluser'));
        }

    public function editpass(Request $request, $id)
    {
		$user=$this->user->show($id);
     
        return view("auth.passwords.resetpass", compact("user","id"));
		
		
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $this->user->deleteuser($id);
        $alluser=$this->user->alluser();
       return view('auth.panneau', compact('alluser'));
        
    }
}
