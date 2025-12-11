<section class="new-logo-slider ptb-100">
    <div class="container">
        <h2 class="h2-mb"><?php echo get_sub_field( 'title' ); ?></h2>
    </div>
    <?php $logo_gallery_images = get_sub_field( 'logo_gallery' ); ?>
    <?php if ( $logo_gallery_images ) { ?>
        <div class="new-logo-slider__slider swiper">
            <div class="swiper-wrapper">
                <?php foreach ( $logo_gallery_images as $logo_gallery_image ){ ?>
                    <div class="swiper-slide">
                        <img src="<?php echo esc_url( $logo_gallery_image['sizes']['thumbnail'] ); ?>" alt="<?php echo esc_attr( $logo_gallery_image['alt'] ); ?>" width="<?php echo esc_attr( $logo_gallery_image['width'] ); ?>" height="<?php echo esc_attr( $logo_gallery_image['height'] ); ?>"/>
                    </div>
                <?php } ?>
            </div>
        </div>
    <?php } ?>
</section>