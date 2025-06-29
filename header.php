<?php $currentlang = get_bloginfo("language"); ?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo("description"); ?>">
    <title><?php
    wp_title("");
    if (wp_title("", false)) {
        echo " : ";
    }
    bloginfo("name");
    ?></title>

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url(
        get_template_directory_uri()
    ); ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url(
        get_template_directory_uri()
    ); ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url(
        get_template_directory_uri()
    ); ?>/favicon-16x16.png">
    <link rel="manifest" href="<?php echo esc_url(
        get_template_directory_uri()
    ); ?>/site.webmanifest">
    <link rel="mask-icon" href="<?php echo esc_url(
        get_template_directory_uri()
    ); ?>/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo(
     "name"
 ); ?>" href="<?php bloginfo("rss2_url"); ?>" />
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="theme-color" content="#000000">

	<?php wp_head(); ?>
</head>
<body <?php if (!is_home()): ?>class="is-single"<?php endif; ?>>
    <div id="backdrop"></div>
    <div class="menu" style="opacity: 0;">
        <a id="cerrar-menu" href="javascript:void(0)">
            <i class="fas fa-times"></i>
        </a>
        <div class="menu-contenido">
            <a id="btn-logo" href="<?php echo esc_url(home_url()); ?>">
                <img class="logo img-fluid" src="<?php echo esc_url(
                    get_template_directory_uri()
                ); ?>/assets/images/logo@2x.webp" alt="<?php bloginfo(
    "name"
); ?>" loading="lazy">
            </a>
            <nav>
                <ul id="navmenu" class="list-unstyled">
                    <li>
                        <a <?php if (
                            is_home()
                        ): ?>class="anchor"<?php endif; ?> id="btn-nav-1" href="<?php if (
     !is_home()
 ):
     echo esc_url(home_url());
 endif; ?>#grupo-san-francisco">
                            <?php _e("Nosotros", "comsa-steel"); ?>
                        </a>
                    </li>
                    <li>
                        <a <?php if (
                            is_home()
                        ): ?>class="anchor"<?php endif; ?> id="btn-nav-2" href="<?php if (
     !is_home()
 ):
     echo esc_url(home_url());
 endif; ?>#servicios">
                            <?php _e("Servicios", "comsa-steel"); ?>
                        </a>
                    </li>
                    <li>
                        <a <?php if (
                            is_home()
                        ): ?>class="anchor"<?php endif; ?> id="btn-nav-3" href="<?php if (
     !is_home()
 ):
     echo esc_url(home_url());
 endif; ?>#confian">
                            <?php _e("Clientes", "comsa-steel"); ?>
                        </a>
                    </li>
                    <li>
                        <a <?php if (
                            is_home()
                        ): ?>class="anchor"<?php endif; ?> id="btn-nav-4" href="<?php if (
     !is_home()
 ):
     echo esc_url(home_url());
 endif; ?>#noticias">
                            <?php _e("Noticias", "comsa-steel"); ?>
                        </a>
                    </li>
                    <li>
                        <a <?php if (
                            is_home()
                        ): ?>class="anchor"<?php endif; ?> id="btn-nav-5" href="<?php if (
     !is_home()
 ):
     echo esc_url(home_url());
 endif; ?>#contacto">
                            <?php _e("Contacto", "comsa-steel"); ?>
                        </a>
                    </li>
                    <li>
                        <a id="btn-nav-6" href="<?php if (
                            $currentlang == "en-US"
                        ):
                            echo get_permalink(43);
                        else:
                            echo get_permalink(2);
                        endif; ?>">
                            <?php _e("Cotiza tu proyecto", "comsa-steel"); ?>
                        </a>
                    </li>
                </ul>
            </nav>
            <a href="#contacto" class="anchor btn btn-primary" id="btn-contacto">
                <?php _e("Contáctanos", "comsa-steel"); ?>
            </a>
            <div id="social">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="https://www.facebook.com/comsasteel" target="_blank">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.linkedin.com/company/comsasteel/" target="_blank">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div id="contacto-menu">
                <ul class="list-unstyled">
                    <li>
                        <i class="far fa-envelope"></i> <a href="sales@comsasteel.com">sales@comsasteel.com</a>
                    </li>
                    <!-- li>
                        <i class="fas fa-phone"></i> <a href="tel:+526141234567">(614) 123 4567</a>
                    </li -->
                </ul>
            </div>
        </div>
    </div>

    <header id="navbar" style="background-color: #000000;">
        <div class="container">
            <div class="row">
                <div class="col-6 col-xl-2 my-auto">
                    <a href="<?php echo esc_url(home_url()); ?>">
                        <img src="<?php echo esc_url(
                            get_template_directory_uri()
                        ); ?>/assets/images/logo-vertical@2x.webp" alt="<?php bloginfo(
    "name"
); ?>" class="logo img-fluid" id="logo-navbar" loading="lazy">
                    </a>
                </div>
                <div class="col-8 col-xl-10 d-none d-xl-block my-auto text-end">
                    <nav>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a <?php if (
                                    is_home()
                                ): ?>class="anchor"<?php endif; ?> href="<?php if (
     !is_home()
 ):
     echo esc_url(home_url());
 endif; ?>#grupo-san-francisco">
                                    <?php _e("Nosotros", "comsa-steel"); ?>
                                </a>
                            </li>
                            <li class="list-inline-item dropdown">
                                <a href="<?php if (!is_home()):
                                    echo esc_url(home_url());
                                endif; ?>#servicios" <?php if (
    is_home()
): ?>class="anchor"<?php endif; ?> type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php _e("Servicios", "comsa-steel"); ?>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="<?php if (
                                            $currentlang == "en-US"
                                        ):
                                            echo get_permalink(131);
                                        else:
                                            echo get_permalink(13);
                                        endif; ?>">
                                            <?php _e(
                                                "Ingeniería y Detallado",
                                                "comsa-steel"
                                            ); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?php if (
                                            $currentlang == "en-US"
                                        ):
                                            echo get_permalink(129);
                                        else:
                                            echo get_permalink(11);
                                        endif; ?>">
                                            <?php _e(
                                                "Fabricación",
                                                "comsa-steel"
                                            ); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?php if (
                                            $currentlang == "en-US"
                                        ):
                                            echo get_permalink(133);
                                        else:
                                            echo get_permalink(15);
                                        endif; ?>">
                                            <?php _e(
                                                "Preconstrucción",
                                                "comsa-steel"
                                            ); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?php if (
                                            $currentlang == "en-US"
                                        ):
                                            echo get_permalink(136);
                                        else:
                                            echo get_permalink(17);
                                        endif; ?>">
                                            <?php _e(
                                                "Joist and Deck Supplier",
                                                "comsa-steel"
                                            ); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?php if (
                                            $currentlang == "en-US"
                                        ):
                                            echo get_permalink(138);
                                        else:
                                            echo get_permalink(19);
                                        endif; ?>">
                                            <?php _e(
                                                "Project Management",
                                                "comsa-steel"
                                            ); ?>
                                        </a>
                                    </li>
                                    <?php if (!($currentlang == "en-US")): ?>
                                    <li>
                                        <a class="dropdown-item" href="<?php if (
                                            $currentlang == "en-US"
                                        ):
                                            echo get_permalink(140);
                                        else:
                                            echo get_permalink(21);
                                        endif; ?>">
                                            <?php _e(
                                                "Montaje",
                                                "comsa-steel"
                                            ); ?>
                                        </a>
                                    </li>
                                    <?php endif; ?>
                                  </ul>
                            </li>
                            <li class="list-inline-item">
                                <a <?php if (
                                    is_home()
                                ): ?>class="anchor"<?php endif; ?> href="<?php if (
     !is_home()
 ):
     echo esc_url(home_url());
 endif; ?>#confian">
                                    <?php _e("Clientes", "comsa-steel"); ?>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a <?php if (
                                    is_home()
                                ): ?>class="anchor"<?php endif; ?> href="<?php if (
     !is_home()
 ):
     echo esc_url(home_url());
 endif; ?>#noticias">
                                    <?php _e("Noticias", "comsa-steel"); ?>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a <?php if (
                                    is_home()
                                ): ?>class="anchor"<?php endif; ?> href="<?php if (
     !is_home()
 ):
     echo esc_url(home_url());
 endif; ?>#contacto">
                                    <?php _e("Contacto", "comsa-steel"); ?>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-secondary" href="<?php if (
                                    $currentlang == "en-US"
                                ):
                                    echo get_permalink(43);
                                else:
                                    echo get_permalink(2);
                                endif; ?>">
                                    <?php _e(
                                        "Cotiza tu proyecto",
                                        "comsa-steel"
                                    ); ?>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <?php pll_the_languages([
                                    "show_flags" => 1,
                                    "show_names" => 0,
                                    "hide_current" => 1,
                                ]); ?>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-6 d-xl-none my-auto text-end">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item d-inline-block d-lg-none">
                            <?php pll_the_languages([
                                "show_flags" => 1,
                                "show_names" => 0,
                                "hide_current" => 1,
                            ]); ?>
                        </li>
                        <li class="list-inline-item">
                            <a id="mburger" href="javascript:void(0)">
                                <i class="fas fa-bars"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
