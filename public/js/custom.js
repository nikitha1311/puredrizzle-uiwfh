$(window).scroll(function(e){
        let height = $(window).height();
        $('.navigation').toggleClass('sticky',$(this).scrollTop() > height);
    });

$(window).on('load', function(event) {
    
        $(".preloader").delay(500).fadeOut(500);

    let value ;
    $('.quantity-left-minus').click(function(e){
        e.preventDefault();
        value = $('#quantity').val() 
        value -= 1;
        $('#quantity').val(value); 
        if(value < 0){
            $('#quantity').val('0'); 
        } 
    })
    $('.quantity-right-plus').click(function(e){
        e.preventDefault();
        value = $('#quantity').val() 
        value = Number(value) + Number('1');
        $('#quantity').val(value);         
    })


     $('.as').slick({
      dots: true,
      infinite: false,
      autoplay: true,
      autoplaySpeed: 2000,
      pauseOnFocus: false,
      pauseOnHover: false,
      pauseOnDotsHover: false,
      slidesToShow: 3,
      slidesToScroll: 1,

      responsive: [
    
        {
         breakpoint: 991,
         settings: {
           slidesToShow: 1,
           slidesToScroll: 1
         }
        },
       {
         breakpoint: 700,
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
       // You can unslick at a given breakpoint now by adding:
       // settings: "unslick"
       // instead of a settings object
     ]
   
    });
   

  
    $('.asa').slick({
      dots: true,
      infinite: false,
      autoplay: true,
      autoplaySpeed: 3000,
      pauseOnFocus: false,
      pauseOnHover: false,
      pauseOnDotsHover: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      fade: true,
      cssEase: 'linear'
    });


    $(".blog-slied").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        autoplay: true,
        smartSpeed: 800,
        responsive: {
            0: {
                items: 1,
                dots: false,
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            }
        }
    })

    });

   
  

   