<?php $__env->startSection('content'); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('js/dataTables.min.js')); ?>"></script>
<!--<script src="<?php echo e(asset('js/dynamique_ajout.js')); ?>"></script>-->
<script src="<?php echo e(asset('js/dtable.js')); ?>"></script>
<link rel="stylesheet" href="<?php echo e(asset('css/dataTables.min.css')); ?>">
<?php $__env->stopSection(); ?>
<div class="row listetitreformgrand" style="">
    <div class="col-xs-12" style="">
        <h3 class="titreform">GESTION DE L'OBJET </h3>
        <div class="titrebarform" ></div>
    </div>
</div> 
<br>


<ul class="nav nav-tabs">
    <li class="nav-item">
        <a href="#home" class="nav-link active" data-toggle="tab">LOCALISATION</a>
    </li>
    <li class="nav-item">
        <a href="#profile" class="nav-link" data-toggle="tab">OBJET</a>
    </li>
    <li class="nav-item">
        <a href="#dimensions" class="nav-link" data-toggle="tab">DIMENSIONS</a>
    </li>
    <li class="nav-item">
        <a href="#messages" class="nav-link" data-toggle="tab">DOSSIER DOCUMENTAIRE</a>
    </li>
    <li class="nav-item">
        <a href="#catalogue" class="nav-link" data-toggle="tab">CATALOGUE</a>

    </li>
    <li class="nav-item">
        <a href="#images" class="nav-link" data-toggle="tab">IMAGES</a>
    </li>
    <li class="nav-item">
        <a href="#audiovisuel" class="nav-link" data-toggle="tab">AUDIO VISUEL</a>
    </li>
</ul>
<p></p>

<?php if(session()->has('success')): ?>
<div class="container col-sm-7">
    <div class="alert alert-danger">
        <b> <?php echo e(session()->get('success')); ?></b>
    </div>
</div>
<?php endif; ?>

<?php if(isset($message)): ?>
<div class="alert-success col-sm-4 offset-4"><label class="label-info" style="margin-left:70px"><b>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo e($message); ?></b></label></div>
<?php endif; ?>
<p></p>
<form class="col-sm-12" method="post" action="<?php echo e(url('objet',['id' => $listobjet->idobjet])); ?>" enctype="multipart/form-data">
    <?php echo e(method_field('PUT')); ?>

    <?php echo e(csrf_field()); ?>

    <div class="tab-content">
        <div class="tab-pane fade show active" id="home">

            <?php if($village!=null): ?>
            <?php $__currentLoopData = $village; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $monvillage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <label class="label-info"><b>LOCALISATION ACTUELLE</b></label>
            <div class="row">
                <div class="label-info col-sm-3" style="background-color: chartreuse"><b>Ville</b></div>
                <div class="col-sm-4" style="background-color: chartreuse"></div>
            </div>
            <div class="row">
                <div class="label-info col-sm-3" style="background-color: #218BC3"><b>Village</b></div>
                <div class="col-sm-4" style="background-color: #218BC3"><?php echo e($monvillage->village); ?></div>
            </div>
            <div class="row">
                <div class="label-info col-sm-3" style="background-color: threedshadow"><b>Commune</b></div>
                <div class="col-sm-4" style="background-color: threedshadow"><?php echo e($monvillage->commune); ?></div>
            </div>
            <div class="row">
                <div class="label-info col-sm-3" style="background-color: tan"><b>Province</b></div>
                <div class="col-sm-4" style="background-color: tan"><?php echo e($monvillage->province); ?></div>
            </div>
            <div class="row">
                <div class="label-info col-sm-3" style="background-color: #f0ad4e"><b>Region</b></div>
                <div class="col-sm-4" style="background-color: #f0ad4e"><?php echo e($monvillage->region); ?></div>
            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>

            <?php if($ville!=null): ?>
            <?php $__currentLoopData = $ville; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maville): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <label class="label-info"><b>LOCALISATION ACTUELLE</b></label>
            <div class="row">
                <div class="label-info col-sm-3" style="background-color: chartreuse"><b>Ville</b></div>
                <div class="col-sm-4" style="background-color: chartreuse"><?php echo e($maville->ville); ?></div>
            </div>
            <div class="row">
                <div class="label-info col-sm-3" style="background-color: #218BC3"><b>Village</b></div>
                <div class="col-sm-4" style="background-color: #218BC3"></div>
            </div>
            <div class="row">
                <div class="label-info col-sm-3" style="background-color: threedshadow"><b>Commune</b></div>
                <div class="col-sm-4" style="background-color: threedshadow"><?php echo e($maville->commune); ?></div>
            </div>
            <div class="row">
                <div class="label-info col-sm-3" style="background-color: tan"><b>Province</b></div>
                <div class="col-sm-4" style="background-color: tan"><?php echo e($maville->province); ?></div>
            </div>
            <div class="row">
                <div class="label-info col-sm-3" style="background-color: #f0ad4e"><b>Region</b></div>
                <div class="col-sm-4" style="background-color: #f0ad4e"><?php echo e($maville->region); ?></div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        <p>
        <div class="row col-sm-12">

            <div class="">
                <div id="accordion" class="col-sm-12">
                    <div class="card ">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapseOne">MODIFIER LA LOCALISATION</a>
                        </div>
                        <div id="collapseOne" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row form-group">
                                    <label class="label" >Region</label>
                                    <select id="region" name='region' class="form-control" >
                                        <option selected="selected">Choisir la region</option>
                                        <<?php $__currentLoopData = $listregions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $reg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($key); ?>"><?php echo e($reg); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="row form-group">
                                    <label class="label">Province</label>
                                    <select id="province" name='province' class="form-control">
                                    </select>
                                </div>
                                <div class="row form-group col-sm-6">
                                    <label class="label">Type Commune</label>
                                    <select id="type" name='type' class="form-control">
                                        <option selected="selected">Selectionner</option>
                                        <option>RURALE</option>
                                        <option>URBAINE</option>
                                    </select>
                                </div>
                                <div class="row form-group">
                                    <label class="label">Commune</label>
                                    <select id="commune" name='commune' class="form-control">
                                    </select>
                                </div>

                                <div class="row form-group">
                                    <label class="label">Ville</label>
                                    <select id="ville" name='ville' class="form-control">
                                    </select>
                                </div>
                                <div class="row form-group">
                                    <label class="label">Village</label>
                                    <select id="village" name='village' class="form-control">
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p></p>
                <div class="">
                    <div id="accordionInter" class="col-sm-12">
                        <div class="card ">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapseTwo">MODIFIER LA LOCALISATION INETRNATIONALE</a>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordionInter">
                                <div class="card-body">
                                    <div class="row form-group">
                                        <label class="label" >Pays</label>
                                        <select id="region" name='region' class="form-control" >
                                            <?php $__currentLoopData = $listePays; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pays): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($listobjet->pays==$pays->name): ?>
                                            <option value="<?php echo e($pays->name); ?>" selectd='selected'><?php echo e($pays->name); ?></option>
                                            <?php else: ?>
                                            <option value="<?php echo e($pays->name); ?>"><?php echo e($pays->name); ?></option>
                                            <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>      

            <div id="image_carte" class="col-sm-6 offset-1">
                <img src="<?php echo e(asset('images/carte.png')); ?>" style="width: 600px">
            </div>
        </div>




    </div>


</p>

<div class="tab-pane fade" id="profile">
    <p>

    <div class="row col-sm-12"> 
        <div id="panneau1" class="col-sm-6">  
            <div class="card">

                <div class="card-header">RENSEIGNER LES INFORMATIONS</div>
                <p></p>

                <div class="row form-group">
                    <label class="label" style="margin-left: 40px">Numero Inventaire</label>
                    <label class="label" style="margin-left: 0px;color: red"><b>&nbsp;*</b></label>
                    <input class="form-control col-sm-6" type='text' value="<?php echo e($listobjet->numero); ?>" name="numinv" style="margin-left: 10px" >
                </div>

                <div class="row form-group">
                    <label class="label" style="margin-left: 130px">Photo</label>
                    <input class="form-control col-sm-6" type='file' value="<?php echo e($listobjet->photo); ?>" name="photo" style="margin-left: 10px" >
                    <input type="hidden" value="<?php echo e($listobjet->photo); ?>" name="photoanc">
                </div>
                <label class="label-info text-info offset-4"><?php echo e($listobjet->photo); ?></label>

                <div class="row form-group">
                    <label class="label" style="margin-left: 140px">Nom</label>
                    <label class="label" style="margin-left: 0px;color: red"><b>&nbsp;*</b></label>
                    <input class="form-control col-sm-6" type='text' value="<?php echo e($listobjet->nom); ?>" name="nom" style="margin-left: 10px" >
                </div>

                <div class="row form-group">
                    <label class="label" style="margin-left: 40px">Nom Vernanculaire</label>
                    <label class="label" style="margin-left: 0px;color: red"><b>&nbsp;*</b></label>
                    <input class="col-sm-6 form-control" type='text' value="<?php echo e($listobjet->nomvernanc); ?>" name="nonvern" style="margin-left: 10px">
                </div>


                <div class="row form-group">
                    <label class="label" style="margin-left: 80px">Classification</label>
                    <label class="label" style="margin-left: 0px;color: red"><b>&nbsp;*</b></label>
                    <select name="classification" class="form-control col-sm-7" style="margin-left: 10px">

                        <?php $__currentLoopData = $listeclassif; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $classif): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($classif->idclassification == $idclassif): ?>  
                        <option value="<?php echo e($classif->idclassification); ?>" selected=selected"> <?php echo e($classif->libelle); ?> </option>
                        <?php else: ?>
                        <option value="<?php echo e($classif->idclassification); ?>"> <?php echo e($classif->libelle); ?> </option>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="row form-group">
                    <label class="label" style="margin-left: 110px">Datation</label>
                    <input class="col-sm-6 form-control" type='text' value='<?php echo e($listobjet->datation); ?>' name="datation" style="margin-left: 10px">
                </div>

                <div class="row form-group">
                    <label class="label" style="margin-left: 70px">Nom Collecteur</label>
                    <input class="col-sm-6 form-control" type='text' value="<?php echo e($listobjet->collecteur); ?>" name="collecteur" style="margin-left: 10px">
                </div>

                <div class="row form-group">
                    <label class="label" style="margin-left: 70px">Nom Detenteur</label>
                    <input class="col-sm-6 form-control" type='text' value="<?php echo e($listobjet->detenteur); ?>" name="detenteur" style="margin-left: 10px">
                </div>

                <div class="row form-group">
                    <label class="label" style="margin-left: 30px">Provenance Inconnue</label>
                    <select id="typematiere" name='provenance' class="form-control col-sm-6" style="margin-left: 10px" >

                        <?php if($listobjet->provenance =='oui'): ?> 
                        <option value="oui" selected="selected">Oui</option>
                        <?php else: ?>
                        <option value="oui">Oui</option>
                        <?php endif; ?>   

                        <?php if($listobjet->provenance =='non'): ?> 
                        <option value="non" selected="selected">Non</option>
                        <?php else: ?>
                        <option value="non">Non</option>
                        <?php endif; ?>   
                    </select>
                </div>

                <div class="row form-group">
                    <label class="label" style="margin-left: 95px">Description</label>
                    <input class="col-sm-6 form-control" type='text' value="<?php echo e($listobjet->description); ?>" name="description" style="margin-left: 10px">
                </div>



                <div class="row form-group">
                    <label class="label" style="margin-left:56px">Groupe Ethnique</label>
                    <select id="grpethnique" name='grpethnique' class="form-control col-sm-5" style="margin-left: 10px" >
                        <?php $__currentLoopData = $listeGrp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($listobjet->grpethnique==$grp->libelle): ?>
                        <option value="<?php echo e($grp->libelle); ?>" selectd='selected'><?php echo e($grp->libelle); ?></option>
                        <?php else: ?>
                        <option value="<?php echo e($grp->libelle); ?>"><?php echo e($grp->libelle); ?></option>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>



                <div class="row form-group">
                    <label class="label" style="margin-left:130px">Usage</label>
                    <input class="col-sm-6 form-control" type='text' value="<?php echo e($listobjet->usage); ?>" name="usage" style="margin-left: 10px">
                </div>



                <div class="row form-group">
                    <label class="label" style="margin-left:150px">Etat</label> &nbsp;&nbsp;
                    <select class="form-control col-sm-6" name="etat">
                        <option <?php
                        if ($listobjet->etat == "Bon") {
                            echo "selected=selected";
                        }
                        ?> >Bon</option>
                        <option <?php
                        if ($listobjet->etat == "Mauvais") {
                            echo "selected=selected";
                        }
                        ?> >Mauvais</option>
                        <option <?php
                        if ($listobjet->etat == "Declassé") {
                            echo "selected=selected";
                        }
                        ?> >Declassé</option>
                        <option>Restaurer</option>
                    </select>
                </div>

                <div class="row form-group">
                    <label class="label" style="margin-left:95px">Localisation</label>
                    <label class="label" style="margin-left: 0px;color: red"><b>&nbsp;*</b></label>
                    <input class="col-sm-6 form-control" type='text' value="<?php echo e($listobjet->localisation); ?>" name="localisation" style="margin-left: 10px">
                </div>

                <div class="row form-group">
                    <label class="label" style="margin-left:53px">Position de l'Objet</label>&nbsp;&nbsp;
                    <select class="form-control col-sm-6" name="position">
                        <option>Réserve</option>
                        <option>Exposition</option>
                        <option>Pret</option>
                        <option>Volé</option>
                        <option>Traitement</option>
                    </select>
                </div>

                <div class="row form-group">
                    <label class="label" style="margin-left:87px">Observations</label>
                    <input class="col-sm-7 form-control" type='textarea' value="<?php echo e($listobjet->observation); ?>" name="observation" style="margin-left: 10px">
                </div>




                <div class="card-footer"></div>
            </div>  
        </div>

        <div id="panneau2" class="row col-sm-6">

            <div class="card col-sm-12" style="height: 200px">
                <div class="card-header">IMAGE</div>
                <div class="card-body">
                    <img id="" width="50%" height="50%" src="<?php echo e(asset('/storage/uploads/'.$listobjet->photo)); ?>" />
                </div>

            </div>


            <div class="card col-sm-12" style="">
                <div class="card-header">ACQUISITION</div>
                <div class="card-body">
                    <div class="row form-group">
                        <label class="label" style="margin-left: 35px">Mode Acquisition</label>&nbsp;&nbsp;
                        <select name="modeacquis" class="form-control col-sm-7">

                            <?php $__currentLoopData = $listemode; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lmode): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($lmode->idmodeacquis); ?>"><?php echo e($lmode->libelle); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                        </select>
                    </div>
                    <div class="row form-group">
                        <label class="label" style="margin-left:45px">Musee de Depot</label>&nbsp;&nbsp;
                        <select name="museedepot" class="form-control col-sm-7">
                            <?php $__currentLoopData = $listmusee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $musee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($musee->nom == $museedepot): ?>  
                            <option value="<?php echo e($musee->idmusee); ?>" selected="selected"> <?php echo e($musee->nom); ?> </option>
                            <?php else: ?>
                            <option value="<?php echo e($musee->idmusee); ?>"> <?php echo e($musee->nom); ?> </option>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>



                    <div class="row form-group">
                        <label class="label" style="margin-left:30px">Musee Proprietaire</label>&nbsp;&nbsp;
                        <select name="museeprop" class="form-control col-sm-7">
                            <?php $__currentLoopData = $listmusee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $musee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($musee->nom == $museeproprietaire): ?>  
                            <option value="<?php echo e($musee->idmusee); ?>" selected=selected"> <?php echo e($musee->nom); ?> </option>
                            <?php else: ?>
                            <option value="<?php echo e($musee->idmusee); ?>"> <?php echo e($musee->nom); ?> </option>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                </div>

            </div>

            <div class="card col-sm-12" style="">
                <div class="card-header">CARACTERISTIQUES</div>
                <div class="card-body">

                    <div class="row" style="margin-left: 65px">
                        <label class="label">Poids</label>
                        <div class="row">
                            <input type="number" step="0.01" name="poids" value="<?php echo e($listobjet->poids); ?>" class="form-control offset-2 col-sm-5">
                            <label class="label" style="margin-left: 10px">kg</label>
                        </div>                      

                    </div>
                    <p>

                    <div class="row form-group">
                        <label class="label" style="margin-left: 28px">Type de Matière &nbsp;</label>
                        <select id="typematiere" name='typematiere' class="form-control col-sm-6" >
                            <option selected="selected">Choisir</option>
                            <?php $__currentLoopData = $listetype; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $reg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($key == $typeobjet): ?> 
                            <option value="<?php echo e($key); ?>" selected="selected"><?php echo e($reg); ?></option>
                            <?php else: ?>
                            <option value="<?php echo e($key); ?>"><?php echo e($reg); ?></option>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="row form-group">
                        <label class="label" style="margin-left: 87px">Matière</label>
                        <select id="matiere" name="matiere" class="form-control col-sm-6" style="margin-left: 10px">
                            <?php $__currentLoopData = $matiereobj; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $matobjet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($matobjet->idmatiere); ?>" selected="selected"><?php echo e($matobjet->libelle); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>

                    </div>

                    <div class="row form-group">
                        <label class="label" style="margin-left: 60px">Techniques</label>
                        <input class="col-sm-7 form-control" type='text' value="<?php echo e($listobjet->technique); ?>" name="technique" style="margin-left: 10px">
                    </div>

                </div>

            </div>

        </div>
    </div>

    </p>
</div>

<div class="tab-pane fade" id="messages">
    <p>
    <div class="card col-sm-8" style="">
        <div class="card-header">DOSSIERS</div>

        <div class="card-body">
            <div>
                <?php $i = 0; ?>
                <?php $__currentLoopData = $documentation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $i++; ?>
                <div class="row">
                    <div class="form-control col-sm-10"><label class="label"><?php echo e($doc->libelle); ?></label>
                        <b> (cocher pour Supprimer) &nbsp;</b><input type="checkbox" value="<?php echo e($doc->iddocumentation); ?>" name="documentation<?php echo e($i); ?>">
                    </div>
                    <input type="hidden" value="<?php echo e($doc->libelle); ?>" name="docval<?php echo e($i); ?>">
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <p>
            <div class="form-control-file">
                <table class="dTable col-sm-12" id="tab">
                    <thead>
                        <tr>
                            <td>
                                <input type="button" class="btn btn-primary" onclick="addLigne(this, 'nbdocument'); return false;" value="Ajouter dossier">
                            </td>
                        </tr>
                    <div></div>
                    </thead>

                    <tbody>
                        <tr>    
                            <td> <input type="file" class="form-control" name="document[]"></td>
                            <td><input type="button" class="form-control btn-info" value="Supprimer" onclick="delLigne(this, 'nbdocument'); return false;"></td>
                        </tr>
                    </tbody>
                    <input type="hidden" value="1" name="nbdocument" id="nbdocument">
                </table>
            </div>
        </div>

    </div>

    </p>
</div>

<div class="tab-pane fade" id="catalogue">
    <p>
    <div class="card col-sm-8" style="">
        <div class="card-header">CATALOGUES</div>
        <div class="card-body">
            <div>
                <?php $i = 0; ?>
                <?php $__currentLoopData = $catalogue; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $i++; ?>
                <div class="row">
                    <div class="form-control col-sm-10"><label class="label"><?php echo e($cat->libelle); ?></label>
                        <b> (cocher pour Supprimer) &nbsp;</b><input type="checkbox" value="<?php echo e($cat->idcatalogue); ?>" name="catalogue<?php echo e($i); ?>">
                    </div>
                    <input type="hidden" value="<?php echo e($cat->libelle); ?>" name="catalogueval<?php echo e($i); ?>">
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <p>
            <p>

            <table class="dTable col-sm-12" id="tab">
                <thead>
                    <tr>
                        <td>
                            <input type="button" class="btn btn-primary" onclick="addLigne(this, 'nbcatalogue'); return false;" value="Ajouter catalogue">
                        </td>
                    </tr>
                <div></div>
                </thead>

                <tbody>
                    <tr>    
                        <td> <input type="file" class="form-control" name="catalogue[]"></td>
                        <td><input type="button" class="form-control btn-info" value="Supprimer" onclick="delLigne(this, 'nbcatalogue'); return false;"></td>
                    </tr>
                </tbody>
                <input type="hidden" value="1" name="nbcatalogue" id="nbcatalogue">
            </table>
        </div>

    </div>
</div>

<div class="tab-pane fade" id="images">
    <p>
    <div class="card col-sm-8" style="">
        <div class="card-header">IMAGES</div>
        <div class="card-body">
            <div>
                <?php $i = 0; ?>
                <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $i++; ?>
                <div class="row">
                    <div class="form-control col-sm-10"><label class="label"><?php echo e($img->libelle); ?></label>
                        <b> (cocher pour Supprimer) &nbsp;</b><input type="checkbox" value="<?php echo e($img->idimage); ?>" name="image<?php echo e($i); ?>">
                    </div>
                    <input type="hidden" value="<?php echo e($img->libelle); ?>" name="imageval<?php echo e($i); ?>">
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <p>
            <p>    

            <table class="dTable col-sm-12" id="tab">
                <thead>
                    <tr>
                        <td>
                            <input type="button" class="btn btn-primary" onclick="addLigne(this, 'nbimage'); return false;" value="Ajouter Images">
                        </td>
                    </tr>
                <div></div>
                </thead>

                <tbody>
                    <tr>    
                        <td> <input type="file" class="form-control" name="image[]"></td>
                        <td><input type="button" class="form-control btn-info" value="Supprimer" onclick="delLigne(this, 'nbimage'); return false;"></td>
                    </tr>
                </tbody>
                <input type="hidden" value="1" name="nbimage" id="nbimage">
            </table>
        </div>

    </div>
</div>

<div class="tab-pane fade" id="audiovisuel">
    <p>
    <div class="card col-sm-8" style="">
        <div class="card-header">AUDIO VISUEL</div>
        <div class="card-body">
            <div>
                <?php $i = 0; ?>
                <?php $__currentLoopData = $audiovisuel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $audiovi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $i++; ?>
                <div class="row">
                    <div class="form-control col-sm-10"><label class="label"><?php echo e($audiovi->libelle); ?></label>
                        <b> (cocher pour Supprimer) &nbsp;</b><input type="checkbox" value="<?php echo e($audiovi->idaudiovisuel); ?>" name="audiovisuel<?php echo e($i); ?>">
                    </div>
                    <input type="hidden" value="<?php echo e($audiovi->libelle); ?>" name="audiovisuelval<?php echo e($i); ?>">
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <p>
            <p>    

            <table class="dTable col-sm-12" id="tab">
                <thead>
                    <tr>
                        <td>
                            <input type="button" class="btn btn-primary" onclick="addLigne(this, 'nbaudiovisuel'); return false;" value="Ajouter Audio/Video">
                        </td>
                    </tr>
                <div></div>
                </thead>

                <tbody>
                    <tr>    
                        <td> <input type="file" class="form-control" name="audiovisuel[]"></td>
                        <td><input type="button" class="form-control btn-info" value="Supprimer" onclick="delLigne(this, 'nbaudiovisuel'); return false;"></td>
                    </tr>
                </tbody>
                <input type="hidden" value="1" name="nbaudiovisuel" id="nbaudiovisuel">
            </table>
        </div>

    </div>
</div>

<div class="tab-pane fade" id="dimensions">
    <p>
    <div class="card col-sm-10" style="">
        <div class="card-header">DIMENSIONS</div>
        <div class="card-body">
            <?php $__currentLoopData = $dimensions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dim): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
            $taille = $dim->taille;
            $longueur = $dim->longueur;
            $largeur = $dim->largeur;
            $hauteur = $dim->hauteur;
            $profondeur = $dim->profondeur;
            $diametre = $dim->diametre;
            $epaisseur = $dim->epaisseur;
       
            ?>  
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
            <p>
                <?php if(isset($taille)): ?>     
            <div class="">
                <div class="row" style="margin-left: 35px">  
                    <label class="label">Taille</label>
                    <div>
                        <input type="number" step="0.01" name="taille" value="<?php echo e($taille); ?>" class="form-control offset-1 col-sm-10">
                    </div>
                    <label class="label">mètre</label>
                </div>   
                <p>
                <?php else: ?>
                <p></p>
                <div class="row" style="margin-left: 35px">
                    <label class="label">Taille</label>
                    <div>
                        <input type="number" step="0.01" name="taille" value="" class="form-control offset-1 col-sm-10">
                    </div>
                    <label class="label">mètre</label>

                </div>
                <p>
                    <?php endif; ?>

                    <?php if(isset($longueur)): ?>    
                <div class="row" style="margin-left: 3px">
                    <label class="label">Longueur</label>
                    <div>
                        <input type="number" step="0.01" name="longueur" value="<?php echo e($longueur); ?>" class="form-control offset-1 col-sm-10">
                    </div>
                    <label class="label">mètre</label>
                </div> 

                <?php else: ?>
                <p>
                <div class="row" style="margin-left: 3px">
                    <label class="label">Longueur</label>
                    <div>
                        <input type="number" step="0.01" name="longueur" value="" class="form-control offset-1 col-sm-10">
                    </div>
                    <label class="label">mètre</label>
                </div> 
                <?php endif; ?>
                <p>
                    <?php if(isset($largeur)): ?>    
                <div class="row" style="margin-left: 3px">
                    <label class="label" style="margin-left: 12px">Largeur</label>
                    <div>
                        <input type="number" step="0.01" name="largeur" value="<?php echo e($largeur); ?>" class="form-control offset-1 col-sm-10">
                    </div>
                    <label class="label">mètre</label>
                </div> 
                <?php else: ?>
                <p>
                <div class="row" style="margin-left: 3px">
                    <label class="label" style="margin-left: 12px">Largeur</label>
                    <div>
                        <input type="number" step="0.01" name="largeur" value="" class="form-control offset-1 col-sm-10">
                    </div>
                    <label class="label">mètre</label>
                </div> 
                <?php endif; ?>

                <p>
                    <?php if(isset($hauteur)): ?>     
                <div class="row" style="margin-left: 12px">
                    <label class="label">Hauteur</label>
                    <div>
                        <input type="number" step="0.01" name="hauteur" value="<?php echo e($hauteur); ?>" class="form-control offset-1 col-sm-10">
                    </div>
                    <label class="label">mètre</label>
                </div> 
                <?php else: ?>
                <p>
                <div class="row" style="margin-left: 12px">
                    <label class="label">Hauteur</label>
                    <div>
                        <input type="number" step="0.01" name="hauteur" value="" class="form-control offset-1 col-sm-10">
                    </div>
                    <label class="label">mètre</label>
                </div> 
                <?php endif; ?>
                <p>
                    <?php if(isset($profondeur)): ?>    
                <div class="row">
                    <label class="label">Profondeur</label>
                    <div>
                        <input type="number" step="0.01" name="profondeur" value="<?php echo e($profondeur); ?>" class="form-control offset-1 col-sm-10">
                    </div>
                    <label class="label">mètre</label>
                </div> 
                <?php else: ?>
                <p></p>
                <div class="row">
                    <label class="label">Profondeur</label>
                    <div>
                        <input type="number" step="0.01" name="profondeur" value="" class="form-control offset-1 col-sm-10">
                    </div>
                    <label class="label">mètre</label>
                </div> 
                <?php endif; ?>   
                <p>
                    <?php if(isset($diametre)): ?>    
                <div class="row" style="margin-left: 2px">
                    <label class="label">Diamètre</label>
                    <div>
                        <input type="number" step="0.01" name="diametre" value="<?php echo e($diametre); ?>" class="form-control offset-1 col-sm-10">
                    </div>
                    <label class="label"> mètre</label>                    
                </div> 
                <?php else: ?>
                <p></p>
                <div class="row" style="margin-left: 2px">
                    <label class="label">Diamètre</label>
                    <div>
                        <input type="number" step="0.01" name="diametre" value="" class="form-control offset-1 col-sm-10">
                    </div>
                    <label class="label"> mètre</label>                    
                </div> 
                <?php endif; ?>
                <p>
                    <?php if(isset($epaisseur)): ?>
                <div class="row" style="margin-left: 3px">
                    <label class="label">Epaisseur</label>
                    <div>
                        <input type="number" step="0.01" name="epaisseur" value="<?php echo e($epaisseur); ?>" class="form-control offset-1 col-sm-10">
                    </div>
                    <label class="label"> mètre</label>
                </div> 
                <?php else: ?>
                <div class="row" style="margin-left: 3px">
                    <label class="label">Epaisseur</label>
                    <div>
                        <input type="number" step="0.01" name="epaisseur" value="" class="form-control offset-1 col-sm-10">
                    </div>
                    <label class="label"> mètre</label>
                </div> 
                <?php endif; ?>

            </div>

        </div>
    </div>



</div>
<div class="row form-group">
    <div class="offset-5">  
        <input type="submit"  value="Modifier" class="btn btn-primary offset-sm-7" style="border: 1px solid #FFFFFF;  border-radius: 1px;margin-top: 0px"> 
    </div>
    <div class="offset-1">  
        <input type="button"  value="Annuler" onclick="location.href = '<?php echo e(url('objet')); ?>'" class="btn btn-primary" style="border: 1px solid #FFFFFF;  border-radius: 1px; margin-top:0px;margin-left:0px">
    </div>
</div>
</form>

<p></p>
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
    });</script>

<script type="text/javascript">
    $('#type').change(function () {
    var typeID = $(this).val();
    if (typeID) {
    $.ajax({
    type: "GET",
            url: "<?php echo e(url('getMatiere')); ?>?idtype=" + typeID,
            success: function (res) {
            if (res) {
            $("#matiere").empty();
            $("#matiere").append('<option>Selectionner</option>');
            $.each(res, function (key, value) {
            $("#matiere").append('<option value="' + key + '">' + value + '</option>');
            });
            } else {
            $("#matiere").empty();
            }
            }
    });
    } else {
    $("#matiere").empty();
    }
    });
    $('#commune').on('change', function () {
    var communeid = $(this).val();
    var type = $('#type').val();
    if (commune) {
    if (type == 'URBAINE')
    {
    $.ajax({
    type: "GET",
            url: "<?php echo e(url('getVille')); ?>?idcommune=" + communeid,
            success: function (res) {

            if (res) {
            $("#ville").empty();
            $("#ville").append('<option>Selectionner</option>');
            $.each(res, function (key, value) {
            $("#ville").append('<option value="' + key + '">' + value + '</option>');
            });
            } else {
            $("#ville").empty();
            }
            }
    });
    }

    if (type == 'RURALE')
    {
    $.ajax({
    type: "GET",
            url: "<?php echo e(url('getVillage')); ?>?idcommune=" + communeid,
            success: function (res) {

            if (res) {
            $("#village").empty();
            $("#village").append('<option>Selectionner</option>');
            $.each(res, function (key, value) {
            $("#village").append('<option value="' + key + '">' + value + '</option>');
            });
            } else {
            $("#village").empty();
            }
            }
    });
    }

    }

    });</script>

<script type="text/javascript">
    $('#region').change(function () {
    var regionID = $(this).val();
    if (regionID) {
    $.ajax({
    type: "GET",
            url: "<?php echo e(url('getProvince')); ?>?idregion=" + regionID,
            success: function (res) {
            if (res) {
            $("#province").empty();
            $("#province").append('<option>Selectionner</option>');
            $.each(res, function (key, value) {
            $("#province").append('<option value="' + key + '">' + value + '</option>');
            });
            } else {
            $("#province").empty();
            }
            }
    });
    } else {
    $("#province").empty();
    }
    });
    $('#type').on('change', function () {
    var idprovince = $('#province').val();
    var letype = $('#type').val();
    if (type) {
    $.ajax({
    type: "GET",
            url: "<?php echo e(url('getCommune')); ?>?idprovince=" + idprovince + "&type=" + letype,
            success: function (res) {
            $("#ville").empty();
            $("#village").empty();
            if (res) {
            $("#commune").empty();
            $("#commune").append('<option>Selectionner</option>');
            $.each(res, function (key, value) {
            $("#commune").append('<option value="' + key + '">' + value + '</option>');
            });
            } else {
            $("#commune").empty();
            }
            }
    });
    } else {
    $("#commune").empty();
    }

    });
    $('#commune').on('change', function () {
    var communeid = $(this).val();
    var type = $('#type').val();
    if (commune) {
    if (type == 'URBAINE')
    {
    $.ajax({
    type: "GET",
            url: "<?php echo e(url('getVille')); ?>?idcommune=" + communeid,
            success: function (res) {

            if (res) {
            $("#ville").empty();
            $("#ville").append('<option>Selectionner</option>');
            $.each(res, function (key, value) {
            $("#ville").append('<option value="' + key + '">' + value + '</option>');
            });
            } else {
            $("#ville").empty();
            }
            }
    });
    }

    if (type == 'RURALE')
    {
    $.ajax({
    type: "GET",
            url: "<?php echo e(url('getVillage')); ?>?idcommune=" + communeid,
            success: function (res) {

            if (res) {
            $("#village").empty();
            $("#village").append('<option>Selectionner</option>');
            $.each(res, function (key, value) {
            $("#village").append('<option value="' + key + '">' + value + '</option>');
            });
            } else {
            $("#village").empty();
            }
            }
    });
    }

    }

    });</script>

<script type="text/javascript">

    $('#typematiere').change(function () {
    var typeID = $(this).val();
    if (typeID) {
    $.ajax({
    type: "GET",
            url: "<?php echo e(url('getMatiere')); ?>?idtype=" + typeID,
            success: function (res) {
            if (res) {
            $("#matiere").empty();
            $("#matiere").append('<option value="">Selectionner</option>');
            $.each(res, function (key, value) {
            $("#matiere").append('<option value="' + key + '">' + value + '</option>');
            });
            } else {
            $("#matiere").empty();
            }
            }
    });
    } else {
    $("#matiere").empty();
    }
    });</script>

<script>
    $(document).ready(function () {
    $('.dropdown-toggle').dropdown();
    })
</script>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SYGEM\resources\views/objet/form_modif.blade.php ENDPATH**/ ?>