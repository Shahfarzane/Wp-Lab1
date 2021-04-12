<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1> <?php echo get_bloginfo( 'name' ); ?></h1>

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
			<i class="fa fa-calendar"></i> <?php the_time(); ?>
		</li>
		<li>
			<i class="fa fa-user"></i> <a href="<?php the_permalink() ?>"><?php the_author(); ?></a>
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
<p><?php the_excerpt(); ?></p>
</article>
<?php
	endwhile; 
	else :
		_e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif; 
?>							

								
						</div>

					</div>
				</div>
			</section>
		</main>

