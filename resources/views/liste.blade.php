<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css">

        <title>LISTE ETUDIANTS</title>



    </head>
    <body >
        
        @foreach ($etudiants as $e)
            <p>{{$e->nom}}</p>
        @endforeach
    </body>
    
</html>
