<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shresthabros
 */

?>
<!doctype html>
<html  class="is-smooth-scroll-compatible is-loading" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css2?family=Lora&family=Roboto:wght@100;300;400;900&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class('bg-gray-50'); ?> id="js-scroll" data-scroll-container>
	<?php wp_body_open(); ?>
	<div id="page" class="site text-gray-700 bg-gray-50">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'shresthabros' ); ?></a>

		<header id="masthead" class="bg-white fixed top-0 z-20 w-full">
			<nav class="max-w-screen-xl mx-auto flex items-center justify-between py-3 px-4" aria-label="Global">
				<div class="flex">
					<div class="site-branding">
						<?php
						the_custom_logo();
						if ( is_front_page() && is_home() ) :
							?>
							<h1 class="site-title sr-only"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
						else :
							?>
							<p class="site-title sr-only"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php
						endif;
						$shresthabros_description = get_bloginfo( 'description', 'display' );
						if ( $shresthabros_description || is_customize_preview() ) :
							?>
							<p class="site-description"><?php echo $shresthabros_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
						<?php endif; ?>
					</div><!-- .site-branding -->
				</div>
				<div class="flex">
					<div class="hidden lg:flex lg:gap-x-12">
						<?php
							// wp_nav_menu(
							// 	array(
							// 		'theme_location' => 'menu-1',
							// 		'menu_id'        => 'primary-menu',
							// 	)
							// );

							$wpNavMenu = array(
								'container'     => '',
								'theme_location'=> 'primary-menu',
								'items_wrap'        => '<ul class="flex">%3$s</ul>',
								'depth'         => 1,
								'fallback_cb'   => false,
								'add_li_class'  => 'hover:text-primary transition px-3 py-2 text-sm tracking-widest uppercase'
								);
							wp_nav_menu($wpNavMenu);
						?>

						
					</div>
				</div>
				<div class="ms-5 flex gap-3">
					<?php get_search_form(); ?>	
					<?php if (is_admin_logged_in()): ?>

					<a href="">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
					</a>
					<?php endif; ?>

					<a href="<?php echo get_site_url();?>/contact-us">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
						<path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
						<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
						</svg>
					</a>

					<div class="flex lg:hidden">
						<button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700" onclick="openMenu('menu')">
							<span class="sr-only">Open main menu</span>
							<svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
							<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
							</svg>
						</button>
					</div>
				</div>
			</nav>
			<div class="menu hidden lg:hidden" role="dialog" aria-modal="true" id="menu" >
				<div class="fixed inset-0 z-10 bg-secondary/90 transition-opacity transition-all duration-300 ease-in-out "></div>
				<div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm transition-opacity transition-all duration-300 ease-in-out ">
					<div class="flex items-center justify-between">
						<div class="site-branding">
							<?php
							the_custom_logo();
							if ( is_front_page() && is_home() ) :
								?>
								<h1 class="site-title sr-only"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								<?php
							else :
								?>
								<p class="site-title sr-only"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
								<?php
							endif;
							$shresthabros_description = get_bloginfo( 'description', 'display' );
							if ( $shresthabros_description || is_customize_preview() ) :
								?>
								<p class="site-description"><?php echo $shresthabros_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
							<?php endif; ?>
						</div><!-- .site-branding -->
						<button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" onclick="closeMenu('menu')">
							<span class="sr-only">Close menu</span>
							<svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
								<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
							</svg>
						</button>
					</div>
					<div class="mt-6 flow-root">
						<div class="-my-6 divide-y divide-gray-500/10">
							<div class="space-y-2 py-3">
							<?php
								$wpNavMenu = array(
									'container'     => '',
									'theme_location'=> 'primary-menu',
									'items_wrap'        => '<ul>%3$s</ul>',
									'depth'         => 1,
									'fallback_cb'   => false,
									'add_li_class'  => 'hover:text-primary transition py-2 tracking-widest uppercase'
									);
								wp_nav_menu($wpNavMenu);
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header><!-- #masthead -->

		
