
<div class="row divtabgrand" style="">
    <div class="col-xs-9 offset-1" >
        <div class="ligneform " style="background-color: #EEE">



            <div>



            <table class="table table-striped table-condensed" id="table" style="width:900px;margin-left:0px">
                <thead>

                    <?php $__currentLoopData = $liste; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listobj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr style="background-color:#2a6496;color: #FFFFFF;">
                        <th><?php echo e($listobj->nom); ?></th>	
                        <th><?php echo e($listobj->prenom); ?></th>
                        <th><?php echo e($listobj->nommedia); ?></th>
                        <th><?php echo e($listobj->created_at); ?></th>
                        
                       


                    </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
               
                    
                </thead>
                <tbody>
                    
                   
               
                    <?php $__currentLoopData = $liste; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listobj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr style="background-color:#2a6496;color: #FFFFFF;">
                       
                       
                        <th></th>

                    </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                </tbody>
            </table>



            <div></div>


        </div>






        </div>
    </div>
</div>
<!--  fin de la liste-->


<script>
    $(document).ready(function () {
    $('#table').DataTable();
    });

    $('#appui').click(function () {
  
    });

</script>
<?php /**PATH C:\xampp\htdocs\RECOP\RECOP\resources\views/liste.blade.php ENDPATH**/ ?>