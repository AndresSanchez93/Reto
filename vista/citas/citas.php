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
        <a href="index.php?c=citas&a=nuevo"class="btn btn-primary">Agregar</a>
        <br/>
        <br/>
        <div class="table-responsive">
        <table border="1" width="80%" class="table">
            <thead>
                <tr>
                    <th>Número de Identificación</th>
                    <th>Nombres</th>
                    <th>apellidos</th>
                    <th>Nombre de la mascota</th>
                    <th>fecha cita</th>
                    <th>hora cita</th>
                    <th>editar</th>
                    <th>eliminar</th>
            </thead>
            <tbody>
                <?php foreach($data["citas"]as $dato){
                    echo "<tr>";
                    echo "<td> ".$dato["num_id"]."</td>";
                    echo "<td> ".$dato["nombres"]."</td>";
                    echo "<td> ".$dato["apellidos"]."</td>";
                    echo "<td> ".$dato["nombreMascota"]."</td>";
                    echo "<td> ".$dato["fechacita"]."</td>";
                    echo "<td> ".$dato["horacita"]."</td>";
                    echo "<td><a href='index.php?c=citas&a=modificar&codigo=".$dato["codigo"]."' class='btn btn-warning'>Modificar</a></td>";
					echo "<td><a href='index.php?c=citas&a=eliminar&codigo=".$dato["codigo"]."' class='btn btn-danger'>Eliminar</a></td>";
                    echo "</tr>";
                }
                ?>
            
            </tbody>    
        </table> 
        </div>
	</div>
    </body>
</html>    
