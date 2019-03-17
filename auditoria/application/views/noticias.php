<?php 

?>
<head>
  <meta charset="utf-8">
  <!-- codigo para barra de navegacion -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,800,600,400' rel='stylesheet' type='text/css'>
  <link href="<?php echo base_url();?>archivos/bootstrap/css/bootstrap.css" rel="stylesheet">
  <script src ="<?php echo base_url();?>archivos/ckeditor/ckeditor.js"></script>
  <link href="<?php echo base_url();?>archivos/header/css/style.css" rel="stylesheet">
  <script src="<?php echo base_url();?>archivos/header/js/jquery-1.10.2.min.js"></script>
  <script src="<?php echo base_url();?>archivos/header/js/responsive-nav.js"></script>
    <link href="<?php echo base_url();?>archivos/formulario/style_admin.css" rel="stylesheet">
  <!--para la notica -->
  <link href="<?php echo base_url();?>archivos/noticias/estilo.css" rel="stylesheet">
  <script type="text/javascript" src="<?php echo base_url();?>archivos/noticias/jquery.js"></script>

</head>
<!DOCTYPE HTML>
<html>
<body>


  <!---start-content-->
  <?php echo form_open_multipart(site_url().'/control/subir_archivo?array3='.$rut.'&array2='.$CODIGO_ASIGNATURA.'&array='.$NOMBRE_1);?>
  <div class="content" id="formulario4">
    <div class="row">
      <h2 align="center"><span class="glyphicon glyphicon-book"></span> Noticias de la Carrera de Auditoria</h2> 
      <div class="wrap">
        <?php  
                echo $mensaje;//imprimir si mensaje de borrado existoso o no
                    // Enviar consulta
                $consulta =$this->mod_usuarios->ver_noticias();
             // Mostrar resultados de la consulta
                $nfilas = mysql_num_rows ($consulta);
                if ($nfilas > 0)
                {

                 for ($i=0; $i<$nfilas; $i++)
                 {

                  $resultado = mysql_fetch_array ($consulta);
                  
                  echo "<div class='service_list' id='". $resultado['noticia_id'] ."' data='". $resultado['noticia_id'] ."'>";
                  if(($resultado['archivo']!="")){
                    echo '<li><a target="_blank" href="'.base_url().'images_noticia/'.$resultado['archivo'] .'">'.$resultado['archivo'] .'</a></li>';        
                  }
                  if(($resultado['imagen']!="")){
                   echo "<a href='".base_url().'images_noticia/'.$resultado['imagen'] ."' class='product_img_link' target='_blank' title='". $resultado['imagen'] ."'> <img width='129' height='129' src='".base_url().'images_noticia/'.$resultado['imagen'] ."'></a>";
                   
                 }

                    echo '<p class="info_general">Publicado: '. $resultado['fecha'] .'</p> ';//fecha
                    echo '<h3><a '. $resultado['titulo'].'</a></h3>';//titulo
                     echo '<p class="product_desc">' . $resultado['descripcion'] . '<br></p>';//descripcion(cuerpo)
                    echo "<div align='right'>";//aliniamos boton a la derecha de la pantalla
                    echo"</div>";
                    echo"</div>";
                  }
                }
                //si no hay noticias mostramos el mensaje
                else{
                  print '<div class="no_noticia">No hay noticias disponibles... </div>';
                  echo "</div>";
                }
                ?>
                
              </div>


              <!---termino de submenu-->
              <?php echo form_close();?>
              
            </div>  
          </div>       

          <!---End-content-->
        </body>
        </html>
