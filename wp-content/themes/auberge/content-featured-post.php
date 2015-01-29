<?php
/**
 * Featured post content
 *
 * @package    Auberge
 * @copyright  2014 WebMan - Oliver Juhas
 * @version    1.0
 */

?>

<article data-id="post-<?php the_ID(); ?>" <?php post_class(); wmhook_entry_container_atts(); ?>>

	<?php

	/**
	 * Post media
	 */

	?>

	<div class="site-banner-media">

		<figure class="site-banner-thumbnail" title="<?php the_title(); ?>"<?php echo wm_schema_org( 'image' ); ?>>

			<?php

			if ( has_post_thumbnail() ) {

				//Post featured image
					the_post_thumbnail( 'banner' );

			} else {

				//Fallback to Custom Header image
					$image_url = ( get_header_image() ) ? ( get_header_image() ) : ( wm_get_stylesheet_directory_uri( 'images/header.jpg' ) );
					echo '<img src="' . esc_url( $image_url ) . '" width="' . esc_attr( get_custom_header()->width ) . '" height="' . esc_attr( get_custom_header()->height ) . '" alt="" />';

			}

			?>

		</figure>

	</div>

	<?php



	/**
	 * Post title
	 */

	?>

	<div class="site-banner-header">

		<h1 class="entry-title"<?php echo wm_schema_org( 'name' ); ?>>
			<a href="<?php echo esc_url( get_permalink() ); ?>" class="highlight" rel="bookmark"><?php

			if ( $custom_title = trim( get_post_meta( get_the_ID(), 'banner_text', true ) ) ) {

				//Display 'banner_text' custom field if set
					echo $custom_title;

			} else {

				//If no 'banner_text' custom field set, fall back to post title
					the_title();

			}

			?></a>
		</h1>

	</div>

</article>