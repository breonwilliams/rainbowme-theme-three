<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>

			</div><!--.site-content-->
			
			
			
		</div><!--.container page-container-->
		
		<footer id="site-footer" role="contentinfo">
			<div class="container">
				<div id="footer-row" class="row site-footer">
					<div class="col-md-4 footer-left">
						<?php dynamic_sidebar('footer-left'); ?> 
					</div>
					<div class="col-md-4 footer-middle">
						<?php dynamic_sidebar('footer-middle'); ?> 
					</div>
					<div class="col-md-4 footer-right">
						<?php dynamic_sidebar('footer-right'); ?> 
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
					<p> &copy; <?php echo date( 'Y' ); ?> Rainbow Me</p>
					</div>
					<div class="col-md-6">
						<?php wp_nav_menu(array('theme_location' => 'footer', 'container' => false, 'items_wrap' => '<ul class="foot-menu">%3$s</ul>')); ?>
					</div>
				</div>
			</div>
			</footer>
		<!--wordpress footer-->
		<?php wp_footer(); ?> 
	</body>
</html>