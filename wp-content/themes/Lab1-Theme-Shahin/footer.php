
<footer id="footer">
			<div class="container">
				<div class="row top">
					<div class="col-xs-12 col-sm-6 col-md-4">
<!-- this method is from ACF and load the specefic field loads about text in the footer -->
                    <h4><?php the_field('about_title', 'option'); ?></h4>
						<p><?php the_field('about', 'option'); ?></p>
						<p><?php the_field('about_second_paragraph', 'option'); ?></p>

					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
<!-- this method is from ACF and load the specefic field -->
					<h4><?php the_field('kontakt_uppgifter_text', 'option'); ?></h4>
					<p>
					<!-- this method is from ACF and load the specefic field loads the information about company-->
						<?php the_field('company_name', 'option');?><br />
						<?php the_field('address', 'option');?><br />
						<?php the_field('postcode', 'option');?>
						</p>
						<p>
						<?php the_field('tell', 'option');?><br/>
						<?php the_field('emailtext', 'option');?> <a><?php the_field('email', 'option');?></a>
						</p>


					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
						<h4>Social media</h4>
						<ul class="social">

						<ul class="social">
							<li><!-- this method is from ACF and load the specefic field -->
								<i class="fa fa-facebook"></i> <a href=""><?php the_field('facebook', 'option');?></a>
							</li>
							<li>
								<i class="fa fa-twitter"></i> <a href=""><?php the_field('twitter', 'option');?></a>
							</li>
							<li>
								<i class="fa fa-instagram"></i> <a href=""><?php the_field('instagram', 'option');?></a>
							</li>
							<li>
								<i class="fa fa-linkedin"></i> <a href=""><?php the_field('linkedin', 'option');?></a>
							</li>
						</ul>

						</ul>
					</div>
				</div>
				<div class="row bottom">
					<div class="col-xs-12">
						<p>Copyright © Grupp X, 2016</p>
					</div>
				</div>
			</div>
		</footer>

	</div>
<?php wp_footer(); //this method  ?>
</body>
</html>
