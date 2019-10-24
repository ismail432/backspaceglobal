<?php /* Template Name: Carrier */ get_header(); ?>

    <!--Meet Area Start-->
    <div class="meet-sec">
        <div class="meet-full-title d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-8">
                        <div class="text">
                            <?php global $backspace; echo $backspace['meet-sec-banner'];  ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="meet-text">
                        <?php global $backspace; echo $backspace['meet-text'];  ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Meet Area End-->

    <!--Meet Slider Area Start-->
    <div class="meet-slider owl-carousel">
        <?php echo meetslider(); ?>
    </div>
    <!--Meet Slider Area End-->

    <!--Job Area Start-->
    <div class="job-area-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>Currently We are Looking for</h2>
                    </div>
                </div>

                <?php echo lookfor(); ?>

                <div class="col-md-12">
                    <a href="#" class="more-openings"></a>
                </div>
                <hr>
            </div>
        </div>
    </div>
    <!--Job Area End-->
<?php get_footer(); ?>
