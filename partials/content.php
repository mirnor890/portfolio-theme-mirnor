<?php 
				if(have_posts()): 

					while ( have_posts()) :
						the_post(); ?>
				
<h2><?php the_title(); ?></h2>


				<?php	
						the_post_thumbnail('full', array('class' => 'post_image_big')); 	?>

						<div class="content_work_posts">
							<?php the_content(); ?>
						</div>

						<div class="skills-type-taggs">
							<p>Skills used</p>
							<?php  the_terms(get_the_ID(), 'project_skill', ' <span> ',' <span> ',' <span> ')
							?>
							<br><br>
							<p>Type of project</p>
							<?php  the_terms(get_the_ID(), 'project_type', ' <span> ',' <span> ',' <span> ')
							?>
						</div>

						<?php
						
					endwhile;
				endif;
			?>

			
