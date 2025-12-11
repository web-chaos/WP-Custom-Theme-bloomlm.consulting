<section class="reviews ptb-100">
    <div class="container">
        <h2 class="h2-mb"><?php echo get_sub_field( 'title' ); ?></h2>
        <?php if ( have_rows( 'reviews' ) ) { ?>
            <div class="reviews__slider swiper">
                <div class="swiper-wrapper">
                    <?php while ( have_rows( 'reviews' ) ) { the_row(); ?>
                        <div class="swiper-slide">
                            <div class="reviews__item">
                                <div class="reviews__item--header">
                                    <img width="65px" height="64px" src="<?php echo get_template_directory_uri(); ?>/img/avatar.svg" alt="<?php echo get_sub_field( 'name' ); ?>">
                                    <div class="reviews__item--meta">
                                        <div class="reviews__item--name"><?php echo get_sub_field( 'name' ); ?></div>
                                        <div class="reviews__item--position"><?php echo get_sub_field( 'position' ); ?></div>
                                    </div>
                                </div>
                                <div class="reviews__item--review"><?php echo get_sub_field( 'review' ); ?></div>
                                <?php
                                    $rating = get_sub_field('rating');
                                    $rating = is_numeric($rating) ? intval($rating) : 0;
                                    $max_rating = 5;
                                ?>
                                <div class="reviews__item--rating">
                                    <?php if ($rating > 0 && $rating <= $max_rating) { ?>
                                        <?php for ($i = 1; $i <= $max_rating; $i++) { ?>
                                            <?php if ($i <= $rating) { ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt="rating">
                                            <?php } else { ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/star-grey.svg" alt="rating">
                                            <?php } ?>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <?php for ($i = 1; $i <= $max_rating; $i++) { ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/star-grey.svg" alt="rating">
                                        <?php } ?>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>    
                    <?php } ?>
                    <div class="swiper-slide">
                        <div class="reviews__item reviews__item--empty">
                            <?php echo esc_html__( 'твой отзыв', 'bloomlm' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</section>

