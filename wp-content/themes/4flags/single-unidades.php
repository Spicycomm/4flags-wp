
<?php include("head.php"); ?>
<?php include("header.php"); ?>
	<?php include("pages/sobre.php"); ?>
	<?php include("pages/missao.php"); ?>
	<?php include("pages/visao.php"); ?>
	<?php include("pages/valores.php"); ?>
	<?php include("pages/metodologia.php"); ?>
	<?php include("pages/cursos.php"); ?> 
	<?php include("pages/courses/curso-ingles.php"); ?>
	<?php include("pages/courses/curso-espanhol.php"); ?> 
	<?php include("pages/courses/curso-frances.php"); ?> 
	<?php include("pages/courses/curso-portugues.php"); ?> 
	<?php include("pages/garantia.php"); ?>


	<section class="container-units">
		<div class="center">
			<div class="container-info">
				<div class="destaque-info">
					<div class="title-unit">
						<h2><?= the_title(); ?></h2>
					</div>

					<div class="unit-image-destaque">
						<img src="<?= the_post_thumbnail_url(); ?>" alt="<?= the_title(); ?>">
					</div>
				</div>
				
				<?php get_field("unidades"); ?>

				<div class="aditional-info">
					<p class="unit-address-title">Endereço:</p>
					<p class="unit-address"><?= the_field("endereço"); ?></p>
					<p class="unit-tel-title">Telefone:</p>
					<p class="unit-tel"><?= the_field("telefone"); ?></p>
					<p class="unit-email-title"><strong>Email:</strong></p>
					<p class="unit-email"><?= the_field("email"); ?></p>
				</div>
			</div>
			<div class="gallery-image-units">
				<h3>Galeria</h3>
				<ul>
					<li>
						<a href="<?= the_post_thumbnail_url(); ?>" 
						   data-lightbox="<?= the_title(); ?>">
							<img src="<?= the_post_thumbnail_url(); ?>"  alt="<?= the_title(); ?>">
						</a>
					</li>
				</ul>
			</div>
		</div>
	</section>
<?php include("footer.php"); ?>
