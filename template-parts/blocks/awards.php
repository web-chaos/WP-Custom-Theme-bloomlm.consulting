<section class="awards">
    <div class="container">
        <div class="awards__wrapper">
            <?php $subtitle = get_sub_field( 'subtitle' ); ?>
            <?php if( get_sub_field( 'title' ) ){ ?>
                <h2 class="awards__title h2-mb">
                    <?php echo get_sub_field( 'title' ); ?>
                    <?php if( get_sub_field( 'subtitle' ) ){ ?>
                        <span><?php echo get_sub_field( 'subtitle' ); ?></span>
                    <?php } ?>
                </h2>
            <?php } ?>
            <?php if ( have_rows( 'columns' ) ) { ?>
                <div class="awards__grid <?php echo $subtitle ? 'grid-one' : ''; ?>">
                    <?php while ( have_rows( 'columns' ) ) { the_row(); ?>
                        <div class="awards__grid--item">
                            <?php if( get_sub_field( 'title' ) ){ ?>
                                <h3 class="awards__grid--title <?php echo $subtitle ? 'h3-32' : ''; ?>"><?php echo get_sub_field( 'title' ); ?></h3>
                            <?php } ?>
                            <?php if( get_sub_field( 'description' ) ){ ?>
                                <div class="awards__grid--description"><?php echo get_sub_field( 'description' ); ?></div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
			<?php } ?>
        </div>
    </div>
</section>


			