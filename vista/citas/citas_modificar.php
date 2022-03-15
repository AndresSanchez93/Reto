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
        <form id="nuevo" name="nuevo" method="POST" action="index.php?c=citas&a=actualizar" autocomplete="off">
            <input type= "hidden" id="codigo" name="codigo" value="<?php echo $data["codigo"]?>"/>
            <div class="form-group">
            Número_id:<input type="text" id="num_id" name="num_id" value="<?php echo
            $data["citas"]["num_id"] ?>"/> <br/>
            </div>
            <div class="form-group">
            Nombres:<input type="text" id="nombres" name="nombres"value="<?php echo
            $data["citas"]["nombres"] ?>"/><br/>
            </div>
            <div class="form-group">
            Apellidos:<input type="text" id="apellidos" name="apellidos"value="<?php echo
            $data["citas"]["apellidos"] ?>"/><br/>
            </div>
            <div class="form-group">
            Nombre Mascota:<input type="text" id="nombreMascota" name="nombreMascota"value="<?php echo
            $data["citas"]["nombreMascota"] ?>"/><br/>
            </div>
            <div class="form-group">
            Fecha cita:<input type="date" id="fechacita" name="fechacita"value="<?php echo
            $data["citas"]["fechacita"] ?>"/><br/>
            </div>
            <div class="form-group">
            Hora cita:<input type="time" id="horacita" name="horacita"value="<?php echo
            $data["citas"]["horacita"] ?>"/><br/>
            </div>
        </div>
            <button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
        </form>   
    </body>
</html>    