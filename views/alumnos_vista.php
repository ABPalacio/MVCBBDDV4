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
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido 1</th>
                    <th>Apellido 2</th>
                    <th>Fecha Nacimiento</th>
					
					<?php
					if ($identificado=='ok') { ?>
					<th>Operaciones</th>
					<?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $user) { ?>
                <tr>
                    <td><?php echo $user['Nombre']; ?></td>
                    <td><?php echo $user['Apellido1']; ?></td>
                    <td><?php echo $user['Apellido2']; ?></td>
                    <td><?php echo $user['Fecha_nac']; ?></td>
					<?php if ($identificado=='ok') { ?>					
					<td>
						<a href="../controllers/borrar_alumno_controller.php?id=<?php echo $user['id']?>">Borrar</a>
						<a href="../controllers/editar_alumno_controller.php?id=<?php echo $user['id']?>">Editar</a>					
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