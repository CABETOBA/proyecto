<?php 

require_once "models/Empleado.php";

class EmpleadoController {

	public function gestor() {

		$empleados = Empleado::getAll();

		viewComponent( 'empleado/gestor.php',[
			'page_title' => 'Gestor de empleados',
			'header_title' => 'Gestor de empleados'
			//'lista_empleados' => $empleados
		]);	
	}
	
}