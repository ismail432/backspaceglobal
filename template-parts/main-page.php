


<div id="pagepiling">

        <!--Banner Area Start-->
        <div class="section banner-sec">
            <?php echo banner_words(); ?>
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-md-7">
                            <div class="banner-text">
                                <h1>The Home of World Class</h1>
                                <span id="text"></span>
                                <div class="underscore" id="console">&#95;</div>
                                <h3>Check out some of our <a href="#">latest projects</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5">
                            <div class="banner-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-01.png" alt="Photo">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-social">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><span></span></li>
                    </ul>
                </div>

        </div>
        <!--Banner Area End-->


        <!--Service Area Start-->
        <div class="section service-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h2>Our Wide Range of Services</h2>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme service-slider">

                        <?php echo backsp_service(); ?>

                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="all-services">
                            <a href="#">All Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Service Area End-->


        <!--Brand Area Start-->
        <div class="section brand-sec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="brand-title">
                            <h2>Experience development for growing brands</h2>
                            <div class="hiring-btn brand-btn">
                                <a href="#">Got a new project? <span>Contact us</span></a>
                            </div>
                            <div class="dots-icon">
                                <a href="portfolio.html"><i class="fa fa-th" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6">
                        <div class="brand-slider owl-carousel">

                            <?php echo brands(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Brand Area End-->



        <!--Review Area Start-->
        <div class="section review-sec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-5">
                        <div class="review-title">
                            <h2>Reviews from <br>Our Clients</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7">
                        <div class="contact-btn">
                            <a href="#">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 offset-md-1">
                    <div class="review-slider-bg">
                        <div class="review-slider owl-carousel">

                                <?php echo reviews(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Review Area End-->


        <!--Team Area Start-->
        <div class="section team-sec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-5">
                        <div class="team-title">
                            <h2>Grow With the
                                Most Creative 
                                Team</h2>
                            <div class="hiring-btn">
                                <a href="#">We Are Hiring <span>Career</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7">
                        <div class="accrodion-part">
                            <div class="accordion" id="accordionExample">


                                    <?php echo faq(); ?>

                                   <!-- <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button type="button" class="" data-toggle="collapse" data-target="#collapseOne"> <span>UX Designer </span><i class="fa fa-plus"></i></button>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <ul>
                                                <li>
                                                    <p>Start-to-finish technical ownership of features and/or applications from inception to delivery.</p>
                                                </li>
                                                <li>
                                                    <p>UI/UX requirements and mockups to build functional, high-perfor mance iOS phone and tablet.</p>
                                                </li>
                                                <li>
                                                    <p>Research the latest technologies, test, implement and report back to the team on what you’ve.</p>
                                                </li>
                                            </ul>
                                            <a href="#" class="apply-btn">Apply Now</a>
                                            <a href="#" class="more-btn">More Details</a>
                                        </div>
                                    </div>-->



                                <!--<div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button type="button" class="collapsed" data-toggle="collapse" data-target="#collapseTwo"><span>Business Developer</span><i class="fa fa-plus"></i> </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse " aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <ul>
                                                <li>
                                                    <p>Start-to-finish technical ownership of features and/or applications from inception to delivery.</p>
                                                </li>
                                                <li>
                                                    <p>UI/UX requirements and mockups to build functional, high-perfor mance iOS phone and tablet.</p>
                                                </li>
                                                <li>
                                                    <p>Research the latest technologies, test, implement and report back to the team on what you’ve.</p>
                                                </li>
                                            </ul>
                                            <a href="#" class="apply-btn">Apply Now</a>
                                            <a href="#" class="more-btn">More Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <button type="button" class="collapsed" data-toggle="collapse" data-target="#collapseThree"><span>Senior QA Engineer</span> <i class="fa fa-plus"></i></button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <ul>
                                                <li>
                                                    <p>Start-to-finish technical ownership of features and/or applications from inception to delivery.</p>
                                                </li>
                                                <li>
                                                    <p>UI/UX requirements and mockups to build functional, high-perfor mance iOS phone and tablet.</p>
                                                </li>
                                                <li>
                                                    <p>Research the latest technologies, test, implement and report back to the team on what you’ve.</p>
                                                </li>
                                            </ul>
                                            <a href="#" class="apply-btn">Apply Now</a>
                                            <a href="#" class="more-btn">More Details</a>
                                        </div>
                                    </div>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Team Area End-->

