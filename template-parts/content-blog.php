<article class="new-blog__item">
	<div class="new-blog__item--image">
		<span><?php echo get_reading_time_from_flexible(); ?></span>
		<?php
			$thumbnail_id = get_post_thumbnail_id();
			if ($thumbnail_id) {
				$image_url = wp_get_attachment_url($thumbnail_id);
				$image_meta = wp_get_attachment_metadata($thumbnail_id);
			}
		?>
		<?php if (!empty($image_url) && !empty($image_meta)) { ?>
			<img src="<?php echo esc_url($image_url); ?>" alt="<?php echo $image_meta['alt']; ?>" width="<?php echo $image_meta['width']; ?>" height="<?php  echo$image_meta['height']; ?>">
		<?php } ?>
	</div>
	<div class="new-blog__item--meta">
		<span><?php echo get_the_author_meta('first_name') . ' ' . get_the_author_meta('last_name'); ?></span>
		<date><?php echo get_the_date( 'j.m.Y' ); ?></date>
	</div>
	<a class="new-blog__item--title" href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
	<p>
		<?php 
			while ( have_rows( 'flexible_blocks' ) && the_row() ){
					if ( get_row_layout() == 'new_content' && get_sub_field( 'show_short_description' ) == 1 && $desc = get_sub_field( 'short_description' ) ) { 
						echo wp_trim_words( $desc, 12, '...' );
						break;
				}
			}
		?>
	</p>
	<a class="new-blog__item--more" href="<?php the_permalink(); ?>">
		<?php echo esc_html__( 'Подробнее', 'bloomlm' ); ?>
		<svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.0767 15.7654C10.9992 15.6911 10.9378 15.6029 10.8958 15.5058C10.8539 15.4086 10.8323 15.3046 10.8323 15.1994C10.8323 15.0943 10.8539 14.9902 10.8958 14.8931C10.9378 14.796 10.9992 14.7078 11.0767 14.6335L17.1546 8.79985L0.833306 8.79985C0.6123 8.79985 0.400345 8.71557 0.244069 8.56556C0.0877942 8.41554 -5.97379e-07 8.21207 -5.88105e-07 7.99991C-5.78831e-07 7.78775 0.0877942 7.58428 0.244069 7.43426C0.400345 7.28424 0.6123 7.19996 0.833307 7.19996L17.1546 7.19996L11.0767 1.36635C10.9204 1.21625 10.8325 1.01267 10.8325 0.800391C10.8325 0.588114 10.9204 0.384531 11.0767 0.234429C11.2331 0.0843262 11.4452 -3.72363e-07 11.6663 -3.64278e-07C11.8874 -3.56194e-07 12.0995 0.0843263 12.2558 0.234429L19.7556 7.43395C19.8331 7.50824 19.8945 7.59646 19.9365 7.69358C19.9784 7.79069 20 7.89478 20 7.99991C20 8.10503 19.9784 8.20913 19.9365 8.30624C19.8945 8.40335 19.8331 8.49158 19.7556 8.56587L12.2558 15.7654C12.1785 15.8398 12.0866 15.8988 11.9854 15.939C11.8842 15.9793 11.7758 16 11.6663 16C11.5568 16 11.4483 15.9793 11.3472 15.939C11.246 15.8988 11.1541 15.8398 11.0767 15.7654Z" fill="#CE4545"/></svg>
	</a>
</article>
