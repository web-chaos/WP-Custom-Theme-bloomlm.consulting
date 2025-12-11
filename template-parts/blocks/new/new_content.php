<section class="new-content">
    <div class="container">
        <?php if( get_sub_field( 'show_short_description' ) == 1  ){ ?>
            <div class="new-content__wrapper">
                <div class="new-content__short">
                    <div class="new-content__meta">
                        <div class="new-content__author"><?php echo get_the_author_meta('first_name') . ' ' . get_the_author_meta('last_name'); ?></div>
                        <div class="new-content__meta--wrapper">
                            <date><?php echo get_the_date( 'j F Y' ); ?></date>
                            <span><?php echo esc_html__( 'Просмотры: ', 'bloomlm' ); ?><?php echo get_post_views( get_the_ID() ); ?></span>
                        </div>
                    </div>
                    <h1><?php the_title(); ?></h1>
                    <?php echo get_sub_field( 'short_description' ); ?>
                </div>
                <div class="new-content__image">
                    <?php
                        $thumbnail_id = get_post_thumbnail_id();
                        if ($thumbnail_id) {
                            $image_url = wp_get_attachment_url($thumbnail_id);
                            $image_meta = wp_get_attachment_metadata($thumbnail_id);
                        }
                    ?>
                    <?php if (!empty($image_url) && !empty($image_meta)) { ?>
                        <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo $image_meta['alt']; ?>" width="<?php echo $image_meta['width']; ?>" height="<?php  echo$image_meta['height']; ?>">
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
        <div class="new-content__content"><?php echo get_sub_field( 'content' ); ?></div>
    </div>
</section>