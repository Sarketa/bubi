<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bubi
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'bubi' ); ?></a>

	<!--LOGO AND SPECIAL PAGES-->
	<div class="annoucement-bar pt-3">
		<div class="container">
			<div class="row">
				<div class="col-md-2 pb-md-0 pb-sm-2 pb-2 d-flex justify-content-md-start justify-content-sm-center justify-content-center">
					<?php the_custom_logo(); ?>
				</div>
				<div class="col-md-6 pb-md-0 pb-sm-2 pb-2 d-flex justify-content-md-start justify-content-sm-center justify-content-center">
					<ul class="annoucement-bar__list">
						<li><a href="">Upustvo za kupovinu</a></li>
						<li><a href="">O nama</a></li>
						<li><a href="">Kontakt</a></li>
					</ul>
				</div>
				<div class="col-md-4 d-flex justify-content-md-end justify-content-sm-center justify-content-center">					
					<ul class="annoucement-bar__list">
						<li>
							<i class="bi bi-person" style="font-size: 1.5rem;"></i>
							<a href="#" style="color: #2f007f; font-weight: 600;">Registracija</a>
							<span>/</span>
							<a href="#" style="color: #2f007f; font-weight: 600;">Login</a>
						</li>
						<button class="d-lg-inline-block d-none">
							<i class="bi bi-headset"></i>
							<a href="tel:+0112289103">0112289103</a>
						</button>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<hr>
<!--HEADER-->
	<header id="masthead" class="site-header">

		<div class="container pt-2">
			<div class="row align-items-center">
				<div class="col-lg-2 nav-dugme mt-2 pd-md-0 pb-sm-2 pb-2 d-flex justify-content-md-center justify-content-sm-center justify-content-center">
					<?php if ( function_exists( 'groovy_menu' ) ) { groovy_menu(); } ?>
				</div>	
				<div class="col-lg-5 col-md-12 pd-md-0 pb-sm-2 justify-content-md-center justify-content-sm-center justify-content-center">
					<?php if(function_exists('aws_get_search_form')) {aws_get_search_form();} ?>
				</div>
				<div class="col-lg-5 col-md-6 cart pb-md-0 pb-sm-2 pb-2 d-lg-inline-flex d-none d-flex justify-content-lg-end justify-content-sm-start ">
					<ul class="annoucement-bar__list">
						<li><i class="bi bi-arrow-repeat p-2" style="color: #2f007f; font-size: 1rem;"></i><a href="#" style="color: #2f007f; font-size: 14px; font-weight: 600; ">Uporedi proizvode</a></li>
						<li><i class="bi bi-heart p-2" style="color: #2f007f; font-size: 1rem;"></i><a href="#" style="color: #2f007f; font-size: 14px; font-weight: 600; ">Lista želja</a></li>
						<li><a href="<?php echo wc_get_cart_url(); ?>"><i class="bi bi-handbag p-2"></i></a><a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> – <?php echo WC()->cart->get_cart_total(); ?></a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="mt-2" style="background: linear-gradient(#DCF5FB, #D5FBF6)">
			<div class="container">
				<div class="row">  
					<div class="col-8 pt-4 pb-4">
						<?php bcn_display($return = false, $linked = true, $reverse = false, $force = false) ?>
						<h3 class="pt-3 d-lg-block d-none">Hrana za pse i mačke</h3>
						<p class="d-lg-block d-none">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
					</div>
					<div class="col-4 d-flex justify-content-end d-lg-inline-block d-none">
						<img src="<?php echo get_template_directory_uri();?>/img/image 1.png" alt="">
					</div>
				</div>
			</div>
		</div>

		<nav id="site-navigation" class="main-navigation pt-5">
		<div class="container d-flex justify-content-center ">
			<div class="row">
					<div class="col-lg-1 d-flex justify-content-center ">
							<button class="menu-toggle mb-lg-5 mb-0 mt-3" aria-controls="primary-menu" aria-expanded="false">
								<i class="bi bi-list"></i>
								<?php esc_html_e( 'Kategorije proizvoda', 'bubi' ); ?>
							</button>
					</div>
					<div class="col-12  text-center">
							<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
					</div>
				</div>	
			</div>
		</nav>
		

	</header><!-- #masthead -->
