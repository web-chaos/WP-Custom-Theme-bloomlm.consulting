<section class="new-team ptb-30">
    <div class="container">
        <h2 class="h2-mb"><?php echo get_sub_field( 'title' ); ?></h2>
        <?php if ( have_rows( 'list' ) ) { ?>
            <div class="new-team__slider swiper">
                <div class="swiper-wrapper">
                    <?php while ( have_rows( 'list' ) ) { the_row(); ?>
                        <div class="swiper-slide">
                            <div class="new-team__item">
                                <?php $image = get_sub_field( 'image' ); ?>
                                <?php if ( $image ) { ?>
                                    <div class="new-team__image">
                                        <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" width="<?php echo esc_attr( $image['width'] ); ?>" height="<?php echo esc_attr( $image['height'] ); ?>"/>
                                    </div>
                                <?php } ?>
                                <div class="new-team__footer">
                                    <div class="new-team__name"><?php echo get_sub_field( 'name' ); ?></div>
                                    <div class="new-team__description"><?php echo get_sub_field( 'description' ); ?></div>
                                    <svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.48019 0.856953L5.54312 4.94051C5.59993 4.99741 5.64501 5.06503 5.67577 5.13949C5.70653 5.21394 5.72237 5.29377 5.72237 5.37438C5.72237 5.455 5.70653 5.53483 5.67577 5.60928C5.64501 5.68374 5.59993 5.75135 5.54312 5.80826L1.48019 9.89182C1.3657 10.0069 1.21042 10.0715 1.0485 10.0715C0.88659 10.0715 0.731308 10.0069 0.616818 9.89182C0.502328 9.77674 0.438008 9.62067 0.438008 9.45794C0.438008 9.2952 0.502328 9.13913 0.616818 9.02406L4.24857 5.37387L0.61631 1.72369C0.50182 1.60862 0.4375 1.45255 0.4375 1.28981C0.4375 1.12707 0.50182 0.971004 0.61631 0.855933C0.7308 0.740861 0.886082 0.676213 1.048 0.676213C1.20991 0.676213 1.36519 0.740861 1.47968 0.855933L1.48019 0.856953Z" fill="#BD3939"/></svg>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    </div>
</section>