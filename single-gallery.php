<?php get_header(); ?>

<!--Portfolio Area Start-->
<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<div class="portfolio-setails-sec">
    <div class="full-title d-flex align-items-center">
        <h2 class="mx-auto"><?php the_title();?></h2>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="portfolio-slider  owl-carousel">
                    <div class="slider-item">
                        <div class="portfolio-slider-image">
                            <?php the_post_thumbnail('custom-size', array('class' => 'post-thumb')); ?>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="portfolio-slider-image">
                            <?php the_post_thumbnail('custom-size', array('class' => 'post-thumb')); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 offset-md-1">
                <div class="portfolio-main-text">
                    <h2><?php the_title();?></h2>
                   <?php the_content(); ?>
                    <span><i class="fa fa-heart-o"></i>5</span>
                </div>
            </div>
            <div class="col-md-4">
                <table class="portfolio-table">
                    <tr>
                        <td>Client:</td>
                        <td>Mikado Themes</td>
                    </tr>
                    <tr>
                        <td>Category:</td>
                        <td><?php the_category(); ?></td>
                    </tr>
                    <tr>
                        <td>Date:</td>
                        <td><?php the_time('M d,Y'); ?></td>
                    </tr>
                    <tr>
                        <td>Share:</td>
                        <td>Fb. Tw. Ln. Pi.</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-12">
                <span><hr></span>
            </div>
            <a href="<?php the_permalink(); ?>" class="back"><i class="fas fa-angle-double-left"></i>Back to Projects</a>
        </div>



    </div>
</div>
<!--Portfolio Area End-->

<?php endwhile; else : ?>

    <p><?php esc_html_e('Sorry, no posts matched  your criteria.'); ?></p>

<?php endif; ?>


<?php get_footer(); ?>