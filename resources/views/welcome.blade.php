<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ShoesStore</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        /* POPPINS FONT */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
        }

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
            height: 22%;
            bottom: 0;
            background: linear-gradient(0deg, rgb(0, 1, 19) 8%, rgba(255, 255, 255, 0) 50%);
        }

        .contents {
            padding: 1.4rem 7%;
            max-width: 60rem;
        }

        .contents h1 {
            font-size: 5rem;
            color: #fff;
            text-shadow: 1px 1px 1px rgba(1, 1, 3, 0.5);
            line-height: 1.2;
        }

        .contents h1 span {
            color: #5df549;
        }

        .contents p {
            font-size: 1.5rem;
            margin-top: 0.2rem;
            line-height: 1.5;
            font-weight: 100;
            text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5);
        }

        .text {
            font-weight: 800;
            outline: none;
            background: linear-gradient(135deg, #2192FF 0%, #38E54D 25%, #9CFF2E 50%, #FDFF00 75%, #2192FF 100%);
            background-size: 400%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: animate 10s linear infinite;
        }

        @keyframes animate {
            to {
                background-position: 400%;
            }
        }

        .container {
            width: 85%;
            background: #00011f;
            border-radius: 6px;
            padding: 10px 50px 10px 30px;
            box-shadow: 0 5px 15px rgba(21, 15, 105, 0.2);
        }

        .container .content {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .container .content .left-side {
            width: 25%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 15px;
            position: relative;
        }

        .content .left-side::before {
            content: '';
            position: absolute;
            height: 70%;
            width: 2px;
            right: -15px;
            top: 50%;
            transform: translateY(-50%);
            background: #afafb6;
        }

        .content .left-side .details {
            margin: 14px;
            text-align: center;
        }

        .content .left-side .details i {
            font-size: 30px;
            color: #209333;
            margin-bottom: 10px;
        }

        .content .left-side .details .topic {
            font-size: 18px;
            font-weight: 500;
        }

        .content .left-side .details .text-one,
        .content .left-side .details .text-two {
            font-size: 14px;
            color: #afafb6;
        }

        .container .content .right-side {
            width: 75%;
            margin-left: 75px;
        }

        .content .right-side .topic-text {
            font-size: 23px;
            font-weight: 600;
            color: #20932a;
        }

        .right-side .input-box {
            height: 50px;
            width: 100%;
            margin: 12px 0;
        }

        .right-side .input-box input,
        .right-side .input-box textarea {
            height: 100%;
            width: 100%;
            border: none;
            outline: none;
            font-size: 16px;
            background: #F0F1F8;
            border-radius: 6px;
            padding: 0 15px;
            resize: none;
        }

        .right-side .message-box {
            min-height: 110px;
        }

        .right-side .input-box textarea {
            padding-top: 6px;
        }

        .right-side .button {
            display: inline-block;
            margin-top: 12px;
        }

        .right-side .button input[type="button"] {
            color: #fff;
            font-size: 18px;
            outline: none;
            border: none;
            padding: 8px 16px;
            border-radius: 6px;
            background: #419320;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .button input[type="button"]:hover {
            background: #29bc35;
        }

        @media (max-width: 950px) {
            .container {
                width: 90%;
                padding: 30px 40px 40px 35px;
            }

            .container .content .right-side {
                width: 75%;
                margin-left: 55px;
            }
        }

        @media (max-width: 820px) {
            .container {
                margin: 40px 0;
                height: 100%;
            }

            .container .content {
                flex-direction: column-reverse;
            }

            .container .content .left-side {
                width: 100%;
                flex-direction: row;
                margin-top: 40px;
                justify-content: center;
                flex-wrap: wrap;
            }

            .container .content .left-side::before {
                display: none;
            }

            .container .content .right-side {
                width: 100%;
                margin-left: 0;
            }
        }
    </style>
</head>

<body style="background-color: #000113;">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark p-md-1 bg-black p-2 text-dark bg-opacity-75">
        <div class="container-fluid">
            <a class="navbar-brand text-light fs-2 fw-bold mx-5 p-2" href="#">Shoes<span style="color: #71ff46" class="fw-bolder">Store</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-1">
                        <a href="{{ url('/home') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a href="#about" class="nav-link">AboutUs</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a href="#contact" class="nav-link">ContactUs</a>
                    </li>
                    @auth
                    <!-- Add Logout link here if the user is authenticated -->
                    @else
                    @if (Route::has('login'))
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @endif

                    @if (Route::has('register'))
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!--Background-->
    <section id="leading">
        <div class="banner-image w-100 vh-100 d-flex justify-content-start align-items-center">
            <div class="mx-1">
                <div class="contents">
                    <h1 class="text-light fw-bolder">Be Cool with us at the Shoes<span spellcheck="false" class="text" contenteditable="true">Store</span></h1>
                    <p class="text-light">"Unleash Your Wanderlust, One Step at a Time: Discover the World with Our Adventure-Ready Footwear"</p>
                    <p class="text-light">Seeking more Adventure</p>
                    <button type="button" class="btn btn-outline-success">
                        <a href="{{ url('/home') }}" style="color: #ffffff; text-decoration: none;" class="active text-light fw-semibold fs-6 p-2">ShopNow</a>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us -->
    <section id="about">
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

    <!-- Contact Us -->
    <section id="contact">
        <div class="w-100 vh-50">
            <h1 class="d-flex justify-content-center align-items-center text-light fw-bolder fs-1">
                Contact <span>Us</span>
            </h1>
            <div class="container">
                <div class="content">
                    <div class="left-side">
                        <div class="address details">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="topic">Address</div>
                            <div class="text-one">Jl. Lely 1 No.14</div>
                            <div class="text-two">Sleman, Yogyakarta</div>
                        </div>
                        <div class="phone details">
                            <i class="fas fa-phone-alt"></i>
                            <div class="topic">Phone</div>
                            <div class="text-one">+62 812-6536-5562</div>
                            <div class="text-two">0812-6536-5562</div>
                        </div>
                        <div class="email details">
                            <i class="fas fa-envelope"></i>
                            <div class="topic">Email</div>
                            <div class="text-one">marlo12duha@students.amikom.ac.id</div>
                            <div class="text-two">andrebebon@students.amikom.ac.id</div>
                        </div>
                    </div>
                    <div class="right-side">
                        <div class="topic-text">Send us a message</div>
                        <p>If you have any work from me or any types of quries related to my tutorial, you can send me message from here. It's my pleasure to help you.</p>
                        <form action="#">
                            <div class="input-box">
                                <input type="text" placeholder="Enter your name">
                            </div>
                            <div class="input-box">
                                <input type="text" placeholder="Enter your email">
                            </div>
                            <div class="input-box message-box">
                                <input type="text" placeholder="Enter your message">
                            </div>
                            <div class="button">
                                <input type="button" value="Send Now">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+VgZEzqW1iCG28Yfo7q9z9hq+Eu3Wph0sVV5OTDRU1Dxvwn" crossorigin="anonymous"></script>
</body>

</html>