<section class="new-user-reviews ptb-100">
    <div class="container">
        <div class="new-user-reviews__header h2-mb">
            <h2><?php echo get_sub_field( 'title' ); ?></h2>
            <?php $more_link = get_sub_field( 'more_link' ); ?>
			<?php $term = get_term_by( 'id', $more_link, 'reviews' ); ?>
			<?php if ( $term ) { ?>
				<a href="<?php echo esc_url( get_term_link( $term ) ); ?>" class="new-user-reviews__more">
                    <?php echo esc_html__( 'Больше', 'bloomlm' ); ?>
                    <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.2917 20.5064C13.1987 20.4135 13.125 20.3032 13.0747 20.1818C13.0243 20.0604 12.9984 19.9303 12.9984 19.7989C12.9984 19.6675 13.0243 19.5373 13.0747 19.416C13.125 19.2946 13.1987 19.1843 13.2917 19.0914L20.5855 11.7989L0.999218 11.7989C0.734001 11.7989 0.479647 11.6935 0.29211 11.506C0.104574 11.3185 -0.000781985 11.0641 -0.000781973 10.7989C-0.000781962 10.5337 0.104574 10.2793 0.29211 10.0918C0.479647 9.90425 0.734001 9.79889 0.999218 9.79889L20.5855 9.79889L13.2917 2.5064C13.1041 2.31875 12.9987 2.06426 12.9987 1.7989C12.9987 1.53353 13.1041 1.27904 13.2917 1.0914C13.4794 0.903755 13.7339 0.798339 13.9992 0.798339C14.2646 0.798339 14.5191 0.903755 14.7067 1.0914L23.7067 10.0914C23.7997 10.1843 23.8734 10.2946 23.9238 10.416C23.9741 10.5374 24 10.6675 24 10.7989C24 10.9303 23.9741 11.0604 23.9238 11.1818C23.8734 11.3032 23.7997 11.4135 23.7067 11.5064L14.7067 20.5064C14.6138 20.5994 14.5036 20.6731 14.3822 20.7235C14.2608 20.7738 14.1306 20.7997 13.9992 20.7997C13.8678 20.7997 13.7377 20.7738 13.6163 20.7235C13.4949 20.6731 13.3846 20.5994 13.2917 20.5064Z" fill="black"/></svg>
                </a>
			<?php } ?>
        </div>
        <?php
            $args_rev = array(
                'post_type'      => 'review',
                'posts_per_page' => 8,
                'post_status'    => 'publish',
                'orderby'        => 'date',
                'order'          => 'DESC',
            );

            $query_rev = new WP_Query($args_rev);

            if ($query_rev->have_posts()) { ?>
                <div class="new-user-reviews__reviews swiper">
                    <div class="swiper-wrapper">
                        <?php while ($query_rev->have_posts()) { $query_rev->the_post(); ?>
                            <div class="swiper-slide">
                                <?php get_template_part( 'template-parts/content', 'review' ); ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php wp_reset_postdata(); } ?>
    </div>
</section>