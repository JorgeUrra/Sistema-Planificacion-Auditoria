<?php

if(!isset($_SESSION['cuenta'])){

	redirect('control/salir');
}
?>

<?php
if(isset($pag)){

	//cargar vista home
	if($pag=='home'){
		$this->load->view('home');
	}
	if($pag=='home_profesor'){
		$this->load->view('home_profesor');
	}
	if($pag=='ingresar_profesor'){
		$this->load->view('ingresar_profesor',$newdata);
	}
	if($pag=='buscar_profesor'){
		$this->load->view('buscar_profesor',$newdata);
	}
		if($pag=='editar_profesor'){
		$this->load->view('editar_profesor',$newdata);
	}
	if($pag=='mostrar_malla'){
		$this->load->view('malla');
	}
	if($pag=='planificacion'){
		$this->load->view('planificacion');
	}
	if($pag=='asignar_profesor'){
		$this->load->view('asignar_profesor');
	}
	if($pag=='agregar_noticia'){
		$this->load->view('agregar_noticia');
	}
	if($pag=='noticias'){
		$this->load->view('noticias');
	}
	if($pag=='mostrar_planificacion'){
		$this->load->view('mostrar_planificacion');
	}
	if($pag=='listado_profesores'){
		$this->load->view('listado_profesores');
	}
	if($pag=='mostrar_archivos'){
		$this->load->view('mostrar_archivos');
	}
	if($pag=='editar_noticia'){
		$this->load->view('editar_noticia');
	}
}
?>


<!-- footer -->
<?php
$this->load->view('footer');
?>
