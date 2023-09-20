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

        <div class="container-fluid" style="margin-top: 23vh; margin-bottom:5rem`">
            <div class="details">
                @if ($news->image)
                    <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="img-fluid"
                        height="300px" width="300px" style="object-fit: cover; border-radius: 10px">
                @endif
                <div>
                    <div class="news-title">
                        {{ $news->title }}
                    </div>
                    @php
                        echo $news->content;
                    @endphp
                </div>
            </div>
        </div>

        <style>
            @media only screen and (max-width: 780px) {
                .gd {
                    display: flex !important;
                    flex-direction: column !important;
                }
            }
        </style>
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

    <style>
        .details {
            display: grid;
            grid-template-columns: 1fr 1fr;
        }

        .news-title {
            font-size: 2rem;
            font-weight: 700;
        }

        .details img {
            width: 90%;
            height: 500px;
        }

        @media only screen and (max-width: 780px) {
            .details {
                grid-template-columns: 1fr;
            }

            .details img {
                width: 100%;
                height: 300px;
            }
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

</html>
