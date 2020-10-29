<?php
$id=$_POST['id'];
$ape1=$_POST['apellido1'];
$ape2=$_POST['apellido2'];
$nombre=$_POST['nombre'];
$fec=$_POST['fecha_nac'];
require_once("../config/db.php");
require_once('../models/alumnos_model.php');
$user = new alumnos_model();
$datosalumno = $user->set_alumno($id,$nombre,$ape1,$ape2,$fec);
if ($datosalumno) {
	$data = $user->get_alumnos();
	require('../views/alumnos_vista.php');
}
else {
	echo 'Error';
}

?>