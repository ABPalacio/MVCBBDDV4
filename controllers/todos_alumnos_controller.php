<?php 
/**
 * Siempre se debe invocar antes al modelo que a la vista
 */
require_once("../config/db.php");
require_once('../models/alumnos_model.php');
$user = new alumnos_model();
$data = $user->get_alumnos();
require_once('../models/conexion_model.php');
$con = new conexion();
$identificado = $con->identificado();
require('../views/alumnos_vista.php');
?>