<?php
require_once("../config/db.php");
require_once('../models/conexion_model.php');
$con = new conexion();
if ($con->borrar_conexion()) {
	header("Location: ../index.php");
}
?>