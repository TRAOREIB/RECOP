@extends('template')
@section('content')
@section('script')
<script src="{{asset('js/dataTables.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/dataTables.min.css')}}">
@endsection
<div class="row listetitreformgrand" style="">
    <div class="col-md-12" style="">
        <h3 class="titreform">Gestion des utilisateurs (administrateurs en rouge) </h3>
        <div class="titrebarform" ></div>
    </div>
</div> 
<div class="row divbutajoutgrand offset-8">
    <a   href="{{route('register')}}" class="btn btn-primary" ><span class="fas fa-plus"></span> Enregistrer un utilisateur </a>
    
</div>
<br/> <br/> 
<div class="row divtabgrand" style="">
    <div class="col-md-12" >
        <div class="col-md-12 ligneform " style="background-color: #EEE">
            <table class="table table-striped table-condensed" id="table">
        
                <thead>
                    <tr>
                        <th scope="col">Nom & Prenom(s)</th>
                        <th scope="col">Identifiant</th>
                        <th scope="col">Inscription</th>
                        <th scope="col">Role</th>
                        <th scope="col">Valide</th>
                        
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr @if($user->admin) style="color: red" @endif>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at->formatLocalized('%x') }}</td>
                        <td>{{ $user->role }}</td>
                        <td>@if($user->valid)<span class="fas fa-check fa-lg"></span>@endif</td>
                        <td ><div class="row">
                            <form method="GET" action="{{ route('users.edit', $user->id) }}">
                                {{method_field('EDITER') }}
                                {{ csrf_field() }}
                                <button  class="btn btn-warning btn-sm" type="submit" data-toggle="tooltip" title="Editer" ><span class="fas fa-edit"></span></button>
                                <input type="hidden" name="id" value="{{ $user->id }}">
                            </form> &nbsp;&nbsp;
                        
                            @unless($user->admin)
                            <form method="POST" action="{{ route('users.destroy', $user->id) }}">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <a ></a>
                                <button class="btn btn-danger btn-sm" type="submit" data-toggle="tooltip" title="Supprimer" onclick="return confirm("Vraiment supprimer l'utilisateur {{ $user->name }}?")"><span class="fas fa-trash"></span></button>
                            </form>  
                            @endunless
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    
<script>
  $(document).ready(function() {
    $('#table').DataTable();
} );
 </script>
@endsection

@section('script')

    <script>
        $(() => {
            $('a').removeClass('invisible')
        })
    </script>

    @include('partials.script-delete', ['text' => __('Vraiment supprimer cet utilisateur ?'), 'return' => 'removeTr'])

@endsection


