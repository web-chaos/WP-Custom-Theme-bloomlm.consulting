<section class="new-video-block ptb-30">
    <div class="container">
        <?php if( get_sub_field( 'title' ) ){ ?>
            <h2 class="h2-mb"><?php echo get_sub_field( 'title' ); ?></h2>
        <?php } ?>
        <div class="new-video-block__wrapper">
            <a href="<?php echo get_sub_field( 'video_link' ); ?>" class="" data-width="640" data-height="360" data-fancybox>
                <img src="<?php echo get_template_directory_uri(); ?>/img/youtube-thumb.svg" alt="<?php echo get_sub_field( 'title' ); ?>">
            </a>
        </div>
    </div>
</section>