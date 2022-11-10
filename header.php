<!DOCTYPE HTML>
<html lang="<?php language_attributes(); ?>" class="no js">
<head>
<!-- Wordpress Theme Development -->
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> <?php bloginfo('title');?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="full">
	<div class="container">
	<div id="main">
			
		<header class="main-header">
		<div id="main">
			<div class="logo">
			<a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_mod('nice_logo'); ?>" alt=""></a>

			</div>
			<h1><a href="<?php echo home_url();?>">My First Wordpress Theme</a></h1>
			<h3>Theme Name: Nice Theme</h3>
            <h4>Made by Freelancer Nizam</h4>
			
			<nav class="main-menu">
			<div class="menu">
               <!--
                    <ul id="menu">
                        
                        <li><a href="#">Home <i class="fa-solid fa-house-user"></i></a></li>
                            <li><a href="#">About <i class="fa-solid fa-address-card"></i></a></li>
                            <li><a href="#">Services <i class="fa-solid fa-circle-down"></i></a>
                                <ul>
                                     
                                    <li><a href="#">Web Design</a></li>
                                    <li><a href="#"><i class="fa-solid fa-circle-left"></i> Web Development</a>
                                        <ul>
                                            <li><a href="#">JS</a></li>
                                            <li><a href="#">PHP</a></li>
                                            <li><a href="#">React</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">SEO</a></li>
                                    
                                
                            </ul>
					</li>
					<li><a href="#">Blog <i class="fa-solid fa-cubes"></i></a></li>
					<li><a href="#">Contact <i class="fa-solid fa-address-card"></i></a></li>

				</ul>
                -->
			</div>
			</nav>	
        	
        <?php 

						wp_nav_menu(array('theme_location'=>'main_menu','menu_id'=>'menu'));
					?>
		</header>