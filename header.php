<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header">
			<div id="logo">
				<!-- <h1><a href="#"><span>codify</span>code</a></h1> -->

						<?php

						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
						if ( has_custom_logo() )
						 {
        					echo '<img class="codifycode-logo" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '"/>';
						 }
						 else
						 {
        					echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
						}

						?>

			</div>
			<div id="menu">
				<ul>
					<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'menu-header' ) ); ?>
				</ul>
			</div>
		</div>
	</div>
	<!-- end #header -->
