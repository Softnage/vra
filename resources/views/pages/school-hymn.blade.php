<!doctype html>
<html lang="en">

<head>
    <title>School Hymn - VRA INternational Schools</title>
    @include('layouts.head')
</head>

<body>
    <div class="whole overflow-hidden">
        <div class="div fixed-top">
            @include('layouts.top')
            @include('layouts.nav')
        </div>
        <div class="swiper mySwiper mt-5">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/hym-bg.jpg" alt="">
                    <div class="hero-text">
                        <h1 style="font-weight: 600; font-size:60px">School Hymn</h1>
                        <p>
                            Enroll your child in our school and embark on a journey of academic excellence and personal
                            growth.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row gy-5 about school one-" data-aos="fade-right" data-aos-delay="500">
            <div class="col-md-6 ">
                <h1 data-aos="zoom-out-up" data-aos-delay="500">SCHOOL HYMN</h1>
                <h3 data-aos="zoom-out-up" data-aos-delay="500">LIKE A RIVER GLORIOUS
                </h3>
                <!-- <p data-aos="zoom-out-up" data-aos-delay="500">
                1. Like a river glorious <br>
                Is God’s perfect peace <br>
                Over all victorious <br>
                In its bright increase <br>
                Perfect, yet it oweth <br>
                Fuller every day <br>
                Perfect, yet it groweth <br>
                Deeper all the way. <br>
            </p> -->
                <!-- <p>
                <b style="color: #222;"> Refrain:</b> <br>
                Stayed upon Jehovah, <br>
                Hearts are full blest, <br>
                Finding as He promised <br>
                Perfect peace and rest <br>
            </p>
            <p data-aos="zoom-out-up" data-aos-delay="500">
                2. Hidden in the hollow <br>
                Of his blessed hand, <br>
                Never foe can follow, <br>
                Never traitor stand; <br>
                Not a surge of worry <br>
                Not a shade of care <br>
                Not a blast of hurry <br>
                Tough the spirit there. <br>
            </p> -->

                <div class="row">
                    <div class="col-6">
                        <p data-aos="zoom-out-up" data-aos-delay="500">
                            1. Like a river glorious <br>
                            Is God’s perfect peace <br>
                            Over all victorious <br>
                            In its bright increase <br>
                            Perfect, yet it oweth <br>
                            Fuller every day <br>
                            Perfect, yet it groweth <br>
                            Deeper all the way. <br>
                        </p>
                    </div>
                    <div class="col-6" data-aos="zoom-out-up" data-aos-delay="500">
                        <p>
                            <b style="color: #222;"> Refrain:</b> <br>
                            Stayed upon Jehovah, <br>
                            Hearts are full blest, <br>
                            Finding as He promised <br>
                            Perfect peace and rest <br>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <p data-aos="zoom-out-up" data-aos-delay="500">
                            2. Hidden in the hollow <br>
                            Of his blessed hand, <br>
                            Never foe can follow, <br>
                            Never traitor stand; <br>
                            Not a surge of worry <br>
                            Not a shade of care <br>
                            Not a blast of hurry <br>
                            Tough the spirit there. <br>
                        </p>
                    </div>
                    <div class="col-6">
                        <p data-aos="zoom-out-up" data-aos-delay="500">
                            3. Every joy or trial <br>
                            Falleth from above <br>
                            Traced upon our dial <br>
                            By the Son of Love <br>
                            We may trust Him fully <br>
                            All for us to do; <br>
                            They who trust Him wholly <br>
                            Find Him wholly true. <br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 middle" data-aos="fade-left" data-aos-delay="500">
                <img src="images/hymn.png" alt="">
            </div>
        </div>

        <section>
            <div class="col-12 banner"data-aos="fade-up" data-aos-duration="3000">
                <h1>Building Strong Leaders, Tomorrow Starts Today</h1>
                <p>At VRA International Schools, we are committed to providing the training and resources necessary to
                    develop the leaders of tomorrow, today.Our dedicated faculty and staff work tirelessly to provide
                    students with the tools they need to become ethical, effective leaders.</p>
                <button class="btn-2" style="text-align: center;">
                    <a href="contact.html">CONTACT US</a>
                </button>
            </div>
        </section>

        <section>
            <div class="row admission-home">
                <div class="col-md-8 ">
                    <h1>Admissions</h1>
                    <button class="button-55" role="button" ">
                    <a href=" admission-process.html" style="text-decoration: none; color: #373B44;">MAKE ENQUIRY</a>
                </button>
                <h5>If you have any enquiry, please do not hesitate to contact us.</h5>
            </div>
            <div class="col-md-4">
                <img src="images/admission-logo.png" alt="" class="admission-top">
            </div>
        </div>
    </section>
    @include('layouts.footer')
    </div>
    <!--Animate On Scroll JS-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper2", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

</html>
