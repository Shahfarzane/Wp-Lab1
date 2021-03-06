<?php
/**
 * Template Name: Undersida without ACF
 * 
 */
?>

<?php get_header();?>


<section>
    <div class="container">
        <div class="row">
        <?php //here starts the php loop
            while(have_posts()){
                the_post();
        ?>

            <div class="col-xs-12 col-sm-8 col-md-6">
                <h1>
                    <?php the_title(); //title of the page?>
                </h1>
                <?php the_content(); //content of the page?>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-6">
                <img src="<?= get_the_post_thumbnail_url(); //get the image of the post?>" />
            </div>

        <?php // finishing the loop
            } 
        ?>

        </div>
    </div>
</section>

</main>
<?php get_footer()  //getting the footer from footer.php?>