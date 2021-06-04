@extends('tprecop.template')
@section('contenu')

<br>
 <br>
	<div class="text-center">
  		<h2> BIENVENUE M. ....</h2>
 	</div>
 <div style="margin-left:20px;">
      <div>
        <a href="{{ url('modifdem') }}" class="btn btn-primary">MODIFIER</a> 
        <label class="card-title"> Vos informations d'identification</label> 
      </div>
 <br>      
      <div>
        <a href="#" class="btn btn-primary">MODIFIER</a> <label class="card-title">Vos pièces jointes</label> 
      </div> 
  <br>

      <div>
         <a href="#" class="btn btn-primary">MODIFIER</a> <label class="card-title">Votre demande d'accréditation</label> 
      </div>
 </div>     
<br>
 <br>
@endsection