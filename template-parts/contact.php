<?php /* Template Name: Contact */ get_header(); ?>

<!--Map Area Start-->
<div class="map-sec">
    <div class="map-area">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d117658.98533144569!2d89.46246080884268!3d22.84528658285614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1496311516915" allowfullscreen></iframe>
    </div>
</div>
<!--Map Area End-->

<!--Contact Area Start-->
<div class="contact-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-text">
                    <h2>Let’s Get in Touch!</h2>
                    <p>Do you have any questions regarding our product or company? Send us a message or call our Amsterdam office, we will answer all your questions!</p>
                    <h4>Contact</h4>
                    <a href="#">welcome@backspacebd.com</a>
                    <ul>
                        <li>NL: <a href="#"> +31 (0) 202 613 844</a></li>
                        <li>UK: <a href="#"> +44 (0) 20 38 68 0284</a></li>
                        <li>ES: <a href="#"> +34 (0) 902 018 059</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact-form">
                    <h3>We’d love to hear from you</h3>
                    <form>

                        <?php dynamic_sidebar( 'contact' ); ?>
                        <!--<div class="form-group">
                            <label for="fullName">Full Name</label>
                            <input type="text" class="form-control" id="fullName" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="phoneNumber">Phone Number</label>
                            <input type="text" class="form-control" id="phoneNumber" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Your Message</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                        </div>
                        <button type="submit" class="btn">Send Message</button>-->



                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Contact Area End-->


