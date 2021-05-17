<?php $__env->startSection('contenu'); ?>

<br><br><br><br><br><br><br>
<div class="col-sm-7 offset-3" style="margin-top: 0px">
    <i> <h4 style="margin: 0px; padding-top: 0px; color: #0044cc; font-weight: normal"> Les Documents du Concours Prix Galian 2021 </h5></i>
    <div style="background: #285e8e;height:10px"></div>
</div>
<br>

<div class="container col-sm-8">

    <div class="card">
        <div class="card-header">Les documents du concours</div>
        <div class="card-body">
            <div class="row">
                <div class="label col-sm-4"><b><h5><i>Communiqué d'Ouverture</i></h5></b></div> 
                <div class="offset-1 col-sm-4"><a href='<?php echo e(asset("storage/docs/COM2021.pdf")); ?>' target="blank"><input type="button" class="btn btn-success" value="Telecharger"></a></div>
            </div>
            <br>
            <div class="row">
                <div class="label col-sm-4"><b><h5><i>Règlement Interieur</i></h5></b></div>
                <div class="offset-1 col-sm-4"><a href='<?php echo e(asset("storage/docs/RI2021.pdf")); ?>' target="blank"><input type="button" class="btn btn-success" value="Telecharger"></a></div>
            </div>
            <br>
            <div class="row">
                <div class="label col-sm-4"><b><h5><i>Visa du Media</i></h5></b></div>
                <div class="offset-1 col-sm-4"><a href='<?php echo e(asset("storage/docs/VISA2021.docx")); ?>' target="blank"><input type="button" class="btn btn-success" value="Telecharger"></a></div>
            </div> 
            <br>
            <div class="row">
                <div class="label col-sm-4"><b><h5><i>Formulaire d'inscription (Presse Ecrite)</i></h5></b></div>
                <div class="offset-1 col-sm-4"><a href='<?php echo e(asset("storage/docs/FICHE2021.docx")); ?>' target="blank"><input type="button" class="btn btn-success" value="Telecharger"></a></div>
            </div>
        </div>     

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GALIAN\resources\views/documents/form_documents.blade.php ENDPATH**/ ?>