<section class="new-chart ptb-100">
    <div class="container">
        <h2><?php echo get_sub_field( 'title' ); ?></h2>
        <?php if( get_sub_field( 'description' ) ){ ?>
            <p><?php echo get_sub_field( 'description' ); ?></p>
        <?php } ?>
        <?php $image = get_sub_field( 'image' ); ?>
        <?php if ( $image ) : ?>
            <div class="new-chart__image">
                <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" width="<?php echo esc_attr( $image['width'] ); ?>" height="<?php echo esc_attr( $image['height'] ); ?>" />
            </div>
        <?php endif; ?>
    </div>
</section>