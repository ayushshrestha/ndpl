<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shresthabros
 */

?>

	<footer id="colophon" class="site-footer bg-white" data-scroll-section>
		<div class="max-w-screen-xl mx-auto px-4">
			<div class="py-20 md:flex space-y-10 md:space-y-0 md:space-x-10 lg:space-x-20">
				<div>
					<h3 class="text-2xl font-lora font-black pb-4">Reach Us</h3>
					<?php
					$wpFooterOneNavMenu = array(
						'container'     => '',
						'theme_location'=> 'footer-menu-1',
						'items_wrap'        => '<ul>%3$s</ul>',
						'depth'         => 1,
						'fallback_cb'   => false,
						'add_li_class'  => 'hover:gray-300 pb-2 text-sm'
						);
					wp_nav_menu($wpFooterOneNavMenu); ?>

					<?php if( have_rows('social_url') ): ?>
					<?php while( have_rows('social_url') ): the_row(); ?>
					<div class="text-sm text-white/50 space-x-4 flex mt-5">
						<div class=" w-4">
							<a href="<?php the_sub_field('facebook'); ?>" target="_blank" rel="noopener noreferrer">
								<svg xmlns="http://www.w3.org/2000/svg" fill="#000000" viewBox="0 0 24 24"><path d="M14 13.5H16.5L17.5 9.5H14V7.5C14 6.47062 14 5.5 16 5.5H17.5V2.1401C17.1743 2.09685 15.943 2 14.6429 2C11.9284 2 10 3.65686 10 6.69971V9.5H7V13.5H10V22H14V13.5Z"></path></svg>
							</a>
						</div>
						<div class=" w-4">
							<a href="<?php the_sub_field('linkedin'); ?>" target="_blank" rel="noopener noreferrer">
								<svg xmlns="http://www.w3.org/2000/svg" fill="#000000" viewBox="0 0 24 24"><path d="M6.94048 4.99993C6.94011 5.81424 6.44608 6.54702 5.69134 6.85273C4.9366 7.15845 4.07187 6.97605 3.5049 6.39155C2.93793 5.80704 2.78195 4.93715 3.1105 4.19207C3.43906 3.44699 4.18654 2.9755 5.00048 2.99993C6.08155 3.03238 6.94097 3.91837 6.94048 4.99993ZM7.00048 8.47993H3.00048V20.9999H7.00048V8.47993ZM13.3205 8.47993H9.34048V20.9999H13.2805V14.4299C13.2805 10.7699 18.0505 10.4299 18.0505 14.4299V20.9999H22.0005V13.0699C22.0005 6.89993 14.9405 7.12993 13.2805 10.1599L13.3205 8.47993Z"></path></svg>
							</a>
						</div>
					</div>
					<?php endwhile; ?>
					<?php endif; ?>
				</div>
				<div>
					<h3 class="text-2xl font-lora font-black pb-4">About</h3>
					<?php
					$wpFooterTwoNavMenu = array(
						'container'     => '',
						'theme_location'=> 'footer-menu-2',
						'items_wrap'        => '<ul>%3$s</ul>',
						'depth'         => 1,
						'fallback_cb'   => false,
						'add_li_class'  => 'hover:text-gray-300 pb-2 text-sm'
						);
					wp_nav_menu($wpFooterTwoNavMenu); ?>
				</div>
				<div>
					<h3 class="text-2xl font-lora font-black pb-4">Contact Information</h3>
					<div class="sm:grid sm:grid-cols-3 space-y-10 sm:space-y-0 sm:space-x-10 lg:space-x-20">
						<div>
							<div class="text-sm tracking-[0.2em]">ADDRESS</div>
							<p class="text-sm pb-5">
							The Nepal Distilleries Pvt. Ltd. <br/>
							P.O. Box. 45, Balaju<br/>
							Kathmandu, Nepal. </p>
							<div class="text-sm tracking-[0.2em]">EMAIL</div>
							<a href="mailto:info@ndpl.com.np" class="text-sm">info@ndpl.com.np</a>
						</div>
						<div>
							<div class="text-sm tracking-[0.2em]">PHONE</div>
							<p class="text-sm pb-5">+977-1-500000</p>
							<div class="text-sm tracking-[0.2em]">FAX</div>
							<a href="" class="text-sm">+977-1-500000</a>
						</div>
						<div class="w-24"><?php the_custom_logo(); ?></div>
					</div>	
				</div>
			</div>
		</div>
		<div class="site-info text-sm text-gray-500 border-t py-8 text-center flex items-center justify-center space-x-2">
			<a class="hidden" href="<?php echo esc_url( __( 'https://wordpress.org/', 'shresthabros' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( '© 2023 NDPL, All right reserved %s', 'shresthabros' ), 'WordPress' );
				?>
			</a>
			© <?=date("Y")?> <?php bloginfo( 'name' ); ?>, All right reserved 
			<?php
			$wpFooterThreeNavMenu = array(
				'container'     => '',
				'theme_location'=> 'footer-menu-3',
				'items_wrap'        => '<ul class=" flex items-center space-x-2">%3$s</ul>',
				'depth'         => 1,
				'fallback_cb'   => false,
				'add_li_class'  => 'transition text-primary hover:text-gray-300 text-sm'
				);
			wp_nav_menu($wpFooterThreeNavMenu); ?>
			<div class="hidden">
				<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'shresthabros' ), 'shresthabros', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
	$(document).ready(function() {
		$("body,html").animate({
scrollTop: 1
}, 0);
		AOS.init();
		document.addEventListener('aos:in', ({ detail }) => {
			console.dir(detail);
		});
	});
</script>


	<script nomodule src="https://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/7.6.0/polyfill.min.js" crossorigin="anonymous"></script>
<script nomodule src="https://polyfill.io/v3/polyfill.min.js?features=Object.assign%2CElement.prototype.append%2CNodeList.prototype.forEach%2CCustomEvent%2Csmoothscroll" crossorigin="anonymous"></script>
</body>
</html>
