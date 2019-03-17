        <link rel="stylesheet" href="<?php echo base_url();?>archivos/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>archivos/formulario/style_admin.css">



        <div class="container" id="formulario4">
            <div class="row">              

            <h2 align="center"><span class="glyphicon glyphicon-edit"></span> Editar Profesor </h2>
                <form class="form-horizontal" role="form" method="post" action="<?php echo site_url()?>/control/modificar_eliminar_usuario"><!--Accion del boton y para donde dirige  -->



                    <?php echo form_open('control/modificar_eliminar_usuario');?>

                    <div class="form-group">
                        <h4 for="rut" class="col-sm-2 control-text">Rut</h4><!--col-sm-1 indica espacio entre nombre y la caja -->
                        <div class="col-sm-5"><!-- cambiar tamaño de la caja para ingresar -->
                            <input readonly=readonly type="text" class="form-control" id="rut" name="rut" placeholder="Ingresar Rut" value="<?php echo $rut?>">
                            <?php echo "<p class='text-danger'>$errRut</p>";?>
                        </div>
                    </div>
                    
                    <div class="row">
                        <h4 for="nombres" class="col-sm-2 control-text">Nombres</h4>
                        <div class="col-sm-5">
                            <input required type="text" class="form-control" id="nuevo_nombre_1" name="nuevo_nombre_1" placeholder="Primer Nombre" onkeypress="txNombres()" value="<?php echo $nombre_1?>">
                            <?php echo "<p class='text-danger'>$errName1</p>";?>
                        </div>
                        <div class="col-sm-5">
                            <input required type="text" class="form-control" id="nuevo_nombre_2" name="nuevo_nombre_2" placeholder="Segundo Nombre" onkeypress="txNombres()" value="<?php echo $nombre_2?>">
                            <?php echo "<p class='text-danger'>$errName2</p>";?>
                        </div>
                    </div>

                    <div class="row">
                        <h4 for="apellidos" class="col-sm-2 control-text">Apellidos</h4>
                        <div class="col-sm-5">
                            <input required type="text" class="form-control" id="nuevo_apellido_1" name="nuevo_apellido_1" placeholder="Primer Apellido" onkeypress="txNombres()" value="<?php echo $apellido_1?>">
                            <?php echo "<p class='text-danger'>$errApellido1</p>";?>
                        </div>
                        <div class="col-sm-5">
                            <input required type="text" class="form-control" id="nuevo_apellido_2" name="nuevo_apellido_2" placeholder="Segundo Apellido" onkeypress="txNombres()" value="<?php echo $apellido_2?>">
                            <?php echo "<p class='text-danger'>$errApellido2</p>";?>
                        </div>
                    </div>
                    <div class="form-group">
                        <h4 for="departamento" class="col-sm-2 control-text">Facultad</h4>
                        <div class="col-sm-10">

                            <select type="text" class="form-control" id="nuevo_departamento" name="nuevo_departamento" placeholder="Departamento" onkeypress="txNombres()" value="<?php echo $departamento?>">
                                <option value="Facultad de Cs. de la Salud">Facultad de Cs. de la Salud</option>
                                <option value="Facultad de Cs. de la Educación">Facultad de Cs. de la Educación</option>
                                <option selected="Facultad de Cs. de la Ingeniería">Facultad de Cs. de la Ingeniería</option>
                                <option value="Facultad de Cs. Agrarias y Forestales">Facultad de Cs. Agrarias y Forestales</option>
                                <option value="Facultad de Cs. Religiosas y Filosóficas">Facultad de Cs. Religiosas y Filosóficas</option>
                                <option value="Facultad de Medicina">Facultad de Medicina</option>
                                <option value="Facultad de Ciencias Básicas">Facultad de Ciencias Básicas</option>
                                <option value="Facultad de Ciencias Sociales y Económicas">Facultad de Ciencias Sociales y Económicas</option>
                                <option value="Instituto de Estudios Generales">Instituto de Estudios Generales</option>
                            </select>

                        </div>
                    </div>      
                    <div class="row">
                        <h4 for="Contacto" class="col-sm-2 control-text">Contacto</h4>
                        <div class="col-sm-5">
                            <input required placeholder="Ej:91448661 (9 dígitos)" type="tel" pattern="[0-9]{9}" class="form-control" id="nuevo_telefono" name="nuevo_telefono" onkeypress="ValidaSoloNumeros()" placeholder="Telefono" value="<?php echo $telefono?>">
                            <?php echo "<p class='text-danger'>$errTelefono</p>";?>
                        </div>
                        <div class="col-sm-5">
                            <input required type="email" class="form-control" id="nuevo_correo" name="nuevo_correo" placeholder="ejemplo@dominio.com" value="<?php echo $correo?>">
                            <?php echo "<p class='text-danger'>$errEmail</p>";?>
                        </div>
                    </div>
                    <div class="form-group">
                        <h4 for="estado" class="col-sm-2 control-text">Estado</h4>
                        <div class="col-sm-5">
                            <select type="text "class="form-control" id="nuevo_estado" name="nuevo_estado" value="<?php echo $estado?>">
                                <option value="Activo">Activo</option>
                                <option value="Inactivo">Inactivo</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <h4 for="contraseña" class="col-sm-2 control-text">Contraseña</h4>
                        <div class="col-sm-5">
                            <input required type="text" class="form-control" id="nuevo_contraseña" name="nuevo_contraseña"  placeholder="Contraseña" value="<?php echo $contraseña?>">
                            <?php echo "<p class='text-danger'>$errContraseña</p>";?>
                        </div>
                    </div>

                    <div class="form-group">
                        <h4 for="tipo" class="col-sm-2 control-text">Tipo Privilegio</h4>
                        <div class="col-sm-5">
                            <select class="form-control" id="nuevo_tipo" name="nuevo_tipo" value="<?php echo $tipo?>">
                                <option value="Profesor">Profesor</option>
                                <option value="Administrador">Administrador</option>
                            </select>
                        </div>
                    </div> 

                    <button type="input" class="btn btn-mini" name="modificar"/>
                    <span class="glyphicon glyphicon-edit"></span> Modificar
                </button>
                <?php echo form_close();?>
            </form> 
        </div>
    </div>
</div>






