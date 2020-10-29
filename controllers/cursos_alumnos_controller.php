<?php 
/**
 * Siempre se debe invocar antes al modelo que a la vista
 */
$id_curso=$_GET['id_curso'];
require_once("../config/db.php");
require_once('../models/alumnos_model.php');
require_once('../models/cursos_model.php');
require_once('../models/conexion_model.php');
$con = new conexion();
$identificado = $con->identificado();
$user = new alumnos_model();
$asignatura = new asignaturas_model();
$data = $user->get_alumnos_curso($id_curso);
$nombre_curso=$asignatura->get_asignatura($id_curso);
require('../views/alumnos_curso_vista.php');
?>