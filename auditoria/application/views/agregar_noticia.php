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
  <link href="<?php echo base_url();?>archivos/bootstrap/css/bootstrap.css" rel="stylesheet">

<body>
  <div class="container">
      <div class="content" id="formulario4">   
    <div class="row">
          <h2 align="center"><span class="glyphicon glyphicon-edit"></span>  Agregar Noticias </h2>

        <?form_open_multipart(base_url()."control/agregar_noticia")?>
        <div class="panel-body">
          <table class="table">

            <form enctype="multipart/form-data" class="form-horizontal"  onsubmit="return valida_envia()" name="form_noticia" action="agregar_noticia" method="post">
              <tr>
                <!--<td><label  class="control-label col-xs-2">Id Noticia:</label></td>
               
                <td><input type="number" id ="idNoticia" name="idNoticia" class="form-control" placeholder="id" required></td>
              
              </tr>-->
              <tr>
                
                <td><h5 for="Profesor" class="control-label col-xs-2">Titulo:</h5></td>
                <fieldset>
                  <td><textarea required name="titulo" id="titulo" cols="150" rows="5" ></textarea></td>
                </fieldset>
              </tr>
              <tr>

                <td><h5 for="Profesor" class="control-label col-xs-2">Cuerpo:</h5></td>
                
                <td><textarea required  name="cuerpo" id="cuerpo" cols="150" rows="5" ></textarea></td>
              </tr>              
              <?php 

              
              date_default_timezone_set("America/Santiago");
              $fecha = date ("Y-m-d");
              echo $hora=date("G:i:s");


              ?>
              <tr>
                <td><h5 class="control-label col-xs-2">Fecha:</h5></td>
                
                <td><input readonly=readonly type="text" name="fecha" class="form-control" value="<?php echo $fecha  ?>"></td>
              </tr>
              <tr>
                <td><h5 class="control-label col-xs-2">Hora:</h5></td>
                
                <td><input readonly=readonly type="text" name="hora" class="form-control" value="<?php echo $hora  ?>"></td>
              </tr>

              <tr>
                <td><h5 class="control-label col-xs-5">Imagen:</h5></td>
                
                <td><input class ="" type="file" id="imagen" name="imagen" ></td>

              </tr>
              <tr>
                <td><h5 class="control-label col-xs-5">Archivo:</h5></td>
                
                <td><input class ="" type="file" id="archivo" name="archivo" ></td>
                
              </tr>

              <td><h5 class="control-label col-xs-2"></h5></td> <!--para separar el boton de la izquierda-->
              <td><button id="agregar_noticia" name="agregar_noticia"   type="submit" class="btn btn-success">Agregar </button></td>
            </tr>
            <?form_close()?>

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