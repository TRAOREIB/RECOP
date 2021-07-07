<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
    </head>
    <body>

     @foreach($donnee as $info)
        M/Mme {{$info->nompatient}} {{$info->prenompatient}}, vous avez pris rendez-vous avec le laboratoire {{$info->nomlaboratoire}}
        le {{$info->jourtest}} de {{$info->heuredebut}} à {{$info->heurefin}}. Meilleure Santé !!! 
     @endforeach 

    </body>
</html>