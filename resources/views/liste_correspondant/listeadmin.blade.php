@extends('tprecop.template')
@section('contenu')
@section('script')

<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/datatables.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/datatables.min.css')}}">
<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}"> 
@endsection
<br>
<div class="row listetitreformgrand" style="">
      <div class="col-sm-12" style="">
        <h3 class=" offset-sm-3"> LISTE DES CORRESPONDANTS </h3>
      </div>
</div> <br>

<div class="row divtabgrand" style="">
    <div class="col-sm-12" >
        <div class="col-sm-12 ligneform " style="background-color: #EEE">
            <table class="table table-striped table-condensed" id="table">
                <thead>
                    <tr style="background-color:#2a6496;color: #FFFFFF;">
                        <th>NOM</th>
                        <th>PRENOM(S)</th>
                        <th>CNIB</th>
                        <th>PASSPORT</th>
                        <th>TELEPHONE</th>
                        <th>MAIL</th>
                        <th>MEDIA</th>
                        <th>LIEU DE RESIDENCE</th>
                        <th>ACTION</th>
                       
                    </tr>
                </thead>
                <tbody>

                     @foreach($allcorrespondant as $corresp)
                    <tr>
                        <td>{{$corresp->nomcorrespondant }}</td>
                        <td>{{$corresp->prenomcorrespondant }}</td>
                        <td>{{$corresp->cnibcorrespondant }}</td>
                        <td>{{$corresp->passportcorrespondant }}</td>
                        <td>{{$corresp->telephonecorrespondant }}</td>
                        <td>{{$corresp->mailcorrespondant }}</td>
                        <td>{{$corresp->media }}</td>
                        <td>{{$corresp->lieuresidence }}</td>

                        <td title="RETIRER">
                            <form method="GET" action="{{ route('retirer',[$corresp->idcorrespondant]) }}">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                
                                <input type="submit" value="Retirer" style="border: 0px;background-color:">
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
</script>
@endsection