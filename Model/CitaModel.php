<?php
class Citas_modelo{

    private $db;
    private $citas;

    public function __construct(){
        $this->db = conectar::conexion();
        $this->citas = array();
    }
    public function get_citas(){
        $sql = "select * from citas";
        $resultado = $this->db->query($sql);
        while($row = $resultado->fetch_assoc())
        {
            $this->citas[] = $row;
        }
        return $this->citas;
        
    }

    public function insertar($num_id,$nombres,$apellidos,$nombreMascota,$fechacita,$horacita){
        
            $resultado = $this->db->query("INSERT into citas (num_id,nombres,apellidos,
            nombreMascota,fechacita,horacita) VALUES
            ('$num_id','$nombres','$apellidos','$nombreMascota','$fechacita','$horacita')");
                
    }

    public function modificar($codigo,$num_id,$nombres,$apellidos,$nombreMascota,$fechacita,$horacita){
			
        $resultado = $this->db->query
        ("UPDATE citas SET num_id='$num_id',nombres='$nombres',apellidos='$apellidos',nombreMascota='$nombreMascota',fechacita='$fechacita',horacita='$horacita' WHERE codigo= '$codigo'");			
    }

    public function eliminar($codigo){
    $resultado = $this->db->query(" DELETE FROM citas WHERE codigo= '$codigo'");
    }

    
    public function get_cita($codigo){
        $sql = "SELECT * FROM citas WHERE codigo = '$codigo' LIMIT 1";
            $resultado = $this->db->query($sql);
            $row=$resultado->fetch_assoc();
            return $row;
    }
        
    
}

?>