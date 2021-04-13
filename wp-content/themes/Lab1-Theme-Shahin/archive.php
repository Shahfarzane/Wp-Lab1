<?php
get_header();
?>


<h1><?php the_archive_title(); ?></h1>
<h1><?php the_archive_description(); ?></h1>
<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
	<?php 
if ( have_posts() ) : 
	while ( have_posts() ) : the_post(); 
	?>
	<article>
	<?php the_post_thumbnail( array(200, 200 ) );?> 
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
							
							
							

							


							<nav class="navigation pagination">
								<h2 class="screen-reader-text">Inläggsnavigering</h2>
								<a class="prev page-numbers" href="">Föregående</a>
								<span class="page-numbers current">1</span>
								<a class="page-numbers" href="">2</a>
								<a class="next page-numbers" href="">Nästa</a>
							</nav>
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3">
							<!-- <div id="sidebar">
							
								
							</div> -->
						</aside>
					</div>
				</div>
			</section>
		</main>




<?php
get_footer();
?>