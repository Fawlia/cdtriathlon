<?php get_header(); ?>

<main>
	<div id="single-post" class="d-flex flex-column align-content-between justify-content-between">



		<section class="container-fluid" id="single_post">
			<div class="container">
				<div class="row">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" id="img_principale" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
						<!--<img src="" alt="Image d'un article" class="img-fluid" id="img_principale" width="550" height="auto">-->
						<div id="jaune" class="d-flex justify-content-center">
							<h1>
								<?php the_title(); ?>
							</h1>
						</div>

					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
						<div id="post_cont">
							<?php the_content(); ?>
						</div>
					</div>

					<div class="col-auto text-right">
						<p id="info" class="small text-left">
							Ecrit par
							<?php echo get_the_author(); ?> le
							<?php echo get_the_date(); ?>

						</p>
					</div>
					<div class="col-12 text-right">
						<button class="btn btn-default hidden"><a href="http://localhost/wordpress/#firstPage"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> RETOUR</a></button>
					</div>



					<?php endwhile; ?>
					<?php endif; ?>


				</div>
			</div>
		</section>

	</div>
</main>

<?php get_footer(); ?>
