(function($) {
    "use strict";

    $('[data-toggle="offcanvas"]').on('click', function () {
    $('.navbar-collapse').toggleClass('show');
    });

    /*==== Nav ====*/
    $('.navbar-collapse a').on('click',function(){
        $(".navbar-collapse").collapse('hide');
    });

    /* ================ Nice Select ================ */
    $(document).ready(function() {
  $('select').niceSelect();
});


    
/* ================ Revolution Slider. ================ */
  if($('.tp-banner').length > 0){
    $('.tp-banner').show().revolution({
      delay:6000,
          startheight: 600,
          startwidth: 1170,
          hideThumbs: 1000,
          navigationType: 'none',
          touchenabled: 'on',
          onHoverStop: 'on',
          navOffsetHorizontal: 0,
          navOffsetVertical: 0,
          dottedOverlay: 'none',
          fullWidth: 'on'
    });
  }
  if($('.tp-banner-full').length > 0){
    $('.tp-banner-full').show().revolution({
      delay:6000,
          hideThumbs: 1000,
          navigationType: 'none',
          touchenabled: 'on',
          onHoverStop: 'on',
          navOffsetHorizontal: 0,
          navOffsetVertical: 0,
          dottedOverlay: 'none',
          fullScreen: 'on'
    });
  } 

//  Releted Project slider
  var relatedProject = $(".service-block");
  relatedProject.owlCarousel({
    loop : true,
    nav : true,
    dots : false,
    margin : 100,
    center : true,
    thumbs : false,
    responsive : {
      0 : {
        items : 1

      },
      767 : {
        items : 1,
        margin : 0
      },
      992 : {
        items : 1,
        margin : 50
      },
      1200 : {
        items : 1
      }
    },
    

  });

/* ================ testimonials ================ */
    $(document).ready(function() {
        $(".testimonials_list").owlCarousel({
            loop: true,
            rewind: true,
            margin: 30,
            nav: false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                700: {
                    items: 1,
                    nav: false
                },
                900: {
                    items: 2,
                    nav: false
                },
                1170: {
                    items: 2,
                    nav: true
                }
            }
        });
    });
   
 
 

	
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){

		if ($(this).scrollTop() > 100) {

			$('.scrollToTop').fadeIn();

		} else {

			$('.scrollToTop').fadeOut();
		}

	});


/*==== Smoothscroll ====*/    
    $('#home a, .custom-navbar a').on('click', function(event) {
        var $anchor = $(this);
          $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 49
        }, 1000);
          event.preventDefault();
    }); 



	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 1},800);
		return false;
	});


 


/* ================ testimonials ================ */
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel({
            nav: false,
            loop: true,
            margin: 10,
            autoplay: true,
            items: 6,
            autoWidth: true,
            center: true,
            autoplayTimeout: 700,
            autoplayHoverPause: true,
        });
    });




    
  })(jQuery);