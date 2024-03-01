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

<!-- ABOUT-1	============================================= -->
<section id="about-1" class="bg-color-01 wide-60 about-section division">
    <div class="container">
        <div class="row d-flex align-items-center">
            <!-- IMAGE BLOCK -->
            <div class="col-md-5 col-lg-6">
                <div class="img-block left-column pc-10 mb-40">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/images/image-02.png'; ?>" alt="about-image">
                </div>
            </div>

            <div class="col-md-7 col-lg-6">
                <div class="txt-block right-column pc-15 mb-40">

                    <!-- Title -->
                    <span class="txt-color-06 bolder ">About US </span>

                    <h3 class="h3-md txt-color-01">Redefine the way beauty is perceived</h3>

                    <!-- Text -->
                    <p class="txt-color-05 custom-height p-lg">In the fast-paced world of beauty and cosmetics, eyelash extensions at Lash Extensions by Fiona, have emerged as a quintessential service, offering individuals the chance to enhance their natural beauty with a simple yet transformative procedure. At the center of this revolution is Fiona, a visionary with a distinctive combination of skills, training, and dedication focused on reshaping the norms of eyelash extension services.
                    </p>


                </div>
            </div> <!-- END TEXT BLOCK -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- END ABOUT-1 -->

<section id="about-lash" class="bg-color-02 wide-60 services-section division">
    <div class="container">

        <!-- SECTION TITLE -->
        <div class="row">

            <div class="col-lg-10 offset-lg-1">
                <div class="section-title mb-60 text-center">

                    <!-- Title 	-->
                    <span class="txt-color-06 bolder">Our Story</span>

                    <h3 class="h3-xl txt-color-01"> Our Lash Stylists
                    </h3>
                    <!-- Text -->
                    <p class="p-lg txt-color-05">Our lash stylists different expertise comes together to meet the needs of all our clients.
                    </p>

                </div>
            </div>

            <div class="col-lg-6 d-flex pt-20 left-text">
                <div class=" txt-container">
                    <h4 class=" text-black font-weight-bold mb-4 h4-sm">A Harmonious Blend of Talent</h4>
                    <p class="text-dark font-italic custom-height p-lg">Fiona, the founder of Lash Extensions by Fiona, ventured into the beauty industry with a story of dedication, education, and creativity. Originally hailing from China, she fully immersed herself in the marketing realm before delving into the specialized yet thriving industry of eyelash extensions. </p>
                    <ul class="text-left tracking-wider custom-bullet text-black ">
                        <li class="list-item txt-color-05 custom-height p-lg">With her knack for grasping client needs swiftly and offering flawless solutions, she has distinguished her company by pleasing more than 98% of her customers. Fiona's personal training spans two continents, refining her skills in China and then receiving professional beauty training in the United States. This diversified background has given her a distinct skill set, specialized in quick grafting, precise design, and long-lasting lash applications. </li> &nbsp;
                        <li class="list-item txt-color-05 custom-height p-lg">Lash Extensions by Fiona houses a carefully selected team of eyelash technicians from Vietnam and the Philippines, each contributing their unique specialties to the group. Some individuals excel in creating voluminous lashes that make a bold statement, while others perfect the art of natural lash extensions for a subtle enhancement. </li>
                    </ul><br />
                </div>
            </div>

            <!-- Image (visible on larger screens) -->
            <div class="col-md-5 col-lg-6 d-none d-md-block">
                <img src="<?php echo get_template_directory_uri(). '\images\image-02-2-2.png';?>" class="img-fluid  ml-md-5" alt="Responsive Image">
            </div>
        </div>

        <div class="row d-md-none">
        <div class="col-12">
            <img src=" <?php echo get_template_directory_uri(). '\images\image-02-2-2.png';?>" class="img-fluid" alt="Responsive Image">
        </div>
    </div>
    </div>
</section>

<section id="team-1" class="bg-color-01 wide-60 team-section division">
    <div class="container">

        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section-title mb-60 text-center">
                    <!-- Transparent Header -->
                    <h2 class="tra-header txt-color-02">Our Team</h2>
                    <!-- Title -->
                    <h3 class="h3-xl txt-color-01">Relax, You're In Good Hands</h3>
                    <!-- Text -->
                    <p class="p-lg txt-color-05">Our team will go the distance to ensure you're comfortable and enjoying your experience.</p>
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
                    <p class="p-lg txt-color-05"> Our team has years of expertise and training to answer and ease any of your concerns. Contact us today if you want to learn more.
                    </p>

                </div>
            </div>
        </div>


        <div class="row">


            <!-- CONTACT FORM -->
            <div class="col-md-7 col-lg-8 ">
                <div class="google-map mb-40">

                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8393924898796!2d144.9536363151022!3d-37.817230742014345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4e793770d3%3A0x9e44d6ad0d76ba7c!2zMTIxIEtpbmcgU3QsIE1lbGJvdXJuZSBWSUMgMzAwMCwg0JDQstGB0YLRgNCw0LvQuNGP!5e0!3m2!1sru!2sua!4v1469002590349" width="600" height="450"></iframe>

                </div>
            </div> <!-- END CONTACT FORM -->


            <!-- CONTACTS INFO -->
            <div class="col-md-5 col-lg-4">
                <div class="contacts-info pc-25 mt-35 mb-40">

                    <!-- LOCATION -->
                    <div class="cbox-1 mb-30">
                        <h5 class="h5-sm txt-color-01">Our SugarLand Location</h5>
                        <p class="p-md txt-color-05">4131 Highway 6 Sugar Land, 77478</p>
                    </div>
                    <div class="cbox-1 mb-30">
                        <h5 class="h5-sm txt-color-01">Our Galleria Location</h5>
                        <p class="p-md txt-color-05 list-">2400 Augusta DrHouston, TX 77057</p>
                    </div>


                    <!-- PHONES -->
                    <div class="cbox-1 mb-30">
                        <h5 class="h5-sm txt-color-01">Contact Info</h5>
                        <p class="p-md txt-color-05"><span>Phone :</span>+1(281)-690-3563</p>
                        <p class="p-md txt-color-05"><span>Phone :</span>+1(713)-690-3563</p>
                        <p class="p-md txt-color-05"><span>Email :</span> <a href="mailto:yourdomain@mail.com">fiona160715@yahoo.com</a></p>
                        </p>
                    </div>

                    <!-- EMAILS -->
                    <div class="cbox-1">
                        <h5 class="h5-sm txt-color-01">Working Hours</h5>
                        <p class="p-md txt-color-05"><span> Monday :</span> 8:00 AM - 9:00 PM</p>
                        <p class="p-md txt-color-05"><span> Tuesday :</span> 8:00 AM - 9:00 PM</p>
                        <p class="p-md txt-color-05"><span> Wednesday :</span> 8:00 AM - 9:00 PM</p>
                        <p class="p-md txt-color-05"><span> Thursday :</span> 8:00 AM - 9:00 PM</p>
                        <p class="p-md txt-color-05"><span> Friday :</span> 8:00 AM - 9:00 PM</p>
                        <p class="p-md txt-color-05"><span> Saturday :</span> 9:00 AM - 7:30 PM</p>
                        <p class="p-md txt-color-05"><span> Sunday :</span> 9:00 AM - 7:30 PM</p>
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