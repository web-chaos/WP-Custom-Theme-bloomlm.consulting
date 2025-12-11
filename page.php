<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bloomlm
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php if ( get_field( 'show_page_title' ) == 1 || get_field( 'show_breadcrumbs' ) == 1 ) { ?>
			<div class="page-header__wrapper">
				<div class="container">
					<?php
						if ( function_exists('yoast_breadcrumb') && get_field( 'show_breadcrumbs' ) == 1 ) {
							yoast_breadcrumb( '<div id="breadcrumbs" class="breadcrumbs">','</div>' );
						}
					?>
					<?php if ( get_field( 'show_page_title' ) == 1 ) { ?>
						<h1 class="taxonomy-h1">
							<?php the_title(); ?>
							<svg width="89" height="92" viewBox="0 0 89 92" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.8" d="M88.0774 43.2918C44.4653 43.2918 68.5519 43.2918 44.4653 43.2918C44.4653 67.2012 44.4693 -3.91053e-10 44.4653 43.2918C44.4653 19.3824 44.4653 43.2918 44.4648 0C68.5514 -2.10571e-06 88.0774 19.3824 88.0774 43.2918Z" fill="#FF1623"/><path opacity="0.8" d="M0.852257 85.9796C44.4644 85.9796 20.3778 85.9796 44.4644 85.9796C44.4644 109.276 44.4604 43.7978 44.4644 85.9796C44.4644 62.6832 44.4644 85.4675 44.4648 43.2857C20.3783 43.2857 0.852259 62.6832 0.852257 85.9796Z" fill="#FF1623"/><path opacity="0.8" d="M0.852257 42.6875C44.4644 42.6875 20.3778 42.6875 44.4644 42.6875C44.4644 18.7781 44.4604 85.9793 44.4644 42.6875C44.4644 66.5969 44.4644 42.6875 44.4648 85.9793C20.3783 85.9793 0.852259 66.5969 0.852257 42.6875Z" fill="#C71621"/></svg>
						</h1>
					<?php } ?>
				</div>
			</div>
		<?php } ?>

		<?php if ( have_rows( 'flexible_blocks' ) ) {
			while ( have_rows( 'flexible_blocks' ) ) { the_row();
				if ( get_row_layout() == 'new_hero' ) { 
					echo get_template_part( 'template-parts/blocks/new/new_hero' );
				} elseif ( get_row_layout() == 'new_included_in_the_service' ) { 
					echo get_template_part( 'template-parts/blocks/new/new_included_in_the_service' );
				} elseif ( get_row_layout() == 'new_tariff_plans' ) { 
					echo get_template_part( 'template-parts/blocks/new/new_tariff_plans' );
				} elseif ( get_row_layout() == 'new_cases' ) { 
					echo get_template_part( 'template-parts/blocks/new/new_cases' );
				} elseif ( get_row_layout() == 'new_leave_a_request_small' ) { 
					echo get_template_part( 'template-parts/blocks/new/new_leave_a_request_small' );
				} elseif ( get_row_layout() == 'new_leave_a_request_large' ) { 
					echo get_template_part( 'template-parts/blocks/new/new_leave_a_request_large' );
				} elseif ( get_row_layout() == 'new_leave_a_request_black_image' ) { 
					echo get_template_part( 'template-parts/blocks/new/new_leave_a_request_black_image' );
				} elseif ( get_row_layout() == 'new_leave_a_request_black' ) { 
					echo get_template_part( 'template-parts/blocks/new/new_leave_a_request_black' );
				} elseif ( get_row_layout() == 'new_blog' ) { 
					echo get_template_part( 'template-parts/blocks/new/new_blog' );
				} elseif ( get_row_layout() == 'new_faq' ) { 
					echo get_template_part( 'template-parts/blocks/new/new_faq' );
				} elseif ( get_row_layout() == 'new_contact_page_block' ) { 
					echo get_template_part( 'template-parts/blocks/new/new_contact_page_block' );
				} elseif ( get_row_layout() == 'new_technologies_and_tools' ) { 
					echo get_template_part( 'template-parts/blocks/new/new_technologies_and_tools' );
				} elseif ( get_row_layout() == 'new_mlm_business' ) { 
					echo get_template_part( 'template-parts/blocks/new/new_mlm_business' );
				} elseif ( get_row_layout() == 'new_awards' ) { 
					echo get_template_part( 'template-parts/blocks/new/new_awards' );
				} elseif ( get_row_layout() == 'new_user_reviews' ) { 
					echo get_template_part( 'template-parts/blocks/new/new_user_reviews' );
				} elseif ( get_row_layout() == 'new_about_us_content' ) { 
					echo get_template_part( 'template-parts/blocks/new/new_about_us_content' );
				} elseif ( get_row_layout() == 'new_video_block' ) { 
					echo get_template_part( 'template-parts/blocks/new/new_video_block' );
				} elseif ( get_row_layout() == 'new_company_history' ) { 
					echo get_template_part( 'template-parts/blocks/new/new_company_history' );
				} elseif ( get_row_layout() == 'new_team' ) { 
					echo get_template_part( 'template-parts/blocks/new/new_team' );
				} elseif ( get_row_layout() == 'new_chart' ) { 
					echo get_template_part( 'template-parts/blocks/new/new_chart' );
				} elseif ( get_row_layout() == 'new_development_stages' ) { 
					echo get_template_part( 'template-parts/blocks/new/new_development_stages' );
				} elseif ( get_row_layout() == 'new_3_steps_to_start' ) { 
					echo get_template_part( 'template-parts/blocks/new/new_3_steps_to_start' );
				} elseif ( get_row_layout() == 'hero' ) { 
					echo get_template_part( 'template-parts/blocks/hero' );
				} elseif ( get_row_layout() == 'awards' ) {
					echo get_template_part( 'template-parts/blocks/awards' );
				} elseif ( get_row_layout() == 'services' ) {
					echo get_template_part( 'template-parts/blocks/services' );
				} elseif ( get_row_layout() == 'company_advantages' ) {
					echo get_template_part( 'template-parts/blocks/company_advantages' );
				} elseif ( get_row_layout() == 'cases' ) {
					echo get_template_part( 'template-parts/blocks/cases' );
				} elseif ( get_row_layout() == 'leave_a_request' ) {
					echo get_template_part( 'template-parts/blocks/leave_a_request' );
				} elseif ( get_row_layout() == 'importance_of_the_service' ) {
					echo get_template_part( 'template-parts/blocks/importance_of_the_service' );
				} elseif ( get_row_layout() == 'customer_reviews' ) {
					echo get_template_part( 'template-parts/blocks/customer_reviews' );
				} elseif ( get_row_layout() == 'faq' ) {
					echo get_template_part( 'template-parts/blocks/faq' );
				} elseif ( get_row_layout() == 'we_cooperate' ) {
					echo get_template_part( 'template-parts/blocks/we_cooperate' );
				} elseif ( get_row_layout() == 'tariff_plans' ) {
					echo get_template_part( 'template-parts/blocks/tariff_plans' );
				} elseif ( get_row_layout() == 'career_and_income' ) {
					echo get_template_part( 'template-parts/blocks/career_and_income' );
				} elseif ( get_row_layout() == 'workflow' ) {
					echo get_template_part( 'template-parts/blocks/workflow' );
				} elseif ( get_row_layout() == 'automation' ) {
					echo get_template_part( 'template-parts/blocks/automation' );
				}
			}
		} ?>
	</main>

<?php
get_footer();
