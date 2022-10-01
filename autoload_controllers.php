<?php
	
	# Crear autoload Para los controladores
	function controllers_autoload($classname) {
		
		include 'controllers/'.$classname.'.php';
	}

	# Buscar la funcion 'controllers_autoload' para ser utilizada
	spl_autoload_register('controllers_autoload');
