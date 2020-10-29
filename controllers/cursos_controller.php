<?php 
/**
 * Siempre se debe invocar antes al modelo que a la vista
 */
require_once("config/db.php");
require_once('models/cursos_model.php');
$asignatura = new asignaturas_model();
$cursos=$asignatura->get_asignaturas();
require_once('models/alumnos_model.php');
$user = new alumnos_model();
$alumnos = $user->get_alumnos();
require_once('models/conexion_model.php');
$con = new conexion();
$identificado = $con->identificado();
require('views/entrada_vista.php');
?>