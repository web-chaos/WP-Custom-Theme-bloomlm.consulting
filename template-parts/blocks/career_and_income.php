<section class="career-income ptb-100">
    <div class="container">
        <h2 class="h2-mb">
            <?php echo get_sub_field( 'title' ); ?>
            <svg width="99" height="93" viewBox="0 0 99 93" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.8" d="M7.77405e-07 54.4525C34.9996 54.4525 15.6697 54.4525 34.9996 54.4525C34.9996 73.6403 34.9964 19.71 34.9996 54.4525C34.9996 35.2647 34.9996 54.4525 35 19.71C15.67 19.71 2.45486e-06 35.2647 7.77405e-07 54.4525Z" fill="#FF1623"/><path opacity="0.8" d="M70 88.7104C35.0004 88.7104 54.3303 88.7104 35.0004 88.7104C35.0004 107.406 35.0036 54.8587 35.0004 88.7104C35.0004 70.0147 35.0004 88.2995 35 54.4478C54.33 54.4478 70 70.0146 70 88.7104Z" fill="#FF1623"/><path opacity="0.8" d="M95 4.96739C60.0004 4.96739 79.3303 4.96739 60.0004 4.96739C60.0004 -14.2204 60.0036 39.71 60.0004 4.96739C60.0004 24.1552 60.0004 4.96739 60 39.71C79.33 39.71 95 24.1552 95 4.96739Z" fill="#FF1623"/><path opacity="0.8" d="M94.7426 4.70996C94.7426 39.7096 94.7426 20.3796 94.7426 39.7096C113.93 39.7096 60 39.7064 94.7426 39.7096C75.5548 39.7096 94.7426 39.7096 60 39.71C60 20.38 75.5548 4.70996 94.7426 4.70996Z" fill="#FF1623"/><path opacity="0.8" d="M7.77405e-07 53.9674C34.9996 53.9674 15.6697 53.9674 34.9996 53.9674C34.9996 34.7796 34.9964 88.71 34.9996 53.9674C34.9996 73.1552 34.9996 53.9674 35 88.71C15.67 88.71 2.45486e-06 73.1552 7.77405e-07 53.9674Z" fill="#C71621"/></svg>
        </h2>

		<?php if ( have_rows( 'list' ) ) { ?>
            <div class="career-income__grid--wrap">
                <svg class="svg-desktop" width="1280" height="2" viewBox="0 0 1280 2" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 1C7.18037 1 856.325 1.00007 1280 1.00011" stroke="url(#paint0_linear_791_4609)" stroke-width="2"/><defs><linearGradient id="paint0_linear_791_4609" x1="-4.37114e-08" y1="1.5" x2="1280" y2="1.50011" gradientUnits="userSpaceOnUse"><stop stop-color="#D7D7D7"/><stop offset="0.693837" stop-color="#DEDEDE" stop-opacity="0.821163"/><stop offset="0.898837" stop-color="#E9E9E9" stop-opacity="0.552953"/><stop offset="1" stop-color="white" stop-opacity="0"/></linearGradient></defs></svg>

                <svg class="svg-mob" width="2" height="1280" viewBox="0 0 2 1280" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 0C1 7.18037 0.999963 856.325 0.999944 1280" stroke="url(#paint0_linear_2115_2810)" stroke-width="2"/><defs><linearGradient id="paint0_linear_2115_2810" x1="0.5" y1="-2.18557e-08" x2="0.499944" y2="1280" gradientUnits="userSpaceOnUse"><stop stop-color="#D7D7D7"/><stop offset="0.693837" stop-color="#DEDEDE" stop-opacity="0.821163"/><stop offset="0.898837" stop-color="#E9E9E9" stop-opacity="0.552953"/><stop offset="1" stop-color="white" stop-opacity="0"/></linearGradient></defs></svg>

                <div class="career-income__grid">
                    <?php $num = 0; while ( have_rows( 'list' ) ) { the_row(); $num++; ?>
                        <div class="career-income__item">
                            <span><?php echo $num; ?></span>
                            <div class="career-income__item--inside"><span><?php echo get_sub_field( 'description' ); ?></span></div>
                        </div>
                    <?php } ?>
                </div>
            </div>
		<?php } ?>
    </div>
</section>


				