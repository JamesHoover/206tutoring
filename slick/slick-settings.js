/* 
** slick-settings.js
** Custom slick setting for www.206tutoring.com
** http://kenwheeler.github.io/slick/
*/

$(document).ready(function(){
  $('.slick-slider').slick({
      infinite: true,
      speed: 1000,
      arrows: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 7000,
      pauseOnHover: false
  });
}); 