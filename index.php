<?php 

	session_start();

	require_once "autoload_controllers.php";
	require_once "autoload_files.php";

	# CONTROLADOR FRONTRAL
	# Si Existe la Ruta
	if ( isset($_GET['route']) ) {

		# Validar Url's
		$route = explode('/', $_GET['route']);

		# Concatenar la palabra "Controller" a la ruta
		$controller = ucfirst($route[0]).'Controller';

		switch ( count($route) ) {

			case 1:
				$action = APP_ACTION_DEFAULT;
				break;

			case 2:				
				$action = $route[1];
				break;

			case 3:	

				# Validar Si la Ruta es Ver | Editar | Eliminar
				if ( $route[1] == 'ver' || 
					 $route[1] == 'editar'  || 
					 $route[1] == 'eliminar' ) {

					$action = $route[1];

					# Agregar el Id a la Solicitud
					$_REQUEST['id'] = $route[2];
				}				
				break;
			
			default:
				error404();
				break;
		}
	}

	# Si no Existe la Ruta
	if( !isset($_GET['route']) ) {
		
		$controller = APP_CONTROLLER_DEFAULT;
		$action     = APP_ACTION_DEFAULT;
	}	

	# Validar Si Existe La InicioController
	if (@class_exists($controller) && isset($action)) {

		# Instanciar la ClaseController
		$metodo = new $controller();

		# Validar Si Existe La Accion
		if ( method_exists($metodo, $action) ) {

			# Ejecutar la Accion
			$metodo->$action();	

		}else {
			error404();
		}			
		
	}else {		
		error404();
	}