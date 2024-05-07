	<section id="mapa">
        <iframe width="100%" height="400" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.9209912813026!2d-106.13032662287874!3d28.662084275648596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86ea43f9e7481a1d%3A0xf17591f5437a4a8c!2sV%C3%ADa%20Lombard%C3%ADa%205705%2C%20Saucito%2C%2031110%20Chihuahua%2C%20Chih.!5e0!3m2!1ses-419!2smx!4v1713584875438!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <footer>
        <div class="container">
            <div class="row mb-1 mb-lg-3">
                <div class="col-lg-6">
                    <div class="row mb-4">
                        <div class="col-6">
                            <nav>
                                <ul class="list-unstyled">
                                    <li class="color-black">
										<?php _e( 'Encuéntranos', 'comsa-steel' ); ?>
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
										<?php _e( 'Lo más reciente', 'comsa-steel' ); ?>
                                    </li>
                                    <li>
                                        <a <?php if( is_home() ): ?>class="anchor"<?php endif; ?> href="<?php if( !is_home() ): ?><?php echo esc_url( home_url() ); ?><?php endif; ?>#noticias">
                                            <?php _e( 'Noticias', 'comsa-steel' ); ?>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-6">
                            <nav>
                                <ul class="list-unstyled">
                                    <li class="color-black">
										<?php _e( 'Teléfonos', 'comsa-steel' ); ?>
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
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <nav>
                                <ul class="list-unstyled">
                                    <li class="mb-1 mb-lg-3">
                                        <a href="<?php echo get_permalink( 3 ); ?>">
											<?php _e( 'Política de Privacidad', 'comsa-steel' ); ?>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/footer/thumb.webp" alt="" class="img-fluid" loading="lazy">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="mb-0">&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. <?php _e( 'Todos los derechos reservados', 'comsa-steel' ); ?>.</p>
                </div>
                <div class="col text-end">
                    <p class="mb-0">Made with <i class="fa-solid fa-heart" alt="love" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="love"></i> @ <a href="https://mixen.mx/" target="_blank">Mixen</a></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- a href="https://wa.me/52614?text=Hola%20FOO%20BAR,%20necesito%20información." class="whatsapp" target="_blank">
        <i class="fab fa-whatsapp whatsapp-icon"></i>
    </a -->

	<?php wp_footer(); ?>

<script defer src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/app.18b91c9e9000b932f1ac.bundle.js"></script></body>
</html>