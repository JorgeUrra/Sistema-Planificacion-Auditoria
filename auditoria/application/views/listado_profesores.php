
<head>
  <title> Archivos </title>
  <link href="<?php echo base_url();?>archivos/bootstrap/css/bootstrap.css" rel="stylesheet">

</head>

<div class="container" id="formulario3">
    <div class="row">
        <h2 align="center"><span class="glyphicon glyphicon-education"></span>   Listado Profesores</h2>
        <?php

        $query = $this->mod_usuarios->listado_profesores();
        ?>
        <?php     $cod_asig = $_GET['cod_asig']; ?>
        <table class="table">
            <tr>
                <td style="color:black; font-size:200%" align="center">RUT</td>
                <td style="color:black; font-size:200%" align="center">Nombre</td>
                <td style="color:black; font-size:200%" align="center">Apellido</td> 
                <td style="color:black; font-size:200%" align="center">Codigo Asignatura</td>
                <td style="color:black; font-size:200%" align="center">Nombre Asignatura</td>
                <td></td>
            </tr>
            <?php 
            date_default_timezone_set("America/Santiago");
            $fecha = date ("Y-m-d");
            while ($atri=mysqli_fetch_array($query)) {?> 
            <?php $query2 = $this->mod_usuarios->extraer_datos_planificacion($atri['rut'],$atri['CODIGO_ASIGNATURA']);?>
            <tr>
                <td style="color:black; font-size:150%"align="center"><?php echo $atri['rut'] ?></td>
                <td style="color:black; font-size:150%"align="center"><?php echo $atri['NOMBRE_1']?></td>
                <td style="color:black; font-size:150%"align="center"><?php echo $atri['APELLIDO_1']?></td>
                <td style="color:black; font-size:150%"align="center"><?php echo $atri['CODIGO_ASIGNATURA']?></td>
                <td style="color:black; font-size:150%"align="center"><?php echo $atri['NOMBRE_A']?></td>
                <?php $atri['ANO_ASIGNATURA']?>
                <th style="color:white; font-size:150%"align="center">
                    <a href="<?php echo site_url().'/control/mostrar_archivos_admin?array='.$atri['rut'].'&array2='.$atri['NOMBRE_A']?>"  
                        name="planificacion" type="button" class="btn btn-primary" onmouseover="hacer_hover()"> Archivos</button>
                        <?php if(!is_null($query2->PLANIFICACION)){?>
                        <a href="<?php echo site_url().'/control/mostrar_planificacion_admin?array='.$atri['rut'].'&array2='.$atri['CODIGO_ASIGNATURA'].'&array3='.$atri['ANO_ASIGNATURA']?>"  
                            name="planificacion" type="button" class="btn btn-primary" onmouseover="hacer_hover()"> Planificacion</button></th>
                        </tr>
                        <?php }
                    } ?>   
                </table>      
            </div>
        </div>
