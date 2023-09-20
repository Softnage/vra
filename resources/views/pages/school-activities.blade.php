<!doctype html>
<html lang="en">

<head>
    <title>School Activities - VRA INternational Schools</title>
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
                    <img src="images/sch-ac-bg.jpg" alt="">
                    <div class="hero-text">
                        <h1 style="font-weight: 600; font-size:60px">School Activities</h1>
                        <p>
                            Our school activities are diverse, engaging, and designed to promote student enrichment,
                            creativity, and social development. </p>
                    </div>
                </div>
            </div>
        </div>

        <section>
            <div class="row gy-5 staff">
                <!-- <div class="col-md-6 middle">
                <img src="https://placehold.jp/600x550.png" alt="">
            </div> -->
                <div class="col-md-12 one-">
                    <h2>School Assembly
                    </h2>
                    <p>
                        The Schools hold formal Assemblies at the beginning of term, on resumption from mid-term
                        holidays,
                        and at the end of term. Formal Assemblies serve as a point of take-off for the resumption of
                        academic activities. The Headmasters and Supervisors officiate at formal assemblies. Morning
                        assemblies are held every day of the school week (Mondays to Fridays).
                    </p>

                    <h2>Assembly Format
                    </h2>
                    <p>
                        The daily assemblies for the primary, junior and senior secondary schools take different forms.
                        The
                        primary schools have a constant format. The following format indicates the daily schedules for
                        the
                        junior and secondary schools: <br>
                        Monday: All students and sta meet at the School’s Assembly Hall <br>
                        Tuesday: All students of each House meet their respective House masters/mistresses in the
                        classrooms. <br>
                        Wednesday: Class meetings (various classes meet their form tutors in the classroom) <br>
                        Thursday: Hymn Practice (All st udents and the Music Master meet at the Assembly Hall) <br>
                        Friday: All students and sta meet at the Schools Assembly Hall. <br>
                        Assemblies are normally held for ten minutes. At assembly, a hymn is sung, followed by readings
                        from
                        the scripture. A prayer is said, the national pledge/anthem is recited or sung. General or
                        particular announcements (if any) are made. After the announcements students and sta disperse to
                        their various classrooms/offices.
                    </p>
                </div>
            </div>
        </section>

        <section>
            <div class="row gy-5 staff">

                <div class="col-md-12 one-">
                    <h2> School Worship
                    </h2>
                    <p>

                        For the sake of Boarders, the Akosombo School community worships together on Sunday evenings
                        from
                        6.30 – 8.00p.m. at the School Assembly Hall. The worship format follows a pattern drawn by the
                        Chaplain, and approved by the Director. The Preachers for the Sunday worship are normally drawn
                        from
                        the Akosombo Township. The Director and teachers also preach on some occasions. On special
                        occasions, such as Thanksgiving and Conrmation services, church services are held in the
                        mornings at
                        10.00a.m.
                    </p>

                    <h2> Speech & Prize Giving Day / Open Day
                    </h2>
                    <p>

                        VRA Schools desire to motivate its pupils and students to take their academic work seriously.
                        Speech
                        Days are normally held on a Saturday in the months of July/November. At such functions, prizes
                        are
                        given to students who have excelled or made good progress
                    </p>
                </div>
                <!-- <div class="col-md-6 middle">
                <img src="https://placehold.jp/600x550.png" alt="">
            </div> -->
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
