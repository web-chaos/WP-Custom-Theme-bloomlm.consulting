<section class="tariff-plans ptb-100">
    <div class="container">
        <h2 class="h2-mb">
            <?php echo get_sub_field( 'title' ); ?>
            <svg width="113" height="70" viewBox="0 0 113 70" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.8" d="M38.7574 -7.41241e-07C38.7574 34.9996 38.7574 15.6697 38.7574 34.9996C19.5696 34.9996 73.5 34.9964 38.7574 34.9996C57.9452 34.9996 38.7574 34.9996 73.5 35C73.5 15.67 57.9452 1.77493e-06 38.7574 -7.41241e-07Z" fill="#FF1623"/><path opacity="0.8" d="M4.75743 70C4.75743 35.0004 4.75743 54.3303 4.75743 35.0004C-14.4304 35.0004 39.5 35.0036 4.75743 35.0004C23.9452 35.0004 4.75743 35.0004 39.5 35C39.5 54.33 23.9452 70 4.75743 70Z" fill="#C71621"/><path opacity="0.8" d="M108.243 2.29605e-06C108.243 34.9996 108.243 15.6697 108.243 34.9996C127.43 34.9996 73.5 34.9964 108.243 34.9996C89.0548 34.9996 108.243 34.9996 73.5 35C73.5 15.67 89.0548 3.13478e-06 108.243 2.29605e-06Z" fill="#C71621"/></svg>
        </h2>
        <?php if ( have_rows( 'plans' ) ) { ?>
            <div class="tariff-plans__slider swiper">
                <div class="swiper-wrapper">
                    <?php $countForm = 0; while ( have_rows( 'plans' ) ) { the_row(); $countForm++; ?>
                        <div class="swiper-slide">
                            <div class="plan">
                                <div class="plan__wrapper">
                                    <div class="plan__name"><?php echo get_sub_field( 'name' ); ?></div>
                                    <?php if( get_sub_field( 'price' ) ){ ?>
                                        <div class="plan__price--wrapper">
                                            <?php if( get_sub_field( 'price_text' ) ){ ?>
                                                <span><?php echo get_sub_field( 'price_text' ); ?></span>
                                            <?php } ?>
                                            <strong><?php echo get_sub_field( 'price' ); ?></strong>
                                        </div>
                                    <?php } ?>
                                    <?php if( get_sub_field( 'description' ) ){ ?>
                                        <div class="plan__description"><?php echo get_sub_field( 'description' ); ?></div>
                                    <?php } ?>
                                    <?php if ( have_rows( 'list' ) ) { ?>
                                        <ul>
                                            <?php while ( have_rows( 'list' ) ) { the_row(); ?>
                                                <li>
                                                    <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M19.8977 10.2184C20.1888 10.5096 20.1888 10.9816 19.8977 11.2728L12.628 18.5424C12.3369 18.8336 11.8648 18.8336 11.5736 18.5424L8.21838 15.1872C7.92721 14.8961 7.92721 14.424 8.21838 14.1328C8.50956 13.8416 8.98165 13.8416 9.27282 14.1328L12.1008 16.9608L18.8432 10.2184C19.1344 9.92721 19.6065 9.92721 19.8977 10.2184Z" fill="#1A1A1A"/><path fill-rule="evenodd" clip-rule="evenodd" d="M14.315 27.74C21.7294 27.74 27.74 21.7294 27.74 14.315C27.74 6.90058 21.7294 0.89 14.315 0.89C6.90058 0.89 0.89 6.90058 0.89 14.315C0.89 21.7294 6.90058 27.74 14.315 27.74ZM14.315 28.63C22.221 28.63 28.63 22.221 28.63 14.315C28.63 6.40904 22.221 0 14.315 0C6.40904 0 0 6.40904 0 14.315C0 22.221 6.40904 28.63 14.315 28.63Z" fill="#1A1A1A"/></svg>
                                                    <span><?php echo get_sub_field( 'description' ); ?></span>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    <?php } ?>
                                </div>
                                <?php if( get_sub_field( 'form' ) ){ ?>
                                    <a href="#plan-popup<?php echo $countForm; ?>" class="button btn-red" data-fancybox><?php echo esc_html__( 'Выбрать', 'bloomlm' ); ?></a>
                                    
                                    <div id="plan-popup<?php echo $countForm; ?>" class="bloomlm-popup" style="display: none;">
                                        <div class="bloomlm-popup__wrapper">
                                            <div class="bloomlm-popup__top"><svg width="22" height="32" viewBox="0 0 22 32" fill="none" xmlns="http://www.w3.org/2000/svg"><mask id="mask0_816_2549" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="10" width="22" height="22"><circle cx="10.5987" cy="21.4012" r="10.5987" fill="#4138B1"/></mask><g mask="url(#mask0_816_2549)"><circle cx="21.6053" cy="32.4075" r="10.8025" fill="#C8242E"/><circle cx="21.6053" cy="10.8025" r="10.8025" fill="#E50F1B"/><circle cx="-0.00018692" cy="10.8025" r="10.8025" fill="#DB3F2D"/><circle cx="-0.00018692" cy="32.4075" r="10.8025" fill="#E50F1B"/></g><path d="M10.8025 10.8025C0.000110408 10.8025 5.96619 10.8025 0.000110602 10.8025C0.000110602 16.7686 0.00110796 0 0.000110602 10.8025C0.000110602 4.83647 0.000108464 10.8025 0 0C5.96608 0 10.8025 4.83647 10.8025 10.8025Z" fill="#C8242E"/><path d="M10.8025 10.7811C0.000110408 10.7811 5.96619 10.7811 0.000110602 10.7811C0.000110602 4.81505 0.00110796 21.5837 0.000110602 10.7811C0.000110602 16.7472 0.000108464 10.7811 0 21.5837C5.96608 21.5837 10.8025 16.7472 10.8025 10.7811Z" fill="#E50F1B"/></svg></div>
                                            
                                            <div class="bloomlm-popup__title"><?php echo get_sub_field( 'form_title' ); ?></div>
                                            <div class="bloomlm-popup__description"><?php echo get_sub_field( 'form_description' ); ?></div>
                                            <div class="bloomlm-popup__form">
                                                <?php echo get_sub_field( 'form' ); ?>
                                            </div>
                                            <div class="bloomlm-popup__description"><?php echo get_sub_field( 'form_policy' ); ?></div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    </div>
</section>


