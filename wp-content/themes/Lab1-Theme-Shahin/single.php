<?php
get_header(); // get header from header.php
?>

<div class="container">

  <div class="row">
    <div id="" class="col-xs-12 col-md-9">
      <!--  WP loop to display full post -->
      <?php if (have_posts()) : ?>
        <?php if (($wp_query->post_count) > 1) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <!-- Do your post header stuff here for excerpts-->
            <?php the_excerpt() ?>
            <!-- Do your post footer stuff here for excerpts-->
          <?php endwhile; ?>
        <?php else : ?>

          <?php while (have_posts()) : the_post(); ?>
            <!-- Do your post header stuff here for single post-->
            <article style="border-top:solid 1px #ccc; margin:30px auto;">
              <!-- Diplay thumbnail -->

              <?php the_post_thumbnail(array(786, 442)); ?>
              <div class="row">
                <div class="col-md-6">

                  <h2 class="title"><?php the_title(); //post title ?></h2>
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
                </div>
                <div class="col-md-6">

                </div>
              </div>


              <p> <?php the_content() //shows the post content
                  ?></p>
            </article>

          <?php endwhile; ?>

        <?php endif; ?>

      <?php else : ?>

      <?php endif; ?>

      <!-- shows the page pagination for posts , so user can navigate to next or last post-->
      <?php previous_post_link() ?>
      <?php next_post_link() ?>

    </div>
    <aside id="secondary" class="col-xs-12 col-md-3">
      <div id="sidebar">
        <!-- gets the sidebar -->
        <?php get_sidebar(); ?>

      </div>
    </aside>
  </div>



</div>

<?php
// getting information from footer.php
get_footer();


?>

<style>


</style>