<?php $__env->startSection('contenu'); ?>
<link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>



<div class="col-sm-7 offset-3" style="margin-top: 130px">
    <i> <h4 style="margin: 0px; padding-top: 0px; color: #0044cc; font-weight: normal">Presse Ecrite </h4></i>
    <div style="background: #285e8e;margin-top:2px;height:10px"></div>
</div>

<br>

<form class="form-horizontal col-sm-10 offset-2" role="form" method="POST" action=" <?php echo e(url('oeuvre')); ?> " enctype="multipart/form-data" >

    <div class="col-sm-10" style="border:1px solid #D1DCF5;margin-left:0px;padding:15px; margin-left:0px">
        <?php echo e(csrf_field()); ?>

        <br>
        <div class="card">
            <div class="card-header"><b>Informations Générales</b></div>
            <div class="card-body">
                <div class=" row form-group"> 
                    <label for="langue" class="control-label col-sm-3">Choisir la Langue <b><i style="color: red">*</i></b></label> 
                    <div class="col-sm-8">
                        <select class="form-control col-sm-5" name="langue">
                            <option value="Français">Français</option>
                            <option value="Mooré">Mooré</option>
                            <option value="Dioula">Dioula</option>
                            <option value="Fulfuldé">Fulfuldé</option>
                            <option value="Gulmacema">Gulmacema</option>
                        </select>
                    </div>
                </div>

                <div class=" row form-group"> 
                    <label for="genre" class="control-label col-sm-3">Genre Journalistique <b><i style="color: red">*</i></b></label> 
                    <div class="col-sm-8">
                        <select class="form-control col-sm-5" name="idgenre">
                            <?php $__currentLoopData = $genre; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ge): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($ge->idgenre); ?>"><?php echo e($ge->genre); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
            </div> 

        </div>  

        <div class="card">
            <div class="card-header"><b>Première Oeuvre</b></div>
            <div class="card-body">
                <div class=" row form-group"> 
                    <label for="titre" class="control-label col-sm-3">Titre <b><i style="color: red">*</i></b></label> 
                    <div class="col-sm-8"> 
                        <input type="text" class="form-control" name="titrearticle1" id="designation"  value="<?php echo e(old('titreaticle')); ?>">
                        <small class="text-danger"><?php echo e($errors->first('titre1',':message')); ?></small> 
                    </div>
                </div>

                <div class=" row form-group"> 
                    <label for="theme" class="control-label col-sm-3">Thème <b><i style="color: red">*</i></b></label> 
                    <div class="col-sm-8"> 
                        <input type="text" class="form-control" name="themearticle1" id="theme1"  value="<?php echo e(old('themearticle1')); ?>">
                        <small class="text-danger"><?php echo e($errors->first('themearticle1',':message')); ?></small> 
                    </div> 
                </div>

                <div class=" row form-group"> 
                    <label for="nbpage1" class="control-label col-sm-3">Nombre de Pages <b><i style="color: red">*</i></b></label> 
                    <div class="col-sm-2"> 
                        <select name="nbpagearticle1" class="form-control col-sm-6">
                        <?php 
                          for($i=2;$i<6;$i++){
                              echo "<option value='$i'>$i</option>";
                          }
                        ?>
                        </select>
                    </div>  
                </div>

                <div class=" row form-group"> 
                    <label for="datepub1" class="control-label col-sm-3">Date de publication <b><i style="color: red">*</i></b></label> 
                    <div class="col-sm-4"> 
                        <input type="date" class="form-control" name="datepubarticle1" id="datepubarticle1"  value="<?php echo e(old('datepubarticle1')); ?>">
                        <small class="text-danger"><?php echo e($errors->first('datepubarticle1',':message')); ?></small> 
                    </div> 
                </div>
                
                <div class="row form-group">
                    <label for="fichierjournal1" class="control-label col-sm-3">Joindre Journal (pdf)<b><i style="color: red">*</i></b></label> 
                    <div class="col-sm-6"> 
                        <input type="file" class="form-control" name="fichieroeuvre1" required="required">
                        <small class="text-danger"><?php echo e($errors->first('fichieroeuvre1',':message')); ?></small>
                    </div> 
                </div>

                <div class="row form-group">
                    <label for="fichieroeuvre1" class="control-label col-sm-3">Joindre article(pdf)<b><i style="color: red">*</i></b></label> 
                    <div class="col-sm-6"> 
                        <input type="file" class="form-control" name="fichierarticle1" required="required">
                        <small class="text-danger"><?php echo e($errors->first('fichierarticle1',':message')); ?></small>
                    </div> 
                </div>

                

            </div> 

        </div>    

        <div class="card">
            <div class="card-header"><b>Deuxième Oeuvre</b></div>
            <div class="card-body">
                <div class=" row form-group"> 
                    <label for="titre" class="control-label col-sm-3">Titre <b><i style="color: red">*</i></b></label> 
                    <div class="col-sm-8"> 
                        <input type="text" class="form-control" name="titrearticle2" id="titre2" required="required"  value="<?php echo e(old('titrearticle2')); ?>">
                        <small class="text-danger"><?php echo e($errors->first('titrearticle2',':message')); ?></small> 
                    </div>
                </div>

                <div class=" row form-group"> 
                    <label for="theme" class="control-label col-sm-3">Thème <b><i style="color: red">*</i></b></label> 
                    <div class="col-sm-8"> 
                        <input type="text" class="form-control" name="themearticle2" id="themearticle2"  value="<?php echo e(old('themearticle2')); ?>" required="required">
                        <small class="text-danger"><?php echo e($errors->first('themearticle2',':message')); ?></small> 
                    </div> 
                </div>

                <div class=" row form-group"> 
                    <label for="nbpage2" class="control-label col-sm-3">Nombre de Pages <b><i style="color: red">*</i></b></label> 
                    <div class="col-sm-2"> 
                        <select name="nbpagearticle2" class="form-control col-sm-6">
                        <?php 
                          for($i=2;$i<6;$i++){
                              echo "<option value='$i'>$i</option>";
                          }
                        ?>
                        </select>
                    </div> 
                </div>

                <div class=" row form-group"> 
                    <label for="datepub2" class="control-label col-sm-3">Date de publication <b><i style="color: red">*</i></b></label> 
                    <div class="col-sm-4"> 
                        <input type="date" class="form-control" name="datepubarticle2" id="datepubarticle2" required="required"  value="<?php echo e(old('datepubarticle2')); ?>">
                        <small class="text-danger"><?php echo e($errors->first('datepubarticle2',':message')); ?></small> 
                    </div> 
                </div>
                
                <div class="row form-group">
                    <label for="fichierjournal2" class="control-label col-sm-3">Joindre Journal (pdf)<b><i style="color: red">*</i></b></label> 
                    <div class="col-sm-6"> 
                        <input type="file" class="form-control" name="fichieroeuvre2" required="required" >
                        <small class="text-danger"><?php echo e($errors->first('fichieroeuvre2',':message')); ?></small>
                    </div> 
                </div>
                
                <div class="row form-group">
                    <label for="fichieroeuvre2" class="control-label col-sm-3">Joindre article(pdf)<b><i style="color: red">*</i></b></label> 
                    <div class="col-sm-6"> 
                        <input type="file" class="form-control" name="fichierarticle2" required="required">
                        <small class="text-danger"><?php echo e($errors->first('fichierarticle2',':message')); ?></small>
                    </div> 
                </div>

              
            </div> 
            <div class="card-footer"></div>  
            <input type="hidden" value="<?php echo e($idcategorie); ?>" name="idcategorie">
            <?php
            $idcandidat=session('idutilisateur');
            $annee=date("Y");
            echo "<input type='hidden' value='$idcandidat' name='idcandidat'>";
            echo "<input type='hidden' value='$annee' name='annee'>";
            echo "<input type='hidden' value='presse ecrite' name='macategorie'>";
            
            ?>
        </div>   


    </div>

    <div class="row form-group">
        <div class="offset-3">  
            <input type="submit"  value="Valider" class="btn btn-primary offset-sm-7" style="border: 1px solid #FFFFFF;  border-radius: 1px;margin-top: 0px"> 
        </div>
        <div class="offset-1">  
            <input type="button"  value="Annuler" onclick="location.href = '<?php echo e(url('objet')); ?>'" class="btn btn-primary" style="border: 1px solid #FFFFFF;  border-radius: 1px; margin-top:0px;margin-left:0px">
        </div>
      
    </div>

</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GALIAN\resources\views/candidat/form_presseecrite.blade.php ENDPATH**/ ?>