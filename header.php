<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
            <!--Header Area Start-->
            <header class="header-sec">
                <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                    <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <!--          <ul class="navbar-nav mr-auto">
                            <li class="nav-item active"><a class="nav-link" href="index.html">Home </a></li>
                            <li class="nav-item "><a class="nav-link" href="about.html">About </a></li>
                            <li class="nav-item "><a class="nav-link" href="portfolio.html">Portfolio </a></li>
                            <li class="nav-item "><a class="nav-link" href="service.html">Service </a></li>
                            <li class="nav-item "><a class="nav-link" href="career.html">Career </a></li>
                            <li class="nav-item "><a class="nav-link" href="blog.html">Blog </a></li>
                            <li class="nav-item "><a class="nav-link" href="contact.html">Contact </a></li>
                        </ul>
-->

                        <?php
                        wp_nav_menu(
                            array(

                                'theme_location'  => 'header_top_menu',
                                'items_wrap'      => '<ul class="navbar-nav mr-auto">%3$s</ul>'
                            )
                        );
                        ?>

                        <form class="form-inline my-2 my-lg-0">
                            <ul class="navbar nav-right-side mr-auto">
                                <li class="nav-item"><a href="#"><i class="fa fa-phone"></i> +8801711124445</a></li>
                                <li class="nav-item"><a href="#"><i class="fas fa-envelope"></i> example_example@gmail.com</a></li>
                                <li class="search"><a href="#"><i class="fas fa-search"></i></a></li>
                            </ul>
                        </form>
                    </div>
                </nav>
            </header>
            <!--Header Area End-->