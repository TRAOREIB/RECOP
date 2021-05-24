<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Correspondant</title>

        <!-- Fonts -->
       <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">-->
        <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
        <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        
       
        <div class="container  col-sm-7" >






          
            <div class="card text-center">
                <div class="card-header">
                    <h3>ENREGISTRER UNE INFORMATION</h3>
                </div>
                <div class="card-body">




                    <form method="POST" action="<?php echo e(url('')); ?>">
                        <?php echo e(csrf_field()); ?>

                       
                            
                            <div class="row">
                                <div class="col-sm-2">Titre </div>
                                <div class="col-sm-7"><input type="text" class="form-control" name="titre" value=""></div>
                            </div><p>


                                 <div class="row">
                                <div class="col-sm-2"> Contenu</div>
                                <div class="col-sm-7"><textarea type="textarea" class="form-control" name="contenu" value=""></textarea></div> 
                                       </div><p>



    

                          
                             <div class="row ">
                                    <div class="col-sm-5"><input type="submit"  class="btn btn-primary" value="ajouter">  <input type="submit"  class="btn btn-primary" value="annuler">  </div>
                                   
                                    
                                </div>
                           
                    </form>



                </div>
            </div>




                </div>
               
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\RECOP\resources\views/form_ajout_information.blade.php ENDPATH**/ ?>