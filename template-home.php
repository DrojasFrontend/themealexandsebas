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
                        <div class="pt-2"></div>
                        <img class="w-100 d-block" src="<?php echo THEME_IMG; ?>hero-mobile-new.webp" alt="Hero Mobile">
                    <?php else: ?>
                        <img class="w-100 d-block" src="<?php echo THEME_IMG; ?>hero-new.webp" alt="Hero">
                    <?php endif; ?>

                    <div class="position-absolute top-0 start-0 w-100">
                        <div class="d-flex flex-column justify-content-center">

                            <div class="py-5"></div>
                            <div class="py-xl-5 pt-3"></div>

                            <h2 class="d-flex justify-content-center align-items-center gap-3 font-titulo fs-xl-md-1 fs-3 text-center text-white uppercase letter-xl-spacing-4 letter-spacing-2 mb-xl-0 mb-1">
                                ALEXANDRA
                                <span class="w-auto h-auto" style="line-height: 0;">
                                    <?php if(wp_is_mobile()): ?>
                                        <img width="12" class="d-inline-block mx-auto" src="<?php echo THEME_IMG; ?>logo-icon.svg" alt="Logo icon">
                                    <?php else: ?>
                                        <img width="25" class="d-inline-block mx-auto" src="<?php echo THEME_IMG; ?>logo-icon.svg" alt="Logo icon">
                                    <?php endif; ?>
                                </span>
                                SEBASTIAN
                            </h2>
                            <p class="font-base fs-xl-lg-2 fs-4 text-center text-white letter-xl-spacing-96 fw-normal letter-xl-spacing-22 letter-spacing-8">03 | 27 | 2026</p>
                            <p class="font-base fs-xl-6 fs-p-xxl text-center text-white fw-regular letter-xl-spacing-22 letter-spacing-2 ">CARTAGENA DE INDIAS, COLOMBIA</p>
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
                    <div class="customSectionBox py-xl-5 py-4 px-xl-5 px-4 position-relative shadow-1">
                        <span class="start start__top"></span>
                        <span class="start start__left position-absolute top-5 start-4"></span>
                        <span class="start start__right position-absolute top-5 end-4"></span>
                        <div class="p-4 text-center">
                            <div class="py-xl-4 py-2"></div>
                            <h2 class="font-titulo fs-xl-md-1 fs-2-md mb-xl-5 mb-2 uppercase stroke-1">Wedding</h2>

                            <p class="fs-xl-3 text-secondary line-height-0 mb-xl-4 mb-2">Friday, March 27th, 2026</p>
                            <p class="fs-xl-3 text-secondary line-height-0 mb-xl-5 mb-4">7:00 p.m.</p>

                            <h2 class="font-titulo fs-xl-md-2 fs-4 mb-xl-3 mb-2 letter-xl-spacing-4 letter-spacing-2 uppercase stroke-1">Ceremony</h2>
                            <p class="fs-xl-3 text-secondary line-height-0">Iglesia</p>
                            <p class="fs-xl-3 text-secondary line-height-0 mb-xl-4 mb-3">Santo Toribio de Mogroviejo</p>
                            <a href="https://maps.app.goo.gl/89yKaez3suxK9ZaFA" target="_blank" class="btn btn-primary mx-auto mb-xl-5 mb-4">Location</a>

                            <h2 class="font-titulo fs-xl-md-2 fs-4 mb-xl-3 mb-2 letter-xl-spacing-4 uppercase stroke-1 letter-spacing-2">Reception to follow</h2>
                            <p class="fs-xl-3 text-secondary line-height-0 mb-xl-4 mb-3">Casa 1537</p>
                            <a href="https://maps.app.goo.gl/zmWJUS3ccT6m8Frj8" target="_blank" class="btn btn-primary mx-auto">Location</a>

                            <div class="py-xl-5 py-3"></div>
                            
                            <h2 class="font-titulo fs-xl-md-2 fs-4 mb-xl-3 mb-2 uppercase letter-xl-spacing-4 stroke-1">Dress Code</h2>
                            <button type="button" class="btn btn-primary btn-primary-lg mx-auto border-0 mb-xl-5 mb-4" data-bs-toggle="modal" data-bs-target="#tropicalBlackTie">Black Tie</button>

                            <h2 class="font-titulo fs-xl-md-2 fs-4 mb-xl-3 mb-2 uppercase letter-xl-spacing-4 stroke-1">Registry</h2>
                            <a href="https://www.zola.com/registry/aleysebas2026" class="btn btn-primary btn-primary-lg mx-auto border-0 mb-xl-5" target="_blank">Link Zola</a>
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
                            <h2 class="font-titulo fs-xl-md-1 fs-2-md text-secondary uppercase letter-xl-spacing-86">Save the Date</h2>
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
            <img class="customSectionWedding__img position-absolute w-100 h-100 top-0 start-0 object-fit-cover object-position-top" src="<?php echo THEME_IMG; ?>bg-events.webp" alt="Background Events">
        <?php endif; ?>
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-9 mx-auto">
                    <div class="customSectionBox py-xl-5 py-4 px-xl-5 px-4 position-relative rounded-4 shadow-1">
                        <span class="start start__top"></span>
                        <span class="start start__left position-absolute top-5 start-4"></span>
                        <span class="start start__right position-absolute top-5 end-4"></span>
                        <div class="p-4 text-center">
                            <div class="py-xl-2 py-2"></div>
                            <h2 class="font-titulo fs-xl-md-1 fs-2-md mb-5 text-primary uppercase">Events</h2>

                            <div class="row">
                                <div class="col-12 col-xl-6 position-relative custom-border-end">
                                    <h2 class="font-titulo fs-xl-md-2 fs-4 mb-3 letter-xl-spacing-16 text-primary uppercase stroke-1">Welcome <br> Party</h2>
                                    <p class="fs-xl-3 text-secondary line-height-0">Thursday,</p>
                                    <p class="fs-xl-3 text-secondary line-height-0 mb-4">March 26th, 2026,</p>
                                    <p class="fs-xl-3 text-secondary line-height-0 mb-4">5:00 - 8:00 p.m.</p>
                                    <p class="fs-xl-3 text-secondary line-height-0 mb-xl-4 mb-2">Tbd</p>
                                    <a href="#" target="_blank" class="btn btn-primary mx-auto mb-5">Location</a>

                                    <p class="font-titulo fs-xl-3 fs-4 text-primary line-height-0 mb-xl-4 mb-2 stroke-1 letter-xl-spacing-4">DRESS CODE</p>
                                    <button type="button" class="btn btn-primary mx-auto border-0 mb-5" data-bs-toggle="modal" data-bs-target="#cocktail">TDB</button>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <h2 class="font-titulo fs-xl-md-2 fs-4 mb-3 letter-xl-spacing-16 text-primary uppercase stroke-1">BEACH <br> DAY</h2>
                                    <p class="fs-xl-3 text-secondary line-height-0">Saturday,</p>
                                    <p class="fs-xl-3 text-secondary line-height-0 mb-4">March 28th, 2026</p>
                                    <p class="fs-xl-3 text-secondary line-height-0 mb-4">11:30 a.m.</p>
                                    <p class="fs-xl-3 text-secondary line-height-0 mb-xl-4 mb-2">Tbd</p>
                                    <a href="#" target="_blank" class="btn btn-primary mx-auto mb-5">Location</a>

                                    <p class="font-titulo fs-xl-3 fs-4 text-primary line-height-0 mb-xl-4 mb-2 stroke-1 letter-xl-spacing-4">DRESS CODE</p>
                                    <button type="button" class="btn btn-primary mx-auto mb-xl-0 mb-3 border-0" data-bs-toggle="modal" data-bs-target="#casualBeachWear">TDB</button>
                                </div>
                            </div>
                            <div class="py-xl-4 py-2"></div>
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
                            <div class="py-xl-0 py-2"></div>
                            <h2 class="font-titulo fs-xl-md-1 fs-2-md mb-xl-5 mb-2">R.S.V.P.</h2>

                            <p class="fs-xl-3 text-secondary line-height-0 mb-3">Celebrate with us!</p>
                            <p class="fs-xl-5 fs-p-xxl text-secondary line-height-0 mb-4 letter-xl-spacing-22">Please kindly respond by <br class="d-xl-none"> October 27th, 2025</p>
                            <p class="fs-xl-4 text-secondary mb-4">Please confirm your attendance by <br class="d-block"> completing the following form using <br class="d-block"> the button below.</p>

                            <button type="button" class="btn btn-primary btn-primary-lg mx-auto border-0 mb-xl-5 mb-4 rsvp-open-btn">R.S.V.P.</button>

                            <div class="py-xl-3"></div>
                            <p class="fs-xl-6 fs-p-xxl text-secondary">More Information:</p>
                            <p class="fs-xl-6 fs-p-xxl text-secondary">+57 321 8492726 <span class="d-xl-inline-block d-none">|</span> <br class="d-xl-none"> rsvp@aleysebas2026.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                    <div class="customSectionBox py-xl-5 py-4 px-xl-5 px-4 position-relative rounded-4 shadow-1">
                        <div class="p-xl-5 text-center">
                            <h2 class="font-titulo fs-xl-md-1 fs-2-md uppercase">Cartagena</h2>
                            <p class="fs-xl-3 mb-xl-5 mb-3">TRAVEL</p>

                            <p class="fs-xl-5 fs-p-md text-secondary mb-4">
                                We are delighted to celebrate our wedding in Colombia’s coastal gem, Cartagena. Recognized as a UNESCO World Heritage Site, this city is one of South America’s greatest cultural treasures.
                            </p>
                            <p class="fs-xl-5 fs-p-md text-secondary mb-4">
                                In its historic center, known as the Walled City, you will find charming plazas, cobblestone streets, and beautiful colonial buildings painted in vibrant colors. The best way to explore Cartagena is on foot, wandering through its narrow streets and plazas filled with lush greenery.
                            </p>
                            <p class="fs-xl-5 fs-p-md text-secondary mb-4">
                                We recommend staying within the Walled City, where everything is just a short walk away. The constant sound of live music, along with excellent food and lively bars, brings every corner of this unique city to life.
                            </p>
                        </div>
                        <h2 class="font-titulo fs-xl-md-2 fs-6 text-center stroke-1">Handpicked by Us</h2>
                        <ul class="pt-xl-4 pt-3 px-xl-4">
                            <span class="line line--full bg-secondary"></span>
                            <li class="d-flex gap-3 align-items-center py-xl-3 px-xl-4 py-2 px-2 clickeable" style="cursor: pointer;">
                                <span class="icono"><img class="d-block w-100" src="<?php echo THEME_IMG; ?>icons/icon-travel-info.svg" alt="Home 1"></span>
                                <a class="fs-xl-3 text-secondary letter-spacing-xl-3 letter-spacing-15" href="/cartagena#travel-info">Travel Info</a>
                            </li>
                            <li class="d-flex gap-3 align-items-center py-xl-3 px-xl-4 py-2 px-2 clickeable" style="cursor: pointer;">
                                <span class="icono"><img class="d-block w-100" src="<?php echo THEME_IMG; ?>icons/icon-hotel.svg" alt="Home 1"></span>
                                <a class="fs-xl-3 text-secondary letter-spacing-xl-3 letter-spacing-15" href="/cartagena#hotels">Hotels</a>
                            </li>
                            <li class="d-flex gap-3 align-items-center py-xl-3 px-xl-4 py-2 px-2 clickeable" style="cursor: pointer;">
                                <span class="icono"><img class="d-block w-100" src="<?php echo THEME_IMG; ?>icons/icon-restaurants.svg" alt="Home 1"></span>
                                <a class="fs-xl-3 text-secondary letter-spacing-xl-3 letter-spacing-15" href="/cartagena#restaurants">Restaurants</a>
                            </li>
                            <li class="d-flex gap-3 align-items-center py-xl-3 px-xl-4 py-2 px-2 clickeable" style="cursor: pointer;">
                                <span class="icono"><img class="d-block w-100" src="<?php echo THEME_IMG; ?>icons/icon-brunch.svg" alt="Home 1"></span>
                                <a class="fs-xl-3 text-secondary letter-spacing-xl-3 letter-spacing-15" href="/cartagena#brunch">Brunch & Desserts</a>
                            </li>
                            <li class="d-flex gap-3 align-items-center py-xl-3 px-xl-4 py-2 px-2 clickeable" style="cursor: pointer;">
                                <span class="icono"><img class="d-block w-100" src="<?php echo THEME_IMG; ?>icons/icon-bars.svg" alt="Home 1"></span>
                                <a class="fs-xl-3 text-secondary letter-spacing-xl-3 letter-spacing-15" href="/cartagena#bars">Bars & Pubs</a>
                            </li>
                            <li class="d-flex gap-3 align-items-center py-xl-3 px-xl-4 py-2 px-2 clickeable" style="cursor: pointer;">
                                <span class="icono"><img class="d-block w-100" src="<?php echo THEME_IMG; ?>icons/icon-beauty-salons.svg" alt="Home 1"></span>
                                <a class="fs-xl-3 text-secondary letter-spacing-xl-3 letter-spacing-15" href="/cartagena#beauty">Beauty Salons</a>
                            </li>
                            <li class="d-flex gap-3 align-items-center py-xl-3 px-xl-4 py-2 px-2 clickeable" style="cursor: pointer;">
                                <span class="icono"><img class="d-block w-100" src="<?php echo THEME_IMG; ?>icons/icon-boutiques.svg" alt="Home 1"></span>
                                <a class="fs-xl-3 text-secondary letter-spacing-xl-3 letter-spacing-15" href="/cartagena#boutiques">Boutiques</a>
                            </li>
                            <li class="d-flex gap-3 align-items-center py-xl-3 px-xl-4 py-2 px-2 clickeable" style="cursor: pointer;">
                                <span class="icono"><img class="d-block w-100" src="<?php echo THEME_IMG; ?>icons/icon-things.svg" alt="Home 1"></span>
                                <a class="fs-xl-3 text-secondary letter-spacing-xl-3 letter-spacing-15" href="/cartagena#things">Things to Do in the City</a>
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
                            <h2 class="font-titulo fs-xl-md-1 fs-2-md mb-5 text-primary stroke-1">Places to Visit</h2>
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
    <?php get_template_part('template-parts/components/component-step-rsvp'); ?>
</main>

<?php 
get_footer();
?>