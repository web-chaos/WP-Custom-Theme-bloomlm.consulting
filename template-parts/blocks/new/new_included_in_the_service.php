<section class="included-service ptb-100">
    <div class="container">
        <h2 class="h2-mb">
            <?php echo get_sub_field( 'title' ); ?>
            <svg width="71" height="71" viewBox="0 0 71 71" fill="none" xmlns="http://www.w3.org/2000/svg"><mask id="mask0_1247_3232" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="72" height="71"><ellipse cx="35.7515" cy="35.2516" rx="35.2515" ry="35.2516" fill="#4138B1"/></mask><g mask="url(#mask0_1247_3232)"><ellipse cx="72.3591" cy="71.8583" rx="35.9294" ry="35.9295" fill="#C8242E"/><ellipse cx="72.3591" cy="0.000804901" rx="35.9294" ry="35.9295" fill="#CE4545"/><ellipse cx="0.499729" cy="0.000804901" rx="35.9294" ry="35.9295" fill="#CE4545"/><ellipse cx="0.499729" cy="71.8575" rx="35.9294" ry="35.9295" fill="#CE4545"/></g></svg>
        </h2>
        <div class="included-service__wrapper">
			<?php if ( have_rows( 'lists' ) ) { ?>
                <div class="included-service__list">
                    <?php $count = 0; while ( have_rows( 'lists' ) ) { the_row(); $count++; ?>
                        <div class="included-service__list--item">
                            <span><?php echo $count; ?></span>
                            <div>
                                <strong><?php echo get_sub_field( 'title' ); ?></strong>
                                <p><?php echo get_sub_field( 'description' ); ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
			<?php } ?>
            <?php $image = get_sub_field( 'image' ); ?>
			<?php if ( $image ) { ?>
                <div class="included-service__image">
                    <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" width="<?php echo esc_attr( $image['width'] ); ?>" height="<?php echo esc_attr( $image['height'] ); ?>"/>
                </div>
			<?php } ?>    
        </div>
    </div>
</section>	