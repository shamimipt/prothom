<?php
/**
 * Offcanvas Nav Menu
 *
 * @since 1.0
 * @package Prothom
 */

?>
<div class="prothom-mobile-menu-wrapper d-block d-lg-none">
	<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-expanded="false" aria-label="Toggle navigation">
		<span class="ti-menu"></span>
	</button>

	<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
		<div class="offcanvas-header">
			<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		</div>
		<div class="offcanvas-body">
			<div>
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'menu-1',
						'menu_class'      => 'primary-menu'
					)
				);
				?>
			</div>
		</div>
	</div>
</div>
