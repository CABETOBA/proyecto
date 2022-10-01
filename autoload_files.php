<?php 

	# Carga Archivos.php Por Carpeta	
	function autoLoadFile( string $carpeta ) {

		# Valida Si Existe La Capeta
		if (is_dir($carpeta)) {

			# Abrir la Carpeta
			if ( $gestor = opendir('./'.$carpeta) ) {

				# Recorre los Archivos
				while (false !== ($archivo = readdir($gestor))) {

					# Validar los puntos
					if ($archivo != '.' && $archivo != '..') {

						# Cargar Todos los Archivos
						require_once $carpeta.'/'.$archivo;
					}
				}
			}
		}
	}

	autoLoadFile('config');
	autoLoadFile('helpers');