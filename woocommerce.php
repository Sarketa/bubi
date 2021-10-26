<?php 
get_header();
?>




<div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-sm-12">
                <h2> Sortiraj po</h2>
                <div class="sortiraj">
                    <?php do_action( 'woo_custom_catalog_ordering' ); ?>
                </div>
                <div class="col-lg-12 col-sm-12 mt-5 p-3 d-lg-inline-block d-none side-bar">
                    <?php do_action( 'woocommerce_sidebar' );?>
                </div>
            </div>
            <div class="col-lg-9 col-sm-12 mt-5">
                <?php woocommerce_content(); ?>
            </div>
        </div>
    </div>
</div>

<section class="m-2">
    <div class="container mt-5">
        <div class="row pt-5">
            <div class="col-lg-8">
                <div class="saveti">
                    <h3>Kako izabrati hranu za ljubimce?</h3>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.</p>
                </div>
                <div class="saveti ">
                    <h3>Koja je najkvalitetnija?</h3>
                    <p>Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
                </div>
                <div class="saveti d-lg-none">
                    <h3>Dodatne informacije</h3>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                        Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC "Sed ut perspiciatis.”</p>
                 </div>
            </div>
            <div class="col-lg-4 dostava-cekovi-garancija">
                <div class="dostava p-2 d-flex justify-content-start">
                    <img src="<?php echo get_template_directory_uri();?>/img/kamion.png" alt="">
                    <div class="dostava__text ms-4">
                        <h6>Dostava robe 1-5 dana</h6>
                        <p><a class="text-decoration-none" href="">Pogledajte asortiman ></a></p>
                    </div>
                </div>
                <hr>
                <div class="dostava p-2 d-flex justify-content-start">
                    <img src="<?php echo get_template_directory_uri();?>/img/cekovi.png" alt="">
                    <div class="dostava__text ms-4">
                        <h6>Čekovima gradjana do popusta</h6>
                        <p><a class="text-decoration-none" href="">Na 4 rate bez kamate  ></a></p>
                    </div>
                </div>
                <hr>
                <div class="dostava p-2 d-flex justify-content-start">
                    <img src="<?php echo get_template_directory_uri();?>/img/garancija.png" alt="">
                    <div class="dostava__text ms-4">
                        <h6>Dostava robe 1-5 dana</h6>
                        <p><a class="text-decoration-none" href="">Garancije/Reklamacija/Servis</a></p>
                    </div>
                </div>              
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="saveti d-lg-inline-block d-none">
                    <h3>Dodatne informacije</h3>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                        Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC "Sed ut perspiciatis.”</p>
                 </div>
            </div>
            <div class="col-lg-4 nema-padding mt-4">
                <img src="<?php echo get_template_directory_uri();?>/img/macke.png" class="img-fluid col-12" alt="">
                <div class="newsletter p-4 col-lg-12">                    
                        <h3>Prijavite se na naš newsletter!</h3>
                        <p>Jedna od najzanimljivijih rasa je ujedno i jedna od najzanimljivijih činjenica: Graničarski škotski ovčar je najinteligentniji.</p>                    
                        <div class="mail d-flex justify-content-lg-center justify-content-sm-start">
                            <input class="col-lg-8 me-2" type="email" placeholder="Vaša email adresa">                        
                            <button class="col-lg-4">
                                PRIJAVA
                            </button>
                        </div>
                </div> 
            </div>
        </div>
    </div>
</section>



<?php
get_footer();
?>