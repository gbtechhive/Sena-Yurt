<x-header />
{{-- front section start here --}}
<div class="owl-carousel owl-theme">
    <div class="slide slide-1">
        <div class="slide-content1">
            <div class="heading-para">
                <h2>Combining Nomadic Wisdom With Modern Technology</h2>
                <p>With modernization and scientific development, the yurts have been transformed into one of the most preferred luxurious staying sites</p>
            </div>
            <a href="yurt#hotProducts"><button class="btn2">Explore More</button></a>
        </div>
    </div>
    <div class="slide slide-2">
        <div class="slide-content1">
            <div class="heading-para">
                <h2>Our Yurts Are of Best Quality And Are Durable</h2>
                <p>Sino Yurt’s long-term success as the leading manufacturer in the industry is owed in part to our ability to continue to innovate</p>
            </div>
            <a href="yurt#hotProducts"><button class="btn2">Explore More</button></a>
        </div>
    </div>
</div>

{{-- next experience section start here --}}
<section class="experience-sec">
    <div class="parent-exper">
        <div class="image-exper">
            <img data-aos="fade-right" src="{{ asset('/assets/images/home/home_img_14.jpg') }}" alt="">
        </div>
        <div class="text-exper">
            <h3 data-aos="slide-down">Experience The Luxurious Life</h3>
            <p data-aos="slide-right" class="exper-pare">Sina Yurt offers you exquisite yurts, </p>
            <hr data-aos="slide-left" style="border: 2px solid #444444;width: 63px; height:0;">
            <p data-aos="zoom-in">Sina Yurt offers you exquisite yurts, equipped with every modern facility of life, at
                the same time being eco-friendly. Inside Yurts, there are hardwood floors, space for installing a
                flat-screen television, luxury bedding as per your requirements, and optional, </p>
            <button data-aos="fade-up"><a href="yurt"> Explore More</a></button>
        </div>
    </div>
</section>
{{-- NEXT SLIDER SECTION START HERE USING SWIPER.JS --}}
<!-- Swiper -->
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide swiperSlide1">
            <div class="content-para3">
                <h3 data-aos="fade-left">Types Of Yurts</h3>
                <p data-aos="fade-right" class="para3">We have a total of 3 types of default Yurts</p>
                <hr data-aos="fade-left" style="border: 2px solid #ffffff" width="63px">
                <h4 data-aos="slide-right">Bamboo Yurt</h4>
                <p data-aos="zoom-in" class="para4">
                    Tracks are made of Aluminum “H”,Windows, and poles are used of Alluminum alloy, wall is of
                    carbonized bamboo “hana”, a PVC dome, and a cloth door.
                </p>
                <button data-aos="fade-up"><a href="assets/China_yurt.pdf" download="Catalog"> Download Catalog</a></button>
            </div>
        </div>
        <div class="swiper-slide swiperSlide2">
            <div class="content-para3">
                <h3>Types Of Yurts</h3>
                <p class="para3">We have a total of 3 types of default Yurts</p>
                <hr style="border: 2px solid #ffffff" width="63px">
                <h4>Wooden Yurt</h4>
                <p class="para4">Tracks, Rafter and Poles are made of Galvanized steel tube , Walls are used of MDF, a
                    PVC dome, and a Aluminum alloy Door and Window.
                </p>
                <button><a href="/assets/China_yurt.pdf" download="Catalog"> Download Catalog</a></button>
            </div>
        </div>
        <div class="swiper-slide swiperSlide3">
            <div class="content-para3">
                <h3 data-aos="slide-left">Types Of Yurts</h3>
                <p data-aos="slide-up" class="para3">We have a total of 3 types of default Yurts</p>
                <hr data-aos="slide-right" style="border: 2px solid #ffffff" width="63px">
                <h4>Customization Yurt.</h4>
                <p data-aos="slide-up" class="para4">Tracks, Rafter and Poles are made of Galvanized steel tube , Walls
                    are used of Plastic
                    mesh, a PVC dome, a Aluminum alloy Door, and Window of wood.
                </p>
                <button data-aos="slide-down"><a href="/assets/China_yurt.pdf" download="Catalog"> Download Catalog</a></button>
            </div>
        </div>
    </div>
    <div class="swiper-button-next">🡢</div>
    <div class="swiper-button-prev">🡠</div>
</div>
{{-- image yurt-slider SECTION START HERE --}}
<section class="index-yurt-slider">
    <h2>Yurts</h2>
    <div class="controlNextAndPrev">
        <div class="controlNext">
            <div onclick="prevSlidess()">🡠</div>
        </div>
        <div class="controlPrev">
            {{-- <i class="fa-solid fa-arrow-right" onclick="nextSlidess()"></i> --}}
            <div onclick="nextSlidess()">🡢</div>
        </div>
    </div>
    <div class="slide_imagesBx">
        <div class="image-textBx active">
            <div class="imgBox">
                <img data-aos="fade-right" src="{{ asset('/assets/images/home/slider-img.jpg') }}" alt="img1">
            </div>
            <div data-aos="fade-left" class="textBox">
                <h3>New Steel Plastic Yurt</h3>
                <p>Steel frame structure, beautiful shape, convenient disassembly and assembly, suitable for high-end
                    dining, accommodation, tourist attractions</p>
                <button><a href="yurt4"> Explore More</a></button>
            </div>
        </div>
        <div class="image-textBx">
            <div class="imgBox">
                <img data-aos="fade-right" src="{{ asset('/assets/images/home/slide-img2.jpg') }}" alt="img1">
            </div>
            <div data-aos="fade-left" class="textBox">
                <h3>Glamping Structure Yurt</h3>
                <p>This kind of yurt is made of high quality materials with fine workmanship. It features high quality,
                    high temperature resistance, corrosion resistance.</p>
                <button><a href="yurt1"> Explore More</a></button>
            </div>
        </div>
        <div class="image-textBx">
            <div class="imgBox">
                <img data-aos="fade-right" src="{{ asset('/assets/images/home/slide-img3.jpg') }}" alt="img1">
            </div>
            <div data-aos="fade-left" class="textBox">
                <h3>Luxury wooden yurt</h3>
                <p>The yurt is a popular outdoor item that can be used for dining, lodging, travel, wedding banquets,
                    etc. It has a beautiful appearance and is easy to disassemble.</p>
                <button><a href="#"> Explore More</a></button>
            </div>
        </div>
    </div>
</section>
{{-- image yurt-slider SECTION END HERE --}}
<section class="textimonial_wrap">
    <h2>Reviews From Our Esteemed Clients</h2>
    <div class="conttainer">
        <div class="slider">
            <div data-aos="slide-left" class="item widthMention">
                <div class="inner">
                    <div class="thimb">
                        <img src="{{ asset('/assets/images/home/homeSlider1.jpg') }}" alt="">
                    </div>
                    <div class="thimb-name">
                        <p>Chén Yáng</p>
                    </div>
                    <div class="info">
                        <p>
                            <i class="fa-solid fa-quote-left"></i>
                        </p>
                    </div>
                    <div class="excert">
                        <p>Remarkable workmanship and excellent products!! Everything was accurately manufactured.</p>
                    </div>
                    <div class="info2">
                        <p>
                            <i class="fa-solid fa-quote-right"></i>
                        </p>
                    </div>
                </div>
            </div>
            <div data-aos="slide-right" class="item widthMention">
                <div class="inner">
                    <div class="thimb">
                        <img src="{{ asset('/assets/images/home/homeSlider2.jpg') }}" alt="">
                    </div>
                    <div class="thimb-name">
                        <p>Benjamin Lucas</p>
                    </div>
                    <div class="info">
                        <p>
                            <i class="fa-solid fa-quote-left"></i>
                        </p>
                    </div>
                    <div class="excert">
                        <p>Sino Yurt has introduced innovation and sustainability in its products. The team is highly
                            skilled and cooperative. Thank you guys.</p>
                    </div>
                    <div class="info2">
                        <p>
                            <i class="fa-solid fa-quote-right"></i>
                        </p>
                    </div>
                </div>
            </div>
            <div data-aos="slide-left" class="item widthMention">
                <div class="inner">
                    <div class="thimb">
                        <img src="{{ asset('/assets/images/home/homeSlider3.jpg') }}" alt="">
                    </div>
                    <div class="thimb-name">
                        <p>Liam Elijah</p>
                    </div>
                    <div class="info">
                        <p>
                            <i class="fa-solid fa-quote-left"></i>
                        </p>
                    </div>
                    <div class="excert">
                        <p> I am completely satisfied with the Sino Yurt products.</p>
                    </div>
                    <div class="info2">
                        <p>
                            <i class="fa-solid fa-quote-right"></i>
                        </p>
                    </div>
                </div>
            </div>
            <div data-aos="slide-right" class="item widthMention">
                <div class="inner">
                    <div class="thimb">
                        <img src="{{ asset('/assets/images/home/homeSlider4.jpg') }}" alt="">
                    </div>
                    <div class="thimb-name">
                        <p>Aera Dmelia</p>
                    </div>
                    <div class="info">
                        <p>
                            <i class="fa-solid fa-quote-left"></i>
                        </p>
                    </div>
                    <div class="excert">
                        <p>We purchased our yurt six years ago and it is still in good condition. We love it. Thumbs up
                            for Sino Yurt.</p>
                    </div>
                    <div class="info2">
                        <p>
                            <i class="fa-solid fa-quote-right"></i>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sign-up-section">
    <div class="sign-up-row1">
        <h3>Sign Up To Stay Updated</h3>
        <div class="search-sign-up">
            <input type="text" placeholder="Email">

            <button><a href="mailto: rashid.uddin@gbtech.com" target="_blank">Sign Up </a></button>
        </div>
    </div>
</section>
<x-footer />

<script src="/js/index.js"></script>
<script src="/js/jquery.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/swiper-bundle.min.js"></script>
<script src="/js/slick.min.js"></script>
<script>
    $(document).ready(function() {
        // Owl Carousel first slider
        var owl = $(".owl-carousel");
        owl.owlCarousel({
            items: 1,
            loop: true,
            center: true,
            dots: false,
            nav: true,
            autoplay: true,
            autoplayTimeout: 4000,
            navText: ["🡠", "🡢"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })

        // swiper slider second slider
        var swiper = new Swiper(".mySwiper", {
            pagination: {
                el: ".swiper-pagination",
                type: "fraction",
            },
            slidesPerView: 1,
            paginationClickable: true,
            centeredSlides: true,
            spaceBetween: 30,
            loop: true,
            keyboardControl: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
        // slick slides
        $(function() {
            $('.slider').slick({
                dots: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                centerMode: true,
                centerPadding: '0',
                arrows: false,
                speed: 1000,
                autoplay: false,
                autoplaySpeed: 2000,
                infinite: true,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        })
        // aos animation onscroll
        AOS.init({
            duration: 1000,
            offset: 120,
            easing: 'ease-in-out'
        });
    });
</script>

</body>

</html>
