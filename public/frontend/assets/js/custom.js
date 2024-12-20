$(function(){

  



    jQuery('[data-vbg]').youtube_background();


  


})

 // Intersection Observer for triggering animations on scroll
    document.addEventListener('DOMContentLoaded', function() {
      const sections = document.querySelectorAll('.animated-section');
      
      const observerOptions = {
        threshold: 0.3 // Trigger animation when 30% of the section is visible
      };
      
      const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target); // Remove observer once animation is triggered
          }
        });
      }, observerOptions);
      
      sections.forEach(section => {
        observer.observe(section);
      });
    });

$('.concern-slide').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  speed:500,
  nextArrow:".next",
  prevArrow:".prev",
  responsive: [
    {
      breakpoint: 991.98,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        speed:500,
        arrows:false,
        dots:false
      }
    },
    {
      breakpoint: 766.98,
      settings: {
        slidesToShow: 3,
  slidesToScroll: 1,
  speed:500,
  arrows:false,
  dots:false
        
      }
    },
    {
      breakpoint:  575.98,
      settings: {
        infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  speed:500,
  arrows:false,
  dots:false
      }
    }
  
  ]
});


  

