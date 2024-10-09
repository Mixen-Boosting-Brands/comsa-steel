<div class="col-6 my-3 my-lg-auto">
    <div class="row">
        <div class="col-12">
            <p class="text-small text-muted mb-0" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="250">
                <?php _e("Ordenar por:", "comsa-steel"); ?>
            </p>
            <nav>
                <div class="navs d-flex flex-wrap justify-content-start" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-cat-1-tab" data-bs-toggle="tab" data-bs-target="#nav-cat-1" type="button" role="tab" aria-controls="nav-cat-1" aria-selected="true" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                        <?php _e("Todas", "comsa-steel"); ?>
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
