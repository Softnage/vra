<!doctype html>
<html lang="en">

<head>
    <title>About Us- VRA INternational Schools</title>
    @include('layouts.head')
</head>

<body>
    <div class="whole overflow-hidden">
        <div class="div fixed-top">
            @include('layouts.top')
            @include('layouts.nav')
        </div>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/about-bg.jpg" alt="">
                    <div class="hero-text">
                        <h1 style="font-weight: 600; font-size:60px">About Us</h1>
                        <p>
                            Discover the joy of learning at our innovative and inclusive school.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row gy-5 about">
            <div class="col-md-6 middle">
                <img src="images/about.jpg" alt="">
            </div>
            <div class="col-md-6 one-">
                <h1>About Us</h1>
                <p>
                    The VRA Schools are registered with Ghana Education Service (GES) as private schools, consisting of
                    two
                    main departments, i.e. Senior High and Basic Schools with the following units:
                    <br>
                    <br>
                    <li style="list-style-type: disc;">3 Kindergartens (i.e. Akosombo: 1, Akuse: 1, & Aboadze: 1)</li>

                    <li style="list-style-type: disc;"> 3 Primary Schools (i.e. Akosombo: 1, Akuse: 1, & Aboadze: 1)
                    </li>

                    <li style="list-style-type: disc;"> 3 Junior High Schools (Akosombo: 1, Akuse: 1, Aboadze: 1)</li>

                    <li style="list-style-type: disc;"> A 5-stream Senior High School located at the main campus in
                        Akosombo.</li>
                    <br>
                </p>
                <h1>Our Crest & Motto</h1>
                <p>
                    All the schools use the same crest and motto. The Schools’ crest depicts in picturesque form the
                    ideals
                    of truth, knowledge and power. It crystalises the Schools’ aims and objectives.
                    <br>
                    <br>
                    The Schools' motto: TRUTH IS OUR LIGHT (VERITAS NOBIS LUX) aptly sums up the aims and objectives of
                    VRA
                    International Schools.
                </p>
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
