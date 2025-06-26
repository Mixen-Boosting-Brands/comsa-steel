<?php
/*
    Template Name: Contacto
    */
get_header();
$currentlang = get_bloginfo("language");
?>

    <section id="banner" class="py-60" style="display: flex; justify-content: center; align-items: center;" style="background-color: #A9A9A9;">
        <!-- div id="overlay"></div>
        <!-- video autoplay muted loop playsinline id="background-video">
            <source src="<?php echo esc_url(
                get_template_directory_uri()
            ); ?>/assets/videos/bg-video.mp4" type="video/mp4"">
            Your browser does not support the video tag.
        </video -->
        <div class="container" style="position: relative; height: auto; z-index: 3;">
            <div class="row text-center" style="height: auto;">
            <?php if ($currentlang == "en-US"): ?>
                <div class="col">
                    <hr>
                    <h1 style="color: #ffffff;">
                        <?php _e(
                            "Cotiza",
                            "comsa-steel"
                        ); ?> <span class="color-primary"><?php _e(
     "tu proyecto",
     "comsa-steel"
 ); ?></span>
                    </h1>
                    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
                    <script>
                      hbspt.forms.create({
                        portalId: "47437591",
                        formId: "5e13b37e-effe-400a-8d21-136a886c6ebf"
                      });
                    </script>
                </div>
            <?php else: ?>
                <div class="col">
                    <hr>
                    <h1 style="color: #ffffff;">
                        <?php _e(
                            "Cotiza",
                            "comsa-steel"
                        ); ?> <span class="color-primary"><?php _e(
     "tu proyecto",
     "comsa-steel"
 ); ?></span>
                    </h1>
                    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
                    <script>
                      hbspt.forms.create({
                        portalId: "47437591",
                        formId: "8101d5bb-1f8c-4abd-ae36-90f7033db724"
                      });
                    </script>
                </div>
            <?php endif; ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
