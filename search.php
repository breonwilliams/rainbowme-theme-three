<?php
/**
 * The template for displaying search results.
 * 
 * @package bootstrap-basic
 */

get_header('searchresults');

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?> 
<div class="container">
<?php get_sidebar('left'); ?> 
				<div class="col-md-<?php echo $main_column_size; ?> content-area" id="main-column">
					<main id="main" class="site-main" role="main">
						<?php if (have_posts()) { ?> 
						
						<?php 
						// start the loop
						while (have_posts()) {
							the_post();
							
							/* Include the Post-Format-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Format name) and that will be used instead.
							*/
							get_template_part('content', 'search');
						}// end while
						
						bootstrapBasicPagination();
						?> 
						<?php } else { ?> 
						<?php get_template_part('no-results', 'search'); ?>
						<?php } // endif; ?> 
					</main>
				</div>
<?php get_sidebar('right'); ?> 
</div>
<?php get_footer(); ?> 