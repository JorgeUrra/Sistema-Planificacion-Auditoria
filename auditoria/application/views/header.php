<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="<?php echo base_url();?>archivos/header/css/style.css" rel="stylesheet">
 <script src="<?php echo base_url();?>archivos/header/js/jquery-1.10.2.min.js" type="text/javascript"></script>
 <script src="<?php echo base_url();?>archivos/header/js/responsive-nav.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo base_url();?>archivos/bootstrap/css/bootstrap.min.css">
    <!--para validar rut -->
<script src="<?php echo base_url();?>archivos/rut/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>archivos/rut/jquery.Rut.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>archivos/rut/jquery.Rut.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>archivos/rut/sweetalert-dev.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href = "<?php echo base_url()?>archivos/rut/sweetalert.css">
     <!--estilo para el formulario -->
<link rel="stylesheet" href="<?php echo base_url();?>archivos/formulario/style_admin.css">
<script src="<?php echo base_url();?>archivos/bootstrap/js/bootstrap.min.js"></script>

 <script type="text/javascript"></script>
 </head>
	<!----Start-header------>
	 <div class="header">
	     <div class="wrap">
			<div class="top-header">
				<div class="logo">
					<img src="<?php echo base_url();?>archivos/images1/logo.png" alt="logo" title="logo"/>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<img src="<?php echo base_url();?>archivos/images1/logo-transparente.png" alt="logo" title="logo"/>

				</div>
			</div>

			<!---start-top-nav---->
			<div class="top-nav ">
				<div class="top-nav-left">
					<?php 
					if($_SESSION['cuenta']['identificador']=='Administrador'){
					?>
					<div id="nav">
				      	<ul>
				        	<li <?php if($var==0) echo 'class="active"' ?>>
				        		<a href="<?php echo site_url()?>/control/home">Auditoria</a>
				        	</li>
				        	<li <?php if($var==1) echo 'class="active"' ?>>
				        		<a href="<?php echo site_url()?>/control/ingresar_profesor">Ingresar Profesor</a>
				        	</li>
				        	<li <?php if($var==2) echo 'class="active"' ?>>
				        		<a href="<?php echo site_url()?>/control/buscar_profesor">Modificar Profesor</a></li>

				         	<li <?php if($var==3) echo 'class="active"' ?>>
				         		<a href="<?php echo site_url()?>/control/mostrar_malla">Cursos</a></li>

				         	<li <?php if($var==4) echo 'class="active"' ?>>
				         		<a href="<?php echo site_url()?>/control/listado_profesores">Listado Profesores</a></li>
				         	<li <?php if($var==5) echo 'class="active"' ?>>
				         		<a href="<?php echo site_url()?>/control/agregar_noticia">Agregar Noticia	</a></li>

				        	<li class="end"><a href="<?php echo site_url()?>/control/salir">Cerrar Sesión</a></li>
				     	</ul>
				     <?php
					}
					if($_SESSION['cuenta']['identificador']=='Profesor'){
					?>
						<div id="nav">
						<ul>
							<li <?php if($var==0) echo 'class="active"' ?>>
				        		<a href="<?php echo site_url()?>/control/noticias">Noticias</a>
				        	</li>
				        	<li <?php if($var==7) echo 'class="active"' ?>>
				        		<a href="<?php echo site_url()?>/control/home_profesor">Cursos</a>
				        	</li>
				        	<li class="end"><a href="<?php echo site_url()?>/control/salir">Cerrar Sesión</a></li>

				        </ul>
					<?php
					}
					?>
		       		</div>
				</div>
				<script>
			      	var navigation = responsiveNav("#nav");
			    </script>
				<div class="clear"> </div>
			</div>
			<!---End-top-nav-->
		</div>
	</div>
	
	<!----End-header----->