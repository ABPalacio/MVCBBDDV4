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
		<a href="controllers/todos_alumnos_controller.php">Listado de todos los alumnos</a>			
		<br>
		<br>Calificar alumnos en curso:	
		<?php foreach ($cursos as $curso) { ?>
               <br><a href="controllers/cursos_alumnos_controller.php?id_curso=<?php echo $curso['id']; ?>"><?php echo $curso['NombreA']; ?> </a>
        <?php } ?>
    <br><br><hr>
	<form action="controllers/insertar_matricula_controllers.php" method="post">
		<label>Elige curso:</label> 
		<select name="curso">
		<?php foreach ($cursos as $curso) { ?>
			<option value="<?php echo $curso['id']; ?>"><?php echo $curso['NombreA']; ?></option>
        <?php } ?>
		</select><br>
		Elige un alumno:
		<?php foreach ($alumnos as $alu) { ?><br>
			<input type="radio" value="<?php echo $alu['id']; ?>" name="id_alumno"> <?php echo $alu['Nombre'].' '.$alu['Apellido1'].' '.$alu['Apellido2']; ?> 
		<?php } ?>	
		<br><input type="radio" value="" name="id_alumno">Quiero crear un alumno nuevo:<br>
		<label>Nombre:</label><input type="text" name="nombre"><br>		
		<label>Apellido1:</label><input type="text" name="apellido1"><br>		
		<label>Apellido2:</label><input type="text" name="apellido2"><br>	
		<label>Fecha de nacimiento:</label><input type="text" name="fecha_nac" placeholder="DD-MM-YYYY"><br>	
		<input type="submit" class="boton" value="Enviar">
	</form>
	<?php if ($identificado=='ok') { ?>
		<A HREF="controllers/logout.php">Logout</A><br>
	<?php } else { ?>
		<A HREF="views/login_vista.php">Identificación</A><br>
	<?php } ?>
			</div>
		</main>
		<?php
			pie();
		?> 
    </body>
</html>