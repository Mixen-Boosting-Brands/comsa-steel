<?php
$currentlang = get_bloginfo("language");
get_header();
?>

	<section id="banner">
        <video autoplay muted loop playsinline id="background-video">
            <source src="<?php echo esc_url(
                get_template_directory_uri()
            ); ?>/assets/videos/bg-video.mp4" type="video/mp4"">
            Your browser does not support the video tag.
        </video>
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- Slider main container -->
                    <div class="swiper swiper-jumbotron">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide my-auto swiper-decor">
                                <div class="row">
                                    <div class="col-xl-8 offset-xl-2 my-auto text-center overflow-hidden">
                                        <div data-aos="fade-up" data-aos-duration="1000">
                                            <hr>
                                            <h1><?php _e(
                                                "Estructuras de acero de",
                                                "comsa-steel"
                                            ); ?> <span class="color-primary"><?php _e(
     "calidad",
     "comsa-steel"
 ); ?></span> <?php _e("superior", "comsa-steel"); ?></h1>
                                            <p>
                                                <?php _e(
                                                    "Experiencia comprobada que garantizan un rendimiento confiable al mejor precio.",
                                                    "comsa-steel"
                                                ); ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="descanso" class="parallax-window" data-parallax="scroll" data-image-src="<?php echo esc_url(
        get_template_directory_uri()
    ); ?>/assets/images/bg-descanso.webp">
        <div class="container">
            <div class="row pb-30">
                <div class="col-lg-7 offset-lg-2 text-center">
                    <div class="row">
                        <div class="col-6 col-lg-8 my-auto">
                            <h1 class="mb-0" data-aos="fade-up" data-aos-duration="1000">
                                <?php _e(
                                    "Esto",
                                    "comsa-steel"
                                ); ?> <span class="color-primary"><?php _e(
     "somos",
     "comsa-steel"
 ); ?></span>
                            </h1>
                        </div>
                        <div class="col-6 col-lg-4 my-auto">
                            <img src="<?php echo esc_url(
                                get_template_directory_uri()
                            ); ?>/assets/images/logo-vertical@2x.webp" alt="" class="img-fluid" loading="lazy" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="250">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb-30">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                        <?php _e(
                            "COMSA Steel es su socio confiable para el crecimiento. Contamos con experiencia en el diseño, fabricación y montaje de estructuras metálicas para naves industriales y grandes proyectos de infraestructura; la calidad, flexibilidad y eficiencia nos impulsan a brindar un servicio de clase mundial todos los días.",
                            "comsa-steel"
                        ); ?>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 offset-lg-1 mb-4 my-lg-auto text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                    <h3>
                        <div id="counter-1" class="counter" data-target="50000">0</div> <?php _e(
                            "toneladas fabricadas",
                            "comsa-steel"
                        ); ?>
                    </h3>
                </div>
                <div class="col-lg-3 offset-lg-1 mb-4 my-lg-auto text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="750">
                    <h3>
                        <div id="counter-2" class="counter" data-target="400">0</div> <?php _e(
                            "proyectos concluidos",
                            "comsa-steel"
                        ); ?>
                    </h3>
                </div>
                <div class="col-lg-3 offset-lg-1 my-lg-auto text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                    <h3>
                        <div id="counter-3" class="counter" data-target="1500000">0</div> <?php _e(
                            "de metros cuadrados instalados",
                            "comsa-steel"
                        ); ?>
                    </h3>
                </div>
            </div>
        </div>
    </section>

    <section id="video" class="py-60">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/946310996?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="COMSA Steel"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
                </div>
            </div>
    </section>

    <section id="grupo-san-francisco" class="common-light py-60">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <img src="<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/images/logo-gsf@2x.webp" alt="Grupo San Francisco" id="logo-grupo-san-francisco" loading="lazy" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                    <h1 class="mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="750">
                        Grupo <span class="color-primary">San Francisco</span>
                    </h1>
                    <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                        <?php _e(
                            "Nuestra misión consiste en posicionar a cada una de las marcas bajo nuestra administración, como líderes en sus respectivos mercados, a través de un equipo de colaboradores altamente motivados, capacitados y comprometidos.",
                            "comsa-steel"
                        ); ?>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <ul class="list-inline">
                        <li class="list-inline-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1250">
                            <img class="logo-cliente" src="<?php echo esc_url(
                                get_template_directory_uri()
                            ); ?>/assets/images/clientes/logo-1.webp" alt="" class="img-fluid" loading="lazy">
                        </li>
                        <li class="list-inline-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1300">
                            <img class="logo-cliente" src="<?php echo esc_url(
                                get_template_directory_uri()
                            ); ?>/assets/images/clientes/logo-2.webp" alt="" class="img-fluid" loading="lazy">
                        </li>
                        <li class="list-inline-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1350">
                            <img class="logo-cliente" src="<?php echo esc_url(
                                get_template_directory_uri()
                            ); ?>/assets/images/clientes/logo-3.webp" alt="" class="img-fluid" loading="lazy">
                        </li>
                        <li class="list-inline-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1400">
                            <img class="logo-cliente" src="<?php echo esc_url(
                                get_template_directory_uri()
                            ); ?>/assets/images/clientes/logo-4.webp" alt="" class="img-fluid" loading="lazy">
                        </li>
                        <li class="list-inline-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1450">
                            <img class="logo-cliente" src="<?php echo esc_url(
                                get_template_directory_uri()
                            ); ?>/assets/images/clientes/logo-5.webp" alt="" class="img-fluid" loading="lazy">
                        </li>
                        <li class="list-inline-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1500">
                            <img class="logo-cliente" src="<?php echo esc_url(
                                get_template_directory_uri()
                            ); ?>/assets/images/clientes/logo-6.webp" alt="" class="img-fluid" loading="lazy">
                        </li>
                        <li class="list-inline-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1550">
                            <img class="logo-cliente" src="<?php echo esc_url(
                                get_template_directory_uri()
                            ); ?>/assets/images/clientes/logo-7.webp" alt="" class="img-fluid" loading="lazy">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="servicios" class="py-60">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <h1 class="mb-4" data-aos="fade-up" data-aos-duration="1000">
                        <?php _e("Conoce nuestros servicios", "comsa-steel"); ?>
                    </h1>
                    <!-- p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ut magnam perferendis mollitia dolores odit distinctio ea a corporis? Fuga accusantium eius ad? Ipsa non doloremque quas provident, eum error!</p -->
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <!-- ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" data-aos="fade-up" data-aos-duration="1000">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link rounded-pill active" id="pills-todos-tab" data-bs-toggle="pill" data-bs-target="#pills-todos" type="button" role="tab" aria-controls="pills-todos" aria-selected="true">Todos</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link rounded-pill" id="pills-fabricacion-tab" data-bs-toggle="pill" data-bs-target="#pills-fabricacion" type="button" role="tab" aria-controls="pills-fabricacion" aria-selected="false">Fabricación</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link rounded-pill" id="pills-ingenieria-tab" data-bs-toggle="pill" data-bs-target="#pills-ingenieria" type="button" role="tab" aria-controls="pills-ingenieria" aria-selected="false">Ingeniería</button>
                        </li>
                    </ul -->
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-todos" role="tabpanel" aria-labelledby="pills-todos-tab" tabindex="0">
                            <div class="row masonry-grid" data-masonry='{"percentPosition": true }'>
                                <div class="col-lg-4 masonry-item">
                                    <div class="servicio servicio-1" style="background: url('<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/servicios/bg-ingenieria-y-detallado.webp') no-repeat;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="250">
                                        <div class="overlay">
                                            <a href="<?php if (
                                                $currentlang == "en-US"
                                            ):
                                                echo get_permalink(131);
                                            else:
                                                echo get_permalink(13);
                                            endif; ?>"></a>
                                        </div>
                                        <div class="nombre">
                                            <h1><?php _e(
                                                "Ingeniería y Detallado",
                                                "comsa-steel"
                                            ); ?></h1>
                                            <a href="<?php if (
                                                $currentlang == "en-US"
                                            ):
                                                echo get_permalink(131);
                                            else:
                                                echo get_permalink(13);
                                            endif; ?>">
                                                <?php _e(
                                                    "Ver más",
                                                    "comsa-steel"
                                                ); ?> <i class="fa-solid fa-circle-chevron-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 masonry-item">
                                    <div class="servicio <?php if (
                                        !($currentlang == "en-US")
                                    ): ?>servicio-2<?php else: ?>servicio-3<?php endif; ?>" style="background: url('<?php echo esc_url(
    get_template_directory_uri()
); ?>/assets/images/servicios/bg-fabricacion.webp') no-repeat;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                                        <div class="overlay">
                                            <a href="<?php if (
                                                $currentlang == "en-US"
                                            ):
                                                echo get_permalink(129);
                                            else:
                                                echo get_permalink(11);
                                            endif; ?>"></a>
                                        </div>
                                        <div class="nombre">
                                            <h1><?php _e(
                                                "Fabricación",
                                                "comsa-steel"
                                            ); ?></h1>
                                            <a href="<?php if (
                                                $currentlang == "en-US"
                                            ):
                                                echo get_permalink(129);
                                            else:
                                                echo get_permalink(11);
                                            endif; ?>">
                                                <?php _e(
                                                    "Ver más",
                                                    "comsa-steel"
                                                ); ?> <i class="fa-solid fa-circle-chevron-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 masonry-item">
                                    <div class="servicio servicio-1" style="background: url('<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/servicios/bg-preconstruccion.webp') no-repeat;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="750">
                                        <div class="overlay">
                                            <a href="<?php if (
                                                $currentlang == "en-US"
                                            ):
                                                echo get_permalink(133);
                                            else:
                                                echo get_permalink(15);
                                            endif; ?>"></a>
                                        </div>
                                        <div class="nombre">
                                            <h1><?php _e(
                                                "Preconstrucción",
                                                "comsa-steel"
                                            ); ?></h1>
                                            <a href="<?php if (
                                                $currentlang == "en-US"
                                            ):
                                                echo get_permalink(133);
                                            else:
                                                echo get_permalink(15);
                                            endif; ?>">
                                                <?php _e(
                                                    "Ver más",
                                                    "comsa-steel"
                                                ); ?> <i class="fa-solid fa-circle-chevron-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 masonry-item">
                                    <div class="servicio servicio-2" style="background: url('<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/servicios/bg-joist-and-deck-supplier.webp') no-repeat;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                                        <div class="overlay">
                                            <a href="<?php if (
                                                $currentlang == "en-US"
                                            ):
                                                echo get_permalink(136);
                                            else:
                                                echo get_permalink(17);
                                            endif; ?>"></a>
                                        </div>
                                        <div class="nombre">
                                            <h1><?php _e(
                                                "Joist and Deck Supplier",
                                                "comsa-steel"
                                            ); ?></h1>
                                            <a href="<?php if (
                                                $currentlang == "en-US"
                                            ):
                                                echo get_permalink(136);
                                            else:
                                                echo get_permalink(17);
                                            endif; ?>">
                                                <?php _e(
                                                    "Ver más",
                                                    "comsa-steel"
                                                ); ?> <i class="fa-solid fa-circle-chevron-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 masonry-item">
                                    <div class="servicio servicio-2" style="background: url('<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/servicios/bg-project-management.webp') no-repeat;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1250">
                                        <div class="overlay">
                                            <a href="<?php if (
                                                $currentlang == "en-US"
                                            ):
                                                echo get_permalink(138);
                                            else:
                                                echo get_permalink(19);
                                            endif; ?>"></a>
                                        </div>
                                        <div class="nombre">
                                            <h1><?php _e(
                                                "Project Management",
                                                "comsa-steel"
                                            ); ?></h1>
                                            <a href="<?php if (
                                                $currentlang == "en-US"
                                            ):
                                                echo get_permalink(138);
                                            else:
                                                echo get_permalink(19);
                                            endif; ?>">
                                                <?php _e(
                                                    "Ver más",
                                                    "comsa-steel"
                                                ); ?> <i class="fa-solid fa-circle-chevron-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php if (!($currentlang == "en-US")): ?>
                                <div class="col-lg-4 masonry-item">
                                    <div class="servicio servicio-1" style="background: url('<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/servicios/bg-montaje.webp') no-repeat;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1500">
                                        <div class="overlay">
                                            <a href="<?php if (
                                                $currentlang == "en-US"
                                            ):
                                                echo get_permalink(140);
                                            else:
                                                echo get_permalink(21);
                                            endif; ?>"></a>
                                        </div>
                                        <div class="nombre">
                                            <h1><?php _e(
                                                "Montaje",
                                                "comsa-steel"
                                            ); ?></h1>
                                            <a href="<?php if (
                                                $currentlang == "en-US"
                                            ):
                                                echo get_permalink(140);
                                            else:
                                                echo get_permalink(21);
                                            endif; ?>">
                                                <?php _e(
                                                    "Ver más",
                                                    "comsa-steel"
                                                ); ?> <i class="fa-solid fa-circle-chevron-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="confian" class="common-light py-60">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <h1 class="mb-4" data-aos="fade-up" data-aos-duration="1000">
                        <?php _e("Ellos", "comsa-steel"); ?> <span><?php _e(
     "confían",
     "comsa-steel"
 ); ?></span> <?php _e("en nosotros", "comsa-steel"); ?>
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="250">
                    <!-- Slider main container -->
                    <div class="swiper swiper-clientes-2">
                        <div id="overlay"></div>
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper text-center">
                            <!-- Slides -->
                            <div class="swiper-slide my-auto">
                                <img src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/clientes-2/logo-1.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="swiper-slide my-auto">
                                <img src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/clientes-2/logo-2.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="swiper-slide my-auto">
                                <img src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/clientes-2/logo-3.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="swiper-slide my-auto">
                                <img src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/clientes-2/logo-4.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="swiper-slide my-auto">
                                <img src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/clientes-2/logo-5.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="swiper-slide my-auto">
                                <img src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/clientes-2/logo-6.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="swiper-slide my-auto">
                                <img src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/clientes-2/logo-7.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="swiper-slide my-auto">
                                <img src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/clientes-2/logo-8.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="swiper-slide my-auto">
                                <img src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/clientes-2/logo-9.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="swiper-slide my-auto">
                                <img src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/clientes-2/logo-1.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="swiper-slide my-auto">
                                <img src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/clientes-2/logo-2.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="swiper-slide my-auto">
                                <img src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/clientes-2/logo-3.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="swiper-slide my-auto">
                                <img src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/clientes-2/logo-4.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="swiper-slide my-auto">
                                <img src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/clientes-2/logo-5.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="swiper-slide my-auto">
                                <img src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/clientes-2/logo-6.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="swiper-slide my-auto">
                                <img src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/clientes-2/logo-7.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="swiper-slide my-auto">
                                <img src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/clientes-2/logo-8.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="swiper-slide my-auto">
                                <img src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/clientes-2/logo-9.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
$args = [
    "category_name" => "noticias", // Specify the category slug here
    "posts_per_page" => 1, // Use -1 to fetch all posts from the category
];

$blogQuery = new WP_Query($args);
if ($blogQuery->have_posts()):
    while ($blogQuery->have_posts()):
        $blogQuery->the_post(); ?>
    <section id="noticias" class="common-dark py-60">
        <div class="container">
            <div class="row">
                <div class="col-6 my-auto" data-aos="fade-up" data-aos-duration="1000">
                    <hr>
                    <h1>
                        <?php _e("Noticias", "comsa-steel"); ?>
                    </h1>
                </div>
                <div class="col-6 my-3 my-lg-auto">
                    <div class="row">
                        <div class="col-12">
                            <p class="text-small text-muted mb-0" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="250">
                                <?php _e("Ordenar por:", "comsa-steel"); ?>
                            </p>
                            <nav>
                                <div class="navs d-flex flex-wrap justify-content-start" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-cat-1-tab" data-bs-toggle="tab" data-bs-target="#nav-cat-1" type="button" role="tab" aria-controls="nav-cat-1" aria-selected="true" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                                        Todas
                                    </button>
                                <?php
                                $tags = get_tags();
                                $i = 750;
                                if ($tags):
                                    $counterTags = 2;
                                    foreach ($tags as $tag): ?>
                                    <button class="nav-link" id="nav-cat-<?php echo $counterTags; ?>-tab" data-bs-toggle="tab" data-bs-target="#nav-cat-<?php echo $counterTags; ?>" type="button" role="tab" aria-controls="nav-cat-<?php echo $counterTags; ?>" aria-selected="false" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="<?php echo $i; ?>">
                                        <?php echo esc_html($tag->name); ?>
                                    </button>
                                <?php
                                $i += 250;
                                $counterTags++;
                                endforeach;
                                endif;
                                ?>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="tab-content" id="nav-blog">
                        <div class="tab-pane fade show active" id="nav-cat-1" role="tabpanel" aria-labelledby="nav-cat-1-tab" tabindex="0">
                            <div class="row">
                            <?php
                            $args = [
                                "category_name" => "noticias", // Specify the category slug here
                                "posts_per_page" => 2, // Use -1 to fetch all posts from the category
                                // 'orderby' => 'rand',
                            ];

                            $query = new WP_Query($args);

                            if ($query->have_posts()):
                                $i = 250;
                                while ($query->have_posts()):

                                    $query->the_post();
                                    $excerpt = get_the_excerpt();
                                    $words = explode(" ", $excerpt);

                                    if (count($words) > 30) {
                                        $words = array_slice($words, 0, 30);
                                        $excerpt = implode(" ", $words) . "...";
                                    }
                                    ?>
                                <div class="col-lg-6 mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="<?php echo $i; ?>">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail("home-blog", [
                                            "class" => "img-fluid",
                                        ]); ?>
                                    </a>
                                    <a href="<?php the_permalink(); ?>">
                                        <h2 class="mt-3">
                                            <?php the_title(); ?>
                                            <span class="date badge bg-secondary rounded-pill">
                                                <time datetime="<?php the_time(
                                                    "Y-m-d"
                                                ); ?> <?php the_time(
     "H:i"
 ); ?>">
                                                    <?php echo get_the_date(
                                                        "M j, Y"
                                                    ); ?>
                                                </time>
                                            </span>
                                        </h2>
                                    </a>
                                    <?php echo $excerpt; ?>
                                </div>
                            <?php $i += 250;
                                endwhile;
                            endif;
                            wp_reset_postdata();
                            ?>
                            </div>
                        </div>
                    <?php
                    $tags = get_tags();

                    if ($tags):
                        $counterTabs = 2;
                        foreach ($tags as $tag): ?>
                        <div class="tab-pane fade" id="nav-cat-<?php echo $counterTabs; ?>" role="tabpanel" aria-labelledby="nav-cat-<?php echo $counterTabs; ?>-tab" tabindex="0">
                            <div class="row">
                            <?php
                            $args = [
                                "category_name" => "noticias", // Specify the category slug here
                                "posts_per_page" => 2, // Use -1 to fetch all posts from the category
                                "tag__in" => [$tag->term_id], // Pass an array of tag IDs
                            ];

                            $query = new WP_Query($args);

                            if ($query->have_posts()):
                                $i = 250;
                                while ($query->have_posts()):

                                    $query->the_post();
                                    $excerpt = get_the_excerpt();
                                    $words = explode(" ", $excerpt);

                                    if (count($words) > 30) {
                                        $words = array_slice($words, 0, 30);
                                        $excerpt = implode(" ", $words) . "...";
                                    }
                                    ?>
                                <div class="col-lg-6 mb-1 mb-lg-3 mb-lg-0" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="<?php echo $i; ?>">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail("home-blog", [
                                            "class" => "img-fluid",
                                        ]); ?>
                                    </a>
                                    <a href="<?php the_permalink(); ?>">
                                        <h2 class="mt-3">
                                            <?php the_title(); ?>
                                            <span class="date badge bg-secondary rounded-pill">
                                                <time datetime="<?php the_time(
                                                    "Y-m-d"
                                                ); ?> <?php the_time(
     "H:i"
 ); ?>">
                                                    <?php echo get_the_date(
                                                        "M j, Y"
                                                    ); ?>
                                                </time>
                                            </span>
                                        </h2>
                                    </a>
                                    <?php echo $excerpt; ?>
                                </div>
                            <?php $i += 250;
                                endwhile;
                            endif;
                            wp_reset_postdata();
                            ?>
                            </div>
                        </div>
                    <?php $counterTabs++;endforeach;
                    endif;
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
    endwhile;
endif;
wp_reset_postdata();
?>

    <section id="contacto" class="common-light py-60">
        <div class="container">
            <div class="row mb-4">
                <div class="col text-center">
                    <h1><?php _e("Encuéntranos", "comsa-steel"); ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 my-auto">
                    <hr data-aos="fade-up" data-aos-duration="1000">
                    <h3 data-aos="fade-up" data-aos-duration="1000">
                        <?php _e("Escríbenos un", "comsa-steel"); ?><br>
                        <span class="color-primary"><?php _e(
                            "mensaje",
                            "comsa-steel"
                        ); ?></span>
                    </h3>
                    <!-- Aquí se inyecta feedback a usuario vía Ajax -->
                    <div id="form-messages"></div>
                    <!-- /Aquí se inyecta feedback a usuario vía Ajax -->
                    <form data-aos="fade-up" data-aos-duration="1000" data-aos-delay="250" action="<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/mailer.php" method="POST" class="row g-3 needs-validation contact-form mb-4 mb-lg-0" id="ajax-contact" novalidate>
                        <div class="col-md-12 form-floating">
                            <input type="text" class="form-control shadow-none" id="nombre" name="nombre" placeholder="<?php _e(
                                "Nombre completo*",
                                "comsa-steel"
                            ); ?>"
                                pattern=".{5,50}" required>
                            <label for="nombre" class="form-label"><?php _e(
                                "Nombre completo*",
                                "comsa-steel"
                            ); ?></label>
                            <div class="valid-feedback">
                                <?php _e("¡Se ve bien!", "comsa-steel"); ?>
                            </div>
                            <div class="invalid-feedback">
                                <?php _e(
                                    "Por favor introduce tu nombre completo.",
                                    "comsa-steel"
                                ); ?>
                            </div>
                        </div>
                        <div class="col-md-12 form-floating">
                            <input type="email" class="form-control shadow-none" id="correo" name="correo" placeholder="<?php _e(
                                "Email*",
                                "comsa-steel"
                            ); ?>"
                                required>
                            <label for="correo" class="form-label"><?php _e(
                                "Email*",
                                "comsa-steel"
                            ); ?></label>
                            <div class="valid-feedback">
                                <?php _e("¡Se ve bien!", "comsa-steel"); ?>
                            </div>
                            <div class="invalid-feedback">
                                <?php _e(
                                    "Por favor introduce un correo electrónico válido.",
                                    "comsa-steel"
                                ); ?>
                            </div>
                        </div>
                        <div class="col-md-12 form-floating">
                            <input type="tel" class="form-control shadow-none" id="correo" name="telefono" placeholder="<?php _e(
                                "Teléfono*",
                                "comsa-steel"
                            ); ?>"
                                required>
                            <label for="telefono" class="form-label"><?php _e(
                                "Teléfono*",
                                "comsa-steel"
                            ); ?></label>
                            <div class="valid-feedback">
                                <?php _e("¡Se ve bien!", "comsa-steel"); ?>
                            </div>
                            <div class="invalid-feedback">
                                <?php _e(
                                    "Por favor introduce un teléfono válido.",
                                    "comsa-steel"
                                ); ?>
                            </div>
                        </div>
                        <div class="col-md-12 form-floating">
                            <input type="text" class="form-control shadow-none" id="empresa" name="empresa" placeholder="<?php _e(
                                "Empresa*",
                                "comsa-steel"
                            ); ?>"
                                pattern=".{5,50}" required>
                            <label for="empresa" class="form-label"><?php _e(
                                "Empresa*",
                                "comsa-steel"
                            ); ?></label>
                            <div class="valid-feedback">
                                <?php _e("¡Se ve bien!", "comsa-steel"); ?>
                            </div>
                            <div class="invalid-feedback">
                                <?php _e(
                                    "Por favor introduce un nombre de empresa válido.",
                                    "comsa-steel"
                                ); ?>
                            </div>
                        </div>
                        <div class="col-md-12 form-floating mb-4">
                            <textarea class="form-control shadow-none" id="mensaje" name="mensaje" placeholder="<?php _e(
                                "Escribe tu mensaje*",
                                "comsa-steel"
                            ); ?>" style="height: 100px;" required></textarea>
                            <label for="mensaje"><?php _e(
                                "Escribe tu mensaje*",
                                "comsa-steel"
                            ); ?></label>
                            <div class="valid-feedback">
                                <?php _e("¡Se ve bien!", "comsa-steel"); ?>
                            </div>
                            <div class="invalid-feedback">
                                <?php _e(
                                    "Por favor introduce tu mensaje.",
                                    "comsa-steel"
                                ); ?>
                            </div>
                        </div>
                        <div class="col-12 my-auto text-start">
                            <button type="submit" class="btn bg-primary btn-block">
                                <i class="fa-solid fa-paper-plane"></i> <?php _e(
                                    "Enviar",
                                    "comsa-steel"
                                ); ?>
                            </button>
                            <div id="hold-on-a-sec">
                                <i id="contact-spinner" class="fas fa-spinner fa-spin"></i> <?php _e(
                                    "Espera un momento por favor...",
                                    "comsa-steel"
                                ); ?>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5 offset-lg-2 my-auto">
                    <div class="row">
                        <div class="col-6">
                            <nav data-aos="fade-up" data-aos-duration="1000">
                                <ul class="list-unstyled">
                                    <li class="color-black">
                                        <h3>
                                            <?php _e(
                                                "Chihuahua",
                                                "comsa-steel"
                                            ); ?>
                                        </h3>
                                    </li>
                                    <li>
                                        <address>
                                            Vía Lombardía 5705 Int. 305<br>
                                            Col. Saucito<br>
                                            Chihuahua, Chih. México
                                        </address>
                                    </li>
                                    <li class="mb-5">
                                        <address class="mb-0">
                                            Av. Piña 3302<br>
                                            Col. Ampliación Crucero<br>
                                            Chihuahua, Chih. México
                                        </address>
                                    </li>
                                    <li class="color-black">
                                        <h3>
                                            <?php _e(
                                                "El Paso",
                                                "comsa-steel"
                                            ); ?>
                                        </h3>
                                    </li>
                                    <li>
                                        <address>
                                            Lorem<br>
                                            Lorem ipsum<br>
                                            El Paso, TX USA
                                        </address>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-6">
                            <nav data-aos="fade-up" data-aos-duration="1000" data-aos-delay="250">
                                <ul class="list-unstyled">
                                    <!-- li class="color-black">
										<?php _e("Teléfonos", "comsa-steel"); ?>
                                    </li>
                                    <li>
                                        <a href="tel:+526141234567">
                                            +52 (614) 123 4567
                                        </a>
                                    </li>
                                    <li class="mb-5">
                                        <a href="tel:+526141234567">
                                            +52 (614) 123 4567
                                        </a>
                                    </li -->
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
