<section class="leave-request-large ptb-100 <?php if ( get_sub_field( 'black_background' ) == 1 ) echo 'black-bg'; ?>">
    <div class="container">
        <div class="leave-request-large__wrapper">
            <h2 class="leave-request-large__title"><?php echo get_sub_field( 'title' ); ?></h2>
            <p><?php echo get_sub_field( 'description' ); ?></p>
            <a href="#leave-request-large" class="button" data-fancybox><?php echo esc_html__( 'Оставить заявку ', 'bloomlm' ); ?></a>
        </div>
    </div>
</section>

<?php if( get_sub_field( 'contact_form' ) ){ ?>
    <div id="leave-request-large" class="bloomlm-popup" style="display: none;">
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