<div class="catg-search">

    <form action="<?php echo home_url( '/' ); ?>" method="get">
        <input class="search-field" placeholder="Search" value="" type="search" name="s">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>

</div>

<div class="catagories">
    <div class="catg-item d-flex">
        <?php dynamic_sidebar( 'categories' ); ?>
    </div>
</div>


<div class="post-area">
    <div class="po-head">
        <h5>Popular Post</h5>
    </div>
    <div class="post-item">
        <?php
        $backrecent = new WP_Query(array(

            'post_type'       => 'post',
            'posts_per_page' => 4,
            'orderby'        => 'title',
            'order'           => 'DESC',
            'category_name'  => 'Dollar'

        ));


        if (have_posts()) : while( $backrecent-> have_posts()) : $backrecent-> the_post(); ?>

        <div class="post-img">
            <a href="#"> <?php the_post_thumbnail('small', array('class' => 'post-thumb')); ?></a>
        </div>
        <div class="post-text">
            <h6><?php the_title(); ?></h6>
            <p><?php the_time('M d,Y'); ?></p>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>

    </div>

</div>
<div class="post-area">
    <div class="po-head">
        <h5>Recent Tweets</h5>
    </div>
    <div class="post-item">
        <div class="post-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tweet-img.png" alt="po-img">
        </div>
        <div class="tweet-text">
            <div class="d-flex justify-content-between">
                <h6>John Doe <span>@tweetdoe</span></h6>
                <small>1h</small>
            </div>
            <p>#Reddit's UX is horrible. What’s up?</p>
        </div>
    </div>
    <div class="post-item">
        <div class="post-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tweet-img.png" alt="po-img">
        </div>
        <div class="tweet-text">
            <div class="d-flex justify-content-between">
                <h6>John Doe <span>@tweetdoe</span></h6>
                <small>10h</small>
            </div>
            <p>#Reddit's UX is horrible. What’s up?</p>
        </div>
    </div>
    <div class="post-item">
        <div class="post-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tweet-img.png" alt="po-img">
        </div>
        <div class="tweet-text">
            <div class="d-flex justify-content-between">
                <h6>John Doe <span>@tweetdoe</span></h6>
                <small>1m</small>
            </div>
            <p>#Reddit's UX is horrible. What’s up?</p>
        </div>
    </div>
    <div class="post-item">
        <div class="post-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tweet-img.png" alt="po-img">
        </div>
        <div class="tweet-text">
            <div class="d-flex justify-content-between">
                <h6>John Doe <span>@tweetdoe</span></h6>
                <small>5sec</small>
            </div>
            <p>#Reddit's UX is horrible. What’s up?</p>
        </div>
    </div>
</div>
<div class="follow-btn text-center">
    <a href="" class="btn">FOLLOW</a>
</div>
<div class="instagram-item">

    <?php dynamic_sidebar('instagram') ?>

</div>
