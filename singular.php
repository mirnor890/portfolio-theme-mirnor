<?php get_header(); ?>
<?php $terms = get_terms(array(
 'taxonomy' => 'project_skill',
 'hide_empty' => true ));?>

<main class="singular_main">	
	
	<br>
	<?php 
		if(have_posts()): 
			while ( have_posts()) :
					the_post(); ?>

				
<h2><?php the_title(); ?></h2>
				<?php	
						the_post_thumbnail('thumbnail', array('class' => 'your-class-name')); 	
						the_content();
						echo "<br>";
						

						endwhile;
					endif;
				?> 
		

</main>

<div class="sidebar_singular">
	<div class="skills-type-taggs_singular">
					<p>Things I'm good at</p>
					
					<?php foreach ($terms as $value) { ?>
					 <span><a href="/project_skill/<?php echo $value->slug ?>">
					 <?php echo $value->name ?>
					 </a></span>
					<?php } ?> 
	</div>

	<div class="contact_info">
		<?php get_sidebar(); ?>
	</div>
</div>

	<?php get_footer(); ?>