<div class="column-one">

	<div class="featured-content">

	<?php		

		$args = array(
		'post_type'      => 'post',
		'posts_per_page' => 6,
	    'meta_query' => array(
	        array(
	            'key'   => 'is_featured',
	            'value' => 'true'
	        	)
	    	)				
		);

		// The Query
		$the_query = new WP_Query( $args );

		if ( $the_query->have_posts() && (!get_query_var('paged')) ) {	

	?>
		
		<ul class="bxslider">			

		<?php
			while ( $the_query->have_posts() ) : $the_query->the_post();
		?>	


		<li class="featured-slide hentry">

				<a class="thumbnail-link" href="<?php the_permalink(); ?>">

					<span class="gradient"></span>
					
					<div class="thumbnail-wrap">
						<?php 
						if ( has_post_thumbnail() && ( get_the_post_thumbnail() != null ) ) {
							the_post_thumbnail('featured_large_thumb');  
						} else {
							echo '<img src="' . get_template_directory_uri() . '/assets/img/no-featured.png" alt="" />';
						}
						?>
					</div><!-- .thumbnail-wrap -->
				</a>

			<div class="entry-header clear">
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			</div><!-- .entry-header -->

		</li><!-- .featured-slide .hentry -->


		<?php
			endwhile;
		?>

		</ul><!-- .bxslider -->

		<div class="my-pager clear">
			<?php
				$i = 0;
				while ( $the_query->have_posts() ) : $the_query->the_post();
			?>	

			<a data-slide-index=<?php echo $i; ?> href="" class="<?php echo( $the_query->current_post + 1 === $the_query->post_count ) ? 'last' : ''; ?>">
				<span class="arrow-up"></span>						
				<?php 
					if ( has_post_thumbnail() && ( get_the_post_thumbnail() != null ) ) {
						the_post_thumbnail('small_thumb');  
					} else {
						echo '<img src="' . get_template_directory_uri() . '/assets/img/no-featured.png" alt="" />';
					}
				?>
			</a>
			<?php
				$i++;
				endwhile;
			?>			
		</div>

		<?php
			} elseif  ( !$the_query->have_posts() && (!get_query_var('paged')) ) { // else has no featured posts
		?>
			<div class="notice">
				<p><?php echo __('Please edit posts and set "Featured Posts" for this section.', 'advanced-magazine'); ?></p>
				<p><a href="<?php echo home_url(); ?>/wp-admin/edit.php"><?php echo __('Okay, I\'m doing now &raquo;', 'advanced-magazine'); ?></a> | <a href="<?php echo get_template_directory_uri(); ?>/assets/img/how-to-featured.png" target="_blank"><?php echo __('How To &raquo;', 'advanced-magazine'); ?></a></p>
			</div>

		<?php
			} //end if has featured posts
			wp_reset_postdata();				
		?>

		</div><!-- .featured-content -->

		<div class="category-block below-featured">

			<h3 class="section-heading">
				<?php
					if ( $cat_id == 0 ) {
						echo __( 'Latest Posts', 'advanced-magazine' );
					} else {
						echo '<a href="' . esc_url( $cat_link ) . '">' . esc_attr( $category->name ) . '</a>';
					}
				?>				
			</h3>

			<?php
				while ( $posts->have_posts() ) : $posts->the_post(); 
			?>	

			<div class="hentry clear <?php echo( $posts->current_post + 1 === $posts->post_count ) ? 'last' : ''; ?>">

				<?php if ( has_post_thumbnail() && ( get_the_post_thumbnail() != null ) ) { ?>
					<a class="thumbnail-link" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small_thumb'); ?></a>
				<?php } ?>

				<div class="entry-header">
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div class="entry-meta">
						<span class="entry-date"><?php echo get_the_date(); ?></span>
						<span class="entry-comment"><?php comments_popup_link( '0 comment', '1 comment', '% comments', 'comments-link', 'comments off'); ?></span>
					</div><!-- .entry-meta -->
				</div><!-- .entry-header -->

				<div class="entry-summary">
					<?php echo advancedmagazine_custom_excerpt( absint( $instance['excerpt_length'] ) ); ?>
				</div><!-- .entyry-summary -->

			</div><!-- .hentry -->

			<?php
				$i++;
				endwhile;
			?>

		</div><!-- .category-block .below-featured -->			

</div><!-- .column-one -->