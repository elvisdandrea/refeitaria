<?php
/**
 * Customizer custom controls
 *
 * Customizer hidden input field.
 *
 * @package    Auberge
 * @copyright  2014 WebMan - Oliver Juhas
 *
 * @since    1.0
 * @version  1.1
 */



/**
 * Hidden
 */
class WM_Customizer_Hidden extends WP_Customize_Control {

	public $type = 'hidden';

	public function render_content() {
		?>

		<textarea <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>

		<?php
	}

} // /WM_Customizer_Hidden

?>