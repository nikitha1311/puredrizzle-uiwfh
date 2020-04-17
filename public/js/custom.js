// $(window).scroll(function(e){
//         let height = $( window ).height();
//         // $('#navigator').toggleClass('sticky', $(this).scrollTop() > height);
//         console.log($(this).scrollTop)
//         $('#navigator').toggleClass("sticky", $(this).scrollTop() > height );
//         console.log('height',height)
//         if ($(this).scrollTop() > height) {
//             console.log('hi')
//             $(".back-to-top").fadeIn(200)
//         } else {
//             console.log('helo')
//             $(".back-to-top").fadeOut(200)
//         }
//     });


    $(window).scroll(function(e){
        let height = $(window).height();
        let nav = $('#navigator');
        console.log(e.target.scrollingElement.scrollTop)
        $('nav').toggleClass('sticky',$(this).scrollTop() > height);
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
        $('#navbarSupportedContent').toggleClass('show')
    });


    var subMenu = $(".sub-menu-bar .navbar-nav .sub-menu");

    if (subMenu.length) {
        subMenu.parent('li').children('a').append(function() {
            return '<button class="sub-nav-toggler"> <i class="fa fa-chevron-down"></i> </button>';
        });

        var subMenuToggler = $(".sub-menu-bar .navbar-nav .sub-nav-toggler");

        subMenuToggler.on('click', function() {
            $(this).parent().parent().children(".sub-menu").slideToggle();
            return false
        });

    }


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




