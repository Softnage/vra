<!doctype html>
<html lang="en">

<head>
    <title>School Organization - VRA INternational Schools</title>
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
                    <img src="images/school-org-bg.jpg" alt="">
                    <div class="hero-text">
                        <h1 style="font-weight: 600; font-size:60px">School Organization</h1>
                        <p>
                            Unlock your child's potential with our dynamic curriculum and experienced faculty
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row gy-5 about school one-" data-aos="fade-right" data-aos-delay="500">
            <div class="col-md-6 ">
                <h1 data-aos="zoom-out-up" data-aos-delay="500">School Organization</h1>
                <p data-aos="zoom-out-up" data-aos-delay="500">
                    The Kindergarten Unit is made up of four schools: Akosombo Inter- national (1) Kyease Kindergarten
                    (1),
                    Akuse (1), and Aboadze (1).
                    <br>
                    There are three Primary/Grade Schools located at Akosombo (2), Akuse (1) and Aboadze (1); three
                    Junior
                    Secondary Schools at Akosombo (1), Akuse (1) and Aboadze (1); and a ve-stream Senior Secondary
                    School
                    located at Akosombo.
                </p>
                <br>
                <h1 data-aos="zoom-out-up" data-aos-delay="500">Administration</h1>
                <p data-aos="zoom-out-up" data-aos-delay="500">
                    The General Manager of VRA Schools exercises general supervision over all three campuses/ locations
                    (i.e. Akosombo, Akuse, and Aboadze). The Headmaster/ Headmistress - The General Manager - is in
                    charge
                    of the administration of all three basic schools at Akosombo, Akuse and Aboadze. She is assisted in
                    her
                    duties by three supervisors – one at each campus/location.
                    <br>
                    The Headmaster, Basic, is in charge of the Junior Secondary School in Akosombo. The Headmaster
                    (Senior
                    Secondary School) is in charge of the administration of the 5-stream Senior Secondary School at
                    Akosombo. She is assisted in her duties by two Assistant Headmasters/mistresses and Heads of subject
                    Departments.
                    <br>
                    Additionally, there are an administrative officer and assistants, and other staff who help with the
                    daily running of the Schools. Class/Form Tutors monitor the academic performance of the
                    pupils/students,
                    and advise and report on their progress. Form tutors complete Terminal Reports on the students. All
                    sections of the Schools have their own Supervisors who assist in the general running of the Schools.
                </p>
            </div>
            <div class="col-md-6 middle" data-aos="fade-left" data-aos-delay="500">
                <img src="images/history.png" alt="">
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
