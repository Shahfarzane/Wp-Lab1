<?php


?>
<?php get_header(); ?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-8 col-md-offset-2">
                    <?php
                    $s = get_search_query();
                    $args = array(
                        's' => $s
                    );

                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()) {
                        _e("<h2 style='font-weight:bold;color:#000'>Search Results for: " . get_query_var('s') . "</h2>");
                        while ($the_query->have_posts()) {
                            $the_query->the_post();
                    ?>
                        <?php
                        }
                    } else {
    ?>

        
            <p>There are no results</p>
 
<?php } ?>
                            <div class="searchform-wrap">
                            <?php get_search_form(); ?>
                            </div>
                            <article>
                                <!-- Diplay thumbnail -->

                                <?php the_post_thumbnail(array(786, 442)); ?>
                                <h2 class="title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); //post title  
                                                                        ?></a>
                                </h2>
                                <ul class="meta">
                                    <li>
                                        <i class="fa fa-calendar"></i> <?php echo get_the_date(); //post date  
                                                                        ?>
                                    </li>
                                    <li>
                                        <i class="fa fa-user"></i> <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php the_author(); ?></a>
                                    </li>
                                    <li class="cat">
                                        <i class="fa fa-tag"></i> <?php the_category(', '); ?>
                                    </li>
                                </ul>
                                <?php the_excerpt(); //shows a summary of the post
                                ?></p>
                            </article>
                </div>
            </div>
        </div>

        
    </section>
    </main>



<?php echo paginate_links() ?>
<?php get_footer(); ?>