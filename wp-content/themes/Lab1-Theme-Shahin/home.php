<?php get_header();?>
<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
						<?php
						$our_title = get_the_title( get_option('page_for_posts', true) ); ?>
							<h1> <?php echo $our_title; ?></h1>

<!-- Loop to display all posts with pagination -->
							<?php 
if ( have_posts() ) : 
	while ( have_posts() ) : the_post(); 
	?>
	<article>
	<?php the_post_thumbnail( array(786, 442 ) );?> 
	<h2 class="title">
		<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
	</h2>
	<ul class="meta">
		<li>
			<i class="fa fa-calendar"></i> <?php echo get_the_date(); ?>
		</li>
		<li>
		<i class="fa fa-user"></i> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a>
		</li>
		<style>
		.cat{
			display:inline;	
		} 
			</style>
		<li class="cat">
		<i class="fa fa-tag"></i> <?php the_category(', '); ?>  
		</li>
	</ul>
<!-- the_excerpt method to display part of text -->	
<p><?php the_excerpt(); ?></p>
</article>
<?php
	endwhile; 
	/* WP Error message */ 
	else :
		_e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif; 
?>							

<!-- WP pagination method-->							
<?php the_posts_pagination( array(
    'mid_size'  => 2,
    'prev_text' => __( 'Föregående', 'textdomain' ),
    'next_text' => __( 'Nästa', 'textdomain' ),
) ); ?>
								
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar">
							<!-- including sidebar.php -->
							<?php get_sidebar();?>
								
							</div>
						</aside>
					</div>
				</div>
			</section>
		</main>

<?php get_footer();?>


