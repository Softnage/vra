<!doctype html>
<html lang="en">

<head>
    <title> Social Guidance- VRA INternational Schools</title>
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
                    <img src="images/so-bg.jpg" alt="">
                    <div class="hero-text">
                        <h1 style="font-weight: 600; font-size:60px">Social Guidance</h1>
                        <p>
                            Our experienced and passionate teachers are committed to nurturing each student's unique
                            potential.
                        </p>
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
                    <h2>SOCIAL GUIDANCE</h2>
                    <p>
                        The social and behavioural welfare of students is the duty of all teaching staff and the
                        Housemasters/mistresses. Every student belongs to a particular House. There are four Houses that
                        provide boarding facilities to students at Akosombo campus. The boarding houses have been named
                        after eminent personalities who have played prominent roles in the building of the Akosombo
                        Hydro-Electric Dam. The Houses are Ames, Dobson, Kaiser, and Quartey. Housemasters/ mistresses
                        are
                        appointed to oversee the campus life of students in the various Houses. They respond to the
                        Senior
                        Housemaster/Housemistress. <br> <br>

                        <b> Boarding House Inspections</b> <br>
                        The Resident Housemasters/mistresses organise inspection of the dormitories every morning of the
                        school day (Monday - Friday). On Saturdays, weekend inspections are conducted by the
                        Housemasters/
                        mistresses. The Housemasters/mistresses also submit through the Senior Housemaster/mistress
                        weekly
                        inspection report to the Headmaster (Secondary Dept.). All Housemasters/mistresses go on an
                        inspection (together) once every term. This inspection is normally led by the Senior
                        Housemaster/Housemistress. <br> <br>

                        The Resident Housemasters/mistresses supervise work in the boarding house and ensure that the
                        school
                        schedules (at the boarding house) are obeyed
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
