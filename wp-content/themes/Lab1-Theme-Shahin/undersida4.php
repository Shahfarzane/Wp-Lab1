
<!-- Template Name: Undersida 4 
 -->
 <?php get_header(); // getting the Header
$title = get_field('text_title'); //acf field
$full_text = get_field('full_text');
$image = get_field('image');
?>

			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-md-6">
                        <h1><?php echo $title;?></h1>
                           <p> <?php echo $full_text;?> </p>						
						</div>
						<div class="col-xs-12 col-sm-4 col-md-6">
							<img src="<?php echo $image['url'];?>" />
						</div>
					</div>
				</div>
			</section>
		</main>

        
<?php get_footer(); //get the footer from footer.php?>