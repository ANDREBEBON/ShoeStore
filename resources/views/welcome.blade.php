<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            .banner-image {
                background-image: url('https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            }
            .banner-image::after {
                content: '';
                display: block;
                position: absolute;
                width: 100%;
                height: 40%;
                bottom: 0;
                background: linear-gradient(0deg, rgb(0, 0, 0) 8%, rgba(255, 255, 255, 0) 50%);
            }

            .content {
                padding: 1.4rem 7%;
                max-width: 60rem;
            }

            .content h1 {
                font-size: 5rem;
                color: #fff;
                text-shadow: 1px 1px 1px rgba(1, 1, 3, 0.5);
                line-height: 1.2;
            }

            .content h1 span {
                color: #5df549;
            }

            .content p {
                font-size: 1.5rem;
                margin-top: 0.2rem;
                line-height: 1.5;
                font-weight: 100;
                text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5);
            }

            .button {
                display: inline-block;
                border-radius: 10rem;
                background-color: #3fa731;
                border: none;
                color: #FFFFFF;
                text-align: center;
                font-size: 28px;
                padding: 20px;
                width: 200px;
                transition: all 0.5s;
                cursor: pointer;
                margin: 5px;
                box-shadow: 1px 1px 5px rgba(1, 1, 3, 0.5);
            }

            .button span {
                cursor: pointer;
                display: inline-block;
                position: relative;
                transition: 0.5s;
            }

            .button span:after {
                content: '\00bb';
                position: absolute;
                opacity: 0;
                top: 0;
                right: -20px;
                transition: 0.5s;
            }

            .button:hover span {
                padding-right: 25px;
            }

            .button:hover span:after {
                opacity: 1;
                right: 0;
            }


        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body class="bg-black">
    <!--Navbar-->
        @if (Route::has('login'))
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark p-md-3 bg-black p-2 text-dark bg-opacity-75">
            <div class="container-fluid">
            <form class="container-fluid justify-content-start">
                @auth
                <div class="collapse navbar-collapse" id="navbarNav">
                    <a style="width: 1250px;" class="navbar-brand text-light fs-2 fw-bold mx-auto p-1" href="#">Shoes<span style="color: #71ff46" class="fw-bolder">Store</span></a>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarNav"
                        aria-controls="navbarNav"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="mx-auto"></div>
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a href="{{ url('/home') }}" style="color: #ffffff" class="nav-link active text-light fw-semibold fs-5 mx-auto p-3">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#about" style="color: #ffffff" class="nav-link active text-light fw-semibold fs-5 mx-auto p-3">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" style="color: #ffffff" class="nav-link active text-light fw-semibold fs-5 mx-auto p-3">Contant Us</a>
                        </li>
                    </ul>
                </div>
                    @else
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <a style="width: 1250px;" class="navbar-brand text-light fs-2 fw-bold mx-auto p-1" href="#">Shoes<span style="color: #71ff46" class="fw-bolder">Store</span></a>
                        <button
                            class="navbar-toggler"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#navbarNav"
                            aria-controls="navbarNav"
                            aria-expanded="false"
                            aria-label="Toggle navigation"
                        >
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="mx-auto"></div>
                        <ul class="navbar-nav justify-content-end">
                            <li class="nav-item">
                                <a href="#leading" style="color: #ffffff" class="nav-link active text-light fw-semibold fs-5 mx-auto p-3">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#about" style="color: #ffffff" class="nav-link active text-light fw-semibold fs-5 mx-auto p-3">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="#contact" style="color: #ffffff" class="nav-link active text-light fw-semibold fs-5 mx-auto p-3">Contant Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('login') }}" style="color: #ffffff" class="nav-link active text-light fw-semibold fs-5 mx-auto p-3">
                                    Login
                                </a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                <a href="{{ route('register') }}" style="color: #ffffff" class="nav-link active text-light fw-semibold fs-5 mx-auto p-3">
                                    Register
                                </a>
                            @endif
                            </li>
                        </ul>
                    </div>
                    @endauth
                @endif
                </form>
            </div>
        </nav>

        <!--Background-->
        <section id="leading">
            <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
                <div style="width: 2000px;" class="mx-auto">
                    <div class="content">
                        <h1 class="text-light fw-bolder">Be Cool with us at the Shoes<span>Store</span></h1>
                            <p class="text-light">"Unleash Your Wanderlust, One Step at a Time: Discover the World with Our Adventure-Ready Footwear"</p>
                            <p class="text-light">Seeking more Adventure</p>
                            <button class="button"><span>Shop Now</span></button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Content Area -->
        <!-- About Us -->
        <section id="about" >
        <div class="w-100 vh-100 pt-5">
            <h1 class="d-flex justify-content-center align-items-center text-light fw-bolder fs-1">
                About <span>Us</span>
            </h1>
            <div class="grid gap-5 d-flex flex-row mb-6 justify-content-center align-items-center">
                    <div class="p-5 g-col-6">
                        <img width="700" height="500" class="float-start" src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1169&q=80" alt="about">
                    </div>
                    <div class="text-light p-2 g-col-6 fs-4" style="width: 1000px">
                        <p class="float-end">Welcome to our website! We are a dedicated team committed to providing high-quality products and exceptional customer service. With years of experience in the industry, we strive to bring you the latest trends and styles in the world of fashion. Our mission is to help you express your unique style and confidence through our carefully curated collection of products. We believe that everyone deserves to feel great in what they wear, and we are here to make that happen. Thank you for choosing us as your fashion partner. We look forward to serving you with utmost dedication!</p>
                    </div>
            </div>
        </div>
        </section>

        <!--Contact Us-->
        <section id="contact">
            <div class="w-100 vh-50">
                <h1 class="d-flex justify-content-center align-items-center text-light fw-bolder fs-1">
                    Contact <span>Us</span>
                </h1>
                <div class="grid gap-5 d-flex flex-row mb-6 justify-content-center align-items-center">
                    <div class="col-md-6">
                        <form>
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                          </div>
                          <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your Email">
                          </div>
                          <div class="form-group">
                            <textarea class="form-control" placeholder="Your Message"></textarea>
                          </div>
                          <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                      </div>
                </div>
            </div>
        </section>
    </body>
</html>
