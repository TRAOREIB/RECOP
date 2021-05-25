<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>	
<!--Affichage de la liste des demandeurs*-->

    <div class="row listetitreformgrand" style="">
      <div class="col-sm-12" style="">
        <h3 class=" offset-sm-2"> Liste des demandeurs</h3>
      </div>
    </div> 
    <div class="col-sm-7" >
        <div class="col-xs-12 ligneform " style="background-color: #EEE">
            <table class="table table-striped table-condensed" id="table">
                <thead>
                    <tr style="background-color:#2a6496;color: #FFFFFF;">
                        <th>NOM</th>
                        <th>PRENOM</th>
                        <th>MODIFIER</th>
                        <th>SUPPRIMER</th>   
                    </tr>
                </thead>
                <tbody>

                     @foreach($alldemandeur as $demandeur)
                    <tr>
                        <td>{{ $demandeur->nom}}</td>
                        <td>{{ $demandeur->prenom}}</td>
                        <td title="Modifier">
                            <form method="GET" action="{{ route('demandeur.edit',[$demandeur->iddemandeur]) }}">
                                {{method_field('EDITER') }}
                                {{ csrf_field() }}
                                <input type="submit" value="Modifier" style="border: 0px;background-color:">
                            </form>
                        </td>
                       
                       <td title="Supprimer">
                            <form method="POST" action="{{ route('demandeur.destroy',[$demandeur->iddemandeur]) }}">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <a ></a>
                                <input type="submit" value="Supprimer" style="border: 0px;background-color:">
                            </form>                    
                        </td>

                    </tr>
                    @endforeach      
                </tbody>
            </table>
       
        </div>
    </div>

    <script>
    $(document).ready(function () {
        $('#table').DataTable();
    });


</body>
</html>