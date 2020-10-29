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
			<h1>Lista de alumnos del curso <?php echo $nombre_curso['NombreA']; ?> </h1>
		</header> 
		<main>    
			<div class='contenedor'>
		<form method="post" action="../controllers/validar_controller.php" name="signin-form">
    		<div class="form-element">
        		<label>Username</label>
        		<input type="text" name="username"  required />
    		</div>
    		<div class="form-element">
        		<label>Password</label>
        		<input type="password" name="password" required />
    		</div>
    		<button type="submit" class="boton" name="login" value="login">Log In</button>
		</form>		
	</div>
		</main>
		<?php
			pie();
		?> 
    </body>
</html>