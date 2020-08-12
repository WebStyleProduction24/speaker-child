<?php
/**
 * Template part for style-4 header layout.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Speaker
 */

$header_contact_block_visibility = get_theme_mod( 'header_contact_block_visibility', speaker_theme()->customizer->get_default( 'header_contact_block_visibility' ) );
$header_btn_visibility           = get_theme_mod( 'header_btn_visibility', speaker_theme()->customizer->get_default( 'header_btn_visibility' ) );
$search_visible                  = get_theme_mod( 'header_search', speaker_theme()->customizer->get_default( 'header_search' ) );
?>
<div class="header-container_wrap container">

	<div class="header-container__flex-wrap">
		<div class="header-container__flex">
			<div class="site-branding">
				<?php speaker_header_logo() ?>
				<?php speaker_site_description(); ?>
			</div>

			<div class="header-nav-wrapper">
				<?php speaker_main_menu(); ?>

				<?php if ( $search_visible  ) : ?>
					<div class="header-components header-components__search-cart"><?php
						speaker_header_search_toggle();
					?></div>
				<?php endif; ?>
			</div>
		</div>
		<?php speaker_header_search( '<div class="header-search">%s<span class="search-form__close"></span></div>' ); ?>
	</div>

	<?php if ( $header_contact_block_visibility || $header_btn_visibility ) : ?>
		<div class="header-row__flex header-components__contact-button header-components__grid-elements"><?php
			speaker_contact_block_wsp24( 'header' );
			speaker_header_btn();
		?></div>
	<?php endif; ?>

</div>
