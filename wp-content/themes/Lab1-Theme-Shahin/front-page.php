<!-- WP get_header method to include header.php file -->

<?php get_header();
$title = get_field('title_text');
$full_text = get_field('full_text');
$image = get_sub_field('cover_image');
$size = 'full'

?>


<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="hero">
                            
                            
                            <img style=" width: 1150px;height: 500px;" src="<?php echo $image['url'];?>"/>
                                    <div class="text">
                                                <h1><?php echo $title;?></h1>
                                        <p><?php echo $full_text;?></p>

                                    </div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
<!-- WP get_header method to include footer.php file -->
<?php get_footer(); ?>