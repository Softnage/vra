<!doctype html>
<html lang="en">

<head>
    <title>Home - VRA INternational Schools</title>
    @include('layouts.head')
</head>

<body>
    <div class="whole overflow-hidden">
        <div class="div ">
            @include('layouts.top')
            @include('layouts.nav')

        </div>
        <style>

        </style>

        <Section>
            <div class="bboxx">
                @foreach ($admissionNotices as $admissionNotice)
                    <div class="bjad">
                        <h1 class="text-center">{{ $admissionNotice->title }}</h1>
                        <p class="moving-textt" data-description="{{ $admissionNotice->description }}"></p>
                    </div>
                @endforeach
                <div class="ghdias">
                    @foreach ($admissionForms as $admissionForm)
                        <a href="{{ asset('storage/' . $admissionForm->file_path) }}" target="_blank" class="admission-">
                            <i class="fa-regular fa-file-pdf"></i> DOWNLOAD ADMISSION PDF
                        </a>
                    @endforeach
                </div>
            </div>
        </Section>

        <section>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <img src="images/slider1.jpg" alt="">
                        <div class="slide-text">
                            <h1>VRA Schools
                                <br>
                                Admission Opens
                            </h1>
                            <br>
                            @foreach ($admissionForms as $admissionForm)
                                <a href="{{ asset('storage/' . $admissionForm->file_path) }}" target="_blank"
                                    class="admission-">
                                    <i class="fa-regular fa-file-pdf"></i> DOWNLOAD ADMISSION PDF
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <img src="images/slider2.jpg" alt="">
                        <div class="slide-text">
                            <h1>Exploring <br>
                                Art & Culture</h1>
                            <p>
                                At VRA International Schools, we believe in the transformative power of art and culture
                                to enrich and inspire our students.
                            </p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <img src="images/slider3.jpg" alt="">
                        <div class="slide-text">
                            <h1>Fostering a Culture
                                <br>
                                of Sportsmanship
                                <br>
                            </h1>
                            <p>
                                We believe in the importance of promoting physical activity and teamwork through our
                                comprehensive sports programs. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <style>
            .admission- {
                background-color: #123156;
                margin: 0 auto;
                padding: 15px 30px;
                text-decoration: none;
                color: #fff;
                border-radius: 5px;
                box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            }

            .admission-open a {
                background-color: #123156;
                margin: 0 auto;
                padding: 15px 30px;
                text-decoration: none;
                color: #fff;
                border-radius: 5px;
                box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            }

            .admission-open {
                padding: 0 5%;
                padding-block: 100px;
                background-color: #e6bf3e;
                display: flex;
                flex-direction: column;
                justify-content: center;
                margin: 0 auto;
                background-image: url(./images/g4.jpg);
                background-position: center;
                background-size: cover;
                color: aliceblue;
                background-attachment: fixed;
            }

            .galcard {
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            .gal {
                display: grid;
                grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
            }

            .gal img {
                width: 100px;
                height: 100px;
                object-fit: cover;
                border-radius: 5px;
                margin-top: 1rem;
            }

            .gal h3 {
                margin-top: 3rem;
            }

            .gall img {
                height: 400px;
                width: 95%;
                object-fit: cover;
                margin-bottom: 1rem;
            }

            .card-grid {
                display: grid;
                grid-template-columns: 1fr 1fr 1fr 1fr;
            }

            .card {
                width: 95%;
                box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
                border-radius: 5px;
                margin-top: 50px;
            }

            .card-date-grid {
                display: grid;
                grid-template-columns: 1fr 1fr;
            }

            @media (max-width: 1500px) {
                .card-grid {
                    display: grid;
                    grid-template-columns: 1fr 1fr 1fr;
                }

                .card {
                    margin-left: auto;
                    margin-right: auto;
                }
            }

            @media (max-width: 1200px) {
                .card-grid {
                    display: grid;
                    grid-template-columns: 1fr 1fr;
                }
            }

            @media (max-width: 750px) {
                .card-grid {
                    display: grid;
                    grid-template-columns: 1fr;
                }
            }

            .slogan {
                display: flex;
                justify-content: flex-end;
                color: #fff;
            }

            .slogan li {
                margin: 5px;
            }

            .media a {
                color: #fff;
                margin: 5px;
            }

            .navbar {
                box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
                padding-left: 5%;
                padding-right: 5%;
                background-color: #fff;
            }

            .navbar .nav-link,
            .navbar .dropdown-item {
                color: #0c055b;
                background-color: transparent;
                border-color: transparent;
            }

            .navbar-logo {
                width: 80px;
                height: 80px;
                background-image: url(../images/logo.jpg);
                background-position: center;
                background-repeat: no-repeat;
                background-size: contain;
            }

            .swiper {
                width: 100%;
                height: 100%;
            }

            .swiper-slide {
                text-align: center;
                font-size: 18px;
                background: #fff;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .swiper-slide img {
                display: block;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .explore-heading {
                margin-top: 50px;
            }

            .explore-heading h1 {
                font-size: 30px;
                text-align: center;
                margin-bottom: 20px;
                color: #0c055b;
            }

            .explore {
                display: grid;
                grid-template-columns: 1fr 1fr 1fr;
                padding: 0 5%;
            }

            .contain {
                position: relative;
                width: 95%;
            }

            .image {
                display: block;
                width: 100%;
                height: auto;
            }

            .overlay {
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                height: 100%;
                width: 100%;
                opacity: 0;
                transition: 0.5s ease;
                background-color: #008cba;
            }

            .overlay p {
                color: #fff;
            }

            .contain:hover .overlay {
                opacity: 1;
            }

            .text {
                color: white;
                font-size: 20px;
                position: absolute;

                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                align-self: center;
                padding: 0 5%;
                width: 100%;
                height: 100%;
            }

            .pre_school_bg {
                background-image: url(../images/pre_school_bg.jpg);
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }

            .primary_bg {
                background-image: url(../images/primary_bg.jpg);
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }

            .jhs_bg {
                background-image: url(../images/jhs_bg.jpg);
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }

            .home-welcome {
                background-color: #f4f6f8;
                padding: 0 5%;
                margin-top: 50px;
                padding-block: 50px;
            }

            .principal_text {
                width: 50%;
            }

            .principal_text h2 {
                color: #0c055b;
            }

            .p-btn {
                padding: 15px 55px;
                background-color: #0c055b;
                border: none;
                box-shadow: rgba(0, 0, 0, 0.15) 0px 3px 3px 0px;
                border-radius: 5px;
            }

            .p-btn a {
                text-decoration: none;
                color: #fff;
            }

            .principal {
                margin: 0 auto;
                text-align: center;
            }

            .overview {
                margin-block: 50px;
                padding: 0 5%;
            }

            .overview_text {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                align-self: center;
            }

            .overview_text h2 {
                width: 100%;
                text-align: left;
            }

            .global-image {
                width: 95%;
            }

            .news {
                background-color: #f4f6f8;
                padding: 0 5%;
                padding-block: 30px;
            }

            .stories {
                display: flex;
                flex-direction: column;
                align-items: center;
                align-self: center;
                justify-content: center;
            }

            .photo {
                padding: 0 5%;
                display: grid;
                grid-template-columns: 1fr 1fr 1fr;
            }

            .gallery {
                width: 95%;
                border: 2px solid tomato;
                height: 300px;
                margin-top: 30px;
            }

            .title {
                margin-top: 50px;
                padding: 0 5%;
            }

            .slidde {
                padding-block: 50px;
                background-color: #f4f6f8;
                margin-top: 50px;
            }

            .swiper {
                width: 100%;
                height: 100%;
            }

            .swiper-slide {
                text-align: center;
                font-size: 18px;
                background: #fff;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .swiper-slide img {
                display: block;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .swiper2 {
                width: 100%;
                height: 300px;
                margin: 20px auto;
            }

            .message {
                padding: 1rem
            }
        </style>
        <section>
            <div class="touch-point overflow-hidden" data-aos="zoom-in-down" data-aos-easing="ease-in-sine">
                <h1 data-aos="fade-right" data-aos-easing="ease-in-sine">Our Education Touch
                    Points
                </h1>
                <div class="row edu circle_area">
                    <div class="col-md-3 circle_box" data-aos="zoom-in-down" data-aos-easing="ease-in-sine">
                        <div class="circle_con">
                            <div class="circle c_one" style="background: #e6bf3e;"></div>
                            <div class="one">
                                <img src="images/a.png" alt="">
                            </div>
                        </div>
                        <h3>Pre-School</h3>
                    </div>
                    <div class="col-md-3 circle_box" data-aos="zoom-in-down" data-aos-easing="ease-in-sine">
                        <div class="circle_con">
                            <div class="circle c_two" style="background: #c49c8f;"></div>
                            <div class="two">
                                <img src="images/b.png" alt="">
                            </div>
                        </div>
                        <h3>Primary</h3>
                    </div>
                    <div class="col-md-3 circle_box" data-aos="zoom-in-down" data-aos-easing="ease-in-sine">
                        <div class="circle_con">
                            <div class="circle c_one" style="background: #7bc5c3;"></div>
                            <div class="one">
                                <img src="images/c.png" alt="">
                            </div>
                        </div>
                        <h3>Junior High</h3>
                    </div>
                    <div class="col-md-3 circle_box" data-aos="zoom-in-down" data-aos-easing="ease-in-sine">
                        <div class="circle_con">
                            <div class="circle c_two" style="background: #ecd0b2;"></div>
                            <div class="two">
                                <img src="images/d.png" alt="">
                            </div>
                        </div>
                        <h3>High School</h3>
                    </div>
                </div>
                <p>VRA International Schools, where we cater to the academic needs of pre-school, primary,
                    junior high, and senior high students with excellence and dedication</p>
            </div>
        </section>

        <section>
            <div class="about-home">
                <div class="row gy-5">
                    <div class="col-md-6" data-aos="fade-right" data-aos-easing="ease-in-sine">
                        <h6>ABOUT US</h6>
                        <h1>Welcome to VRA
                            <br> International School
                        </h1>
                        <h5>Truth is our Light</h5>
                        <p>
                            You are warmly welcome to the VRA Schools, comprising a group of private schools owned by
                            the
                            Volta River Authority, located at Akosombo, Akuse, and Aboadze. You must count it a
                            life-chance
                            to be admitted to these reputable institutions. It is our hope that you will appreciate the
                            opportunity of being here, and use all the available facilities the Schools offer to your
                            fullest advantage.
                        </p>
                        <button class="button-89" role="button">
                            <a href="about.html" style="text-decoration: none; color: #373B44;">READ MORE</a>
                        </button>
                    </div>
                    <div class="col-md-6" data-aos="fade-left" data-aos-easing="ease-in-sine">
                        <img src="images/about-us.png" alt="" style="width: 100%;">
                    </div>
                </div>
            </div>
        </section>


        <section class="hidee" style="  background-color: #123156;">
            <div class="row ">
                <div class="col-md-2">
                </div>
                <div class="col-md-10" data-aos="fade-left" data-aos-easing="ease-in-sine">
                    <img src="images/global-2 (1).png" alt="" style="float:right; height:400px;  width:80%;">
                </div>
            </div>
            <div class="campuses">

                <div class="col-md-8" data-aos="fade-right" data-aos-easing="ease-in-sine">
                    <h1>INSPIRING AMBITION AND SUCCESS </h1>
                </div>
                <div class="col-md-8">
                    <p data-aos="fade-right" data-aos-easing="ease-in-sine">
                        VRA International Schools' globally respected curricula, crafted by world-leading education
                        experts,
                        revolutionize the way we approach learning through our six core educational pillars.
                    </p>
                </div>
                <div class="swiper mySwiper6" data-aos="fade-right" data-aos-easing="ease-in-sine">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-img-top" src="images/s1.png" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"> Academic Excellence:</h5>
                                    <p class="card-text">
                                        providing students with a rigorous, comprehensive, and well-rounded education.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-img-top" src="images/s2.png" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Character Development:</h5>
                                    <p class="card-text">
                                        nurturing positive character traits and values that prepare students for
                                        responsible
                                        citizenship
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-img-top" src="images/s3.png" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Innovation and Creativity:</h5>
                                    <p class="card-text">
                                        encouraging innovative thinking, creativity, and problem-solving skills.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-img-top" src="images/s4.png" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Global Awareness:</h5>
                                    <p class="card-text">
                                        promoting an understanding and appreciation of diverse cultures and global
                                        issues.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-img-top" src="images/s5.png" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Environmental Stewardship:</h5>
                                    <p class="card-text">
                                        developing an appreciation for the natural world and encouraging responsible
                                        environmental practices.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-img-top" src="images/s6.png" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Wellness and Health:</h5>
                                    <p class="card-text">
                                        promoting physical, emotional, and mental wellness, and fostering healthy habits
                                        and
                                        lifestyles.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <span class="material-symbols-outlined">

                    </span>

                    <div class="swiper-pagination"></div>
                </div>
                <div class="swiper6_nav">
                    <button class="material-symbols-outlined prev">navigate_next</button>
                    <button class="material-symbols-outlined next">navigate_next</button>
                </div>
            </div>

        </section>
        @if ($events->count() > 0)
            <div class="news">
                <h6>THE LATEST NEWS, EVENTS, AND UPDATES AT VRA INTERNATIONAL SCHOOLS</h6>
                <h2>EVENTS</h2>
                <div class="row gy-5">
                    <div class="col-md-4 news-one">

                        <style>
                            .read-more {
                                margin-top: 30px;
                            }

                            .read-more a {
                                background-color: #123156;
                                padding: 15px 35px;
                                color: aliceblue;
                                text-decoration: none;
                                border-radius: 5px;
                            }
                        </style>
                    </div>
                </div>

                <div class="slidde">
                    <div #swiperRef="" class="swiper mySwiper9" style="padding: 0 1rem">
                        <div class="swiper-wrapper">
                            @if ($events->count() > 0)
                                @foreach ($events as $event)
                                    <div class="swiper-slide">
                                        <a href="{{ route('details', $event->id) }}" class="event-link">
                                            <div class="card event-slide">
                                                <div class="card-image"
                                                    style="width: 100%; height: 250px; background-image:url('{{ asset('storage/' . $event->image) }}'); background-position: center; background-size: cover;">
                                                </div>
                                                <div class="title">
                                                    <h1 style="font-size: 25px ">{{ $event->title }}</h1>
                                                </div>
                                                <p class="date" style="font-size: 12px; text-align:center">
                                                    {{ \Carbon\Carbon::parse($event->start_time)->format('F d, Y g:i A') }}
                                                    -
                                                    {{ \Carbon\Carbon::parse($event->end_time)->format('F d, Y g:i A') }}
                                                </p>
                                                <div class="message">
                                                    <p style="font-size: 16px">
                                                        {{ Illuminate\Support\Str::limit($event->description, 100) }}
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            @else
                                <p></p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <Section style="margin-bottom: 4rem">
            <div class="admission-open" style="margin-top: 50px;">
                @foreach ($admissionNotices as $admissionNotice)
                    <div class="bjad">
                        <h1 class="text-center">{{ $admissionNotice->title }}</h1>
                        <p class="moving-textt" data-description="{{ $admissionNotice->description }}"></p>
                    </div>
                @endforeach
                @foreach ($admissionForms as $admissionForm)
                    <a href="{{ asset('storage/' . $admissionForm->file_path) }}" target="_blank"
                        class="admission-">
                        <i class="fa-regular fa-file-pdf"></i> DOWNLOAD ADMISSION PDF
                    </a>
                @endforeach
            </div>
        </Section>
        <section>
            @if ($news->count() > 0)
                <div class="title">
                    <h1 style="margin-bottom: -3rem">News</h1>
                </div>
                <div class="slidde">
                    <div #swiperRef="" class="swiper mySwiper8" style="padding: 0 1rem">
                        <div class="swiper-wrapper">
                            @if ($news->count() > 0)
                                @foreach ($news as $new)
                                    <div class="swiper-slide">
                                        <div class="card event-slide">
                                            <a href="{{ route('newsDetails', $new->id) }}" class="event-link">
                                                <div class="card-image"
                                                    style="width: 100%; height: 250px; background-image:url('{{ asset('storage/' . $new->image) }}'); background-position: center; background-size: cover;">
                                                </div>
                                                <div class="">
                                                    <h1 style="font-size: 25px; text-align:center; margin-top: 1rem">
                                                        {{ $new->title }}</h1>
                                                </div>
                                                <div class="message">
                                                    <p style="font-size: 16px">
                                                        {{ Illuminate\Support\Str::limit($new->content, 100) }}
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p></p>
                            @endif

                        </div>
                    </div>
                </div>
            @endif
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
 <script src="js/script.js"></script>

<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
    const textElement = document.querySelector('.moving-textt'); // Use querySelector to select by class
    const text = 'Enroll your child for a transformative educational experience.';
    const typed = new Typed(textElement, {
        strings: [text],
        typeSpeed: 50,
        loop: true,
        loopCount: Infinity,
        showCursor: false,
    });
</script>


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
            loop: true,
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 6500,
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

    <script>
        const c_ones = document.querySelectorAll('.c_one')
        const c_twos = document.querySelectorAll('.c_two')
        window.onpointermove = () => {
            var top_value = parseInt(event.clientY)
            top_value = (top_value * 25) / 400
            var left_value = parseInt(event.clientX)
            left_value = (left_value * 20) / 800
            c_ones.forEach((circle, i) => {
                var x = (i * 5)
                circle.style.top = `${top_value + x}%`
                circle.style.left = `${left_value + x}%`
            })
            c_twos.forEach((circle, i) => {
                var x = (i * 5)
                circle.style.bottom = `${top_value + x}%`
                circle.style.right = `${left_value + x}%`
            })
        }
    </script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper3", {
            direction: "vertical",
            autoplay: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper6", {
            slidesPerView: 4,
            spaceBetween: 30,
            autoplay: 3,
            navigation: {
                nextEl: ".next",
                prevEl: ".prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>

<script>
    const makeSwipers = (slideNum) => {
        var swiper1 = new Swiper(".mySwiper9", {
            autoplay: true,
            rewind: false,
            slidesPerView: slideNum,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                type: "fraction",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
        var swiper2 = new Swiper(".mySwiper8", {
            autoplay: true,
            rewind: false,
            slidesPerView: slideNum,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                type: "fraction",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    }

    checkSize = (winSize) => {
        var slideNum = 3
        if (winSize > 999) {
            slideNum = 3
        } else if (winSize < 1000 && winSize > 780) {
            slideNum = 2
        } else if (winSize < 781) {
            slideNum = 1
        }
        makeSwipers(slideNum)
    }
    checkSize(window.innerWidth)
    console.log(window.innerWidth);

    window.onresize = () => {
        checkSize(window.innerWidth)
        console.log(window.innerWidth);
    }
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>

    <style>
        a {
            text-decoration: none;
        }
    </style>

</body>

</html>
