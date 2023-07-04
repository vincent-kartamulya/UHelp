@extends('master')
@section('title', 'U-Help | Home')
@section('css')
    {{-- box icons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    {{-- custom css --}}
    <link rel="stylesheet" href="css/style.css">
@endsection
@section('content')
<div class="main">
    {{-- home section design --}}
    <section class="home" id="home">
        <div class="home-top">
            <div class="home-content">
                <h3><span class="multiple-text"></span></h3>
                <h1>MAKE YOUR DAILY<br>ACTIVITY EASIER</h1>
                <p>Streamline your form filling and certificate generation<br>with our website's innovative features<br><em>- Save time, stay secure! -</em></p>
                <a href="#services" class="btn">See Feature</a>
            </div>

            <div class="design">
                <div class="ornament1-img">
                    <img src="assets/bagus/ornament1.png" alt="">
                </div>
                <div class="home-img">
                    <img src="assets/bagus/binus.png" alt="">
                </div>
            </div>
        </div>

        <div class="ornament2-img">
            <img src="assets/bagus/ornament2.png" alt="">
        </div>
    </section>


    {{-- services section design --}}
    <section class="services" id="services">
        <h2 class="heading">Our <span>Services</span></h2>

        <div class="services-container">
            <div class="services-box transition duration-100 ease-in-out">
                <img class="cas1" src="assets/bagus/cas1.png" alt="">
                <img class="cas2" src="assets/bagus/cas2.png" alt="">
                <h3 class="font-medium">Click and Sit</h3>
                <p>Easily fill out shuttle booking forms in seconds with our automated feature
                <br><em>- Say goodbye to manual data entry and save time! Try it now! -</em></p>
                <a href="/clickandsit" class="btn">Start</a>
            </div>

            <div class="services-box transition duration-100 ease-in-out">
                <img class="sharetificate1" src="assets/bagus/sharetificate1.png" alt="">
                <img class="sharetificate2" src="assets/bagus/sharetificate2.png" alt="">
                <h3 class="font-medium">Sharetificate</h3>
                <p>Create and manage secure certificates with ease using our QR validation feature
                <br><em>- Save time and stay organized! -</em></p>
                <a href="/events" class="btn">Start</a>
            </div>
        </div>
    </section>


    {{-- portfolio section design --}}
    <section class="portfolio" id="portfolio">
        <h2 class="heading">Our <span>Activity</span></h2>

        <div class="portfolio-container">
            <div class="portfolio-box">
                <img src="assets/bagus/portfolio1.png" alt="">
                <div class="portfolio-layer">
                    <h4>Click and Sit</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil doloremque est suscipit nostrum delectus vitae quidem provident, totam odit praesentium ex officia aut dolorum at, ratione quibusdam amet dignissimos veritatis?</p>
                    {{-- <a href="#"><i class='bx bx-link-external' ></i></a> --}}
                </div>
            </div>
            <div class="portfolio-box">
                <img src="assets/bagus/portfolio2.png" alt="">
                <div class="portfolio-layer">
                    <h4>Click and Sit</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil doloremque est suscipit nostrum delectus vitae quidem provident, totam odit praesentium ex officia aut dolorum at, ratione quibusdam amet dignissimos veritatis?</p>
                    {{-- <a href="#"><i class='bx bx-link-external' ></i></a> --}}
                </div>
            </div>
            <div class="portfolio-box">
                <img src="assets/bagus/portfolio3.png" alt="">
                <div class="portfolio-layer">
                    <h4>Click and Sit</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil doloremque est suscipit nostrum delectus vitae quidem provident, totam odit praesentium ex officia aut dolorum at, ratione quibusdam amet dignissimos veritatis?</p>
                    {{-- <a href="#"><i class='bx bx-link-external' ></i></a> --}}
                </div>
            </div>
            <div class="portfolio-box">
                <img src="assets/bagus/portfolio4.png" alt="">
                <div class="portfolio-layer">
                    <h4>Sharetificate</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil doloremque est suscipit nostrum delectus vitae quidem provident, totam odit praesentium ex officia aut dolorum at, ratione quibusdam amet dignissimos veritatis?</p>
                    {{-- <a href="#"><i class='bx bx-link-external' ></i></a> --}}
                </div>
            </div>
            <div class="portfolio-box">
                <img src="assets/bagus/portfolio5.png" alt="">
                <div class="portfolio-layer">
                    <h4>Sharetificate</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil doloremque est suscipit nostrum delectus vitae quidem provident, totam odit praesentium ex officia aut dolorum at, ratione quibusdam amet dignissimos veritatis?</p>
                    {{-- <a href="#"><i class='bx bx-link-external' ></i></a> --}}
                </div>
            </div>
            <div class="portfolio-box">
                <img src="assets/bagus/portfolio6.png" alt="">
                <div class="portfolio-layer">
                    <h4>Sharetificate</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil doloremque est suscipit nostrum delectus vitae quidem provident, totam odit praesentium ex officia aut dolorum at, ratione quibusdam amet dignissimos veritatis?</p>
                    {{-- <a href="#"><i class='bx bx-link-external' ></i></a> --}}
                </div>
            </div>
        </div>
    </section>


    {{-- contact section design --}}
    <section class="contact" id="contact">
        <div class="contact-me">
            <h2 class="heading">Contact <span>Us</span></h2>

            <form action="#">
                <div class="input-box">
                    <input class="input-type" type="text" placeholder="Full Name">
                    <input type="email" placeholder="Email Address">
                </div>
                <div class="input-box">
                    <input type="number" placeholder="Mobile Number">
                    <input type="text" placeholder="Email Subject">
                </div>
                <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
                <input type="submit" value="Send Message" class="btn">
            </form>
        </div>

        <div class="footer-iconTop">
            <a href="#home"><i class='bx bx-up-arrow-alt' ></i></a>
        </div>
    </section>

    {{-- <div id="section-5" class="z-10 w-full">
        <img class="w-full" src="/assets/home/section5/frameFooter.png" alt="">
    </div> --}}
</div>
    {{-- scroll reveal --}}
    <script src="https://unpkg.com/scrollreveal"></script>

    {{-- typed js --}}
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

    {{-- custom js --}}
    <script src="js/script.js"></script>
@endsection
