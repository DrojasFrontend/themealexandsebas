<?php
$placesCartagena = [
    [
        "img" => "cartagena-4.png",
        "name" => "isla de barú",
        "copy" => "Coastal area located 45 minutes by boat, known for its paradisiacal almost virgin white sand beaches, transparent waters and coral reefs.",
    ],
    [
        "img" => "cartagena-8.png",
        "name" => "castillo san felipe",
        "copy" => "One of the most famous sites, corresponding to a castle built in the seventeenth century, considered the most outstanding work of Spanish military engineering in America.",
    ],
    [
        "img" => "cartagena-3.png",
        "name" => "Torre del Reloj",
        "copy" => "Famous gateway to the walled city, characterized by its baroque stone doorway that precedes an imposing structure.",
    ],
    [
        "img" => "cartagena-2.png",
        "name" => "Murallas de Cartagena",
        "copy" => "Forification that took more than a hundred years to complete, carried out in stages from 1586 to 1699, encompassing the perimeter of the center of the old city, San Diego and Getsemaní.",
    ],
    [
        "img" => "cartagena-10.png",
        "name" => "cerro de la popa",
        "copy" => "Highest point in Cartagena, a strategic position that allows privileged views of both the old city and the Caribbean Sea, the island of Tierrabomba and La Boquilla.",
    ],
    [
        "img" => "cartagena-1.png",
        "name" => "Teatro Heredia",
        "copy" => "Magnificent eclectic-style building erected in 1902, designed by Luis Felipe Jaspe, the same architect who created the Cartagena Clock Tower.",
    ],
  ];
?>

<section class="customSectionPlaces position-relative z-1">
    <!-- <img class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover d-none d-xl-block" src="<?php echo THEME_IMG; ?>box-2.webp" alt=""> -->
    <div class="container">
        <div class="row">
            <div class="col-12 position-relative mt-3 gx-0">
                <div class="col-10 col-xl-11 mx-auto">
                    <!-- <p class="position-relative fs-xl-1-medium fs-2 text-center text-white-100 letter-spacing-xl-14 letter-spacing-64 mt-xl-0 mt-5 mb-3">PLACES <br class="d-xl-none"> TO VISIT</p> -->
                    <div class="customSectionPlaces__swiper">
                        <!-- <div class="bg-yellow-200 p-3 pb-4">
                            <h2 class="fs-xl-1-medium fs-2 text-primary text-center letter-spacing-xl-14 letter-spacing-64 mt-xl-0 mt-3 mb-3">PLACES <br class="d-xl-none"> TO VISIT</h2>
                        </div> -->
                        <div class="swiper placeSwiper">
                            <div class="swiper-wrapper">
                                <?php if (count($placesCartagena) > 0) { ?>
                                    <?php foreach ($placesCartagena as $place) { ?>
                                        <div class="swiper-slide">
                                            <div class="bg-white-200 p-3 pb-4">
                                                <img class="w-100 d-block mb-2" src="<?php echo THEME_IMG; ?>places-cartagena/<?php echo $place["img"]; ?>" alt="Home 1">
                                                <div class="p-2">
                                                    <p class="fs-xl-5 text-secondary text-uppercase text-start mb-2"><?php echo $place["name"]; ?></p>
                                                    <span class="line line--small line--left mb-3"></span>
                                                    <p class="text-secondary fs-xl-6 fs-p-md text-start"><?php echo $place["copy"]; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</section>