<?php
/**
* clase Asisnaturas
*/
class asignaturas_model extends Connect
{
	private $db;
	private $asignaturas;
	public function __construct(){
		$this->db = Connect::connection();
		$this->asignaturas = array();
	}
	public function get_asignaturas(){
		$query = $this->db->query("SELECT * FROM Asignaturas");
		while ($rows = $query->fetch_assoc()){
			$this->asignaturas[] = $rows;
		}
		return $this->asignaturas;
	}
	
	public function get_asignatura($id_curso) {
		$sql="SELECT * FROM Asignaturas WHERE Asignaturas.id=".$id_curso;
		$query = $this->db->query($sql);
		$row = $query->fetch_assoc();
		return $row;
	}	
	
	public function set_poner_nota($id_curso,$id,$nota,$elcurso) {
		$sql = "UPDATE Alu_asig SET nota=$nota WHERE id_alumno=$id and id_asignatura=".$id_curso;
		
		$result = $this->db->query($sql);
        if ($result) {
			$message= "Calificación de ".$elcurso.". La nota que has obtenido en el examen es un: ".$nota;
			$to='benitoluispalacio@gmail.com';
			$subject='Email Calificación.';
			mail($to,$subject,$message,'');
		    return true;
        } else {
			echo "Error de MySQL debido a: \n";
    		echo  $this->db->error . "\n";
            return false;
        }		
	}				
}	

?>