<section class="new-company-history ptb-30">
    <div class="container">
        <h2 class="h2-mb"><?php echo get_sub_field( 'title' ); ?></h2>
        <?php if ( have_rows( 'list' ) ) { ?>
            <div class="new-company-history__grid">
                <?php if ( have_rows( 'list' ) ) {
                    $counter = 0; ?>
                    <div class="new-company-history__group">
                        <?php
                            while ( have_rows( 'list' ) ) {
                            the_row();
                            $counter++;
                        ?>
                            <div class="new-company-history__item">
                                <div class="new-company-history__year"><?php echo get_sub_field( 'year' ); ?></div>
                                <div class="new-company-history__description"><?php echo get_sub_field( 'description' ); ?></div>
                            </div>
                        <?php
                            if ( $counter % 2 == 0 ) {
                        ?>
                            </div>
                            <div class="new-company-history__group">
                        <?php } } ?>
                    </div>
                <?php } ?>

            </div>
        <?php } ?>
    </div>
</section>