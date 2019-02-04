<?php include('menu.php'); ?>

<div class="header_content">

	<?php if ( function_exists( 'the_custom_logo' ) ) {
    the_custom_logo();
	}?>


	<?php dynamic_sidebar('description-header') ?>

</div>

