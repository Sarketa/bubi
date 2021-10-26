<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bubi
 */

?>



	<footer id="colophon" class="site-footer">
		<section class="footer-style mt-4">
			<div class=" p-5">
				<div class="row">
					<div class="col-lg-2">
						<img src="<?php echo get_template_directory_uri();?>/img/logo-footer.png" alt="">
						<p class="mt-3 d-lg-inline-block d-none">----------------------------</p>
						<p>Ponedeljak-petak: 08h-18h</p>
						<p>Subota: 09-14h</p>
						<button class="dugme mt-3 mb-3">
							<i class="bi bi-headset"></i>
							<a href="tel:+0112289103">0112289103</a>
						</button>
						<div>
						<a href="https://www.facebook.com/"><i class="bi bi-facebook"></i></a>
							<a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a>
						</div>
					</div>
					<div class="col-lg-3 col-12">
						<h5>Korisnički servis</h5>
						<ul class="nav flex-column">
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Često postavljana pitanja</a></li>
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Uslovi korišćenja</a></li>
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Odricanje od odgovornosti</a></li>
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Obaveštenje o pravima potrošaca</a></li>
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Odustanak od kupovine</a></li>
     					</ul>
					</div>
					<div class="col-lg-3 col-12">
						<h5>Pomoć pri kupovini</h5>
						<ul class="nav flex-column">
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Uputstvo za kupovinu</a></li>
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Način plaćanja</a></li>
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Politika privatnosti</a></li>
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Povraćaj robe</a></li>
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Reklamacije</a></li>
     					</ul>
					</div>
					<div class="col-lg-2 col-12">
						<h5>Informacije</h5>
						<ul class="nav flex-column">
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Rrezervacija robe</a></li>
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Moj nalog</a></li>
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">O nama</a></li>
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Naš asortiman</a></li>
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Brendovi</a></li>
     					</ul>
					</div>	
					<div class="col-lg-2">
						<img src="<?php echo get_template_directory_uri();?>/img/kuca.png" alt="">
					</div>				
				</div>
				<button	type="button" class="btn btn-danger" id="btn-back-to-top">
					<i class="bi bi-arrow-90deg-up"></i>
				</button>
			</div>
		</section> 
		<section class="obavestenje p-5">
			<div class="container"> 
				<div class="row">
					<div class="col-lg-4 col-md-12">
						<p>Sve cene na ovom sajtu su iskazane u dinarima. PDV je već uračunat u cenu. Mixal se maksimalno trudi da svi artikli na sajtu budu prikazani sa ispravnim nazivima, specifikacijom, fotografijama i cenama.</p>
					</div>
				</div>
			</div>
		</section>
		<hr>


		<div class="site-info">
			<a>Copyright &copy Bubi 2018 - <?php echo date('Y'); ?></a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Power: by %2$s.', 'bubi' ), 'bubi', '<a href="http://google.rs/">Marko Saric</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<script>
	var scrollToTopBtn = document.getElementById("btn-back-to-top");
	var rootElement = document.documentElement;

		function scrollToTop() {
			// Scroll to top logic
			rootElement.scrollTo({
				top: 0,
				behavior: "smooth"
			});
		}
scrollToTopBtn.addEventListener("click", scrollToTop);
</script>

<?php wp_footer(); ?>
</body>
</html>
