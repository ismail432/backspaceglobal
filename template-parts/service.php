<?php /* Template Name: Services */ get_header(); ?>

    <!--Team-banner Area Start-->
    <div class="team-banner-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="team-banner-text">
                        <h2><?php global $backspace; echo $backspace['service-banner-title'];  ?></h2>
                        <p><?php global $backspace; echo $backspace['service-banner-content'];  ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Team-banner Area End-->

    <!--Serice banner Image Start-->
    <div class="service-banner-bg"></div>
    <!--Serice banner Image End-->

    <!--About Us Area Start-->
    <div class="about-us-sec">
        <div class="container">
            <div class="about-text">
                <div class="row">
                    <div class="col-md-3">
                        <h5><?php global $backspace; echo $backspace['service-subtitle'];  ?></h5>
                    </div>
                    <div class="col-md-9">
                        <h2><?php global $backspace; echo $backspace['service-title'];  ?></h2>
                        <p><?php global $backspace; echo $backspace['service-content'];  ?></p>
                    </div>
                </div>
            </div>
            <div class="about-text" style="margin-bottom: 0">
                <div class="row">
                    <div class="col-md-3">
                        <h5><?php global $backspace; echo $backspace['service-subtitle-2nd'];  ?></h5>
                    </div>
                    <div class="col-md-9">
                        <h2><?php global $backspace; echo $backspace['service-title-2nd'];  ?></h2>
                        <p><?php global $backspace; echo $backspace['service-content-2nd'];  ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--About Us Area End-->


    <!--Main-service Area Start-->
    <div class="main-service-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12 offset-md-0 col-lg-9 offset-lg-3">
                    <div class="tab-part">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs d-flex" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link flex-fill active" data-toggle="tab" href="#home"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ux-logo.png" alt="Photo">UI/UX Design</a>
                            </li>
                            <li class="nav-item flex-fill">
                                <a class="nav-link" data-toggle="tab" href="#menu1"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/www-logo.png" alt="Photo">Web Development</a>
                            </li>
                            <li class="nav-item flex-fill">
                                <a class="nav-link" data-toggle="tab" href="#menu2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/app-logo.png" alt="Photo">App Development</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div id="home" class="container tab-pane active"><br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h2>UI/UX <br>Design</h2>
                                    </div>
                                    <div class="col-md-8">
                                        <p>Want to build your product with a team that establishes a clear design process, meets deadlines, and delivers a spot-on end result? Turn to Intellectsoft’s UI and UX services. Our design team is a small design studio within a large software com. </p>
                                        <ul>
                                            <li><a href="#"><i class="fas fa-check"></i> Web Design</a></li>
                                            <li><a href="#"><i class="fas fa-check"></i> Mobile App Design (Android/iOS)</a></li>
                                            <li><a href="#"><i class="fas fa-check"></i> Theme Design</a></li>
                                        </ul>
                                        <a href="#" class="view">View Project</a>
                                    </div>
                                </div>
                            </div>
                            <div id="menu1" class="container tab-pane fade"><br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h2>Web <br>Development</h2>
                                    </div>
                                    <div class="col-md-8">
                                        <p>Want to build your product with a team that establishes a clear design process, meets deadlines, and delivers a spot-on end result? Turn to Intellectsoft’s UI and UX services. Our design team is a small design studio within a large software com. </p>
                                        <ul>
                                            <li><a href="#"><i class="fas fa-check"></i> Web Design</a></li>
                                            <li><a href="#"><i class="fas fa-check"></i> Mobile App Design (Android/iOS)</a></li>
                                            <li><a href="#"><i class="fas fa-check"></i> Theme Design</a></li>
                                        </ul>
                                        <a href="#" class="view">View Project</a>
                                    </div>
                                </div>
                            </div>
                            <div id="menu2" class="container tab-pane fade"><br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h2>App <br>Development</h2>
                                    </div>
                                    <div class="col-md-8">
                                        <p>Want to build your product with a team that establishes a clear design process, meets deadlines, and delivers a spot-on end result? Turn to Intellectsoft’s UI and UX services. Our design team is a small design studio within a large software com. </p>
                                        <ul>
                                            <li><a href="#"><i class="fas fa-check"></i> Web Design</a></li>
                                            <li><a href="#"><i class="fas fa-check"></i> Mobile App Design (Android/iOS)</a></li>
                                            <li><a href="#"><i class="fas fa-check"></i> Theme Design</a></li>
                                        </ul>
                                        <a href="#" class="view">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Main-service Area End-->


    <!--Career Area Start-->
    <div class="balb-sec" style="background: url(<?php global $backspace; echo $backspace['balb-bg']['url'];  ?>"></div>
    <!--Career Area End-->


    <!--Creative Area Start-->
    <div class="creative-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-7">
                    <div class="creative-image">
                        <img src="<?php global $backspace; echo $backspace['crea-2-imag']['url'];  ?>" alt="Photo">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="creative-text">
                        <h3> <?php global $backspace; echo $backspace['crea-2-head'];  ?></h3>
                        <p><?php global $backspace; echo $backspace['crea-2-content'];  ?></p>
                        <a href="#"> <?php global $backspace; echo $backspace['crea-2-btn'];  ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Creative Area End-->

<?php get_footer(); ?>
