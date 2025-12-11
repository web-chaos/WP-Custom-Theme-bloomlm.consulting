<section class="cases">
    <div class="container">
        <div class="cases__header h2-mb">
            <h2 class="cases__title"><?php echo get_sub_field( 'title' ); ?></h2>
            <svg width="136" height="142" viewBox="0 0 136 142" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.8" d="M135.072 67.0397C67.5359 67.0397 104.835 67.0397 67.5359 67.0397C67.5359 104.065 67.5421 -6.05566e-10 67.5359 67.0397C67.5359 30.0147 67.5358 67.0397 67.5352 0C104.834 -3.26081e-06 135.072 30.0147 135.072 67.0397Z" fill="#FF1623"/><path opacity="0.8" d="M-0.00128752 133.144C67.5345 133.144 30.2351 133.144 67.5345 133.144C67.5345 169.22 67.5282 67.8238 67.5345 133.144C67.5345 97.0688 67.5345 132.352 67.5352 67.0308C30.2358 67.0308 -0.00128436 97.0688 -0.00128752 133.144Z" fill="#FF1623"/><path opacity="0.8" d="M0.00261865 66.1039C67.5384 66.1039 30.239 66.1039 67.5384 66.1039C67.5384 29.0788 67.5321 133.144 67.5384 66.1039C67.5384 103.129 67.5384 66.1039 67.5391 133.144C30.2397 133.144 0.00262189 103.129 0.00261865 66.1039Z" fill="#C71621"/></svg>
        </div>
        <?php if ( have_rows( 'cases_list' ) ) { ?>
            <div class="cases__tabs">
                <ul class="cases__tab">
                    <?php while ( have_rows( 'cases_list' ) ) { the_row(); ?>
                        <?php if( get_sub_field( 'title' ) ){ ?>
                            <li class="button tab"><?php echo get_sub_field( 'title' ); ?></li>
                        <?php } ?>
                    <?php } ?>
                </ul>
                <div class="cases__panel--wrapper">
                    <?php while ( have_rows( 'cases_list' ) ) { the_row(); ?>
                        <div class="cases__panel">
                            <?php if ( have_rows( 'caces_section' ) ) { ?>
                                <?php while ( have_rows( 'caces_section' ) ) { the_row(); ?>
                                    <div class="case__panel">
                                        <div class="case__panel--header">
                                            <div class="case__panel--company"><?php echo get_sub_field( 'company' ); ?></div>
                                            <div class="case__panel--percent"><?php echo get_sub_field( 'percent' ); ?></div>
                                        </div>
                                        <div class="case__panel--content"><?php echo get_sub_field( 'description' ); ?></div>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    </div>
</section>