<!DOCTYPE html>
<html lang="en" class="align-middle font-italic w-auto" style="border-top-left-radius: 2;">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>RECOP</title>


        <!-- Custom styles for this template -->
        <script src="{{asset('/js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/datatables.min.js')}}"></script>
        <script src="{{asset('/js/popper.js')}}"></script>

        <link rel="stylesheet" href="{{asset('css/bootstrap4.css')}}">
        <link rel="stylesheet" href="{{asset('css/datatables.min.css')}}">
        <link href="{{asset('css/style.css')}}" rel="stylesheet">

        <style>

            .corpsinfo {
                background-color:white	;
                margin-buttom:5px ;
                padding:20px;

            }
            .cadre {
                background-color:#00808;
                border-radius : 10 px ;

            }

            .tableau {
                background-color:#C0C0C0;

                padding-left:20px;
                padding-right:20px;
                padding-buttom:5px;

            }
            .titrenouvelleinformation {

                padding-left : 20px ;

            }
        </style>

    </head>
    <body>

        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->

        <div class="container" style="background: -webkit-linear-gradient(90deg, rgb(237, 239, 231) 1.80723%, rgb(237, 239, 231) 52.4096%); border-radius: 9px;">
            <div class="container">
                <div class="row w-100">
                    <div class="col-lg-12 container d-flex flex-row ml-lg-3 w-auto" style="background: linear-gradient(90deg, #FFEEEE, #DDEFBB); border-top-left-radius: 6px; border-top-right-radius: 6px;">
                        <img src="{{asset('images/armoirie_bf.JPG')}}" width="100">
                        <div class="container mr-0 mt-lg-5 pr-auto">
                            <div class="row">
                                <label class="col-auto display-5 font-italic font-weight-bold lead mr-4 mt-lg-n1 mt-sm-4 pr-auto text-center text-monospace text-primary text-uppercase w-100">Plateforme d'Enregistrement et d'Accr??ditation des Correspondants de Presse au Burkina Faso</label>
                            </div>
                        </div>
                    </div>
                </div>

                <nav class="bg-dark navbar navbar-dark navbar-expand-lg w-100"> 
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler29" aria-controls="" aria-expanded="false" aria-label="Toggle navigation"> 
                        <span class="navbar-toggler-icon"></span> 
                    </button>                 
                    <div class="collapse navbar-collapse w-100" id="navbarToggler29"> 
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0"> 
                            <li class="nav-item active"> 
                            </li>                         
                            <li class="nav-item"> 
                            </li>                         
                            <li class="nav-item dropdown"> 
                                <div class="bg-info dropdown-menu" aria-labelledby="navbarDropdownMenuLink30"> 
                                    <a class="bg-light border-width-1 dropdown-item text-success text-uppercase" href="#">Ajouter Informations</a> 
                                    <a class="dropdown-item" href="#">Another action</a> 
                                    <a class="dropdown-item" href="#">Something else here</a> 
                                    <a class="dropdown-item" href="#">Dropdown item</a>
                                </div>                             
                            </li>  

                            <li class="nav-item"> 
                            </li>
                            <li class="nav-item"> 
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="{{ url('accueil') }}">ACCUEIL</a> 
                            </li>
                            <li class="nav-item dropdown"> 
                                <a class="dropdown-toggle nav-link text-white" href="#" id="navbarDropdownMenuLink44" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CORRESPONDANT&nbsp;</a> 
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink44" style="background: linear-gradient(90deg, #757F9A, #D7DDE8);"> 
                                    <a class="dropdown-item text-white" href="{{ url('choixcorrespondant') }}">NOUVEAU CORRESPONDANT</a> 
                                    @guest
                                    <a class="dropdown-item text-white" href="{{ url('listevisiteur') }}">LISTE DES CORRESPONDANTS</a> 
                                    @endguest

                                    @if(Auth::check())
                                    @administrateur
                                    <a class="dropdown-item text-white" href="{{ url('listeadmin') }}">LISTE DES CORRESPONDANTS</a> 
                                    <a class="dropdown-item text-white" href="{{ url('rechercheregioninter') }}">MEDIA INTERNATIONAL</a> 
                                    <a class="dropdown-item text-white" href="{{ url('rechercheregion') }}">MEDIA NATIONAL</a> 		
                                    @endadministrateur
                                    @endif
                                    @if(Auth::check())
                                    @enregistre
                                    <a class="dropdown-item text-white" href="{{ url('rechercheregioninter') }}">MEDIA INTERNATIONAL</a> 
                                    <a class="dropdown-item text-white" href="{{ url('rechercheregion') }}">MEDIA NATIONAL</a> 									
                                    @endenregistre 
                                    @endif
                                </div>                                
                            </li>
                            <li class="nav-item"> 
                                <a class="nav-link text-light" href="{{ url('demandeur') }}">ACCREDITATION DE PRESSE</a> 
                            </li>
                            @if(Auth::check())
                            @enregistre
                            <li class="nav-item"> 
                                <a class="nav-link text-white" href="{{ url('informationvue') }}">INFORMATIONS</a> 
                            </li>
                            @endenregistre 

                            @administrateur
                            <li class="nav-item"> 
                                <a class="nav-link text-white" href="{{ url('informationvue') }}">INFORMATIONS</a> 
                            </li>
                            @endadministrateur
                            @endif
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ url('login') }}"><b><i>{{ __('CONNEXION') }}</i></b></a>
                            </li>
                            @if(Auth::check())

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Modifier vos informations') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Changer le Mot de Passe') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        {{ __('Deconnexion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endif
                            @endguest
                        </ul>
                    </div>                 
                </nav>
            </div>
            @yield('contenu')





            <div class="container  d-flex flex-row">               
                <div class="card col-sm-6 col-xs-12"> 
                    <div class="card-body" style="border-radius: 3px; background: linear-gradient(90deg, #83a4d4, #b6fbff);"> 
                        <h4 class="card-title">Liens Utiles</h4> 
                        <h6 class="card-subtitle mb-2 text-muted"></h6> 
                        <p class="card-text">www.communication.gov.bf</p>
                        <p class="card-text">www.rtb.bf</p>                      
                    </div>                 
                </div>
                <div class="card col-sm-6  col-xs-12"> 
                    <div class="card-body" style="background: linear-gradient(90deg, #83a4d4, #b6fbff);"> 
                        <h4 class="card-title">Numeros Utiles</h4>                      
                        <p>Sapeur Pompier : 18</p>
                        <p>ONEA : 18</p>                      
                    </div>                 
                </div>

            </div>

            <div class="container">
                <b> <label class="offset-2">Tous droits reserv??s au Minist??re de la Communication et des Relations avec le Parlement @ 2021</label></b>
            </div>





    </body>
</html>
