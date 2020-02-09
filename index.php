<div class="blog-section" style="background: #f8f8f8;">

<?php /* Template Name: Blog */ get_header(); ?>

    <div class="main-blog-title" style="background: url(<?php global $backspace; echo $backspace['main-blog-bg']['url'];  ?>" alt="Photo"">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <?php
                    $backpopular = new WP_Query(array(

                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'year' => 2019,
                        'month' => 9

                    ));

                    if (have_posts()) : while( $backpopular-> have_posts()) : $backpopular-> the_post(); ?>

                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="post-details">
                            <ul>
                                <li>Posted by <b><?php the_author(); ?></b></li>
                                <li><i class="fa fa-circle" aria-hidden="true"></i></li>
                                <li><?php the_time('M d,Y'); ?></li>
                            </ul>
                        </div>
                        <a target="_blank" href="<?php the_permalink(); ?>" class="read-post-btn">Read Post</a>


                    <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>

    <!--Single Blog Banner Area End-->

    <!--Main-Blog Section Start-->
    <div class="main-blog-sec">
        <div class="container">
            <div class="row">



                   <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="signle-blog-img">
                            <?php the_post_thumbnail('blog-img', array('class' => 'post-thumb')); ?>
                            <div class="img-hover">
                                <div class="bttn-area">
                                    <a href="<?php the_permalink(); ?>" class="share-btn">Read Post</a>
                                    <br>
                                    <a href="#" class="read-post-btn"><i class="fas fa-share"></i>Share</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-blog-text">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <div class="post-details">
                                <ul>
                                    <li>Posted by <b><?php the_author(); ?></b></li>
                                    <li><i class="fa fa-circle" aria-hidden="true"></i></li>
                                    <li><?php the_time("g:i a"); ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <?php endwhile; else : ?>

                    <p><?php esc_html_e('Sorry, no posts matched  your criteria.'); ?></p>

                <?php endif; ?>


            </div>
        </div>
    </div>

    <!--<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Pagination</h2>
                <?php /*the_posts_pagination(); */?>
            </div>
        </div>
    </div>-->

<?php get_footer(); ?>
</div>
