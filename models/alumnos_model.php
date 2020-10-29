<?php
/**
* clase Alumnos
*/
class alumnos_model extends Connect
{
	private $db;
	private $alumnos;
	public function __construct(){
		$this->db = Connect::connection();
		$this->alumnos = array();
	}
	public function get_alumno($id){
		$query = $this->db->query("SELECT * FROM Alumnos WHERE id=".$id);
		$row = $query->fetch_assoc();
		return $row;
	}
	
	public function get_alumnos(){
		$query = $this->db->query("SELECT * FROM Alumnos");
		while ($rows = $query->fetch_assoc()){
			$this->alumnos[] = $rows;
		}
		return $this->alumnos;
	}
	
	
	public function get_alumnos_curso($id_curso) {
		$sql="SELECT a.Nombre,a.Apellido1,a.Apellido2,a.id,a.Fecha_nac,Alu_asig.nota FROM Alumnos a,Asignaturas,Alu_asig WHERE a.id=Alu_asig.id_alumno AND Asignaturas.id=Alu_asig.id_asignatura and Asignaturas.id=".$id_curso;
		$query = $this->db->query($sql);
		while ($rows = $query->fetch_assoc()){
			$this->alumnos[] = $rows;
		}
		return $this->alumnos;
	}
	
	public function get_alu_curso_esta($asignatura,$alumno) {
		$sql="SELECT * FROM Alu_asig WHERE Alu_asig.id_asignatura=".$asignatura." and Alu_asig.id_alumno=".$alumno;
		$query = $this->db->query($sql);
		$row = $query->fetch_assoc();
		return $row;		
	}
	
	
	public function set_alumno($id,$nombre,$apellido1,$apellido2,$fecha_nac){
        $sql = "REPLACE INTO Alumnos(id,Apellido1,Apellido2,Nombre,Fecha_nac) VALUES ('".$id."','" . $apellido1 . "', '" . $apellido2 . "', '" . $nombre . "', '" . $fecha_nac . "')";
		echo $sql;
        if ($this->db->query($sql)) { 
		   return ($this->db->insert_id);
		}
        else {
            return false;
        }		
	}
	public function set_alumno_asignatura($asignatura,$alumno){
        $sql = "INSERT INTO Alu_asig(id_alumno,id_asignatura) VALUES ('" . $alumno . "', '" . $asignatura . "')";
        $result = $this->db->query($sql);
        if ($result) {
            return true;
        } else {
			echo "Error de MySQL debido a: \n";
    		echo  $this->db->error . "\n";
            return false;
        }		
	}	
	public function borrar_alumno($id){
		require_once('../models/conexion_model.php');
		$con = new conexion();
		if ($con->identificado()=='ok') {	
	        $sql ="DELETE FROM Alumnos where Alumnos.id=".$id;
	        if ($this->db->query($sql)) { 
			   return true;
			}
    	    else {
				echo "Error de MySQL debido a: \n";
	    		echo  $this->db->error . "\n";			
	            return false;
    	    }		
		}	
	}	
}
?>