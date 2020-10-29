<?php 
	$id_nen=$_POST['id'];
	$id_curso=$_POST['id_curso'];
	$nota=$_POST['nota'];
	$elcurso=$_POST['elcurso'];
	require_once("../config/db.php");
	require_once('../models/alumnos_model.php');
	require_once('../models/cursos_model.php');
	require_once('../models/conexion_model.php');
	$con = new conexion();
	$identificado = $con->identificado();
	$user = new alumnos_model();
	if ($identificado=='ok') {
		$asignatura = new asignaturas_model();
		$data = $asignatura->set_poner_nota($id_curso,$id_nen,$nota,$elcurso);
	}	
	$user = new alumnos_model();
	$data = $user->get_alumnos_curso($id_curso);
	$nombre_curso=$asignatura->get_asignatura($id_curso);
	require('../views/alumnos_curso_vista.php');
	//	header('Location: ../index.php');
	//echo("La nota se ha corregido a un ".$nota);
?>