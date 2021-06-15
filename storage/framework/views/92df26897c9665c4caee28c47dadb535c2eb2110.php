
<?php $__env->startSection('contenu'); ?>
<br>  
<div class="text-center">
    <label style="font-family: fantasy;color: blue">MODIFIER VOS PIECES JOINTES</label>
</div> 
<div class="ligne_separe_titre"></div>
<br>



<form method="post" action="<?php echo e(route('updatecorrespondant')); ?>" enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>	

    <div class="col-sm-12">  <!-- Bloc 2-->

        <p></p>
        <div class="card"> <div class=" card text-center card-header">PIECES JOINTES</div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="pjcnib" class="col-sm-3 col-form-label">PHOTO D'IDENTITE</label>
                    <div class="col-sm-7">
                        <input class="form-control"  type="file" name="photo" />
                        <label><i><?php echo e($editpjcorrespondant->photo); ?></i></label>
                    </div>

                </div>
                <div class="form-group row">
                    <label for="cv" class="col-sm-3 col-form-label">CV</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="cv" type="file" name="cv" />
                        <label><i>Scan du fichier numerique du CV</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pjcnib" class="col-sm-3 col-form-label">VISA DU MEDIA</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="pjcnib" type="file" name="visamedia" />
                        <label><i>Scan du fichier numerique du visa</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pjcnib" class="col-sm-3 col-form-label">CNI</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="pjcnib" type="file" name="pjcnib" />
                        <label><i>Scan de la CNI (Recto et Verso)</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pjpasseport" class="col-sm-3 col-form-label">PASSPORT</label>
                    <div class="col-sm-7">
                        <input class="form-control"  type="file" name="pjpasseport"/>
                        <label><i>Scan de la première page du passeport</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pjcarteconsulaire" class="col-sm-3 col-form-label">CARTE CONSULAIRE</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="pjcarteconsulaire" type="file" name="pjcarteconsulaire" />
                        <label><i>Scan de la carte (Recto et Verso)</i></label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="pjcartepresse" class="col-sm-3 col-form-label">CARTE PRESSE</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="pjcartepresse" type="file" name="pjcartepresse" />
                        <label><i>Scan de la carte de Presse (Recto et Verso)</i></label>
                    </div>
                </div>	
                <input type="hidden" value="<?php echo e($editpjcorrespondant->id); ?>" name="idpj">
                <input type="hidden" value="<?php echo e($idcorrespondant); ?>" name="idcorresp">
                <input type="hidden" value="correspondant" name="type">
            </div>
        </div>
    </div>

    <p></p>


    <p></p>
    <div class="text-center">
        <button class="btn btn-primary" type="submit">MODIFIER</button>
        <button class="btn btn-primary" type="reset">ANNULER</button>
        <p></p>    
    </div>
</form>
</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('tprecop.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RECOP\resources\views/correspondant/modif_pj.blade.php ENDPATH**/ ?>