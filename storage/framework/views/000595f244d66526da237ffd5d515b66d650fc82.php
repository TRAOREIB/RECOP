<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
   <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>









<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

   <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> 
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->





 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

  <script src="//code.jquery.com/jquery-1.10.2.js"> </script>
  
  
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>  


    <!-- Fonts -->
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">     --> 

    <!-- Styles -->

   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
      -->

    <style>
        body {
            font-family: 'Lato';

        }

        .fa-btn {
            margin-right: 6px;
        }


/*
         .container{
        background: #ddd ;
        box-shadow: 0px 0px 10px  green ;
        padding: : 10px;
         width: auto;

    } */




    .menu{
        background: #ddd ;
        

    }







   /*   .image{
        background: #ddd ;
        box-shadow: 0px 0px 10px  green ;
        padding: : 10px;
         width: auto;

    }  */

    </style>
</head>
<!--<body id="app-layout">-->
<body>


   



     
   <!-- <nav class="navbar navbar-default navbar-static-top"> -->
    <nav class="navbar navbar-inverse">
        <div class="container"> 
            <!-- <div class="container-fluid"> -->
            <div class="navbar-header" class="menu">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                   <!-- Laravel -->
                </a>
            </div> 

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
  <!--                  <li><a href="<?php echo e(url('/home')); ?>">Home</a></li>                     --> 

                    <?php if(Auth::check() ): ?>
                    <li><a href="<?php echo e(url('/home')); ?>">Accueil </a></li>


                     
               






    




    <!--                <li><a href="<?php echo e(url('/home')); ?>">Employes</a>                -->
                     <!--   <ul class="dropdown-menu"> -->
                    <?php if(Auth::check()): ?>
                        <?php if(Auth::user()->user == 1): ?>
              <li ><a href="<?php echo e(route('dpage1e')); ?>">Ajouter</a></li>
               <?php endif; ?>
               <?php endif; ?>

   <!--           <li class=" dropdown-item <?php echo e(Request::is('dropdown/dpage2e') ? 'active' : null); ?>"><a href="<?php echo e(route('dpage2e')); ?>">Lister</a></li>              -->
           <!--   <li class="<?php echo e(Request::is('dropdown/dpage5') ? 'active' : null); ?>"><a href="<?php echo e(route('dpage5')); ?>">Congé</a></li> -->
          <!--    <li><a href="#">Page 1-3</a></li> -->
           <!-- </ul> -->
                   <!-- </li> -->
   <!--                 <li><a href="<?php echo e(url('/home')); ?>">Positions</a></li>              -->
                   <!--
                         <?php if(Auth::user()->role > 1 ): ?>
                    <li><a href="<?php echo e(url('/home')); ?>">Control</a></li>
                        <?php endif; ?>
                    <?php endif; ?>  -->
                </ul>






                <ul class="nav navbar-nav">
       <!-- <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li> -->
        <li class="dropdown">
           <?php if(Auth::check()): ?>
                         <?php if(Auth::user()->role > 1 ): ?>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ressources Humaines <span class="caret"></span></a>  
          <?php endif; ?>  
             <?php endif; ?>
          <ul class="dropdown-menu"> 
            <?php if(Auth::check()): ?>
                         <?php if(Auth::user()->role > 1 ): ?>


             <li class="<?php echo e(Request::is('/employe') ? 'active' : null); ?>"><a href="<?php echo e(url('/employe')); ?>">Employés</a></li> 
             <?php endif; ?>  
             <?php endif; ?>
              
             
          </ul>
        </li>








        <li class="dropdown">  
       <!-- <li class="dropdown-toggle"> -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Positions <span class="caret"></span></a>
          <ul class="dropdown-menu"> 
            
             
           
            
           <li class="<?php echo e(Request::is('/detachement3') ? 'active' : null); ?>"><a href="<?php echo e(url('/detachement3')); ?>">Détachement</a></li>
            <li role="separator" class="divider"></li>
            <li class="<?php echo e(Request::is('/retraite') ? 'active' : null); ?>"><a href="<?php echo e(url('/retraite')); ?>">Retraités</a></li>
             <li role="separator" class="divider"></li>
            
            <li role="separator" class="divider"></li>
            <li class="<?php echo e(Request::is('/disposition') ? 'active' : null); ?>"><a href="<?php echo e(url('/disposition')); ?>">Mise à Disposition( sortant )</a></li>
             <li role="separator" class="divider"></li>
            <li class="<?php echo e(Request::is('/dispositione') ? 'active' : null); ?>"><a href="<?php echo e(url('/dispositione')); ?>">Mise à Disposition( entrant )</a></li>
             <li role="separator" class="divider"></li>
            <li class="<?php echo e(Request::is('/disponibilite') ? 'active' : null); ?>"><a href="<?php echo e(url('/disponibilite')); ?>">Mise en disponibilité</a></li>
            <li role="separator" class="divider"></li>
           
            <li class="<?php echo e(Request::is('/stage') ? 'active' : null); ?>"><a href="<?php echo e(url('/stage')); ?>">Stage</a></li>
            <li role="separator" class="divider"></li>
            <li class="<?php echo e(Request::is('/conge') ? 'active' : null); ?>"><a href="<?php echo e(url('/conge')); ?>">Congés</a></li>
             <li role="separator" class="divider"></li>
             <li class="<?php echo e(Request::is('/abscence') ? 'active' : null); ?>"><a href="<?php echo e(url('/abscence')); ?>">Abscences</a></li>
              <li role="separator" class="divider"></li>
              <li class="<?php echo e(Request::is('/adresse') ? 'active' : null); ?>"><a href="<?php echo e(url('/adresse')); ?>">Adresses</a></li>
              <li role="separator" class="divider"></li>
              

             
          </ul>
        </li>








        



<!--
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Paramétrage <span class="caret"></span></a>
          <ul class="dropdown-menu"> 
            
             
           
            
           <li class="<?php echo e(Request::is('/detachement3') ? 'active' : null); ?>"><a href="<?php echo e(url('/detachement3')); ?>">Détachement</a></li>
            <li role="separator" class="divider"></li>
            <li class="<?php echo e(Request::is('/retraite') ? 'active' : null); ?>"><a href="<?php echo e(url('/retraite')); ?>">Retraités</a></li>
             <li role="separator" class="divider"></li>
            
            <li role="separator" class="divider"></li>
            <li class="<?php echo e(Request::is('/disposition') ? 'active' : null); ?>"><a href="<?php echo e(url('/disposition')); ?>">Mise en Dispositions</a></li>
             <li role="separator" class="divider"></li>
            <li class="<?php echo e(Request::is('/disposition') ? 'active' : null); ?>"><a href="<?php echo e(url('/disposition')); ?>">Mise en disponibilité</a></li>
            <li role="separator" class="divider"></li>
           
             <li role="separator" class="divider"></li>
            <li class="<?php echo e(Request::is('/conge') ? 'active' : null); ?>"><a href="<?php echo e(url('/conge')); ?>">Congés</a></li>
             <li role="separator" class="divider"></li>
             <li class="<?php echo e(Request::is('/abscence') ? 'active' : null); ?>"><a href="<?php echo e(url('/abscence')); ?>">Abscences</a></li>
              <li role="separator" class="divider"></li>
             
          </ul>
        </li>

-->


        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Avancement <span class="caret"></span></a>
          <ul class="dropdown-menu"> 
            
             
           
            
           <li class="<?php echo e(Request::is('/dpage2avan') ? 'active' : null); ?>"><a href="<?php echo e(route('dpage2avan')); ?>">Gestion des Avancement</a></li>
            <li role="separator" class="divider"></li>
            
             
          </ul>
        </li>


        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Distinction <span class="caret"></span></a>
          <ul class="dropdown-menu"> 
            
             
           
            
           <li class="<?php echo e(Request::is('/dpage2dec') ? 'active' : null); ?>"><a href="<?php echo e(route('dpage2dec')); ?>">Gestion des Distinctions</a></li>
            <li role="separator" class="divider"></li>
            
             
          </ul>
        </li>
          


          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Affectations <span class="caret"></span></a>
          <ul class="dropdown-menu"> 
            
             
           
            
           <li class="<?php echo e(Request::is('/dpage2aff') ? 'active' : null); ?>"><a href="<?php echo e(route('dpage2aff')); ?>">Gestion des Affectations</a></li>
            <li role="separator" class="divider"></li>
            
             
          </ul>
        </li>




        

         <li class="dropdown">  
       <!-- <li class="dropdown-toggle"> -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gestion des Etats <span class="caret"></span></a>
          <ul class="dropdown-menu"> 
            
             
           
            
           <li class="<?php echo e(Request::is('/detachement3im') ? 'active' : null); ?>"><a href="<?php echo e(url('/detachement3im')); ?>">Détachement</a></li>
            <li role="separator" class="divider"></li>
            <li class="<?php echo e(Request::is('/retraiteim') ? 'active' : null); ?>"><a href="<?php echo e(url('/retraiteim')); ?>">Retraités</a></li>
             <li role="separator" class="divider"></li>
            
            <li role="separator" class="divider"></li>
            <li class="<?php echo e(Request::is('/dispositionim') ? 'active' : null); ?>"><a href="<?php echo e(url('/dispositionim')); ?>">Mise à Disposition( sortant )</a></li>
             <li role="separator" class="divider"></li>
            <li class="<?php echo e(Request::is('/dispositioneim') ? 'active' : null); ?>"><a href="<?php echo e(url('/dispositioneim')); ?>">Mise à Disposition( entrant )</a></li>
             <li role="separator" class="divider"></li>
            <li class="<?php echo e(Request::is('/disponibiliteim') ? 'active' : null); ?>"><a href="<?php echo e(url('/disponibiliteim')); ?>">Mise en disponibilité</a></li>
            <li role="separator" class="divider"></li>
           
             <li role="separator" class="divider"></li>
            <li class="<?php echo e(Request::is('/congeim') ? 'active' : null); ?>"><a href="<?php echo e(url('/congeim')); ?>">Congés</a></li>
             <li role="separator" class="divider"></li>
             <li class="<?php echo e(Request::is('/abscenceim') ? 'active' : null); ?>"><a href="<?php echo e(url('/abscenceim')); ?>">Abscences</a></li>
              <li role="separator" class="divider"></li>


              <li class="<?php echo e(Request::is('/dpage2avanim') ? 'active' : null); ?>"><a href="<?php echo e(route('dpage2avanim')); ?>">Avancement</a></li>
            <li role="separator" class="divider"></li>

             <li class="<?php echo e(Request::is('/dpage2decim') ? 'active' : null); ?>"><a href="<?php echo e(route('dpage2decim')); ?>"> Distinctions</a></li>
            <li role="separator" class="divider"></li>

              <li class="<?php echo e(Request::is('/dpage2affim') ? 'active' : null); ?>"><a href="<?php echo e(route('dpage2affim')); ?>"> Affectations</a></li>
               <li role="separator" class="divider"></li>

              <li class="<?php echo e(Request::is('/unicite') ? 'active' : null); ?>"><a href="<?php echo e(url('/unicite')); ?>">Unicité</a></li>

             
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Paramétrer <span class="caret"></span></a>
          <ul class="dropdown-menu"> 
            
         

           
            
           <li class="<?php echo e(Request::is('/dpage2avan') ? 'active' : null); ?>"><a href="<?php echo e(route('dpage2avan')); ?>">Gestion des Paramétrages</a></li>
            <li role="separator" class="divider"></li>
            
             
          </ul>
        </li>
            
             
          </ul>
        </li>
      </ul>







     






                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <?php if(Auth::guest()): ?>
                        <li><a href="<?php echo e(url('/login')); ?>">Login</a></li>
                        <li><a href="<?php echo e(url('/register')); ?>">Register</a></li>
                    <?php else: ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                            </a>
                            
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-btn fa-sign-out"></i>Se Déconnecter</a></li>


                   <li role="separator" class="divider"></li>
                                <li>
                                   <?php if(Auth::check()): ?>
                         <?php if(Auth::user()->role > 1 ): ?>
                         <a href="<?php echo e(url('/registe')); ?>"><i class="fa fa-btn fa-sign-out"></i>Créer Nouvel Utilisateur</a>
                       <?php endif; ?>  
                           <?php endif; ?></li>
                             </ul>


                           
                               

                            




                           

                          <!--  <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul> -->
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <?php echo $__env->yieldContent('content'); ?>

    <!-- JavaScripts -->
  <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    
-->
</body>
</html>
<?php /**PATH C:\xampp\htdocs\RECOP\RECOP\resources\views/app.blade.php ENDPATH**/ ?>