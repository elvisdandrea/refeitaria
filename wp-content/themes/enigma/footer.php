<!-- enigma Callout Section -->
<?php $wl_theme_options = weblizar_get_options(); ?>
<!-- Footer Widget Secton -->
<div class="enigma_footer_widget_area">	
	<div class="container">
		<div class="row">
			<?php
			/*
			if ( is_active_sidebar( 'footer-widget-area' ) ){ 
				dynamic_sidebar( 'footer-widget-area' );
			} else 
			{

			$args = array(
			'before_widget' => '<div class="col-md-12 enigma_footer_widget_column">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="enigma_footer_widget_title">',
			'after_title'   => '<div class="enigma-footer-separator"></div></div>' );
			the_widget('WP_Widget_Pages', null, $args);			
			}
			*/
?>
			<div class="col-md-12 enigma_footer_widget_column">
				<div class="footer-column">
					<a href="http://refeitaria.com/?page_id=29">Planos</a>
					<ul>
						<li class="page_item page-item-29 page_item_has_children" data-original-title="" title="">
							<ul class="children">
								<li class="page_item page-item-40" data-original-title="" title=""><a href="http://refeitaria.com/?page_id=40">Comida caseira</a></li>
								<li class="page_item page-item-49" data-original-title="" title=""><a href="http://refeitaria.com/?page_id=49">Fitness</a></li>
								<li class="page_item page-item-44" data-original-title="" title=""><a href="http://refeitaria.com/?page_id=44">Pratos executivos</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="footer-column">
					<a href="http://refeitaria.com/?page_id=38">Como funciona?</a>
					<ul>
						<li class="page_item page-item-38 page_item_has_children" data-original-title="" title="">
							<ul class="children">
								<li class="page_item page-item-52" data-original-title="" title=""><a href="http://refeitaria.com/?page_id=52">Perguntas frequentes</a></li>
								<li class="page_item page-item-55" data-original-title="" title=""><a href="http://refeitaria.com/?page_id=55">Perguntas frequentes Fitness</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="footer-column">
					<a href="http://refeitaria.com/?page_id=32">Área de entrega</a>
					<ul>
						<li class="page_item page-item-32 page_item_has_children" data-original-title="" title="">
							<ul class="children">
								<li class="page_item page-item-63" data-original-title="" title=""><a href="http://refeitaria.com/?page_id=63">Caseira/Executiva</a></li>
								<li class="page_item page-item-65" data-original-title="" title=""><a href="http://refeitaria.com/?page_id=65">Fitness</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="footer-column">
					<a href="http://refeitaria.com/">Início</a>
					<ul>
						<li class="page_item page-item-29 page_item_has_children" data-original-title="" title="">
							<ul class="children">
								<li class="page_item page-item-7" data-original-title="" title=""><a href="http://refeitaria.com/?page_id=7">Contato</a></li>
								<li class="page_item page-item-116" data-original-title="" title=""><a href="http://refeitaria.com/?page_id=116">Loja</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="fb-footer">
					<div class="fb-like-box" data-href="https://www.facebook.com/refeitaria" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
				</div>
			</div>


		</div>		
	</div>	
</div>
<?php /*
<div class="enigma_footer_area">
		<div class="container">
			<div class="col-md-12">
			<p class="enigma_footer_copyright_info wl_rtl" >
			<?php if($wl_theme_options['footer_customizations']) { echo esc_attr($wl_theme_options['footer_customizations']); }
			if($wl_theme_options['developed_by_text']) { echo "|" .esc_attr($wl_theme_options['developed_by_text']); } ?>
			<a target="_blank" rel="nofollow" href="<?php if($wl_theme_options['developed_by_link']) { echo esc_url($wl_theme_options['developed_by_link']); } ?>"><?php if($wl_theme_options['developed_by_weblizar_text']) { echo esc_attr($wl_theme_options['developed_by_weblizar_text']); } ?></a></p>
			<?php if($wl_theme_options['footer_section_social_media_enbled'] == 'on') { ?>
			<div class="enigma_footer_social_div">
				<ul class="social">
					<?php if($wl_theme_options['fb_link']!='') { ?>
					   <li class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><a  href="<?php echo esc_url($wl_theme_options['fb_link']); ?>"><i class="fa fa-facebook"></i></a></li>
					<?php } if($wl_theme_options['twitter_link']!='') { ?>
					<li class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><a href="<?php echo esc_url($wl_theme_options['twitter_link']) ; ?>"><i class="fa fa-twitter"></i></a></li>				
					<?php } if($wl_theme_options['linkedin_link']!='') { ?>
					<li class="linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin"><a href="<?php echo esc_url($wl_theme_options['linkedin_link']) ; ?>"><i class="fa fa-linkedin"></i></a></li>
					<?php } if($wl_theme_options['youtube_link']!='') { ?>
					<li class="youtube" data-toggle="tooltip" data-placement="top" title="Youtube"><a href="<?php echo esc_url($wl_theme_options['youtube_link']) ; ?>"><i class="fa fa-youtube"></i></a></li>
	                <?php } if($wl_theme_options['gplus']!='') { ?>
					<li class="twitter" data-toggle="tooltip" data-placement="top" title="gplus"><a href="<?php echo esc_url($wl_theme_options['gplus']) ; ?>"><i class="fa fa-google-plus"></i></a></li>
	                <?php } if($wl_theme_options['instagram']!='') { ?>
					<li class="facebook" data-toggle="tooltip" data-placement="top" title="instagram"><a href="<?php echo esc_url($wl_theme_options['instagram']) ; ?>"><i class="fa fa-instagram"></i></a></li>
	                <?php } ?>
				</ul>
			</div>
			<?php } ?>			
			</div>		
		</div>		
</div>
 */ ?>
<!-- /Footer Widget Secton -->
</div>
<a href="#" title="Go Top" class="enigma_scrollup" style="display: inline;"><i class="fa fa-chevron-up"></i></a>
<?php if($wl_theme_options['custom_css']) ?>
<style type="text/css">
<?php { echo esc_attr($wl_theme_options['custom_css']); } ?>
</style>
<?php wp_footer(); ?>
</body>
</html>