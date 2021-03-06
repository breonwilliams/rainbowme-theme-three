<?php
/**
 * The theme header
 * 
 * @package bootstrap-basic
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title('|', true, 'right'); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!--wordpress head-->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<!--[if lt IE 8]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->
		
		
					<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
							<div class="container-fluid">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle toggle-menu menu-left push-body jPushMenuBtn" data-toggle="collapse" data-target=".navbar-primary-collapse">
									<span class="sr-only"><?php _e('Toggle navigation', 'bootstrap-basic'); ?></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>


						<?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>

                        	<a class="navbar-brand" href='<?php echo esc_url( home_url( '' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( ' name ', 'display ' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>

                        <?php else : ?>

								<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>

                        <?php endif; ?>	

							</div>
							
							<div class="collapse navbar-collapse navbar-primary-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left">
								<?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav navbar-right', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?> 
							</div><!--.navbar-collapse-->
							</div>
						</nav>

		
		<div class="container-fluid page-container">

			<?php include('login-header.php'); ?>
			
			<?php do_action('before'); ?> 
			<header class="site-branding" role="banner">
				<div class="clouds-top"></div>
				<div class="clouds-bottom"></div>
				<div class="container">
				<div class="row row-with-vspace">
					<div class="col-md-8 site-title">
						<h1 class="page-title">
								<?php
								if (is_category()) :
									single_cat_title();

								elseif (is_tag()) :
									single_tag_title();

								elseif (is_author()) :
									/* Queue the first post, that way we know
									 * what author we're dealing with (if that is the case).
									 */
									the_post();
									printf(__('Author: %s', 'bootstrap-basic'), '<span class="vcard">' . get_the_author() . '</span>');
									/* Since we called the_post() above, we need to
									 * rewind the loop back to the beginning that way
									 * we can run the loop properly, in full.
									 */
									rewind_posts();

								elseif (is_day()) :
									printf(__('Day: %s', 'bootstrap-basic'), '<span>' . get_the_date() . '</span>');

								elseif (is_month()) :
									printf(__('Month: %s', 'bootstrap-basic'), '<span>' . get_the_date('F Y') . '</span>');

								elseif (is_year()) :
									printf(__('Year: %s', 'bootstrap-basic'), '<span>' . get_the_date('Y') . '</span>');

								elseif (is_tax('post_format', 'post-format-aside')) :
									_e('Asides', 'bootstrap-basic');

								elseif (is_tax('post_format', 'post-format-image')) :
									_e('Images', 'bootstrap-basic');

								elseif (is_tax('post_format', 'post-format-video')) :
									_e('Videos', 'bootstrap-basic');

								elseif (is_tax('post_format', 'post-format-quote')) :
									_e('Quotes', 'bootstrap-basic');

								elseif (is_tax('post_format', 'post-format-link')) :
									_e('Links', 'bootstrap-basic');

								else :
									_e('Archives', 'bootstrap-basic');

								endif;
								?> 
							</h1>
							
							<?php
							// Show an optional term description.
							$term_description = term_description();
							if (!empty($term_description)) {
								printf('<div class="taxonomy-description">%s</div>', $term_description);
							} //endif;
							?>
						
					</div>
					<div class="col-md-4 page-header-top-right">
						<div class="sr-only">
							<a href="#content" title="<?php esc_attr_e('Skip to content', 'bootstrap-basic'); ?>"><?php _e('Skip to content', 'bootstrap-basic'); ?></a>
						</div>
						<?php if (is_active_sidebar('header-right')) { ?> 
						<div class="pull-right">
							<?php dynamic_sidebar('header-right'); ?>
						</div>
						<div class="clearfix"></div>
						<?php } // endif; ?> 
					</div>
				</div><!--.site-branding-->
			</div>
				

			</header>
			
			
			<div id="content" class="row row-with-vspace site-content">