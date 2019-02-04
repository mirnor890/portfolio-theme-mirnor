<?php get_header(); ?>


<main>
	<br>		

	<?php include('partials/content.php'); ?>

	<div class="pagination">

	<?php previous_post_link(); ?>  |   <?php next_post_link(); ?>
	</div>

</main>

	<?php get_footer(); ?>