@extends('tprecop.template')
@section('contenu')

<br>
<div class="text-center">
    <b><label style="" class="text-primary">RECHERCHE PAR TYPE D'ORGANE</label></b>
</div>
 {{-- <div class="ligne_separe_titre"></div> --}}
 <hr>
    <br><br>

<form class="form-horizontal col-sm-10" role="form" method="POST" action="{{ route('typeorgane') }}" enctype="multipart/form-data" >
    {{ method_field('GET')}}
    {{ csrf_field() }}
<div class="row  offset-sm-2">
   
       <label for="typeorgane" class="">TYPE </label> 
        <div class="col-sm-6  col-md-6"> 
            <select class="form-control" name="typeorgane" > 
                <option value="" selected="selected">Choisir le type d'organe</option>                                    
                <option value="National">Organe de Presse National</option> 
                <option value="International">Organe de Presse International</option>                                  
                <small class="text-danger">{{ $errors->first('typeorgane',':message') }}</small> 
            </select> 
        </div>

    <div class="ln_solid "></div>
       <div class="item form-group">
           <div style="margin: auto">  
               <input type="submit"  value="VALIDER" class="btn btn-primary" style="border: 1px solid #FFFFFF;  border-radius: 1px;margin-top: 0px"> 
           </div>
    </div>
</div>
 </form>
<br><br>

<div class="text-center">
       <b><label style="" class="text-primary">LISTE DES ORGANES ... </label></b>
</div>

<div class="row divtabgrand" style="">
    <div class="col-sm-12" >
        <div class="col-sm-12 ligneform " style="background-color: #EEE">
            <table class="table table-striped table-condensed" id="table">
                <thead>
                    <tr style="background-color:#2a6496;color: #FFFFFF;">
                        <th>TYPE</th>
                        <th>NOM</th>
                        <th>PRENOM(S)</th>
                        <th>TELEPHONE</th>
                        <th>MAIL</th>
                        <th>ORGANE</th>
						<th>TYPE ORGANE</th>
                        <th>LIEU DE RESIDENCE</th>
                       
                    </tr>
                </thead>
                <tbody>

                    @foreach( $allcorrespondant as $corresp)
                    <tr>
                        <td>{{$corresp->typecorrespondant }}</td>
                        <td>{{$corresp->nomcorrespondant }}</td>
                        <td>{{$corresp->prenomcorrespondant }}</td>
                        <td>{{$corresp->telephonecorrespondant }}</td>
                        <td>{{$corresp->mailcorrespondant }}</td>
                        <td>{{$corresp->organe }}</td>
						<td>{{$corresp->typeorgane }}</td>
                        <td>{{$corresp->lieuresidence }}</td>
              
                    </tr>
                     @endforeach

                </tbody>
                
            </table>

        </div>
    </div>
</div>
<!--  fin de la liste-->
<br><br>
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
@endsection