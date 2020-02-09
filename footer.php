<!--Footer Area Start-->
<footer class="section footer-sec" id="footer-sec" style="background: url(<?php global $backspace; echo $backspace['footer-bg']['url'];  ?>" alt="Photo"">
    <div class="container">
        <div class="footer-top">
            <div class="row">

                <div class="col-lg-5 col-md-3 col-xs-6">
                    <div class="footer-single first-footer-part">
                        <?php dynamic_sidebar( 'footer-first' ); ?>
                    </div>
                </div>
                <?php dynamic_sidebar( 'footer-second' ); ?>

                <?php dynamic_sidebar( 'footer-third' ); ?>


            </div>
        </div>
        <div class="footer-line"></div>
        <div class="footer-bottom">
            <div class="row">
                <div class="col-md-6">
                    <div class="copy-right">
                        <p>© 2019 – <a href="<?php echo bloginfo('siteurl'); ?>">Backspaceglobal</a></p>
                    </div>
                </div>
                <div class="col-md-6 text-right">
                    <div class="footer-link">
					    <?php copyright_first(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Footer Area End-->




<?php wp_footer(); ?>



		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
