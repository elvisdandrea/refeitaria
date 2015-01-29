<?php
/**
 * Custom Header content
 *
 * @package    Auberge
 * @copyright  2014 WebMan - Oliver Juhas
 * @version    1.0
 */

?>

<div class="site-banner-content">

	<?php

	/**
	 * Media
	 */

	?>

	<div class="site-banner-media">

		<figure class="site-banner-thumbnail">

			<?php

			$image_url = ( get_header_image() ) ? ( get_header_image() ) : ( wm_get_stylesheet_directory_uri( 'images/header.jpg' ) );

			echo '<img src="' . esc_url( $image_url ) . '" width="' . esc_attr( get_custom_header()->width ) . '" height="' . esc_attr( get_custom_header()->height ) . '" alt="" />';

			?>

		</figure>

	</div>

	<?php



	/**
	 * Custom Header text
	 */

	?>

	<div class="site-banner-header">

		<h1 class="entry-title"><span class="highlight"><?php

		if (
				get_option( 'page_on_front' )
				&& $custom_title = trim( get_post_meta( get_the_ID(), 'banner_text', true ) )
			) {

			//If there is a front page, display 'banner_text' custom field if set
				echo $custom_title;

		} else {

			//Display site description
				bloginfo( 'description' );

		}

		?></span></h1>

	</div>

</div>