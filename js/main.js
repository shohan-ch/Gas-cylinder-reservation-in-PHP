/*-------Start Owl carousel JS  -----*/
$(document).ready(function(){
$('.owl-carousel').owlCarousel({
    loop:true,
    nav:true,
    dots:false,
    items:1,
    animateIn:'fadeIn',
    navText:['<i class="fas fa-arrow-left"></i>','<i class="fas fa-arrow-right"></i>'],
    slideTransition: 'linear',
    autoplay:false,
    autoplayTimeout:5000,
    //autoplayHoverPause:true,
    responsive:{
      0:{
            items:1,
            nav:false,
            dots:false
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
    
  })
})
/*---------End Owl carousel JS ------------*/




/*------Start Jquery Social share plug in-------*/
  $("body").floatingSocialShare({
    buttons: [
      "facebook", "linkedin",  "reddit", 
      "twitter"
    ],
    counter: true,
    text: "share with: ",
   url: "https://skpbdgas.com"
   //  url: window.location.href0
  });
/*-------End Jquery Social share plug in--------*/





//----Start Jquery code for scroll to top Button------
    $(document).ready(function(){

        $(window).scroll(function(){
            if($(this).scrollTop() > 900){
                $(".top-button").fadeIn();

            }else{
                $(".top-button").fadeOut(1000);

            }
        })
        $(".top-button").click(function(){

            $('html,body').animate({scrollTop: 0},1000);
        });
    })
//------End Jquery code for scroll top Button------



//-----Code for nav link active class--------------

$('ul li').click(function(){

  $(this).addClass('active').siblings().removeClass('active');

})





