<?php
	get_header();

	if ( have_posts() ) {
		while ( have_posts() ) :
			the_post();
			echo '<div class="entry">';
			echo '	<h1>';
			the_title();
			echo '	</h1>';
			the_content();
			echo '</div>';
		endwhile;
	}
?>
<div class="pagination"><?php next_posts_link('&rarr; Ältere Beiträge'); ?></div>
<div class="pagination"><?php previous_posts_link('&rarr; Neuere Beiträge'); ?></div>
	
<?php get_footer(); ?>