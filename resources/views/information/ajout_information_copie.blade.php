<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/datatables.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/datatables.min.css')}}">
<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}"> 


<div class="row listetitreformgrand" style="">
      <div class="col-sm-12" style="">
        <h3 class=" offset-sm-2"> Enregistrer une Information</h3>
      </div>
</div> <br>

<form class="form-horizontal col-sm-10 offset-2" role="form" method="POST" action="{{ route('informations.store') }}" enctype="multipart/form-data" >
    {{ method_field('POST')}}
    {{ csrf_field() }}
<div class=" row form-group"> 
                <label for="titre" class="control-label col-sm-3">Titre  <b><i style="color: red">*</i></b></label> 
                <div class="col-sm-7"> 
                    <input type="text" class="form-control" name="titre"   value="{{old('titre')}}" required="required">
                    <small class="text-danger">{{ $errors->first('titre',':message') }}</small> 
                </div> 
   <!--             <input type="hidden" value="type" name="type">  -->
            </div>

           

            <div class=" row form-group">
                <label for="contenu" class="control-label col-sm-3">Contenu <b><i style="color: red">*</i></b></label> 

                <div class="col-sm-7" style=""> 
				<textarea type="textarea" class="form-control" name="contenu" value="{{old('contenu')}}" required="required" ></textarea>
                   
                    <small class="text-danger">{{ $errors->first('contenu',':message') }}</small> 
                </div> 
            </div>
         <div class="row form-group">
        <div class="offset-3">  
            <input type="submit"  value="Valider" class="btn btn-primary offset-sm-7" style="border: 1px solid #FFFFFF;  border-radius: 1px;margin-top: 0px"> 
        </div>
        <div class="offset-1">  
            <input type="button"  value="Annuler" onclick="location.href = ''" class="btn btn-primary" style="border: 1px solid #FFFFFF;  border-radius: 1px; margin-top:0px;margin-left:0px">
        </div>
    </div> 
 </form>   
        </div>
    </div> 
 </form> 
 
 <br><br>
   

<div class="row listetitreformgrand" style="">
      <div class="col-sm-12" style="">
        <h3 class=" offset-sm-2"> Liste des Informations</h3>
      </div>
</div> <br>

   <div class="row divtabgrand offset-sm-2" style="">
    <div class="col-sm-7" >
        <div class="col-xs-12 ligneform " style="background-color: #EEE">
            <table class="table table-striped table-condensed" id="table">
                <thead>
                    <tr style="background-color:#2a6496;color: #FFFFFF;">
                        <th>TITRE</th>
                        <th>CONTENU</th>
                        <th>DATE</th>
						 <th>MODIFIER</th>
                        <th>SUPPRIMER</th>
                        
                    </tr>
                </thead>
                <tbody>

                     @foreach($allinformations as $informations)
                    <tr>
                        <td>{{ $informations->titre }}</td>
                         <td>{{ $informations->contenu }}</td>
						  <td>{{ $informations->created_at }}</td>
                       
					   
					    <td title="Modifier">
                            <form method="GET" action="{{ route('informations.edit',[$informations->idinfo]) }}">
                                {{method_field('EDITER') }}
                                {{ csrf_field() }}
                                <input type="submit" value="Modifier" style="border: 0px;background-color:">
                            </form>
                        </td>
                       
                       <td title="Supprimer">
                            <form method="POST" action="{{ route('informations.destroy',[$informations->idinfo]) }}">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <a ></a>
                                <input type="submit" value="Supprimer" style="border: 0px;background-color:">
                            </form>                    
                        </td>

                    </tr>
                    @endforeach      
 

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

