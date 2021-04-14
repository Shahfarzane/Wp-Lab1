<!-- wp sidebar snippet  -->
<?php if ( !is_active_sidebar( 'primarySidebar' ) ) : ?>
    <ul >
        <?php dynamic_sidebar( 'primarySidebar' ); ?>
    </ul>
<?php endif; ?>




			<?php if (!dynamic_sidebar()) : ?>

			



						<?php endif; ?>


<style>
li,ul{list-style: none;}
li.widget ul,
li.widget li { list-style: none; }
</style>