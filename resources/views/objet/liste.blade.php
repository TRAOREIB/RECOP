@extends('template')
@section('content')
@section('script')
<script src="{{asset('js/dataTables.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/dataTables.min.css')}}">
@endsection
<div class="row listetitreformgrand" style="">
    <div class="col-xs-12" style="">
        <h3 class="titreform">GESTION DE L'OBJET </h3>
        <div class="titrebarform" ></div>
    </div>
</div> 
<div class="divbutajoutgrand" style="margin-left: 120px">
    <a   href="{{route('objet.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Nouveau </a>
</div>

@isset($message)
<div class="alert-success col-sm-4 offset-4"><label class="label-info" style="margin-left:70px"><b>&nbsp;&nbsp;&nbsp;&nbsp;{{$message}}</b></label></div>
@endisset
<p></p>
<div class="row divtabgrand" style="">
    <div class="col-xs-9 offset-1" >
        <div class="ligneform " style="background-color: #EEE">
            <table class="table table-striped table-condensed" id="table" style="width:900px;margin-left:0px">
                <thead>
                    <tr style="background-color:#2a6496;color: #FFFFFF;">
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        
                        <th></th>
                        <th></th>


                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0 ?>
                    @foreach($liste as $listobj)
                    <?php $i++ ?>
                    <tr >
                        <th>{{$listobj->nom}}</th>	
                        <th>{{$listobj->prenom}}</th>
                        <th>{{$listobj->nommedia}}</th>
                        <th>{{$listobj->created_at}}</th>
               
                        


                        <td title="MODIFIER">
                            <form method="GET" action="{{ route('objet.show', $listobj->idobjet) }}">
                                {{ method_field('EDIT') }}
                                {{ csrf_field() }}
                                <a ></a>
                                <button class="btn btn-warning btn-sm" type="submit" ><i class="fas fa-edit"></i></button>
                            </form>                    
                        </td>

                        <td title="SUPPRIMER">
                            <form method="POST" action="{{ route('objet.destroy', $listobj->idobjet) }}">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <a ></a>
                                <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Vraiment terirer un objet ?')"><i class="fas fa-trash"></i></button>
                            </form>                    
                        </td>

                        <td> {{$listobj->contenu}} </td>
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

    $('#appui').click(function () {
    $({{$i}}).modal();
    });

</script>
@endsection