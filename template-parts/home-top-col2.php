<?php 
	if ( !empty( $instance['top_right_ad_code'] ) ) {
		$custom_class = 'col-normal';
	} else { 
		$custom_class = 'col-full';
	}
?>
	
<div class="column-two category-block <?php echo $custom_class; ?>">

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

	<div class="hentry clear <?php echo( $the_query->current_post + 1 === $the_query->post_count ) ? 'last' : ''; ?>">

		<div class="entry-header">
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>							
		</div><!-- .entry-header -->

		<?php if ( has_post_thumbnail() && ( get_the_post_thumbnail() != null ) ) { ?>
			<a class="thumbnail-link" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small_thumb'); ?></a>
		<?php } ?>

		<div class="entry-meta">
			<span class="entry-date"><?php echo get_the_date(); ?></span>
			<span class="entry-comment"><?php comments_popup_link( '0 comment', '1 comment', '% comments', 'comments-link', 'comments off'); ?></span>
		</div><!-- .entry-meta -->

		<div class="entry-summary">
			<?php echo advancedmagazine_custom_excerpt( absint( $instance['excerpt_length2'] ) ); ?>
		</div><!-- .entry-summary -->

	</div><!-- .hentry -->

	<?php
		$i++;
		endwhile;
	?>

</div><!-- .column-two -->