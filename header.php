<!doctype html>
<html <?php language_attributes(); ?> class="no-js"  style="scroll-behavior: smooth;">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/logo_black_OlN_icon.ico" rel="shortcut icon">



		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">



		<?php wp_head(); ?>




    </head>
	<body <?php body_class(); ?>>
            <!--Header Area Start-->
            <header class="header-sec">
                <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                    <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php global $backspace; echo $backspace['logo-upload']['url'];  ?>" alt="Logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <?php backspace_nav(); ?>

                        <form class="form-inline my-2 my-lg-0">
                            <ul class="navbar nav-right-side mr-auto">
                                <li class="nav-item"><a href="tel:+8801717987058"><?php global $backspace; echo $backspace['phone-number'];  ?></a></li>
                                <li class="nav-item"><a href="mailto:admin.backspaceglobal@gmail.com"><?php global $backspace; echo $backspace['email-id'];  ?></a></li>
                                <li class="search"><a href="#"><i class="fas fa-search"></i></a></li>
                            </ul>
                        </form>
                    </div>
                </nav>
            </header>
            <!--Header Area End-->



