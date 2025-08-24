<!-- RSVP Form Modal -->
<div id="rsvp-form-container" class="rsvp-form-container">
    <div class="customSectionBox rsvp-form-modal bg-primary-100 p-xl-5 p-4 bg-white position-relative rounded-xl-4 rounded-3">
        <button type="button" class="rsvp-form-close btn-close p-0 text-primary fs-1 bg-transparent border-0 position-absolute top-0 end-0 me-3 mt-2">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="rsvp-form-content">
            <form id="rsvp-form">
                
                <!-- Paso 1: Búsqueda -->
                <div id="step-1" class="rsvp-form-step active">
                    <h2 class="d-flex align-items-center gap-2 font-titulo fs-xl-2 fs-3 text-primary">
                        ALEXANDRA
                        <?php if(wp_is_mobile()): ?>
                            <img width="12" class="d-inline-block" src="<?php echo THEME_IMG; ?>logo-icon-2.svg" alt="Logo icon">
                        <?php else: ?>
                            <img width="20" class="d-inline-block" src="<?php echo THEME_IMG; ?>logo-icon-2.svg" alt="Logo icon">
                        <?php endif; ?>
                        SEBASTIAN
                    </h2> 
                    <p class="fs-xl-md-2 fs-4 font-base text-secondary">Wedding</p>
                    <span class="line line--full line--full-primary mb-3"></span>
                    <p class="font-base fs-6-md text-gray mb-3">
                        If you are responding for yourself and a guest (or your family), you will be able to RSVP for your entire group.
                    </p>
                    <p class="font-base fs-6-md text-gray mb-3">
                        Please enter your First and Last Name below.
                    </p>
                    <input type="text" id="guest-search" class="w-100 border-1 bg-transparent p-2 mb-3" placeholder="Full name" autocomplete="off">
                    <div id="search-results" class="rsvp-search-item font-base cursor-pointer mb-2"></div>
                    <button type="button" class="btn btn-secondary rsvp-find-btn w-100 border-0 fs-xl-5-medium fs-6">Find your invitation</button>
                </div>

                <!-- Paso 2: WELCOME PARTY -->
                <div id="step-2" class="rsvp-form-step">
                    <h2 class="font-titulo fs-xl-2 fs-3 text-primary">WELCOME PARTY</h2>
                    <span class="line line--full line--full-primary mb-3"></span>
                    <div class="rsvp-form-event-details">
                        <p class="font-base fs-6 text-gray mb-1 fw-regular">March 26th, 2026</p>
                        <p class="font-base fs-6 text-gray mb-1 fw-regular">5:00 - 8:00 p.m.</p>
                        <p class="font-base fs-6 text-gray mb-4 fw-regular">Tbd</p>
                    </div>
                    <div id="guest-list-welcome" class="rsvp-guest-list mt-3">
                        <!-- Se llena dinámicamente con JavaScript -->
                    </div>
                    <div class="rsvp-form-buttons">
                        <div class="row d-flex flex-xl-row flex-column-reverse">
                            <div class="col-12 col-xl-6 mb-xl-0">
                                <button type="button" class="btn btn-transparent rsvp-back-btn font-base border-1 mx-auto w-100 fs-6-md text-primary">Back</button>
                            </div>
                            <div class="col-12 col-xl-6 mb-xl-0 mb-2">
                                <button type="button" class="btn btn-secondary rsvp-next-btn font-base border-0 mx-auto w-100 fs-6-md">Continue</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Paso 3: WEDDING DAY - CEREMONY -->
                <div id="step-3" class="rsvp-form-step">
                    <h2 class="font-titulo fs-xl-2 fs-3 text-primary">WEDDING DAY - CEREMONY</h2>
                    <span class="line line--full line--full-primary mb-3"></span>
                    <div class="rsvp-form-event-details">
                        <p class="fs-6 text-gray font-base mb-1">March 27th, 2026</p>
                        <p class="fs-6 text-gray font-base mb-1">7:00 p.m.</p>
                        <p class="fs-6 text-gray font-base mb-1">Iglesia Santo Toribio de Mogrovejo</p>
                    </div>
                    <div id="guest-list-ceremony" class="rsvp-guest-list mt-3">
                        <!-- Se llena dinámicamente con JavaScript -->
                    </div>
                    <div class="rsvp-form-buttons">
                        <div class="row d-flex flex-xl-row flex-column-reverse">
                            <div class="col-12 col-xl-6">
                                <button type="button" class="btn btn-transparent rsvp-back-btn font-base border-1 mx-auto w-100 fs-6-md text-primary">BACK</button>
                            </div>
                            <div class="col-12 col-xl-6 mb-xl-0 mb-2">
                                <button type="button" class="btn btn-secondary rsvp-next-btn font-base border-0 mx-auto w-100 fs-6-md">CONTINUE</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Paso 4: WEDDING DAY - RECEPTION -->
                <div id="step-4" class="rsvp-form-step">
                    <h2 class="font-titulo fs-xl-2 fs-3 text-primary">WEDDING DAY - RECEPTION</h2>
                    <span class="line line--full line--full-primary mb-3"></span>
                    <div class="rsvp-form-event-details">
                        <p class="fs-6 text-gray font-base mb-1">March 27th, 2026</p>
                        <p class="fs-6 text-gray font-base mb-1">8:00 p.m.</p>
                        <p class="fs-6 text-gray font-base">Casa 1537</p>
                    </div>
                    <div id="guest-list-reception" class="rsvp-guest-list mt-3">
                        <!-- Se llena dinámicamente con JavaScript -->
                    </div>
                    <div class="rsvp-form-buttons">
                        <div class="row d-flex flex-xl-row flex-column-reverse">
                            <div class="col-12 col-xl-6">
                                <button type="button" class="btn btn-transparent rsvp-back-btn font-base border-1 mx-auto w-100 fs-6-md text-primary">BACK</button>
                            </div>
                            <div class="col-12 col-xl-6 mb-xl-0 mb-2">
                                <button type="button" class="btn btn-secondary rsvp-next-btn font-base border-0 mx-auto w-100 fs-6-md">CONTINUE</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Paso 5: BEACH DAY -->
                <div id="step-5" class="rsvp-form-step">
                    <h2 class="font-titulo fs-xl-2 fs-3 text-primary">BEACH DAY</h2>
                    <span class="line line--full line--full-primary mb-3"></span>
                    <div class="rsvp-form-event-details">
                        <p class="fs-6 text-gray font-base mb-1">March 28th, 2026</p>
                        <p class="fs-6 text-gray font-base mb-1">11:30 a.m.</p>
                        <p class="fs-6 text-gray font-base">Tbd</p>
                    </div>
                    <div id="guest-list-brunch" class="rsvp-guest-list mt-3">
                        <!-- Se llena dinámicamente con JavaScript -->
                    </div>
                    <div class="rsvp-form-buttons">
                        <div class="row d-flex flex-xl-row flex-column-reverse">
                            <div class="col-12 col-xl-6">
                                <button type="button" class="btn btn-transparent rsvp-back-btn font-base border-1 mx-auto w-100 fs-6-md text-primary">BACK</button>
                            </div>
                            <div class="col-12 col-xl-6 mb-xl-0 mb-2">
                                <button type="button" class="btn btn-secondary rsvp-next-btn font-base border-0 mx-auto w-100 fs-6-md">CONTINUE</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Paso 6: Información Adicional -->
                <div id="step-6" class="rsvp-form-step">
                    <h2 class="font-titulo fs-xl-2 fs-3 text-primary">ADITIONAL INFORMATION</h2>
                    <span class="line line--full line--full-primary mb-3"></span>
                    <p class="fs-6 text-gray font-base mb-1">Food Allergies or Dietary Needs</p>
                    <p class="fs-6 text-gray font-base mb-1">Do you or your guest have any food allergies or dietary restrictions?</p>
                    <textarea id="allergies" class="p-3 font-base w-100 mb-3" placeholder="Food allergies or restrictions..."></textarea>
                    
                    <p class="fs-6 text-gray font-base mb-1">What date will you be arriving in Cartagena?</p>
                    <input type="date" id="guest-date" class="w-100 font-base p-3 mb-3" required>

                    <p class="fs-6 text-gray font-base mb-1">Contact Information</p>
                    <input type="tel" id="guest-phone" class="w-100 font-base p-3 mb-3" placeholder="Phone" required>
                    <input type="email" id="guest-email" class="w-100 font-base p-3 mb-3" placeholder="Email" required>
                    <div class="rsvp-form-buttons">
                        <div class="row d-flex flex-xl-row flex-column-reverse">
                            <div class="col-12 col-xl-6">
                                <button type="button" class="btn btn-transparent rsvp-back-btn font-base border-1 mx-auto w-100 fs-6-md text-primary">BACK</button>
                            </div>
                            <div class="col-12 col-xl-6 mb-xl-0 mb-2">
                                <button type="button" class="btn btn-secondary rsvp-next-btn font-base border-0 mx-auto w-100 fs-6-md">R.S.V.P.</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Paso 7: Agradecimiento -->
                <div id="step-7" class="rsvp-form-step">
                    <div class="rsvp-thank-you">
                        <h3 class="font-titulo fs-xl-2 fs-3 text-primary">THANKS</h3>
                        <p class="fs-6 text-gray font-base mb-1 col-xl-8 pe-xl-3">Thank you for confirming your attendance to our wedding. We are very happy to share this special day with you. We will send a copy of your RSVP to your email.</p>
                        <button type="button" class="rsvp-btn rsvp-btn-primary rsvp-home-btn btn btn-primary w-100">BACK TO HOME</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>