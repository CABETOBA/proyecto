<?php

class InicioController {

	/* Mostrar Pagina Html */
	static public function index() {

		viewComponent( 'inicio/index.php', [
			'page_title' => 'Inicio'
		]);
	}

}