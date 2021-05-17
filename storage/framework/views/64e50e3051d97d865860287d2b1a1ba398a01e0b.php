
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />   
	<title>Recepisse</title>
<script src="<?php echo e(asset('js/dataTables.min.js')); ?>"></script>
<link rel="stylesheet" href="<?php echo e(asset('css/dataTables.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>">
</head>
<body>
    <div class="" style="margin-left: 13px">
    <div>
        <label style="font-family: fantasy">DIRECTION GENERALE DES MEDIAS</label>
    </div>
    <div>
        <label style="font-family: fantasy">CONCOURS PRIX GALIAN <?php echo date("Y"); ?></label>
    </div>
    
   </div>        
    
    <br><br>    
 
    <?php if(isset($listoeuvre)): ?>
    <?php $__currentLoopData = $listoeuvre; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class=" offset-1"><u><h3>Repertoire des Oeuvres de la Categorie &nbsp; <b> <?php echo e($cat->categorie); ?></b> &nbsp; - &nbsp;<b>Genre: <?php echo e($cat->genre); ?></b></h3></u>
    </div>
    <?php break; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    <br>
        <div class="row divtabgrand" style="">
            <div class="col-sm-12" >
                <div class="col-sm-12 ligneform " style="background-color:white">
                    <table class="table table-striped table-condensed" id="tableau">
                        <thead>
                            <?php $i=1; ?>
                            <tr style="background-color:#2a6496;color: #FFFFFF;">
                                <th>NUMERO</th>
                              
                                <th>NOM</th>	
                                <th>PRENOM</th>
                                <th>CONTACT</th>
                                <th>ORGANE</th>
                                <?php if(isset($listoeuvre)): ?>
                                <?php $__currentLoopData = $listoeuvre; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($list->categorie=='presse ecrite'): ?>
                                <th>TITRE (1)</th>
                                <th>THEME (1)</th>                           
                                <th>TITRE (2)</th>
                                <th>THEME (2)</th>  
                                <?php break; ?>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                                
                                <?php if(isset($listoeuvre)): ?>
                                <?php $__currentLoopData = $listoeuvre; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                              
                                <?php if($list->categorie=='presse en ligne'): ?>
                                <th>TITRE(1)</th>
                                <th>url(1)</th>                           
                                <th>TITRE(2)</th>
                                <th>url(2)</th>
                                <?php break; ?>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?> 
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(isset($listoeuvre)): ?>
                            <?php $__currentLoopData = $listoeuvre; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($i); ?></td>
                                	
                                <td><?php echo e($list->nomcandidat); ?></td>	
                                <td><?php echo e($list->prenomcandidat); ?></td>
                                <td><?php echo e($list->contact); ?></td>
                                <td><?php echo e($list->organe); ?></td>
                                <?php $i++;?>
                                <?php if($list->categorie=='presse ecrite'): ?>
                                <td><?php echo e($list->titrearticle1); ?></td>	
                                <td><?php echo e($list->themearticle1); ?></td>
                                <td><?php echo e($list->titrearticle2); ?></td>
                                <td><?php echo e($list->themearticle2); ?></td> 
                                <?php endif; ?>
                                <?php if($list->categorie=='presse en ligne'): ?>
                                <td><?php echo e($list->titrearticle1); ?></td>	
                                <td><?php echo e($list->url1); ?></td>
                                <td><?php echo e($list->titrearticle2); ?></td>
                                <td><?php echo e($list->url2); ?></td> 
                                <?php $i++;?>
                                <?php endif; ?>

                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>


        
        
       
    
  
  
</body>
</html><?php /**PATH C:\xampp\htdocs\GALIAN\resources\views/candidat/form_repertoire.blade.php ENDPATH**/ ?>