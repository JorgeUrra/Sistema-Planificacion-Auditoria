<title>Planificacion Carrera Auditoria</title>
<script>

function confirmar()
{
  if(confirm('¿ Desea asignar este curso al profesor seleccionado?'))
    return true;
  else
    return false;
}
</script>
  <head>
  <meta charset="utf-8">
    <!-- codigo para barra de navegacion -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
     <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,800,600,400' rel='stylesheet' type='text/css'>

    <link href="<?php echo base_url();?>archivos/header/css/style.css" rel="stylesheet">
    <script src="<?php echo base_url();?>archivos/header/js/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url();?>archivos/header/js/responsive-nav.js"></script>
        <link rel="stylesheet" href="<?php echo base_url();?>archivos/bootstrap/css/bootstrap.min.css">
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


</head>
    
  <body>

    <div class="container" id="formulario4">
        <div class="row">              

                <h2 align="center"><span class="glyphicon glyphicon-education"></span> Lista Profesores </h2>
                

<?php
    
    $query = $this->mod_usuarios->asignar_profesor();

?>
            <?php     $cod_asig = $_GET['cod_asig']; ?>
                <table class="table">
                    <tr>
                        <td style="color:black; font-size:200%"align="center">RUT</td>
                        <td style="color:black; font-size:200%"colspan="2" align="center">Nombres</td>
                        <td style="color:black; font-size:200%"colspan="2" align="center">Apellidos</td> 
                        <td></td>
                    </tr>
                     <?php 
                      date_default_timezone_set("America/Santiago");
                      $fecha = date ("Y-m-d");
                      while ($atri=mysqli_fetch_array($query)) {?> 
                    <tr>
                        <td style="color:black; font-size:150%"align="center"><?php echo $atri['rut'] ?></td>
                        <td style="color:black; font-size:150%"align="center"><?php echo $atri['NOMBRE_1']?></td>
                        <td style="color:black; font-size:150%"align="center"><?php echo $atri['NOMBRE_2']?></td>
                        <td style="color:black; font-size:150%"align="center"><?php echo $atri['APELLIDO_1']?></td>
                        <td style="color:black; font-size:150%"align="center"><?php echo $atri['APELLIDO_2']?></td>
                        <th style="color:white; font-size:150%"align="center">
                        <a href="<?php echo site_url().'/control/pasar_datos_boton?array='.$atri['rut'].'/'.$cod_asig.'/'.$fecha?>" 
                        class="btn btn-primary btn-xs btn-block" type ="button" onclick="return confirmar()" >Seleccionar Profesor</button></th>
                    </tr>
                    <?php } ?>   
                </table>    

        </div>
    </div>