<?php
$rut = $_GET['array'];
$nombre_asignatura = $_GET['array2'];
?>
<body>

	<link href="<?php echo base_url();?>archivos/header/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url();?>archivos/bootstrap/css/bootstrap.css" rel="stylesheet">

	<script src ="<?php echo base_url();?>archivos/ckeditor/ckeditor.js"></script>
	<!---start-content-->

	<div class="content" id="formulario3">
		<div class="row">
			<h2 align="center"><span class="glyphicon glyphicon-download-alt"></span> Archivos</h2> 

			<div class ="section group content-botom">
				<div class ="col_1_of_2 span_1_of_2 content-bottom-left">
					<h3><span>Listado de pruebas</span>
						<br></br>
					<?php

					
					$carpeta ='archivos_subidos/'.$rut.'/'.$nombre_asignatura.'/pruebas/';

					if(is_dir($carpeta)){
						if($dir = opendir($carpeta)){
							while(($archivo = readdir($dir)) !== false){
								if($archivo != '.' && $archivo != '..' && $archivo != '.htaccess'){
									$base=base_url();
									echo '<li><a target="_blank" class="glyphicon glyphicon-file" href="'.$base.$carpeta.$archivo.'">'.$archivo.'</a></li>';
								}			
							}
							closedir($dir);
						}
					}
					?>
					</h3>
					
					
				</div>

				<div class="col_1_of_2 span_1_of_2 content-bottom-left">									<h3><span>Listado de revisiones de Pruebas</span>
				<br></br>
					<?php  
					$carpeta ='./archivos_subidos/'.$rut.'/'.$nombre_asignatura.'/revision/';
					if(is_dir($carpeta)){
						if($dir = opendir($carpeta)){
							while(($archivo = readdir($dir)) !== false){
								if($archivo != '.' && $archivo != '..' && $archivo != '.htaccess'){
									$base=base_url();
									echo '<li><a target="_blank" class="glyphicon glyphicon-file" href="'.$base.$carpeta.$archivo.'">'.$archivo.'</a></li>';
								}			
							}
							closedir($dir);
						}
					}
					?>
				</h3>

					
					
				</div>
			</div>
		</div>
	</div>
</body>
