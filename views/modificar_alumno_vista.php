<!DOCTYPE html>
<?php
	include'libreria.php';
?>
<html lang="es">
	<?php
 		cabecera(); 
	?>
    <body>
		<header>
			<h1><i>Lista de alumnos</i></h1>
		</header> 
		<main>    
			<div class='contenedor'>
	<form action="modificar_alumno_controller.php" method="post">
		<label>Nombre:</label><input type="text" name="nombre" value="<?php echo $datosalumno['Nombre'] ?>"><br>		
		<label>Apellido1:</label><input type="text" name="apellido1" value="<?php echo $datosalumno['Apellido1']?>"><br>			<label>Apellido2:</label><input type="text" name="apellido2" value="<?php echo $datosalumno['Apellido2']?>"><br>	
		<label>Fecha de nacimiento:</label><input type="text" name="fecha_nac" placeholder="DD-MM-YYYY"  value="<?php echo $datosalumno['Fecha_nac'] ?>"><br>	
		<input type="hidden" value="<?php echo $datosalumno['id'] ?>" name="id">
		<input type="submit" value="Enviar">
	</form>
</div>
		</main>
		<?php
			pie();
		?> 
    </body>
</html>