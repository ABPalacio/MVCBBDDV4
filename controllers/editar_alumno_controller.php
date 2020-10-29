<?php
$id=$_GET['id'];
require_once("../config/db.php");
require_once('../models/alumnos_model.php');
$user = new alumnos_model();
$datosalumno = $user->get_alumno($id);
if ($datosalumno) {
	require('../views/modificar_alumno_vista.php');
}
else {
	echo 'Error';
}

?>