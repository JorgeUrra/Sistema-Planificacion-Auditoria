<!DOCTYPE HTML>
<html>
<head>
<title>Login - Planificacion Auditoria</title>
<meta charset="UTF-8" />
<meta name="Designer" content="PremiumPixels.com">
<meta name="Author" content="$hekh@r d-Ziner, CSSJUNTION.com">
<script src="<?php echo base_url();?>archivos/rut/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>archivos/rut/jquery.Rut.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>archivos/rut/jquery.Rut.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>archivos/rut/sweetalert-dev.js" type="text/javascript"></script>

<link rel="stylesheet" type="text/css" link href="<?php echo base_url();?>archivos/login/reset.css">
<link rel="stylesheet" type="text/css" link href="<?php echo base_url();?>archivos/login/structure.css">
<link rel="stylesheet" type="text/css" href = "<?php echo base_url()?>archivos/rut/sweetalert.css">

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
        //funcio para validar rut
            $(document).ready(function(){
              $('#user').Rut({
                  on_error: function(){sweetAlert("Error", "Porfavor, vuelva a ingresar un rut correcto", "error");$('#user').val('');},
                  format_on: 'keyup'
              });
              $("#divError").addClass("divError");
            });

        </script>       


</head>

<body>


<?php
echo form_open_multipart('control/login');
?>  

<div class="box login" >

	<fieldset class="boxBody" >
		<div align="center" ><a class="ico"></a></div 
	  <label>Usuario</label>
     <input placeholder="Ingrese aquí su rut" id="user" type="text" required class="form-control" name="user"/>
	  
	  <label>Contraseña</label>
    <input placeholder="Ingrese aquí su contraseña" type="password" required class="form-control" name="pass" id="pass" />
	 <?php 
	 	if(isset($men)){
	 		echo '<br><label style="color:#f00">'.$men."</label>";
	 	}
	 ?>
	</fieldset>
	<footer>
	  <?php echo form_submit(array('value'=>'Login','class'=>'btnLogin')) ?>
	</footer>
</div>

<?php
echo form_close();
?>

</body>
</html>
