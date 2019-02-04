<?php get_header(); ?>


<main>	
	<div class="post_grid">


<?php 
	$args = array(
	  	'post_type'     => 'project', 
	  	'posts_per_page' => -1,

	  	
	);

	$project_query = new WP_Query($args);

	if ($project_query->have_posts()): 
	    while ($project_query->have_posts()): 
	        $project_query->the_post(); ?>


		<!-- Inside the loop: HTML and template tags -->
		<a class="link_postgrid" href="<?php the_permalink(); ?>">
	    	<?php the_post_thumbnail('full', array('class' => 'postgrid_image')); 


	    endwhile; 
	endif;
	?>


		

</div>
			


</main>

	<?php get_footer(); ?>