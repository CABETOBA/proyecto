<?php 
	
	require_once "models/Conexion.php";

	/* Mostrar Error 404
	-------------------------------------------------- */
	function error404() {
		echo "<h1>Error 404</h1>";
	}

	/* Mostrar Plantilla Master Html
	-------------------------------------------------- */
	function viewComponent( string $view, array $data = [] ) {

		if ( count($data) ) {

			# Generar Variables
			foreach ($data as $propiedad => $valor) {

				# Crear Nueva Variable Php
  				$$propiedad = $valor;
  			}
		}

		# Inicio de la App
		require_once 'views/layouts/app-start.php';

		# Contenido Dinamico
		require_once 'views/components/'.$view;

		# Final de la App
		require_once 'views/layouts/app-end.php';
	}

	/* Validar Si el Valor Existe en la BD
	-------------------------------------------------- */
	function  existsValueInDB( 
		string $tabla, 
		string $item, 
		string $valor, 
		int $id = 0 
	) {

		$query = "SELECT $item FROM $tabla WHERE $item = :$item";

		# Validar al Actualizar
		if ( $id ) {			
			$query .= " AND id != :$id";
		}

		$stmt = Conexion::conectar()->prepare( $query );

		$stmt->bindParam(":$item", $valor, PDO::PARAM_STR);

		# Validar al Actualizar
		if ( $id ) {			
			$stmt->bindParam(":$id", $id, PDO::PARAM_INT);
		}

		$stmt->execute();

		$issetValor = $stmt->fetch();

		# Cerrar Conexion
		$stmt->closeCursor();
		$stmt = null;

		return $issetValor;
	}

	/* Validar Formularios
	-------------------------------------------------- */
	function validateForm(
		array $request = [],
		array $validation = [],
		array $messaje = [],
		int $id = 0
	) {

		$errors = [];

		if ( count($request) && count($validation) ) {

			# Generar Variables
			foreach ( $validation as $campo => $rule ) {				

				# Validar Si El Campo No Existe
				if (!isset($request[$campo])) {

					$_SESSION["error400"] = 'Error al enviar el Formulario';

					# Redireccionar al formulario Crear | Editar
					# Con JavaScript
					echo'<script> window.history.back(); </script>';
					exit();
				}

				# Obtener el Valor del Campo
  				$valor = $request[$campo];

  				# Validar Si Existe Nombre del Compo Personalizado
  				$atribute = (
  					count($messaje) && isset($messaje[$campo])
  					? $messaje[$campo]
  					: $campo 
  				);
  				
  				# Aplicar las Reglas de Validacion
  				# 
  				# Validar Si Esta Vacio
				if ( $rule[0] === 'required' && empty($valor) ) {
  					$errors[$campo] = 'Campo requerido.';
  				}

  				# Validar Caracteres 
  				if ( isset($rule[1]) && !empty($valor) && !preg_match($rule[1], $valor) ) {
  					$errors[$campo] = "El formato del campo $atribute es inválido.";
  				}

  				# Validar Si Existe en la BD
  				if ( isset($rule[2]) && !empty($valor) ) {

  					# Extraer el Nombre de la Tabla
  					$tabla = str_replace('exists:', '', $rule[2]);

  					$res = existsValueInDB( $tabla, $campo, trim($valor), $id );

					if ( is_array($res) ) {

						$errors[$campo] = "El $atribute ya existe.";
					}  					
  				}  					  				  				  				
  			}
		}		

		# Si hay Errors, Agregarlos a una Variable de Session
		if (count($errors)) {
			$_SESSION["error_form"] = $errors;
		}

		return $errors;
	}

	/* Mostrar Mensajes De Error Del Campo
	-------------------------------------------------- */
	function errorMessage( string $campo ) {

		# Validar Si Hay Errores en el Formulario
		if ( isset($_SESSION["error_form"]) ) {

			$errors = $_SESSION["error_form"];

			if ( count($errors) ) {

				return (
					isset($errors[$campo]) 
					? '<span class="text-danger">'. $errors[$campo] .'</span>'
					: false
				);
			}
		}

		return false;
	}

	/**
	 * route "Concatenar APP_URL + Urls Amigables"
	 * @param  string $url [Urls Amigables]
	 * @return [string]  [Devuelve el dominio + la ruta]
	 */
	function route(string  $url = '') : string {

		return APP_URL.$url;
	}

	/* Acortador Para Redireccionar A Una URL
	-------------------------------------------------- */
	function redirectToRoute( string $route ) : never {

		# Redireccionar
	    header('Location: '.APP_URL.$route);
	    exit();
	}

	/* Seleccionar Item Multiple
    -------------------------------------------------- */
	function selectedItems( $jsonString, $item ) {

		# Convertir jsonString en Array
		$arrayCargos = json_decode( $jsonString, true );

		foreach ( $arrayCargos as $id ) {

			if ( $id == $item ) {

				return 'selected';  			
			}    		
		}    	
	}

	/* Estados
	-------------------------------------------------- */
	function estados() {

		return [
			'Activo',
			'Inactivo'
		];
	}

	/* Tipos de Documento
	-------------------------------------------------- */
	function tipoDocumentos() {

		return [
			'Cédula de Ciudadanía',
			'DNI',
			'Pasaporte'
		];
	}

	/* Generos
	-------------------------------------------------- */
	function generos() {

		return [
			'Masculino',
			'Femenino'
		];
	}

