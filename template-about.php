<?php

/** 
 * 
 * Template Name: About Page
 * 
 * 
 */


get_header();

?>
<?php get_template_part('template-parts/content', 'page'); ?>

<!-- ABOUT-1
				============================================= -->
<section id="about-1" class="bg-color-01 wide-60 about-section division">
    <div class="container">
        <div class="row d-flex align-items-center">


            <!-- IMAGE BLOCK -->
            <div class="col-md-5 col-lg-6">
                <div class="img-block left-column pc-10 mb-40 image-hidden">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/images/image-01.png'; ?>"
                        alt="about-image">
                </div>
            </div>
            <!-- QUOTE BLOCK -->
            <div class="col-md-7 col-lg-6">
                <div class="quote-block right-column pc-15 mb-40">
                    <!-- Quote -->
                    <blockquote class="blockquote">
                        <p class="quote-txt">Your Beauty and Success Starts Here</p>
                        <footer class="blockquote-footer">Lash Extension By Fiona</footer>
                    </blockquote>
                </div>

                <div class="info-block pc-15 mb-40">
                    <!-- Brief info about our lash extension company -->
                    <p class="lead txt-color-05">Discover the excellence of Fiona Lash Extension Company:</p>

                    <!-- List -->
                    <ul class="list-unstyled txt-list txt-color-05">
                        <li class="list-item">
                            <i class="fas fa-check"></i>
                            <p>Customized lash extension services tailored to your unique style</p>
                        </li>
                        <li class="list-item">
                            <i class="fas fa-check"></i>
                            <p>Premium quality lash products for long-lasting beauty</p>
                        </li>
                        <li class="list-item">
                            <i class="fas fa-check"></i>
                            <p>Expert technicians dedicated to your comfort and satisfaction</p>
                        </li>
                        <li class="list-item">
                            <i class="fas fa-check"></i>
                            <p>Personalized consultations to achieve your desired look</p>
                        </li>
                    </ul>
                </div>
            </div>



        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- END ABOUT-1 -->



<!-- TEAM-1
				============================================= -->
<section id="team-1" class="bg-color-01 wide-60 team-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section-title mb-60 text-center">

                    <!-- Transparent Header -->
                    <h2 class="tra-header txt-color-02">Our Team</h2>

                    <!-- Title 	-->
                    <h3 class="h3-xl txt-color-01">Relax, You're In Good Hands</h3>

                    <!-- Text -->
                    <p class="p-lg txt-color-05">Aliquam a augue suscipit, luctus neque purus ipsum neque undo dolor
                        primis libero tempus, blandit a cursus varius at magna tempor
                    </p>

                </div>
            </div>
        </div>

    </div> <!-- End container -->
</section> <!-- END TEAM-1 -->

<!-- CONTACTS-1 ============================================= -->
<section id="contacts-1" class="bg-color-02 wide-60 contacts-section division">
    <div class="container">
        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section-title mb-60 text-center">

                    <!-- Transparent Header -->
                    <h2 class="tra-header txt-color-02">Contact Us</h2>

                    <!-- Title 	-->
                    <h3 class="h3-xl txt-color-01">Have Any Questions?</h3>

                    <!-- Text -->
                    <p class="p-lg txt-color-05">Aliquam a augue suscipit, luctus neque purus ipsum neque undo dolor
                        primis libero tempus, blandit a cursus varius at magna tempor
                    </p>

                </div>
            </div>
        </div>


        <div class="row">


            <!-- CONTACT FORM -->
            <div class="col-md-7 col-lg-8">
                <div class="google-map mb-40">

                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8393924898796!2d144.9536363151022!3d-37.817230742014345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4e793770d3%3A0x9e44d6ad0d76ba7c!2zMTIxIEtpbmcgU3QsIE1lbGJvdXJuZSBWSUMgMzAwMCwg0JDQstGB0YLRgNCw0LvQuNGP!5e0!3m2!1sru!2sua!4v1469002590349"
                        width="600" height="450"></iframe>

                </div>
            </div> <!-- END CONTACT FORM -->


            <!-- CONTACTS INFO -->
            <div class="col-md-5 col-lg-4">
                <div class="contacts-info pc-25 mt-35 mb-40">

                    <!-- LOCATION -->
                    <div class="cbox-1 mb-30">
                        <h5 class="h5-sm txt-color-01">Our Location</h5>
                        <p class="p-md txt-color-05">121 King Street, Melbourne,</p>
                        <p class="p-md txt-color-05">Victoria 3000 Australia</p>
                    </div>

                    <!-- PHONES -->
                    <div class="cbox-1 mb-30">
                        <h5 class="h5-sm txt-color-01">Contact Info</h5>
                        <p class="p-md txt-color-05"><span>Phone :</span> +12 3 3456 7890</p>
                        <p class="p-md txt-color-05"><span>Email :</span> <a
                                href="mailto:yourdomain@mail.com">hello@yourdomain.com</a></p>
                        <p class="p-md txt-color-05"><span>Skype :</span> <a href="tel:123456789">support.spamagic</a>
                        </p>
                    </div>

                    <!-- EMAILS -->
                    <div class="cbox-1">
                        <h5 class="h5-sm txt-color-01">Working Hours</h5>
                        <p class="p-md txt-color-05"><span>Mon – Fri :</span> 9:00 AM - 7:00 PM</p>
                        <p class="p-md txt-color-05"><span>Saturday :</span> 9:00 AM - 6:00 PM</p>
                        <p class="p-md txt-color-05"><span>Sunday :</span> Closed</p>
                    </div>

                </div>
            </div> <!-- END CONTACTS INFO -->


        </div> <!-- End row -->


    </div> <!-- End container -->
</section> <!-- END CONTACTS-1 -->











<?php get_footer(); ?>


<script>
$(document).ready(function() {
    var quoteBlock = $('.quote-block');
    var quoteDisplayed = false;

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 100 && !quoteDisplayed) { // Adjust the scroll threshold as needed
            quoteBlock.addClass('scrolled');
            quoteDisplayed = true;
        }
    });
});


function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Function to handle scrolling
function handleScroll() {
    const imageBlock = document.querySelector('.img-block');
    const infoBlock = document.querySelector('.info-block');

    if (isInViewport(imageBlock, infoBlock)) {
        imageBlock.classList.add('image-visible');
        infoBlock.classList.add('visible');
        window.removeEventListener('scroll', handleScroll);

    }
}

// Listen for scroll events
window.addEventListener('scroll', handleScroll);
</script>