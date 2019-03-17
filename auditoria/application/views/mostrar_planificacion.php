	<?php
	$rut = $_GET['array'];
	$CODIGO_ASIGNATURA = $_GET['array2'];
	$ano_asignatura = $_GET['array3'];
	$consulta = $this->mod_usuarios->extraer_datos_planificacion_admin($rut,$CODIGO_ASIGNATURA,$ano_asignatura);
	?>
	<head>
		<style type="text/css">
			table, th, td {
				border: 2px solid black;
			}
		</style>
	</head>
	<body>

		<link href="<?php echo base_url();?>archivos/bootstrap/css/bootstrap.css" rel="stylesheet">

		<script src ="<?php echo base_url();?>archivos/ckeditor/ckeditor.js"></script>
		<!---start-content-->	
		<div class="content" id="formulario3">
			<div class ="row">
				<h2 align="center"><span class="glyphicon glyphicon-book"></span> Planificacion</h2> 
				
				<textarea name="text_area" id="text_area">
					<?php
					echo $consulta->PLANIFICACION;
					?>                    
				</textarea>  
				<script>
					CKEDITOR.replace('text_area');
				</script>

			</div>
		</div>
	</body>
