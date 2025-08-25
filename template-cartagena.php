<?php
/* 
* Template Name: Cartagena
*/

get_header(); 

$places = [
  "hotels" => [
    "id" => "hotels",
    "title" => "Hotels",
    "title_es" => "Hotels",
    "img" => THEME_IMG . 'icons/icon-hotel-2.svg',
    "info" => true,
    "places" => [
        [
            "name" => "Hotel <br> CASA SAN AGUSTÍN",
            "address" => "Please use the code <strong>GMARHAU</strong> under 'Promo Code' to reserve within our room block. This code will be valid from March 26-29. <br> <br> Calle de la Univ. # 36 - 44",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6810000",
            "link" => "https://hotelcasasanagustin.com",
            "image" => THEME_IMG . 'places-cartagena/hoteles-7.png',
        ],
        [
            "name" => "Bastion Luxury <br> Hotel",
            "address" => "Please use the code <strong>'AS2026'</strong> to receive a discount when booking. This code will be valid from March 25-29. <br><br> Calle del Sargento # 6 - 87",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6424100",
            "link" => "https://en.bastionluxuryhotel.com",
            "image" => THEME_IMG . 'places-cartagena/hoteles-5.png',
        ],
        [
            "name" => "<span class='text-secondary'>NACAR HOTEL, <br> BY HILTON</span>",
            "address" => "Calle Del Curato # 38 - 99",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6517050",
            "link" => "https://www.hilton.com/en/hotels/ctgmaqq-nacar-hotel-cartagena/",
            "image" => THEME_IMG . 'places-cartagena/hoteles-14.png',
        ],
        [
            "name" => "<span class='text-secondary'>CINCO QUINTAS <br> BY SOHO</span>",
            "address" => "Cra 6 # 35 - 69",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 322 5084897",
            "link" => "https://www.cincoquintas.com/es",
            "image" => THEME_IMG . 'places-cartagena/hoteles-0.png',
        ],
        [
            "name" => "<span class='text-secondary'>Voila <br> By Huespedia</span>",
            "address" => "Calle de las Carretas # 34 - 85",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 300 9121453",
            "link" => "https://www.hotelvoila.com",
            "image" => THEME_IMG . 'places-cartagena/hoteles-13.png',
        ],
        [
            "name" => "<span class='text-secondary'>Sofitel Legend <br> Santa Clara</span>",
            "address" => "Calle Del Torno # 39 - 29",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6504700",
            "link" => "https://www.sofitellegendsantaclara.com/es/",
            "image" => THEME_IMG . 'places-cartagena/hoteles-1.png',
        ],
        [
            "name" => "Hotel San <br> Agustín",
            "address" => "Calle de la Universidad # 36 - 44",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6810000",
            "link" => "https://hotelcasasanagustin.com",
            "image" => THEME_IMG . 'places-cartagena/hoteles-7.png',
        ],
       
    ],
  ],
  "restaurants" => [
    "id" => "restaurants",
    "title" => "Restaurants",
    "title_es" => "Restaurants",
    "img" => THEME_IMG . 'icons/icon-restaurants-2.svg',
    "places" => [
        [
            "name" => "D'Res",
            "address" => "Cra. 17 # 24 - 90",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6685513",
            "link" => "https://www.instagram.com/restaurantedres/",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-1.webp',
        ],
        [
            "name" => "Rabo de Pez",
            "address" => "Calle 32 # 5 - 09 Local 3",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 317 4333372",
            "link" => "https://www.instagram.com/rabodepez/",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-2.webp',
        ],
        [
            "name" => "Uma Cantina Peruana",
            "address" => "Calle del Curato # 38 - 99",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 302 4622665",
            "link" => "https://www.umacantinaperuanactg.com",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-3.webp',
        ],
        [
            "name" => "Candé",
            "address" => "Calle de la Serrezuela # 39 - 10",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6685291",
            "link" => "https://restaurantecande.com",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-4.webp',
        ],
        [
            "name" => "Alma",
            "address" => "Calle San Agustín # 36",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6810050",
            "link" => "https://www.almacolombia.com",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-5.webp',
        ],
        [
            "name" => "La Casa de Socorro",
            "address" => "Frente al C.C. Getsemaní",
            "city" => "Getsemaní, Cartagena",
            "phone" => "+57 315 7186666",
            "link" => "https://www.instagram.com/restaurantelacasadesocorro/",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-6.webp',
        ],
        [
            "name" => "Carmen",
            "address" => "Calle 38 # 8 - 19",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 310 3949344",
            "link" => "https://www.instagram.com/carmenrestaurante/",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-7.webp',
        ],
        [
            "name" => "Harry's Sasson",
            "address" => "Cra. 3 # 31 - 19",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6501015",
            "link" => "https://www.hotelcharlestonsantateresa.com/es/Restaurantes-Bar/harry-s-cartagena",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-8.webp',
        ],
        [
            "name" => "La Cocina de Pepina",
            "address" => "Calle 25 # 9A - 06 L. 2",
            "city" => "Getsemaní, Cartagena",
            "phone" => "+57 300 8565189",
            "link" => "https://www.instagram.com/lacocinadepepina/",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-9.webp',
        ],
        [
            "name" => "Agua de León",
            "address" => "Calle de Ayos # 4 - 46",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 315 2780517",
            "link" => "https://www.instagram.com/aguadeleonrestaurante/",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-10.webp',
        ],
        [
            "name" => "Mar y Zielo",
            "address" => "Cra. 5 # 34 - 63",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 317 6911393",
            "link" => "https://www.maryzielo.com",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-11.webp',
        ],
        [
            "name" => "Celele",
            "address" => "Cra. 10C # 29 - 200",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 301 7420389",
            "link" => "https://celelerestaurante.com",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-12.webp',
        ],
        [
            "name" => "La Vitrola",
            "address" => "Cra. 2 # 33 - 66",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6648243",
            "link" => "https://www.instagram.com/lavitrolacartagena/",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-13.webp',
        ],
        [
            "name" => "Mardeleva",
            "address" => "Nuestra Sra. del Carmen # 33 - 41",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 317 6680456",
            "link" => "https://hotelelmarques.co/restaurante/",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-14.webp',
        ],
    ]
  ],
  "bars_pubs" => [
    "id" => "bars",
    "title" => "Bars & Pubs",
    "title_es" => "BARS & PUBS",
    "img" => THEME_IMG . 'icons/icon-bars-2.svg',
    "places" => [
        [
            "name" => "El Barón",
            "address" => "Cra. 4 # 31 - 7",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 315 6463018",
            "link" => "https://www.instagram.com/elbaroncafe/",
            "image" => THEME_IMG . 'places-cartagena/bares-1.webp',
        ],
        [
            "name" => "Mirador Gastro Bar",
            "address" => "Cra. 7 # 32 - 77",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 322 5109747",
            "link" => "https://www.miradorgastrobar.com",
            "image" => THEME_IMG . 'places-cartagena/bares-2.webp',
        ],
        [
            "name" => "Alquímico",
            "address" => "Calle Colegio # 34 - 24",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 316 5331932",
            "link" => "https://alquimico.com",
            "image" => THEME_IMG . 'places-cartagena/bares-3.webp',
        ],
        [
            "name" => "La Jugada",
            "address" => "Cra. 6 # 34 - 25",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 316 3194481",
            "link" => "https://la-jugada.cluvi.co",
            "image" => THEME_IMG . 'places-cartagena/bares-4.webp',
        ],
        [
            "name" => "Buena Vida",
            "address" => "Calle del Porvenir, Esquina",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 322 3061025",
            "link" => "https://www.instagram.com/buenavidamarisqueria_/",
            "image" => THEME_IMG . 'places-cartagena/bares-5.webp',
        ],
        [
            "name" => "El Coro",
            "address" => "Cra. 8 # 39 - 36",
            "city" => "Hotel Santa Clara",
            "phone" => "+57 (605) 6504700",
            "link" => "https://www.sofitellegendsantaclara.com/",
            "image" => THEME_IMG . 'places-cartagena/bares-6.webp',
        ],
    ]
  ],
  "brunch_desserts" => [
    "id" => "brunch",
    "title" => "Brunch & Desserts",
    "title_es" => "Brunch & Desserts",
    "img" => THEME_IMG . 'icons/icon-brunch-2.svg',
    "places" => [
        [
            "name" => "Ely Café",
            "address" => "Calle 7 # 2 - 50",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 316 8752466",
            "link" => "https://elyreposteria.com/elycafe/",
            "image" => THEME_IMG . 'places-cartagena/postres-1.webp',
        ],
        [
            "name" => "Pascal",
            "address" => "Calle 30 # 8B - 108",
            "city" => "Getsemaní, Cartagena",
            "phone" => "+57 319 2481245",
            "link" => "https://www.instagram.com/quienespascal/",
            "image" => THEME_IMG . 'places-cartagena/postres-2.webp',
        ],
        [
            "name" => "Época Espresso",
            "address" => "Cra. 5 # 34 - 52",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 315 8008072",
            "link" => "https://www.instagram.com/weare.epoca/",
            "image" => THEME_IMG . 'places-cartagena/postres-3.webp',
        ],
        [
            "name" => "Juan Valdéz Café",
            "address" => "Cra. 2 # 7 - 17",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6651156",
            "link" => "https://juanvaldez.com",
            "image" => THEME_IMG . 'places-cartagena/postres-4.webp',
        ],
        [
            "name" => "La Paletteria",
            "address" => "Calle 35 # 03 - 86 local 2",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 56661579",
            "link" => "https://www.instagram.com/lapaletteria/",
            "image" => THEME_IMG . 'places-cartagena/postres-5.webp',
        ],
        [
            "name" => "Café Quindío",
            "address" => "C.C. La Serrezuela",
            "city" => "C.C. La Serrezuela - Cartagena",
            "phone" => "+57 320 6936900",
            "link" => "https://www.instagram.com/cafequindio.co/",
            "image" => THEME_IMG . 'places-cartagena/postres-6.webp',
        ],
        [
            "name" => "Café San Alberto",
            "address" => "Cra. 3 # 35 - 18",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 318 7964457",
            "link" => "https://cafesanalberto.com.co/",
            "image" => THEME_IMG . 'places-cartagena/postres-7.webp',
        ],
        [
            "name" => "El Café Ábaco",
            "address" => "Calle 36 # 3 - 86",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6786143",
            "link" => "https://www.abacolibros.com",
            "image" => THEME_IMG . 'places-cartagena/postres-8.webp',
        ],
    ]
  ],
  "boutiques" => [
    "id" => "boutiques",
    "title" => "Boutiques",
    "title_es" => "Boutiques",
    "img" => THEME_IMG . 'icons/icon-boutiques-2.svg',
    "places" => [
        [
            "name" => "C.C. La Serrezuela",
            "address" => "Cra. 11 # 39 - 21",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6421795",
            "link" => "https://www.instagram.com/laserrezuela/?hl=es",
            "image" => THEME_IMG . 'places-cartagena/boutiques-1.webp',
        ],
        [
            "name" => "Malva",
            "address" => "Cra. 11 # 39 - 21",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 300 3278066",
            "link" => "https://www.instagram.com/malva.col/",
            "image" => THEME_IMG . 'places-cartagena/boutiques-2.webp',
        ],
        [
            "name" => "St. Dom",
            "address" => "Cra. 3 # 33 - 70",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6354380",
            "link" => "https://www.instagram.com/stdomofficial/",
            "image" => THEME_IMG . 'places-cartagena/boutiques-3.webp',
        ],
        [
            "name" => "Silvia Tcherassi",
            "address" => "Calle 31 # 31 - 11",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6790051",
            "link" => "https://co.silviatcherassi.com",
            "image" => THEME_IMG . 'places-cartagena/boutiques-4.webp',
        ],
        [
            "name" => "Francesca Miranda",
            "address" => "Calle 31 # 3 - 25",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6648821",
            "link" => "https://francescamiranda.com",
            "image" => THEME_IMG . 'places-cartagena/boutiques-5.webp',
        ],
        [
            "name" => "Beatriz Camacho",
            "address" => "Calle 33 # 3 - 04",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 320 5651113",
            "link" => "https://beatrizcamacho.com",
            "image" => THEME_IMG . 'places-cartagena/boutiques-6.webp',
        ],
        [
            "name" => "Goretty Medina",
            "address" => "Calle La Mantilla # 3 - 44",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 317 4368144",
            "link" => "https://co.gorettymedinac.com",
            "image" => THEME_IMG . 'places-cartagena/boutiques-7.webp',
        ],
        [
            "name" => "Ketty Tinoco",
            "address" => "Calle Balocco # 33 - 01",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 301 6287824",
            "link" => "https://kettytinoco.com",
            "image" => THEME_IMG . 'places-cartagena/boutiques-8.webp',
        ],
        [
            "name" => "Azulu",
            "address" => "Cra. 3 # 31 - 11",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6642724",
            "link" => "https://azulu.co",
            "image" => THEME_IMG . 'places-cartagena/boutiques-9.webp',
        ],
        [
            "name" => "Boutique Gabriel",
            "address" => "Cra. 2 # 9 – 148 L. 5",
            "city" => "Bocagrande, Cartagena",
            "phone" => "+57 (605) 6658020",
            "link" => "http://www.boutiquegabriel.com",
            "image" => THEME_IMG . 'places-cartagena/boutiques-10.webp',
        ],
        [
            "name" => "D'Clase",
            "address" => "Av. San Martin 5 – 84T L.201",
            "city" => "Bocagrande, Cartagena",
            "phone" => "+57 300 7889362",
            "link" => "https://www.instagram.com/dclase.co/",
            "image" => THEME_IMG . 'places-cartagena/boutiques-11.webp',
        ],
    ]
  ],
  "salones_de_belleza" => [
    "id" => "beauty",
    "title" => "Beauty Salons",
    "title_es" => "Beauty Salons",
    "img" => THEME_IMG . 'icons/icon-beauty-salons-2.svg',
    "places" => [
        [
            "name" => "The Salon Peluquería",
            "address" => "Cra 3 # 4 - 23 Local 1",
            "city" => "Bocagrande, Cartagena",
            "phone" => "+57 (605) 6783950",
            "link" => "https://www.instagram.com/thesaloncartagena/",
            "image" => THEME_IMG . 'places-cartagena/peluquerias-1.webp',
        ],
        [
            "name" => "Franklin Ramos",
            "address" => "Cra. 11 # 39 - 21 L. S23",
            "city" => "C.C. La Serrezuela - Cartagena",
            "phone" => "+57 316 5294386",
            "link" => "https://www.instagram.com/franklinramossalon.ctg/",
            "image" => THEME_IMG . 'places-cartagena/peluquerias-2.webp',
        ],
        [
            "name" => "Portada Peluqueria",
            "address" => "Cra. 3 # 4 - 21",
            "city" => "Boca Grande, Cartagena",
            "phone" => "+57 (605) 6524223",
            "link" => "https://www.instagram.com/portadapeluqueria/",
            "image" => THEME_IMG . 'places-cartagena/peluquerias-3.webp',
        ],
        [
            "name" => "Carlos Torres",
            "address" => "Av. San Martín # 5 - 84 L. 201",
            "city" => "Boca Grande, Cartagena",
            "phone" => "+57 316 6091227",
            "link" => "https://www.instagram.com/carlostorres.studio10/",
            "image" => THEME_IMG . 'places-cartagena/peluquerias-4.webp',
        ],
        [
            "name" => "Diego Moya",
            "address" => "Calle de la Serrezuela # 39 - 02",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6685291",
            "link" => "https://www.instagram.com/diegomoyasalon/",
            "image" => THEME_IMG . 'places-cartagena/peluquerias-5.webp',
        ],
        [
            "name" => "Gloss Peluqueria",
            "address" => "Cra. 3 # 31 - 19",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6501015",
            "link" => "https://www.instagram.com/gloss_peluqueria/",
            "image" => THEME_IMG . 'places-cartagena/peluquerias-6.webp',
        ],
        [
            "name" => "Andrea Rodríguez",
            "address" => "Calle 10A # 2 - 38",
            "city" => "Boca Grande, Cartagena",
            "phone" => "+57 301 7929773",
            "link" => "https://www.instagram.com/andrearodriguezbeauty/",
            "image" => THEME_IMG . 'places-cartagena/peluquerias-7.webp',
        ],
        [
            "name" => "Karla B. López",
            "address" => "Calle de Ayos # 4 - 46",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 315 2780517",
            "link" => "https://www.instagram.com/karlabrigittemakeup/",
            "image" => THEME_IMG . 'places-cartagena/peluquerias-8.webp',
        ],
    ]
  ]
]
?>

<main class="customMainCartagena">
    <section>
        <div class="container-fluid gx-0">
            <div class="row gx-0">
                <div class="col-12">
                    <img class="w-100 d-block" src="<?php echo THEME_IMG; ?>bg.webp" alt="Background Cartagena">
                </div>
            </div>
        </div>
    </section>

    <section class="customSectionCartagenaPlaces position-relative" id="travel-info">
        <div class="container-fluid gx-0 h-100 position-relative z-1 bg-red-100">
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
        <div class="container-fluid gx-0 position-relative z-2">
            <img class="customSectionCartagenaPlaces__img position-absolute w-100 h-100 top-0 start-0 object-fit-cover object-position-bottom" src="<?php echo THEME_IMG; ?>bg-cartagena.webp" alt="Background Cartagena">
            <div class="row gx-0">
                <div class="col-12 col-xl-9 mx-auto px-xl-0 px-3">
                    <div class="position-relative customSectionBox rounded-4 text-center py-5 shadow-1">
                        <div class="col-12 col-xl-9 mx-auto text-start px-xl-0 px-3">
                            <h2 class="font-titulo fs-xl-md-1 fs-2-md text-center uppercase">Travel Info</h2>
                            <div class="py-xl-3"></div>
                            <!-- <div class="d-flex align-items-center py-3 gap-3">
                                <div class="icon">
                                    <img class="w-100" src="<?php echo THEME_IMG . 'icons/icon-travel-info.svg'; ?>" alt="">
                                </div>
                                <h2 class="fs-xl-3 uppercase">TRAVEL INFO</h2>
                            </div> -->
                            <!-- <div class="line line--full mb-4"></div> -->
                            <div class="bg-yellow-100 mb-xl-5">
                                <h2 class="font-titulo fs-xl-md-2 text-primary letter-xl-spacing-22 uppercase stroke-1">Passports</h2>
                                <p class="fs-xl-6 fs-p-xxl text-secondary-200 mb-4 text-secondary" style="line-height: 1.4">Please do not forget your passports! <br class="d-none d-xl-block"> Make sure to carefully check the expiration date.</p>
                                <h2 class="font-titulo fs-xl-md-2 text-primary letter-xl-spacing-22 uppercase stroke-1">CheckMig</h2>
                                <p class="fs-xl-6 fs-p-xxl text-secondary-200 mb-4 text-secondary" style="line-height: 1.4">CheckMig is an online form provided by Migración Colombia, where travelers register their travel information prior to entering or leaving the country. It may be completed between 72 hours and 1 hour before your trip. While it is not mandatory, it is highly recommended, as it streamlines the immigration process and helps prevent delays at the airport.<a href="https://apps.migracioncolombia.gov.co/pre-registro" style="text-decoration: underline; color: #B8724C;" target="blank">Click Here</a></p>
                                <h2 class="font-titulo fs-xl-md-2 text-primary letter-xl-spacing-22 uppercase stroke-1">INTERNATIONAL AIRPORT</h2>
                                <p class="fs-xl-6 fs-p-xxl text-secondary-200 mb-4 text-secondary mb-3" style="line-height: 1.4">Several major airlines such as Latam, Delta, American Airlines, United, Aeroméxico, Copa Airlines, and Avianca offer direct flights to Rafael Núñez International Airport in Cartagena, on Colombia’s Caribbean coast. The best way to get from the airport to the walled city is by taxi or Uber. The ride takes approximately 10 to 15 minutes.</p>
                                <p class="fs-xl-6 fs-p-xxl text-secondary-200 mb-4 text-secondary" style="line-height: 1.4">Authorized taxis are available 24 hours a day and operate with fixed fares, paid in cash: around 14,000 COP to Getsemaní, up to 18,000 COP to the hotel area in the historic center (Walled City), and approximately 30,000 COP to Bocagrande. In general, 1 USD equals about 4,100 COP. Since taxis do not always accept card payments, Uber is often a more convenient alternative</p>
                                <h2 class="font-titulo fs-xl-md-2 text-primary letter-xl-spacing-22 uppercase stroke-1">CURRENCY</h2>
                                <p class="fs-xl-6 fs-p-xxl text-secondary-200 mb-4 text-secondary mb-3" style="line-height: 1.4">The official currency in Colombia is the Colombian Peso (COP). At the moment, the average exchange rate is approximately 1 USD = 4,001 COP. To check the updated rate, you may <a href="https://wise.com/currency-converter" style="text-decoration: underline; color: #B8724C;" target="blank">Click here:</a></p>
                                <h2 class="font-titulo fs-xl-md-2 text-primary letter-xl-spacing-22 uppercase stroke-1">SAFETY IN CARTAGENA</h2>
                                <p class="fs-xl-6 fs-p-xxl text-secondary-200 mb-4 text-secondary mb-3" style="line-height: 1.4">Cartagena is a vibrant and welcoming city, highly appreciated by travelers from around the world. The most visited areas, such as the Historic Center, Getsemaní, and Bocagrande, are perfect for walking, enjoying the architecture, and experiencing local life. To make your stay even more comfortable, we recommend using reliable transportation (such as taxis requested from your hotel or through apps), carrying only what is necessary for your outings, and choosing well-lit streets at night.</p>
                                <p class="fs-xl-6 fs-p-xxl text-secondary-200 mb-4 text-secondary" style="line-height: 1.4">With these simple suggestions, you can fully enjoy the charm and tranquility of this Caribbean destination.</p>
                                <h2 class="font-titulo fs-xl-md-2 text-primary letter-xl-spacing-22 uppercase stroke-1">WEATHER</h2>
                                <p class="fs-xl-6 fs-p-xxl text-secondary-200 mb-4 text-secondary mb-3" style="line-height: 1.4">March in Cartagena offers warm and sunny days, with temperatures around 31 °C (88 °F) and pleasant evenings of about 26 °C (79 °F). Rainfall is minimal during this season, and the sea remains a delightful 27–28 °C (81–82 °F), perfect for enjoying both the city and the beach.</p>
                                <p class="fs-xl-6 fs-p-xxl text-secondary-200 mb-4 text-secondary mb-3" style="line-height: 1.4">We recommend packing light and breathable clothing for exploring the city during the day, along with a hat, sunglasses, and sunscreen to protect yourself from the Caribbean sun. For events, light and elegant fabrics will be the best choice. Staying hydrated is essential in this warm climate, and for evenings outdoors, it may be comfortable to bring an additional light layer.</p>
                                <p class="fs-xl-6 fs-p-xxl text-secondary-200 mb-4 text-secondary fw-bold" style="line-height: 1.4">For your comfort, the church and the reception venue are air‑conditioned.</p>
                                <h2 class="font-titulo fs-xl-md-2 text-primary letter-xl-spacing-22 uppercase stroke-1">CARTAGENANNY</h2>
                                <p class="fs-xl-6 fs-p-xxl text-secondary-200 text-secondary" style="line-height: 1.4">For guests who may need it, we are pleased to share a trusted local nanny service to assist with childcare. Please feel free to get in touch to coordinate the service during the celebration. Special rates are available using the code “MARYCUETER.”</p>
                                <p class="fs-xl-6 fs-p-xxl text-secondary-200 text-secondary" style="line-height: 1.4">Contact: Lili Rueda — +57 318 6294974</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-5"></div>
        </div>
    </section>


    <?php foreach ($places as $key => $category) { ?>
        <section class="customSectionCartagenaPlace position-relative" id="<?php echo $category['id']; ?>">
            <?php if (!empty($category['info'])) : ?>
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-white-100" style="z-index: -1;">
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
                </div>
                
                <div class="container position-relative z-2">
                    <div class="row">
                        <div class="col-12 col-xl-9 mx-auto">
                            <div class="py-5"></div>
                            <div class="py-xl-5"></div>
                            <div class=" <?php echo !empty($category['info']) ? 'customSectionBox rounded-4 shadow-1 p-xl-5 px-3 py-5 mb-xl-0 mb-5' : ''; ?>">
                                <h2 class="font-titulo fs-xl-md-1 fs-2-lg text-center mb-3 uppercase"><?php echo $category['title']; ?></h2>
                                <?php if (!empty($category['info'])) : ?>
                                    <div class="row">
                                        <div class="col-12 px-xl-5">
                                            <p class="fs-xl-6 fs-p-xxl text-secondary mb-3 px-xl-4" style="line-height: 1.4">
                                            We invite you to experience the magic of Cartagena by staying in one of its charming hotels or colonial houses in the Historic Center. The bride and groom will be staying at <strong>Hotel Casa San Agustin</strong>, for those guests who wish to lodge there as well.
                                            </p>
                                            
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <div class="py-xl-5"></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="customSectionCartagenaPlace__bg position-relative bg-white-100">
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
                            <h2 class="position-absolute top-0 start-0 font-titulo fs-xl-md-1 fs-2-lg w-100 h-100 text-center d-flex justify-content-center align-items-center mb-3 z-1 uppercase"><?php echo $category['title']; ?></h2>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <div class="position-relative -mt-10 px-5 pt-5 bg-primary z-3">
                <div class="px-xl-5">
                    <div class="swiper placesSwiper" id="swiper-<?php echo $category['id']; ?>">
                        <div class="swiper-wrapper">
                            <?php foreach ($category['places'] as $place) { ?>
                                <div class="swiper-slide">
                                    <div class="bg-white-200 p-3">
                                        <?php if ($place['image']) : ?>
                                            <img class="w-100" src="<?php echo $place['image']; ?>" alt="">
                                            <div class="p-2">
                                                <h2 class="fs-xl-5 uppercase" style="line-height: 1.2"><?php echo $place['name']; ?></h2>
                                                <span class="line line--small m-0 mt-2 mb-3"></span>
                                                <p class="fs-xl-6 text-secondary" style="line-height: 1.2"><?php echo $place['address']; ?></p>
                                                <p class="fs-xl-6 text-secondary mb-2" style="line-height: 1.2"><?php echo $place['city']; ?></p>
                                                <p class="fs-xl-6 text-secondary mb-3" style="line-height: 1.2">Phone:<?php echo $place['phone']; ?></p>
                                                <a class="btn btn-small rounded-0 text-secondary" href="<?php echo $place['link']; ?>" target="_blank">
                                                    Click here
                                                </a>
                                            </div>
                                        <?php endif?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="swiper-button-prev text-white"></div>
                    <div class="swiper-button-next text-white"></div>
                </div>
                <div class="py-xl-5 pb-4"></div>
            </div>
        </section>
    <?php } ?>

   
   
</main>

<?php get_footer(); ?>