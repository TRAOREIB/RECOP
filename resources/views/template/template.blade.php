<!DOCTYPE html>
<html lang="zxx" class="no-js">
    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <link rel="shortcut icon" href="img/fav.png">
        <!-- Author Meta -->
        <meta name="author" content="colorlib">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <title>GALIAN</title>

        <!--
        CSS
        
        ============================================= -->
        <link rel="stylesheet" href="{{asset('css/linearicons.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">				
        <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">							
        <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">					
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
    </head>
    <body>
        <?php $idutilisateur=session("idutilisateur");$connecte=session("connecter"); ?>
        <header id="header">
            <div class="container main-menu">
                <div class="row align-items-center justify-content-between d-flex">
                    <div id="logo">
                        <a href="index.html"><img src="{{asset('img/armoirie.jpg')}}" alt="" width="80" title="" /></a>
                    </div>
                    <nav id="nav-menu-container">
                        <ul class="nav-menu">
                            <li><a href = "{{url('home')}}"><h5>ACCUEIL</h5></a></li>
                            @if(!isset($connecte))
                            <li><a href="{{route('candidat.index')}}"><h5>INSCRIPTION</h5></a></li>                       
                            @endif
                            <li><a href="{{url('documents')}}"><h5>DOCUMENTS</h5></a></li>
                            <li><a href="#"><h5>CONTACT</h5></a></li>
                            @if(isset($connecte))
                            <li><a href="{{url('password')}}"><h5>GESTION MOT DE PASSE</h5></a></li>
                            <li><a href="{{url('deconnecte')}}"><h5>DECONNEXION</h5></a></li>
                            @else
                              <li><a href="{{url('conindex')}}"><h5>CONNEXION</h5></a></li>
                            @endif
                           
                        </ul>
                    </nav><!-- #nav-menu-container -->		    		
                </div>
            </div>
        </header><!-- #header -->

        @yield('contenu')
        <!-- Start testimonial Area -->
        <section class="testimonial-area section-gap">
            <div class="container">


                <section class="">
                    <div class="container">
                        <div class="brand-wrap">
                            <div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
                                <div class="col single-brand">
                                    <a href="#"><img src="{{asset('img/rtb.jpg')}}" alt="" width="118" height="115" class="mx-auto"></a>
                                </div>
                                <div class="col single-brand">
                                    <a href="#"><img src="{{asset('img/sidwaya-bon-544-1.jpg')}}" alt="" width="83" height="57" class="mx-auto"></a>
                                </div>
                                <div class="col single-brand">
                                    <a href="#"><img src="{{asset('img/lonab.jpg')}}" alt="" width="129" height="123" class="mx-auto"></a>
                                </div>
                                <div class="col single-brand">
                                    <a href="#"><img src="{{asset('img/coris bank.jpg')}}" alt="" width="116" height="98" class="mx-auto"></a>
                                </div>
                                <div class="col single-brand">
                                    <a href="#"><img src="{{asset('img/orange.png')}}" alt="" width="117" height="128" class="mx-auto"></a>
                                </div>
                                <div class="col single-brand">
                                    <a href="#"><img src="{{asset('img/PNBF.jpg')}}" alt="" width="122" height="126" class="mx-auto"></a>
                                </div>
                                <div class="col single-brand">
                                    <a href="#"><img src="{{asset('img/air burkina.jpg')}}" alt="" width="117" height="112" class="mx-auto"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
              
                <footer class="footer-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-6 col-sm-6">
                                <div class="single-footer-widget">
                                    <br>
                                    <p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Copyright ©2020&nbsp; &nbsp;Tous droits réservés à la DSI MCRP&nbsp; &nbsp;</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>


                <!-- End footer Area -->		

                 <script src="js/vendor/jquery-2.2.4.min.js"></script>
                <script src="js/popper.min.js"></script>
                <script src="js/vendor/bootstrap.min.js"></script>			
                <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>-->			
                <!--<script src="js/easing.min.js"></script>-->			
                <!--<script src="js/hoverIntent.js"></script>-->
                <script src="js/superfish.min.js"></script>	
                <!--<script src="js/jquery.ajaxchimp.min.js"></script>-->
                <script src="js/jquery.magnific-popup.min.js"></script>	
                <!--<script src="js/jquery.tabs.min.js"></script>-->						
                <!--<script src="js/jquery.nice-select.min.js"></script>-->	
                <!--<script src="js/isotope.pkgd.min.js"></script>-->			
                <!--<script src="js/waypoints.min.js"></script>-->
                <!--<script src="js/jquery.counterup.min.js"></script>-->
                <script src="js/simple-skillbar.js"></script>							
                <script src="js/owl.carousel.min.js"></script>							
                <!--<script src="js/mail-script.js"></script>-->	
                <script src="js/main.js"></script>


                </body>
                </html>