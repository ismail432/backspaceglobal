<?php get_header(); ?>

<!--Single Blog Banner Area Start-->

<div class="blog-single-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

            </div>
        </div>
    </div>
</div>

<!--Single Blog Banner Area End-->

<!--16.Sily Area Start-->

<div class="sily-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 silly-pad">
                <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                    <div class="sily-text">
                        <h2><?php the_title();?></h2>
                    </div>
                    <!--sily-text-->
                    <div class="blog-comment d-flex">
                        <div class="blog-user-img">

                            <?php
                            $user = wp_get_current_user();

                            if ( $user ) :
                                ?>
                                <img src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="blog-user">
                            <p><span>By</span> <?php the_author(); ?> <span>In</span> <?php the_category(); ?> <span>Posted</span> <?php the_time('M d,Y'); ?></p>
                        </div>

                    </div>
                    <hr>
                    <div class="social-media d-flex justify-content-between">
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/google-plus.png" alt="google"></a>
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.png" alt="google"></a>
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter.png" alt="google"></a>
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp.png" alt="google"></a>
                    </div>
                    <hr>

                <div class="blog-all-content">
                    <div class="neque">
                        <div class="neque-img">
                            <?php the_post_thumbnail('', array('class' => 'post-thumb')); ?>
                        </div>

                        <?php the_content(); ?>

                </div>

                    <div class="de-br-ar d-flex justify-content-center">
                        <?php the_category(); ?>
                    </div>

                    <hr>

                    <div class="comment-area">
                        <?php comments_template( '', true ); ?>
                    </div>


                <?php endwhile; else : ?>

                    <p><?php esc_html_e('Sorry, no posts matched  your criteria.'); ?></p>

                <?php endif; ?>

            </div>
            </div>



            <!--Category Area-->


            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 silly-pad-2">
                <?php get_template_part('template-parts/sidebar'); ?>
            </div>

        </div>
    </div>
</div>

<!--Sily Area End-->


<?php get_footer(); ?>