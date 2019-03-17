        <link rel="stylesheet" href="<?php echo base_url();?>archivos/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>archivos/formulario/style_admin.css">
        <div id='textoPr'>
            
            


       <article>
                    <hgroup>
                        <h2 align="center"><span class="glyphicon glyphicon-edit"></span> Modificar Usuarios </h2>
                    </hgroup>
           <style>
            h7   {color:red}
            .Box {
	           background-color: #E60000;
	           border: 2px solid #E60000;
            }
        </style>
                   
                    <div id="sidebar_container">
                        <div class="gallery">
                        <div align="center">
                            
                          
                          <?php 
                         //   echo $this->session->flashdata('error');
                            echo form_open('control/modificar_eliminar_usuario');?>
                            
                            <td>

                                <div align="center" id=formulario> 
                                <p><b>Rut Profesor</b> <input required autofocus placeholder="Ej:17.854.398-9" type="text" class="form-control" name="rut" id="rut" value=<?php echo $rut?> /></p>
                                <p><b>Primer Nombre </b> <input  required  placeholder="Ej:Ignacio" type="text"  class="form-control" name="nuevo_nombre_1" id="nuevo_nombre_1" value=<?php echo $nombre_1?>  /></p>
                                <p><b>Segundo Nombre </b> <input required  placeholder="Ej:Alberto" type="text"  class="form-control" name="nuevo_nombre_2" id="nuevo_nombre_2" value=<?php echo $nombre_2?> /></p>
                                <p><b>Apellido Paterno</b> <input required  placeholder="Ej:Monjes"type="text" class="form-control" name="nuevo_apellido_1" id="nuevo_apellido_1" value=<?php echo $apellido_1?> /></p>
                                <p><b>Apellido Materno</b> <input required placeholder="Ej:Valdés" type="text" class="form-control" name="nuevo_apellido_2" id="nuevo_apellido_2" value=<?php echo $apellido_2?> /></p>
                                <p><b>Departamento</b> <input required placeholder="Ej:Departamento 1" type="text" class="form-control" name="nuevo_departamento" id="nuevo_departamento"  /></p>
                                <p><b>Teléfono</b> <input required placeholder="Ej:91448661 (9 dígitos)" type="tel" pattern="[0-9]{9}"class="form-control" name="nuevo_telefono" id="nuevo_telefono" value=<?php echo $telefono?>></p>
                                <p><b>Correo</b> <input  required placeholder="Ej:correo@gmail.com" type="email" class="form-control" name="nuevo_correo" id="nuevo_correo" value=<?php echo $correo?>  > </p>
                                <p><b>Contraseña</b> <input required type="password" class="form-control"  name="nuevo_contraseña" id="nuevo_contraseña" value=<?php echo $contraseña?>></p>                       
                                <p><b>Estado</b><input readonly=readonly NAME="nuevo_estado" class="form-control" id="nuevo_estado" value="Activo"> 
                                </p>
                                <p><b>Tipo</b><SELECT NAME="nuevo_tipo" class="form-control" > 
<OPTION VALUE="Profesor">Profesor</OPTION>
<OPTION VALUE="Administrador">Administrador</OPTION>
</SELECT>
                                </p>
                                <button type="input" class="btn btn-mini" name="modificar"/>
                                    <span class="glyphicon glyphicon-edit"></span> Modificar
                                </button>
                                
                                <button type="input" class="btn btn-mini" name="Eliminar"/>
                                    <span class="glyphicon glyphicon-minus-sign"></span> Eliminar
                                </button>
                            
                                
                                
                                                                
                            </div>
                            </td>
                            </tr>
                          <?php echo form_close();?>

                          </div>

                        </div>
                      </div>
                    
                    
                    
                </article>
</div>