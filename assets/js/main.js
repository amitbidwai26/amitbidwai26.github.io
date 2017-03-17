/*
  Project Name : Extra Large Multipurpose HTML Template
  Author Company : dizzmarket
  Project Date: 01 Jan, 2017
  Author Email : dizzmarket@gmail.com
*/
/*
  Project Name : Extra Large Multipurpose HTML Template
  Author Company : dizzmarket
  Project Date: 01 Jan, 2017
  Author Email : dizzmarket@gmail.com
*/
 $(window).load (function () { 
        "use strict";
        $('.preloader-wrapper').fadeOut();
        $('#about .heding-wrapper').addClass('animated');
});
	jQuery(document).ready(function($){
    "use strict";
	$('.progress-bar').viewportChecker({
        classToAdd: 'running-bar' // Class to add to the elements when they are visible,
    });
	$('.progress-bar1').viewportChecker({
        classToAdd: 'running-bar1' // Class to add to the elements when they are visible,
    });
    //Responsive main navigation
    $('.mobile-show-btn').on( "click", function(){
      $('.slider-wrapper header nav.main-nav').slideToggle();
    });
    $(".gallery:first a[class^='pretty']").prettyPhoto(
      {animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: false,social_tools:false,deeplinking:false,}
      );

    $('.cd-primary-nav a').on( "click", function(){
      $('.cd-primary-nav').removeClass('is-visible');
      $('.cd-menu-icon').removeClass('is-clicked');
    });
    // Adding active class

    $('.main-nav a').on( "click", function(){
      $('.main-nav li').removeClass('active');
      $(this).parent().addClass('active');
    });
    $('#portfolio-filter a').on( "click", function(){
      $('#portfolio-filter li').removeClass('active');
      $(this).parent().addClass('active');
    });

    // // MAP

    //  function initialize() {
    //       var mapCanvas = document.getElementById('map-canvas');
    //       var mapOptions = {
    //         center: new google.maps.LatLng(44.5403, -78.5463),
    //         zoom: 8,
    //         scrollwheel: false,
    //         mapTypeId: google.maps.MapTypeId.ROADMAP
    //       }
    //       var map = new google.maps.Map(mapCanvas, mapOptions);
    //   }
    //    google.maps.event.addDomListener(window, 'load', initialize);
    // //MAP END
    
    // SCROLL TO FIX HEADER
        
    $(window).scroll(function(){
      if ($(window).scrollTop() >= 100) {
        $('header').addClass('sticky');
       }
       else {
        $('header').removeClass('sticky');
       }
    });

    // Show element on scroll

    $(function(){
          var $elems = $('.animate-in');
          var winheight = $(window).height();
          var fullheight = $(document).height();
          
          $(window).scroll(function(){
            animate_elems();
          });
          
          function animate_elems() {
            var wintop = $(window).scrollTop(); // calculate distance from top of window
            // loop through each item to check when it animates
            $elems.each(function(){
              var $elm = $(this);
              
              var topcoords = $elm.offset().top; // element's distance from top of page in pixels
              
              if(wintop > (topcoords - (winheight*.90))) {
                // animate when top of the window is 3/4 above the element
                $elm.addClass('animated');

              }
              
            });
          } // end animate_elems()
        });

  // SCROLL TO TARGET
  $(".scroll").click(function(event){
         event.preventDefault();
         //calculate destination place
         var dest=0;
         if($(this.hash).offset().top > $(document).height()-$(window).height()){
              dest=$(document).height()-$(window).height();
         }else{
              dest=$(this.hash).offset().top;
         }
         //go to destination
         $('html,body').animate({scrollTop:dest}, 600,'swing');
     });
    // Slider
  $("#main-slider").owlCarousel({
        navigation : false, // Show next and prev buttons
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem:true,
        autoPlay:true ,     
    });
    $("#testimonial-slide").owlCarousel({
        navigation : false, // Show next and prev buttons
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem:true,
        autoPlay:true,
    });
    $("#client-slider").owlCarousel({
        navigation : false, // Show next and prev buttons
        slideSpeed : 300,
        paginationSpeed : 400,
        autoPlay:true,
        items : 4,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3]
    });
  //if you change this breakpoint in the style.css file (or _layout.scss if you use SASS), don't forget to update this value as well
  var MQL = 1170;

  //primary navigation slide-in effect
  if($(window).width() > MQL) {
    var headerHeight = $('.cd-header').height();
    $(window).on('scroll',
    {
          previousTop: 0
      }, 
      function () {
        var currentTop = $(window).scrollTop();
        //check if user is scrolling up
        if (currentTop < this.previousTop ) {
          //if scrolling up...
          if (currentTop > 0 && $('.cd-header').hasClass('is-fixed')) {
            $('.cd-header').addClass('is-visible');
          } else {
            $('.cd-header').removeClass('is-visible is-fixed');
          }
        } else {
          //if scrolling down...
          $('.cd-header').removeClass('is-visible');
          if( currentTop > headerHeight && !$('.cd-header').hasClass('is-fixed')) $('.cd-header').addClass('is-fixed');
        }
        this.previousTop = currentTop;
    });
  }



  // Fancybox

  $(".fancybox").fancybox();

  //open/close primary navigation
  $('.cd-primary-nav-trigger').on('click', function(){
    $('.cd-menu-icon').toggleClass('is-clicked'); 
    $('.cd-header').toggleClass('menu-is-open');
    
    //in firefox transitions break when parent overflow is changed, so we need to wait for the end of the trasition to give the body an overflow hidden
    if( $('.cd-primary-nav').hasClass('is-visible') ) {
      $('.cd-primary-nav').removeClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',function(){
        $('body').removeClass('overflow-hidden');
      });
    } else {
      $('.cd-primary-nav').addClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',function(){
        $('body').addClass('overflow-hidden');
      }); 
    }
  });
  

// Master Slider

var slider = new MasterSlider();
    slider.setup('masterslider' , {
      width:1170,
      height:770,
      autoplay:true,
      fullwidth:true,
      centerControls:false,
      speed:55,
      view:'flow',
      loop:true
    });
    slider.control('arrows');
    var slider1 = new MasterSlider();
    slider1.setup('masterslider-about' , {
      width:568,
      height:333,
      autoplay:true,
      fullwidth:true,
      centerControls:false,
      speed:55,
      view:'basic',
      loop:true
    });
    slider1.control('arrows');
    //Check to see if the window is top if not then display button
  $(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
      $('.scrollToTop').fadeIn();
    } else {
      $('.scrollToTop').fadeOut();
    }
  });
  
  //Click event to scroll to top
  $('.scrollToTop').on( "click", function(){
    $('html, body').animate({scrollTop : 0},600);
    return false;
  });


(function($) {

	var tabs =  $(".tabs li a");
  
	tabs.on( "click", function(){
		var panels = this.hash.replace('/','');
		tabs.removeClass("active");
		$(this).addClass("active");
    $("#panels").find('p').hide();
    $(panels).fadeIn(200);
	});

})(jQuery);

 
    $("#tabex a").click(function(e){
 
                e.preventDefault();
 
                $(this).tab('show');
 
    });


//image hover



var nodes  = document.querySelectorAll('#services ul li'),
    _nodes = [].slice.call(nodes, 0);

var getDirection = function (ev, obj) {
    var w = obj.offsetWidth,
        h = obj.offsetHeight,
        x = (ev.pageX - obj.offsetLeft - (w / 2) * (w > h ? (h / w) : 1)),
        y = (ev.pageY - obj.offsetTop - (h / 2) * (h > w ? (w / h) : 1)),
        d = Math.round( Math.atan2(y, x) / 1.57079633 + 5 ) % 4;
  
    return d;
};

var addClass = function ( ev, obj, state ) {
    var direction = getDirection( ev, obj ),
        class_suffix = "";
    
    obj.className = "";
    
    switch ( direction ) {
        case 0 : class_suffix = '-top';    break;
        case 1 : class_suffix = '-right';  break;
        case 2 : class_suffix = '-bottom'; break;
        case 3 : class_suffix = '-left';   break;
    }
    
    obj.classList.add( state + class_suffix );
};

// bind events
_nodes.forEach(function (el) {
    el.addEventListener('mouseover', function (ev) {
        addClass( ev, this, 'in' );
    }, false);

    el.addEventListener('mouseout', function (ev) {
		
        addClass( ev, this, 'out' );
    }, false);
});
});