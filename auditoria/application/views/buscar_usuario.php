        
        <div id='textoPr'>
            
            


       <article>
                    <hgroup>
                        <h2 align="center"><span class="glyphicon glyphicon-search"></span> Buscar Usuario </h2>
                    </hgroup>
                   
                    <div id="sidebar_container">
                        <div class="gallery">
                        <div align="center">
                            
                          <?php 
                         //   echo $this->session->flashdata('error');
                            echo form_open('control/buscar_usuario');?>
                            
                            <td>
                            <div id=formulario align="center"> 
                                <p><b>Rut Profesor</b> <input placeholder="Ej:17.931.904-7" type="text" class="form-control" name="rut" required="required" id="rut" /></p>
                               
                                <button type="input" class="btn tbn-default" name="mysubmit">
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
                    
                    
                    
                </article>
</div>