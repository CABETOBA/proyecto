<!DOCTYPE html>
<html lang="es">

	<head>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">		

		<title> <?= isset($page_title) ? $page_title : 'Sigapp' ?> </title>

		<!-- Styles -->
		<?php include "styles-css.php"; ?>

	</head>

	<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">				
		<div class="wrapper">

			<?php					
				# Navbar
				include "navbar.php";

				# Sidebar
				include "sidebar.php";
			?>

			<!-- Contenido Wrapper -->
			<div class="content-wrapper">
							
				<?php 
					# Page header
					include "header.php";
				?>

				<!-- Contenido Center -->
			    <section class="content">

			        <div class="container-fluid">

			            <div class="card card-primary card-outline">

				        
				            	
		