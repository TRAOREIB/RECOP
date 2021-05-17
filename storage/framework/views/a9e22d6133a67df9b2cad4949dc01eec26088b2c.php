<!DOCTYPE html>
<?php
if (session('log') == null) {
//header('Location: '.url('connexion')); exit();
}
?> 
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Sytèmes de gestion des musées">
    <title><?php echo $__env->yieldContent('titre'); ?></title>
    <meta charset="UTF-8">
    <script type="text/javascript" src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/jquery.mCustomScrollbar.concat.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/main.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/datatables.min.js')); ?>"></script>

    <link type="text/css" href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <!-- <link type="text/css" href="<?php echo e(asset('css/all.css')); ?>" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link type="text/css" href="<?php echo e(asset('css/jquery.mCustomScrollbar.min.css')); ?>" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/datatables.min.css')); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/sidebar-themes.css')); ?>">

    <link rel="shortcut icon" type="image/png" href="<?php echo e(asset('img/favicon.png')); ?>" />

    <?php echo $__env->yieldContent('script'); ?>

</head>

<body>
    <div class="page-wrapper default-theme sidebar-bg bg3 toggled">
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <!-- sidebar-brand  -->
                <div class="sidebar-item sidebar-brand">
                    <a href="<?php echo e(route('tableaudebord')); ?>">SYGEM</a>
                </div>
                <!-- sidebar-header  -->
                <div class="sidebar-item sidebar-header d-flex flex-nowrap">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded" src="<?php echo e(asset('img/user.jpg')); ?>" alt="User picture">
                    </div>
                    <div class="user-info">
                        <span class="user-name">Jhon
                            <strong>Smith</strong>
                        </span>
                        <span class="user-role">Administrator</span>
                        <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                        </span>
                    </div>
                </div>
                <!-- sidebar-menu  -->
                <div class=" sidebar-item sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>Menu Principal</span>
                        </li>
                        <li>
                            <a href="<?php echo e(route('tableaudebord')); ?>">
                                <i class="fa fa-tachometer-alt"></i>
                                <span class="menu-text">Tableau de bord</span>
                                <!-- <span class="badge badge-pill badge-warning">New</span> -->
                            </a>
                          
                        </li>
                        <li >
                            <a href="<?php echo e(route('objet.index')); ?>">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="menu-text">Gestion des objets</span>
                                <span class="badge badge-pill badge-danger"></span>
                            </a>
                            
                        </li>
                        
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-chart-line"></i>
                                <span class="menu-text">Statistiques</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li >
                                        <a href="<?php echo e(url('search',['id' => 1])); ?>">Par localisation</a>
                                    </li>
                                    <li >
                                        <a href="<?php echo e(url('search',['id' => 7])); ?>">Par état </a>
                                    </li>
                                    <li >
                                        <a href="<?php echo e(url('search',['id' => 8])); ?>">Par position </a>
                                    </li>
                                    <li >
                                        <a href="<?php echo e(url('search',['id' => 6])); ?>">Par mode d'acquisition </a>
                                    </li>
                                    <li >
                                        <a href="<?php echo e(url('search',['id' => 4])); ?>">Par dimensions </a>
                                    </li>
                                    <li >
                                        <a href="<?php echo e(url('search',['id' => 2])); ?>">Par typologie </a>
                                    </li>
                                    <li >
                                        <a href="<?php echo e(url('search',['id' => 3])); ?>">Par matière </a>
                                    </li>
                                    <li >
                                        <a href="<?php echo e(url('search',['id' => 5])); ?>">Par classification </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>
                        
                        <li class="header-menu">
                            <span>Paramétrages</span>
                        </li>
                        <li>
                            <a href="<?php echo e(route('users.index')); ?>">
                                <i class="fa fa-book"></i>
                                <span class="menu-text">Utilisateurs</span>
                                <span class="badge badge-pill badge-primary"></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('musee.index')); ?>">
                                <i class="fa fa-bell"></i>
                                <span class="menu-text">Musées</span>
                                <span class="badge badge-pill badge-primary">New</span>
                            </a>
                        </li>
                        
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-footer  -->
            <div class="sidebar-footer">
                <div class="dropdown">

                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bell"></i>
                        <span class="badge badge-pill badge-warning notification">3</span>
                    </a>
                    <div class="dropdown-menu notifications" aria-labelledby="dropdownMenuMessage">
                        <div class="notifications-header">
                            <i class="fa fa-bell"></i>
                            Notifications
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <div class="notification-content">
                                <div class="icon">
                                    <i class="fas fa-check text-success border border-success"></i>
                                </div>
                                <div class="content">
                                    <div class="notification-detail">Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. In totam explicabo</div>
                                    <div class="notification-time">
                                        6 minutes ago
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="notification-content">
                                <div class="icon">
                                    <i class="fas fa-exclamation text-info border border-info"></i>
                                </div>
                                <div class="content">
                                    <div class="notification-detail">Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. In totam explicabo</div>
                                    <div class="notification-time">
                                        Today
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="notification-content">
                                <div class="icon">
                                    <i class="fas fa-exclamation-triangle text-warning border border-warning"></i>
                                </div>
                                <div class="content">
                                    <div class="notification-detail">Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. In totam explicabo</div>
                                    <div class="notification-time">
                                        Yesterday
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-center" href="#">Voir toutes les notifications</a>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-envelope"></i>
                        <span class="badge badge-pill badge-success notification">7</span>
                    </a>
                    <div class="dropdown-menu messages" aria-labelledby="dropdownMenuMessage">
                        <div class="messages-header">
                            <i class="fa fa-envelope"></i>
                            Messages
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <div class="message-content">
                                <div class="pic">
                                    <img src="img/user.jpg" alt="">
                                </div>
                                <div class="content">
                                    <div class="message-title">
                                        <strong> Jhon doe</strong>
                                    </div>
                                    <div class="message-detail">Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. In totam explicabo</div>
                                </div>
                            </div>

                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="message-content">
                                <div class="pic">
                                    <img src="img/user.jpg" alt="">
                                </div>
                                <div class="content">
                                    <div class="message-title">
                                        <strong> Jhon doe</strong>
                                    </div>
                                    <div class="message-detail">Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. In totam explicabo</div>
                                </div>
                            </div>

                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="message-content">
                                <div class="pic">
                                    <img src="img/user.jpg" alt="">
                                </div>
                                <div class="content">
                                    <div class="message-title">
                                        <strong> Jhon doe</strong>
                                    </div>
                                    <div class="message-detail">Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. In totam explicabo</div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-center" href="#">Voir tous les messages</a>

                    </div>
                </div>
                <div class="dropdown">
                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-cog"></i>
                        <span class="badge-sonar"></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuMessage">
                        <a class="dropdown-item" href="#">Mon profil</a>
                        <a class="dropdown-item" href="#">Aide</a>
                        <a class="dropdown-item" href="#">Paramètres</a>
                    </div>
                </div>
                <div>
                    <a href="<?php echo e(route('logout')); ?>">
                        <i class="fa fa-power-off"></i>
                    </a>
                </div>
                
            </div>
        </nav>
        <!-- page-content  -->
        <main class="page-content pt-2">
            <div id="overlay" class="overlay"></div>
            <div class="container-fluid p-5">
                
                 <?php echo $__env->yieldContent('content'); ?>
                 <hr>
                <div class="row ">
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                          <div class="copyright text-center my-auto">
                            <span>Copyright &copy; NETFA-SYGEM 2020</span>
                          </div>
                        </div>
                      </footer>
                </div>
            </div>
        </main>
        <!-- page-content" -->
    </div>
    <!-- page-wrapper -->
    
</body>

</html><?php /**PATH /Applications/MAMP/htdocs/sygem/resources/views/template.blade.php ENDPATH**/ ?>