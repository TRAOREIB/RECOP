
@extends('template')
@section('titre')
SYGEM - Utilisateurs
@endsection
@section('content')
@section('script')
<script src="{{asset('js/dataTables.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/dataTables.min.css')}}">
@endsection

<body>

<div class="row listetitreformgrand" style="">
    <div class="col-xs-12" style="">
        <h3 class="titreform"><?php echo"<h3><u> Liste des Objets ";echo htmlentities($etat);if(htmlentities($etat)!="Mauvais"){echo"s </u></h3>";}else{echo" </u></h3>";} ?>
        <div class="titrebarform" ></div>
    </div>
</div> 


<p></p>
<div class="row divtabgrand" style="">
    <div class="col-sm-7 offset-1" >
        <div class="container col-sm-7">
    <div class="alert alert-danger">
        <b> PAS DE DONNEES DANS LA BASE </b>
    </div>
</div>
    </div>
</div>
<!--  fin de la liste-->

</body>
</html>
@endsection