
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
<p></p>

<?php if(isset($message)): ?>
<div class="alert-success col-sm-4 offset-4"><label class="label-info" style="margin-left:70px"><b>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo e($message); ?></b></label></div>
<?php endif; ?>
<p></p>
<form class="col-sm-12" method="post" action="<?php echo e(route("objet.store")); ?>" enctype="multipart/form-data" style="margin-top:0px">
    <?php echo e(csrf_field()); ?>

    <div class="tab-content">
        <div class="tab-pane fade show active" id="home">
            <p>
            <div class="row col-sm-12">
                <div class="card col-sm-5">
                    <div class="card-header">LOCALISATION GEOGRAPHIQUE</div>
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
                <div id="image_carte" class="col-sm-6 offset-1">

                    <div class="card">
                        <div class="card-header">LOCALISATION INTERNATIONALE</div>
                        <div class="card-body">
                            <div class="row form-group">
                                <label class="label" >Pays</label>
                               
                                <select id="region" name='pays' class="form-control" >
                                    <option selected="selected">Selectionner</option>
                                     <?php $__currentLoopData = $listePays; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pays): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     <option value="<?php echo e($pays->name); ?>"><?php echo e($pays->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </select>
                            </div>
                           

                        </div>

                    </div>
                    <img src="<?php echo e(asset('images/carte.png')); ?>" style="width: 600px">

                </div>
            </div>

            </p>
        </div>
        <div class="tab-pane fade" id="profile">
            <p>

            <div class="row col-sm-12"> 
                <div id="panneau1" class="col-sm-6">  
                    <div class="card">

                        <div class="card-header">RENSEIGNER LES INFORMATIONS</div>
                        <p></p>
                        <div class="text-danger offset-4"><?php echo e($errors->first("numinv", ":message")); ?></div>
                        <div class="row form-group">
                            <label class="label" style="margin-left: 40px">Numero Inventaire</label>
                            <label class="label" style="margin-left: 0px;color: red"><b>&nbsp;*</b></label>
                            <input class="form-control col-sm-6" type='number' value="<?php echo e(old('numinv')); ?>" name="numinv" style="margin-left: 10px" >
                        </div>


                        <div class="text-danger"><?php echo e($errors->first("photo", ":message")); ?></div>
                        <div class="row form-group">
                            <label class="label" style="margin-left: 130px">Photo</label>
                            <input class="form-control col-sm-6" type='file' value="<?php echo e(old('photo')); ?>" name="photo" style="margin-left: 10px" >
                        </div>

                        <div class="text-danger offset-4"><?php echo e($errors->first("nom", ":message")); ?></div>
                        <div class="row form-group">
                            <label class="label" style="margin-left: 120px">Nom</label>
                            <label class="label" style="margin-left: 0px;color: red"><b>&nbsp;*</b></label>
                            <input class="form-control col-sm-6" type='text' value="<?php echo e(old('nom')); ?>" name="nom" style="margin-left: 10px" >
                        </div>


                        <div class="row form-group">
                            <label class="label" style="margin-left: 40px">Nom Vernanculaire</label>
                            <label class="label" style="margin-left: 0px;color: red"><b>&nbsp;*</b></label>
                            <input class="col-sm-6 form-control" type='text' value="<?php echo e(old('nonvern')); ?>" name="nonvern" style="margin-left: 10px">
                        </div>


                        <div class="row form-group">
                            <label class="label" style="margin-left: 80px">Classification</label>
                            <label class="label" style="margin-left: 0px;color: red"><b>&nbsp;*</b></label>
                            <select name="classification" class="form-control col-sm-6" style="margin-left: 10px">

                                <?php $__currentLoopData = $listeclassif; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $classif): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($classif->idclassification); ?>"><?php echo e($classif->libelle); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        
                        <div class="row form-group">
                            <label class="label" style="margin-left: 110px">Datation</label>
                            <input class="col-sm-6 form-control" type='text' value="<?php echo e(old('datation')); ?>" name="datation" style="margin-left: 10px">
                        </div>
                        
                        <div class="row form-group">
                            <label class="label" style="margin-left: 70px">Nom Collecteur</label>
                            <input class="col-sm-6 form-control" type='text' value="<?php echo e(old('collecteur')); ?>" name="collecteur" style="margin-left: 10px">
                        </div>
                        
                        <div class="row form-group">
                            <label class="label" style="margin-left: 70px">Nom Detenteur</label>
                            <input class="col-sm-6 form-control" type='text' value="<?php echo e(old('detenteur')); ?>" name="detenteur" style="margin-left: 10px">
                        </div>

                         <div class="row form-group">
                            <label class="label" style="margin-left: 30px">Provenance Inconnue</label>
                            <select class="form-control col-sm-2" style="margin-left: 10px" name="provenance">
                                <option value="<?php echo e(old('provenance')); ?>">Oui</option>
                                <option selected="selected" value="<?php echo e(old('provenance')); ?>">Non</option>
                            </select>
                        </div>
                        <div class="row form-group">
                            <label class="label" style="margin-left: 95px">Description</label>
                            <input class="col-sm-6 form-control" type='text' value="<?php echo e(old('description')); ?>" name="description" style="margin-left: 10px">
                        </div>



                        <div class="row form-group">
                            <label class="label" style="margin-left:56px">Groupe Ethnique</label>
                            <select name="grpethnique" class="form-control col-sm-5" style="margin-left: 12px">
                                <option selected="selected">Selectionner</option>
                                <?php $__currentLoopData = $listeGrp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($grp->libelle); ?>"><?php echo e($grp->libelle); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                               
                        </div>



                        <div class="row form-group">
                            <label class="label" style="margin-left:130px">Usage</label>
                            <input class="col-sm-6 form-control" type='text' value="<?php echo e(old('usage')); ?>" name="usage" style="margin-left: 10px">
                        </div>



                        <div class="row form-group">
                            <label class="label" style="margin-left:150px">Etat</label> &nbsp;&nbsp;
                            <select class="form-control col-sm-6" name="etat">
                                <option>Bon</option>
                                <option>Mauvais</option>
                                <option>Declassé</option>
                                <option>Restaurer</option>
                            </select>
                        </div>

                        <div class="text-danger offset-4"><?php echo e($errors->first("localisation", ":message")); ?></div>
                        <div class="row form-group">
                            <label class="label" style="margin-left:95px">Localisation</label>
                            <label class="label" style="margin-left: 0px;color: red"><b>&nbsp;*</b></label>
                            <input class="col-sm-6 form-control" type='text' value="<?php echo e(old('localisation')); ?>" name="localisation" style="margin-left: 8px">
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
                            <label class="label" style="margin-left:80px">Observations</label>
                            <input class="col-sm-7 form-control" type='textarea' value="<?php echo e(old('observation')); ?>" name="observation" style="margin-left: 10px">
                        </div>




                        <div class="card-footer"></div>
                    </div>  
                </div>

                <div id="panneau2" class="row col-sm-6">

                    <div class="card col-sm-12" style="height: 200px">
                        <div class="card-header">IMAGE</div>
                        <div class="card-body">

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
                            <div class="text-danger"><?php echo e($errors->first("museedepot", ":message")); ?></div>
                            <div class="row form-group">
                                <label class="label" style="margin-left:45px">Musee de Depot</label>&nbsp;&nbsp;
                                <select name="museedepot" id="museedepot" class="form-control col-sm-7">
                                    <option selected="selected" value="Choisir">Choisir</option>
                                    <?php $__currentLoopData = $listmusee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $musee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($musee->idmusee); ?>"> <?php echo e($musee->nom); ?> </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <option value="autre">Autre</option>
                                </select>
                            </div>


                            <div class="text-danger"><?php echo e($errors->first("museeprop", ":message")); ?></div>
                            <div class="row form-group">
                                <label class="label" style="margin-left:30px">Musee Proprietaire</label>&nbsp;&nbsp;
                                <select name="museeprop" id="museeprop" class="form-control col-sm-7">
                                    <option selected="selected" value="Choisir">Choisir</option>
                                    <?php $__currentLoopData = $listmusee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $musee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($musee->idmusee); ?>"> <?php echo e($musee->nom); ?> </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <option value="autre">Autre</option>
                                </select>
                            </div>

                            <div class="row form-group offset-3">
                                <!--                                <label class="label" style="margin-left: 30px">Autre Musée Depot</label>-->
                                <input class="col-sm-7 form-control " type='hidden' value="Autre musée de depot" name="autredepot" id="autredepot" style="margin-left: 10px">
                            </div>

                            <!--                            <div id="autreproprietaire" class="row"></div>-->
                            <div class="row form-group offset-3">
                                <!--                                <label class="label" style="margin-left: 20px">Autre Musée Proprietaire</label>-->
                                <input class="col-sm-7 form-control offset-5" type='hidden' value="autre musée" name="autreproprietaire" id="autreproprietaire" style="margin-left: 10px">
                            </div>
                        </div>

                    </div>

                    <div class="card col-sm-12" style="">
                        <div class="card-header">CARACTERISTIQUES</div>
                        <div class="card-body">

                            <div class="row" style="margin-left: 60px">
                                <label class="label">Poids</label>
                                <div>
                                    <input type="number" name="poids" value="<?php echo e(old('poids')); ?>" step="0.001" class="form-control offset-1 col-sm-10">
                                </div>
                                <label class="label">Kg</label>
                            </div>
                            <p>

                            <div class="row form-group">
                                <label class="label" style="margin-left: 10px">Type de Matière &nbsp;</label>
                                <select id="typematiere" name='typematiere' class="form-control col-sm-6" >
                                    <option selected="selected">Choisir</option>
                                    <<?php $__currentLoopData = $listetype; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $reg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($key); ?>"><?php echo e($reg); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <label class="label" style="margin-left: 0px;color: red"><b>&nbsp;*</b></label>
                            </div>
                            <div class="text-danger"><?php echo e($errors->first("typematiere", ":message")); ?></div>
                            <div class="row form-group">
                                <label class="label" style="margin-left: 30px">Matière</label>
                                <select id="matiere" name="matiere" class="form-control col-sm-6" style="margin-left: 50px">
                                </select>

                            </div>

                            <div class="row form-group">
                                <label class="label" style="margin-left: 30px">Autre Matière</label>
                                <input class="col-sm-7 form-control" type='text' value="" name="autrematiere" style="margin-left: 10px">
                            </div>

                            <div class="row form-group">
                                <label class="label" style="margin-left: 48px">Techniques</label>
                                <input class="col-sm-7 form-control" type='text' value="<?php echo e(old('technique')); ?>" name="technique" style="margin-left: 10px">
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
                                <td><input type="button" class="form-control btn-info" value="Supprimer" onclick="delLigne(this, 'nbdocument');return false;"></td>
                            </tr>
                        <div class="text-danger offset-4"><?php echo e($errors->first("document", ":message")); ?></div>
                        </tbody>
                        <input type="hidden" value="1" name="nbdocument" id="nbdocument">
                    </table>
                </div>

            </div>

            </p>
        </div>

        <div class="tab-pane fade" id="catalogue">
            <p>
            <div class="card col-sm-8" style="">
                <div class="card-header">CATALOGUES</div>
                <div class="card-body">

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
                                <td><input type="button" class="form-control btn-info" value="Supprimer" onclick="delLigne(this, 'nbcatalogue');return false;"></td>
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
                                <td><input type="button" class="form-control btn-info" value="Supprimer" onclick="delLigne(this, 'nbaudiovisuel');return false;"></td>
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
                                <td><input type="button" class="form-control btn-info" value="Supprimer" onclick="delLigne(this, 'nbaudiovisuel');return false;"></td>
                            </tr>
                        </tbody>
                        <input type="hidden" value="1" name="nbaudiovisuel" id="nbaudiovisuel">
                    </table>
                </div>

            </div>
        </div>

        <div class="tab-pane fade" id="dimensions">
            <p>
            <div class="card col-sm-8" style="">
                <div class="card-header">DIMENSIONS</div>
                <div class="card-body">

                    <p>
                    <div class="row" style="margin-left: 35px">
                        <label class="label">Taille</label>
                        <div>
                            <input type="number" name="taille" class="form-control offset-1 col-sm-10">
                        </div>

                        <label class="label">mètre</label>

                    </div> 
                    <p>
                    <div class="row" style="margin-left: 3px">
                        <label class="label">Longueur</label>
                        <div>
                            <input type="number" name="longueur" class="form-control offset-1 col-sm-10">
                        </div>
                        <label class="label">mètre</label>
                    </div> 
                    <p>
                    <div class="row" style="margin-left: 3px">
                        <label class="label" style="margin-left: 12px">Largeur</label>
                        <div>
                            <input type="number" name="largeur" class="form-control offset-1 col-sm-10">
                        </div>

                        <label class="label">mètre</label>

                    </div> 

                    <p>
                    <div class="row" style="margin-left: 12px">
                        <label class="label">Hauteur</label>
                        <div>
                            <input type="number" name="hauteur" class="form-control offset-1 col-sm-10">
                        </div>
                        <label class="label">mètre</label>
                    </div> 
                    <p>
                    <div class="row">
                        <label class="label">Profondeur</label>
                        <div>
                            <input type="number" name="profondeur" class="form-control offset-1 col-sm-10">
                        </div>
                        <label class="label">mètre</label>

                    </div> 

                    <p>
                    <div class="row" style="margin-left: 2px">
                        <label class="label">Diamètre</label>
                        <div>
                            <input type="number" name="diametre" class="form-control offset-1 col-sm-10">
                        </div>

                        <label class="label"> mètre</label>                    
                    </div> 
                    <p>
                    <div class="row" style="margin-left: 3px">
                        <label class="label">Epaisseur</label>
                        <div>
                            <input type="number" name="epaisseur" class="form-control offset-1 col-sm-10">
                        </div>
                        <label class="label"> mètre</label>
                    </div> 

                </div>

            </div>
        </div>



    </div>
    <div class="row form-group">
        <div class="offset-5">  
            <input type="submit"  value="Ajouter" class="btn btn-primary offset-sm-7" style="border: 1px solid #FFFFFF;  border-radius: 1px;margin-top: 0px"> 
        </div>
        <div class="offset-1">  
            <input type="button"  value="Annuler" onclick="location.href ='<?php echo e(url('objet')); ?>'" class="btn btn-primary" style="border: 1px solid #FFFFFF;  border-radius: 1px; margin-top:0px;margin-left:0px">
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


<script>
    $('#museeprop').change(function () {
        var valeur = $(this).val();
        if (valeur == "autre") {
            $('#autreproprietaire').attr('type', 'text');
        } else {
            $('#autreproprietaire').attr('type', 'hidden');
        }
    });

    $('#museedepot').change(function () {
        var valeur = $(this).val();
        if (valeur == "autre") {
            $('#autredepot').attr('type', 'text');
        } else {
            $('#autredepot').attr('type', 'hidden');
        }
    });





</script>

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

    });

</script>

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

    });

</script>

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
                        $("#matiere").append('<option value="Selectionner">Selectionner</option>');
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
</script>

<script>
    $(document).ready(function () {
        $('.dropdown-toggle').dropdown();
    })
</script>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RECOP\RECOP\resources\views/objet/form_ajout.blade.php ENDPATH**/ ?>