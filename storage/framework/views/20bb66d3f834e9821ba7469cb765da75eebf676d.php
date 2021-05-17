<?php $__env->startSection('contenu'); ?>
<script src="<?php echo e(asset('js/dataTables.min.js')); ?>"></script>
<link rel="stylesheet" href="<?php echo e(asset('css/dataTables.min.css')); ?>">

<body>


<p></p>
<div class="row divtabgrand" style="">
    <div class="col-sm-7 offset-1" >
        <div class="container col-sm-7">
    <div class="alert alert-danger">
        <b> PAS D'OEUVRES SOUMISES </b>
    </div>
</div>
    </div>
</div>
<!--  fin de la liste-->

</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GALIAN\resources\views/candidat/form_reponse.blade.php ENDPATH**/ ?>