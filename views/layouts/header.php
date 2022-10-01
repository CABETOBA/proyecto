<!-- Content Header (Page header) -->
<div class="content-header">

    <div class="container-fluid">

    	<?php
			$_title    = ( isset($header_title)    ? $header_title    : $page_title );
			$_subtitle = ( isset($header_subtitle) ? $header_subtitle : null );
			$_url      = ( isset($header_url)      ? $header_url      : null );
    	?>
        <div class="row mb-2">        	

        	<!-- Title Page -->
			<div class="col-sm-6">
				<h1 class="m-0">
					<?= !empty($_subtitle) ? $_subtitle : $_title ?>
				</h1>
			</div>

			<!-- Breadcrumb ( Miga de Pan ) -->
			<?php if ( isset($header_title) ) : ?>

				<div class="col-sm-6">

					<ol class="breadcrumb float-sm-right">

						<li class="breadcrumb-item">
							<a href="<?= route('inicio') ?>">
								Inicio
							</a>
						</li>						

						<?php if ( !empty($_subtitle) && !empty($_url) ) : ?>

							<li class="breadcrumb-item">
								<a href="<?= route($_url) ?>">
									<?= $_title ?>
								</a>
							</li>

						<?php endif; ?>

						<li class="breadcrumb-item active">
							<?= !empty($_subtitle) ? $_subtitle : $_title ?>
						</li>

					</ol>

				</div>

			<?php endif; ?>

        </div>

    </div>

</div>