<section class="cooperate ptb-100">
    <div class="container">
        <div class="cooperate__header h2-mb">
            <h2><?php echo get_sub_field( 'title' ); ?></h2>
            <?php if( get_sub_field( 'description' ) ){ ?>
                <div class="cooperate__description"><?php echo get_sub_field( 'description' ); ?></div>
            <?php } ?>
        </div>
        <?php if ( have_rows( 'list' ) ) { ?>
            <div class="cooperate__grid">
                <?php while ( have_rows( 'list' ) ) { the_row(); ?>
                    <div class="cooperate__item">
                        <div class="cooperate__item--title">
                            <?php echo get_sub_field( 'title' ); ?>
                            <svg width="27" height="40" viewBox="0 0 27 40" fill="none" xmlns="http://www.w3.org/2000/svg"><mask id="mask0_807_8090" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="13" width="27" height="27"><ellipse cx="13.2485" cy="26.7514" rx="13.2485" ry="13.2485" fill="#4138B1"/></mask><g mask="url(#mask0_807_8090)"><ellipse cx="27.0071" cy="40.5091" rx="13.5032" ry="13.5033" fill="#C8242E"/><ellipse cx="27.0071" cy="13.5033" rx="13.5032" ry="13.5033" fill="#D81D1D"/><ellipse cx="-0.000664711" cy="13.5033" rx="13.5032" ry="13.5033" fill="#D81D1D"/><ellipse cx="-0.000664711" cy="40.5091" rx="13.5032" ry="13.5033" fill="#D81D1D"/></g><path d="M13.5032 13.5033C0.00013801 13.5033 7.45777 13.5033 0.000138253 13.5033C0.000138253 20.9609 0.00138496 0 0.000138253 13.5033C0.000138253 6.04563 0.00013558 13.5033 0 0C7.45763 0 13.5032 6.04563 13.5032 13.5033Z" fill="#C8242E"/><path d="M13.5032 13.4762C0.00013801 13.4762 7.45777 13.4762 0.000138253 13.4762C0.000138253 6.01854 0.00138496 26.9795 0.000138253 13.4762C0.000138253 20.9339 0.00013558 13.4762 0 26.9795C7.45763 26.9795 13.5032 20.9339 13.5032 13.4762Z" fill="#D81D1D"/></svg>
                        </div>
                        <div class="cooperate__item--description"><?php echo get_sub_field( 'description' ); ?></div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</section>