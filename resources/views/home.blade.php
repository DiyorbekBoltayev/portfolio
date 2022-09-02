@extends('layouts.app')
@section('custom-style')
    <title>Diyorbek Boltayev</title>
{{--    test for cpanel--}}
    <link
        rel="shortcut icon"
        href="{{asset('assets/./images/favicon.png')}}"
        type="image/png"
    />
    <!-- Swiper CSS -->
    <link
        rel="stylesheet"
        href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />

    <!-- Boxicons -->
    <link
        href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"
        rel="stylesheet"
    />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}" />
    <style>
        body{
       background:#0b132a ;
            color: white ;
        }
        .tebranuvchi {
            -webkit-animation: action 3s infinite  alternate;
            animation: action 3s infinite  alternate;
        }

        @-webkit-keyframes action {
            0% { transform: translateY(-15px); }
            100% { transform: translateY(15px); }
        }

        @keyframes action {
            0% { transform: translateY(-15px); }
            100% { transform: translateY(15px); }
        }
        h1,h2,h3,h4,h5,h6{
            color: white;
        }


    </style>
@endsection
@section('content')




<header class="header">
    <nav class="nav d-flex container">
        <a href="" class="logo d-flex">
            <img style="width: 150px; height: 60px;" src="{{asset('assets/./images/logo3.png')}}" alt="" />

        </a>

        <div class="nav-list d-flex">
            <a href="">Home</a>
            <a href="">Projects</a>
            <a href="#languages">Services</a>
            <a href="#about">About Us</a>
            <a href="#contact">Help</a>
        </div>

        <a href="#" class="btn">Contact Us</a>

        <!-- Hamburger -->
        <div class="hamburger d-flex">
            <i class="bx bx-menu"></i>
        </div>
    </nav>

    <!-- Hero -->
    <div class="hero d-flex">
        <div class="row container">
            <div class="col">
                <h1>
                    Dasturchi <span>Diyorbek.</span> <br />

                </h1>

                <p style="text-shadow: 0px 0px 10px 10px white; color: yellow; margin: 100px;">
                    <span>Web</span> provides free HTML, CSS and Javascript
                    tutorials along with practical examples. Improve your skills with
                    our coding-based challenges including quizzes, multiple-choice
                    questions. Stay Updated with web development tricks, tips,
                    resources and much more.
                </p>
                <a href="#" class="btn">Hire Me</a>
            </div>
            <div class="col tebranuvchi">
                <img src="{{asset('assets/./images/Programmer-1.svg')}}" alt="" />
            </div>
        </div>
    </div>

    <!-- Social Icons -->
    <div class="icons">
        <div class="icon" style=" box-shadow: 0px 0px 3px 3px #60609e;">
            <i class="bx bxl-telegram"></i>
        </div>
        <div class="icon" style=" box-shadow: 0px 0px 3px 3px #60609e;"><i class="bx bxl-facebook"></i></div>
        <div class="icon" style=" box-shadow: 0px 0px 3px 3px #60609e;"><i class="bx bxl-linkedin"></i></div>
        <div class="icon" style=" box-shadow: 0px 0px 3px 3px #60609e;"><i class="bx bxl-github"></i></div>
    </div>
</header>

<!-- User Data -->
<section class="section user-data">
    <div class="row container">
        <div class="col d-flex">
            <div class="icon d-flex"><i class="bx bxs-user"></i></div>
            <div>
                <span class="number" data-target="998">0</span>
                <span>Users</span>
            </div>
        </div>

        <div class="col d-flex">
            <div class="icon d-flex"><i class="bx bxs-map"></i></div>
            <div>
                <span class="number" data-target="356">0</span>
                <span>Locations</span>
            </div>
        </div>

        <div class="col d-flex">
            <div class="icon d-flex"><i class="bx bxs-server"></i></div>
            <div>
                <span class="number" data-target="569">0</span>
                <span>Servers</span>
            </div>
        </div>
    </div>
</section>

<!-- About #1 -->
<section class="section about about-1" id="about">
    <h2 class="title">Our Top Priorities</h2>
    <div class="row container">
        <div class="col tebranuvchi">
            <img class="image" src="{{asset('assets/./images/Programmer-2.svg')}}" alt="" />
        </div>
        <div class="col">
            <h3>We Provide Many Features You Can Use</h3>
            <p>
                You can explore the features that we provide with fun and have their
                own functions each feature.
            </p>
            <ul>
                <li>
                    <img src="{{asset('assets/./images/checked.svg')}}" alt="" />
                    <span>Powerfull online protection.</span>
                </li>
                <li>
                    <img src="{{asset('assets/./images/checked.svg')}}" alt="" />
                    <span>Internet without borders.</span>
                </li>
                <li>
                    <img src="{{asset('assets/./images/checked.svg')}}" alt="" />
                    <span>Supercharged VPN</span>
                </li>
                <li>
                    <img src="{{asset('assets/./images/checked.svg')}}" alt="" />
                    <span>No specific time limits.</span>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- About #2 -->
<section class="section about about-2">
    <div class="row container">
        <div class="col tebranuvchi">
            <img class="image" src="{{asset('assets/./images/Programmer-3.svg')}}" alt="" />
        </div>
        <div class="col">
            <h3>We Provide Many Features You Can Use</h3>
            <p>
                You can explore the features that we provide with fun and have their
                own functions each feature.
            </p>
            <ul>
                <li>
                    <img src="{{asset('assets/./images/checked.svg')}}" alt="" />
                    <span>Powerfull online protection.</span>
                </li>
                <li>
                    <img src="{{asset('assets/./images/checked.svg')}}" alt="" />
                    <span>Internet without borders.</span>
                </li>
                <li>
                    <img src="{{asset('assets/./images/checked.svg')}}" alt="" />
                    <span>Supercharged VPN</span>
                </li>
                <li>
                    <img src="{{asset('assets/./images/checked.svg')}}" alt="" />
                    <span>No specific time limits.</span>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- Languages -->
<section class="section languages" id="languages">
    <h2 class="title">Programming Just Got Fun</h2>
    <div class="row container">
        <div class="image">
            <div class="circle circle-1"></div>
            <div class="w-100">
                <img class="w-50 tebranuvchi" style="margin-left: 10%" src="{{asset('assets/./images/about_hero.png')}}" alt="" />
            </div>

            <div class="circle circle-2">
                <div class="language language-1">
                    <div>
                        <h4>Heading</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Condimentum diam
                        </p>
                    </div>
                    <div class="icon" style="background: #14c073">HTML</div>
                </div>
                <div class="language language-2">
                    <div class="icon" style="background: #7b097b">MySQL</div>
                    <div>
                        <h4>Heading</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Condimentum diam
                        </p>
                    </div>
                </div>
                <div class="language language-3">
                    <div class="icon" style="background: #f9322c">Laravel</div>
                    <div>
                        <h4>Heading</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Condimentum diam
                        </p>
                    </div>
                </div>
                <div class="language language-4">
                    <div>
                        <h4>Heading</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Condimentum diam
                        </p>
                    </div>
                    <div class="icon">CSS</div>
                </div>
                <div class="language language-5">
                    <div class="icon" style="background: #2053e5">PHP</div>
                    <div>
                        <h4>Heading</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Condimentum diam
                        </p>
                    </div>
                </div>
                <div class="language language-6">
                    <div>
                        <h4>Heading</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Condimentum diam
                        </p>
                    </div>
                    <div class="icon" style="background: yellow; color :black">JS</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonials -->
<section class="section testimonials">
    <div class="top">
        <h2>Some Reviews of Happy Customer</h2>
        <p>
            These are the stories of our customers who have joined us with great
            pleasure when using this crazy feature.
        </p>
    </div>

    <div class="row container">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="card">
                        <div class="col d-flex">
                            <div class="info d-flex">
                                <div class="image">
                                    <img src="{{asset('assets/./images/profile-1.jpg')}}" alt="" />
                                </div>
                                <div>
                                    <h4>Viezh Robert</h4>
                                    <span>Warsaw, Poland</span>
                                </div>
                            </div>

                            <!-- Rating -->
                            <div class="rating d-flex">
                                <span>4.5</span>
                                <span><i class="bx bxs-star"></i></span>
                            </div>
                        </div>

                        <p class="col">
                            “Wow... I am very happy to use this VPN, it turned out to be
                            more than my expectations and so far there have been no
                            problems. LaslesVPN always the best”.
                        </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <div class="col d-flex">
                            <div class="info d-flex">
                                <div class="image">
                                    <img src="{{asset('assets/./images/profile-2.jpg')}}" alt="" />
                                </div>
                                <div>
                                    <h4>Yessica Christy</h4>
                                    <span>Shanxi, China</span>
                                </div>
                            </div>

                            <!-- Rating -->
                            <div class="rating d-flex">
                                <span>4.5</span>
                                <span><i class="bx bxs-star"></i></span>
                            </div>
                        </div>

                        <p class="col">
                            “I like it because I like to travel far and still can connect
                            with high speed.”.
                        </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <div class="col d-flex">
                            <div class="info d-flex">
                                <div class="image">
                                    <img src="{{asset('assets/./images/profile-3.jpg')}}" alt="" />
                                </div>
                                <div>
                                    <h4>Kim Young Jou</h4>
                                    <span>Seoul, South Korea</span>
                                </div>
                            </div>

                            <!-- Rating -->
                            <div class="rating d-flex">
                                <span>4.5</span>
                                <span><i class="bx bxs-star"></i></span>
                            </div>
                        </div>

                        <p class="col">
                            “This is very unusual for my business that currently requires
                            a virtual private network that has high security.”.
                        </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <div class="col d-flex">
                            <div class="info d-flex">
                                <div class="image">
                                    <img src="{{asset('assets/./images/profile-4.jpg')}}" alt="" />
                                </div>
                                <div>
                                    <h4>Kim Young Jou</h4>
                                    <span>Seoul, South Korea</span>
                                </div>
                            </div>

                            <!-- Rating -->
                            <div class="rating d-flex">
                                <span>4.5</span>
                                <span><i class="bx bxs-star"></i></span>
                            </div>
                        </div>

                        <p class="col">
                            “This is very unusual for my business that currently requires
                            a virtual private network that has high security.”.
                        </p>
                    </div>
                </div>
            </div>
            <div class="navigation d-flex">
                <div class="custom-pagination"></div>
                <div class="d-flex">
                    <div class="custom-button custom-button-next d-flex">
                        <i class="bx bx-left-arrow-alt"></i>
                    </div>
                    <div class="custom-button custom-button-prev d-flex">
                        <i class="bx bx-right-arrow-alt"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Subscribe -->
<section class="section subscribe" id="contact">
    <div class="row container d-flex">
        <div class="col">
            <h2>
                Subscribe Now for <br />
                Get Special Features!
            </h2>
            <p>Let's subscribe with us and find the fun.</p>
        </div>
        <div class="col">
            <a href="#" class="btn">Subscribe Now</a>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="row container">
        <div class="col">
            <div class="logo d-flex">
                <img src="{{asset('assets/./images/logo.svg')}}" alt="logo" />
                <h4>Codevo</h4>
            </div>
            <p>
                <span>wpcodevo</span> provides free HTML, CSS and Javascript
                tutorials along with practical examples.
            </p>
            <div class="icons d-flex">
                <div class="icon d-flex">
                    <i class="bx bxl-facebook"></i>
                </div>
                <div class="icon d-flex"><i class="bx bxl-telegram"></i></div>
                <div class="icon d-flex"><i class="bx bxl-linkedin"></i></div>
                <div class="icon d-flex"><i class="bx bxl-youtube"></i></div>
            </div>
            <p>
                Copyrights 2021 <br />
                @Iamabdulqadeer01
            </p>
        </div>
        <div class="col">
            <div>
                <h4>Product</h4>
                <a href="">Download</a>
                <a href="">Pricing</a>
                <a href="">Locations</a>
                <a href="">Server</a>
                <a href="">Countries</a>
                <a href="">Blog</a>
            </div>
            <div>
                <h4>Engage</h4>
                <a href="">LaslesVPN</a>
                <a href="">FAQ</a>
                <a href="">Tutorials</a>
                <a href="">About Us</a>
                <a href="">Privacy Policy</a>
                <a href="">Terms of Service</a>
            </div>
            <div>
                <h4>Earn Money</h4>
                <a href="">Affiliate</a>
                <a href="">Become Partner</a>
            </div>
        </div>
    </div>
    <!-- Go To Top -->
    <div class="scroll-top d-flex">
        <i class="bx bx-up-arrow-alt"></i>
    </div>

</footer>




@endsection
@section('custom-js')
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Scroll Reveal JS -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Script -->
    <script src="{{asset('assets/js/main.js')}}"></script>

@endsection
