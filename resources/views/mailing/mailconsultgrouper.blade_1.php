<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
    </head>
    <body>

     @foreach($donnee as $info)
        M/Mme {{$info->nompatient}} {{$info->prenompatient}}, vous avez pris rendez-vous avec le {{$info->titremedecin}}
        {{$info->nommedecin}} {{$info->prenommedecin}} {{$info->specialitemedecin}} le {{$info->jourrendezvous}}
        de {{$info->heuredebut}} à {{$info->heurefin}} , vous occuppez la place {{$info->rang}} / {{$info->nbrconsultation}}   
     @endforeach 

    </body>
</html>