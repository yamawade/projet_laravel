<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css">

        <title>LISTE ETUDIANTS</title>



    </head>
    <body >
    <div class="container">
    <div class="card">
        <!-- <div style="background-color: #009879;">
            <h2 class="text-center" style="color: white;">LISTES DES ETUDIANTS</h2>
        </div> -->

            <div class="card-body">
                <table class="table table-bordered">
                    <tr style="background-color: gray;">
                        <th class="text-center " style="color: white;">#</th>
                        <th style="color: white;" class="text-center">Nom</th>
                        <th style="color: white;" class="text-center">Duree</th>
                    </tr>
                        <tr class=" bg-success">
                            
                            <td>{{$yama->id}}</td>
                            <td>{{$yama->nom}}</td>
                            <td>{{$yama->dure}}</td>
                              
                        </tr>

                        <tr >
                            
                            <td>{{$yama->id1}}</td>
                            <td>{{$yama->nom1}}</td>
                            <td>{{$yama->dure1}}</td>
                              
                        </tr>
                        <tr>
                            <td>{{$yama->id2}}</td>
                            <td>{{$yama->nom2}}</td>
                            <td>{{$yama->dure2}}</td>
                        </tr>
                        

                </table>
            </div>
    </div>
</div>
        
    </body>
    
</html>
