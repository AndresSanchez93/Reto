<?php

class citasControl{
    public function __construct(){
        require_once "model/CitaModel.php";
    }

    public function index(){
        
        $citas = new Citas_modelo();
        $data["titulo"]="Citas";
        $data["citas"] = $citas->get_citas();

        require_once "vista/citas/citas.php";

    }

    public function nuevo(){
        $data["titulo"]="Citas";
        require_once "vista/citas/citas_nuevo.php";
    }

    public function guarda(){
            
        $num_id = $_POST['num_id'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $nombreMascota = $_POST['nombreMascota'];
        $fechacita = $_POST['fechacita'];
        $horacita = $_POST['horacita'];
        
        
        $citas = new Citas_modelo();
       
        $citas->insertar($num_id,$nombres,$apellidos,$nombreMascota,$fechacita,$horacita);
        $data["titulo"]="Citas";
        $this->index();
        }

    public function modificar($codigo){
        $citas = new Citas_modelo();  

        $data["codigo"]= $codigo;
        $data["citas"] = $citas->get_cita($codigo);
        $data["titulo"]="Citas";
        require_once "vista/citas/citas_modificar.php";
    }

    public function actualizar(){
        
        $codigo= $_POST['codigo'];
        $num_id = $_POST['num_id'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $nombreMascota = $_POST['nombreMascota'];
        $fechacita = $_POST['fechacita'];
        $horacita = $_POST['horacita'];

        $citas = new Citas_modelo();    
        $citas->modificar($codigo,$num_id,$nombres,$apellidos,$nombreMascota,$fechacita,$horacita);
        $data["titulo"]="Citas";
        $this->index();
    }


    public function eliminar($codigo){  
        $citas = new Citas_modelo();
        $citas->eliminar($codigo);
        $data["titulo"]="citas";
        $this->index();
        
    }
    
}

?>