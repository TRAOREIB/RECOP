@extends('template')
@section('contenu')
@section('script')
<script src="{{asset('js/dataTables.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/dataTables.min.css')}}">
@endsection
<div class="row listetitreformgrand" style="">
    <div class="col-xs-12" style="">
        <h3 class="titreform">Liste des Articles </h3>
        <div class="titrebarform" ></div>
    </div>
</div> 
<div class="row divbutajoutgrand">
    <a   href="{{route('article.create')}}" class="btn btn-primary" style="border: 1px solid #FFFFFF; background-color: #2a6496; border-radius: 0px; margin: 10px; padding: 10px;"><i class="glyphicon glyphicon-plus"></i> Nouveau </a>
</div>
<div class="row divtabgrand" style="">
    <div class="col-xs-12" >
        <div class="col-xs-12 ligneform " style="background-color: #EEE">
            <table class="table table-striped table-condensed" id="table">
                <thead>
                    <tr style="background-color:#2a6496;color: #FFFFFF;">
                        <th>Code article</th>
                        <th>Designation</th>
                        <th>Quantite</th>
                        <th>Unite</th>
                        <th>Categorie</th>
                        <th>Prix de vente</th>
                        <th></th>
                        <th></th>
        
                    </tr>
                </thead>
                <tbody>

                    @foreach($listearticle as $article)
                    <tr>
                        <td>{{ $article->codearticle }}</td>
                        <td>{{ $article->designation }}</td>
                        <td>{{ $article->qtglobale }}</td>
                        <td>{{ $article->unite }}</td>
                        <td>{{ $article->categorie }}</td>
                        <td>{{ $article->prixvente }}</td>
                        <td title="Modifier">
                            <form method="GET" action="{{ route('article.edit', ['id' => $article->idarticle]) }}">
                                {{method_field('EDITER') }}
                                {{ csrf_field() }}
                                <button style="border: 0px;background-color:" class="text-info" type="submit" ><i class="glyphicon glyphicon-edit"></i></button>
                            </form>
                        </td>
                        <td title="Supprimer">
                            <form method="POST" action="{{ route('article.destroy', ['id' => $article->idarticle]) }}">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <a ></a>
                                <button style="border: 0px;background-color:" class="text-danger" type="submit" onclick="return confirm('Confirmer la Suppression')"><i class="glyphicon glyphicon-remove"></i></button>
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