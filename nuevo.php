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
				<h3 style="text-align:center">NUEVO REGISTRO DE HABITANTE</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombres</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escriba aqui los Nombres" required>
					</div>
				</div>

				<div class="form-group">
					<label for="apellido" class="col-sm-2 control-label">Apellidos</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="apellido" name="apellido" placeholder="Escriba aqui los Apellidos" required>
					</div>
				</div>

				<div class="form-group">
					<label for="barrio" class="col-sm-2 control-label">Barrio/Vereda</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="barrio" name="barrio" placeholder="Escriba aqui el nombre del barrio o vereda" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Telefono</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
					</div>
				</div>

				<div class="form-group">
					<label for="observacion" class="col-sm-2 control-label">Observacion</label>
					<div class="col-sm-10">
						<select class="form-control" id="observacion" name="observacion">
							<option value="NINGUNA">NINGUNA</option>
							<option value="OK NORMAL">OK NORMAL</option>
							<option value="OK WHATSAPP">OK WHATSAPP</option>
							<option value="NUMERO NO ESTA EN US">NUMERO NO ESTA EN USO</option>
							<option value="NO CONTESTO">NO CONTESTO</option>
							<option value="EQUIVOCADO">EQUIVOCADO</option>
							<option value="YA NO VIVE EN GUADALUPE">YA NO VIVE EN GUADALUPE</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="rep" class="col-sm-2 control-label">¿Numero Repetido?</label>
					<div class="col-sm-10">
						<select class="form-control" id="rep" name="rep">
							<option value="NINGUNA">NINGUNA</option>
							<option value="NO">NO</option>
							<option value="SI">SI</option>
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