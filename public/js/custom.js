$(window).scroll(function(e){
        let height = $(window).height();;
        // $('#navigator').toggleClass('sticky', $(this).scrollTop() > height);
        $('#navigator').toggleClass("sticky", $(this).scrollTop() > height );
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
    });
    $('.quantity-right-plus').click(function(e){
        e.preventDefault();
        value = $('#quantity').val()
        value = Number(value) + Number('1');
        $('#quantity').val(value);
    });


     $(".navbar-toggler").on('click', function() {
        $(this).toggleClass("active");
    });

    $(".slider-area").slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay:true,
        speed:1000,


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
  
  $(".vertical-slider-area").slick({
    dots: true,
    vertical: true,
    centerMode: true,
    autoplay:true,
    speed:1000,
  });
});




