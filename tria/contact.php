<?php
/*
Template Name: contact
*/
?>

	<?php get_header(); ?>

	<main>
		<section class="container-fluid">
			<div class="row">
				<div class="head_stage">
					<h1>Contact</h1>

				</div>



			</div>

		</section>


<?php
  echo do_shortcode(
    '[contact-form-7 title="Formulaire de contact 1"]'
  );
?>


	</main>
	<?php get_footer() ?>
