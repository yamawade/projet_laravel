<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css">

        <title>PROJET</title>
    </head>
    <body>
        <div class="container">  
            <div class="card col-md-6 offset-6 mt-3">
                <form action="" method="POST">
                    @csrf
                    <div class="card-header text-center bg-info text-white">
                        DETAIL DE PROJET
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Nom Projet</label>
                            <input type="text" class="form-control" id="" placeholder="Nom Projet" name="nomprojet" value="{{$detail->nom}}" readonly>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="">Date Debut</label>
                                <input type="date" class="form-control" id="" name="date_debut" value="{{$detail->date_debut}}" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Date Fin</label>
                                <input type="date" class="form-control" id="" name="date_fin" value="{{$detail->date_fin}}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Description Projet</label>
                            <input type="text" class="form-control" id="" name="desc" value="{{$detail->description}}" readonly>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <a class="btn btn-primary" href="http://127.0.0.1:8000/phase">Ajouter une phase</a>
       
    </body>
    
</html>
