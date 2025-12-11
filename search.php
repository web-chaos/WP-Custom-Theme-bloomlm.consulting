<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
			<h1 class="taxonomy-h1">
				<?php printf( esc_html__( 'Results: %s', 'bloomlm' ), '<span>' . get_search_query() . '</span>' ); ?>
				
				<svg width="89" height="92" viewBox="0 0 89 92" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.8" d="M88.0774 43.2918C44.4653 43.2918 68.5519 43.2918 44.4653 43.2918C44.4653 67.2012 44.4693 -3.91053e-10 44.4653 43.2918C44.4653 19.3824 44.4653 43.2918 44.4648 0C68.5514 -2.10571e-06 88.0774 19.3824 88.0774 43.2918Z" fill="#FF1623"/><path opacity="0.8" d="M0.852257 85.9796C44.4644 85.9796 20.3778 85.9796 44.4644 85.9796C44.4644 109.276 44.4604 43.7978 44.4644 85.9796C44.4644 62.6832 44.4644 85.4675 44.4648 43.2857C20.3783 43.2857 0.852259 62.6832 0.852257 85.9796Z" fill="#FF1623"/><path opacity="0.8" d="M0.852257 42.6875C44.4644 42.6875 20.3778 42.6875 44.4644 42.6875C44.4644 18.7781 44.4604 85.9793 44.4644 42.6875C44.4644 66.5969 44.4644 42.6875 44.4648 85.9793C20.3783 85.9793 0.852259 66.5969 0.852257 42.6875Z" fill="#C71621"/></svg>
			</h1>

			<?php get_search_form(); ?>

			<div class="single__wrapper">
				<div class="single__column">
					<?php if ( have_posts() ) : ?>
						<?php
						while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/content', 'blog' );

						endwhile;

						$pagination_args = array(
							'prev_text' => '‹',
							'next_text' => '›',
						);

						echo '<nav class="pagination">';
						echo paginate_links($pagination_args);
						echo '</nav>';

					else :
						get_template_part( 'template-parts/content', 'none' );
					endif;
					?>
				</div>
				<aside class="single__aside">
					<?php 
						$tags = get_terms( array(
							'taxonomy' => 'post_tag',
							'hide_empty' => false,
						) );
						if ( $tags ) { ?>
						<div class="post-tags">
							<?php foreach ( $tags as $tag ) { ?>
								<a href="<?php echo esc_url( get_term_link( $tag->term_id ) ); ?>"><?php echo esc_html( $tag->name ); ?></a>
							<?php } ?>
						</div>
					<?php } ?>
				</aside>
			</div>
		</div>
	</main>

<?php
get_footer();
