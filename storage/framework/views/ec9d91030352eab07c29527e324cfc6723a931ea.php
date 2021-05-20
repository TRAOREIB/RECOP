
<?php $__env->startSection('content'); ?> 
  <!DOCTYPE html>
<html lang="en">
<head>
  <title>Gestion du Personnel</title>


  <style type="text/css">
    html, body {
      width: 1200px;
      margin: 0 auto ;
          }



          .pagination li {
            display: inline;
            float: left; }

            .pagination li a {
              background: #ddd ;
              padding-right: 10px;
              padding-left: 10px;
              text-decoration: none;

            }

            li.active span{
                background: #ddd ;
              padding-right: 10px;
              padding-left: 10px;
              text-decoration: none;
            } 



            li.disabled span{
                background: gray ;
              padding-right: 10px;
              padding-left: 10px;
              text-decoration: none;
            } 




            table {

                border-collapse: collapse;

            }

            table tr > td, tr >th {
                border: 1px solid #ddd ;
                padding: 12px;


            }

            .titre{
                background: #ddd ;
              padding-right: 10px;
              padding-left: 10px;
              text-decoration: none;
            } 


          

  </style>
  <meta charset="utf-8">
   <meta name="_token" content="<?php echo csrf_token(); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">


</head>
<body>
  
<form action="<?php echo e(url('searchconge')); ?>" method="get"> <?php echo e(csrf_field()); ?>


 <!--  <img src="https://automouv.fr/wp-content/uploads/2018/11/gestion-de-ressources-humaines.jpg" alt=""/>  -->

 
                        
                      <!--  <h3>Welcome</h3>  -->
                       
 <div class="col-md-12">
    <div class="form-group">
      <div class="row">
         <div class="col-md-12">
       <!--   <label for="from_date"><strong>Date début  et Date de fin</strong></label>  -->
     <div class="form-inline form-group">

     
     <label>Date de début</label>
    <input type="date" name="from_date" class="form-control">
  
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <!-- <label for="to_date"><strong>Date de fin</strong></label> -->
      <label>Date de fin</label>
     <input type="date" name="to_date" class="form-control">

    &nbsp;&nbsp;&nbsp; <span class="input-group-prepend">
      
      
      <button type="submit" class="btn btn-primary">Rechercher</button>
    </span>
     </div>
                   </div>
               </div> 
               </div>
       


               </div> 
    



<hr>
  </div></div> </form>
     <hr>
<!--  <form action="<?php echo e(url('search')); ?>" method="get">  <?php echo e(csrf_field()); ?>

  <div class="col-md-12">


    <div class="form-group">
      <div class="row">
         <div class="col-md-12">
      
     <div class="form-inline form-group">

        
     <label> Matricule</label>
    <input type="search" name="search" class="form-control">
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <span class="input-group-prepend">
      

      <button type="submit" class="btn btn-primary">Rechercher</button>
    </span>

                  </div> 
               </div>

       
               </div> 




  </div> </form>  -->

<!--<div class="container mt-3"> -->
 <!-- <div class="panel panel-default"></div>
  <form action="<?php echo e(url('search')); ?>" method="get">
  <div class="input-group">
    <input type="search" name="search" class="form-control">
    <span class="input-group-prepend">
      

      <button type="submit" class="btn btn-primary">Search</button>
    </span>




  </div> </form>-->

  <!--<div class="pannel-heading"> <button type="button" class="btn btn-info" id="add">New Employe</button></div>-->
  <!-- Button to Open the Modal -->
  <!--<div class="panel-body">-->
      
   
   
  
<a href="<?php echo e(url('cenr')); ?>" class="btn btn-primary a-btn-slide-text">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
        <span><strong>Ajouter </strong></span>            
    </a>
    <br>


 
      
    <!-- <button><h1><a href="<?php echo e(url('cenr')); ?>">Nouveau Congé  </a> </h1></button> -->

                  <h1 class="titre">Gestion des Informations</h1>  
      <table border="4" id="table_id" class="display"  >
      <thead>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            
            <th></th>
            <th></th>

      </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $liste; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$listobj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       
        <tr>
            <th><?php echo e($listobj->nom); ?></th>	
            <th><?php echo e($listobj->prenom); ?></th>
            <th><?php echo e($listobj->nommedia); ?></th>
            <th><?php echo e($listobj->created_at); ?></th>
   
            


            <td title="MODIFIER">
                <form method="GET" action="<?php echo e(route('objet.show', $listobj->idobjet)); ?>">
                    <?php echo e(method_field('EDIT')); ?>

                    <?php echo e(csrf_field()); ?>

                    <a ></a>
                    <button class="btn btn-warning btn-sm" type="submit" ><i class="fas fa-edit"></i></button>
                </form>                    
            </td>

            <td title="SUPPRIMER">
                <form method="POST" action="<?php echo e(route('objet.destroy', $listobj->idobjet)); ?>">
                    <?php echo e(method_field('DELETE')); ?>

                    <?php echo e(csrf_field()); ?>

                    <a ></a>
                    <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Vraiment terirer un objet ?')"><i class="fas fa-trash"></i></button>
                </form>                    
            </td>

            <td> <?php echo e($listobj->contenu); ?> </td>
        </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        
      </tbody>


    </table>




    
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

 <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>

  
  
<!--<hr>-->


  
<script type="text/javascript">
  $(document).ready( function () {
    $('#table_id').DataTable({

      dom: 'Bfrtip',

       buttons: [
        'copy','csv', 'excel', 'pdf' ,'print'
    ]


    });
} );



</script>
  
<hr>
 <!-- </div> -->

  <!-- <div class="pannel-heading"> <button type="button" class="btn btn-info" id="add" value="add">Nouveau conge</button></div> -->

 
<!--</div>-->

</body>


</html>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RECOP\RECOP\resources\views/liste2.blade.php ENDPATH**/ ?>