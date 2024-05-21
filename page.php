<?php
get_header();

// Get the post thumbnail ID
$post_thumbnail_id = get_post_thumbnail_id();

// Get the raw URL of the post thumbnail
$post_thumbnail_url = wp_get_attachment_url($post_thumbnail_id);
?>

	<section id="jumbotron" class="parallax-window" data-parallax="scroll" data-image-src="<?php echo $post_thumbnail_url; ?>">
		<div id="overlay"></div>
	</section>

    <section id="body" class="py-60">
        <div class="container">
            <div class="row mb-1 mb-lg-3">
                <div class="col">
					<h1 class="titulo-page">
                        <span class="fs-4"><?php the_title(); ?></span>
                    </h1>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col">
					<?php the_content(); ?>

					<?php edit_post_link(); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="<?php echo esc_url(
                        home_url()
                    ); ?>" class="btn btn-home bg-primary btn-lg">
					   <i class="fa-solid fa-house"></i>
                        <?php _e("Regresar al inicio", "comsa-steel"); ?>
					</a>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
