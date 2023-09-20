<!doctype html>
<html lang="en">

<head>
    <title> FAQs - VRA INternational Schools</title>
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
                    <img src="images/f-bg.jpg" alt="">
                    <div class="hero-text">
                        <h1 style="font-weight: 600; font-size:60px">FAQs</h1>

                    </div>
                </div>
            </div>
        </div>

        <section>
            <div class="row gy-5 staff">
                <!-- <div class="col-md-6">
                <img src="https://placehold.jp/600x550.png" alt="">
            </div> -->
                <div class="col-md-12 one-">
                    <h2>
                        FREQUENTLY ASKED QUESTIONS (FAQS)
                    </h2>
                    <p>
                        This page is curently under construction. Please check back again.
                    </p>
                </div>
            </div>
        </section>






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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

</html>
