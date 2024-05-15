<?php
/**
 * Modal contact
 *
 * @package WordPress
 * @subpackage nathalie-mota theme
 */
?>


<div class="popup-overlay hidden">
	<div class="popup-contact">
		<div class="popup-title__container">
			<!-- <img class="popup-close" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/contact.png'?>" alt="Page contact">		 -->
			<div class="popup-title"></div>
			<div class="popup-title"></div>
		</div>
		<div class="popup-informations">	
			<?php
				// On insère le formulaire de demandes de renseignements
				// get_field('reference')
				$refPhoto = "";
				if (get_field('reference')) {
					$refPhoto = get_field('reference');
				}; 
				echo do_shortcode('');//shortcode de formulaire contact
			?>
		</div>	
	</div>
</div>