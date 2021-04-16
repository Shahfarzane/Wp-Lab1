<!-- WP get_header method to include header.php file -->

<?php get_header();
// getting fields from ACF 
$title = get_field('text_title');
$full_text = get_field('full_text');
$image = get_sub_field('image');
$size = 'full'

?>

<main>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="hero">


						<?php
						$image = get_field('image');
						if (!empty($image)) : ?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); //loading the image from ACF fields?>"  />
						<?php endif; ?>
						<div class="text">
							<h1><?php echo $title; ?></h1>
							<p><?php echo $full_text; ?></p>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); //getting the footer from footer.php?>