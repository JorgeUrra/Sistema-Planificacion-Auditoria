<?php 
    $rut=$_SESSION['cuenta']['user'];
        $NOMBRE_1=$_GET['array'];
         $CODIGO_ASIGNATURA=$_GET['array2'];

$query = $this->mod_usuarios->mostrar_asignatura($rut);

  $query2 = $this->mod_usuarios->extraer_datos_planificacion($rut,$CODIGO_ASIGNATURA);
  $resultado = mysql_fetch_array ($query2);
  $plani=$resultado['PLANIFICACION'];
  date_default_timezone_set("America/Santiago");
    $fecha = date ("Y-m-d");
    if ($_POST["agregar"]) {

      $textarea = $_POST['text_area'];
      $rut=$_SESSION['cuenta']['user'];
      $CODIGO_ASIGNATURA=$_GET['array2'];

      $datos=array(
        'RUT_PROFESOR' => $rut,
        'CODIGO_ASIGNATURA' => $CODIGO_ASIGNATURA,
        'ANO_ASIGNATURA'=> $fecha,
        'PLANIFICACION'=> $this->input->post('text_area')
        );
      $this->db->insert('Planificacion',$datos);
    }
    if ($_POST["editar"]) {
      echo $rut=$_SESSION['cuenta']['user'];
      echo $CODIGO_ASIGNATURA=$_GET['array2'];
      $plani = $this->input->post('text_area2');
      $this->mod_usuarios->actualizar_planificacion($rut,$CODIGO_ASIGNATURA,$plani,$fecha);
    }

 ?>
<!DOCTYPE HTML>
<html>
<body>

    <link href="<?php echo base_url();?>archivos/header/css/style.css" rel="stylesheet">
       <script src ="<?php echo base_url();?>archivos/ckeditor/ckeditor.js"></script>
 <!---start-content-->
 <?php echo form_open_multipart(site_url().'/control/subir_archivo?array3='.$rut.'&array2='.$CODIGO_ASIGNATURA.'&array='.$NOMBRE_1);?>

  <div class="about-desc">
   <div class="content" id="formulario3">
    
            <div class="section group">
      <div class="lsidebar span_4_of_3 services_list">
          <ul>
             <h3><span>Cursos</span></h3>

              <?php while ($atri=mysqli_fetch_array($query)){?>  
            <li><a href="<?php echo site_url().'/control/home_profesor?array='.$atri['NOMBRE_1'].'&array2='.$atri['CODIGO_ASIGNATURA'];?>"><?php echo $atri['NOMBRE_1']?></a></li>
            <?php } ?> 
          </ul>
      </div>    
      <div class="cont span_5_of_3">
        <div class="blog_grid">
             
             <?php if((isset($_GET['array'])&&isset($_GET['array2']))||(isset($_POST['archivo']))){?>

             <h2 class="post_title"><?php echo $NOMBRE_1?> :</h2>
                          
              <!---Creacion de submenu-->
             
          <ul class="nav nav-tabs">
            <?php
                    $plani=$query2->PLANIFICACION;
                if (is_null($plani)){
                  ?>
                <!---Creacion de submenu-->
                <li><a href="#prueba" aria-controls="prueba" data-toggle="tab">Agregar Prueba</a></li>
            <li><a href="#revision" aria-controls="revision" data-toggle="tab">Agregar Revisión prueba</a></li>
            <li><a href="#planificacion" aria-controls="planificacion" data-toggle="tab">Agregar Planificación</a></li>
              
              <?php
                }else{?>
                  <li><a href="#prueba" aria-controls="prueba" data-toggle="tab">Agregar Prueba</a></li>
                  <li><a href="#revision" aria-controls="revision" data-toggle="tab">Agregar Revisión prueba</a></li>
                  <li><a href="#revision_p" aria-controls="revision_p" data-toggle="tab">Editar Planificación</a></li>
                <?php
                }
          ?>
          </ul>
        
        <div class="tab-content">
          <div class="tab-pane" id="planificacion">
              <div class="row">
                <body>   
                          <textarea name="text_area" id="text_area">
                              <?php
                                echo $tabla->text_area;
                              ?>                    
                          </textarea>  
                          <script>
                            CKEDITOR.replace('text_area');
                          </script>
                      </body> 
                      
                        <input onclick =" alert('Ingreso Correcto en la Base de Datos')" name="agregar" type="submit" value="Ingresar" class="btn btn-primary" onclick="confirmar()" onmouseover="hacer_hover()">                   
                   
              </div>
            </div>  
            
      
            <div class="tab-pane" id="revision_p">
              <div class="row">
                <body>   
                          <textarea name="text_area2" id="text_area2">
                              <?php
                                echo $plani;
                              ?>                    
                          </textarea>  
                          <script>
                            CKEDITOR.replace('text_area2');
                          </script>
                      </body>
                        <input name="editar" class="btn btn-primary" type="submit" value="Editar Planificacion"/>
              </div>
            </div>
          <div class="tab-pane" id="prueba">
              <br><br><br>

                <label for="archivo">Archivo:</label>
                <input type="file" name="prueba[]"  accept='image/*' class="input_field"/>
                <?php echo '<label style="color:#f00">'.form_error('archivo')."</label>";?>
                <br>
                <button type="imput" id="prueba" name="prueba" value="subir" class="btn btn-primary">Subir Prueba</button>
                  <!-- <td><button  href="#prueba" id="ver_archivos" name="ver_archivos" value="ver_archivos" class="btn btn-primary" >Ver_archivos</button></td>
            -->
            <div>

              
              <?php
              //if(isset($_POST['ver_archivos'])){  
              
              echo "Lista de archivos";
              $carpeta ='archivos_subidos/'.$rut.'/'.$NOMBRE_1.'/pruebas/';
            
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
                //}
                ?>
                <br><br><br>

            </div>  
            </div>

              <div class="tab-pane" id="revision">
                <br><br><br>

                <label for="archivo">Archivo:</label>
                <input type="file" name="revision[]"  accept='image/*' class="input_field"/>
                <?php echo '<label style="color:#f00">'.form_error('archivo')."</label>";?>
                <br>

                <button type="imput" id="revision" name="revision" value="subir" class="btn btn-primary">Subir Revisión</button>

              <!--  <td><button type="imput" id="ver_archivos" name="ver_archivos" value="ver_archivos" class="btn btn-primary">Ver_archivos</button></td>
            -->
            <div>

              Lista de archivos
              <?php  
              $carpeta ='./archivos_subidos/'.$rut.'/'.$NOMBRE_1.'/revision/';
            
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
                <br><br><br>
            </div>  

      
              </div>
              <br><br><br>
              <?php 
                  if(isset($men)){
                      echo '<label style="color:#f00">'.$men."</label><br><br><br><br>";
                  }
              ?>

           </div>
           <?php }else{//TERMINO DE CONDICION INICIAL PARA QUE NO MUESTRE LA TABLA HASTA QUE HAGA CLIC EN ALGUN CURSO?>

           <?php }//TERMINO DE ELSE ?>
            <!---termino de submenu-->
           <?php echo form_close();?>
           
      </div>  
      </div>
  </div>
   </div>
   </div>       
  
 <!---End-content-->
</body>
</html>
