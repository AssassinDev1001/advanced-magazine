<?php
/**
 * Ads widget.
 *
 * @package    advancedmagazine
 * @author     HappyThemes
 * @copyright  Copyright (c) 2017, HappyThemes
 * @license    http://www.gnu.org/licenses/gpl-2.0.html
 * @since      1.0.0
 */
class AdvancedMagazine_Ad_Widget extends WP_Widget {

	/**
	 * Sets up the widgets.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {

		// Set up the widget options.
		$widget_options = array(
			'classname'   => 'widget_ad ad-widget',
			'description' => esc_html__( 'Display any kinds of advertisements.', 'advanced-magazine' ),
			'customize_selective_refresh' => true
		);

		// Create the widget.
		parent::__construct(
			'happythemes-ad',                                    // $this->id_base
			esc_html__( '&raquo; Advertisement', 'advanced-magazine' ), // $this->name
			$widget_options                                     // $this->widget_options
		);

		$this->alt_option_name = 'widget_ad';
	}

	/**
	 * Outputs the widget based on the arguments input through the widget controls.
	 *
	 * @since 1.0.0
	 */
	public function widget( $args, $instance ) {
		if ( ! isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
		}

		// Set up default value
		$title   = ( ! empty( $instance['title'] ) ) ? $instance['title'] : '';
		$ad_code = ( ! empty( $instance['ad_code'] ) ) ? $instance['ad_code'] : '';

		// Output the theme's $before_widget wrapper.
		echo $args['before_widget'];

		// If the title not empty, display it.
		if ( $title ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $title, $instance, $this->id_base ) . $args['after_title'];
		}

			// Display the ad banner.
			if ( $ad_code ) {
				echo '<div class="adwidget">' . $ad_code . '</div>';
			}

		// Close the theme's widget wrapper.
		echo $args['after_widget'];

	}

	/**
	 * Updates the widget control options for the particular instance of the widget.
	 *
	 * @since 1.0.0
	 */
	public function update( $new_instance, $old_instance ) {
		$instance            = $old_instance;
		$instance['title']   = sanitize_text_field( $new_instance['title'] );
		if ( current_user_can( 'unfiltered_html' ) ) {
			$instance['ad_code'] = $new_instance['ad_code'];
		} else {
			$instance['ad_code'] = wp_kses_post( $new_instance['ad_code'] );
		}
		return $instance;
	}

	/**
	 * Displays the widget control options in the Widgets admin screen.
	 *
	 * @since 1.0.0
	 */
	public function form( $instance ) {
		$title   = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
		$ad_code = isset( $instance['ad_code'] ) ? esc_textarea( $instance['ad_code'] ) : '';
	?>

		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">
				<?php esc_html_e( 'Title', 'advanced-magazine' ); ?>
			</label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $title; ?>" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'ad_code' ); ?>">
				<?php esc_html_e( 'Ad Code', 'advanced-magazine' ); ?>
			</label>
			<textarea class="widefat" name="<?php echo $this->get_field_name( 'ad_code' ); ?>" id="<?php echo $this->get_field_id( 'ad_code' ); ?>" cols="30" rows="6"><?php echo $ad_code; ?></textarea>
		</p>

	<?php

	}

}
