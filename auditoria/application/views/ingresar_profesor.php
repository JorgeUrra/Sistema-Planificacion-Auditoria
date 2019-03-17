
<!DOCTYPE html>
<html lang="en">

<script>
//Restricciones a cajas

	//Función que permite solo Números
function ValidaSoloNumeros() {
 if ((event.keyCode < 48) || (event.keyCode > 57)) 
  event.returnValue = false;
}
//permite digitar sólo texto, letras mayúsculas (del 65 al 90) y minúsculas (del 97 al 122) así:
function txNombres() {
 if ((event.keyCode != 32) && (event.keyCode < 65) || (event.keyCode > 90) && (event.keyCode < 97) || (event.keyCode > 122))
  event.returnValue = false;
}

function confirmar()
{
  if(confirm('¿ Esta Seguro que desea ingresar un nuevo Profesor?'))
    return true;
  else
    return false;
}
</script>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ingresar Profesor</title>
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


   <style type="text/css">      
          .divError{ 
              width: 300px;
              margin: 0 auto;
              height: 80px;
              text-align: center;
              border-radius: 33px 33px 33px 33px;
              -moz-border-radius: 33px 33px 33px 33px;
              -webkit-border-radius: 33px 33px 33px 33px;
              border: 0px solid #0f0e0f;
              background-color: #ed0909;
          } 
        </style>

        <script >
            $(document).ready(function(){
              $('#rut').Rut({
                  on_error: function(){sweetAlert("Error", "Porfavor, vuelva a ingresar un rut correcto", "error");$('#rut').val('');},
                  format_on: 'keyup'
              });
              $("#divError").addClass("divError");
            });
        </script>       
  </head>

  <body>

  	<div class="container" id="formulario4">
  		<div class="row">              

  				<h2 align="center"><span class="glyphicon glyphicon-education"></span> Ingresar Profesor </h2>
				<form class="form-horizontal" role="form" method="post" action="<?php echo site_url()?>/control/ingresar_profesor"><!--Accion del boton y para donde dirige  -->
					<?php echo form_open('control/ingresar_profesor');?>  
					<!--Imprimir mensaje de resultado  -->
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<?php 
							echo $mensaje; 

							?>	
					</div>
					</div>

					<div class="form-group">
						<h4 for="rut" class="col-sm-2 control-text">Rut</h4><!--col-sm-1 indica espacio entre nombre y la caja -->
						<div class="col-sm-5"><!-- cambiar tamaño de la caja para ingresar -->
							<input required  type="text" class="form-control" id="rut" name="rut" placeholder="Ingresar Rut" value="<?php echo htmlspecialchars($_POST['rut']); ?>">
							<?php echo "<p class='text-danger'>$errRut</p>";?>
						</div>
					</div>
					
					<div class="row">
						<h4 for="nombres" class="col-sm-2 control-text">Nombres</h4>
    					<div class="col-sm-5">
          					<input required type="text" class="form-control" id="nombre1" name="nombre1" placeholder="Primer Nombre" onkeypress="txNombres()" value="<?php echo htmlspecialchars($_POST['nombre1']); ?>">
							<?php echo "<p class='text-danger'>$errName1</p>";?>
     					</div>
     					<div class="col-sm-5">
            				<input required type="text" class="form-control" id="nombre2" name="nombre2" placeholder="Segundo Nombre" onkeypress="txNombres()" value="<?php echo htmlspecialchars($_POST['nombre2']); ?>">
							<?php echo "<p class='text-danger'>$errName2</p>";?>
    					</div>
					</div>
							
					<div class="row">
						<h4 for="apellidos" class="col-sm-2 control-text">Apellidos</h4>
						<div class="col-sm-5">
							<input required type="text" class="form-control" id="apellido1" name="apellido1" placeholder="Primer Apellido" onkeypress="txNombres()" value="<?php echo htmlspecialchars($_POST['apellido1']); ?>">
							<?php echo "<p class='text-danger'>$errApellido1</p>";?>
						</div>
						<div class="col-sm-5">
							<input required type="text" class="form-control" id="apellido2" name="apellido2" placeholder="Segundo Apellido" onkeypress="txNombres()" value="<?php echo htmlspecialchars($_POST['apellido2']); ?>">
							<?php echo "<p class='text-danger'>$errApellido2</p>";?>
						</div>
					</div>
					<div class="form-group">
						<h4 for="departamento" class="col-sm-2 control-text">Facultad</h4>
						<div class="col-sm-10">

							<select type="text" class="form-control" id="departamento" name="departamento" placeholder="Departamento" onkeypress="txNombres()" value="<?php echo htmlspecialchars($_POST['departamento']); ?>">
							<option value="Facultad de Cs. de la Salud">Facultad de Cs. de la Salud</option>
							<option value="Facultad de Cs. de la Educación">Facultad de Cs. de la Educación</option>
							<option selected="Facultad de Cs. de la Ingeniería">Facultad de Cs. de la Ingeniería</option>
							<option value="Facultad de Cs. Agrarias y Forestales">Facultad de Cs. Agrarias y Forestales</option>
							<option value="Facultad de Cs. Religiosas y Filosóficas">Facultad de Cs. Religiosas y Filosóficas</option>
							<option value="Facultad de Medicina">Facultad de Medicina</option>
							<option value="Facultad de Ciencias Básicas">Facultad de Ciencias Básicas</option>
							<option value="Facultad de Ciencias Sociales y Económicas">Facultad de Ciencias Sociales y Económicas</option>
							<option value="Instituto de Estudios Generales">Instituto de Estudios Generales</option>
							</select>

						</div>
					</div>		
					<div class="row">
						<h4 for="Contacto" class="col-sm-2 control-text">Contacto</h4>
						<div class="col-sm-5">
							<input required type="tel" pattern ="[0-9]{9}"class="form-control" id="telefono" name="telefono" onkeypress="ValidaSoloNumeros()" placeholder="Telefono" value="<?php echo htmlspecialchars($_POST['telefono']); ?>">
							<?php echo "<p class='text-danger'>$errTelefono</p>";?>
						</div>
						<div class="col-sm-5">
							<input required type="email" class="form-control" id="email" name="email" placeholder="ejemplo@dominio.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
							<?php echo "<p class='text-danger'>$errEmail</p>";?>
						</div>
					</div>
					<div class="form-group">
						<h4 for="estado" class="col-sm-2 control-text">Estado</h4>
						<div class="col-sm-5">
							<select type="text "class="form-control" id="estado" name="estado" value="<?php echo htmlspecialchars($_POST['estado']); ?>">
								<option value="Activo">Activo</option>
								<option value="Inactivo">Inactivo</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<h4 for="contraseña" class="col-sm-2 control-text">Contraseña</h4>
						<div class="col-sm-5">
							<input required type="text" class="form-control" id="contraseña" name="contraseña"  placeholder="Contraseña" value="<?php echo htmlspecialchars($_POST['contraseña']); ?>">
							<?php echo "<p class='text-danger'>$errContraseña</p>";?>
						</div>
					</div>
		
					<div class="form-group">
						<h4 for="tipo" class="col-sm-2 control-text">Tipo Privilegio</h4>
						<div class="col-sm-5">
							<select class="form-control" id="tipo" name="tipo" value="<?php echo htmlspecialchars($_POST['tipo']); ?>">
								<option value="Profesor">Profesor</option>
								<option value="Administrador">Administrador</option>
							</select>
						</div>
					</div>		
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<input id="ingresar" name="ingresar" type="submit" value="Ingresar" class="btn btn-primary" onclick="return confirmar()">
						</div>
					</div>
					<?php echo form_close();?>
				</form> 
			</div>
		</div>
	</div>   
  </body>
</html>