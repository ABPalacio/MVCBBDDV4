<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
require_once("../config/db.php");
require_once('../models/conexion_model.php');
$con = new conexion();
if ($con->comprobar_usuario($username,$password)) {
	header("Location: ../index.php");
}
else
{
	echo "Identificación erronea";
}


?>