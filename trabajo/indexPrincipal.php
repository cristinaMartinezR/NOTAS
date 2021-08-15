<?php
session_start();

if(isset($_SESSION['usuario'])){
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertar datos</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>


        <div id="wrapper" class="container">
  
                
                 <center>

                    <h1>Insertar nueva nota</h1><hr>
                        <form  method="POST" name="form-work" action="logica/guardar.php">
                    
                                <fieldset>
                                
                                  <div class="form-group">
                                    <div class="col-md-6">
                                      <label class="control-label" for="nombre">Nombre de Tarea </label>
                                      <input name="nombre" class="form-control" placeholder="Nombre de tarea" type="text">
                                      </div>
                                    </div>
                          
                                  <div class="form-group">
                                      <div class="col-md-6">
                                        <label class="control-label" for="description">Descripcion</label>
                                        <input name="descripcion" class="form-control" placeholder="descripcion" type="text">
                                      </div>
                                    </div>
                          
                                    
                          
                                    
                          
                                    <div class="form-group">
                                      <div class="col-md-6">
                                        <label class="control-label" for="fecha">fecha</label>
                                        <input name="fecha" class="form-control" placeholder="escribe la fecha" type="text">
                                      </div>
                                    </div>
                          
                                   
                                  
                                    <div class="form-group">
                                      <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block info">Guardar</button>
                                      </div>
                                        <button type="button" class="btn btn-primary btn-lg btn-block info"><a style="color:white;" href="consultar.php"> ver tus notas </a></button>
                                      </div>
                                        <button type="button" class="btn btn-primary btn-lg btn-block info"><a style="color:white;" href="cerrar.php">cerrar sesion </a></button>
                                      </div>
                                    </div>  
                                </fieldset> 
                              </form>
                 </center>
              </div>
    




</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</html>
<?php
}
?>