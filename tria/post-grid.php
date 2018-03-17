<?php
/*
Template Name: post_grid
*/
?>

<?php get_header(); ?>
<main>
	
	<section class="container-fluid">
		<div id="post_grid" class="container">
		
			<div class="row justify-content-between">
			<?php
                
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'posts_per_page' => 9,
                'paged' => $paged );
            query_posts($args);    
                
            /*query_posts('post_type=post'); */           
            if(have_posts()) :
                    while(have_posts()) : the_post(); ?>
                    
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 card">
					<div class="border">
                      <div class="grid">
                       		<a href="<?php the_permalink()?>" style="background-image:url(<?php the_post_thumbnail_url(); ?>); background-size:cover;background-position:center; background-repeat:no-repeat"></a>
                       </div>
                       
                 
                        
                        <div class="card_inner">
							<h3 class="title_card"><?php the_title(); ?></h3>
							<p class="date"><?php the_time(get_option('date_format')); ?></p>
							<p class="desc"><?php echo get_the_excerpt(); ?></p>
							<a href="<?php the_permalink(); ?>">Lire la suite...</a>
						</div>    				
					</div>
				</div>
            <?php 
            endwhile; ?>
            <?php 
            endif; ?>		
			</div>
		</div>
	</section>
	
</main>

    <?php get_footer() ?>