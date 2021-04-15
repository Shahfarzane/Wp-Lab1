<!-- Template Name: Undersida 
 -->
 <?php get_header();

$title = get_field('text_title');
$full_text = get_field('full_text');
?>


           <section>
               <div class="container">
                   <div class="row">
                       <div id="primary" class="col-xs-12 col-md-9">
                           <h1><?php echo $title;?></h1>
                           <p> <?php echo $full_text;?> </p>

                       </div>
                       <aside id="secondary" class="col-xs-12 col-md-3">
                       <?php	
                       wp_nav_menu(
                           array(
                               'theme_location' => 'side-menu',
                               'container' => 'ul',
                               'menu_class' => 'side-menu'
                           )
                       );
                   ?>

                       </aside>
                   </div>
               </div>
           </section>
       </main>
       
<?php get_footer();?>