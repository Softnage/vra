<!doctype html>
<html lang="en">

<head>
    <title>Photo Gallery- VRA INternational Schools</title>
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
                    <img src="images/g-bg.jpg" alt="">
                    <div class="hero-text">
                        <h1 style="font-weight: 600; font-size:60px">Photo Gallery</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="photo-gallery">
            <div class="row gy-5">
                <div class="col-12 col-md-4">
                    <a href="images/g1.jpg" data-lightbox="gallery" data-title=" Room Image 1" download>
                        <img src="images/g1.jpg" alt="">
                    </a>
                </div>
                <div class="col-12 col-md-4">
                    <a href="images/g2.jpg" data-lightbox="gallery" data-title=" Room Image 2" download>
                        <img src="images/g2.jpg" alt="">
                    </a>
                </div>
                <div class="col-12 col-md-4">
                    <a href="images/g3.jpg" data-lightbox="gallery" data-title=" Room Image 3" download>
                        <img src="images/g3.jpg" alt="">
                    </a>
                </div>
                <div class="col-12 col-md-4">
                    <a href="images/g4.jpg" data-lightbox="gallery" data-title=" Room Image 1" download>
                        <img src="images/g4.jpg" alt="">
                    </a>
                </div>
                <div class="col-12 col-md-4">
                    <a href="images/g5.jpg" data-lightbox="gallery" data-title=" Room Image 2" download>
                        <img src="images/g5.jpg" alt="">
                    </a>
                </div>
                <div class="col-12 col-md-4">
                    <a href="images/g6.jpg" data-lightbox="gallery" data-title=" Room Image 3" download>
                        <img src="images/g6.jpg" alt="">
                    </a>
                </div>
                <div class="col-12 col-md-4">
                    <a href="images/g7.jpg" data-lightbox="gallery" data-title=" Room Image 1" download>
                        <img src="images/g7.jpg" alt="">
                    </a>
                </div>
                <div class="col-12 col-md-4">
                    <a href="images/g8.jpg" data-lightbox="gallery" data-title=" Room Image 2" download>
                        <img src="images/g8.jpg" alt="">
                    </a>
                </div>
                <div class="col-12 col-md-4">
                    <a href="images/g9.jpg" data-lightbox="gallery" data-title=" Room Image 3" download>
                        <img src="images/g9.jpg" alt="">
                    </a>
                </div>


            </div>
        </div>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

</html>
