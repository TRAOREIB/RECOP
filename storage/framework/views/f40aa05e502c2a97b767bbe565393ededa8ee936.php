<?php $__env->startSection('contenu'); ?>

<br><br><br><br><br><br><br>
<div class="col-sm-7 offset-3" style="margin-top: 0px">
    <i> <h4 style="margin: 0px; padding-top: 0px; color: #0044cc; font-weight: normal"> Liste de vos oeuvres soumises </h5></i>
    <div style="background: #285e8e;height:10px"></div>
</div>
<br>
<?php if(isset($cateindispo)): ?>
<div class="alert alert-danger col-sm-5 offset-3"><label><?php echo e($cateindispo); ?></label></div>
<?php endif; ?>
<div class="container col-sm-8">


    <div>
        <form method="get" action="<?php echo e(route('recepisse')); ?>">
            <?php echo e(csrf_field()); ?> 
            <input type="submit" class="btn btn-danger" target='blank' value="Imprimer votre Recepisse" name="recepisse">    
            <input type="hidden" value="<?php echo e($idcandidat); ?>" name="idcandidat">
        </form> 
    </div>
    <br>
    <?php if($nboeuvre<1): ?>
    <div class="">
        <form method="GET" action="<?php echo e(url('demandeinscrip')); ?>">
            <?php echo e(method_field('PUT')); ?>

            <a href="form_connexion.blade.php"></a>
            <?php echo e(csrf_field()); ?> 
            <input type="submit" class="btn btn-success" value="Ajouter une Oeuvre" name="ajoutoeuvre">    
            <input type="hidden" value="<?php echo e($idcandidat); ?>" name="idcandidat">
        </form> 
    </div>
    <?php endif; ?>
    <br>
    <div class="">
        <form method="GET" action="<?php echo e(route('candidat.edit',[$idcandidat])); ?>">
            <?php echo e(method_field('PUT')); ?>

            <?php echo e(csrf_field()); ?> 
            <input type="submit" class="btn btn-success" value="Modifier vos Informations Personnelles" name="recepisse">    
            <input type="hidden" value="<?php echo e($idcandidat); ?>" name="idcandidat">
        </form> 
    </div>
    <br>


    <br>

    <table class="table">
        <thead class="thead-light">
            <tr>
                <th><h5>Categorie</h5></th>
                <th><h5>Prémière Oeuvre</h5> </th>
                <th><h5>Deuxième Oeuvre</h5></th>
                <th></th>

            </tr>
        </thead>
        <tbody>

            <?php if(isset($message)): ?>
        <div class="alert alert-danger col-sm-10 offset-1">
            <label> Vous n'avez pas d'oeuvres soumises, cliquer sur <b><a href="<?php echo e(url('presseecrite')); ?>">PRESSE ECRITE</a></b> ou <b><a href="<?php echo e(url('presseligne')); ?>">PRESSE EN LIGNE</a></b> pour le faire</label>
        </div>
        <?php else: ?>
        <?php $__currentLoopData = $oeuvres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $oeuvre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <form method="GET" action="<?php echo e(route('oeuvre.edit',[$oeuvre->id])); ?>">
            <?php echo e(method_field('PUT')); ?>

            <?php echo e(csrf_field()); ?>

            <?php if($oeuvre->macategorie=="presse ecrite"): ?>
            <tr>
                <td><i><label class="label" style="color: black"><h5><?php echo e($oeuvre->macategorie); ?></h5></label></i></td>
                <td><label class="label" style="color: black"><h5><?php echo e($oeuvre->titrearticle1); ?></h5></label></td>
                <td><label class="label" style="color: black"><h5><?php echo e($oeuvre->titrearticle2); ?></h5></label></td>
                <td><input type="submit" value="Modifier les Oeuvres" class="btn btn-primary"></td>
            <input type="hidden" value="presse ecrite" name="categorie">
            </tr>
            <?php endif; ?>
            <?php if($oeuvre->macategorie=="presse en ligne"): ?>
            <tr>
                <td><i><label class="label" style="color: black"><h5><?php echo e($oeuvre->macategorie); ?></h5></label></i></td>
                <td><label class="label" style="color: black"><a href="<?php echo e($oeuvre->url1); ?>"><h5><?php echo e($oeuvre->url1); ?></h5></a></label></td>
                <td><a href="<?php echo e($oeuvre->url2); ?>"><label class="label" style="color: black"><h5><?php echo e($oeuvre->url2); ?></h5></label></a></td>
                <td><input type="submit" value="Modifier les Oeuvres" class="btn btn-primary"></td>
            <input type="hidden" value="presse en ligne" name="categorie">
            </tr>
            <?php endif; ?>   
            <input type="hidden" value="<?php echo e($oeuvre->idcandidat); ?>" name="idcandidat">
        </form>   

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>   
        </tbody>
    </table>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GALIAN\resources\views/candidat/form_recap.blade.php ENDPATH**/ ?>