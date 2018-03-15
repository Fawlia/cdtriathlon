<?php get_header(); ?>

<main>
	<div id="single-team" class="d-flex flex-column align-content-between justify-content-between">



		<section class="container-fluid" id="single_post">
			<div class="container">
				<div class="row">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
						<img src="<?php the_post_thumbnail_url(); ?>" alt="Image d'un article" class="img-fluid" id="img_principale" width="550" height="auto">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">

						<h1>
							<?php the_title(); ?>
						</h1>
						<div id="post_cont">
							<?php the_content(); ?>
						</div>
						
							<p class="small text-left">
								<span class="text-left">Ecrit par <?php echo get_the_author(); ?> le <?php echo get_the_date(); ?>
							</p>
					
						

						<?php endwhile; ?>
						<?php endif; ?>
					</div>
					<div class="col-12">
						<button class="btn btn-default hidden"><a href="http://localhost/wordpress/#firstPage/slide2"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> RETOUR</a></button>
					</div>
				</div>
			</div>
		</section>

	</div>
</main>

<?php get_footer(); ?>
