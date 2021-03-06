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
        <title>Galian</title>

        <!--<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">--> 
        <!--
        CSS
        ============================================= -->
        <!--			<link rel="stylesheet" href="css/linearicons.css">
                                <link rel="stylesheet" href="css/font-awesome.min.css">-->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/jquery-ui.css">				
        <link rel="stylesheet" href="css/nice-select.css">							
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">					
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <?php $idutilisateur=session("idutilisateur");$connecte=session("connecter"); ?>
        <header id="header">
            <div class="container main-menu">
                <div class="row align-items-center justify-content-between d-flex">
                    <div id="logo">
                        <a href="#"><img src="<?php echo e(asset('img/armoirie.jpg')); ?>" alt="" width="80" title="" /></a>
                    </div>
                    <nav id="nav-menu-container">
                        <ul class="nav-menu">
                            <li><a href = "<?php echo e(url('home')); ?>"><h5>ACCUEIL</h5></a></li>
                            <?php if(!isset($connecte)): ?>
                            <li><a href="<?php echo e(route('candidat.index')); ?>"><h5>INSCRIPTION</h5></a></li>                       
                            <?php endif; ?>
                            <li><a href="<?php echo e(url('documents')); ?>"><h5>DOCUMENTS</h5></a></li>
                            <li><a href="#"><h5>CONTACT</h5></a></li> &nbsp;&nbsp;&nbsp;
                             <?php if(isset($connecte)): ?>
                            <li><a href="<?php echo e(url('deconnecte')); ?>"><h5>DECONNEXION</h5></a></li>
                            <?php else: ?>
                              <li><a href="<?php echo e(url('conindex')); ?>"><h5>CONNEXION</h5></a></li>
                            <?php endif; ?>
                        </ul>
                    </nav><!-- #nav-menu-container -->		    		
                </div>
            </div>
        </header><!-- #header -->

        <!-- start banner Area -->
        <section class="banner-area relative blog-home-banner" id="home">	
            <div class="overlay overlay-bg"></div>
            <div class="container">				
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="about-content blog-header-content col-sm-12">
                        <h1 class="text-white">
                            Inscription en Ligne au Concours "Prix Galian"				
                        </h1>	
                        <p class="text-white">
                            Concours pour magnifier l'excellence dans le monde des medias
                        </p>
                        <a  class="primary-btn" onclick="location.href = '<?php echo e(route('candidat.index')); ?>'">Inscrivez vous Ici</a>
                    </div>	
                </div>
            </div>
        </section>
        <!-- End banner Area -->	

        <!-- Start home-about Area -->
        <section class="home-about-area section-gap">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6 col-md-6 home-about-left">
                        <img class="img-fluid" src="img/laureats.JPG" alt="">
                    </div>
                    <div class="col-lg-5 col-md-6 home-about-right">
                        <h6>&nbsp;</h6>
                        <h1 class="text-uppercase">CONDITIONS DE PARTICIPATION</h1>
                        <p><strong>ARTICLE 1:</strong></p>
                        <p><strong>ARTICLE 2:</strong></p>
                        <p><strong>ARTICLE 3:</strong></p>
                        <p>&nbsp;</p>
                    </div>
                </div>
                <div class="row skillbar-wraps"></div>
            </div>	
        </section>
        <!-- End home-about Area -->	

        <!-- Start timeline Area --><!-- End timeline Area -->


        <!-- Start testimonial Area -->
        <section class="testimonial-area section-gap">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-70 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">LES SUPER GALIAN</h1>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="active-testimonial">
                        <div class="single-testimonial item d-flex flex-row">
                            <div class="thumb">
                                <img class="img-fluid" src="img/elements/gal17red.png" alt="">
                            </div>
                            <div class="desc">
                                <p><strong>??uvre pr??sent??e</strong> : << CEBNF, une ??cole qui sauve>></p>
                                <p><strong>Cat??gorie</strong> : Image </p>
                                <p><strong>Prix remport??s</strong> : 3 millions de FCFA (prix officiel du super GALIAN) </p>
                                <p> 2 millions de FCFA du pr??sident du Faso
                                    Parcelle de 375 m2  Ouaga 2000 offerte par la soci??t?? Nationale des     terrains urbains(SONATUR).
                                    . </p>
                                <h4>MATHIAS DRABO</h4>
                                <p>Super GALIAN 2017</p>
                            </div>
                        </div>
                        <div class="single-testimonial item d-flex flex-row">
                            <div class="thumb">
                                <img class="img-fluid" src="img/elements/supergalian2018.jpg" alt="">
                            </div>
                            <p>&nbsp;</p>
                            <p><strong>??uvre pr??sent??e&nbsp;:</strong> &lt;&lt; Universit?? Ouaga 1 Pr Joseph  Ki-Zerbo&nbsp;: ces ??tudiants qui jouent les corv??ables pour pouvoir tenir le  coup &gt;&gt;&nbsp;:<br>
                                &lt;&lt;Centre  de Laye&nbsp;: Une journ??e avec les mineurs en conflit avec la loi&gt;&gt;</p>
                            <p><br>
                                <strong>Cat??gorie&nbsp;</strong>: Langue fran??aise-presse ??crite</p>
                            <p><br>
                                <strong>Prix remport??s</strong>&nbsp;: 3 millions de FCFA (prix  officiel du super GALIAN)</p>
                            <p>1 villa ??conomique de  type F3 d&rsquo;une valeur de 14 millions 500 mille FCFA offerte par le promoteur  immobilier Abdoul Service International
                            </p>
                            <p>&nbsp; </p>
                            <h4>DABADI ZOUMBARA</h4>
                            <p>Super GALIAN 2018</p>
                        </div>

                        <div class="single-testimonial item d-flex flex-row">
                            <div class="thumb">
                                <img class="img-fluid" src="img/elements/galian2019.jpg" alt="">
                            </div>
                            <div class="desc">
                                <p><strong>??uvre pr??sent??e&nbsp;:</strong> ?? ??changeur du Nord : pour aller ?? Larl?? on monte ou on descend ??<br>
                                    ?? Maladies mentales dans la r??gion du Nord : sacerdoce fou des vagabonds de la charit?? ??<br>
                                    <strong>Cat??gorie&nbsp;</strong>: Langue fran??aise-presse ??crite<br>
                                    <strong>Prix remport??s</strong>&nbsp;: 3 millions de FCFA (prix  officiel du super GALIAN)</p>
                                1 villa  de 20 millions de FCFA offerte par la soci??t?? immobili??re PNBF
                                <h4>HUGUES RICHARD SAMA</h4>
                                <p>Super GALIAN 2019</p>
                            </div>
                        </div>
                        <!-- End testimonial Area -->			

                        <!-- Start brands Area -->		    </div>
                </div>
                <section class="brands-area">
                    <div class="container">
                        <div class="">
                            <div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
                                <div class="col single-brand">
                                    <a href="#"><img src="img/rtb.jpg" alt="" width="118" height="115" class="mx-auto"></a>
                                </div>
                                <div class="col single-brand">
                                    <a href="#"><img src="img/sidwaya-bon-544-1.jpg" alt="" width="83" height="57" class="mx-auto"></a>
                                </div>
                                <div class="col single-brand">
                                    <a href="#"><img src="img/lonab.jpg" alt="" width="129" height="123" class="mx-auto"></a>
                                </div>
                                <div class="col single-brand">
                                    <a href="#"><img src="img/coris bank.jpg" alt="" width="116" height="98" class="mx-auto"></a>
                                </div>
                                <div class="col single-brand">
                                    <a href="#"><img src="img/orange.png" alt="" width="117" height="128" class="mx-auto"></a>
                                </div>
                                <div class="col single-brand">
                                    <a href="#"><img src="img/PNBF.jpg" alt="" width="122" height="126" class="mx-auto"></a>
                                </div>
                                <div class="col single-brand">
                                    <a href="#"><img src="img/air burkina.jpg" alt="" width="117" height="112" class="mx-auto"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End brands Area -->	

                <!-- start footer Area -->
                <footer class="footer-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-6 col-sm-6">
                                <div class="single-footer-widget">
                                    <br>
                                    <p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Copyright ??2020&nbsp; &nbsp;Tous droits r??serv??s ?? la DSI MCRP&nbsp; &nbsp;</p>
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
                </html><?php /**PATH C:\xampp\htdocs\GALIAN\resources\views/template/home.blade.php ENDPATH**/ ?>