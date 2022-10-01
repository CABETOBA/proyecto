						
						</div>

					</div>

				</section>

			</div>

			<!-- Footer -->
			<?php include "footer.php"; ?>

		</div>

		<!-- Scripts -->
		<?php include "script-js.php"; ?>

		<?php 
			# Borrar Session "Errores del Formulario"
			unset($_SESSION["error_form"]);

			# Borrar Session "Error de Solicitud Incorrecta"
			unset($_SESSION["error400"]);

			# Borrar Session "Exito"
			unset($_SESSION["exito"]);
		?>
		
	</body>

</html>