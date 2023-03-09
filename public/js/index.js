$(document).ready(function () {
    $(".second-slider-main").slick({
      lazyLoad: "ondemand",
      slidesToShow: 4,
      slidesToScroll: 1,
      arrows:true,
      infinite: true,
      speed: 300,
      prevArrow:".next1",
      nextArrow:".prev1",
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: false
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 3,
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
    $(".second-slider-main1").slick({
        lazyLoad: "ondemand",
        slidesToShow: 6,
        slidesToScroll: 1,
        arrows:true,
        infinite: true,
        speed: 300,
        prevArrow:".next2",
        nextArrow:".prev2",
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: false
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 3,
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
      $(".second-slider-main2").slick({
        lazyLoad: "ondemand",
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows:true,
        infinite: true,
        speed: 300,
        prevArrow:".next3",
        nextArrow:".prev3",
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: false
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 3,
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
    // aos animation onscroll
    AOS.init({
        duration:1000,
        offset:120,
        easing:'ease-in-out'
      });
});
// home slider code
const imgTextBx = document.querySelector('.slide_imagesBx ');
const showSlides = imgTextBx.getElementsByClassName('image-textBx');
var j = 0;
var time = 3000;
function nextSlidess() {
    showSlides[j].classList.remove('active');
    j = (j + 1) % showSlides.length;
    showSlides[j].classList.add('active');
}
// setTimeout('showSlides',time);
function prevSlidess() {
    showSlides[j].classList.remove('active');
    j = (j - 1 + showSlides.length) % showSlides.length;
    showSlides[j].classList.add('active');
}
setTimeout(() => {
    showSlides[j].classList.add('active');
}, time);
// setTimeout('showSlides',time);



