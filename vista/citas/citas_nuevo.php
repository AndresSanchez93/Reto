<?php
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<script src="assets/js/bootstrap.min.js" ></script>
    </head>
    <body>
    <div class="container">
        <h2><?php echo $data["titulo"] ?></h2>
        <form id="nuevo" name="nuevo" method="post" action="index.php?c=citas&a=guarda" autocomplete="off">
            <div class="form-group">
            Número_id:<input type="text" id="num_id" name="num_id"/><br/>
            </div>
            <div class="form-group">
            Nombres:<input type="text" id="nombres" name="nombres"/><br/>
            </div>
            <div class="form-group">
            Apellidos:<input type="text" id="apellidos" name="apellidos"/><br/>
            </div>
            <div class="form-group">
            Nombre Mascota:<input type="text" id="nombreMascota" name="nombreMascota"/><br/>
            </div>
            <div class="form-group">
            Fecha cita:<input type="date" id="fechacita" name="fechacita"/><br/>
            </div>
            <div class="form-group">
            Hora cita:<input type="time" id="horacita" name="horacita"/><br/>
            </div>
            <button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
        </form> 
    </div>      
    </body>
</html>    
