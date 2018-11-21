@extends('layouts.home-post')
@section('content')       
<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Shopping Cart</li>
            </ol>
        </div>
        <div class="table-responsive cart_info">
            @if(count($cart))
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Item</td>
                        <td class="description"></td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cart as $item)
                    <tr>
                        <td class="cart_product">
                            <a href=""><img src="{{ asset('layouts/images') }}/home/product1.jpg" alt=""></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="">{{ $item->name }}</a></h4>
                            <p>Web ID: {{ $item->id }}</p>
                        </td>
                        <td class="cart_price">
                            <p>{{ number_format($item->price)}} VNĐ</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">

                                <form method="POST" action="{{url("cart?product_id=$item->id&increment=1")}}">
                                    <input type="hidden" name="product_id" value="{{ $item->id }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" class="cart_quantity_up">
                                        +
                                    </button>
                                </form>
                                <input class="cart_quantity_input" type="text" name="quantity" value="{{$item->qty}}" autocomplete="off" size="2">
                                <a class="cart_quantity_up" href='{{url("cart?product_id=$item->id&increment=1")}}'> + </a>
                                <a class="cart_quantity_down" href='{{url("cart?product_id=$item->id&decrease=1")}}'> - </a>
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">{{ number_format($item->subtotal)}} VNĐ</p>
                        </td>t
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    @else
                <p>You have no items in the shopping cart</p>
                @endif
                </tbody>
            </table>
        </div>
    </div>
</section> <!--/#cart_items-->

@endsection

 <div class="w3_agile_latest_arrivals">
            <h3 class="wthree_text_info">Featured <span>Arrivals</span></h3>
            <div class="col-md-3 product-men single">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item">
                        <img src="images/w7.jpg" alt="" class="pro-image-front">
                        <img src="images/w7.jpg" alt="" class="pro-image-back">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                        <span class="product-new-top">New</span>

                    </div>
                    <div class="item-info-product ">
                        <h4><a href="single.html">Ankle Length Socks</a></h4>
                        <div class="info-product-price">
                            <span class="item_price">$100.99</span>
                            <del>$159.71</del>
                        </div>
                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                            <form action="#" method="post">
                                <fieldset>
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="business" value=" ">
                                    <input type="hidden" name="item_name" value="Ankle Length Socks">
                                    <input type="hidden" name="amount" value="30.99">
                                    <input type="hidden" name="discount_amount" value="1.00">
                                    <input type="hidden" name="currency_code" value="USD">
                                    <input type="hidden" name="return" value=" ">
                                    <input type="hidden" name="cancel_return" value=" ">
                                    <input type="submit" name="submit" value="Add to cart" class="button">
                                </fieldset>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-3 product-men single">
    <div class="men-pro-item simpleCart_shelfItem">
        <div class="men-thumb-item">
            <img src="http://localhost/laravel_clothes/public/images/2018/04/03/1522721014phong.PNG" alt="" class="pro-image-front">
            <img src="http://localhost/laravel_clothes/public/images/2018/04/03/1522721014phong.PNG" alt="" class="pro-image-back">
            <div class="men-cart-pro">
                <div class="inner-men-cart-pro">
                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                </div>
            </div>
            <span class="product-new-top">New</span>

        </div>
        <div class="item-info-product ">
            <h4><a href="single.html">Áo sơ mi nam</a></h4>
            <div class="info-product-price">
                <span class="item_price">$13000</span>
                <del>$8000</del>
            </div>
            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                <form action="#" method="post">
                    <fieldset>
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="add" value="1">
                        <input type="hidden" name="business" value=" ">
                        <input type="hidden" name="item_name" value="Áo sơ mi nam">
                        <input type="hidden" name="amount" value="">
                        <input type="hidden" name="discount_amount" value="">
                        <input type="hidden" name="currency_code" value="USD">
                        <input type="hidden" name="return" value=" ">
                        <input type="hidden" name="cancel_return" value=" ">
                        <input type="submit" name="submit" value="Add to cart" class="button">
                    </fieldset>
                </form>
            </div>

        </div>
    </div>
</div>
<div class="clearfix"></div>
<div class="row">
    <div class="col-lg-6 col-sm-offset-5">
        
    </div>
</div>
