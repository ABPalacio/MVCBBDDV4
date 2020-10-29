<?php
require_once("../config/db.php");
require_once('../models/alumnos_model.php');
$user = new alumnos_model();
if ((isset($_POST['curso'])) && ($_POST['curso'] != '') && (isset($_POST['id_alumno'])) && ($_POST['id_alumno'] != '')) {
    $resultado = $user->set_alumno_asignatura($_POST['curso'],$_POST['id_alumno']);
	//header('Location: ../index.php');
}
else {
	$nombre=$_POST['nombre'];
	$apellido1=$_POST['apellido1'];
	$apellido2=$_POST['apellido2'];
	$fecha_nac=$_POST['fecha_nac'];
	$user = new alumnos_model();
	$id='';
	$id_alumno=$user->set_alumno(null,$nombre,$apellido1,$apellido2,$fecha_nac);
	if ($id_alumno) {
		if ((isset($_POST['curso'])) && ($_POST['curso'] != '')) {
    		$resultado = $user->set_alumno_asignatura($_POST['curso'],$id_alumno);
			//header('Location: ../index.php');
			}
	}
	else
		{echo 'Algo está mal';}
}
?>