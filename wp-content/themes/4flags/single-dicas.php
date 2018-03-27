<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/lightbox.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">
	<title></title>
</head>
<body>
	<?php require_once("header.php"); ?>

	<section class="container-units">
		<div class="center">
			<article class="tip-container">
				<h2 class="tip-title"><?= the_title(); ?></h2>
				
				<div class="tip-content">
					<div class="tip-content-text">
						<? the_post(); ?>
						<? the_content(); ?>
					</div>

					<div class="tip-image">
						<img src="<?= the_post_thumbnail_url(); ?>">
					</div>
				</div>
			</article>
		</div>
	</section>
	<?php require_once("footer.php"); ?>