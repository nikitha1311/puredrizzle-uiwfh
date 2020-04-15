 <!DOCTYPE html>
    <html class="" lang="en">

    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css" rel="stylesheet"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css" rel="stylesheet"/>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="home-banner">

            <!--====== HEADER PART START ======-->

            @include('layouts.header')

            <!--====== HEADER PART ENDS ======-->

            <!--====== SLIDER PART START ======-->

            <section id="slider-part" class="bg_cover slider-part-2" style="background-image: url(images/bg-3.jpg)">
                <div class="content-slied slick-initialized slick-slider"><span class="prev slick-arrow" style="display: block;"><i class="fa fa-angle-left"></i></span>
                    <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 4047px;"><div class="single-slider d-flex align-items-center slick-slide" data-slick-index="0" aria-hidden="true" style="width: 1349px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;" tabindex="-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-7 col-md-11">
                                    <div class="slider-content">
                                        <h2 data-animation="fadeInUp" data-delay="1s" style="animation-delay: 1s;" class="">Always want safe and good water for healthy life</h2>
                                        <p data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.5s;" class="">Nunc molestie mi nunc, nec accumsan libero dignissim sit amet. Fusce sit amet tincidunt metus. Nunc eu risus suscipit massa dapibu.</p>
                                        <a data-animation="fadeInUp" data-delay="2s" href="#" style="animation-delay: 2s;" class="" tabindex="-1">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider d-flex align-items-center slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" style="width: 1349px; position: relative; left: -1349px; top: 0px; z-index: 999; opacity: 1;" tabindex="0">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-7 col-md-11">
                                    <div class="slider-content">
                                        <h2 data-animation="fadeInUp" data-delay="1s" style="animation-delay: 1s;" class="">Always want safe and good water for healthy life</h2>
                                        <p data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.5s;" class="">Nunc molestie mi nunc, nec accumsan libero dignissim sit amet. Fusce sit amet tincidunt metus. Nunc eu risus suscipit massa dapibu.</p>
                                        <a data-animation="fadeInUp" data-delay="2s" href="#" tabindex="0" style="animation-delay: 2s;" class="">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider d-flex align-items-center slick-slide" data-slick-index="2" aria-hidden="true" style="width: 1349px; position: relative; left: -2698px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;" tabindex="-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-7 col-md-11">
                                    <div class="slider-content">
                                        <h2 data-animation="fadeInUp" data-delay="1s" style="animation-delay: 1s;" class="">Always want safe and good water for healthy life</h2>
                                        <p data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.5s;" class="">Nunc molestie mi nunc, nec accumsan libero dignissim sit amet. Fusce sit amet tincidunt metus. Nunc eu risus suscipit massa dapibu.</p>
                                        <a data-animation="fadeInUp" data-delay="2s" href="#" tabindex="-1" style="animation-delay: 2s;" class="">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <span class="next slick-arrow" style="display: block;">
                <i class="fa fa-angle-right">
                </i>
            </span>
            </div>
        </section>

            <!--====== SLIDER PART ENDS ======-->


            <!--====== PRODUCTS PART START ======-->

            <section id="products-part" class="pt-65">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title text-center pb-15">
                                <h2>Our Products</h2>
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                                <p>Nunc molestie mi nunc, nec accumsan libero dignissim sit amet. Fusce sit amet tincidunt metus. Nunc eu risus suscipit massa dapibus blandit. Vivamus ac commodo eros.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="singel-products mt-30">
                                <div class="products-image">
                                    <img src="images/product/p-1.jpg" alt="Products">
                                    <div class="new-sele">
                                        <a href="#">New</a>
                                    </div>
                                </div>
                                <div class="products-contant">
                                    <h6 class="products-title"><a href="#">Mineral water big bottle</a></h6>
                                    <div class="price-rating d-flex justify-content-between">
                                        <div class="price">
                                            <span class="regular-price">$259</span>
                                            <span class="discount-price">$215</span>
                                        </div>
                                        <div class="rating">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="text">Mauris sed massa eu nulla mollis vehicula quis id tortor</p>
                                    <div class="products-cart">
                                        <a class="cart-add" href="#"><i class="fa fa-shopping-cart"></i> Add to cart</a>

                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <button type="button" class="quantity-left-minus btn btn-number"  data-type="minus" data-field="">
                                                    <span class="glyphicon glyphicon-minus"></span>
                                                </button>
                                            </span>
                                            <input type="text" id="quantity" name="quantity" class="form-control input-number tw-text-center" placeholder="jugs" value="10" min="1" max="100">
                                            <span class="input-group-btn">
                                                <button type="button" class="quantity-right-plus btn  btn-number" data-type="plus" data-field="">
                                                    <span class="glyphicon glyphicon-plus"></span>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="singel-products mt-30">
                                <div class="products-image">
                                    <img src="images/product/p-1.jpg" alt="Products">
                                </div>
                                <div class="products-contant">
                                    <h6 class="products-title"><a href="#">Mineral water big bottle</a></h6>
                                    <div class="price-rating d-flex justify-content-between">
                                        <div class="price">
                                            <span class="regular-price">$259</span>
                                            <span class="discount-price">$215</span>
                                        </div>
                                        <div class="rating">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="text">Mauris sed massa eu nulla mollis vehicula quis id tortor</p>
                                    <div class="products-cart">
                                        <a class="cart-add" href="#"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="singel-products mt-30">
                                <div class="products-image">
                                    <img src="images/product/p-1.jpg" alt="Products">
                                    <div class="new-sele">
                                        <a href="#">Sale</a>
                                    </div>
                                </div>
                                <div class="products-contant">
                                    <h6 class="products-title"><a href="#">Mineral water big bottle</a></h6>
                                    <div class="price-rating d-flex justify-content-between">
                                        <div class="price">
                                            <span class="regular-price">$259</span>
                                            <span class="discount-price">$215</span>
                                        </div>
                                        <div class="rating">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="text">Mauris sed massa eu nulla mollis vehicula quis id tortor</p>
                                    <div class="products-cart">
                                        <a class="cart-add" href="#"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="singel-products mt-30">
                                <div class="products-image">
                                    <img src="images/product/p-1.jpg" alt="Products">
                                </div>
                                <div class="products-contant">
                                    <h6 class="products-title"><a href="#">Mineral water big bottle</a></h6>
                                    <div class="price-rating d-flex justify-content-between">
                                        <div class="price">
                                            <span class="regular-price">$259</span>
                                            <span class="discount-price">$215</span>
                                        </div>
                                        <div class="rating">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="text">Mauris sed massa eu nulla mollis vehicula quis id tortor</p>
                                    <div class="products-cart">
                                        <a class="cart-add" href="#"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="singel-products mt-30">
                                <div class="products-image">
                                    <img src="images/product/p-1.jpg" alt="Products">
                                </div>
                                <div class="products-contant">
                                    <h6 class="products-title"><a href="#">Mineral water big bottle</a></h6>
                                    <div class="price-rating d-flex justify-content-between">
                                        <div class="price">
                                            <span class="regular-price">$259</span>
                                            <span class="discount-price">$215</span>
                                        </div>
                                        <div class="rating">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="text">Mauris sed massa eu nulla mollis vehicula quis id tortor</p>
                                    <div class="products-cart">
                                        <a class="cart-add" href="#"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="singel-products mt-30">
                                <div class="products-image">
                                    <img src="images/product/p-1.jpg" alt="Products">
                                    <div class="new-sele">
                                        <a href="#">Sale</a>
                                    </div>
                                </div>
                                <div class="products-contant">
                                    <h6 class="products-title"><a href="#">Mineral water big bottle</a></h6>
                                    <div class="price-rating d-flex justify-content-between">
                                        <div class="price">
                                            <span class="regular-price">$259</span>
                                            <span class="discount-price">$215</span>
                                        </div>
                                        <div class="rating">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="text">Mauris sed massa eu nulla mollis vehicula quis id tortor</p>
                                    <div class="products-cart">
                                        <a class="cart-add" href="#"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="singel-products mt-30">
                                <div class="products-image">
                                    <img src="images/product/p-1.jpg" alt="Products">
                                </div>
                                <div class="products-contant">
                                    <h6 class="products-title"><a href="#">Mineral water big bottle</a></h6>
                                    <div class="price-rating d-flex justify-content-between">
                                        <div class="price">
                                            <span class="regular-price">$259</span>
                                            <span class="discount-price">$215</span>
                                        </div>
                                        <div class="rating">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="text">Mauris sed massa eu nulla mollis vehicula quis id tortor</p>
                                    <div class="products-cart">
                                        <a class="cart-add" href="#"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="singel-products mt-30">
                                <div class="products-image">
                                    <img src="images/product/p-1.jpg" alt="Products">
                                    <div class="new-sele">
                                        <a href="#">New</a>
                                    </div>
                                </div>
                                <div class="products-contant">
                                    <h6 class="products-title"><a href="#">Mineral water big bottle</a></h6>
                                    <div class="price-rating d-flex justify-content-between">
                                        <div class="price">
                                            <span class="regular-price">$259</span>
                                            <span class="discount-price">$215</span>
                                        </div>
                                        <div class="rating">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="text">Mauris sed massa eu nulla mollis vehicula quis id tortor</p>
                                    <div class="products-cart">
                                        <a class="cart-add" href="#"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--====== PRODUCTS PART ENDS ======-->

            <!--====== SERVICES PART STARTS ======-->

            <section id="services-part" class="services-part-2 pt-70 pb-50">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title text-center">
                                <h2>Why Choose Us ?</h2>
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                                <p>Nunc molestie mi nunc, nec accumsan libero dignissim sit amet. Fusce sit amet tincidunt metus. Nunc eu risus suscipit massa dapibus blandit. Vivamus ac commodo eros.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="singel-services mt-45 pb-50">
                                <div class="services-icon">
                                    <img src="images/choose-us/icon-1.png" alt="Icon">
                                </div>
                                <div class="services-cont pt-25 pl-70">
                                    <h4>Aliquam congue fermentum</h4>
                                    <p>Nam ut pharetra enim, in tincidunt orci. Ut sed neque dolor. Nullam auctor placerat ipsum. In finibus tortor pulvinar pulvinar laoreet. Quisque id nibh non lectus dictum dapibus quis ac urna.</p>
                                    <a href="#">Read More <span><i class="fa fa-long-arrow-right"></i></span></a>
                                </div>
                            </div>

                            <div class="singel-services">
                                <div class="services-icon">
                                    <img src="images/choose-us/icon-3.png" alt="Icon">
                                </div>
                                <div class="services-cont pt-25 pl-70">
                                    <h4>Aliquam congue fermentum</h4>
                                    <p>Nam ut pharetra enim, in tincidunt orci. Ut sed neque dolor. Nullam auctor placerat ipsum. In finibus tortor pulvinar pulvinar laoreet. Quisque id nibh non lectus dictum dapibus quis ac urna.</p>
                                    <a href="#">Read More <span><i class="fa fa-long-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="singel-services mt-50 text-center">
                                <img src="images/choose-us/services-1.jpg" alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="singel-services right mt-45 text-right pb-50">
                                <div class="services-icon">
                                    <img src="images/choose-us/icon-2.png" alt="Icon">
                                </div>
                                <div class="services-cont pt-25 pr-70">
                                    <h4>Aliquam congue fermentum</h4>
                                    <p>Nam ut pharetra enim, in tincidunt orci. Ut sed neque dolor. Nullam auctor placerat ipsum. In finibus tortor pulvinar pulvinar laoreet. Quisque id nibh non lectus dictum dapibus quis ac urna.</p>
                                    <a href="#">Read More <span><i class="fa fa-long-arrow-right"></i></span></a>
                                </div>
                            </div>

                            <div class="singel-services right text-right ">
                                <div class="services-icon">
                                    <img src="images/choose-us/icon-4.png" alt="Icon">
                                </div>
                                <div class="services-cont pt-25 pr-70">
                                    <h4>Aliquam congue fermentum</h4>
                                    <p>Nam ut pharetra enim, in tincidunt orci. Ut sed neque dolor. Nullam auctor placerat ipsum. In finibus tortor pulvinar pulvinar laoreet. Quisque id nibh non lectus dictum dapibus quis ac urna.</p>
                                    <a href="#">Read More <span><i class="fa fa-long-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--====== SERVICES PART ENDS ======-->

            <!--====== DELIVERY PART START ======-->

            <section id="delivery-part" class="delivery-part-2 bg_cover pt-95 pb-100" data-overlay="8" style="background-image: url(images/bg-2.jpg)">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 offset-xl-1">
                            <div class="delivery-text text-center pb-30">
                                <h2>Water Delivery 20 k.m.  Free Service</h2>
                                <p>Nunc molestie mi nunc, nec accumsan libero dignissim sit amet. Fusce sit amet tincidunt metus. Nunc eu risus suscipit massa dapibu.</p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="delivery-image d-none d-lg-flex align-items-end">
                    <img src="images/delivery-van.png" alt="Iamge">
                </div>
            </section>

            <!--====== DELIVERY PART ENDS ======-->

            <!--====== CLIENT PART START ======-->

            <section id="client-part" class="pt-80">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title text-center">
                                <img src="images/client/c.png" alt="icon">
                                <h2>Our Exhort Happy Clients say !</h2>
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                                <p>Nunc molestie mi nunc, nec accumsan libero dignissim sit amet. Fusce sit amet tincidunt metus. Nunc eu risus suscipit massa dapibus blandit. Vivamus ac commodo eros.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="client-slied owl-carousel owl-loaded owl-drag">




                        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-3000px, 0px, 0px); transition: all 0.8s ease 0s; width: 4800px;"><div class="owl-item cloned" style="width: 600px;"><div class="col-lg-12">
                                <div class="singel-client mt-50">
                                    <div class="client-thum">
                                        <div class="client-img">
                                            <img src="images/client/c-1.jpg" alt="Client">
                                        </div>
                                        <div class="client-head">
                                            <h5>Anil Barua</h5>
                                            <span>Laravel Developer</span>
                                        </div>
                                    </div>
                                    <div class="client-text mt-35">
                                        <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus bibendum augue ac arcu pharetra congue. Proin accumsan elit et elit vehicula, sit amet fringilla.</p>
                                    </div>
                                </div>
                            </div></div><div class="owl-item cloned" style="width: 600px;"><div class="col-lg-12">
                                <div class="singel-client mt-50">
                                    <div class="client-thum">
                                        <div class="client-img">
                                            <img src="images/client/c-2.jpg" alt="Client">
                                        </div>
                                        <div class="client-head">
                                            <h5>Toya Kanti Roy</h5>
                                            <span>Graphic Designer</span>
                                        </div>
                                    </div>
                                    <div class="client-text mt-35">
                                        <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus bibendum augue ac arcu pharetra congue. Proin accumsan elit et elit vehicula, sit amet fringilla.</p>
                                    </div>
                                </div>
                            </div></div><div class="owl-item" style="width: 600px;"><div class="col-lg-12">
                                <div class="singel-client mt-50">
                                    <div class="client-thum">
                                        <div class="client-img">
                                            <img src="images/client/c-1.jpg" alt="Client">
                                        </div>
                                        <div class="client-head">
                                            <h5>Anil Barua</h5>
                                            <span>Laravel Developer</span>
                                        </div>
                                    </div>
                                    <div class="client-text mt-35">
                                        <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus bibendum augue ac arcu pharetra congue. Proin accumsan elit et elit vehicula, sit amet fringilla.</p>
                                    </div>
                                </div>
                            </div></div><div class="owl-item" style="width: 600px;"><div class="col-lg-12">
                                <div class="singel-client mt-50">
                                    <div class="client-thum">
                                        <div class="client-img">
                                            <img src="images/client/c-2.jpg" alt="Client">
                                        </div>
                                        <div class="client-head">
                                            <h5>Toya Kanti Roy</h5>
                                            <span>Graphic Designer</span>
                                        </div>
                                    </div>
                                    <div class="client-text mt-35">
                                        <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus bibendum augue ac arcu pharetra congue. Proin accumsan elit et elit vehicula, sit amet fringilla.</p>
                                    </div>
                                </div>
                            </div></div><div class="owl-item" style="width: 600px;"><div class="col-lg-12">
                                <div class="singel-client mt-50">
                                    <div class="client-thum">
                                        <div class="client-img">
                                            <img src="images/client/c-1.jpg" alt="Client">
                                        </div>
                                        <div class="client-head">
                                            <h5>Anil Barua</h5>
                                            <span>Laravel Developer</span>
                                        </div>
                                    </div>
                                    <div class="client-text mt-35">
                                        <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus bibendum augue ac arcu pharetra congue. Proin accumsan elit et elit vehicula, sit amet fringilla.</p>
                                    </div>
                                </div>
                            </div></div><div class="owl-item active" style="width: 600px;"><div class="col-lg-12">
                                <div class="singel-client mt-50">
                                    <div class="client-thum">
                                        <div class="client-img">
                                            <img src="images/client/c-2.jpg" alt="Client">
                                        </div>
                                        <div class="client-head">
                                            <h5>Toya Kanti Roy</h5>
                                            <span>Graphic Designer</span>
                                        </div>
                                    </div>
                                    <div class="client-text mt-35">
                                        <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus bibendum augue ac arcu pharetra congue. Proin accumsan elit et elit vehicula, sit amet fringilla.</p>
                                    </div>
                                </div>
                            </div></div><div class="owl-item cloned active" style="width: 600px;"><div class="col-lg-12">
                                <div class="singel-client mt-50">
                                    <div class="client-thum">
                                        <div class="client-img">
                                            <img src="images/client/c-1.jpg" alt="Client">
                                        </div>
                                        <div class="client-head">
                                            <h5>Anil Barua</h5>
                                            <span>Laravel Developer</span>
                                        </div>
                                    </div>
                                    <div class="client-text mt-35">
                                        <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus bibendum augue ac arcu pharetra congue. Proin accumsan elit et elit vehicula, sit amet fringilla.</p>
                                    </div>
                                </div>
                            </div></div><div class="owl-item cloned" style="width: 600px;"><div class="col-lg-12">
                                <div class="singel-client mt-50">
                                    <div class="client-thum">
                                        <div class="client-img">
                                            <img src="images/client/c-2.jpg" alt="Client">
                                        </div>
                                        <div class="client-head">
                                            <h5>Toya Kanti Roy</h5>
                                            <span>Graphic Designer</span>
                                        </div>
                                    </div>
                                    <div class="client-text mt-35">
                                        <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus bibendum augue ac arcu pharetra congue. Proin accumsan elit et elit vehicula, sit amet fringilla.</p>
                                    </div>
                                </div>
                            </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
                    </div>
                </div>

            </section>

            <!--====== CLIENT PART ENDS ======-->

            <!--====== BLOG PART START ======-->

            <section id='blog-part' class='pt-70 pb-70'>
                <div class=''>
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title text-center pb-15">
                                <h2>Our letest news</h2>
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                                <p>Nunc molestie mi nunc, nec accumsan libero dignissim sit amet. Fusce sit amet tincidunt metus. Nunc eu risus suscipit massa dapibus blandit. Vivamus ac commodo eros.</p>
                            </div>
                        </div>
                    </div>

                    <div class='slider-area slider'>
                        <div class="owl-item" style="width: 400px;">
                            <div class="col-lg-12">
                                <div class="singel-blog mt-30">
                                    <div class="blog-thum">
                                        <img src="images/blog/b-3.jpg" alt="Blog">
                                        <div class="date text-center">
                                            <h3>22</h3>
                                            <span>Sep 2020</span>
                                        </div>
                                    </div>
                                    <div class="blog-cont pt-25">
                                        <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                                        <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="owl-item" style="width: 400px;">
                            <div class="col-lg-12">
                                <div class="singel-blog mt-30">
                                    <div class="blog-thum">
                                        <img src="images/blog/b-1.jpg" alt="Blog">
                                        <div class="date text-center">
                                            <h3>22</h3>
                                            <span>Sep 2020</span>
                                        </div>
                                    </div>
                                    <div class="blog-cont pt-25">
                                        <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                                        <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="owl-item" style="width: 400px;">
                            <div class="col-lg-12">
                                <div class="singel-blog mt-30">
                                    <div class="blog-thum">
                                        <img src="images/blog/b-2.jpg" alt="Blog">
                                        <div class="date text-center">
                                            <h3>22</h3>
                                            <span>Sep 2020</span>
                                        </div>
                                    </div>
                                    <div class="blog-cont pt-25">
                                        <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                                        <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="owl-item" style="width: 400px;">
                            <div class="col-lg-12">
                                <div class="singel-blog mt-30">
                                    <div class="blog-thum">
                                        <img src="images/blog/b-3.jpg" alt="Blog">
                                        <div class="date text-center">
                                            <h3>22</h3>
                                            <span>Sep 2020</span>
                                        </div>
                                    </div>
                                    <div class="blog-cont pt-25">
                                        <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                                        <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 400px;">
                            <div class="col-lg-12">
                                <div class="singel-blog mt-30">
                                    <div class="blog-thum">
                                        <img src="images/blog/b-2.jpg" alt="Blog">
                                        <div class="date text-center">
                                            <h3>22</h3>
                                            <span>Sep 2020</span>
                                        </div>
                                    </div>
                                    <div class="blog-cont pt-25">
                                        <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                                        <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 400px;">
                            <div class="col-lg-12">
                                <div class="singel-blog mt-30">
                                    <div class="blog-thum">
                                        <img src="images/blog/b-1.jpg" alt="Blog">
                                        <div class="date text-center">
                                            <h3>22</h3>
                                            <span>Sep 2020</span>
                                        </div>
                                    </div>
                                    <div class="blog-cont pt-25">
                                        <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                                        <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </section>

    
            <!--====== BLOG PART ENDS ======-->

            <!--====== FOOTER PART START ======-->

            @include('layouts.footer')

            <!--====== FOOTER PART ENDS ======-->

            <!--====== BACK TOP TOP PART START ======-->

            <a href="#" class="back-to-top">
                <img src="images/back-to-top.png" alt="Icon">
            </a>

            <!--====== BACK TOP TOP PART ENDS ======-->
        </div>













        <!--====== Bootstrap js ======-->
        <script src=" {{ URL::asset('js/popper.min.js') }}"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

        <!--====== Magnific Popup js ======-->
        <script src=" {{ URL::asset('js/jquery.magnific-popup.min.js') }}"></script>

        <!--====== Main js ======-->
        <script src="{{ URL::asset('js/main.js') }}"></script>

        <!--====== Owl Carousel js ======-->
        <script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>

        <!--====== jquery js ======-->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

         <!--====== jquery js ======-->
         <script src="js/custom.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
    </body>
</html>
