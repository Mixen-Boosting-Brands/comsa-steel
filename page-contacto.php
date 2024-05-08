<?php
    /*
    Template Name: Contacto
    */
    get_header();
?>

    <section id="banner">
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- Slider main container -->
                    <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide my-auto">
                                <div class="row">
                                    <div class="col-xl-8 offset-xl-2 my-auto text-center overflow-hidden">
                                        <div>
                                            <hr>
                                            <h1 style="color: #ffffff;"><?php _e( 'Cotiza', 'comsa-steel' ); ?> <span class="color-primary"><?php _e( 'tu proyecto', 'comsa-steel' ); ?></span></h1>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 offset-xl-2 my-auto text-center overflow-hidden">
                                        <!-- Aquí se inyecta feedback a usuario vía Ajax -->
                                        <div id="form-messages"></div>
                                        <!-- /Aquí se inyecta feedback a usuario vía Ajax -->
                                        <form data-aos="fade-up" data-aos-duration="1000" action="<?php echo esc_url( get_template_directory_uri() ); ?>/mailer.php" method="POST" class="row g-3 needs-validation contact-form mb-4 mb-lg-0" id="ajax-contact" novalidate>
                                            <div class="col-md-12 form-floating">
                                                <input type="text" class="form-control shadow-none" id="nombre" name="nombre" placeholder="<?php _e( 'Nombre completo*', 'comsa-steel' ); ?>"
                                                    pattern=".{5,50}" required>
                                                <label for="nombre" class="form-label"><?php _e( 'Nombre completo*', 'comsa-steel' ); ?></label>
                                                <div class="valid-feedback">
                                                    <?php _e( '¡Se ve bien!', 'comsa-steel' ); ?>
                                                </div>
                                                <div class="invalid-feedback">
                                                    <?php _e( 'Por favor introduce tu nombre completo.', 'comsa-steel' ); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-12 form-floating">
                                                <input type="email" class="form-control shadow-none" id="correo" name="correo" placeholder="<?php _e( 'Email*', 'comsa-steel' ); ?>"
                                                    required>
                                                <label for="correo" class="form-label"><?php _e( 'Email*', 'comsa-steel' ); ?></label>
                                                <div class="valid-feedback">
                                                    <?php _e( '¡Se ve bien!', 'comsa-steel' ); ?>
                                                </div>
                                                <div class="invalid-feedback">
                                                    <?php _e( 'Por favor introduce un correo electrónico válido.', 'comsa-steel' ); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-12 form-floating">
                                                <input type="tel" class="form-control shadow-none" id="correo" name="telefono" placeholder="<?php _e( 'Teléfono*', 'comsa-steel' ); ?>"
                                                    required>
                                                <label for="telefono" class="form-label"><?php _e( 'Teléfono*', 'comsa-steel' ); ?></label>
                                                <div class="valid-feedback">
                                                    <?php _e( '¡Se ve bien!', 'comsa-steel' ); ?>
                                                </div>
                                                <div class="invalid-feedback">
                                                    <?php _e( 'Por favor introduce un teléfono válido.', 'comsa-steel' ); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-12 form-floating">
                                                <input type="text" class="form-control shadow-none" id="empresa" name="empresa" placeholder="<?php _e( 'Empresa*', 'comsa-steel' ); ?>"
                                                    pattern=".{5,50}" required>
                                                <label for="empresa" class="form-label"><?php _e( 'Empresa*', 'comsa-steel' ); ?></label>
                                                <div class="valid-feedback">
                                                    <?php _e( '¡Se ve bien!', 'comsa-steel' ); ?>
                                                </div>
                                                <div class="invalid-feedback">
                                                    <?php _e( 'Por favor introduce un nombre de empresa válido.', 'comsa-steel' ); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-12 form-floating mb-4">
                                                <textarea class="form-control shadow-none" id="mensaje" name="mensaje" placeholder="<?php _e( 'Escribe tu mensaje*', 'comsa-steel' ); ?>" style="height: 100px;" required></textarea>
                                                <label for="mensaje"><?php _e( 'Escribe tu mensaje*', 'comsa-steel' ); ?></label>
                                                <div class="valid-feedback">
                                                    <?php _e( '¡Se ve bien!', 'comsa-steel' ); ?>
                                                </div>
                                                <div class="invalid-feedback">
                                                    <?php _e( 'Por favor introduce tu mensaje.', 'comsa-steel' ); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-12 my-auto">
                                                <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
                                                <input type="file" class="form-control form-control-sm mb-4" id="userfile-1" name="userfile-1[]" multiple="multiple" aria-describedby="fileUploadBlock" required>
                                                <div id="fileUploadBlock" class="color-primary form-text mb-5">
                                                    <?php _e( 'Tamaño máximo de archivo: 10 MB', 'comsa-steel' ); ?>
                                                </div>
                                            </div>
                                            <div class="col-12 my-auto text-start">
                                                <button type="submit" class="btn bg-primary btn-block">
                                                    <i class="fa-solid fa-paper-plane"></i> <?php _e( 'Enviar', 'comsa-steel' ); ?>
                                                </button>
                                                <div id="hold-on-a-sec">
                                                    <i id="contact-spinner" class="fas fa-spinner fa-spin"></i> <?php _e( 'Espera un momento por favor...', 'comsa-steel' ); ?>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>