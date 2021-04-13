<?php 
get_header();
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
       <div class="row">
        <div class="col-md-6">
        <h2 class="title"><?php the_title(); ?></h2>
       <ul class="meta">
		<li>
			<i class="fa fa-calendar"></i> <?php the_time(); ?>
        </li>
		<li>
			<i class="fa fa-user"></i> <a href="forfattare.html"><?php the_author(); ?></a>
		</li>

	</ul>
        </div>
        <div class="col-md-6" >
        <!-- Diplay thumbnail image -->
        <?php the_post_thumbnail( 'thumbnail', array( 'class' => 'alignright' ) ); ?>
        </div>
       </div>
       
  
         <p> <?php the_content() ?></p>
       </article>

       <!-- Do your post footer stuff here for single post-->
     <?php endwhile; ?>

  <?php endif; ?>

<?php else : ?>
     <!-- Stuff to do if there are no posts-->

<?php endif; ?>

       <!-- Pagination -->
         <?php previous_post_link()?>        	  
         <?php next_post_link() ?>
     
</div>
<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar">
							<!-- including sidebar.php -->
							<?php get_sidebar();?>
								
							</div>
						</aside>
</div>



</div>

<?php
get_footer();


?>
