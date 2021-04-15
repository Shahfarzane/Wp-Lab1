<!-- Template Name: Undersida 3
-->

<?php get_header();
$title = get_field('text_title');
$full_text = get_field('full_text');
?>



<section>
    <div class="container">
        <div class="row">
            <div id="primary" class="col-xs-12">
                <?php // Startar loop
                    while(have_posts()) {
                        the_post();
                ?>

                <h1>
                    <?php the_title();?>
                </h1>
                <?php the_content();?>
                
                
                <?php // Stänger loop
                    } 
                ?>
            </div>
        </div>
    </div>
</section>
		</main>
        
<?php get_footer();?>