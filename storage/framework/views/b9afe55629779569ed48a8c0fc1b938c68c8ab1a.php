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
    <script src="<?php echo e(asset('/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/datatables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/js/popper.js')); ?>"></script>
    <script src="<?php echo e(asset('/js/ajouter.js')); ?>"></script>

    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap4.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/datatables.min.css')); ?>">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">

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
                    <img src="<?php echo e(asset('images/armoirie_bf.JPG')); ?>" width="100">
                    <div class=" ">
                        <div class="" style="margin-top: 13px;">
                            <label class="col-auto display-5 font-italic font-weight-bold lead mr-4 mt-lg-n1 mt-sm-4 pr-auto text-center text-monospace text-danger text-uppercase w-100">Ministère de la Communication et des Relations avec Le Parlement</label>
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

                        <li class="nav-item">
                            <a class="nav-link text-light" href="<?php echo e(url('accueil')); ?>">ACCUEIL</a>
                        </li>

                        <!-- menu nouveau correspondant visible par tous -->
                        <?php if(auth()->guard()->guest()): ?>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?php echo e(url('choixcorrespondant')); ?>">NOUVEAU CORRESPONDANT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="<?php echo e(url('demandeur')); ?>">NOUVELLE ACCREDITATION</a>
                        </li>
                        <?php endif; ?>


                        <!-- <li class="nav-item dropdown">
                            <a class="dropdown-toggle nav-link text-white" href="#" id="navbarDropdownMenuLink44" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CORRESPONDANT DE PRESSE&nbsp;</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink44" style="background: linear-gradient(90deg, #757F9A, #D7DDE8);">

 -->
                        <!--   <?php if(auth()->guard()->guest()): ?>
                                <a class="dropdown-item text-white" href="<?php echo e(url('listevisiteur')); ?>">LISTE DES CORRESPONDANTS</a>
                                <?php endif; ?> -->
                        <!--  <?php if(Auth::check()): ?>
                                <?php if (\Illuminate\Support\Facades\Blade::check('enregistre')): ?>
                                <a class="dropdown-item text-white" href="<?php echo e(url('listevisiteur')); ?>">LISTE DES CORRESPONDANTS</a>
                                <?php endif; ?>
                                <?php endif; ?>

                                <?php if(Auth::check()): ?>
                                <?php if (\Illuminate\Support\Facades\Blade::check('administrateur')): ?> -->
                        <!-- <a class="dropdown-item text-white" href="<?php echo e(url('listeadmin')); ?>">LISTE DES CORRESPONDANTS</a>-->
                        <!-- <a class="dropdown-item text-white" href="<?php echo e(url('recherchetype')); ?>">LISTE DES CORRESPONDANTS</a>

                                <?php endif; ?>
                                <?php if (\Illuminate\Support\Facades\Blade::check('ampliateur')): ?> -->
                        <!-- <a class="dropdown-item text-white" href="<?php echo e(url('listeadmin')); ?>">LISTE DES CORRESPONDANTS</a>-->
                        <!--  <a class="dropdown-item text-white" href="<?php echo e(url('recherchetype')); ?>">LISTE DES CORRESPONDANTS</a>
                                <?php endif; ?>
                                <?php endif; ?>

                            </div>
                        </li> -->


                        <!--          <li class="nav-item dropdown">
                            <a class="dropdown-toggle nav-link text-white" href="#" id="navbarDropdownMenuLink44" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ACCREDITATION DE PRESSE&nbsp;</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink44" style="background: #343a40;">

                                <?php if(Auth::check()): ?>
                                <?php if (\Illuminate\Support\Facades\Blade::check('administrateur')): ?>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?php echo e(url('home')); ?>">MON COMPTE</a>
                        </li>
                        <a class="dropdown-item text-light" href="<?php echo e(url('rechercheaccredi')); ?>">LISTE DES ACCREDITATIONS</a>
                        <?php endif; ?>
                        <?php if (\Illuminate\Support\Facades\Blade::check('ampliateur')): ?>
                        <a class="dropdown-item text-light" href="<?php echo e(url('rechercheaccredi')); ?>">LISTE DES ACCREDITATIONS</a>
                        <?php endif; ?>
                        <?php endif; ?>
                </div>
                </li> -->
                        <?php if(Auth::check()): ?>
                        <?php if (\Illuminate\Support\Facades\Blade::check('enregistre')): ?>
                       <!--  <li class="nav-item dropdown">
                            <a class="dropdown-toggle nav-link text-white" href="#" id="navbarDropdownMenuLink44" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CORRESPONDANT DE PRESSE&nbsp;</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink44" style="background: linear-gradient(90deg, #757F9A, #D7DDE8);">
                                <a class="dropdown-item text-white" href="<?php echo e(url('listevisiteur')); ?>">LISTE DES CORRESPONDANTS</a>
                        </li> -->
                        
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?php echo e(url('home')); ?>">MON COMPTE</a>
                        </li>

                        <?php endif; ?>

                        <?php if (\Illuminate\Support\Facades\Blade::check('administrateur')): ?>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle nav-link text-white" href="#" id="navbarDropdownMenuLink44" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CORRESPONDANT DE PRESSE&nbsp;</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink44" style="background: linear-gradient(90deg, #757F9A, #D7DDE8);">
                                <a class="dropdown-item text-white" href="<?php echo e(url('listeadmin')); ?>">LISTE DES CORRESPONDANTS</a>
                                <a class="dropdown-item text-white" href="<?php echo e(url('recherchetype')); ?>">RECHERCHER CORRESPONDANTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?php echo e(url('coordonateur')); ?>">LISTE DEMANDES ACCREDITATION</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">GESTION DES UTILISATEURS</a>
                        </li>
                        <!--  <li class="nav-item">
                            <a class="nav-link text-white" href="<?php echo e(url('home')); ?>">MON COMPTE</a>
                        </li> -->
                        <?php endif; ?>

                        <?php if (\Illuminate\Support\Facades\Blade::check('ampliateur')): ?>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?php echo e(url('recherchetype')); ?>">LISTE DES CORRESPONDANTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?php echo e(url('home')); ?>">MON COMPTE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?php echo e(url('listemessages')); ?>">MES MESSAGES</a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item text-white" href="<?php echo e(url('listevisiteur')); ?>">LISTE DES CORRESPONDANTS</a>
                        </li>
                        <?php endif; ?>

                        <?php if (\Illuminate\Support\Facades\Blade::check('verificateur')): ?>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?php echo e(url('listeadmin')); ?>">LISTE DES CORRESPONDANTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?php echo e(url('verificateur')); ?>">LISTE DEMANDES ACCREDITATION</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?php echo e(url('home')); ?>">MON COMPTE</a>
                        </li>

                        <?php endif; ?>

                        <?php if (\Illuminate\Support\Facades\Blade::check('coordonateur')): ?>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?php echo e(url('coordonateur')); ?>">LISTE DEMANDES ACCREDITATION</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?php echo e(url('home')); ?>">MON COMPTE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?php echo e(url('listeadmin')); ?>">LISTE DES CORRESPONDANTS</a>
                        </li>

                        <?php endif; ?>

                        <?php endif; ?>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?php echo e(url('login')); ?>"><b><i><?php echo e(__('CONNEXION')); ?></i></b></a>
                        </li>
                        
                        <?php else: ?>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <?php echo e(Auth::user()->name); ?>

                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="<?php echo e(route('changepassword')); ?>" onclick="event.preventDefault();
                                                     document.getElementById('change-form').submit();">
                                    <?php echo e(__('Changer votre mot de passe')); ?>

                                </a>

                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <?php echo e(__('Deconnexion')); ?>

                                </a>

                                <form id="change-form" action="<?php echo e(route('changepassword')); ?>" method="POST" class="d-none">
                                    <?php echo csrf_field(); ?>
                                </form>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>

                        </li>

                        <?php endif; ?>
                    </ul>
                </div>
            </nav>
        </div>
        <?php echo $__env->yieldContent('contenu'); ?>





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

</html><?php /**PATH C:\xampp\htdocs\RECOP\resources\views/tprecop/template.blade.php ENDPATH**/ ?>