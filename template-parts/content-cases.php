<div class="new-cases__item">
    <?php
    $thumbnail_id = get_post_thumbnail_id();
    if ($thumbnail_id) {
        $image_url = wp_get_attachment_url($thumbnail_id);
        $image_meta = wp_get_attachment_metadata($thumbnail_id);
    }
    ?>

    <?php if (!empty($image_url) && !empty($image_meta)) { ?>
        <div class="new-cases__item--image">
            <?php 
                $category = get_the_terms($post->ID, 'cases-category');
                if (!empty($category) && !is_wp_error($category)) {
                    echo '<span>' . esc_html($category[0]->name) . '</span>';
                }
            ?>
            <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_html($category[0]->name); ?>" width="<?php echo $image_meta['width']; ?>" height="<?php  echo$image_meta['height']; ?>">
        </div>
    <?php } ?>
    <a href="<?php the_permalink(); ?>" class="new-cases__item--title"><?php the_title(); ?></a>
    <div class="new-cases__item--columns">
        <?php if ( have_rows( 'column_1' ) ) { ?>
            <div class="new-cases__item--column new-cases__item--column--1">
                <?php while ( have_rows( 'column_1' ) ) { the_row(); ?>
                    <strong><?php echo get_sub_field( 'percent' ); ?></strong>
                    <p><?php echo get_sub_field( 'description' ); ?></p>
                <?php } ?>
            </div>
        <?php } ?>
        <?php if ( have_rows( 'column_2' ) ) { ?>
            <div class="new-cases__item--column new-cases__item--column--2">
                <?php while ( have_rows( 'column_2' ) ) { the_row(); ?>
                    <strong><?php echo get_sub_field( 'percent' ); ?></strong>
                    <p><?php echo get_sub_field( 'description' ); ?></p>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</div>