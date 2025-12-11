<section class="automation ptb-100">
    <div class="container">
        <h2 class="h2-mb">
            <?php echo get_sub_field( 'title' ); ?>
            <svg width="142" height="226" viewBox="0 0 142 226" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.8" d="M-3.66464e-05 148.802C70.6243 148.802 31.6192 148.802 70.6243 148.802C70.6243 187.52 70.6178 78.6965 70.6243 148.802C70.6243 110.084 70.6243 148.802 70.625 78.6965C31.6199 78.6965 -3.32615e-05 110.084 -3.66464e-05 148.802Z" fill="#FF1623"/><path opacity="0.8" d="M141.25 217.409C70.6257 217.409 109.631 217.409 70.6257 217.409C70.6257 256.127 70.6322 147.303 70.6257 217.409C70.6257 178.691 70.6257 217.409 70.625 147.303C109.63 147.303 141.25 178.691 141.25 217.409Z" fill="#C71621"/><path opacity="0.8" d="M-3.66464e-05 8.59095C70.6243 8.59094 31.6192 8.59095 70.6243 8.59094C70.6243 -30.1273 70.6178 78.6965 70.6243 8.59094C70.6243 47.3092 70.6243 8.59094 70.625 78.6965C31.6199 78.6965 -3.32615e-05 47.3092 -3.66464e-05 8.59095Z" fill="#C71621"/></svg>
        </h2>

        <div class="automation__grid">
            <ul class="automation__column">
                <h3><?php echo get_sub_field( 'included_title' ); ?></h3>
                <?php if ( have_rows( 'included' ) ) { ?>
                    <?php $count = 0; while ( have_rows( 'included' ) ) { the_row(); $count++;?>
                        <li>
                            <span><?php echo $count; ?></span>
                            <p><?php echo get_sub_field( 'description' ); ?></p>
                        </li>
                    <?php } ?>
                <?php } ?>
            </ul>
            <ul class="automation__column">
                <h3><?php echo get_sub_field( 'not_included_title' ); ?></h3>
                <?php if ( have_rows( 'not_included' ) ) { ?>
                    <?php $count = 0; while ( have_rows( 'not_included' ) ) { the_row(); $count++;?>
                        <li>
                            <span><?php echo $count; ?></span>
                            <p><?php echo get_sub_field( 'description' ); ?></p>
                        </li>
                    <?php } ?>
                <?php } ?>
            </ul>
        </div>
    </div>
</section>