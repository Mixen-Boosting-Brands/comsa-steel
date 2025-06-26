<?php
$currentlang = get_bloginfo("language"); ?>
<?php if (!is_home()):
    // Si no es home, entonces:

else:
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
                    <?php if (is_home()): ?>
                        <?php if ($currentlang == "en-US"): ?>
                            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
                            <script>
                            hbspt.forms.create({
                                region: "na1",
                                portalId: "47437591",
                                formId: "eea6dc20-dd3c-479f-96fd-25f4e8ad97f6"
                            });
                            </script>
                        <?php else: ?>
                            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
                            <script>
                            hbspt.forms.create({
                                region: "na1",
                                portalId: "47437591",
                                formId: "c9e2cb4f-6384-469a-b822-dce08ed315a2"
                            });
                            </script>
                        <?php endif; ?>
                    <?php else: ?>
                        <?php if ($currentlang == "en-US"): ?>
                            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
                            <script>
                            hbspt.forms.create({
                                region: "na1",
                                portalId: "47437591",
                                formId: "5e13b37e-effe-400a-8d21-136a886c6ebf"
                            });
                            </script>
                        <?php else: ?>
                            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
                            <script>
                            hbspt.forms.create({
                                region: "na1",
                                portalId: "47437591",
                                formId: "8101d5bb-1f8c-4abd-ae36-90f7033db724"
                            });
                            </script>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
                <div class="col-lg-5 offset-lg-2 my-auto">
                    <div class="row">
                        <div class="col-8">
                            <nav data-aos="fade-up" data-aos-duration="1000">
                                <ul class="list-unstyled">
                                    <li class="color-black">
                                        <h3>
                                            <?php _e(
                                                "Contact us",
                                                "comsa-steel"
                                            ); ?>
                                        </h3>
                                    </li>
                                    <li class="mb-5">
                                        <a href="mailto:sales@comsasteel.com">sales@comsasteel.com</a>
                                    </li>
                                    <li class="color-black">
                                        <h3>
                                            <?php _e(
                                                "Oficinas centrales D1 Chihuahua",
                                                "comsa-steel"
                                            ); ?>
                                        </h3>
                                    </li>
                                    <li class="mb-5">
                                        <address class="mb-0">
                                            Vía Lombardía 5705 Int. 305<br>
                                            Col. Saucito<br>
                                            Chihuahua, Chih. México
                                        </address>
                                    </li>
                                    <li class="color-black">
                                        <h3>
                                            <?php _e(
                                                "Planta de Producción",
                                                "comsa-steel"
                                            ); ?>
                                        </h3>
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
                        <div class="col-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
endif; ?>

<?php if (is_home()): ?>
    <section id="mapa">
        <iframe width="100%" height="400" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.9209912813026!2d-106.13032662287874!3d28.662084275648596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86ea43f9e7481a1d%3A0xf17591f5437a4a8c!2sV%C3%ADa%20Lombard%C3%ADa%205705%2C%20Saucito%2C%2031110%20Chihuahua%2C%20Chih.!5e0!3m2!1ses-419!2smx!4v1713584875438!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
<?php endif; ?>

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
); ?>. <a href="<?php if (!($currentlang == "en-US")):
    echo get_permalink(3);
else:
    echo get_permalink(195);
endif; ?>">
<?php _e("Política de Privacidad", "comsa-steel"); ?>
</a></p>
                </div>
                <div class="col text-end">

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
 ); ?>/assets/js/app.50b71c6ea6f11ad196ff.bundle.js"></script>

	<!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-H25C4HNG5N"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-H25C4HNG5N');
    </script>

    <!-- Clarity -->
    <script type="text/javascript">
        (function(c,l,a,r,i,t,y){
            c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
            t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
            y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
        })(window, document, "clarity", "script", "prxlqi93kk");
    </script>

    <!-- LinkedIn -->
    <script type="text/javascript"> _linkedin_partner_id = "6699612"; window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || []; window._linkedin_data_partner_ids.push(_linkedin_partner_id); </script><script type="text/javascript"> (function(l) { if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])}; window.lintrk.q=[]} var s = document.getElementsByTagName("script")[0]; var b = document.createElement("script"); b.type = "text/javascript";b.async = true; b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js"; s.parentNode.insertBefore(b, s);})(window.lintrk); </script> <noscript> <img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=6699612&fmt=gif" /> </noscript>
</body>
</html>
