<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css">

        <title>PROJET</title>
    </head>
    <body>
        <div class="container" style="padding-top: 60px; margin-left: 400px;">  
            <div class="card col-md-6 offset-6 mt-3">
                <form action="" method="POST" style="background-color: gray;">
                    @csrf
                    <div class="card-header text-center bg-info text-white">
                        😊AJOUT PHASE😊
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Nom Phase</label>
                            <input type="text" class="form-control" id="" placeholder="Nom phase" name="nomphase">
                        </div>
                        <div class="form-group">
                            <label for="">Duree phase</label>
                            <input type="date" class="form-control" id=""  name="dureephase">
                        </div>
                        <div class="form-group">
                            <label for="">Priorite</label>
                            <input type="text" class="form-control" id=""  name="priorite" placeholder="priorite">
                        </div>
                        <button type="submit" class="btn btn-primary">Enregister</button>
                    </div>
                </form>
            </div>
        </div>

        
    </body>
    
</html>
