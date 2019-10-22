<?php /* Template Name: Portfolio */ get_header(); ?>


<!--Portfolio Area Start-->
<div class="portfolio-sec">
    <div class="full-title d-flex align-items-center">
        <h2 class="mx-auto">Our Most Appreciated Works </h2>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-lg-5">
                <div class="portfolio-tab controls">
                    <ul>
                        <li class="filter" data-filter="all">All Projects</li>
                        <li class="filter" data-filter=".design">UI/UX Design</li>
                        <li class="filter" data-filter=".wordpress">WordPress</li>
                        <li class="filter" data-filter=".html">HTML</li>
                        <li class="filter" data-filter=".app">Mobile App</li>
                        <li class="filter" data-filter=".web">Custom Web</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8 col-lg-7">
                <div class="row" data-ref="mixitup-container">
                    <div class="col-md-6 web html wordpress app all" data-ref="mixitup-target">
                        <div class="single-portfolio"  >
                            <div class="single-portfolio-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-01.png" alt="Photo">
                            </div>
                            <div class="single-portfolio-text">
                                <a href="single-portfolio.html">Project name <i class="fas fa-angle-double-right ml-auto"></i></a>
                                <p>Android, UX Design</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 design app all" data-ref="mixitup-target">
                        <div class="single-portfolio"  >
                            <div class="single-portfolio-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-02.png" alt="Photo">
                            </div>
                            <div class="single-portfolio-text">
                                <a href="single-portfolio.html">Project name <i class="fas fa-angle-double-right ml-auto"></i></a>
                                <p>Android, UX Design</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 web wordpress html all" data-ref="mixitup-target">
                        <div class="single-portfolio"  >
                            <div class="single-portfolio-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-03.png" alt="Photo">
                            </div>
                            <div class="single-portfolio-text">
                                <a href="single-portfolio.html">Project name <i class="fas fa-angle-double-right ml-auto"></i></a>
                                <p>Android, UX Design</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 design wordpress all" data-ref="mixitup-target">
                        <div class="single-portfolio"  >
                            <div class="single-portfolio-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-04.png" alt="Photo">
                            </div>
                            <div class="single-portfolio-text">
                                <a href="single-portfolio.html">Project name <i class="fas fa-angle-double-right ml-auto"></i></a>
                                <p>Android, UX Design</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 html web wordpress app all" data-ref="mixitup-target">
                        <div class="single-portfolio"  >
                            <div class="single-portfolio-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-05.png" alt="Photo">
                            </div>
                            <div class="single-portfolio-text">
                                <a href="single-portfolio.html">Project name <i class="fas fa-angle-double-right ml-auto"></i></a>
                                <p>Android, UX Design</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 design all" data-ref="mixitup-target">
                        <div class="single-portfolio"  >
                            <div class="single-portfolio-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-06.png" alt="Photo">
                            </div>
                            <div class="single-portfolio-text">
                                <a href="single-portfolio.html">Project name <i class="fas fa-angle-double-right ml-auto"></i></a>
                                <p>Android, UX Design</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Portfolio Area End-->


<?php  get_footer(); ?>