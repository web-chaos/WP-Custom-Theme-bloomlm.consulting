<section class="workflow ptb-100">
    <div class="container">
        <h2 class="h2-mb">
            <?php echo get_sub_field( 'title' ); ?>
            <svg width="71" height="71" viewBox="0 0 71 71" fill="none" xmlns="http://www.w3.org/2000/svg"><mask id="mask0_826_7845" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="71" height="71"><ellipse cx="35.2515" cy="35.2516" rx="35.2515" ry="35.2516" fill="#4138B1"/>
            </mask><g mask="url(#mask0_826_7845)"><ellipse cx="71.8591" cy="71.8583" rx="35.9294" ry="35.9295" fill="#C8242E"/><ellipse cx="71.8591" cy="0.000835419" rx="35.9294" ry="35.9295" fill="#D81D1D"/><ellipse cx="-0.000270844" cy="0.000835419" rx="35.9294" ry="35.9295" fill="#D81D1D"/><ellipse cx="-0.000270844" cy="71.8578" rx="35.9294" ry="35.9295" fill="#D81D1D"/></g></svg>
        </h2>

		<?php if ( have_rows( 'list' ) ) { ?>
        <div class="workflow__grid list-container">
            <?php $workflow = 0; while ( have_rows( 'list' ) ) { the_row(); $workflow++; ?> 
                <div class="workflow__item list-item <?php if( $workflow === 2 ) echo 'opacity'; ?> <?php if( $workflow >= 3 ) echo 'hidden'; ?>">
                    <div class="workflow__title"><?php echo get_sub_field( 'title' ); ?></div>
                    <div class="workflow__count"><span><?php echo $workflow; ?></span></div>
                    <div class="workflow__description"><?php echo get_sub_field( 'description' ); ?></div>
                </div>
            <?php } ?>
        </div>
		<?php } ?>
    </div>
</section>



				