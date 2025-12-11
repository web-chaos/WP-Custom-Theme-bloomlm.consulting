<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bloomlm
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="container">
			<?php
				if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '<div id="breadcrumbs" class="breadcrumbs">','</div>' );
				}
			?>
		</div>
	<div class="single-post__wrapper">
		<section class="new-content">
			<div class="container">
				<div class="new-content__wrapper">
					<div class="new-content__short">
						<h1><?php the_title(); ?></h1>
						<?php echo get_field( 'short_description' ); ?>
						<div class="new-cases__item--columns">
							<?php if ( have_rows( 'column_1' ) ) { ?>
								<div class="new-cases__item--column new-cases__item--column--1">
									<?php while ( have_rows( 'column_1' ) ) { the_row(); ?>
										<strong><?php echo get_sub_field( 'percent' ); ?></strong>
										<p><?php echo get_sub_field( 'description' ); ?></p>
									<?php } ?>
								</div>
							<?php } ?>
							<?php if ( have_rows( 'column_2' ) ) { ?>
								<div class="new-cases__item--column new-cases__item--column--2">
									<?php while ( have_rows( 'column_2' ) ) { the_row(); ?>
										<strong><?php echo get_sub_field( 'percent' ); ?></strong>
										<p><?php echo get_sub_field( 'description' ); ?></p>
									<?php } ?>
								</div>
							<?php } ?>
						</div>
					</div>
					<div class="new-content__image">
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
				</div>
				<div class="new-content__content"><?php echo get_field( 'content' ); ?></div>
			</div>
		</section>

		<?php
			$current_post = get_queried_object();
			$prev_post = get_previous_post();

			if (!$prev_post) {

				$prev_post = get_posts([
					'posts_per_page' => 1,
					'orderby'        => 'date',
					'order'          => 'DESC',
					'post_type'      => $current_post->post_type,
					'post_status'    => 'publish',
				]);
				$prev_post = $prev_post ? $prev_post[0] : null;
			}

			$next_post = get_next_post();
			if (!$next_post) {
				$next_post = get_posts([
					'posts_per_page' => 1,
					'orderby'        => 'date',
					'order'          => 'ASC',
					'post_type'      => $current_post->post_type,
					'post_status'    => 'publish',
				]);
				$next_post = $next_post ? $next_post[0] : null;
			}
			?>

			<div class="container">
				<nav class="post-navigation">
					<?php if ($prev_post) { ?>
						<a class="post-navigation__prev" href="<?php echo get_permalink($prev_post->ID); ?>" rel="prev">
							<svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="-0.5" y="0.5" width="44" height="44" rx="22" transform="matrix(-1 0 0 1 44 0)" fill="white"/><rect x="-0.5" y="0.5" width="44" height="44" rx="22" transform="matrix(-1 0 0 1 44 0)" stroke="black"/><path d="M24.4688 16.9694L19.4688 21.9694C19.3989 22.0391 19.3434 22.1219 19.3055 22.213C19.2677 22.3042 19.2482 22.4019 19.2482 22.5007C19.2482 22.5994 19.2677 22.6971 19.3055 22.7883C19.3434 22.8794 19.3989 22.9622 19.4688 23.0319L24.4688 28.0319C24.6097 28.1728 24.8008 28.252 25 28.252C25.1993 28.252 25.3904 28.1728 25.5313 28.0319C25.6722 27.891 25.7513 27.6999 25.7513 27.5007C25.7513 27.3014 25.6722 27.1103 25.5313 26.9694L21.0619 22.5L25.5319 18.0307C25.6728 17.8898 25.752 17.6987 25.752 17.4994C25.752 17.3001 25.6728 17.109 25.5319 16.9682C25.391 16.8273 25.1999 16.7481 25.0007 16.7481C24.8014 16.7481 24.6103 16.8273 24.4694 16.9682L24.4688 16.9694Z" fill="#1A1A1A"/></svg>
							<span><?php echo get_the_title($prev_post->ID); ?></span>
						</a>
					<?php } ?>

					<?php if ($next_post) { ?>
							<a class="post-navigation__next" href="<?php echo get_permalink($next_post->ID); ?>" rel="next">
							<span><?php echo get_the_title($next_post->ID); ?></span>
							<svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="0.5" y="0.5" width="44" height="44" rx="22" fill="white"/><rect x="0.5" y="0.5" width="44" height="44" rx="22" stroke="black"/><path d="M20.5312 16.9694L25.5312 21.9694C25.6011 22.0391 25.6566 22.1219 25.6945 22.213C25.7323 22.3042 25.7518 22.4019 25.7518 22.5007C25.7518 22.5994 25.7323 22.6971 25.6945 22.7883C25.6566 22.8794 25.6011 22.9622 25.5312 23.0319L20.5312 28.0319C20.3903 28.1728 20.1992 28.252 20 28.252C19.8007 28.252 19.6096 28.1728 19.4687 28.0319C19.3278 27.891 19.2487 27.6999 19.2487 27.5007C19.2487 27.3014 19.3278 27.1103 19.4687 26.9694L23.9381 22.5L19.4681 18.0307C19.3272 17.8898 19.248 17.6987 19.248 17.4994C19.248 17.3001 19.3272 17.109 19.4681 16.9682C19.609 16.8273 19.8001 16.7481 19.9993 16.7481C20.1986 16.7481 20.3897 16.8273 20.5306 16.9682L20.5312 16.9694Z" fill="#1A1A1A"/></svg>
						</a>
					<?php } ?>
				</nav>
			</div>
		</div>
	</main>

<?php
get_footer();
