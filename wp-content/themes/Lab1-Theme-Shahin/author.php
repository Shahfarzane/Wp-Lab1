<?php get_header(); // gets header from header.php
?>
<section>
	<div class="container">
		<div class="row">
			<div id="primary" class="col-xs-12 col-md-9">
				<h1> <?php the_author(); //shows post autho 
						?></h1>

				<!-- Loop to display all posts -->
				<?php
				if (have_posts()) :
					while (have_posts()) : the_post(); //if there is any post it will load 
				?>
						<article>
							<?php the_post_thumbnail(array(786, 442)); // post thumbnail with size
							?>
							<h2 class="title">
								<a href="<?php the_permalink(); //post link 
											?>"><?php the_title(); //post title
													?></a>
							</h2>
							<ul class="meta">
								<li>
									<i class="fa fa-calendar"></i> <?php echo get_the_date(); // gets posts date
																	?>
								</li>
								<li>
									<i class="fa fa-user"></i> <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); //gets the link to authors
																		?>"><?php the_author(); //shows post author
																				?></a>
								</li>
								<style>
									.cat {
										display: inline;
									}
								</style>
								<li class="cat">
									<i class="fa fa-tag"></i> <?php the_category(', ') //shows post category; 
																?>
								</li>
							</ul>
							<!-- only displays a little part of the text -->
							<p><?php the_excerpt(); ?></p>
						</article>
				<?php
					endwhile;

				else :
					_e('Sorry, no posts matched your criteria.', 'textdomain');
				endif;
				?>

				<!-- pagination method>
					<?php the_posts_pagination(array(
						'mid_size'  => 2,
						'prev_text' => __('Föregående', 'textdomain'),
						'next_text' => __('Nästa', 'textdomain'),
					)); ?>

				</div>
				<aside id="secondary" class="col-xs-12 col-md-3">
					<div id="sidebar">
						<!-- gets sidebar -->
				<?php get_sidebar(); ?>

			</div>
			</aside>
		</div>
	</div>
</section>
</main>

<?php get_footer(); ?>