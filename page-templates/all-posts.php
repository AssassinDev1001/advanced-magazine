<?php
/*
 * Template Name: All Posts
 *
 * The template for displaying all posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package advancedmagazine
 */

get_header(); ?>

	<div id="primary" class="content-area clear">

		<div id="main" class="site-main clear">

			<div class="breadcrumbs clear">
				
				<h3>
					<?php
						esc_html_e('All Recent Posts ', 'advanced-magazine');
					?>					
				</h3>

			</div><!-- .section-header -->

			<div id="recent-content" class="content-loop">

				<?php

					$temp = $wp_query;
					$wp_query= null;
					$wp_query = new WP_Query();
					$wp_query->query('paged='.$paged);

					if ( have_posts() ) :

					$i = 1;

					while ($wp_query->have_posts()) : $wp_query->the_post();
					
						get_template_part('template-parts/content', 'loop');

						if ( $i == get_theme_mod('content-ad-position', '1')+1 ) {
							dynamic_sidebar( 'content-ad' );
						}
					
						$i++;

					endwhile;

					else :

					get_template_part( 'template-parts/content', 'none' );

				?>

			<?php endif; ?>

			</div><!-- #recent-content -->
			
		</div><!-- #main -->
		<?php

			global $wp_version;

			if ( $wp_version >= 4.1 ) :

				the_posts_pagination( array( 'prev_text' => _x( 'Previous', 'previous post', 'advanced-magazine' ) ) );
			
			endif;

		?>

		<?php $wp_query = null; $wp_query = $temp;?>

	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
