<script src ="<?php echo base_url();?>archivos/ckeditor/ckeditor.js"></script>

<script language="JavaScript" type="text/JavaScript">
function valida_envia(){

  var titulo = $('#cke_titulo iframe').contents().
  find('body').html();
  titulo = titulo.replace(/<[^>]+>/g,'');
  
  if (titulo=="") 
  {
    alert("Porfavor ingrese titulo de la noticia");
    document.form_noticia.titulo.focus();
    return false;
  }
  var cuerpo = $('#cke_cuerpo iframe').contents().
  find('body').html();
  cuerpo = cuerpo.replace(/<[^>]+>/g,'');

  if (cuerpo=="") 
  {
    alert("Porfavor ingrese el cuerpo de la noticia");
    document.form_noticia.cuerpo.focus();
    return false;
  }
  return true;
  
}

</script>
<body>
         <div class="container">
      <div class="content" id="formulario4">   
    <div class="row">
              <h2 align="center"><span class="glyphicon glyphicon-edit"></span> Editar Noticias </h2>

                <div class="panel-body">
                <table class="table">

                <form enctype="multipart/form-data" class="form-horizontal" onsubmit="return valida_envia()" name="form_noticia"  action="editar_noticia" method="post">
                <tr>
                <!--<td><label  class="control-label col-xs-2">Id Noticia:</label></td>
               
                <td><input type="number" id ="idNoticia" name="idNoticia" class="form-control" placeholder="id" required></td>
              
              </tr>-->
                <tr>
                <td><h5 for="id" class="control-label col-xl-2">ID Noticia:</h5></td>
                
                <td><input readonly=readonly type="text" name="id" class="form-control" value="<?php echo $noticia_id  ?>"></td>

               </tr>
                <tr>
                
                <td><h5 for="Profesor" class="control-label col-xs-2">Titulo:</h5></td>
                
                <td><textarea name="titulo" id="titulo" cols="150" rows="5" required > <?php echo $titulo  ?> </textarea></td>
               
               </tr>
                <tr> 

                  <td><h5 for="Profesor" class="control-label col-xs-2">Cuerpo:</h5></td>
              
                <td><textarea name="cuerpo" id="cuerpo" cols="150" rows="5" required> <?php echo $descripcion ?> </textarea></td>
                </tr>              
                <?php     
                  date_default_timezone_set("America/Santiago");
                  $fecha = date ("Y-m-d");
                  $hora=date("G:i:s");
                ?>
                <tr>
                <td><h5 class="control-label col-xs-2">Fecha:</h5></td>
                              
                <td><input readonly=readonly type="text" name="fecha" class="form-control" value=" <?php echo $fecha  ?>"></td>
                </tr>
                 <tr>
                <td><h5 class="control-label col-xs-2">Hora:</h5></td>
                              
                <td><input readonly=readonly type="text" name="hora" class="form-control" value="<?php echo $hora  ?>"></td>
                </tr>

                <tr>

                <td><h5 class="control-label col-xs-5">Imagen:</h5></td>
                <td><input class ="" type="file" id="imagen" name="imagen"></td><br/>

                <input type="hidden" name="imagen_antigua" value="<?php echo $imagen ?>">

                </tr>
                <?php  
                //si existe imagen mostrar miniatura
                if(($imagen!="")){
                  ?>
                <tr>
                <?php echo "<td><a href='".base_url().'images_noticia/'.$imagen ."' class='product_img_link' target='_blank' title='". $imagen ."'> <img width='129' height='129' src='".base_url().'images_noticia/'.$imagen ."'></a><td>";
                 ?>
                 </tr>
                <?php
                  }   
                 ?>
                <tr>
                <td><h5 class="control-label col-xs-5">Archivo:</h5></td>
              
                <td><input class ="" type="file" id="archivo" name="archivo" ></td>

                <input type="hidden" name="archivo_antiguo" value="<?php echo $archivo ?>">
                </tr>
                  <?php  
                //si existe archivo mostrarlo
                if(($imagen!="")){
                  ?>
                 <tr>
                  <?php echo '<td><a target="_blank" href="'.base_url().'images_noticia/'.$archivo.'">'.$archivo.'</a></td>'; 
                  ?>
               </tr>
               <?php  
                  }
               ?>
                <td><label class="control-label col-xs-2"></label></td> <!--para separar el boton de la izquierda-->
                <td><button  id="editar_noticia" name="editar_noticia" type="submit" class="btn btn-success">Editar </button></td>
                </tr>
              </form> 
           </table>
            </div>   
            
             </div>
            
       </div>     
       </div>   

</div> 



</body> 


 <script>
 CKEDITOR.replace('titulo');
 CKEDITOR.replace('cuerpo');
</script>
