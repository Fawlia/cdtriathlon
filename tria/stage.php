<?php
/*
Template Name: stage
*/
?>

	<?php get_header(); ?>

	<main>
   <section class="container-fluid">
  		<div class="row" >
  			<div class="head_stage">
  				<h1>Stages</h1>
  				
  			</div>
  			
  			
  			
  		</div>
   		
   </section>
	   
		
		<section class="container last_news">
			<div class="titre row">
				<div class="gauche col-lg-4 col-md-4 hidden-xs"></div>
				<div class="col-lg-4 col-md-4 text-center">Stages à venir</div>
				<div class="droite col-lg-4 col-md-4 hidden-xs"></div>
			</div>
			<div class="container">
				<div class="row">
				<?php 
			
					$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1; $custom_args = array( 'post_type' => 'stage',
					'posts_per_page' => 2,
					'post_type' => 'stage',
					'post_status' => ' published',
					'order_by' => 'post_date',
					'order' => 'DESC',
					'paged' => $paged);


				?>   
					 <?php $custom_query = new WP_Query($custom_args); ?>
   					 <?php if ($custom_query->have_posts()) : ?>
    				 <?php while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
			 		 
					 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 card">
						<div class="border">
							<div class="grid">
						
				
								<a href="<?php the_permalink()?>" style="background-image:url(<?php the_field('image-illu', false, false); ?>); background-size:cover;background-position:center; background-repeat:no-repeat">
									<div class="text_hover d-flex flex-column align-items-center justify-content-center">
										<p class="p_title">+</p>
										<p>En savoir +</p>
									</div>
								</a>
							</div>



							<div class="card_inner">
								<h3 class="title_card">
									<?php the_title(); ?> le <?php the_field('date_de_stage'); ?>
								</h3>
								
								<p class="desc">									
									<?php echo excerpt(100); ?>
								</p>
								<a href="<?php the_permalink(); ?>">Lire la suite...</a>
							</div>
						</div>
					</div>
					<?php endwhile; wp_reset_query(); else: ?>
					<p>Désoler nous n'avons pas trouvé d'article..</p>
					<?php endif; ?>
				</div>
			</div>
		</section>



	</main>
	<?php get_footer() ?>
