<?php 
/* 
* Template Name: Home
*/

// Manejar las peticiones AJAX del RSVP
handle_rsvp_ajax();

get_header();
?>

<main>
    <section>
        <div class="container-fluit">
            <div class="row gx-0">
                <div class="col-12 gx-0">
                    <?php if(wp_is_mobile()): ?>
                        <div class="py-4"></div>
                        <img class="w-100 d-block" src="<?php echo THEME_IMG; ?>hero-mobile.webp" alt="Hero Mobile">
                    <?php else: ?>
                        <img class="w-100 d-block" src="<?php echo THEME_IMG; ?>hero.webp" alt="Hero">
                    <?php endif; ?>

                    <div class="position-absolute top-0 start-0 w-100">
                        <div class="d-flex flex-column justify-content-center">

                            <div class="py-5"></div>
                            <div class="py-xl-5 pt-3"></div>
                            <div class="py-xl-5"></div>

                            <?php if(wp_is_mobile()): ?>
                                <img width="320" class="d-block mx-auto mb-3" src="<?php echo THEME_IMG; ?>hero-text.svg" alt="Hero Text">
                                <img width="150" class="mx-auto d-block" src="<?php echo THEME_IMG; ?>date-text.svg" alt="Hero Text 2">
                                <?php else: ?>
                                <img class="w-auto d-block mx-auto mb-3" src="<?php echo THEME_IMG; ?>hero-text.svg" alt="Hero Text">
                                <img width="270" class="mx-auto d-block" src="<?php echo THEME_IMG; ?>date-text.svg" alt="Hero Text 2">
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="customSectionWedding position-relative z-1" id="wedding">
        <img class="customSectionWedding__img position-absolute w-100 h-100 top-0 start-0 object-fit-cover object-position-bottom" src="<?php echo THEME_IMG; ?>bg-wedding.webp" alt="Icon Start">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-9 mx-auto">
                    <div class="customSectionBox py-xl-5 py-4 px-4 position-relative shadow-1">
                        <span class="start start__top"></span>
                        <span class="start start__left position-absolute top-5 start-4"></span>
                        <span class="start start__right position-absolute top-5 end-4"></span>
                        <div class="p-4 text-center">
                            <div class="py-xl-4 py-2"></div>
                            <h2 class="font-titulo fs-xl-md-1 fs-2-md mb-5">Wedding</h2>

                            <p class="fs-xl-3 text-secondary line-height-0">FRIDAY,</p>
                            <p class="fs-xl-3 text-secondary line-height-0 mb-4">MARCH 27th,2026</p>
                            <p class="fs-xl-3 text-secondary line-height-0 mb-4">7:00 P.M.</p>

                            <h2 class="font-titulo fs-xl-lg-2 fs-6 mb-3 letter-spacing-16">Ceremony</h2>
                            <p class="fs-xl-3 text-secondary line-height-0">IGLESIA SANTO TORIBIO</p>
                            <p class="fs-xl-3 text-secondary line-height-0 mb-4">DE MOGROVIEJO</p>
                            <a href="https://maps.app.goo.gl/89yKaez3suxK9ZaFA" target="_blank" class="btn btn-primary mx-auto mb-5">LOCATION</a>

                            <h2 class="font-titulo fs-xl-lg-2 fs-6 mb-3 letter-spacing-16">Reception to follow</h2>
                            <p class="fs-xl-3 text-secondary line-height-0 mb-4">CASA 1537</p>
                            <a href="https://maps.app.goo.gl/zmWJUS3ccT6m8Frj8" target="_blank" class="btn btn-primary mx-auto mb-5">LOCATION</a>
                            
                            <h2 class="font-titulo fs-xl-lg-2 fs-4 mb-3">Dress Code</h2>
                            <button type="button" class="btn btn-primary btn-primary-lg mx-auto border-0 mb-5" data-bs-toggle="modal" data-bs-target="#tropicalBlackTie">TROPICAL BLACK TIE</button>

                            <h2 class="font-titulo fs-xl-lg-2 fs-4 mb-3">Registry</h2>
                            <a href="https://www.zola.com/registry/aleysebas2026" class="btn btn-primary btn-primary-lg mx-auto border-0 mb-xl-5" tsrget="_blank">Registry</a>
                        </div>
                        <span class="start start__bottom"></span>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="py-5"></div>
        <div class="pt-xl-5"></div>
    </section>

    <section class="customSectionSaveDate position-relative bg-white-100">
        <div class="container-fluid gx-0 h-100">
            <div class="row gx-0 h-100">
                <?php if(wp_is_mobile()): ?>
                    <?php for($i = 0; $i < 6; $i++): ?>
                        <div class="col px-xl-4 px-3 h-100">
                            <div class="bg-blue-100 px-1 h-100"></div>
                        </div>
                    <?php endfor; ?>
                <?php else: ?>
                    <?php for($i = 0; $i < 12; $i++): ?>
                        <div class="col px-xl-4 px-2 h-100">
                            <div class="bg-blue-100 px-1 h-100"></div>
                        </div>
                    <?php endfor; ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="position-absolute top-0 start-0 w-100 h-100">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-12">
                        <div class="py-5"></div>
                        <div class="text-center">
                            <h2 class="font-titulo fs-xl-md-1 fs-2-md mb-5 text-secondary">Save the Date</h2>
                            <div id="mi-countdown" data-countdown="2026-03-27 19:00:00"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="customSectionEvents position-relative z-1" id="events">
        <?php if(wp_is_mobile()): ?>
            <img class="customSectionWedding__img position-absolute w-100 h-100 top-0 start-0 object-fit-cover object-position-bottom" src="<?php echo THEME_IMG; ?>bg-events-mobile.webp" alt="Background Events Mobile">
        <?php else: ?>
            <img class="customSectionWedding__img position-absolute w-100 h-100 top-0 start-0 object-fit-cover object-position-bottom" src="<?php echo THEME_IMG; ?>bg-events.webp" alt="Background Events">
        <?php endif; ?>
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-9 mx-auto">
                    <div class="customSectionBox py-xl-5 py-4 px-4 position-relative rounded-4 shadow-1">
                        <span class="start start__top"></span>
                        <span class="start start__left position-absolute top-5 start-4"></span>
                        <span class="start start__right position-absolute top-5 end-4"></span>
                        <div class="p-4 text-center">
                            <div class="py-xl-4 py-2"></div>
                            <h2 class="font-titulo fs-xl-md-1 fs-2-md mb-5 text-secondary">Events</h2>

                            <div class="row">
                                <div class="col-12 col-xl-6">
                                    <h2 class="font-titulo fs-xl-lg-2 fs-4 mb-3 letter-spacing-16 text-secondary">Welcome <br> Party</h2>
                                    <p class="fs-xl-3 text-secondary line-height-0 mb-4">MARCH 26th, <br>2026</p>
                                    <p class="fs-xl-3 text-secondary line-height-0 mb-4">5:00 - 8:00 P.M.</p>
                                    <p class="fs-xl-3 text-secondary line-height-0 mb-xl-4 mb-2">TBD</p>
                                    <a href="#" target="_blank" class="btn btn-primary mx-auto mb-5">LOCATION</a>

                                    <p class="fs-xl-3 text-secondary line-height-0 mb-xl-4 mb-2">DRESS CODE</p>
                                    <button type="button" class="btn btn-primary btn-primary-lg mx-auto mb-5 border-0" data-bs-toggle="modal" data-bs-target="#cocktail">COCKTAIL</button>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <h2 class="font-titulo fs-xl-lg-2 fs-4 mb-3 letter-spacing-16 text-secondary">More Info <br> To Come</h2>
                                    <p class="fs-xl-3 text-secondary line-height-0 mb-4">MARCH 28th, <br>2026</p>
                                    <p class="fs-xl-3 text-secondary line-height-0 mb-4">11:30 A.M.</p>
                                    <p class="fs-xl-3 text-secondary line-height-0 mb-xl-4 mb-2">TBD</p>
                                    <a href="#" target="_blank" class="btn btn-primary mx-auto mb-5">LOCATION</a>

                                    <p class="fs-xl-3 text-secondary line-height-0 mb-xl-4 mb-2">DRESS CODE</p>
                                    <button type="button" class="btn btn-primary btn-primary-lg mx-auto mb-xl-5 mb-3 border-0" data-bs-toggle="modal" data-bs-target="#casualBeachWear">CASUAL BEACH WEAR</button>
                                </div>
                            </div>
                        </div>
                        <span class="start start__bottom"></span>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="py-5"></div>
        <div class="py-5"></div>
        <div class="py-5"></div>
        <div class="py-5"></div>
        <div class="py-5"></div>
        <div class="py-5"></div>
        <div class="py-5"></div>
        <div class="py-5"></div>
        <div class="py-xl-5"></div>
        <div class="py-xl-5 pt-5"></div>
        <div class="py-xl-5"></div>
        <div class="py-xl-5"></div>
        <div class="py-xl-5"></div>
        <div class="py-xl-5"></div>
    </section>

    <section class="customSectionWedding position-relative z-1" id="rsvp">
        <img class="customSectionWedding__img position-absolute w-100 h-100 top-0 start-0 object-fit-cover object-position-bottom" src="<?php echo THEME_IMG; ?>bg-rsvp.webp" alt="Background R.S.V.P.">
        <div class="container-fluid gx-0 h-100 position-relative z-1 bg-blue-100">
            <div class="row gx-0 h-100">
                <?php if(wp_is_mobile()): ?>
                    <?php for($i = 0; $i < 21; $i++): ?>
                        <div class="col h-100">
                            <div class="py-4<?php echo ($i % 2 == 0) ? ' bg-green' : ' bg-blue-100'; ?>"></div>
                        </div>
                    <?php endfor; ?>
                <?php else: ?>
                    <?php for($i = 0; $i < 27; $i++): ?>
                        <div class="col h-100">
                            <div class="py-5<?php echo ($i % 2 == 0) ? ' bg-green' : ' bg-blue-100'; ?>"></div>
                        </div>
                    <?php endfor; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="container position-relative z-2">
            <div class="row">
                <div class="col-12 col-xl-9 mx-auto px-xl-0 px-4">
                    <div class="customSectionBox py-xl-5 py-4 px-3 position-relative rounded-4 shadow-1">
                        <div class="p-xl-4 text-center">
                            <div class="py-xl-4 py-2"></div>
                            <h2 class="font-titulo fs-xl-md-1 fs-2-md mb-5">R.S.V.P.</h2>

                            <p class="fs-xl-3 text-secondary line-height-0 mb-3">CELEBRATE WITH US!</p>
                            <p class="font-poppins fs-xl-5 text-secondary line-height-0 mb-4 fw-normal">Please kindly respond by <br class="d-xl-none"> October 27th, 2025</p>
                            <p class="fs-xl-4 fs-p-xxl text-secondary fw-bold mb-4" style="line-height: 1.3;">Please check back in later for more <br> information on how to RSVP.</p>

                            <button type="button" class="btn btn-primary btn-primary-lg mx-auto border-0 mb-5">R.S.V.P.</button>

                            <p class="font-poppins fs-xl-4 fs-p-xxl text-secondary line-height-0 fw-normal">More Information:</p>
                            <p class="font-poppins fs-xl-4 fs-p-xxl text-secondary line-height-0 mb-4 fw-normal">+57 321 8492726 | rsvp@aleysebas2026.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-5"></div>
        <div class="pt-xl-5"></div>
    </section>

    <section class="customSectionBg">
        <div class="container-fluid gx-0">
            <div class="row gx-0">
                <div class="col-12 gx-0">
                    <?php if(wp_is_mobile()): ?>
                        <img class="w-100 d-block" src="<?php echo THEME_IMG; ?>bg-mobile.webp" alt="Background Mobile">
                    <?php else: ?>
                        <img class="w-100 d-block" src="<?php echo THEME_IMG; ?>bg.webp" alt="Background">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="customSectionCartagena position-relative z-1" id="cartagena">
        <img class="customSectionWedding__img position-absolute w-100 h-100 top-0 start-0 object-fit-cover object-position-bottom" src="<?php echo THEME_IMG; ?>bg-cartagena.webp" alt="Background Cartagena">
        <div class="container-fluid gx-0 h-100 position-relative z-1 bg-blue-100">
            <div class="row gx-0 h-100">
                <?php if(wp_is_mobile()): ?>
                    <?php for($i = 0; $i < 21; $i++): ?>
                        <div class="col h-100">
                            <div class="py-4<?php echo ($i % 2 == 0) ? ' bg-red' : ' bg-red-100'; ?>"></div>
                        </div>
                    <?php endfor; ?>
                <?php else: ?>
                    <?php for($i = 0; $i < 27; $i++): ?>
                        <div class="col h-100">
                            <div class="py-5<?php echo ($i % 2 == 0) ? ' bg-red' : ' bg-red-100'; ?>"></div>
                        </div>
                    <?php endfor; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="container position-relative z-2">
            <div class="row">
                <div class="col-12 col-xl-9 mx-auto px-xl-0 px-4">
                    <div class="customSectionBox py-xl-5 py-4 px-xl-3 px-4 position-relative rounded-4 shadow-1">
                        <div class="p-xl-4 text-center">
                            <div class="py-xl-4 py-2"></div>
                            <h2 class="font-titulo fs-xl-md-1 fs-2-md">Cartagena</h2>
                            <p class="fs-xl-3 mb-xl-0 mb-3">TRAVEL</p>

                            <p class="fs-xl-5 fs-p-xxl text-secondary mb-4 fw-bold" style="line-height: 1.4;">
                                we are very excited to have our wedding in colombia’s coastal gem, cartagena. a unesco world heritage site, this city is one of south america’s greatest cultural treasures. the walls of cartagena de indias are located in the historical center, “the walled city”, were you will find squares, cobblestone streets and beautiful, colorful colonial buildings.
                            </p>

                            <p class="fs-xl-5 fs-p-xxl text-secondary fw-bold mb-xl-0 mb-4" style="line-height: 1.4;">
                                the best way to experience cartagena is to walk and explore it for yourself by getting lost in the maze of narrow streets and luscious green plazas. we recommend staying in the walled city were everything is walking distance. constant live music on the streets, great restaurants and quirky bars, add life to the streets of cartagena.
                            </p>
                        </div>
                        <h2 class="font-titulo fs-xl-lg-2 fs-4 text-center">Handpicked by Us</h2>
                        <ul class="pt-xl-4 pt-3 px-xl-4">
                            <span class="line line--full bg-secondary"></span>
                            <li class="d-flex gap-3 align-items-center py-xl-3 px-xl-4 py-2 px-2 clickeable" style="cursor: pointer;">
                                <span class="icono"><img class="d-block w-100" src="<?php echo THEME_IMG; ?>icons/icon-travel-info.svg" alt="Home 1"></span>
                                <a class="font-titulo fs-xl-lg-2 text-secondary letter-spacing-xl-3 letter-spacing-15" href="/cartagena#travel-info">TRAVEL INFO</a>
                            </li>
                            <li class="d-flex gap-3 align-items-center py-xl-3 px-xl-4 py-2 px-2 clickeable" style="cursor: pointer;">
                                <span class="icono"><img class="d-block w-100" src="<?php echo THEME_IMG; ?>icons/icon-hotel.svg" alt="Home 1"></span>
                                <a class="font-titulo fs-xl-lg-2 text-secondary letter-spacing-xl-3 letter-spacing-15" href="/cartagena#hotels">HOTELS</a>
                            </li>
                            <li class="d-flex gap-3 align-items-center py-xl-3 px-xl-4 py-2 px-2 clickeable" style="cursor: pointer;">
                                <span class="icono"><img class="d-block w-100" src="<?php echo THEME_IMG; ?>icons/icon-restaurants.svg" alt="Home 1"></span>
                                <a class="font-titulo fs-xl-lg-2 text-secondary letter-spacing-xl-3 letter-spacing-15" href="/cartagena#restaurants">RESTAURANTS</a>
                            </li>
                            <li class="d-flex gap-3 align-items-center py-xl-3 px-xl-4 py-2 px-2 clickeable" style="cursor: pointer;">
                                <span class="icono"><img class="d-block w-100" src="<?php echo THEME_IMG; ?>icons/icon-brunch.svg" alt="Home 1"></span>
                                <a class="font-titulo fs-xl-lg-2 text-secondary letter-spacing-xl-3 letter-spacing-15" href="/cartagena#brunch">BRUNCH &amp; DESSERTS</a>
                            </li>
                            <li class="d-flex gap-3 align-items-center py-xl-3 px-xl-4 py-2 px-2 clickeable" style="cursor: pointer;">
                                <span class="icono"><img class="d-block w-100" src="<?php echo THEME_IMG; ?>icons/icon-bars.svg" alt="Home 1"></span>
                                <a class="font-titulo fs-xl-lg-2 text-secondary letter-spacing-xl-3 letter-spacing-15" href="/cartagena#bars">BARS &amp; PUBS</a>
                            </li>
                            <li class="d-flex gap-3 align-items-center py-xl-3 px-xl-4 py-2 px-2 clickeable" style="cursor: pointer;">
                                <span class="icono"><img class="d-block w-100" src="<?php echo THEME_IMG; ?>icons/icon-beauty-salons.svg" alt="Home 1"></span>
                                <a class="font-titulo fs-xl-lg-2 text-secondary letter-spacing-xl-3 letter-spacing-15" href="/cartagena#beauty">BEAUTY SALONS</a>
                            </li>
                            <li class="d-flex gap-3 align-items-center py-xl-3 px-xl-4 py-2 px-2 clickeable border-0" style="cursor: pointer;">
                                <span class="icono"><img class="d-block w-100" src="<?php echo THEME_IMG; ?>icons/icon-boutiques.svg" alt="Home 1"></span>
                                <a class="font-titulo fs-xl-lg-2 text-secondary letter-spacing-xl-3 letter-spacing-15" href="/cartagena#boutiques">BOUTIQUES</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="customSectionPlaces position-relative bg-white-100">
        <div class="container-fluid gx-0 h-100">
            <div class="row gx-0 h-100">
                <?php if(wp_is_mobile()): ?>
                    <?php for($i = 0; $i < 6; $i++): ?>
                        <div class="col px-xl-4 px-3 h-100">
                            <div class="bg-blue-100 px-1 h-100"></div>
                        </div>
                    <?php endfor; ?>
                <?php else: ?>
                    <?php for($i = 0; $i < 12; $i++): ?>
                        <div class="col px-xl-4 px-2 h-100">
                            <div class="bg-blue-100 px-1 h-100"></div>
                        </div>
                    <?php endfor; ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="position-absolute top-0 start-0 w-100 h-100">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-12 gx-0">
                        <div class="py-xl-5 py-5 my-xl-0 my-4"></div>
                        <div class="text-center">
                            <h2 class="font-titulo fs-xl-md-1 fs-2-md mb-5 text-primary">Places to Visit</h2>
                            <div class="py-xl-4 py-1"></div>
                            <?php echo get_template_part('template-parts/components/component-swiper-place'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid gx-0">
            <div class="row gx-0">
                <div class="col-12">
                    <?php if(wp_is_mobile()): ?>
                        <img class="w-100 d-block" src="<?php echo THEME_IMG; ?>alexandra-and-sebastian-mobile.webp" alt="alexandra and sebastian">
                    <?php else: ?>
                        <img class="w-100 d-block" src="<?php echo THEME_IMG; ?>alexandra-and-sebastian.webp" alt="alexandra and sebastian">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <?php echo get_template_part('template-parts/components/component-map'); ?>
    <?php get_template_part('template-parts/components/component-modal'); ?>
</main>

<?php 
get_footer();
?>