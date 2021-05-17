<?php $__env->startSection('content'); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('js/dataTables.min.js')); ?>"></script>
<link rel="stylesheet" href="<?php echo e(asset('css/dataTables.min.css')); ?>">
<?php $__env->stopSection(); ?>
<div class="row listetitreformgrand" style="">
    <div class="col-md-12" style="">
        <h3 class="titreform">Gestion des utilisateurs (administrateurs en rouge) </h3>
        <div class="titrebarform" ></div>
    </div>
</div> 
<div class="row divbutajoutgrand offset-8">
    <a   href="<?php echo e(route('register')); ?>" class="btn btn-primary" ><span class="fas fa-plus"></span> Enregistrer un utilisateur </a>
    
</div>
<br/> <br/> 
<div class="row divtabgrand" style="">
    <div class="col-md-12" >
        <div class="col-md-12 ligneform " style="background-color: #EEE">
            <table class="table table-striped table-condensed" id="table">
        
                <thead>
                    <tr>
                        <th scope="col">Nom & Prenom(s)</th>
                        <th scope="col">Identifiant</th>
                        <th scope="col">Inscription</th>
                        <th scope="col">Role</th>
                        <th scope="col">Valide</th>
                        
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr <?php if($user->admin): ?> style="color: red" <?php endif; ?>>
                        <td><?php echo e($user->name); ?></td>
                        <td><?php echo e($user->email); ?></td>
                        <td><?php echo e($user->created_at->formatLocalized('%x')); ?></td>
                        <td><?php echo e($user->role); ?></td>
                        <td><?php if($user->valid): ?><span class="fas fa-check fa-lg"></span><?php endif; ?></td>
                        <td ><div class="row">
                            <form method="GET" action="<?php echo e(route('users.edit', $user->id)); ?>">
                                <?php echo e(method_field('EDITER')); ?>

                                <?php echo e(csrf_field()); ?>

                                <button  class="btn btn-warning btn-sm" type="submit" data-toggle="tooltip" title="Editer" ><span class="fas fa-edit"></span></button>
                                <input type="hidden" name="id" value="<?php echo e($user->id); ?>">
                            </form> &nbsp;&nbsp;
                        
                            <?php if (! ($user->admin)): ?>
                            <form method="POST" action="<?php echo e(route('users.destroy', $user->id)); ?>">
                                <?php echo e(method_field('DELETE')); ?>

                                <?php echo e(csrf_field()); ?>

                                <a ></a>
                                <button class="btn btn-danger btn-sm" type="submit" data-toggle="tooltip" title="Supprimer" onclick="return confirm("Vraiment supprimer l'utilisateur <?php echo e($user->name); ?>?")"><span class="fas fa-trash"></span></button>
                            </form>  
                            <?php endif; ?>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>

    
<script>
  $(document).ready(function() {
    $('#table').DataTable();
} );
 </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

    <script>
        $(() => {
            $('a').removeClass('invisible')
        })
    </script>

    <?php echo $__env->make('partials.script-delete', ['text' => __('Vraiment supprimer cet utilisateur ?'), 'return' => 'removeTr'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SYGEM\resources\views/user/index.blade.php ENDPATH**/ ?>