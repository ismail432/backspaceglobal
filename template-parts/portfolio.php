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
                            <li class="filter" data-filter="all">All</li>
                            <?php echo backspace_gallery_category(); ?>

                        </ul>
                    </div>
                </div>
                <div class="col-md-8 col-lg-7" data-ref="mixitup-container">
                    <div class="row">
                        <?php echo backspace_gallery_photos(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Portfolio Area End-->


<?php  get_footer(); ?>