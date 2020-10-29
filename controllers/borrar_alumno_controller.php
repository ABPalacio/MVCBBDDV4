<?php
$id_borrar=$_GET['id'];
require_once("../config/db.php");
require_once('../models/alumnos_model.php');
$user = new alumnos_model();
$databorrar = $user->borrar_alumno($id_borrar);
if ($databorrar) {
	$data = $user->get_alumnos();
	require_once('../models/conexion_model.php');
	$con = new conexion();
	$identificado = $con->identificado();
	require('../views/alumnos_vista.php');
}
else {
	echo 'Error';
}

?>