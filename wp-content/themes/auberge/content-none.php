<?php
/**
 * Empty content page
 *
 * @package    Auberge
 * @copyright  2014 WebMan - Oliver Juhas
 * @version    1.0
 */

?>

<section class="no-results not-found">

	<header class="page-header">

		<h1 class="page-title"><?php _e( 'Nothing Found', 'wm_domain' ); ?></h1>

	</header>

	<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

		<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'wm_domain' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

	<?php elseif ( is_search() ) : ?>

		<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'wm_domain' ); ?></p>

		<?php get_search_form(); ?>

	<?php else : ?>

		<p><?php _e( 'It seems we can not find what you are looking for. Perhaps searching can help.', 'wm_domain' ); ?></p>

		<?php get_search_form(); ?>

	<?php endif; ?>

</section>