@extends('tprecop.template')
@section('contenu')
<br> 
<div class="text-center">
    {{-- <label style="font-family: fantasy;color: blue">NOUVEAU CORRESPONDANT</label> --}}
    <b><label style="" class="text-primary">NOUVEAU CORRESPONDANT</label></b>
</div>
{{-- <div class="ligne_separe_titre"></div> --}}
<hr>
<br>
<form class="form-horizontal col-sm-10 offset-1" role="form" method="POST" action="{{route('nouvcorrespondant')}}" enctype="multipart/form-data">
    {{ csrf_field() }}	

    <div class="col-sm-12">  <!-- Bloc 1-->
        <div class="card"> 
            <div class=" card text-center card-header">IDENTITE DU CORRESPONDANT</div>
            <div class="card-body">
              
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="datenaissance">DATE DE NAISSANCE</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" id="datenaissance" placeholder="Entrer " name="datenaissance">
                    </div>
                </div>           
              
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="telephone2">TELEPHONE 2:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="telephone" placeholder=" " name="telephone2">
                        <label><i>Indiquer votre numero whatsapp</i></label>
                    </div>
                </div>               
            
                 <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="datefin">REGION</label>
                    <div class="col-sm-8">
                        <select class="form-control" name="idregion">
                            @foreach($allregions as $region)
                            <option class="col-sm-7" value="{{$region->idregion}}">{{$region->nomregion}}</option>
                            @endforeach
                        </select>
                    </div>
                </div> 
                                        
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="numPasseport">N° PASSPORT:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="numPasseport" placeholder=" " name="passeport">
                    </div>
                </div>
              
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="carteconsulaire">N° CARTE DE PRESSE:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="carteconsulaire" placeholder=" " name="numcartepresse">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="personneprevenir">PERSONNE A PREVENIR:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="personneprevenir" placeholder=" " name="personneprevenir">
                        <label><i>Nom et Prenom(s) de la personne à prevenir</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="telephonepersp">TELEPHONE:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="telephonepersp" placeholder=" " name="telephonepersp">
                        <label><i>Telephone de la personne à prevenir</i></label>
                    </div>
                </div> 
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="references">REFERENCES JOURNALISTIQUES :</label>
                    <div class="col-sm-7">
                        <textarea class="form-control" name="refjournal"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="parcours">PARCOURS PROFESSIONNEL :</label>
                    <div class="col-sm-7">
                        <textarea class="form-control" name="parcourspro" rows="5"></textarea>
                    </div>
                </div>
                <input type="hidden" value="{{$iduser}}" name="identifiant">
                <input type="hidden" value="1" name="actif">
            </div>
        </div>				
    </div>
    <p>

    <div class="col-sm-12">  <!-- Bloc 2-->
        <div class="card"> <div class=" card text-center card-header">INFORMATIONS SUR L'ORGANE DE PRESSE</div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="organe" class="col-sm-3 col-form-label">NOM DE L'ORGANE</label>
                    <div class="col-sm-8">
                        <input class="form-control" id="telorgane" type="text" name="organe"/>          
                    </div>

                </div>
                <div class="form-group row">
                    <label for="organe" class="col-sm-3 col-form-label">TYPE DE PRESSE</label>
                    <div class="col-sm-5">
                        <select class="form-control" name="typepresse">
                            <option>Presse Ecrite</option>                       
                            <option>Radio</option>
                            <option>Tele</option>   
                            <option>Presse En Ligne</option>
                        </select>
                    </div>

                </div>

                <p></p>

                <div class="form-group row">
                    <label for="telorgane" class="col-sm-3 col-form-label">TELEPHONE</label>
                    <div class="col-sm-4">
                        <input class="form-control" id="telorgane" type="text" name="telorgane"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="adressestruct" class="col-sm-3 col-form-label">ADRESSE</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="adressestruct" type="text" name="adresseorgane" />
                    </div>
                </div>
                <input type='hidden' value="1" name='actif'>
                <input type='hidden' value="" name='typecorrespondant'>
               
            </div> 
        </div>   
    </div>  
<br>
<div class="text-center">
    <button class="btn btn-primary" type="submit">CONTINUER</button>
    <button class="btn btn-primary" type="reset">ANNULER</button>

</div>
<p></p>
</form>
</body>
<br>
@endsection
