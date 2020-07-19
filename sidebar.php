			<div id="news">
				<?php
					$the_query = new WP_Query('showposts=5');
					while ($the_query -> have_posts()) :
						$the_query -> the_post();
						echo "<h1>";
						the_title();
						echo "</h1>";
						the_content();
					endwhile;
					wp_reset_postdata();
				?>
			</div>