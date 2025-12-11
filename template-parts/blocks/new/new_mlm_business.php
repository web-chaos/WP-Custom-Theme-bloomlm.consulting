<section class="new-mlm-business ptb-100">
    <div class="container">
        <h2 class="h2-mb"><?php echo get_sub_field( 'title' ); ?></h2>
        <?php if ( have_rows( 'list' ) ) { ?>
            <div class="new-mlm-business__wrapper">
                <?php while ( have_rows( 'list' ) ) { the_row(); ?>
                    <div class="new-mlm-business__item">
                       <div class="new-mlm-business__item--front">
                            <div>
                                <div class="new-mlm-business__item--meta">
                                    <div class="new-mlm-business__item--meta-short">
                                        <span><?php echo get_sub_field( 'short_description' ); ?></span>
                                    </div>
                                    <?php $icon = get_sub_field( 'icon' ); ?>
                                    <?php if ( $icon ) { ?>
                                        <div class="new-mlm-business__item--meta-icon">
                                            <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" width="<?php echo esc_attr( $icon['width'] ); ?>" height="<?php echo esc_attr( $icon['height'] ); ?>"/>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="new-mlm-business__item--title"><?php echo get_sub_field( 'title' ); ?></div>
                            </div>
                        </div>
                        <div class="new-mlm-business__item--hover">
                            <div class="new-mlm-business__item--description"><?php echo get_sub_field( 'description' ); ?></div>
                            <?php $link = get_sub_field( 'link' ); ?>
                            <?php if ( $link ) { ?>
                                <a class="new-mlm-business__item--link" href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>">
                                    <?php echo esc_html( $link['title'] ); ?>
                                    <svg width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.2917 19.7081C13.1987 19.6152 13.125 19.5049 13.0747 19.3835C13.0243 19.2621 12.9984 19.132 12.9984 19.0006C12.9984 18.8691 13.0243 18.739 13.0747 18.6176C13.125 18.4962 13.1987 18.3859 13.2917 18.2931L20.5855 11.0006L0.999218 11.0006C0.734001 11.0006 0.479647 10.8952 0.29211 10.7077C0.104574 10.5201 -0.000781985 10.2658 -0.000781973 10.0006C-0.000781962 9.73534 0.104574 9.48098 0.29211 9.29345C0.479647 9.10591 0.734001 9.00055 0.999218 9.00055L20.5855 9.00055L13.2917 1.70806C13.1041 1.52041 12.9987 1.26592 12.9987 1.00056C12.9987 0.735191 13.1041 0.480696 13.2917 0.293055C13.4794 0.105415 13.7339 -4.46771e-07 13.9992 -4.37148e-07C14.2646 -4.27526e-07 14.5191 0.105415 14.7067 0.293056L23.7067 9.29305C23.7997 9.38593 23.8734 9.49622 23.9238 9.61761C23.9741 9.73901 24 9.86914 24 10.0006C24 10.132 23.9741 10.2621 23.9238 10.3835C23.8734 10.5049 23.7997 10.6152 23.7067 10.7081L14.7067 19.7081C14.6138 19.801 14.5036 19.8748 14.3822 19.9251C14.2608 19.9754 14.1306 20.0013 13.9992 20.0013C13.8678 20.0013 13.7377 19.9754 13.6163 19.9251C13.4949 19.8748 13.3846 19.801 13.2917 19.7081Z" fill="white"/></svg>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</section>