<?php 
$full_black = '';
$course_program = '';
?>
<?php $full_black_checked_values = get_sub_field( 'full_black' ); ?>
<?php if ( $full_black_checked_values ) { ?>
    <?php foreach ( $full_black_checked_values as $full_black_value ) { ?>
        <?php $full_black = esc_html( $full_black_value ); ?>
    <?php } ?>
<?php } ?>


<?php $course_program_checked_values = get_sub_field( 'course_program' ); ?>
<?php if ( $course_program_checked_values ) { ?>
    <?php foreach ( $course_program_checked_values as $course_program_value ) { ?>
        <?php $course_program = esc_html( $course_program_value ); ?>
    <?php } ?>
<?php } ?>

<section class="advantages <?php if( $full_black ) echo "full-black"; ?> <?php if( $course_program ) echo "course-program"; ?>">
    <div class="container">
        <div class="advantages__header h2-mb">
            <h2 >
                <?php echo get_sub_field( 'title' ); ?>

                <?php if( $full_black ){ ?>
                    <svg width="99" height="93" viewBox="0 0 99 93" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.8" d="M7.77405e-07 54.5939C34.9996 54.5939 15.6697 54.5939 34.9996 54.5939C34.9996 73.7817 34.9964 19.8513 34.9996 54.5939C34.9996 35.4061 34.9996 54.5939 35 19.8513C15.67 19.8513 2.45486e-06 35.4061 7.77405e-07 54.5939Z" fill="#FF1623"/><path opacity="0.8" d="M70 88.8518C35.0004 88.8518 54.3303 88.8518 35.0004 88.8518C35.0004 107.548 35.0036 55.0001 35.0004 88.8518C35.0004 70.156 35.0004 88.4408 35 54.5891C54.33 54.5891 70 70.156 70 88.8518Z" fill="#FF1623"/><path opacity="0.8" d="M95 5.10875C60.0004 5.10875 79.3303 5.10875 60.0004 5.10875C60.0004 -14.079 60.0036 39.8513 60.0004 5.10875C60.0004 24.2965 60.0004 5.10875 60 39.8513C79.33 39.8513 95 24.2965 95 5.10875Z" fill="#FF1623"/><path opacity="0.8" d="M94.7426 4.85132C94.7426 39.851 94.7426 20.521 94.7426 39.851C113.93 39.851 60 39.8477 94.7426 39.851C75.5548 39.851 94.7426 39.851 60 39.8513C60 20.5214 75.5548 4.85132 94.7426 4.85132Z" fill="#FF1623"/><path opacity="0.8" d="M7.77405e-07 54.1088C34.9996 54.1087 15.6697 54.1088 34.9996 54.1087C34.9996 34.921 34.9964 88.8513 34.9996 54.1087C34.9996 73.2965 34.9996 54.1087 35 88.8513C15.67 88.8513 2.45486e-06 73.2965 7.77405e-07 54.1088Z" fill="#C71621"/></svg>
                <?php } ?>
            </h2>
            <?php if( get_sub_field( 'description' ) && $course_program ){ ?>
                <div class="advantages__description"><?php echo get_sub_field( 'description' ); ?></div>
            <?php } ?>
        </div>
        <?php if ( have_rows( 'advantages' ) ) { ?>
            <div class="advantages__grid">
                <?php while ( have_rows( 'advantages' ) ) { the_row(); ?>
                    <div class="advantages__item">
                        <?php $icon = get_sub_field( 'icon' ); ?>
                        <?php if ( $icon ) { ?>
                            <div class="advantages__item--icon">
                                <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" width="<?php echo esc_attr( $icon['width'] ); ?>" height="<?php echo esc_attr( $icon['height'] ); ?>"/>
                            </div>
                        <?php } ?>
                        <div>
                            <h3 class="advantages__item--title"><?php echo get_sub_field( 'title' ); ?></h3>
                            <div class="advantages__item--description"><?php echo get_sub_field( 'description' ); ?></div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</section>