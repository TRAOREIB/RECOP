<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
         <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
         <script src="{{asset('js/bootstrap.js')}}"></script>
    </head>
    <body>
        <table class="table table-striped">
            <thead>
            <th>Nom Patient</th>
            <th>Prenom Patient</th>
            <th>Age</th>
            <th>Symptomes</th>
            <th>Antecedants</th>
            <th>Examens Faits</th>
            <th>Jour</th>

            </thead>
            <tbody>
                @foreach($donnee as $rd)
                <tr>
                    <td>{{$rd->nompatient}}</td>
                    <td>{{$rd->prenompatient}}</td>
                    <td>{{$rd->agepatient}}</td>
                    <td>{{$rd->symptomes}}</td>
                    <td>{{$rd->antecedants}}</td>
                    <td>{{$rd->examensfait}}</td>                 
                </tr>
                @endforeach
            </tbody>
            <tfoot></tfoot>
        </table>
      
    </body>
</html>