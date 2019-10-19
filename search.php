<?php /* Template Name: Blog */ get_header(); ?>

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

                <div class="col-lg-8">
                    <h4 class="search-headbar">Your Keyword <span><?php _e(''); echo '&quot;'.$s.'&quot;'; ?></span> Results are bellow </h4>
                </div>

                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 silly-pad">
                    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                        <div class="sily-text">
                            <h2><?php the_title();?></h2>
                        </div>
                        <!--sily-text-->
                        <div class="blog-comment d-flex">
                            <div class="blog-user-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/women-small.png" alt="women">
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
                        <div class="blog-p-text">
                            <p class="blog-text-left"> <span>N</span>ulla quntum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos.</p>
                            <p class="amet-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nos trud exercitation ulla.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nos trud exercitation ulla.</p>
                            <p>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia conse quuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                            </p>
                        </div>
                        <div class="neque">
                            <div class="neque-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/disappear-img.jpg" alt="img">
                                <div class="neque-im-text">
                                    <h6>How to disappear completely and never be found</h6>
                                    <p>Photo copyright Jason Gilespy</p>
                                </div>
                            </div>
                            <div class="neque-text">
                                <p>Qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam ali quam quaerat vo luptatem.Accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores.</p>
                            </div>
                        </div>

                        <p class="sed-ut">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia conse quuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                        </p>

                        <div class="train-text-area text-center">
                            <div class="master-border text-center"></div>
                            <h2>“Train yourself to let go of<br class="tr-br">
                                everything you fear to lose.”
                            </h2>
                            <h4>Master Yoda</h4>
                            <div class="master-border text-center"></div>
                        </div>

                        <p class="sed-ut">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia conse quuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                        </p>

                        <div class="de-br-ar d-flex justify-content-center">
                            <ul>
                                <li><a href=""> <?php the_category(); ?></a></li>

                            </ul>
                        </div>

                        <hr>

                        <div class="comment area">
                            <h6>2 Comments</h6>
                        </div>
                        <div class="blog-form">
                            <form>
                                <div class="blog-text-area">
                                    <div class="comment-user d-flex justify-content-start">
                                        <div class="comment-user-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/women-small.png" alt="women">
                                        </div>
                                        <div class="comment-label">
                                            <label for="comment">John Doe</label>
                                        </div>
                                        <div class="dot"></div>
                                        <div class="comment-time">
                                            <span>Right now</span>
                                        </div>

                                    </div>
                                    <textarea class="form-control"></textarea>
                                    <div class="post-btn d-flex justify-content-end">
                                        <a href="" class="btn">Post</a>
                                    </div>
                                </div>
                                <hr>
                                <div class="blog-text-area">
                                    <div class="comment-user d-flex justify-content-start">
                                        <div class="comment-user-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/women-small.png" alt="women">
                                        </div>
                                        <div class="comment-label">
                                            <label for="comment">John Doe</label>
                                        </div>
                                        <div class="dot"></div>
                                        <div class="comment-time">
                                            <span>12/04/2019 at 12:45am</span>
                                        </div>
                                    </div>
                                    <div class="comment-content">
                                        <p>One of the details that 'A Christmas Story' gets right is the threat of having your mouth washed out with Lifebuoy soap. Not any soap. Lifebuoy. </p>
                                        <div class="replay-share-area d-flex">
                                            <div class="re-sh-item"> <a href=""><i class="fas fa-angle-up"></i></a></div>
                                            <div class="re-sh-item"><span>|</span></div>
                                            <div class="re-sh-item"><a href=""><i class="fas fa-angle-down"></i></a></div>
                                            <div class="re-sh-item"><span><a href="">Reply</a></span></div>
                                            <div class="re-sh-item"><span><a href="">Share</a></span></div>
                                            <div class="re-sh-item"><a href=""><i class="fas fa-angle-right"></i></a></div>

                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="blog-text-area blog-com-area-last">
                                    <div class="comment-user d-flex justify-content-start">
                                        <div class="comment-user-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/women-small.png" alt="women">
                                        </div>
                                        <div class="comment-label">
                                            <label for="comment">John Doe</label>
                                        </div>
                                        <div class="dot"></div>
                                        <div class="comment-time">
                                            <span>12/04/2019 at 12:45am</span>
                                        </div>
                                    </div>
                                    <div class="comment-content">
                                        <p>One of the details that 'A Christmas Story' gets right is the threat of having your mouth washed out with Lifebuoy soap. Not any soap. Lifebuoy. </p>
                                        <div class="replay-share-area d-flex">
                                            <div class="re-sh-item"> <a href=""><i class="fas fa-angle-up"></i></a></div>
                                            <div class="re-sh-item"><span>|</span></div>
                                            <div class="re-sh-item"><a href=""><i class="fas fa-angle-down"></i></a></div>
                                            <div class="re-sh-item"><span><a href="">Reply</a></span></div>
                                            <div class="re-sh-item"><span><a href="">Share</a></span></div>
                                            <div class="re-sh-item"><a href=""><i class="fas fa-angle-right"></i></a></div>

                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </form>
                        </div>
                    <?php endwhile; else : ?>

                        <p><?php esc_html_e('Sorry, no posts matched  your criteria.'); ?></p>

                    <?php endif; ?>

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