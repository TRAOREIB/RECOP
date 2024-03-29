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
    <script src="{{asset('/js/ajouter.js')}}"></script>
 
    <link rel="stylesheet" href="{{asset('css/bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('css/datatables.min.css')}}">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <style>
        .corpsinfo {
            background-color: white;
            margin-buttom: 5px;
            padding: 20px;

        }

        .cadre {
            background-color: #008080;
            border-radius: 10 px;

        }





        .tableau {
            background-color: #C0C0C0;

            padding-left: 20px;
            padding-right: 20px;
            padding-buttom: 5px;

        }

        .titrenouvelleinformation {

            padding-left: 20px;

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
                    <div class=" ">
                        <div class="" style="margin-top: 13px;">
                            <label class="col-auto display-5 font-italic font-weight-bold lead mr-4 mt-lg-n1 mt-sm-4 pr-auto text-center text-monospace text-danger text-uppercase w-100" >Ministère de la Communication et des Relations avec Le Parlement</label>
                            <label class="col-auto display-5 font-italic font-weight-bold lead mr-4 mt-lg-n1 mt-sm-4 pr-auto text-center text-monospace text-primary text-uppercase w-100">Plateforme d'Enregistrement et d'Accréditation des Correspondants de Presse au Burkina Faso</label>
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
                            <a class="dropdown-toggle nav-link text-white" href="#" id="navbarDropdownMenuLink44" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CORRESPONDANT DE PRESSE&nbsp;</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink44" style="background: linear-gradient(90deg, #757F9A, #D7DDE8);">

                                <a class="dropdown-item text-white" href="{{ url('choixcorrespondant') }}">NOUVEAU CORRESPONDANT</a>
                                <!--   @guest
                                <a class="dropdown-item text-white" href="{{ url('listevisiteur') }}">LISTE DES CORRESPONDANTS</a>
                                @endguest -->
                                @if(Auth::check())
                                @enregistre
                                <a class="dropdown-item text-white" href="{{ url('listevisiteur') }}">LISTE DES CORRESPONDANTS</a>
                                @endenregistre
                                @endif

                                @if(Auth::check())
                                @administrateur
                                <!-- <a class="dropdown-item text-white" href="{{ url('listeadmin') }}">LISTE DES CORRESPONDANTS</a>-->
                                <a class="dropdown-item text-white" href="{{ url('recherchetype') }}">LISTE DES CORRESPONDANTS</a>

                                @endadministrateur
                                @ampliateur
                                <!-- <a class="dropdown-item text-white" href="{{ url('listeadmin') }}">LISTE DES CORRESPONDANTS</a>-->
                                <a class="dropdown-item text-white" href="{{ url('recherchetype') }}">LISTE DES CORRESPONDANTS</a>
                                @endampliateur
                                @endif

                            </div>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle nav-link text-white" href="#" id="navbarDropdownMenuLink44" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ACCREDITATION DE PRESSE&nbsp;</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink44" style="background: #343a40;">
                                <a class="dropdown-item text-light" href="{{ url('demandeur') }}">NOUVELLE ACCREDITATION</a>
                                @if(Auth::check())
                                @administrateur
                                <a class="dropdown-item text-light" href="{{ url('rechercheaccredi') }}">LISTE DES ACCREDITATIONS</a>
                                @endadministrateur
                                @ampliateur
                                <a class="dropdown-item text-light" href="{{ url('rechercheaccredi') }}">LISTE DES ACCREDITATIONS</a>
                                @endampliateur
                                @endif
                            </div>
                        </li>
                        @if(Auth::check())
                        @enregistre
                        <!--		
                            <li class="nav-item"> 
                                <a class="nav-link text-white" href="{{ url('informationvue') }}">INFORMATIONS</a> 
                            </li>-->
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ url('home') }}">MON COMPTE</a>
                        </li>

                        @endenregistre

                        @ampliateur
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ url('home') }}">MON COMPTE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ url('listemessages') }}">MES MESSAGES</a>
                        </li>

                        @endampliateur

                        @verificateur
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ url('verificateur') }}">LISTE DEMANDES ACCREDITATION</a>
                        </li>

                        @endverificateur
                        @coordonateur
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ url('coordonateur') }}">LISTE DEMANDES ACCREDITATION</a>
                        </li>

                        @endcoordonateur

                        @endif
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ url('login') }}"><b><i>{{ __('CONNEXION') }}</i></b></a>
                        </li>
                        {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif --}}
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="{{ route('changepassword') }}" onclick="event.preventDefault();
                                                     document.getElementById('change-form').submit();">
                                    {{ __('Changer votre mot de passe') }}
                                </a>

                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Deconnexion') }}
                                </a>

                                <form id="change-form" action="{{ route('changepassword') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>

                        </li>

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
                </div>
            </div>

        </div>
        <!--      <div class="container" > 
            <div class="container" style="background-color:white;border-radius: 9px">
                <b> <label class="offset-2">Tous droits reservés au Ministère de la Communication et des Relations avec le Parlement @ 2021</label></b>
            </div>

        </div>    -->
        <div class="container">
            <b> <label class="offset-2">Tous droits reservés au Ministère de la Communication et des Relations avec le Parlement @ 2021</label></b>
        </div>





</body>

</html>