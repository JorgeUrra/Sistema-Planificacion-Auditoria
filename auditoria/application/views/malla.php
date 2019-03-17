<head>
  <title> MALLA</title>
  <link href="<?php echo base_url();?>archivos/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>archivos/formulario/style_admin.css" rel="stylesheet">


</head>


<div class="container" id="formulario2">
  <div class="row">
    <h2 align="center"><span class="glyphicon glyphicon-book"></span> Malla de Carrera</h2> 

    <table class="table">
     <tr>
       <td style="color:black; font-size:200%"colspan="2" align="center">Primer Año</td>

       <td style="color:black; font-size:200%"colspan="2" align="center">Segundo Año</td>

       <td style="color:black; font-size:200%"colspan="2" align="center">Tercer Año</td>

       <td style="color:black; font-size:200%"colspan="2" align="center">Cuarto Año</td>

       <td style="color:black; font-size:200%"colspan="2" align="center">Quinto Año</td>
     </tr> 
     <tr>
       <td style="color:black; font-size:150%"align="center">I</td>
       <td style="color:black; font-size:150%"align="center">II</td>
       <td style="color:black; font-size:150%"align="center">III</td>
       <td style="color:black; font-size:150%"align="center">IV</td>
       <td style="color:black; font-size:150%"align="center">V</td>
       <td style="color:black; font-size:150%"align="center">VI</td>
       <td style="color:black; font-size:150%"align="center">VII</td>
       <td style="color:black; font-size:150%"align="center">VIII</td>
       <td style="color:black; font-size:150%"align="center">XI</td>
       <td style="color:black; font-size:150%"align="center">X</td>
     </tr>                  
     <tr>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-110"); 
      if($query == TRUE){ ?>
      <th><button  style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-110' " type="button" class="btn btn-default btn-xs btn-block ">Fundamentos</br></br>Contables</button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-110' " type="button" class="btn btn-default btn-xs btn-block ">Fundamentos</br></br>Contables</button></th>
      <?php } ?>   

      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-120"); 
      if($query == TRUE){ ?>
      <th><button  style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-120' " type="button" class="btn btn-default btn-xs btn-block ">Practica</br></br>Contable</button></th>   
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-120' " type="button" class="btn btn-default btn-xs btn-block ">Practica</br></br>Contable</button></th>
      <?php } ?>  
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-210"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-210'" type="button" class="btn btn-default btn-xs btn-block">Normativa</br>Contable</br>I</button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-210'" type="button" class="btn btn-default btn-xs btn-block">Normativa</br>Contable</br>I</button></th>
      <?php } ?> 
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-220"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-220'" type="button" class="btn btn-default btn-xs btn-block">Normativa</br>Contable</br>II</button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-220'" type="button" class="btn btn-default btn-xs btn-block">Normativa</br>Contable</br>II</button></th>
      <?php } ?> 
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-310"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-310'" type="button" class="btn btn-default btn-xs btn-block">Estados</br></br>Financieros</button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-310'" type="button" class="btn btn-default btn-xs btn-block">Estados</br></br>Financieros</button></th>
      <?php } ?> 
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-320"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-320'" type="button" class="btn btn-default btn-xs btn-block">Practica</br></br>Temprana</button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-320'" type="button" class="btn btn-default btn-xs btn-block">Practica</br></br>Temprana</button></th>
      <?php } ?> 
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-410"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-410'" type="button" class="btn btn-default btn-xs btn-block">Control</br></br>Interno</button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-410'" type="button" class="btn btn-default btn-xs btn-block">Control</br></br>Interno</button></th>
      <?php } ?>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-420"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-420'" type="button" class="btn btn-default btn-xs btn-block">Introduccion </br>a la</br> Auditoria</button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-420'" type="button" class="btn btn-default btn-xs btn-block">Introduccion </br>a la</br> Auditoria</button></th>
      <?php } ?>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-510"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-510'" type="button" class="btn btn-default btn-xs btn-block">Auditoria a</br>Estados</br>Financieros</button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-510'" type="button" class="btn btn-default btn-xs btn-block">Auditoria a</br>Estados</br>Financieros</button></th>
      <?php } ?>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-520"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-520'" type="button" class="btn btn-default btn-xs btn-block">Auditoria</br>de</br> Gestión</button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-520'" type="button" class="btn btn-default btn-xs btn-block">Auditoria</br>de</br> Gestión</button></th>
      <?php } ?>
    </tr>
    <tr>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-111"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-111'" type="button" class="btn btn-default btn-xs btn-block">Habilidades</br></br>Directivas</button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-111'" type="button" class="btn btn-default btn-xs btn-block">Habilidades</br></br>Directivas</button></th>
      <?php } ?>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-121"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;"  onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-121'" type="button" class="btn btn-default btn-xs btn-block">Derecho</br></br>Comercial</button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-121'" type="button" class="btn btn-default btn-xs btn-block">Derecho</br></br>Comercial</button></th>
      <?php } ?>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-211"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-211'" type="button" class="btn btn-default btn-xs btn-block"></br>Economia</br></br> </button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-211'" type="button" class="btn btn-default btn-xs btn-block"></br>Economia</br></br> </button></th>
      <?php } ?>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-221"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-221'" type="button" class="btn btn-default btn-xs btn-block"></br>Microeconomia</br></br> </button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-221'" type="button" class="btn btn-default btn-xs btn-block"></br>Microeconomia</br></br> </button></th>
      <?php } ?>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-311"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-311'" type="button" class="btn btn-default btn-xs btn-block"></br>Macroeconomia</br></br> </button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-311'" type="button" class="btn btn-default btn-xs btn-block"></br>Macroeconomia</br></br> </button></th>
      <?php } ?>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-321"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-321'" type="button" class="btn btn-default btn-xs btn-block">Codigo</br></br>Tributario</button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-321'" type="button" class="btn btn-default btn-xs btn-block">Codigo</br></br>Tributario</button></th>
      <?php } ?>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-411"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-411'" type="button" class="btn btn-default btn-xs btn-block">Impuesto</br>al Valor</br>Agregado</button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-411'" type="button" class="btn btn-default btn-xs btn-block">Impuesto</br>al Valor</br>Agregado</button></th>
      <?php } ?>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-421"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-421'" type="button" class="btn btn-default btn-xs btn-block">Impuesto</br>a las</br>Empresas</button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-421'" type="button" class="btn btn-default btn-xs btn-block">Impuesto</br>a las</br>Empresas</button></th>
      <?php } ?>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-511"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-511'" type="button" class="btn btn-default btn-xs btn-block">Impuesto</br>a las</br>Personas</button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-511'" type="button" class="btn btn-default btn-xs btn-block">Impuesto</br>a las</br>Personas</button></th>
      <?php } ?>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-521"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-521'" type="button" class="btn btn-default btn-xs btn-block">Auditoria</br></br>Tributaria</button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-521'" type="button" class="btn btn-default btn-xs btn-block">Auditoria</br></br>Tributaria</button></th>
      <?php } ?>
    </tr>
    <tr>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-112"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-112'" type="button" class="btn btn-default btn-xs btn-block">Comportamiento</br></br>Organizacional</button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-112'" type="button" class="btn btn-default btn-xs btn-block">Comportamiento</br></br>Organizacional</button></th>
      <?php } ?>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-122"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-122'" type="button" class="btn btn-default btn-xs btn-block"></br>Administracion</br></br></button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-122'" type="button" class="btn btn-default btn-xs btn-block"></br>Administracion</br></br></button></th>
      <?php } ?>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-212"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-212'" type="button" class="btn btn-default btn-xs btn-block">Desarrollo</br>de Sistemas</br>de Informacion</button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-212'" type="button" class="btn btn-default btn-xs btn-block">Desarrollo</br>de Sistemas</br>de Informacion</button></th>
      <?php } ?>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-222"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-222'" type="button" class="btn btn-default btn-xs btn-block">Sistema</br>de</br>Costeo</button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-222'" type="button" class="btn btn-default btn-xs btn-block">Sistema</br>de</br>Costeo</button></th>
      <?php } ?>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-312"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-312'" type="button" class="btn btn-default btn-xs btn-block">Contabilidad</br></br>Gerencial</button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-312'" type="button" class="btn btn-default btn-xs btn-block">Contabilidad</br></br>Gerencial</button></th>
      <?php } ?>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-322"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-322'" type="button" class="btn btn-default btn-xs btn-block">Administracion</br>de</br>Personal</button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-322'" type="button" class="btn btn-default btn-xs btn-block">Administracion</br>de</br>Personal</button></th>
      <?php } ?>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-412"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-412'" type="button" class="btn btn-default btn-xs btn-block">Sistemas</br>Informaticos para</br>las Organizaciones</button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-412'" type="button" class="btn btn-default btn-xs btn-block">Sistemas</br>Informaticos para</br>las Organizaciones</button></th>
      <?php } ?>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-422"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-422'" type="button" class="btn btn-default btn-xs btn-block">Creacion</br>de</br>Empresas</button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-422'" type="button" class="btn btn-default btn-xs btn-block">Creacion</br>de</br>Empresas</button></th>
      <?php } ?>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-512"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-512'" type="button" class="btn btn-default btn-xs btn-block">Auditoria</br></br>Informatica</button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-512'" type="button" class="btn btn-default btn-xs btn-block">Auditoria</br></br>Informatica</button></th>
      <?php } ?>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-522"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-522'" type="button" class="btn btn-default btn-xs btn-block">Control</br>de</br>Gestion</button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-522'" type="button" class="btn btn-default btn-xs btn-block">Control</br>de</br>Gestion</button></th>
      <?php } ?>
    </tr>
    <tr>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-113"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-113'" type="button" class="btn btn-default btn-xs btn-block"></br>Matematicas</br></br></button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-113'" type="button" class="btn btn-default btn-xs btn-block"></br>Matematicas</br></br></button></th>
      <?php } ?>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-123"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-123'" type="button" class="btn btn-default btn-xs btn-block">Metodos</br></br>Decisionales</button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-123'" type="button" class="btn btn-default btn-xs btn-block">Metodos</br></br>Decisionales</button></th>
      <?php } ?>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-213"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-213'" type="button" class="btn btn-default btn-xs btn-block"></br>Estadisticas</br></br></button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-213'" type="button" class="btn btn-default btn-xs btn-block"></br>Estadisticas</br></br></button></th>
      <?php } ?>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-223"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-223'" type="button" class="btn btn-default btn-xs btn-block">Metodos</br>Cuantitativos</br>de Gestión</button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-223'" type="button" class="btn btn-default btn-xs btn-block">Metodos</br>Cuantitativos</br>de Gestión</button></th>
      <?php } ?>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-313"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-313'" type="button" class="btn btn-default btn-xs btn-block">Metodología de la</br>Investigacion</br>para la Administracion</button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-313'" type="button" class="btn btn-default btn-xs btn-block">Metodología de la</br>Investigacion</br>para la Administracion</button></th>
      <?php } ?>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-323"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-323'" type="button" class="btn btn-default btn-xs btn-block"></br>Marketing</br></br></button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-323'" type="button" class="btn btn-default btn-xs btn-block"></br>Marketing</br></br></button></th>
      <?php } ?>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-413"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-413'" type="button" class="btn btn-default btn-xs btn-block">Calculo</br>Financiero</br>y Presupuestario</button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-413'" type="button" class="btn btn-default btn-xs btn-block">Calculo</br>Financiero</br>y Presupuestario</button></th>
      <?php } ?>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-423"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-423'" type="button" class="btn btn-default btn-xs btn-block">Gestion</br></br>Financiera</button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-423'" type="button" class="btn btn-default btn-xs btn-block">Gestion</br></br>Financiera</button></th>
      <?php } ?>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-513"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-513'" type="button" class="btn btn-default btn-xs btn-block">Estrategias</br></br>Financieras</button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-513'" type="button" class="btn btn-default btn-xs btn-block">Estrategias</br></br>Financieras</button></th>
      <?php } ?>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-523"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-523'" type="button" class="btn btn-default btn-xs btn-block">Formulacion</br>y Evaluacion</br>de Proyectos</button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-523'" type="button" class="btn btn-default btn-xs btn-block">Formulacion</br>y Evaluacion</br>de Proyectos</button></th>
      <?php } ?>
    </tr>
    <tr>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-114"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-114'" type="button" class="btn btn-default btn-xs btn-block"></br>Ingles I</br></br></button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-114'" type="button" class="btn btn-default btn-xs btn-block"></br>Ingles I</br></br></button></th>
      <?php } ?>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-124"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-124'" type="button" class="btn btn-default btn-xs btn-block"></br>Ofimatica</br></br></button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-124'" type="button" class="btn btn-default btn-xs btn-block"></br>Ofimatica</br></br></button></th>
      <?php } ?>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-214"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-214'" type="button" class="btn btn-default btn-xs btn-block"></br>Ingles II</br></br></button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-214'" type="button" class="btn btn-default btn-xs btn-block"></br>Ingles II</br></br></button></th>
      <?php } ?>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-224"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-224'" type="button" class="btn btn-default btn-xs btn-block"></br>Derecho Laboral</br></br></button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-224'" type="button" class="btn btn-default btn-xs btn-block"></br>Derecho Laboral</br></br></button></th>
      <?php } ?>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-314"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-314'" type="button" class="btn btn-default btn-xs btn-block">Introduccion</br></br>a la Fe</button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-314'" type="button" class="btn btn-default btn-xs btn-block">Introduccion</br></br>a la Fe</button></th>
      <?php } ?>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-324"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-324'" type="button" class="btn btn-default btn-xs btn-block">Etica</br></br>Cristiana</button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-324'" type="button" class="btn btn-default btn-xs btn-block">Etica</br></br>Cristiana</button></th>
      <?php } ?>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-414"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-414'" type="button" class="btn btn-default btn-xs btn-block"></br>Certificacion I</br></br></button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-414'" type="button" class="btn btn-default btn-xs btn-block"></br>Certificacion I</br></br></button></th>
      <?php } ?>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-424"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-424'" type="button" class="btn btn-default btn-xs btn-block"></br>Certificacion II</br></br></button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-424'" type="button" class="btn btn-default btn-xs btn-block"></br>Certificacion II</br></br></button></th>
      <?php } ?>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-514"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-514'" type="button" class="btn btn-default btn-xs btn-block"></br>Certificacion III</br></br></button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-514'" type="button" class="btn btn-default btn-xs btn-block"></br>Certificacion III</br></br></button></th>
      <?php } ?>
      <?php 
      $query = $this->mod_usuarios->ramo_asignado("au-524"); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-524'" type="button" class="btn btn-default btn-xs btn-block">Practica</br></br>Final</button></th>
      <?php } 
      else { ?>
      <th><button onclick="location.href='<?php echo site_url()?>/control/asignar_profesor?cod_asig=au-524'" type="button" class="btn btn-default btn-xs btn-block">Practica</br></br>Final</button></th>
      <?php } ?>
    </tr>
  </table>
</div>
</div>