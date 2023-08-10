<?php
	require 'conexion.php';
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM personas WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
?>
<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">MODIFICAR DATOS HABITANTE</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="update.php" autocomplete="off">
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombres</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escriba aqui los nombres correctos" value="<?php echo $row['nombre']; ?>" required>
					</div>
				</div>

				<div class="form-group">
					<label for="apellido" class="col-sm-2 control-label">Apellidos</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="apellido" name="apellido" placeholder="Escriba aqui los apellidos correctos" value="<?php echo $row['apellido']; ?>" required>
					</div>
				</div>
				
				<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />
				
				<div class="form-group">
					<label for="barrio" class="col-sm-2 control-label">Barrio/Vereda</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="barrio" name="barrio" placeholder="Escriba aqui el Barrio o Vereda correctos" value="<?php echo $row['barrio']; ?>" >
					</div>
				</div>
				
				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Telefono</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Telefono" value="<?php echo $row['telefono']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="observacion" class="col-sm-2 control-label">Observacion</label>
					<div class="col-sm-10">
						<select class="form-control" id="observacion" name="observacion">
							<option value="NINGUNA" <?php if($row['observacion']=='NINGUNA') echo 'selected'; ?>>NINGUNA</option>
							<option value="OK NORMAL" <?php if($row['observacion']=='OK NORMAL') echo 'selected'; ?>>OK NORMAL</option>
							<option value="OK WHATSAPP" <?php if($row['observacion']=='OK WHATSAPP') echo 'selected'; ?>>OK WHATSAPP</option>
							<option value="NUMERO NO ESTA EN USO" <?php if($row['observacion']=='NUMERO NO ESTA EN USO') echo 'selected'; ?>>NUMERO NO ESTA EN USO</option>
							<option value="NO CONTESTO" <?php if($row['observacion']=='NO CONTESTO') echo 'selected'; ?>>NO CONTESTO</option>
							<option value="EQUIVOCADO" <?php if($row['observacion']=='EQUIVOCADO') echo 'selected'; ?>>EQUIVOCADO</option>
							<option value="YA NO VIVE EN GUADALUPE" <?php if($row['observacion']=='YA NO VIVE EN GUADALUPE') echo 'selected'; ?>>YA NO VIVE EN GUADALUPE</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="rep" class="col-sm-2 control-label">¿Numero Repetido?</label>
					<div class="col-sm-10">
						<select class="form-control" id="rep" name="rep">
							<option value="NINGUNA" <?php if($row['rep']=='NINGUNA') echo 'selected'; ?>>NINGUNA</option>
							<option value="NO" <?php if($row['rep']=='NO') echo 'selected'; ?>>NO</option>
							<option value="SI" <?php if($row['rep']=='SI') echo 'selected'; ?>>SI</option>
						</select>
					</div>
				</div>
				
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>