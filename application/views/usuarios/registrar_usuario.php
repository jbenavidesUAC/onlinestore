<!DOCTYPE html>
<html>
<head>
	<title><?php echo $titulo?></title>
	<meta charset="utf-8">      <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="/extra/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/extra/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/extra/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="/extra/css/newuser-styles.css">    
    <script src="/extra/js/jquery-1.11.3.min.js"></script>
    <script src="/extra/bootstrap/js/bootstrap.min.js"></script>
    <script src="/extra/js/validator.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">

				


			<div class="card">

				<?php echo form_open('usuarios/registrar_usuario', array(
						'class'=>'form-horizontal',
						'data-toggle' => 'validator',
						'id' => 'fm_usuarios',
						'name' => 'fm_usuarios',
						'role' => 'form'
					));
				?>

				<div id="legend" align="center"><legend class="text-danger"><b><?php echo $titulo?></b></legend></div>

				<fieldset style="display: block; border: 2px solid; padding: 0px 50px 0px 50px; border-color: #337AB7">
					
					<legend style="color: #337AB7; text-align: center; ">Cuenta de usuario</legend>

					<div class="form-group">	
						<label for="email" class="text-primary">Correo electrónico:</label>
						<div class="controls">
						<?php							
							echo form_input($email);		
						?>						
						<div class="help-block with-errors"></div>
						</div>
					</div>

					<div class="form-group">	
						<label for="password" class="text-primary">Contraseña:</label>
						<div class="controls">
						<?php							
							echo form_password($contrasena);		
						?>
						<div class="help-block with-errors"></div>
						</div>
					</div>

					<div class="form-group">	
						<label for="confirmar_password" class="text-primary">Confirmar contraseña:</label>
						<div class="controls">
						<?php
							echo form_password($confirmar_contrasena);		
						?>
						<div class="help-block with-errors"></div>
						</div>
					</div>

				</fieldset>

				<br>

				<fieldset style="display: block; border: 2px solid; padding: 0px 50px 0px 50px; border-color: #337AB7">
					
					<legend style="color: #337AB7; text-align: center;">Datos personales</legend>

					<div class="form-group">	
						<label for="nombres" class="text-primary">Nombres:</label>
						<div class="controls">
						<?php
							echo form_input($nombres);		
						?>
						<div class="help-block with-errors"></div>
						</div>
					</div>

					<div class="form-group">	
						<label for="apellidos" class="text-primary">Apellidos:</label>
						<div class="controls">
						<?php
							echo form_input($apellidos);		
						?>
						<div class="help-block with-errors"></div>
						</div>
					</div>

					<div class="form-group">	
						<label for="cumpleanos" class="text-primary">Fecha de nacimiento:</label>
						<div class="controls">
						<?php
							echo form_input($cumpleanos);		
						?>
						<div class="help-block with-errors"></div>
						</div>
					</div>
					
					<div class="form-group">	
						<label for="telefono" class="text-primary">Celular:</label>
						<div class="controls">
						<?php
							echo form_input($telefono);		
						?>
						<div class="help-block with-errors"></div>
						</div>
					</div>

					<div class="form-group">	
						<label for="fotografia" class="text-primary">Fotografía:</label>
						<div class="controls">
						<?php
							echo form_input($fotografia);		
						?>
						<div class="help-block with-errors"></div>
						</div>
					</div>

				</fieldset>

				<br>

					<div class="form-group" style="text-align: center;>
						<div class="controls">
							<button class="btn btn-primary">Registrar</button>
							<a href="<?php echo base_url() ?>" class="btn btn-danger" >Salir</a>
						</div>
					</div>

				<?php echo form_close();?>
			</div>
		</div>
	</div>
</body>
</html>