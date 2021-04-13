<!-- Template Name: Undersida 3
-->

<?php get_header();
$title = get_field('text_title');
$full_text = get_field('full_text');
?>


<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12">
                        <h1><?php echo $title;?></h1>
                           <p> <?php echo $full_text;?> </p>
						</div>
					</div>
				</div>
			</section>
		</main>
        
<?php get_footer();?>