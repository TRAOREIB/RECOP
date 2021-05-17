
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />   
	<title>Recepisse</title>
<script src="{{asset('js/dataTables.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/dataTables.min.css')}}">
<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    <div class="" style="margin-left: 13px">
    <div>
        <label style="font-family: fantasy">DIRECTION GENERALE DES MEDIA</label>
    </div>
    <div>
        <label style="font-family: fantasy">CONCOURS PRIX GALIAN <?php echo date("Y"); ?></label>
    </div>
    
   </div>        
    
    
    <div class="alert alert-danger" style="width: 400px">
        <label><b>RECEPISSE D'INSCRIPTION N° {{$numrecepisse->numero}}<b></label>
    </div>
      
    
        
        
        <div class="ligneform " style="">
            <table class="table table-striped table-condensed" id="table" style="width:900px;margin-left:0px">
                <thead><th><b>Information du Candidat</b> </th></thead>
                    <tr>                 
                        <td style="align-self: flex-end"><b>NOM : {{$candidat->nom}}</b></td>                                   
                    </tr>
                    <tr>                 
                        <td style="align-self: flex-end"><b>PRENOM : {{$candidat->prenom}}</b></td>                
                    </tr>
                    <tr>                 
                        <td style="align-self: flex-end"><b>DATE DE NAISSANCE : {{$candidat->datenaissance}}</b></td>                
                    </tr>
                    <tr style="">                 
                        <td style="align-self: flex-end"><b>CNIB : {{$candidat->cnib}}</b></td>                                     
                    </tr>
                    <tr style="">                 
                        <td style="align-self: flex-end"><b>TELEPHONE : {{$candidat->contact}}</b></td>                                         
                    </tr>
            </table>        
        
    </div>    
    
    <br><br>
<div class="ligneform " style="">
          <table class="table table-striped table-condensed" id="table" style="width:900px;margin-left:0px">
              <thead>  <th colspan="3">Liste des oeuvres soumises</th>  </thead>                                 
                   <tr>                    
                       <td style=""><b>Categorie</b></td>
                       <td style=""><b>Prémière Oeuvre</b></td>
                       <td style=""><b>Deuxième Oeuvre</b></td>                                              
                    </tr>
               
                    @foreach($recepisse as $rec)
                    <tr>
                        @if($rec->macategorie=="presse ecrite")
                        <?php echo" <td style=align-self: flex-end>";echo htmlentities($rec->macategorie); echo" </td>"; ?>
                        <?php echo" <td tyle=align-self: flex-end>";echo htmlentities($rec->titrearticle1); echo" </td>"; ?>
                        <?php echo" <td tyle=align-self: flex-end>";echo htmlentities($rec->titrearticle2); echo" </td>"; ?>
                        @endif
                         @if($rec->macategorie=="presse en ligne")
                        <?php echo" <td tyle=align-self: flex-end>";echo htmlentities($rec->macategorie); echo" </td>"; ?>
                        <?php echo" <td tyle=align-self: flex-end>";echo htmlentities($rec->url1); echo" </td>"; ?>
                        <?php echo" <td tyle=align-self: flex-end>";echo htmlentities($rec->url2); echo" </td>"; ?>
                        @endif
                        
                    </tr>
                    @endforeach      

            </table>

        </div>
    <br><br><br><br>
    <label>----------------------------------------------------
        -------------------------------------------------------
        ----------------------------------------</label>
    <div class="offset-4"><label style="font-family: fantasy;size: 50px"><i><h1>Bonne Chance !!!</h1></i></label></div>    
<label>----------------------------------------------------
        -------------------------------------------------------
        ----------------------------------------</label>
<!--  fin de la liste-->

</body>
</html>