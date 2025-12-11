<?php $description = get_sub_field( 'description' ); ?>
<section class="importance_service <?php //echo $description ? '' : 'no-description'; ?>">
    <div class="container">
        <div class="importance_service__header h2-mb">
            <h2>
                <?php echo get_sub_field( 'title' ); ?>
            </h2>

            <?php if( get_sub_field( 'description' ) ){ ?>
                <p><?php echo get_sub_field( 'description' ); ?></p>
            <?php } ?>
        </div>
        <?php if ( have_rows( 'lists' ) ) { ?>
            <div class="importance_service__grid">
                <?php $count = 0; while ( have_rows( 'lists' ) ) { the_row(); $count++; ?>
                    <div class="importance_service__item">
                        <div class="importance_service__item--count"><?php echo $count; ?></div>
                        <div class="importance_service__item--description"><?php echo get_sub_field( 'description' ); ?></div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</section>



