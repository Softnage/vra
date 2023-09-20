<!doctype html>
<html lang="en">

<head>
    <title>School Anthem - VRA INternational Schools</title>
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
                    <img src="images/wel-bg.jpg" alt="">
                    <div class="hero-text">
                        <h1 style="font-weight: 600; font-size:60px">School Anthem</h1>
                        <p>
                            Experience the difference of a student-centered education at our esteemed school.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row gy-5 about school one-" data-aos="fade-right" data-aos-delay="500">
            <div class="col-md-6 ">
                <h1 data-aos="zoom-out-up" data-aos-delay="500">School Anthem</h1>
                <h3 data-aos="zoom-out-up" data-aos-delay="500">TRUTH IS OUR LIGHT
                </h3>
                <p data-aos="zoom-in-up" data-aos-delay="500">
                    1. A.I.S., "Truth is our Light" <br>
                    Holy truth is all we seek; <br>
                    God is with us in His might; <br>
                    Source of light to show the way; <br>
                    We desire a Godly wisdom; <br>
                    And a Godly understanding; <br>
                    Of the world, and of Humanity; <br>
                    May your will for us, O Lord, be done. <br>
                </p>

                <p data-aos="zoom-in-up" data-aos-delay="500">
                    2. A.I.S., "Truth is our Light" <br>
                    We shall serve with all our might; <br>
                    We would shine where e’re we go; <br>
                    We'll be faithful so to do; <br>
                    All who enter shall be given; <br>
                    Truth, and Knowledge, Wisdom, power, <br>
                    Strength to face the World to-mo-rrow; <br>
                    May your will for us, O lord, be done <br>
                </p>
                <b data-aos="fade-right" data-aos-delay="500"><i>* (Melody adapted from Johannes Brahms’ Academic
                        Festival Overture)

                    </i></b>

            </div>
            <div class="col-md-6 middle" data-aos="fade-left" data-aos-delay="500">
                <img src="images/anthem.png" alt="">
            </div>
        </div>
    </div>

    <section>
        <div class="col-12 banner" data-aos="fade-up" data-aos-duration="3000">
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
