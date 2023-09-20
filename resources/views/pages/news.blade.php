<!doctype html>
<html lang="en">

<head>
    <title> News & Updates - VRA INternational Schools</title>
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
                        <h1 style="font-weight: 600; font-size:60px">News</h1>
                    </div>
                </div>
            </div>
        </div>

        <section>
            <div class="slidde">
                <div #swiperRef="" class="swiper mySwiper8" style="padding: 0 1rem">
                    <div class="swiper-wrapper">
                        @if ($news->count() > 0)
                            @foreach ($news as $new)
                                <div class="swiper-slide">
                                    <div class="card event-slide">
                                        <div class="card-image"
                                            style="width: 100%; height: 250px; background-image:url('{{ asset('storage/' . $new->image) }}'); background-position: center; background-size: cover;">
                                        </div>
                                        <div class="title">
                                            <h1 style="font-size: 25px ">{{ $new->title }}</h1>
                                        </div>
                                        <div class="message">
                                            <p style="font-size: 16px">
                                                {{ Illuminate\Support\Str::limit($new->content, 100) }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p></p>
                        @endif

                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="slidde">
                <div #swiperRef="" class="swiper mySwiper9" style="padding: 0 1rem">
                    <div class="swiper-wrapper">
                        @if ($events->count() > 0)
                            @foreach ($events as $event)
                                <div class="swiper-slide">
                                    {{-- <a href="{{ route('details', $event->id) }}" class="event-link"> --}}
                                    <div class="card event-slide">
                                        <div class="card-image"
                                            style="width: 100%; height: 250px; background-image:url('{{ asset('storage/' . $event->image) }}'); background-position: center; background-size: cover;">
                                        </div>
                                        <div class="title">
                                            <h1 style="font-size: 25px ">{{ $event->title }}</h1>
                                        </div>
                                        <p class="date" style="font-size: 12px; text-align:center">
                                            {{ \Carbon\Carbon::parse($event->start_time)->format('F d, Y g:i A') }}
                                            - {{ \Carbon\Carbon::parse($event->end_time)->format('F d, Y g:i A') }}
                                        </p>
                                        <div class="message">
                                            <p style="font-size: 16px">
                                                {{ Illuminate\Support\Str::limit($event->description, 200) }}
                                            </p>
                                        </div>
                                    </div>
                                    {{-- </a> --}}
                                </div>
                            @endforeach
                        @else
                            <p></p>
                        @endif
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="col-12 banner" data-aos="fade-up" data-aos-duration="3000">
                <h1>Building Strong Leaders, Tomorrow Starts Today</h1>
                <p>At VRA International Schools, we are committed to providing the training and resources necessary
                    to
                    develop the leaders of tomorrow, today.Our dedicated faculty and staff work tirelessly to
                    provide
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

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox.min.js"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <!--Animate On Scroll JS-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script>
        script src = " https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js" < script >
            var swiper = new Swiper(".mySwiper9", {
                autoplay: true,
                rewind: false,
                slidesPerView: 3,
                spaceBetween: 30,
                pagination: {
                    el: ".swiper-pagination",
                    type: "fraction",
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            }); <
        />

        <
        script >
            var swiper = new Swiper(".mySwiper8", {
                autoplay: true,
                rewind: false,
                slidesPerView: 3,
                spaceBetween: 30,
                pagination: {
                    el: ".swiper-pagination",
                    type: "fraction",
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            }); <
        />

        <script
        src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity = "sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin = "anonymous" >
    </script>


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
                                    text-align: center;
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
                            </style>
</body>

</html>
