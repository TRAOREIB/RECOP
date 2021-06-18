
<html>
<head>
	<title>Liste des Objets</title>
<script src="{{asset('js/dataTables.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/dataTables.min.css')}}">
</head>
<body>

<div class="row listetitreformgrand" style="">
    <div class="col-xs-12" style="">
        <h3 class="titreform"><?php echo"<h3><u> Liste des Objets ";echo htmlentities($etat);if(htmlentities($etat)!="Mauvais"){echo"s </u></h3>";}else{echo" </u></h3>";} ?>
        <div class="titrebarform" ></div>
    </div>
</div> 



<p></p>
<div class="row divtabgrand" style="">
    <div class="col-xs-9 offset-1" >
        <div class="ligneform " style="background-color: #EEE">
            <table class="table table-striped table-condensed" id="table" style="width:900px;margin-left:0px">
                <thead>
                    <tr style="background-color:#2a6496;color: #FFFFFF;">
                       <?php $nb=htmlentities('N°'); echo " <th>$nb</th>"; ?>
                        <th>Numero Inventaire</th>
                        <th>Categorie</th>
                        <th>Nom</th>
                        <th>Nom Vernanculaire</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0 ?>
                    @foreach($liste as $listobj)
                    <?php $i++; $nom=htmlentities($listobj->nom);?>
                    <tr>
                         <th>{{$i}}</th>
                        <th>{{($listobj->numero)}}</th>	
                        <?php echo" <th>";echo htmlentities($listobj->classification); echo" </th>"; ?>
                        <?php echo" <th>";echo htmlentities($listobj->nom); echo" </th>"; ?>
                        <?php echo" <th>";echo htmlentities($listobj->nomvernanc); echo" </th>"; ?>
                    </tr>
                    @endforeach      

                </tbody>
            </table>

        </div>
    </div>
</div>
<!--  fin de la liste-->

</body>
</html>