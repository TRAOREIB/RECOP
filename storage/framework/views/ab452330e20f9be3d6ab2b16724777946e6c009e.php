<?php $__env->startSection('content'); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('js/dataTables.min.js')); ?>"></script>
<link rel="stylesheet" href="<?php echo e(asset('css/dataTables.min.css')); ?>">
<?php $__env->stopSection(); ?>
<div class="row listetitreformgrand" style="">
    <div class="col-xs-12" style="">
        <h3 class="titreform">GESTION DE L'OBJET </h3>
        <div class="titrebarform" ></div>
    </div>
</div> 
<div class="divbutajoutgrand" style="margin-left: 120px">
    <a   href="<?php echo e(route('objet.create')); ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Nouveau </a>
</div>

<?php if(isset($message)): ?>
<div class="alert-success col-sm-4 offset-4"><label class="label-info" style="margin-left:70px"><b>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo e($message); ?></b></label></div>
<?php endif; ?>
<p></p>
<div class="row divtabgrand" style="">
    <div class="col-xs-9 offset-1" >
        <div class="ligneform " style="background-color: #EEE">
            <table class="table table-striped table-condensed" id="table" style="width:900px;margin-left:0px">
                <thead>
                    <tr style="background-color:#2a6496;color: #FFFFFF;">
                        <th>Numero Inventaire</th>
                        <th>Categorie</th>
                        <th>Nom</th>
                        <th>Nom Vernanculaire</th>
                        <th>Details</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>


                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0 ?>
                    <?php $__currentLoopData = $liste; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listobj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $i++ ?>
                    <tr >
                        <th><?php echo e($listobj->numero); ?></th>	
                        <th><?php echo e($listobj->categorie); ?></th>
                        <th><?php echo e($listobj->nom); ?></th>
                        <th><?php echo e($listobj->nomvernanc); ?></th>
                        <td title="Details">
                            <button class="btn btn-info btn-sm" type="button"  data-toggle="modal" data-target='#objet<?php echo e($i); ?>'> <i class="fas fa-list"></i> </button>                 

                            <div class="modal fade" id='objet<?php echo e($i); ?>'>
                                <div class="modal-dialog modal-lg" style="">
                                    <div class="modal-content" style="background-color : whitesmoke">
                                        <div class="modal-header col-sm-12">
                                            <h4 class="modal-title"><label for="produit" class="col-sm-12 control-label">INFORMATIONS DE L'OBJET</label></h4> 
                                            <div><img id="" width="50%" height="50%" src="<?php echo e(asset('/uploads/'.$listobj->photo)); ?>" /></div>
                                        </div>
                                        <div class="modal-body">     
                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left: 0px">Numero Inventaire</label></div>
                                                <div class="col-sm-7" style="background-color: #6cb2eb"><label class="label-info"><?php echo e($listobj->numero); ?></label></div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left: 0px">Nom</label></div>
                                                <div class="col-sm-7" style="background-color: #6cb2eb"><label class="label-info"><?php echo e($listobj->nom); ?></label></div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left: 0px">Nom Vernanculaire</label></div>
                                                <div class="col-sm-7" style="background-color: #6cb2eb"><label class="label-info"><?php echo e($listobj->nomvernanc); ?></label></div>
                                            </div>



                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left: 0px">Categorie</label></div>
                                                <div class="col-sm-7" style="background-color: #6cb2eb"><label class="label-info"> <?php echo e($listobj->categorie); ?></label></div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left: 0px">Description</label></div>
                                                <div class="col-sm-7" style="background-color: #6cb2eb"><label class="label-info"><?php echo e($listobj->description); ?></label></div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label-info" style="margin-left:0px">Groupe Ethnique</label></div>
                                                <div class="col-sm-7" style="background-color: #6cb2eb"><label class="label-info"><?php echo e($listobj->grpethnique); ?></label></div>
                                            </div>


                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left:0px">Usage</label></div>
                                                <div class="col-sm-7" style="background-color: #6cb2eb"><label class="label-info"><?php echo e($listobj->usage); ?></label></div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left:0px">Etat</label></div>
                                                <div class="col-sm-7" style="background-color: #6cb2eb"><label class="label-info"><?php echo e($listobj->etat); ?></label></div>

                                            </div>

                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left:0px">Localisation</label></div>
                                                <div class="col-sm-7" style="background-color: #6cb2eb"><label class="label-info"><?php echo e($listobj->localisation); ?></label></div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left: 0px">Position de l'Objet</label></div>
                                                <div class="col-sm-7" style="background-color: #6cb2eb"><label class="label-info"><?php echo e($listobj->position); ?></label></div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left:0px">Catalogues</label></div>
                                                <div class="col-sm-7" style="background-color: #6cb2eb"><label class="label-info"><?php echo e($listobj->catalogue); ?></label></div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left:0px">Observations</label></div>
                                                <div class="col-sm-7" style="background-color: #6cb2eb"><label class="label-info"><?php echo e($listobj->observation); ?></label></div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left:0px">Matière</label></div>
                                                <div class="col-sm-7" style="background-color: #6cb2eb"><label class="label-info"><?php echo e($listobj->matière); ?></label></div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left:0px">Technique</label></div>
                                                <div class="col-sm-7" style="background-color: #6cb2eb"><label class="label-info"><?php echo e($listobj->technique); ?></label></div>
                                            </div>
                                            
                                            <div id="acquisition">
                                                <div class="row form-group">
                                                    <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left:0px">Mode acquisition</label></div>
                                                    <div class="col-sm-7" style="background-color: #6cb2eb"><label class="label-info"><?php echo e($listobj->modeacquis); ?></label></div>
                                                </div>
                                                
                                                <?php $j=0; ?>
                                                <?php $__currentLoopData = $listemusee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $musee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php $j++;?>
                                                <?php if($listobj->idobjet==$musee->idobjet): ?>
                                                <div class="row form-group">
                                                    <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left:0px"><?php if($i==1): ?>Musée Proprietaire <?php else: ?> Musée de Depot <?php endif; ?></label></div>
                                                    <div class="col-sm-7" style="background-color: #6cb2eb"><label class="label-info"><?php echo e($musee->musee); ?></label></div>
                                                </div>
                                                <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php $j=0; ?>
                                               
                                            </div>
                                            
                                            <div id="documents">
                                                <?php $__currentLoopData = $listedocuments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $docs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($listobj->idobjet==$docs->idobjet): ?>
                                                <div class="row form-group">
                                                    <div class="col-sm-4" style="background-color: skyblue;margin-left: 15px"><label class="label" style="margin-left:0px">Documents</label></div>
                                                    <div class="col-sm-7" style="background-color: #6cb2eb"><label class="label-info"><a href="docs/<?php echo e($docs->libelle); ?>" target=""><?php echo e($docs->libelle); ?></a></label></div>
                                                </div>
                                                <?php endif; ?>
                                                
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </td>


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
                    </tr>



                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      

                </tbody>
            </table>

        </div>
    </div>
</div>
<!--  fin de la liste-->

<div class="modal" id="confirmationta">
    <div class="modal-dialog modal-sm">
        <div class="modal-content" style="background-color : whitesmoke">
            <div class="modal-body">
                <span class="glyphicon glyphicon-exclamation-sign" style="color: #f0ad4e"><label > Supprimer cet &eacutelement ? </label></span>
            </div>
            <div class="modal-footer">
                <a href="#"  class="btn btn-success" data-dismiss="modal"><span class="glyphicon glyphicon-ok-sign"></span> OUI</a>
                <a href="#"  class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-sign"></span> NON</a>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
    $('#table').DataTable();
    });

    $('#appui').click(function () {
    $(<?php echo e($i); ?>).modal();
    });

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sygem/resources/views/objet/liste.blade.php ENDPATH**/ ?>