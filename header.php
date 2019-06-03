<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gutenbergtheme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
	<div class="header-nav">
			<div class="container">
					<div class="main-nav-bar">
							<div class="logo"><a href="index.html"><Img src="images/logo.png" width="130"></a></div>
							<button class="nav-toggle">
									<span></span>
									<span></span>
									<span></span>
							</button>
							<div class="navigation">
									<?php
										wp_nav_menu( array(
											'theme_location' => 'menu-1',
											'menu_id'        => 'primary-menu',
											'menu_class'		 => 'nav-bar',
											'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
											'container'			 => false,
										) );
									?>
									<div class="top-btns">
											<a href="#" class="common-btn border-btn">Sign In</a>
											<a href="#" class="common-btn">Get Started</a>
									</div>
							</div>
					</div>
			</div>
	</div>
</header>
<div id="page" class="site">
