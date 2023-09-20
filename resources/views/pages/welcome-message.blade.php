<!doctype html>
<html lang="en">

<head>
    <title>Welcome Message - VRA INternational Schools</title>
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
                    <img src="images/wel-bg.jpg " alt="">
                    <div class="hero-text">
                        <h1 style="font-weight: 600; font-size:60px">Welcome to VRA Schools</h1>
                        <p>
                            Join us in creating an enriching and empowering educational experience!
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <section>
            <div class="row gy-5 welcome">
                <div class="col-md-7 one-">
                    <h1>Welcome Message</h1>
                    <p>
                        You are warmly welcome to the VRA Schools, comprising a group of private schools owned by the
                        Volta
                        River Authority, located at Akosombo, Akuse, and Aboadze. You must count it a life-chance to be
                        admitted to these reputable institutions. It is our hope that you will appreciate the
                        opportunity of
                        being here, and use all the available facilities the Schools offer to your fullest advantage.
                        <br>
                        <br>
                        Akosombo is in the Eastern Region of Ghana. The environment is classic and the scenery
                        breathtaking.
                        There are hills and valleys, a serene Lake (the Volta) and the world’s famous Akosombo Dam. The
                        town
                        boasts of good infrastructure.
                        <br>
                        <br>
                        The township is properly laid out with well-paved streets, which are brightly lit at night. For
                        tourists on a pleasure trip, there is the Volta Hotel, and the Volta Lake Transport. It is
                        little
                        wonder that Akosombo was nominated as the most well planned and neatest town in Ghana in 1996.
                        It is
                        within a conducive environment such as this, that Akosombo International School is located. The
                        surroundings are most congenial, and the School has almost everything you will want to have at a
                        good educational institution.
                        <br>
                        <br>
                        Akuse is also in the Eastern Region of Ghana. It is a coastal grassland with warm temperatures.
                        The
                        environment is classic and the scenery breathtaking. There are hills and valleys, a serene Lake
                        (the
                        (Volta) and the Kpong Hydroelectric Dam.
                        <br>
                        <br>
                        Aboadze is in the Western Region of Ghana. The environment is classic and the scenery
                        breathtaking.
                        Our staff members constitute our single irreplaceable asset. They are knowledgeable, focused and
                        diligent, willing to sacrifice their time and energies in ensuring that students put in their
                        charge
                        excel.
                        <br>
                        <br>
                        The House Staff in charge of the boarding houses located at Akosombo are more than surrogate
                        parents. No student is just a face and a name; all their needs are identified and catered for.
                        Indeed, VRA Schools stand for selfless service, moral discipline, hard work and academic
                        excellence.
                        It is our vision to continue to nurture young people to be well balanced, highly motivated, with
                        enough courage and determination to face life’s challenges no matter where in the global market
                        place.
                        <br>
                        <br>
                        It is our ardent desire to make all VRA Schools places of serious study, with avenues for all
                        students to develop their creativity, aptitude for the Arts, Sciences, Music, IT, Business,
                        Sports
                        and Games, etc. We wish to harness every talent in our budding young people for the common good.
                        <br>
                        <br>
                        To Parents and Guardians
                        To you parents and guardians, we say, the best way to get to know all that VRA Schools have to
                        offer
                        is to stay in regular contact with the Schools. By doing so, you will be kept informed of all
                        the
                        meetings and functions of the Schools. Please arrange to attend PTA meetings, and enjoy a
                        cordial
                        relationship with us.
                        <br>
                        <br>
                        I look forward to meeting you in the new school year, and trust that your association with the
                        Schools will be everything you hope for.
                        <br>
                        <br>
                        Once again, you are welcome.
                    </p>
                </div>
                <div class="col-md-5 mm middle">
                    <img src="images/wel.jpg" alt="" style="width:100%;" class="down">
                    <h1>QUICK LINKS</h1>
                    <ul class="list-group">
                        <li style="list-style-type: none;"><a class="list-group-item"
                                href="welcome-message.html">Welcome
                                Message</a></li>

                        <li style="list-style-type: none;"><a class="list-group-item" href="about.html">About Us</a>
                        </li>

                        <li style="list-style-type: none;"><a class="list-group-item" href="history.html">Our
                                History</a>
                        </li>

                        <li style="list-style-type: none;"><a class="list-group-item"
                                href="school-organization.html">School
                                Organization</a></li>

                        <li style="list-style-type: none;"><a class="list-group-item" href="school-hymn.html">School
                                Hymn</a></li>

                        <li style="list-style-type: none;"><a class="list-group-item" href="school-anthem.html">School
                                Anthem</a></li>


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
