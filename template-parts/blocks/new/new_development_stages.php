<section class="new-development-stages ptb-100">
    <div class="container">
        <h2 class="h2-mb">
            <?php echo get_sub_field( 'title' ); ?>
            <svg width="71" height="72" viewBox="0 0 71 72" fill="none" xmlns="http://www.w3.org/2000/svg"><mask id="mask0_1672_10707" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="72" height="72"><ellipse cx="35.7515" cy="36.0517" rx="35.2515" ry="35.2516" fill="#4138B1"/></mask><g mask="url(#mask0_1672_10707)"><ellipse cx="72.3591" cy="72.6583" rx="35.9294" ry="35.9295" fill="#C8242E"/><ellipse cx="72.3591" cy="0.800884" rx="35.9294" ry="35.9295" fill="#BD3939"/><ellipse cx="0.499729" cy="0.800884" rx="35.9294" ry="35.9295" fill="#BD3939"/><ellipse cx="0.499729" cy="72.6576" rx="35.9294" ry="35.9295" fill="#BD3939"/></g></svg>
        </h2>
        <?php if ( have_rows( 'stages' ) ) { ?>
            <div class="new-development-stages__grid">
                <?php $count = 0; while ( have_rows( 'stages' ) ) {  the_row(); $count++; ?>
                    <div class="new-development-stages__item">
                        <?php $image = get_sub_field( 'image' ); ?>
                        <?php if ( $image ) {  ?>
                            <div class="new-development-stages__image">
                                <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" width="<?php echo esc_attr( $image['width'] ); ?>" height="<?php echo esc_attr( $image['height'] ); ?>"/>
                            </div>
                        <?php } ?>
                        <div class="new-development-stages__column">
                            <span><?php echo $count; ?></span>
                            <div class="new-development-stages__title"><?php echo get_sub_field( 'title' ); ?></div>
                            <p class="new-development-stages__description"><?php echo get_sub_field( 'description' ); ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</section>