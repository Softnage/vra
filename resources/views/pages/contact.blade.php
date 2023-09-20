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
                    <img src="images/c-bg.jpg" alt="">
                    <div class="hero-text">
                        <h1 style="font-weight: 600; font-size:60px">Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>

        <section>
            <div class="contact-details">
                <div class="row">
                    <div class="col-md-4 loc">
                        <h1 class="c_location"><span class="material-symbols-outlined" style="font-size: 40px;">
                                location_on
                            </span></h1>
                        <h4>Akosombo, Akuse & Aboadze</h4>
                    </div>
                    <div class="col-md-4 loc">
                        <h1 class="c_location"><span class="material-symbols-outlined" style="font-size: 40px;">
                                mail
                            </span></h1>
                        <h4> vraschools@vra.com</h4>
                    </div>
                    <div class="col-md-4 loc">
                        <h1 class="c_location"><span class="material-symbols-outlined" style="font-size: 40px;">
                                phone_in_talk
                            </span></h1>
                        <h4>+233 553 248000</h4>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="row contact-page">
                <div class="col-md-6 ">
                    <div class="swiper mySwiper" style="height: 100%; margin-top:-20px;">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1016469.5987910159!2d-1.3280143236291009!3d5.628205363715214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1020a91ed2e4dfdd%3A0x1c792c482abe294f!2sAkosombo%20International%20School!5e0!3m2!1sen!2sgh!4v1680732714225!5m2!1sen!2sgh"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="swiper-slide">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1017550.6301828487!2d-2.779148468750042!3d4.971696599999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfe764a1ae60d567%3A0xa5b059a59b855497!2sVRA%20International%20School%20Aboadze!5e0!3m2!1sen!2sgh!4v1680733185934!5m2!1sen!2sgh"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="swiper-slide">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126930.35200470516!2d0.01926000588176051!3d6.187785387384593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1020a8e4d7ba0843%3A0x56dd3f4317124d77!2sAkosombo%20International%20School%20(Basic)!5e0!3m2!1sen!2sgh!4v1680733490399!5m2!1sen!2sgh"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <!-- Map -->
                </div>
                <div class="col-md-6 mb-4" style="background-image: url(./images/shape-209.png);">
                    <!-- Contact form -->
                    <form action="#" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control form-control--" id="message" name="message"></textarea>
                        </div>
                        <button type="submit" class="btn "
                            style=" background-color: #123156; color:#fff; height:49px;">Send
                            Message</button>
                    </form>
                </div>
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
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            autoplay: true,
            effect: "coverflow",
        });
    </script>
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
