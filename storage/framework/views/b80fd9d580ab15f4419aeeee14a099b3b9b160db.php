

<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/datatables.min.js')); ?>"></script>
<link rel="stylesheet" href="<?php echo e(asset('css/datatables.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>"> 

<div class="row listetitreformgrand" style="">
      <div class="col-sm-12" style="">
        <h3 class=" offset-sm-3"> LISTE DES CORRESPONDANTS</h3>
      </div>
</div> <br>


<div class="row divtabgrand offset-sm-1" style="">
    <div class="col-sm-7" >
        <div class="col-xs-12 ligneform " style="background-color: #EEE">
            <table class="table table-striped table-condensed" id="table">
                <thead>
                    <tr style="background-color:#2a6496;color: #FFFFFF;">
                        <th>NOM</th>
                        <th>PRENOM(S)</th>
                        <th>MEDIA</th>
                        <th>REGION</th>
                       
                    </tr>
                </thead>
                <tbody>

                    
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    

                </tbody>
            </table>

        </div>
    </div>
</div>
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
    });
</script>
<?php /**PATH C:\xampp\htdocs\RECOP\RECOP\resources\views/candidat/listecorrespondant.blade.php ENDPATH**/ ?>