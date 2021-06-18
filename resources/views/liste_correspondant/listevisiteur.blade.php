@extends('tprecop.template')
@section('contenu')
<br>
<div class="text-center">
    {{-- <label style="font-family: fantasy;color: blue">NOUVEAU CORRESPONDANT</label> --}}
    <b><label style="" class="text-primary">LISTE DES CORRESPONDANTS</label></b>
</div>
 {{-- <div class="ligne_separe_titre"></div> --}}
 <hr>
    <br><br> 
	<a href="{{ route('generatepdf') }}">Download PDF</a><br>
	<a href="{{ route('listecorrespondant') }}">LISTE CORRESPONDANT PDF</a><br>
	<a href="{{ route('listeaccreditation1') }}">LISTE ACCREDITATION PDF</a><br>
	<a href="{{ route('listedemandeur1') }}">LISTE DEMANDEUR PDF</a><br>

<div class="row divtabgrand justify-content-center" style="">
    <div class="col-sm-12" >
        <div class="col-sm-12 ligneform " style="background-color: #EEE">
            <table class="table table-striped table-condensed" id="table">
                <thead>
                    <tr style="background-color:#2a6496;color: #FFFFFF;">
                        <th>NOM</th>
                        <th>PRENOM(S)</th>
                        <th>ORGANE</th>
                        {{-- <th>TYPE PRESSE</th> --}}
                        
                    </tr>
                </thead>
                <tbody>

                @foreach($allcorrespondant as $corresp) 
                    <tr>
                        <td>{{$corresp->nomcorrespondant }}</td>
                        <td>{{$corresp->prenomcorrespondant }}</td>
                        <td>{{$corresp->organe }}</td>
                        {{-- <td>{{$corresp->typepresse }}</td> --}}
                       
                    </tr>
                     @endforeach

                </tbody>
            </table>

        </div>
    </div>
</div>
<!--  fin de la liste-->
 <br><br>

<script>
    $(document).ready(function () {
        $('#table').DataTable();
    });
</script>
 @endsection