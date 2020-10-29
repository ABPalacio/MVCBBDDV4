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
				<table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido 1</th>
                    <th>Apellido 2</th>
                   	<th>Nota</th>
					
					<?php
					if ($identificado=='ok') { ?>
					<th>Añadir/Corregir Calificación</th>
					<?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $user) { ?>
                <tr>
                    <td><?php echo $user['Nombre']; ?></td>
                    <td><?php echo $user['Apellido1']; ?></td>
                    <td><?php echo $user['Apellido2']; ?></td>
                   	<td><?php echo $user['nota']; ?></td>
					<?php if ($identificado=='ok') { ?>					
					<td>
						<form action="poner_nota_controller.php" method="post">
							<input type="hidden" value="<?php echo $user['id'] ?>" name="id">
							<input type="hidden" value="<?php echo $nombre_curso['id'] ?>" name="id_curso">
							<input type="hidden" value="<?php echo $nombre_curso['NombreA'] ?>" name="elcurso">
							<input type="number" name="nota" maxlength=3>	
							<input type="submit" class="boton" value="Enviar">
						</form>	
					</td>
					<?php } ?>
				</tr>
               <?php } ?>
            </tbody>
        </table>
				</div>
		</main>
		<?php
			pie();
		?> 
    </body>
</html>