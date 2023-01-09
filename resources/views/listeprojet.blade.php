<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css">

        <title>PROJET</title>
    </head>
    <body>
        <div class="card-body">
            <table class="table table-bordered">
                <div class="card-header text-center bg-primary text-white">
                    LISTES DES PROJETS
                </div>
                <tr>
                    <th>#</th>
                    <th>NOM PROJET</th>
                    <th>DATE DEBUT</th>
                    <th>DATE FIN</th>
                    <th>DESCRIPTION</th>
                    <th>DETAIL</th>
                </tr>
                @foreach($listeprojet as $p)
                    <tr>
                       <td>{{$p->id}}</td>
                       <td>{{$p->nom}}</td>
                       <td>{{$p->date_debut}}</td>
                       <td>{{$p->date_fin}}</td>
                       <td>{{$p->description}}</td>
                       <td><a href="{{ route('detail',$p->id)}}">VOIR DETAIL</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
       

        
    </body>
    
</html>
