
<div class="row divtabgrand" style="">
    <div class="col-xs-9 offset-1" >
        <div class="ligneform " style="background-color: #EEE">



            <div>



            <table class="table table-striped table-condensed" id="table" style="width:900px;margin-left:0px">
                <thead>

                    @foreach($liste as $listobj)
                    <tr style="background-color:#2a6496;color: #FFFFFF;">
                        <th>{{$listobj->nom}}</th>	
                        <th>{{$listobj->prenom}}</th>
                        <th>{{$listobj->nommedia}}</th>
                        <th>{{$listobj->created_at}}</th>
                        
                       


                    </tr>

                    @endforeach  
               
                    
                </thead>
                <tbody>
                    
                   
               
                    @foreach($liste as $listobj)
                    <tr style="background-color:#2a6496;color: #FFFFFF;">
                       
                       
                        <th></th>

                    </tr>

                    @endforeach  
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
