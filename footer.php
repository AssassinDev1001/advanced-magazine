<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package advancedmagazine
 */

?>

	</div><!-- #content .site-content -->
	
	<footer id="colophon" class="site-footer <?php if ( get_theme_mod('footer-style', 'choice-1') == 'choice-1') { echo "footer-light"; } else { echo "footer-dark"; } ?>">

		<?php if ( ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-4' ) ) && get_theme_mod('footer-widgets-on', true) ) { ?>

			<div class="footer-columns container clear">

				<div class="footer-column footer-column-1">
					<?php dynamic_sidebar( 'footer-1' ); ?>
				</div>

				<div class="footer-column footer-column-2">
					<?php dynamic_sidebar( 'footer-2' ); ?>
				</div>

				<div class="footer-column footer-column-3">
					<?php dynamic_sidebar( 'footer-3' ); ?>
				</div>

				<div class="footer-column footer-column-4">
					<?php dynamic_sidebar( 'footer-4' ); ?>
				</div>												

			</div><!-- .footer-columns -->

		<?php } ?>

		<div class="clear"></div>

		<div id="site-bottom" class="container clear">

			<div class="site-info">

				<?php
					$theme_uri = 'https://www.happythemes.com/wordpress-themes/';
					$author_uri = 'https://www.happythemes.com/';
				?>

				&copy; <?php echo date("o"); ?> <a href="<?php echo home_url(); ?>"><?php echo get_bloginfo('name'); ?></a> - <?php echo __('Theme by', 'advanced-magazine'); ?> <a href="<?php echo $author_uri; ?>" target="_blank">HappyThemes</a>

			</div><!-- .site-info -->

		</div><!-- #site-bottom -->
							
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
