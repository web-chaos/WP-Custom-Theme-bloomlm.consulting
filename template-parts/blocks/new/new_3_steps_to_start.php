<?php $image = get_sub_field( 'image' ); ?>
<?php $image_2 = get_sub_field( 'image_2' ); ?>
<?php $image_3 = get_sub_field( 'image_3' ); ?>
<?php $image_4 = get_sub_field( 'image_4' ); ?>

<section class="new-3-steps">
    <div class="container">
        <div class="new-3-steps__anim">
            <div class="leave-request-steps__header">
                <h2><?php echo get_sub_field( 'title' ); ?></h2>
                <p><?php echo get_sub_field( 'description' ); ?></p>
            </div>
            <div class="new-3-steps__anim--photo-large">
                <?php if ( $image ) { ?>
                    <div class="photo-1">
                        <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" width="<?php echo esc_attr( $image['width'] ); ?>" height="<?php echo esc_attr( $image['height'] ); ?>"/>
                    </div>
                <?php } ?>
                <?php if ( $image_2 ) { ?>
                    <div class="photo-2">
                        <img src="<?php echo esc_url( $image_2['url'] ); ?>" alt="<?php echo esc_attr( $image_2['alt'] ); ?>" width="<?php echo esc_attr( $image_2['width'] ); ?>" height="<?php echo esc_attr( $image_2['height'] ); ?>"/>
                    </div>
                <?php } ?>
            </div>
            <div class="new-3-steps__anim--photo-small">
                <?php if ( $image_3 ) { ?>
                    <div class="photo-1">
                        <img src="<?php echo esc_url( $image_3['url'] ); ?>" alt="<?php echo esc_attr( $image_3['alt'] ); ?>" width="<?php echo esc_attr( $image_3['width'] ); ?>" height="<?php echo esc_attr( $image_3['height'] ); ?>"/>
                    </div>
                <?php } ?>
                <?php if ( $image_4 ) { ?>
                    <div class="photo-2">
                        <img src="<?php echo esc_url( $image_4['url'] ); ?>" alt="<?php echo esc_attr( $image_4['alt'] ); ?>" width="<?php echo esc_attr( $image_4['width'] ); ?>" height="<?php echo esc_attr( $image_4['height'] ); ?>"/>
                    </div>
                <?php } ?>
            </div>
            <div class="new-3-steps__anim--large">
                <div class="small-circle small-circle-1"></div>
                <div class="small-circle small-circle-2"></div>
                <div class="small-circle small-circle-3"></div>
            </div>
            <div class="new-3-steps__anim--small">
                <div class="small-circle small-circle-1"></div>
                <div class="small-circle small-circle-2"></div>
            </div>
        </div>
    </div>
</section>
<section class="leave-request-steps ptb-100">
    <div class="container">
        <div class="leave-request-steps__wrapper">
            <h2 class="leave-request-steps__title"><?php echo get_sub_field( 'form_block_title' ); ?></h2>
            <div class="leave-request-steps__columns">
                <p><?php echo get_sub_field( 'form_block_description' ); ?></p>
                <a href="#leave-request-steps" class="button" data-fancybox><?php echo esc_html__( 'Оставить заявку ', 'bloomlm' ); ?></a>
            </div>
        </div>
    </div>
</section>
<?php if( get_sub_field( 'contact_form' ) ){ ?>
    <div id="leave-request-steps" class="bloomlm-popup" style="display: none;">
        <div class="bloomlm-popup__wrapper">
            <div class="bloomlm-popup__top"><svg width="22" height="32" viewBox="0 0 22 32" fill="none" xmlns="http://www.w3.org/2000/svg"><mask id="mask0_816_2549" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="10" width="22" height="22"><circle cx="10.5987" cy="21.4012" r="10.5987" fill="#4138B1"/></mask><g mask="url(#mask0_816_2549)"><circle cx="21.6053" cy="32.4075" r="10.8025" fill="#C8242E"/><circle cx="21.6053" cy="10.8025" r="10.8025" fill="#E50F1B"/><circle cx="-0.00018692" cy="10.8025" r="10.8025" fill="#DB3F2D"/><circle cx="-0.00018692" cy="32.4075" r="10.8025" fill="#E50F1B"/></g><path d="M10.8025 10.8025C0.000110408 10.8025 5.96619 10.8025 0.000110602 10.8025C0.000110602 16.7686 0.00110796 0 0.000110602 10.8025C0.000110602 4.83647 0.000108464 10.8025 0 0C5.96608 0 10.8025 4.83647 10.8025 10.8025Z" fill="#C8242E"/><path d="M10.8025 10.7811C0.000110408 10.7811 5.96619 10.7811 0.000110602 10.7811C0.000110602 4.81505 0.00110796 21.5837 0.000110602 10.7811C0.000110602 16.7472 0.000108464 10.7811 0 21.5837C5.96608 21.5837 10.8025 16.7472 10.8025 10.7811Z" fill="#E50F1B"/></svg></div>
            
            <div class="bloomlm-popup__title"><?php echo get_sub_field( 'form_title' ); ?></div>
            <div class="bloomlm-popup__description"><?php echo get_sub_field( 'form_description' ); ?></div>
            <div class="bloomlm-popup__form">
                <?php echo get_sub_field( 'contact_form' ); ?>
            </div>
            <div class="bloomlm-popup__description"><?php echo get_sub_field( 'form_policy_text' ); ?></div>
        </div>
    </div>
<?php } ?>