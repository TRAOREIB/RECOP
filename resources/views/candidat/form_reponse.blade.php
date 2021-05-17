
@extends('template.template')
@section('contenu')
<script src="{{asset('js/dataTables.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/dataTables.min.css')}}">

<body>


<p></p>
<div class="row divtabgrand" style="">
    <div class="col-sm-7 offset-1" >
        <div class="container col-sm-7">
    <div class="alert alert-danger">
        <b> PAS D'OEUVRES SOUMISES </b>
    </div>
</div>
    </div>
</div>
<!--  fin de la liste-->

</body>
</html>
@endsection