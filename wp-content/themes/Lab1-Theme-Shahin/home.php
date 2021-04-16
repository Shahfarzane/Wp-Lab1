<?php get_header(); ?>
<section>
	<div class="container">
		<div class="row">
			<div id="primary" class="col-xs-12 col-md-9">
				<?php
				// loads the page title
				$our_title = get_the_title(get_option('page_for_posts', true)); ?>
				<h1> <?php echo $our_title; ?></h1>

				<!-- Loop to display all posts with pagination -->
				<?php
				if (have_posts()) :
					while (have_posts()) : the_post();
				?>
							<article>
								<!-- gets the post thumbnail -->
								<?php the_post_thumbnail(array(786, 442)); ?>
								<h2 class="title">
									<!-- gets the post link -->
									<a href="<?php the_permalink() ?>"><?php the_title(); // gets the title of the post?></a>
								</h2>
								<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i> <?php echo get_the_date(); // gets posts date?>
									</li>
									<li>
										<i class="fa fa-user"></i> <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); //gets the link to authors?>"><?php the_author(); //shows post author ?></a>
									</li>
									<style>
										.cat {
											display: inline;
										}
									</style>
									<li class="cat">
										<i class="fa fa-tag"></i> <?php the_category(', ') //shows post category;?>
									</li>

								</ul>

								<p><?php the_excerpt(); // shows only a small part  of the post 
									?></p>
							</article>
				<?php
					endwhile;
				/* WP Error message */
				else :
					_e('Sorry, no posts matched your criteria.', 'textdomain');
				endif;
				?>
					<nav class="pagination">
						<?php pagination_bar(); // function to call the pagination
						?>
					</nav>
			</div>
			<aside id="secondary" class="col-xs-12 col-md-3">
				<div id="sidebar">
					<!-- including sidebar.php -->
					<?php get_sidebar(); ?>

				</div>
			</aside>
		</div>
	</div>
</section>
</main>

<?php
get_footer();
// gets the footer
?>