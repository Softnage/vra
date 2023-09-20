<!doctype html>
<html lang="en">

<head>
    <title>VRA INternational Schools</title>
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
                    <img src="images/bg-cur.jpg" alt="">
                    <div class="hero-text">
                        <h1 style="font-weight: 600; font-size:60px">Curriculum</h1>
                        <p>
                            Our curriculum is thoughtfully designed to provide a comprehensive and dynamic educational
                            experience for our students
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <section>
            <div class="curriculum-">
                <div class="col-12">
                    <h1 style="text-align: left;">Curriculum</h1>
                    <p>
                        The Schools provide quality education to pupils/students at the rst and second cycle levels. The
                        pupils/students are prepared for the Basic Education Certicate Examination (BECE) and the West
                        African
                        Senior Secondary Certicate Examinations (WASSCE) conducted by the Ghana Education Service (GES)
                        and
                        the
                        West African Examination Council (WAEC). Additionally, the Secondary Department at Akosombo
                        prepares
                        interested students on part-time basis for the University of Cambridge Overseas School Certicate
                        'O'
                        level Examinations, as well as the SAT.
                    </p>
                </div>
            </div>
        </section>

        <section>
            <div class="division">
                <div class="row one-">
                    <div class="col-md-6">
                        <h1>Subjects Offered: Primary/ <br> Junior Secondary Schools</h1>
                        <ul>
                            <li>English Language</li>
                            <li>Integrated Science/General Science</li>
                            <li>Mathematics</li>
                            <li>Ghanaian Language/Culture</li>
                            <li>French</li>
                            <li>Pre-vocational Skills</li>
                            <li>Pre-Technical Skills</li>
                            <li>Religious & Moral Education</li>
                            <li>Physical Education (Including Swimming)</li>
                            <li>Social Studies</li>
                            <li>ICT</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h1>Senior High School</h1>
                        <h3>Core Subjects</h3>
                        <ul>
                            <li>English Language</li>
                            <li>Integrated Science</li>
                            <li>Mathematics</li>
                            <li>Physical Education</li>
                            <li>Social Studies</li>
                            <li>ICT</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


        <section>
            <div class="division">

                <div class="row one-">
                    <h1 style="text-align: center; padding-bottom:30px;">Elective Subjects</h1>
                    <div class="col-md-3">
                        <h2>General Science</h2>
                        <ul>
                            <li>Biology</li>
                            <li>Chemistry</li>
                            <li>Geography</li>
                            <li>Physics</li>
                            <li>Mathematics</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h2>General Arts</h2>
                        <ul>
                            <li>Economics</li>
                            <li>Literature in English</li>
                            <li>French</li>
                            <li>Geography</li>
                            <li>General Knowledge in Arts</li>
                            <li>History</li>
                            <li>Mathematics</li>
                            <li>GOvernment</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h2>Home Economics</h2>
                        <ul>
                            <li>Economics</li>
                            <li>Management in Living</li>
                            <li>French</li>
                            <li>Foods & Nutrition</li>
                            <li>General Knowledge in Art</li>
                            <li>Biology</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h2>Visual Arts</h2>
                        <ul>
                            <li>Graphic Design</li>
                            <li>General Knowledge in Art</li>
                            <li>Ceramics</li>
                        </ul>
                    </div>
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
<style>
    #calendar {
        max-width: 900px;
        margin: 0 auto;
        margin-top: 50px;
        text-decoration: none;
    }

    a {
        text-decoration: none;
    }

    .admission-home {
        margin-top: 120px;
    }
    .one- h2{
        color: #cc3366;
    }
</style>
