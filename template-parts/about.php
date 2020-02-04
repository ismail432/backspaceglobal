<?php /* Template Name: About */ get_header(); ?>
<!--Team-banner Area Start-->
<div class="team-banner-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="team-banner-text">
                    <h2><?php global $backspace; echo $backspace['blog-banner-title'];  ?></h2>
                    <p><?php global $backspace; echo $backspace['blog-banner-content'];  ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="team-banner-image">
    <img src="<?php global $backspace; echo $backspace['team-banner-image']['url'];  ?>" alt="Photo">
</div>
<!--Team-banner Area End-->


<!--About Us Area Start-->
<div class="about-us-sec">
    <div class="container">
        <div class="about-text">
            <div class="row">
                <div class="col-md-3">
                    <h5><?php global $backspace; echo $backspace['about-subtitle'];  ?></h5>
                </div>
                <div class="col-md-9">
                    <h2><?php global $backspace; echo $backspace['about-title'];  ?></h2>
                    <p><?php global $backspace; echo $backspace['about-content'];  ?></p>
                </div>
            </div>
        </div>
        <div class="about-text">
            <div class="row">
                <div class="col-md-3">
                    <h5><?php global $backspace; echo $backspace['about-subtitle-2nd'];  ?></h5>
                </div>
                <div class="col-md-9">
                    <h2><?php global $backspace; echo $backspace['about-title-2nd'];  ?></h2>
                    <p><?php global $backspace; echo $backspace['about-content-2nd'];  ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--About Us Area End-->


<!--Team Area Start-->
<div class="team-member-sec text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2>Our Team</h2>
                    <p>A multi-disciplinary team of creators.</p>
                </div>
            </div>

            <?php echo team(); ?>

            <div class="col-md-12 text-center">
                <div class="all-member">
                    <a href="">All Member</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Team Area End-->


<!--Career Area Start-->
<div class="career-sec" style="background: url(<?php global $backspace; echo $backspace['career-bg']['url'];  ?>" alt="Photo"">

</div>
<!--Career Area End-->


<!--Creative Area Start-->
<div class="creative-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="creative-image">
                    <img src="<?php global $backspace; echo $backspace['crea-imag']['url'];  ?>" alt="Photo">
                </div>
            </div>
            <div class="col-md-5">
                <div class="creative-text">
                    <h3> <?php global $backspace; echo $backspace['crea-head'];  ?></h3>
                    <a href="#"> <?php global $backspace; echo $backspace['crea-btn'];  ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Creative Area End-->

<?php get_footer(); ?>