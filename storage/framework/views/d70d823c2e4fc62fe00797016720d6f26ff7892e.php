<?php $__env->startSection('contenu'); ?>


<script type="text/javascript" src="<?php echo e(asset('js/jquery.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/bootstrap.js')); ?>"></script>
<!--<script type="text/javascript" src="<?php echo e(asset('js/main.js')); ?>"></script>-->
<script type="text/javascript" src="<?php echo e(asset('js/datatables.min.js')); ?>"></script>

<link type="text/css" href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">

<link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/datatables.min.css')); ?>">
<!--<link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">-->



<div class="col-sm-5 offset-2" style="margin-top: 130px">
    <i> <h4 style="margin: 0px; padding-top: 0px; color: #0044cc; font-weight: normal">Repertoire des oeuvres</h4></i>
    <div style="background: #285e8e;margin-top:0px;height:10px"></div>
</div>

<br>
<?php if(isset($message)): ?>
<div class="alert alert-danger col-sm-4"><label class=""><?php echo e($message); ?></label></div>
<?php endif; ?>

<div class="card  col-sm-7 offset-1">
    <div class="card-header">Choix de la categorie</div>
    <form class="form-horizontal" role="form" method="post" action="<?php echo e(route('choixrepertoire')); ?>" enctype="multipart/form-data" >
        <?php echo e(csrf_field()); ?>      
        <br>
        <div class=" col-sm-12">
            <div class="row col-sm-9">
                <label class="offset-0">Choisir Categorie &nbsp;</label>  
                &nbsp;
                <select class="form-control col-sm-7 offset-1" name="categorie" id="categorie">
                    <option>Choisir</option>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($key); ?>"><?php echo e($cat); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>             
                </select>
            </div>
            <br>
            <div class="row col-sm-9">
                <label class="offset-0">Choisir Genre &nbsp;</label>  
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;              
                <select id="genre" name='genre' class="form-control col-sm-7 offset-1">
                </select>
            </div>           
        </div> 
        <br>  
        <div class="card-footer"> <div class="col-sm-1 offset-5"><input type="submit" class="btn btn-info" value="Rechercher"></div></div>
    </form>
</div>    
<br>

<br>
<?php if(isset($listoeuvre)): ?>
<?php if(empty($listoeuvre)): ?>
<?php $__currentLoopData = $listoeuvre; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="offset-4 alert alert-primary col-sm-5"><b><label>Repertoire des Oeuvres de la Categorie <?php echo e($cat->categorie); ?></label></b></div>
<?php break; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php endif; ?>

<div class="card col-sm-12 offset-0">
    <?php if(isset($listoeuvre)): ?>
    <?php if(empty($listoeuvre)): ?>
    <?php $__currentLoopData = $listoeuvre; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="row card-header">Repertoire des Oeuvres de la Categorie &nbsp; <b> <?php echo e($cat->categorie); ?></b> &nbsp; - &nbsp;<b>Genre: <?php echo e($cat->genre); ?></b>
        <?php break; ?>;
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <form method="get" action="<?php echo e(route('repertoireliste')); ?>">
            <?php echo e(csrf_field()); ?>   
            <div class="offset-1"><input type="submit" class="btn btn-warning" value="Telecharger Repertoire">
                <input type="hidden" value="<?php echo e($cat->categorie); ?>" name="categorie">
                <input type="hidden" value="<?php echo e($cat->idgenre); ?>" name="idgenre">
            </div>
        </form>
    </div>
    <?php endif; ?>
    <?php endif; ?>
    <div class="card-body">
        <div class="row divtabgrand" style="">
            <div class="col-sm-12" >
                <div class="col-sm-12 ligneform " style="background-color: #EEE">
                    <table class="table table-striped table-condensed" id="tableau">
                        <thead>
                            <tr style="background-color:#2a6496;color: #FFFFFF;">
                                <th>GENRE</th>
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
                                <th>Details</th>
                                <?php break; ?>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>

                                <?php $i = 0 ?>
                                <?php if(isset($listoeuvre)): ?>
                                <?php $__currentLoopData = $listoeuvre; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $i++; ?>
                                <?php if($list->categorie=='presse en ligne'): ?>
                                <th>TITRE(1)</th>
                                <th>url(1)</th>                           
                                <th>TITRE(2)</th>
                                <th>url(2)</th>
                                <th>Details</th>
                                <?php break; ?>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?> 

                            </tr>
                        </thead>
                        <tbody>
                            <?php if(isset($listoeuvre)): ?>
                            <?php $i = 0 ?>
                            <?php $__currentLoopData = $listoeuvre; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $i++; ?>
                            <tr>
                                <td><?php echo e($list->genre); ?></td>	
                                <td><?php echo e($list->nomcandidat); ?></td>	
                                <td><?php echo e($list->prenomcandidat); ?></td>
                                <td><?php echo e($list->contact); ?></td>
                                <td><?php echo e($list->organe); ?></td> 
                                <?php if($list->categorie=='presse ecrite'): ?>
                                <td><?php echo e($list->titrearticle1); ?></td>	
                                <td><?php echo e($list->themearticle1); ?></td>
                                <td><?php echo e($list->titrearticle2); ?></td>
                                <td><?php echo e($list->themearticle2); ?></td> 
                                <td title="details">
                                    <?php echo e(csrf_field()); ?>

                                    <a ></a>
                                    <button class="btn btn-primary" id="btn" type="button"  data-toggle="modal" data-target='#essai<?php echo e($i); ?>' ><i class="fa fa-edit"></i></button>
                                    <input type="hidden" value="<?php echo e($i); ?>" name="<?php echo e($i); ?><?php echo e($i); ?>">
                                </td>  
                        <div class="modal" id='essai<?php echo e($i); ?>'>
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" style="background-color : whitesmoke">

                                    <div class="modal-body">
                                        <div class="row col-sm-11" style="margin-left:20px">
                                            <div class="card col-sm-12" style="margin-left:0px;">

                                                <div class="card-header">Les documents du Candidat <?php echo e($list->nomcandidat); ?> <?php echo e($list->prenomcandidat); ?></div>

                                                <div class="card-body col-sm-12">
                                                    <p>
                                                    <div class="row form-group col-sm-12">
                                                        <div class="col-sm-6"> <label class="label" style="">Photo d'Identité</label></div>
                                                        <div class="col-sm-6"><label class=""  style="" ><a href='<?php echo e(asset("storage/docs/$list->photo")); ?>' target="blank">Telecharger</a></label></div>
                                                    </div>

                                                    <div class="row form-group col-sm-12">
                                                        <div class="col-sm-6"> <label class="label" style="">CV</label></div>
                                                        <div class="col-sm-6"><label class=""  style="" ><a href='<?php echo e(asset("storage/docs/$list->cv")); ?>' target="blank">Telecharger</a></label></div>
                                                    </div>

                                                    <div class="row form-group col-sm-12">
                                                        <div class="col-sm-6"> <label class="label" style="">Visa Media</label></div>
                                                        <div class="col-sm-6"><label class=""  style="" ><a href='<?php echo e(asset("storage/docs/$list->visamedia")); ?>' target="blank">Telecharger</a></label></div>
                                                    </div>

                                                    <div class="row form-group col-sm-12">
                                                        <div class="col-sm-6"> <label class="label" style="">Prémière oeuvre</label></div>
                                                        <div class="col-sm-6"><label class=""  style="" ><a href='<?php echo e(asset("storage/docs/$list->fichieroeuvre1")); ?>' target="blank">Telecharger</a></label></div>
                                                    </div>

                                                    <div class="row form-group col-sm-12">
                                                        <div class="col-sm-6"> <label class="label" style="">deuxième oeuvre</label></div>
                                                        <div class="col-sm-6"><label class=""  style="" ><a href='<?php echo e(asset("storage/docs/$list->fichieroeuvre2")); ?>' target="blank">Telecharger</a></label></div>
                                                    </div>

                                                </div>                                
                                            </div>                                           
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if($list->categorie=='presse en ligne'): ?>
                        <td><?php echo e($list->titrearticle1); ?></td>	
                        <td><?php echo e($list->url1); ?></td>
                        <td><?php echo e($list->titrearticle2); ?></td>
                        <td><?php echo e($list->url2); ?></td> 
                        <td title="details">
                            <?php echo e(csrf_field()); ?>

                            <a ></a>
                            <button class="btn btn-primary" id="btn" type="button"  data-toggle="modal" data-target='#essai<?php echo e($i); ?>' ><i class="fa fa-edit"></i></button>
                            <input type="hidden" value="<?php echo e($i); ?>" name="<?php echo e($i); ?><?php echo e($i); ?>">
                        </td>  
                        <div class="modal" id='essai<?php echo e($i); ?>'>
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" style="background-color : whitesmoke">

                                    <div class="modal-body">
                                        <div class="row col-sm-11" style="margin-left:20px">
                                            <div class="card col-sm-12" style="margin-left:0px;">

                                                <div class="card-header">Les documents du Candidat <?php echo e($list->nomcandidat); ?> <?php echo e($list->prenomcandidat); ?></div>

                                                <div class="card-body col-sm-12">
                                                    <p>
                                                    <div class="row form-group col-sm-12">
                                                        <div class="col-sm-6"> <label class="label" style="">Photo d'Identité</label></div>
                                                        <div class="col-sm-6"><label class=""  style="" ><a href='<?php echo e(asset("storage/docs/$list->photo")); ?>' target="blank">Telecharger</a></label></div>
                                                    </div>

                                                    <div class="row form-group col-sm-12">
                                                        <div class="col-sm-6"> <label class="label" style="">CV</label></div>
                                                        <div class="col-sm-6"><label class=""  style="" ><a href='<?php echo e(asset("storage/docs/$list->cv")); ?>' target="blank">Telecharger</a></label></div>
                                                    </div>

                                                    <div class="row form-group col-sm-12">
                                                        <div class="col-sm-6"> <label class="label" style="">Visa Media</label></div>
                                                        <div class="col-sm-6"><label class=""  style="" ><a href='<?php echo e(asset("storage/docs/$list->visamedia")); ?>' target="blank">Telecharger</a></label></div>
                                                    </div>

                                                    <div class="row form-group col-sm-12">
                                                        <div class="col-sm-6"> <label class="label" style="">Prémière oeuvre</label></div>
                                                        <div class="col-sm-6"><label class=""  style="" ><a href="<?php echo e($list->url1); ?>" target="blank"><?php echo e($list->url1); ?></a></label></div>
                                                    </div>

                                                    <div class="row form-group col-sm-12">
                                                        <div class="col-sm-6"> <label class="label" style="">deuxième oeuvre</label></div>
                                                        <div class="col-sm-6"><label class=""  style="" ><a href="<?php echo e($list->url2); ?>" target="blank"><?php echo e($list->url2); ?></a></label></div>
                                                    </div>

                                                </div>                                
                                            </div>                                           
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <?php endif; ?>

                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
</div>




<script>
    $(document).ready(function () {
    $("#tableau").DataTable();
    });</script>

<script type="text/javascript">
    $('#categorie').change(function () {
    var categorieID = $(this).val();
    if (categorieID) {
    $.ajax({
    type: "GET",
            url: "<?php echo e(url('getgenre')); ?>?idcategorie=" + categorieID,
            success: function (res) {
            if (res) {
            $("#genre").empty();
            $("#genre").append('<option>Tous</option>');
            $.each(res, function (key, value) {
            $("#genre").append('<option value="' + key + '">' + value + '</option>');
            });
            } else {
            $("#genre").empty();
            }
            }
    });
    } else {
    $("#genre").empty();
    }
    });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.administrateur', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GALIAN\resources\views/candidat/form_administrateur.blade.php ENDPATH**/ ?>