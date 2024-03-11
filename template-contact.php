<?php

/** 
 * 
 * Template Name: Contact Page
 * 
 * 
 */


get_header();

?>
<?php get_template_part('template-parts/content', 'page'); ?>


<!-- CONTACTS-3
				============================================= -->
<section id="contacts-3" class="bg-color-01 wide-60 contacts-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section-title mb-60 text-center">
                    <!-- Title 	-->
                    <h3 class="h3-xl txt-color-01">Have Any Questions?</h3>

                    <!-- Text -->
                    <p class="p-lg txt-color-05 pb-30">
                        You can contact us through the form below, through phone, email, or in person, and our team will
                        gladly help you with our expertise.</p><br>
                    <a href="https://www.fresha.com/providers/ilash-health-spa-u92j25pw?dppub=true"
                        class="btn btn-md btn-color-02 color-01-hover p-4">Make an Appointment</a>

                </div>
            </div>
        </div>



        <div class="row">


            <!-- CONTACT FORM -->
            <div class="col-md-7 col-lg-8">

                <!-- Title -->
                <h4 class="h4-xs txt-color-01">Send A Message</h4>

                <!-- Text -->
                <p class="txt-color-05">If you want to ask anything just fill in the form below.</p>

                <!-- Form -->
                <div class="form-holder">

                    <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 4 ) ); ?>

                </div>
            </div> <!-- END CONTACT FORM -->


            <!-- CONTACTS INFO -->
            <div class="col-md-5 col-lg-4">
                <div class="contacts-info mb-40">

                    <!-- Title -->
                    <h4 class="h4-xs txt-color-01">Contact Details</h4>

                    <!-- Text -->
                    <p class="txt-color-05">We have two bustling locations within the Houston area. Choose whichever is
                        more convenient or closer to you.
                    </p>

                    <!-- LOCATION -->
                    <div class="cbox-1 mt-25 mb-25">
                        <h5 class="h5-xs txt-color-01">Galleria Location</h5>
                        <p class="txt-color-05">2400 Augusta Dr Suite #110 Houston, TX 77057 </p>
                        <p class="txt-color-05"><span>Phone: </span> +1(281)-690-3563</p>
                        <p class="txt-color-05"><span>Email </span> <a
                                href="mailto:booking@lashextensionsbyfiona.com">booking@lashextensionsbyfiona.com</a>
                        </p>
                    </div>
                    <!-- PHONES -->
                    <div class="cbox-1 mb-25">
                        <h5 class="h5-xs txt-color-01">Sugar Land Location</h5>
                        <p class="txt-color-05">4131 Highway 6 Sugar Land, TX 77478</p>
                        <p class="txt-color-05"><span>Phone: </span> +1(713)-392-0281</p>
                        <p class="txt-color-05"><span>Email </span> <a
                                href="mailto:booking@lashextensionsbyfiona.com">booking@lashextensionsbyfiona.com</a>
                        </p>
                    </div>
                    <!-- WORKING HOURS -->
                    <div class="cbox-1">
                        <h5 class="h5-xs txt-color-01">Working Hours</h5>
                        <p class="txt-color-05"><span>Monday :</span> 8:00 AM - 9:00 PM</p>
                        <p class="txt-color-05"><span>Tuesday :</span> 8:00 AM - 9:00 PM</p>
                        <p class="txt-color-05"><span>Wednesday :</span> 8:00 AM - 9:00 PM</p>
                        <p class="txt-color-05"><span>Thursday :</span> 8:00 AM - 9:00 PM</p>
                        <p class="txt-color-05"><span>Friday :</span> 8:00 AM - 9:00 PM</p>
                        <p class="txt-color-05"><span>Saturday :</span> 9:00 AM - 7:30 PM</p>
                        <p class="txt-color-05"><span>Sunday :</span> 9:00 AM - 7:30 PM</p>
                    </div>

                </div>
            </div> <!-- END CONTACTS INFO -->


        </div> <!-- End row -->


    </div> <!-- End container -->
</section> <!-- END CONTACTS-3 -->




<!-- BANNER-5
				============================================= -->
<section id="banner-5" class="bg-fixed bg-image banner-section division">
    <div>
        <?php get_template_part( 'template-parts/content', 'banner' ); ?>
    </div>
</section> <!-- END BANNER-5 -->




<?php get_footer(); ?>