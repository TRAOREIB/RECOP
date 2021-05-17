

 <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
 <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
 <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>

 <br>
 <form class="form-horizontal" role="form" method="POST" action=" <?php echo e(url('genre')); ?>" style="margin-left: 10px">
    <div class="col-sm-6" style="border:1px solid #D1DCF5;margin-left:0px;padding:15px; margin-left:0px">
        <?php echo e(csrf_field()); ?>

        <br>

        <form class="form-horizontal" role="form">

            <div class="form-group">
                <label for="reference" class="col-sm-3 control-label">Nom *</label> 
                <div class="col-sm-8"> 
                    <input type="text" class="form-control" name="libelle" id="designation"  value="<?php echo e(old('libelle')); ?>">
                    <small class="text-danger"><?php echo e($errors->first('libelle',':message')); ?></small> 
                </div> 
            </div>
           
    </div>

    <div class="form-group">
        <div class="offset-3"> 
            <input type="submit"  value="Valider" class="btn btn-primary" style="border: 1px solid #FFFFFF; background-color: #54B944; border-radius: 0px; margin-top: 6px"> 
        </div>
    </div> 
</form><?php /**PATH C:\xampp\htdocs\GALIAN\resources\views/genre.blade.php ENDPATH**/ ?>