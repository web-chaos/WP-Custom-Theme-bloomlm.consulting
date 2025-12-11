<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bloomlm
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,100..1000&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header id="masthead" class="header">
		<div class="container">
			<div class="header__wrapper">
				<div class="header__logo"><?php the_custom_logo(); ?></div>
				<nav class="nav">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'container'        => '',
							)
						);
					?>
				</nav>
				<div class="header__right">
					<a href="#" class="hamburger"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.33301 16H26.6663M5.33301 8H26.6663M5.33301 24H26.6663" stroke="black" stroke-width="2.66667" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
					<a href="#consultation-popup" data-fancybox class="button btn-red"><?php echo esc_html__( 'консультация', 'bloomlm' ); ?></a>
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-lang',
								'menu_id'        => 'lang-menu',
								'menu_class'	 => 'menu__language',
								'container'        => '',
							)
						);
					?>
				</div>
			</div>
		</div>
	</header>

	<div class="nav-popup">
		<div class="nav-popup__top">
			<div class="nav-popup__logo"><svg width="22" height="32" viewBox="0 0 22 32" fill="none" xmlns="http://www.w3.org/2000/svg"><mask id="mask0_753_3660" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="10" width="22" height="22"><circle cx="10.5987" cy="21.4012" r="10.5987" fill="#4138B1"/></mask><g mask="url(#mask0_753_3660)"><circle cx="21.6053" cy="32.4075" r="10.8025" fill="#C8242E"/><circle cx="21.6053" cy="10.8025" r="10.8025" fill="#E50F1B"/><circle cx="-0.00018692" cy="10.8025" r="10.8025" fill="#DB3F2D"/><circle cx="-0.00018692" cy="32.4075" r="10.8025" fill="#E50F1B"/></g><path d="M10.8025 10.8025C0.000110408 10.8025 5.96619 10.8025 0.000110602 10.8025C0.000110602 16.7686 0.00110796 0 0.000110602 10.8025C0.000110602 4.83647 0.000108464 10.8025 0 0C5.96608 0 10.8025 4.83647 10.8025 10.8025Z" fill="#C8242E"/><path d="M10.8025 10.7811C0.000110408 10.7811 5.96619 10.7811 0.000110602 10.7811C0.000110602 4.81505 0.00110796 21.5837 0.000110602 10.7811C0.000110602 16.7472 0.000108464 10.7811 0 21.5837C5.96608 21.5837 10.8025 16.7472 10.8025 10.7811Z" fill="#E50F1B"/></svg></div>
			<div class="nav-popup__close"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7 8L25 25" stroke="black" stroke-width="2.7" stroke-linecap="round"/><path d="M25 8L7 25" stroke="black" stroke-width="2.7" stroke-linecap="round"/></svg></div>
		</div>
		<nav class="nav-popup__nav nav">
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'container'        => '',
					)
				);
			?>
		</nav>
		<div class="nav-popup__footer">
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-lang',
						'menu_id'        => 'lang-menu',
						'menu_class'	 => 'menu__language',
						'container'        => '',
					)
				);
			?>
			<a href="#consultation-popup" data-fancybox class="button btn-red"><?php echo esc_html__( 'консультация', 'bloomlm' ); ?></a>
		</div>
	</div>
	<div class="overlay"></div>