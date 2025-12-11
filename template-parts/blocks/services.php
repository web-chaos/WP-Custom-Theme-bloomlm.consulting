<section class="services">
    <div class="container">
        <div class="services__wrapper">
            <div class="services__header">
                <h2 class="services__title"><?php echo get_sub_field( 'title' ); ?></h2>
                <svg width="81" height="55" viewBox="0 0 81 55" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.5 39.5H0.5V41.5H2.5V39.5ZM79.9142 40.9142C80.6953 40.1332 80.6953 38.8668 79.9142 38.0858L67.1863 25.3579C66.4052 24.5768 65.1389 24.5768 64.3579 25.3579C63.5768 26.1389 63.5768 27.4052 64.3579 28.1863L75.6716 39.5L64.3579 50.8137C63.5768 51.5948 63.5768 52.8611 64.3579 53.6421C65.1389 54.4232 66.4052 54.4232 67.1863 53.6421L79.9142 40.9142ZM0.5 0V39.5H4.5V0H0.5ZM2.5 41.5H78.5V37.5H2.5V41.5Z" fill="#D81D1D"/></svg>
            </div>

            <?php if ( have_rows( 'section' ) ) { ?>
                <?php $count = 0;  while ( have_rows( 'section' ) ) { the_row(); $count++; ?>
                    <?php if( $count > 1 ) echo "<div class='services__item--row'>"; ?>
                    <div class="services__item">
                        <div class="services__item--title"><span><?php echo ($count < 10) ? '0' . $count : $count; ?></span> <?php echo get_sub_field( 'title' ); ?></div>
                        <div class="services__item--footer">
                            <div class="services__item--description"><?php echo get_sub_field( 'description' ); ?></div>
                            <?php $icon = get_sub_field( 'icon' ); ?>
                            <?php if ( $icon ) { ?>
                                <div class="services__item--icon">
                                    <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" width="<?php echo esc_attr ( $icon['height'] ); ?>" width="<?php echo esc_attr ( $icon['height'] ); ?>"/>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php if( $count > 1 ) echo "</div>"; ?>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</section>


