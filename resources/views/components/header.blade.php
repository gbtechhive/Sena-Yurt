{{-- header component --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:wght@100;200;300;400;500;600;700&family=Inter:wght@200;300&family=Merriweather:wght@300&family=Mohave:wght@300;400;500;600;700&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;1,200;1,300&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:wght@100;200;300;400;500;600;700&family=Inter:wght@200;300&family=Merriweather:wght@300&family=Mohave:wght@300;400;500;600;700&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;1,200;1,300&family=Open+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/assets/css/nav.css">
    <link rel="stylesheet" href="/assets/css/index.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="/assets/css/owl.theme.green.css">
    <link rel="stylesheet" href="/assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/css/slick.css">
    <link rel="stylesheet" href="/assets/librares/fontawesome-free-6.0.0-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="/assets/librares/fontawesome-free-6.0.0-web/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Sena Yurt</title>
</head

<body>
    <div id="nav-scroll" class="header-container">
        <div class="social_icon_container">
            <div class="SOL_links">
                <div class="phoneAndGmail">
                    <div class="phone">
                        <a href="https://api.whatsapp.com/send?phone=393456789715" target="_blank"> <i
                                class="fas fa-light fa-phone"></i>
                                +86 13838236365
                        </a>
                    </div>
                    <div class="gmail">
                        <a href="mailto: rashid.uddin@gbtech.com" target="_blank"> <i
                                class="fas fa-thin fa-envelope"></i>
                            info@sinoyurt.com
                        </a>
                    </div>
                </div>
                <div class="face-insta-tew">
                    <a href="https://www.linkedin.com/in/sino-yurt-27a4b6247/" target="_blank"><i
                            class="fa-brands fa-linkedin-in"></i></a>
                    <a href="https://www.facebook.com/Sino-Yurt-107860972022277" target="_blank"><i
                            class="fa-brands fa-facebook-square"></i></a>
                    <a href="https://www.instagram.com/sinoyurt/" target="_blank"><i
                            class="fa-brands fa-instagram-square"></i></a>
                    <a href="https://twitter.com/SinoYurt" target="_blank"><i
                            class="fa-brands fa-twitter-square"></i></a>
                </div>
            </div>
        </div>
        <div class="nav" id="Navbar">
            <div class="navbar-sena">
                <div class="sena-logo">
                    <div class="logo-image">
                        <a href="/"><img src="/assets/images/home/home-img_1.png" alt=""></a>
                    </div>
                    <ul id="ul-list">
                        <li><a href="indux" class="nav-link {{ request()->is('indux') ? 'active' : '' }}">Home</a>
                        </li>
                        <li><a href="yurt" class="nav-link {{ request()->is('yurt') ? 'active' : '' }}">Yurts</a>
                        </li>
                        <li><a href="#" class="nav-link {{ request()->is('#') ? '#' : '' }}">Gallery</a></li>
                        <li><a href="AboutUs" class="nav-link {{ request()->is('AboutUs') ? 'active' : '' }}">About
                                Us</a></li>
                        <li><a href="contact"
                                class="nav-link {{ request()->is('contact') ? 'active' : '' }}">Support</a></li>
                    </ul>
                </div>
                <div class="searchBox" id="searchIcon">
                    <a href="#" class="searchBox_a2"><img
                            src="{{ asset('/assets/images/nav-img/logo-bayer.png') }}" alt="logo"></a>
                    <input type="text">
                    <a href="#"><i class="fa fa-light fa-magnifying-glass"></i></a>
                </div>
            </div>
        </div>
        <div class="navbar-sena2">
            <div class="showing-bar">
                <div class="sena-logo2">
                    <img src="/assets/images/home/home-img_1.png" alt="">
                </div>
                <input type="checkbox" id="click">
                <label for="click"class="menu-btn1">
                    <p class="menu-btn2">&#9776;</p>
                </label>
                <div class="disapearing-bar">
                    <div class="searchBox2" id="searchIcon">
                        <input type="text">
                        <a href="#" class="searchBox_a2"><img
                                src="{{ asset('/assets/images/nav-img/logo-bayer.png') }}" alt="logo"></a>
                        <div class="search2"><i class="fa fa-light fa-magnifying-glass"></i></div>
                    </div>
                    <ul id="ul-list2">
                        <li><a href="/">Home</a></li>
                        <li><a href="yurt">Yurts</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="AboutUs">About Us</a></li>
                        <li><a href="contact">Support</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script>
        let prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
            var currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                document.getElementById("nav-scroll").style.top = "0";
            } else {
                document.getElementById("nav-scroll").style.top = "-100%";
            }
            prevScrollpos = currentScrollPos;
        }
    </script>
