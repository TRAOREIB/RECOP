<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo e($title); ?></h1>
</div>

<?php if(session()->has('status')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo e(session('status')); ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

<div class="alert alert-warning alert-dismissible fade d-none" role="alert">
    Le serveur est inaccessible, veuillez retenter dans quelques minutes.
    <button type="button" class="close" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php /**PATH /Applications/MAMP/htdocs/sygem/resources/views/partials/alerts.blade.php ENDPATH**/ ?>