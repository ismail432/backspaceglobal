<?php get_header(); ?>

	<main role="main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <article id="post-404" class="error-page">

                            <h1><?php _e( '404 Page not found', 'backspace' ); ?></h1>
                            <h2>
                                <a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'backspace' ); ?></a>
                            </h2>

                        </article>
                        <!-- /article -->
                    </div>
                </div>
            </div>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
