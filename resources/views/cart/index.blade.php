@extends('layouts.app')
@section('head')

@endsection

<!--====== PAGE BANNER PART START ======-->

<section id="page-banner" class="pt-200 pb-150 bg_cover" style="background-image: url(images/bg-4.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-content">
                    <h3>Cart page</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== PAGE BANNER PART ENDS ======-->

<!--====== CART PART START ======-->

<section id="cart-part" class="pt-75">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cart-table table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th class="product">Product</th>
                            <th class="description">Description</th>
                            <th class="model">Model</th>
                            <th class="edit">Edit</th>
                            <th class="quantite">Quantite</th>
                            <th class="price">Unit Price</th>
                            <th class="total">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div class="product-img"><img src="images/product/cart/1.jpg" alt="Product"></div>
                            </td>
                            <td>
                                <div class="product-description">
                                    <h6>There are many variations</h6>
                                    <p>Lorem Ipsum is simply dummy text of the typesetting.</p>
                                </div>
                            </td>
                            <td>
                                <div class="product-model">
                                    <p>Product-23</p>
                                </div>
                            </td>
                            <td>
                                <div class="product-edit">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-pencil"></i></a></li>
                                        <li><a href="#"><i class="fa fa-trash-o"></i></a></li>
                                    </ul>
                                </div>
                            </td>
                            <td>
                                <div class="product-quantite">
                                    <div class="qty">
                                        <input type="number" class="qty" value="0">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="product-price">
                                    <p>$999.00</p>
                                </div>
                            </td>
                            <td>
                                <div class="product-total">
                                    <p>$999.00</p>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="product-img"><img src="images/product/cart/2.jpg" alt="Product"></div>
                            </td>
                            <td>
                                <div class="product-description">
                                    <h6>There are many variations</h6>
                                    <p>Lorem Ipsum is simply dummy text of the typesetting.</p>
                                </div>
                            </td>
                            <td>
                                <div class="product-model">
                                    <p>Product-24</p>
                                </div>
                            </td>
                            <td>
                                <div class="product-edit">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-pencil"></i></a></li>
                                        <li><a href="#"><i class="fa fa-trash-o"></i></a></li>
                                    </ul>
                                </div>
                            </td>
                            <td>
                                <div class="product-quantite">
                                    <div class="qty">
                                        <input type="number" class="qty" value="0">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="product-price">
                                    <p>$999.00</p>
                                </div>
                            </td>
                            <td>
                                <div class="product-total">
                                    <p>$999.00</p>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="cart-btn clearfix">
                    <div class="btn-left">
                        <a href="#">CONTINUE SHOPPING </a>
                    </div>
                    <div class="btn-right">
                        <a href="#">UPDATE SHOPPING CART</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="estemate-shipping mt-50">
                    <h5>Estimate Shopping And Tax</h5>
                    <form action="#">
                        <div class="form-box">
                            <label>Country</label>
                            <input type="text">
                        </div>
                        <div class="form-box">
                            <label>State/Province</label>
                            <input type="text">
                        </div>
                        <div class="form-box">
                            <label>Zip/Postal Code</label>
                            <input type="text">
                        </div>
                        <div class="form-box text-right">
                            <button type="button">GET QUOTE</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="disconut-code mt-50">
                    <h5>Discount Code</h5>
                    <form action="#">
                        <div class="form-box">
                            <label>Enter your coupon code if you have one.</label>
                            <input type="text">
                        </div>
                        <div class="form-box text-right">
                            <button type="button">APPLY</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cart-total text-right mt-50">
                    <p><span>Subtotal </span><span>$999.00  </span></p>
                    <p><span>Grand Total </span><span>$999.00  </span></p>
                    <a href="#">PROCED TO CHECKOUT</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== CART PART ENDS ======-->

<!--====== BRAND PART START ======-->

<section id="brand-part" class="pt-70 pb-80">
    <div class="container">
        
        <div class="row">
            <div class="brand-slied owl-carousel mt-45">
                <div class="col-lg-12">
                    <div class="singel-brand">
                        <img src="images/patnarlogo/1.png" alt="Brand">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-brand">
                        <img src="images/patnarlogo/2.png" alt="Brand">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-brand">
                        <img src="images/patnarlogo/3.png" alt="Brand">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-brand">
                        <img src="images/patnarlogo/4.png" alt="Brand">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-brand">
                        <img src="images/patnarlogo/1.png" alt="Brand">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-brand">
                        <img src="images/patnarlogo/2.png" alt="Brand">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-brand">
                        <img src="images/patnarlogo/3.png" alt="Brand">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-brand">
                        <img src="images/patnarlogo/4.png" alt="Brand">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== BRAND PART ENDS ======-->

<!--====== DELIVERY PART START ======-->

<section id="delivery-part" class="bg_cover" data-overlay="8" style="background-image: url(images/bg-2.jpg)">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 offset-xl-1">
                <div class="delivery-text text-center pb-30">
                    <h2>Water Delivery 20 k.m. Free Service</h2>
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

<!--====== FOOTER PART START ======-->


<!--====== FOOTER PART ENDS ======-->

<!--====== BACK TO TOP PART START ======-->

<a href="#" class="back-to-top">
    <img src="images/back-to-top.png" alt="Icon">
</a>

<!--====== BACK TO TOP PART ENDS ======-->

@section('scripts')

@append










