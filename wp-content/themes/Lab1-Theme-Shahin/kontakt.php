
<!-- Template Name: Kontakt 
-->
<?php get_header(); ?>
<!-- kontakt oss form -->
<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-md-8 col-md-offset-2">
							<h1>Kontakt</h1>
							<?php
         				 	// Displaying contract form using ACF
     						$form1 = get_field( 'contact' ); 
   								echo  $form1;
   							?>
						</div>
					</div>
				</div>
			</section>
		</main>
<?php get_footer(); ?>