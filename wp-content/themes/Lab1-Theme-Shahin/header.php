<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<!-- getting the websites title -->
	<title><?php wp_title(' - ',TRUE,'right'); bloginfo('name'); ?></title>
	<!-- creates a hook -->
	<?php wp_head(); ?>
</head>
<!-- displays the class for body -->
<body <?php body_class(); ?>>
<?php 

// getting the title field from ACF
$title = get_field('site_title');


?>
	<div id="wrap">
		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
						<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo get_bloginfo('name'); ?></a>
					</div>
					<div class="col-sm-6 hidden-xs">
					<!-- wordpress method to show search bar -->
					<?php get_search_form(); ?>
					</div>
					<div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
							<i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="mobile-search">
		<?php get_search_form(); ?>
		</div>

		<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
					<!-- loading the  -->
					<?php	
						wp_nav_menu(
                            array(
                                'theme_location' => 'top-menu',
                                'container' => 'ul',
                                'menu_id' => 'main-menu',
                                'menu_class' => 'menu'
                            )
						);
					?>
					</div>
				</div>
			</div>
		</nav>
		<main>