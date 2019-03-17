<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class control extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    session_start();
    error_reporting(E_ERROR | E_PARSE);
        //$this->load->model('mod_usuarios');
  }

  public function index()
  {
    $this->login();
  }
  public function login()
  {
    //cargamos para hacer validacion
    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('user', 'user', 'required');
    $this->form_validation->set_rules('pass', 'pass', 'required');

    $this->form_validation->set_message('required', '▲ este campo es obligatorio');

    if($this->form_validation->run()==FALSE){
      $this->load->view('login');
    }
    else{
      $user = set_value("user");
      $pass = set_value("pass");

            //consultar si existe el usuario en la base de datos
      $res = $this->mod_usuarios->buscar_usuario($user, $pass);
      if(!$res){
            //usuario no existe
        $this->load->view('login',array('men'=>'usuario no registrado'));
      }
      else{
        $_SESSION['cuenta']['user']=$user;
        $_SESSION['cuenta']['pass']=$pass;

            //preguntar que tipo de usuario es si es Profesor o Administrador
        $res2 = $this->mod_usuarios->tipo_usuario($user);  
        if($res2=="Administrador"){
          $_SESSION['cuenta']['identificador']='Administrador';
              redirect('control/home');//cargamos la vista 
            }
            else{
              $consulta= $this->mod_usuarios->extraer_estado_prof($user);
              if(($res2=="Profesor" && $consulta==TRUE) ){
                $_SESSION['cuenta']['identificador']='Profesor';
                redirect('control/noticias');//cargamos la vista 
              }
              else{

                $this->load->view('login',array('men'=>'el usuario no esta registrado'));
              }
            }

          }
        }
      }
      public function home()
      {
        $data['var']=0;
        $this->load->view('header',$data);
        $this->load->view('index',array('pag'=>'home'));
      }
      public function home_profesor()
      {
        $data['var']=7;
        $data['tabla'] = $this->mod_usuarios->mostrar_datos_tabla();
        $this->load->view('header',$data);
        $this->load->view('index',array('pag'=>'home_profesor'));
      }
      public function mostrar_malla()
      {
        $data['var']=3;
        $this->load->view('header',$data);
        $this->load->view('index',array('pag'=>'mostrar_malla'));
      }
      public function planificacion()
      {
        $data['var']=4;
        $this->load->model('mod_usuarios');    
        $data['tabla'] = $this->mod_usuarios->mostrar_datos_tabla();
        $this->load->view('header',$data);
        $this->load->view('index',array('pag'=>'planificacion'));
      }

      public function asignar_profesor(){

        $this->load->view('header',$data);
        $this->load->view('index',array('pag'=>'asignar_profesor'));
      }

      public function pasar_datos_boton(){

       if(($_GET['array'])){
        $varray=$_GET['array'];
        list($rut,$cod_asig,$fecha)=explode("/", $varray);
        $data['var']=3;
        $this->load->view('header',$data);

        $this->mod_usuarios->insertar_tabla_asignatura($rut,$cod_asig,$fecha);

        $this->load->view('index',array('pag'=>'mostrar_malla'));

      }
    }

    public function mostrar_planificacion_admin(){
      $this->load->view('header',$data);
      $this->load->view('index',array('pag'=>'mostrar_planificacion'));

    }
    

    public function mostrar_archivos_admin(){

      $this->load->view('header',$data);
      $this->load->view('index',array('pag'=>'mostrar_archivos'));
      
    }

    public function ingresar_profesor()
    {
      $data['var']=1;
      $this->load->view('header',$data);
//Validacion de atributos 
      if (isset($_POST["ingresar"])) {
        $rut = $_POST['rut'];
        $nombre1 = $_POST['nombre1'];
        $nombre2 = $_POST['nombre2']; 
        $apellido1 = $_POST['apellido1'];
        $apellido2 = $_POST['apellido2']; 
        $departamento = $_POST['departamento']; 
        $telefono = $_POST['telefono']; 
        $email = $_POST['email'];
        $contraseña = $_POST['contraseña'];
        $estado = $_POST['estado'];
        $tipo = $_POST['tipo'];   

        $datos=array(
          'rut' => $this->input->post('rut'),
          'nombre_1' => $this->input->post('nombre1'),
          'nombre_2' => $this->input->post('nombre2'),  
          'apellido_1' => $this->input->post('apellido1'),
          'apellido_2' => $this->input->post('apellido2'),
          'departamento' => $this->input->post('departamento'),
          'telefono' => $this->input->post('telefono'),
          'correo' => $this->input->post('email'),
          'contraseña' => $this->input->post('contraseña'),
          'estado' => $this->input->post('estado'),
          'tipo' => $this->input->post('tipo')  
          );

  if (($this->mod_usuarios->buscar_profesor($rut)==FALSE) ) {//si no existe se hace proceso de insercion sino se informa de lo sucedio en el else
    //aqui realizar la consulta para ingresar
    if (($this->mod_usuarios->insertar_profesor($datos))) {
      $datos['mensaje']=$result='<div class="alert alert-success"><h3>Profesor Ingresado Correctamente </h3></div>';
      
      $this->load->view('index',array('pag'=>'ingresar_profesor'));
    } else {
     $datos['mensaje']=$result='<div class="alert alert-danger"><h3>No se a podido ingresar al profesor. Verefique los datos ingresados.</h3></div>';
     $this->load->view('index',array('pag'=>'ingresar_profesor','newdata'=>$datos));
   }
 }else{
   $datos['mensaje']=$result='<div class="alert alert-danger"><h3>El Profesor a Ingresar ya Existe en la Base de Datos. Verificar RUT.</h3></div>';
   $this->load->view('index',array('pag'=>'ingresar_profesor','newdata'=>$datos));
 }
}else{
  $this->load->view('index',array('pag'=>'ingresar_profesor','newdata'=>$datos));
}
}

public function buscar_profesor()
{
  $data['var']=2;
  $this->load->view('header',$data);

  $rut=$this->input->post('rut');

  if (isset($_POST['buscar'])) {

    $consulta=$this->mod_usuarios->buscar_profesor($rut);

if (!$consulta) {//si no existe se hace proceso de insercion sino se informa de lo sucedio en el else
    //aqui realizar la consulta para ingresar
  $newdata['mensaje']='<div class="col-sm-16"><div class="alert alert-danger"><h3>El Profesor a Editar no Existe en la Base de Datos. Verificar RUT.</h3></div></div>';
  
  $this->load->view('index',array('pag'=>'buscar_profesor','newdata'=>$newdata));
}else{
//realizamos consulta para extraer los datos de base de datos y los almacenamos en un array, luego cargamos vista para editar profesor

 $query= $this->mod_usuarios->datos_usuario($rut);   

 if($query->num_rows()>0){
  $newdata = array(
   'rut'  => $rut,
   'nombre_1'=>$query->row()->NOMBRE_1,
   'nombre_2'=>$query->row()->NOMBRE_2,
   'apellido_1'=>$query->row()->APELLIDO_1,
   'apellido_2'=>$query->row()->APELLIDO_2,
   'deparamento'=>$query->row()->DEPARTAMENTO,
   'telefono'=>$query->row()->TELEFONO,
   'correo'=>$query->row()->CORREO,
   'contraseña'=>$query->row()->CONTRASEÑA,
   'estado'=>$query->row()->ESTADO,
   'tipo'=>$query->row()->TIPO
   );
  $this->load->view('index',array('pag'=>'editar_profesor','newdata'=>$newdata));

}

}
}else{
  $this->load->view('index',array('pag'=>'buscar_profesor','newdata'=>$newdata));

}

}

public function modificar_eliminar_usuario()
{  
  $data['var']=2;
  $this->load->view('header',$data);
  $rut=$this->input->post('rut');
  if (isset($_POST['modificar'])) {

    $datos_usuario= array(
      'rut' => $this->input->post('rut'),
      'nombre_1' => $this->input->post('nuevo_nombre_1'),
      'nombre_2' => $this->input->post('nuevo_nombre_2'),  
      'apellido_1' => $this->input->post('nuevo_apellido_1'),
      'apellido_2' => $this->input->post('nuevo_apellido_2'),
      'departamento' => $this->input->post('nuevo_departamento'),
      'telefono' => $this->input->post('nuevo_telefono'),
      'correo' => $this->input->post('nuevo_correo'),
      'contraseña' => $this->input->post('nuevo_contraseña'),
      'estado' => $this->input->post('nuevo_estado'),
      'tipo' => $this->input->post('nuevo_tipo')             

      );

    $this->mod_usuarios->update_usuario($rut,$datos_usuario);

    $query= $this->mod_usuarios->datos_usuario($rut);

    if($query->num_rows()>0){
      $datos = array(
       'rut'  => $rut_user,
       'nombre_1'=>$query->row()->nombre_1,
       'nombre_2'=>$query->row()->nombre_2,
       'apellido_1'=>$query->row()->apellido_1,
       'apellido_2'=>$query->row()->apellido_2,
       'deparamento'=>$query->row()->deparamento,
       'telefono'=>$query->row()->telefono,
       'correo'=>$query->row()->correo,
       'contraseña'=>$query->row()->contraseña,
       'estado'=>$query->row()->estado,
       'tipo'=>$query->row()->tipo
       );

      $datos['mensaje']='<div class="col-sm-16 "><div class="alert alert-success"><h3>Edicion Exitosa.</h3></div></div>';
      $this->load->view('index',array('pag'=>'buscar_profesor','newdata'=>$datos));
    }

  }

  else{
            //$this->model_cuentas->delete_usuario($rut);
                //$data['var']=1;
                //$this->load->view('administrador/view_top_admin',$data);
    $this->load->view('index',array('pag'=>'buscar_profesor','newdata'=>$datos));;
  }
}

function subir_archivo($rut){

  $NOMBRE_1=$_GET['array'];
  $CODIGO_ASIGNATURA=$_GET['array2']; 
  $rut=$_GET['array3'];

  if ($_POST["agregar"]||$_POST["editar"]) {

    $this->load->view('header');
    $this->load->view('index',array('pag'=>'home_profesor'));
  }else{
    $res='0';//variable para ver si pudo o no agregar y asi entregar mensaje correspondiente

    if(isset($_POST['prueba'])){

      if(isset($_FILES['prueba']['name'][0])){
        if($_FILES['prueba']['name'][0]!=''){
          for($i=0; $i<count($_FILES['prueba']['name']); $i++) {
            $tmpFilePath = $_FILES['prueba']['tmp_name'][$i];
            if ($tmpFilePath != ""){
              $res='1';
              $carpeta ='./archivos_subidos/';
              if (!file_exists($carpeta)) {
                mkdir($carpeta, 777);
                $carpeta ='./archivos_subidos/'.$rut.'/';      
              }else{
                $carpeta ='./archivos_subidos/'.$rut.'/';
              }
              if (!file_exists($carpeta)) {
                mkdir($carpeta, 777);
                $carpeta ='./archivos_subidos/'.$rut.'/'.$NOMBRE_1.'/';
              }else{
                $carpeta ='./archivos_subidos/'.$rut.'/'.$NOMBRE_1.'/';
              }
              if (!file_exists($carpeta)) {
                mkdir($carpeta, 777);
                $carpeta ='./archivos_subidos/'.$rut.'/'.$NOMBRE_1.'/pruebas/';
              }else{
                $carpeta ='./archivos_subidos/'.$rut.'/'.$NOMBRE_1.'/pruebas/';      
              }
              if (!file_exists($carpeta)) {
                mkdir($carpeta, 777);
              }

              $nombre = $_FILES['prueba']['name'][$i];
              $tipo = $_FILES['prueba']['type'][$i];
              $tamano = $_FILES['prueba']['size'][$i];
              $temp = $_FILES['prueba']['tmp_name'][$i];

              $fileext = (strpos($nombre,'.')===false?'':'.'.substr(strrchr($nombre, "."), 1));

              $newFilePath = $carpeta.$nombre;

                            //verifica si existe el fichero y si existe crea otro con un nombre incremental 
              if (file_exists($newFilePath)) {
                $u=0;
                $cont=1;
                while($u==0){
                  $newFilePath = $carpeta.$cont."-".$nombre;
                  if (file_exists($newFilePath)) {
                    $cont++;
                  }else{
                    $u=1;
                  }
                }
              }

              if(move_uploaded_file($tmpFilePath, $newFilePath)) {
                $datos["url"]=$newFilePath;



              }
            }

          }
        }
      }
    }
    if(isset($_POST['revision'])){

      if(isset($_FILES['revision']['name'][0])){
        if($_FILES['revision']['name'][0]!=''){
          for($i=0; $i<count($_FILES['revision']['name']); $i++) {
            $tmpFilePath = $_FILES['revision']['tmp_name'][$i];
            if ($tmpFilePath != ""){
              $res='1';
              $carpeta ='./archivos_subidos/';
              if (!file_exists($carpeta)) {
                mkdir($carpeta, 777);
                $carpeta ='./archivos_subidos/'.$rut.'/';      
              }else{
                $carpeta ='./archivos_subidos/'.$rut.'/';
              }
              if (!file_exists($carpeta)) {
                mkdir($carpeta, 777);
                $carpeta ='./archivos_subidos/'.$rut.'/'.$NOMBRE_1.'/';
              }else{
                $carpeta ='./archivos_subidos/'.$rut.'/'.$NOMBRE_1.'/';
              }
              if (!file_exists($carpeta)) {
                mkdir($carpeta, 777);
                $carpeta ='./archivos_subidos/'.$rut.'/'.$NOMBRE_1.'/revision/';
              }else{
                $carpeta ='./archivos_subidos/'.$rut.'/'.$NOMBRE_1.'/revision/';      
              }
              if (!file_exists($carpeta)) {
                mkdir($carpeta, 777);
              }
              


              $nombre = $_FILES['revision']['name'][$i];
              $tipo = $_FILES['revision']['type'][$i];
              $tamano = $_FILES['revision']['size'][$i];
              $temp = $_FILES['revision']['tmp_name'][$i];

              $fileext = (strpos($nombre,'.')===false?'':'.'.substr(strrchr($nombre, "."), 1));

              $newFilePath = $carpeta.$nombre;

                            //verifica si existe el fichero y si existe crea otro con un nombre incremental 
              if (file_exists($newFilePath)) {
                $u=0;
                $cont=1;
                while($u==0){
                  $newFilePath = $carpeta.$cont."-".$nombre;
                  if (file_exists($newFilePath)) {
                    $cont++;
                  }else{
                    $u=1;
                  }
                }
              }

              if(move_uploaded_file($tmpFilePath, $newFilePath)) {
                $datos["url"]=$newFilePath;



              }
            }

          }
        }
      }
    }


    if($res=='0'){
      $men='<div class="col-sm-16"><div class="alert alert-danger"><h3>NO SE A PODIDO AGREGAR EL ARCHIVO.</h3></div></div>';
      $this->load->view('header');
      $this->load->view('index',array('pag'=>'home_profesor','men'=>$men,'NOMBRE_1'=>$NOMBRE_1));
    }else{
      $men='<div class="col-sm-16"><div class="alert alert-success"><h3>INGRESO CORRECTO.</h3></div></div>';
      $this->load->view('header');
      $this->load->view('index',array('pag'=>'home_profesor','men'=>$men,'NOMBRE_1'=>$NOMBRE_1));
    }
  }

}
public function agregar_noticia()
{  
  if (isset($_POST["agregar_noticia"]))
  {
     //Guardamos valores para que no tenga que reescribirlos
    $titulo = $_POST['titulo'];
    $cuerpo = $_POST['cuerpo'];
    date_default_timezone_set("America/Santiago");
    $fecha = date ("Y-m-d");
    $hora= date("G:i:s");
    $nombreImagen="";
    $nombreFichero="";
    // Subir fichero
    $copiarFichero = false;
    $copiarImagen = false;

//AGREGAR IMAGEN
   // Copiar fichero en directorio de ficheros subidos
   // Se renombra para evitar que sobreescriba un fichero existente
   // Para garantizar la unicidad del nombre se añade una marca de tiempo
   if (is_uploaded_file($_FILES['imagen'] ["tmp_name"]))
{

     $nombreDirectorio = "images_noticia/";
     $nombreImagen = $_FILES['imagen']['name'];
     $copiarImagen = true;

      // Si ya existe un fichero con el mismo nombre, renombrarlo
     $nombreCompleto = $nombreDirectorio . $nombreImagen;
     if (is_file($nombreCompleto))
     {
      $idUnico = time();
      $nombreImagen = $idUnico . "-" . $nombreImagen;
    }
  }
  if ($copiarImagen){
    move_uploaded_file ($_FILES['imagen']['tmp_name'],
      $nombreDirectorio . $nombreImagen);
  }
  //AGREGAR ARCHIVO
     // Copiar fichero en directorio de ficheros subidos
   // Se renombra para evitar que sobreescriba un fichero existente
   // Para garantizar la unicidad del nombre se añade una marca de tiempo
  if (is_uploaded_file ($_FILES['archivo']['tmp_name']))
  {
   $nombreDirectorio = "images_noticia/";
   $nombreFichero = $_FILES['archivo']['name'];
   $copiarFichero = true;

      // Si ya existe un fichero con el mismo nombre, renombrarlo
   $nombreCompleto = $nombreDirectorio . $nombreFichero;
   if (is_file($nombreCompleto))
   {
    $idUnico = time();
    $nombreFichero = $idUnico . "-" . $nombreFichero;
  }
}
if ($copiarFichero){
  move_uploaded_file ($_FILES['archivo']['tmp_name'],
    $nombreDirectorio . $nombreFichero);
}
//pasar todos los valores a un array
$datos=array(
  'titulo' =>$titulo,
  'descripcion' =>$cuerpo,
  'fecha' =>$fecha,  
  'hora' =>$hora,
  'imagen' => $nombreImagen,
  'archivo' => $nombreFichero  
  );
  //insertar en la base de datos la noticia
if (($this->mod_usuarios->insertar_noticias($datos))) {
 $data['mensaje']=$result='<div class="alert alert-success"><h3>Noticia Ingresada Correctamente </h3></div>';

 $data['var']=5;
 $this->load->view('header',$data);
 $this->load->view('index',array('pag'=>'home'));
} else {
 $data['mensaje']=$result='<div class="alert alert-danger"><h3>No se a podido ingresar la Noticia. Intentelo de nuevo.</h3></div>';
 $data['var']=5;
 $this->load->view('header',$data);
 $this->load->view('index',array('pag'=>'home'));
}
}else{
  $data['var']=5;
  $this->load->view('header',$data);
  $this->load->view('index',array('pag'=>'agregar_noticia'));
}
}
public function eliminar_noticia() {

  $noticia_id=$_GET['id'];
  $imagen=$_GET['imagen'];
  $archivo=$_GET['archivo'];
  if (($this->mod_usuarios->eliminar_noticia($noticia_id))) {
   //cuando se borre la noticia eliminamos las imagen y archivo segun corresponda

$archivo1="images_noticia/".$imagen;
$archivo2="images_noticia/".$archivo;
 rmdir($carpeta.$archivo1); 
 rmdir($carpeta.$archivo2);
   $data['mensaje']=$result='<div class="alert alert-success"><h3>Noticia Eliminada</h3></div>';

   $data['var']=0;
   $this->load->view('header',$data);
   $this->load->view('home',$data);
  //$this->load->view('index',array('pag'=>'home'));
 } else {
   $data['mensaje']=$result='<div class="alert alert-danger"><h3>No se a podido eliminar la Noticia. Intentelo de nuevo.</h3></div>';
   $data['var']=0;
   $this->load->view('header',$data);
   $this->load->view('home',$data);
  //$this->load->view('index',array('pag'=>'home'));
 }
}
public function editar_noticia($noticia_id) {

  if (isset($_POST["editar_noticia"])) {

  $noticia_id= $_POST['id'];
  $titulo = $_POST['titulo'];
  $cuerpo = $_POST['cuerpo'];
  $fecha= $_POST['fecha'];
  $hora = $_POST['hora'];

  $nombreImagen = $_POST['imagen_antigua'];
  $nombreFichero = $_POST['archivo_antiguo'];


//AGREGAR IMAGEN
   // Copiar fichero en directorio de ficheros subidos
   // Se renombra para evitar que sobreescriba un fichero existente
   // Para garantizar la unicidad del nombre se añade una marca de tiempo
   if (is_uploaded_file($_FILES['imagen'] ["tmp_name"]))
{
     $nombreDirectorio = "images_noticia/";
     $nombreImagen = $_FILES['imagen']['name'];
     $copiarImagen = true;

      // Si ya existe un fichero con el mismo nombre, renombrarlo
     $nombreCompleto = $nombreDirectorio . $nombreImagen;
     if (is_file($nombreCompleto))
     {
      $idUnico = time();
      $nombreImagen = $idUnico . "-" . $nombreImagen;
    }
  }
  if ($copiarImagen){
    move_uploaded_file ($_FILES['imagen']['tmp_name'],
      $nombreDirectorio . $nombreImagen);
  }
  //AGREGAR ARCHIVO
     // Copiar fichero en directorio de ficheros subidos
   // Se renombra para evitar que sobreescriba un fichero existente
   // Para garantizar la unicidad del nombre se añade una marca de tiempo
  if (is_uploaded_file ($_FILES['archivo']['tmp_name']))
  {
   $nombreDirectorio = "images_noticia/";
   $nombreFichero = $_FILES['archivo']['name'];
   $copiarFichero = true;

      // Si ya existe un fichero con el mismo nombre, renombrarlo
   $nombreCompleto = $nombreDirectorio . $nombreFichero;
   if (is_file($nombreCompleto))
   {
    $idUnico = time();
    $nombreFichero = $idUnico . "-" . $nombreFichero;
  }
}
if ($copiarFichero){
  move_uploaded_file ($_FILES['archivo']['tmp_name'],
    $nombreDirectorio . $nombreFichero);
}
//pasar todos los valores a un array
$datos=array(
  'titulo' =>$titulo,
  'descripcion' =>$cuerpo,
  'fecha' =>$fecha,  
  'hora' =>$hora,
  'imagen' => $nombreImagen,
  'archivo' => $nombreFichero  
  );
 
if (($this->mod_usuarios->editar_noticia($noticia_id,$datos))) {
 $data['mensaje']=$result='<div class="alert alert-success"><h3>Noticia Editada Exitosamente</h3></div>';

  $data['var']=0;
  $this->load->view('header',$data);
  $this->load->view('home',$data);

} else {
 $data['mensaje']=$result='<div class="alert alert-danger"><h3>No se a podido editar la Noticia. Intentelo de nuevo.</h3></div>';
  $data['var']=0;
  $this->load->view('header',$data);
  $this->load->view('home',$data);

}
}
}
public function mostrar_noticia() {

if (isset($_GET['id_editar'])){

  $noticia_id=$_GET['id_editar'];
  $consulta =$this->mod_usuarios->ver_noticia($noticia_id);
   //ver si pillo la noticia
      if ($consulta->num_rows()>0)
      {
    $datos=array(
          'noticia_id'=>$consulta->row()->noticia_id,
          'titulo' =>$consulta->row()->titulo,
          'descripcion'=>$consulta->row()->descripcion,
          'fecha'=>$consulta->row()->fecha,  
          'hora'=>$consulta->row()->hora,
          'imagen'=> $consulta->row()->imagen,
          'archivo'=>$consulta->row()->archivo  
          );
  $data['var']=0;
  $this->load->view('header',$datos);
  $this->load->view('index',array('pag'=>'editar_noticia'));

      }
 else {
 $data['mensaje']=$result='<div class="alert alert-danger"><h3>No se a encontrado la Noticia en la base de datos.</h3></div>';
  $data['var']=0;
  $this->load->view('header',$data);
  $this->load->view('home',$data);
  //$this->load->view('index',array('pag'=>'home'));
}
}
}

public function salir() {
  session_destroy();
  redirect('control/index');
}
public function noticias(){
  $data['var']=0;
  $this->load->view('header',$data);
  $this->load->view('index',array('pag'=>'noticias'));
}
public function mostrar_planificacion(){
  $data['var']=8;
  $this->load->view('header',$data);
  $this->load->view('index',array('pag'=>'mostrar_planificacio'));
}
public function listado_profesores(){
  $data['var']=4;
  $this->load->view('header',$data);
  $this->load->view('index',array('pag'=>'listado_profesores'));
}

}