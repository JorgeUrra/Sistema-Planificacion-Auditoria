        
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
         <div id="sidebar_container">
            <div class="gallery">
                <div align="center">
            <div class="form-group">

             <?php 
                  echo form_open('control/buscar_profesor');?>
 
                  <td>
                    <div id="formulario4" align="center">
                    <h2 align="center"><span class="glyphicon glyphicon-search"></span> Buscar Usuario </h2> 
                        <div class="form-group">
                            <?php 
                                echo $mensaje; 
                            ?> 
                         
                        </div>
                        
                        <div class="form-group">

                            <h4 for="estado" class="col-sm-2 control-text">Rut Profesor</h4>
                            <div class="col-sm-5">
                              <input placeholder="Ej:17.931.904-7" type="text" class="form-control" name="rut" required="required" id="rut" />
                          </div>
                          <button type="input" class="btn tbn-default" name="buscar">
                            <span class="glyphicon glyphicon-search"></span> Buscar 
                        </button>
                    </div>

                </td>

                <?php echo form_close();?>
            </div>
        </td>
    </form>


</div>

</div>
</div>
