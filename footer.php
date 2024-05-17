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
                                            201 E. Main Suite 1615<br>
                                            79901 El Paso, TX USA<br>
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

    <section id="mapa">
        <iframe width="100%" height="400" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.9209912813026!2d-106.13032662287874!3d28.662084275648596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86ea43f9e7481a1d%3A0xf17591f5437a4a8c!2sV%C3%ADa%20Lombard%C3%ADa%205705%2C%20Saucito%2C%2031110%20Chihuahua%2C%20Chih.!5e0!3m2!1ses-419!2smx!4v1713584875438!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <footer>
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <a href="<?php echo esc_url(home_url()); ?>">
                        <img src="<?php echo esc_url(
                            get_template_directory_uri()
                        ); ?>/assets/images/logo-footer.svg" alt="" id="logo-footer" class="img-fluid" loading="lazy" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="750">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="mb-0">&copy; <?php echo date(
                        "Y"
                    ); ?> <?php bloginfo("name"); ?>. <?php _e(
    "Todos los derechos reservados",
    "comsa-steel"
); ?>. <a href="<?php echo get_permalink(3); ?>">
<?php _e("Política de Privacidad", "comsa-steel"); ?>
</a></p>
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

	<script defer src="<?php echo esc_url(
     get_template_directory_uri()
 ); ?>/assets/js/app.a8e9d7435e03b38d822e.bundle.js"></script>

	<!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-H25C4HNG5N"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-H25C4HNG5N');
    </script>
</body>
</html>
