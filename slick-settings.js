/* 
** slick-settings.js
** Custom slick setting for www.206tutoring.com
** http://kenwheeler.github.io/slick/
*/

$(document).ready(function(){
      $('.slick_slider').slick({
          infinite: true,
          speed: 5000,
          arrows: false,
  				slidesToShow: 1,
  				slidesToScroll: 1,
  				autoplay: true,
  				autoplaySpeed: 2000,
  				pauseOnHover: false
      });
    });