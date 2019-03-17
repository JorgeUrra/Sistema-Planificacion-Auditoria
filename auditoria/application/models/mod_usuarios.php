  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mod_usuarios extends CI_Model{  
    public function __construct() 
     {
           parent::__construct(); 
           $this->load->database();
     }
    public function mostrar_USUARIOS(){
           return $this->db->get('USUARIOS');
           
    }
      
    public function insertar_profesor($datos){
           $this->db->insert('usuarios',$datos);
           if($this->db->affected_rows()>0){
                return TRUE;
           }
           else{
                return FALSE;
           }
    }

public function asignar_profesor(){

      $conexion = mysqli_connect('localhost', 'root','');
      mysqli_select_db($conexion ,'auditoria');
      $query = "select rut,NOMBRE_1,NOMBRE_2,APELLIDO_1,APELLIDO_2 FROM usuarios where tipo = 'Profesor'";
      $consulta = mysqli_query($conexion,$query); 
      return $consulta;
    }
    public function extraer_estado_prof($user){

      $query = $this->db->where('rut',$user);
      $query = $this->db->where('estado','Activo');
      $query = $this->db->get('usuarios');
           if($this->db->affected_rows()>0){
                return TRUE;
           }
           else{
                return FALSE;
           }
      
    }
public function listado_profesores(){

      $conexion = mysqli_connect('localhost', 'root','');
      mysqli_select_db($conexion ,'auditoria');
      $query = "SELECT usuarios.rut,usuarios.NOMBRE_1, usuarios.APELLIDO_1, planificacion.CODIGO_ASIGNATURA, asignatura.NOMBRE_A,planificacion.ANO_ASIGNATURA FROM usuarios INNER JOIN planificacion ON usuarios.RUT = planificacion.RUT_PROFESOR INNER JOIN asignatura ON asignatura.CODIGO = planificacion.CODIGO_ASIGNATURA";
      $consulta = mysqli_query($conexion,$query); 
      return $consulta;
    }

public function mostrar_datos_tabla(){

    $query = $this->db->where('id_textarea',1);
    $query = $this->db->get('text_area');
    $resultado = $query->row();
    return $resultado;
    }

public function insertar_tabla_asignatura($rut,$cod_asig,$fecha){
      $conexion = mysql_connect('localhost', 'root','');
      mysql_select_db('auditoria',$conexion);
      $query = "INSERT INTO planificacion(RUT_PROFESOR,CODIGO_ASIGNATURA,ANO_ASIGNATURA,PLANIFICACION) VALUES ('$rut','$cod_asig','$fecha',NULL)";
      mysql_query($query);
}
public function ramo_asignado($cod_asig){
      $query = $this->db->where(' CODIGO_ASIGNATURA',$cod_asig);
      $query = $this->db->get('planificacion');
           if($this->db->affected_rows()>0){
                return TRUE;
           }
           else{
                return FALSE;
           }
    
}
//consulta para controlar error de primary key duplicada
        public function buscar_profesor($rut){
            $query = $this->db->where('rut',$rut);
            $query = $this->db->get('usuarios');
           if($this->db->affected_rows()>0){
                return TRUE;
           }
           else{
                return FALSE;
           }
    }  
        public function buscar_usuario($id, $pass){
            $query = $this->db->where("rut",$id);
            $query = $this->db->where("contraseña",$pass);
            $query = $this->db->get("usuarios");
           if($this->db->affected_rows()>0){
                return TRUE;
           }
           else{
                return FALSE;
           }
    }
        public function tipo_usuario($rut){
        $conexion = mysqli_connect('localhost', 'root', '', 'auditoria');
        $query = "SELECT tipo FROM usuarios WHERE rut like '%$rut%'";
        
       $result = mysqli_query($conexion,$query);
    
    while($registro=mysqli_fetch_array($result)) {
       return $registro['tipo']."";
        
    }  
    
    }
  function datos_usuario($rut){  
    $this->db->select('*');
    $this->db->where('RUT',$rut);
    $query=$this->db->get('usuarios',1);   
      return $query;   
    }
    function update_usuario($rut,$datos_usuario_edit){
        $this->db->where('RUT',$rut);
        $this->db->update('usuarios',$datos_usuario_edit);           
    }   

    function mostrar_asignatura($rut){  
      $conexion = mysqli_connect('localhost', 'root','');
      mysqli_select_db($conexion ,'auditoria');
      $query = "SELECT asignatura.NOMBRE_A, planificacion.CODIGO_ASIGNATURA FROM asignatura, planificacion WHERE (planificacion.CODIGO_ASIGNATURA=asignatura.CODIGO) AND (planificacion.RUT_PROFESOR ='".$rut."')";
        
      $consulta = mysqli_query($conexion,$query);
           return $consulta; 
    } 

    function ver_noticias(){
        $conexion = mysql_connect('localhost', 'root','');
        mysql_select_db('auditoria',$conexion);

        $query = "select * from noticias";

       $query = $query . " order by hora desc";
       $consulta = mysql_query ($query, $conexion);
           return $consulta; 
    }
        function ver_noticia($noticia_id){
          $this->db->select('*');
          $this->db->where("noticia_id",$noticia_id);
          $consulta = $this->db->get("noticias",1);
           return $consulta; 
    }  
    public function insertar_noticias($datos){
           $this->db->insert('noticias',$datos);
           if($this->db->affected_rows()>0){
                return TRUE;
           }
           else{
                return FALSE;
           }
    }
    public function eliminar_noticia($noticia_id){
          $this->db->where('noticia_id',$noticia_id);
           $this->db->delete('noticias');
           if($this->db->affected_rows()>0){
                return TRUE;
           }
           else{
                return FALSE;
           }
    }
    public function editar_noticia($noticia_id,$datos){
          $this->db->where('noticia_id',$noticia_id);
          $this->db->update('noticias',$datos);
           if($this->db->affected_rows()>0){
                return TRUE;
           }
           else{
                return FALSE;
           }
    }  
    function actualizar_planificacion($rut,$CODIGO_ASIGNATURA,$plani,$fecha){
      $datos = array(
        'RUT_PROFESOR' => $rut,
        'CODIGO_ASIGNATURA' => $CODIGO_ASIGNATURA,
        'ANO_ASIGNATURA' => $fecha,
        'PLANIFICACION' => $plani);
      

      $this->db->where('RUT_PROFESOR',$rut);
      $this->db->where('CODIGO_ASIGNATURA',$CODIGO_ASIGNATURA);
      $this->db->update('planificacion',$datos);
    }
    public function extraer_datos_planificacion($rut,$CODIGO_ASIGNATURA){  
      $query = $this->db->where('RUT_PROFESOR',$rut);
      $query = $this->db->where('CODIGO_ASIGNATURA',$CODIGO_ASIGNATURA);
      $query = $this->db->get('planificacion');
      $resultado = $query->row();
      return $resultado;
    }
    public function extraer_datos_planificacion_admin($rut,$CODIGO_ASIGNATURA,$ANO_ASIGNATURA){  
      $query = $this->db->where('RUT_PROFESOR',$rut);
      $query = $this->db->where('CODIGO_ASIGNATURA',$CODIGO_ASIGNATURA);
      $query = $this->db->where('ANO_ASIGNATURA',$ANO_ASIGNATURA);
      $query = $this->db->get('planificacion');
      $resultado = $query->row();
      return $resultado;
    }
    
}


