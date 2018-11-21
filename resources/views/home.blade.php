@extends('layouts.home-post')

@section('content')

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
        <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        <li data-target="#myCarousel" data-slide-to="3" class=""></li>
        <li data-target="#myCarousel" data-slide-to="4" class=""></li> 
    </ol>	
    <div class="carousel-inner" role="listbox">
        <div class="item"> 
            <div class="container">
                <div class="carousel-caption">
                    <h3>The Biggest <span>Sale</span></h3>
                    <p>Special for today</p>
                    <a class="hvr-outline-out button2" href="/men/category/2">Shop Now </a>
                </div>
            </div>
        </div>
        <div class="item item2 active"> 
            <div class="container">
                <div class="carousel-caption">
                    <h3>Summer <span>Collection</span></h3>
                    <p>New Arrivals On Sale</p>
                    <a class="hvr-outline-out button2" href="/men/category/1">Shop Now </a>
                </div>
            </div>
        </div>
        <div class="item item3"> 
            <div class="container">
                <div class="carousel-caption">
                    <h3>The Biggest <span>Sale</span></h3>
                    <p>Special for today</p>
                    <a class="hvr-outline-out button2" href="/men/category/2">Shop Now </a>
                </div>
            </div>
        </div>
        <div class="item item4"> 
            <div class="container">
                <div class="carousel-caption">
                    <h3>Summer <span>Collection</span></h3>
                    <p>New Arrivals On Sale</p>
                    <a class="hvr-outline-out button2" href="/men/category/1">Shop Now </a>
                </div>
            </div>
        </div>
        <div class="item item5"> 
            <div class="container">
                <div class="carousel-caption">
                    <h3>The Biggest <span>Sale</span></h3>
                    <p>Special for today</p>
                    <a class="hvr-outline-out button2" href="/men/category/2">Shop Now </a>
                </div>
            </div>
        </div> 
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!-- The Modal -->
</div>
<div class="banner_bottom_agile_info">
    <div class="container">
        <div class="banner_bottom_agile_info_inner_w3ls">
            <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
                <figure class="effect-roxy">
                    <img src="images/bottom1.jpg" alt=" " class="img-responsive">
                    <span></span>
                    <figcaption>
                        <h3><span>F</span>all Ahead</h3>
                        <p>New Arrivals</p>
                    </figcaption>			
                </figure>
            </div>
            <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
                <figure class="effect-roxy">
                    <img src="images/bottom2.jpg" alt="" class="img-responsive">
                    <figcaption>
                        <h3><span>F</span>all Ahead</h3>
                        <p>New Arrivals</p>
                    </figcaption>			
                </figure>
            </div>
            <div class="clearfix"></div>
        </div> 
    </div> 
</div>
<div class="schedule-bottom">
    <div class="col-md-6 agileinfo_schedule_bottom_left">
        <img src="images/mid.jpg" alt=" " class="img-responsive">
    </div>
    <div class="col-md-6 agileits_schedule_bottom_right">
        <div class="w3ls_schedule_bottom_right_grid">
            <h3>Save up to <span>50%</span> in this week</h3>
            <p>Suspendisse varius turpis efficitur erat laoreet dapibus. 
                Mauris sollicitudin scelerisque commodo.Nunc dapibus mauris sed metus finibus posuere.</p>
            <div class="col-md-4 w3l_schedule_bottom_right_grid1">
                <i class="fa fa-user-o" aria-hidden="true"></i>
                <h4>Customers</h4>
                <h5 class="counter">653</h5>
            </div>
            <div class="col-md-4 w3l_schedule_bottom_right_grid1">
                <i class="fa fa-calendar-o" aria-hidden="true"></i>
                <h4>Events</h4>
                <h5 class="counter">823</h5>
            </div>
            <div class="col-md-4 w3l_schedule_bottom_right_grid1">
                <i class="fa fa-shield" aria-hidden="true"></i>
                <h4>Awards</h4>
                <h5 class="counter">45</h5>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>
<div class="banner-bootom-w3-agileits">
    <div class="container">
        <h3 class="wthree_text_info">What's <span>Trending</span></h3>

        <div class="col-md-5 bb-grids bb-left-agileits-w3layouts">
            <a href="womens.html">
                <div class="bb-left-agileits-w3layouts-inner grid">
                    <figure class="effect-roxy">
                        <img src="images/bb1.jpg" alt=" " class="img-responsive">
                        <figcaption>
                            <h3><span>S</span>ale </h3>
                            <p>Upto 55%</p>
                        </figcaption>			
                    </figure>
                </div>
            </a>
        </div>
        <div class="col-md-7 bb-grids bb-middle-agileits-w3layouts">
            <a href="mens.html">
                <div class="bb-middle-agileits-w3layouts grid">
                    <figure class="effect-roxy">
                        <img src="images/bottom3.jpg" alt=" " class="img-responsive">
                        <figcaption>
                            <h3><span>S</span>ale </h3>
                            <p>Upto 55%</p>
                        </figcaption>			
                    </figure>
                </div>
            </a>
            <a href="mens.html">
                <div class="bb-middle-agileits-w3layouts forth grid">
                    <figure class="effect-roxy">
                        <img src="images/bottom4.jpg" alt=" " class="img-responsive">
                        <figcaption>
                            <h3><span>S</span>ale </h3>
                            <p>Upto 65%</p>
                        </figcaption>		
                    </figure>
                </div>
            </a>
            <div class="clearfix"></div>
        </div>
    </div>
</div> 
<div class="banner-bootom-w3-agileits">
    <div class="container">
        <h3 class="wthree_text_info">What's <span>Trending</span></h3>

        <div class="col-md-5 bb-grids bb-left-agileits-w3layouts">
            <a href="womens.html">
                <div class="bb-left-agileits-w3layouts-inner grid">
                    <figure class="effect-roxy">
                        <img src="images/bb1.jpg" alt=" " class="img-responsive">
                        <figcaption>
                            <h3><span>S</span>ale </h3>
                            <p>Upto 55%</p>
                        </figcaption>			
                    </figure>
                </div>
            </a>
        </div>
        <div class="col-md-7 bb-grids bb-middle-agileits-w3layouts">
            <a href="mens.html">
                <div class="bb-middle-agileits-w3layouts grid">
                    <figure class="effect-roxy">
                        <img src="images/bottom3.jpg" alt=" " class="img-responsive">
                        <figcaption>
                            <h3><span>S</span>ale </h3>
                            <p>Upto 55%</p>
                        </figcaption>			
                    </figure>
                </div>
            </a>
            <a href="mens.html">
                <div class="bb-middle-agileits-w3layouts forth grid">
                    <figure class="effect-roxy">
                        <img src="images/bottom4.jpg" alt=" " class="img-responsive">
                        <figcaption>
                            <h3><span>S</span>ale </h3>
                            <p>Upto 65%</p>
                        </figcaption>		
                    </figure>
                </div>
            </a>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="new_arrivals_agile_w3ls_info"> 
    <div class="container">
        <h3 class="wthree_text_info">New <span>Arrivals</span></h3>		
        <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
            <ul class="resp-tabs-list">
                <li class="resp-tab-item resp-tab-active" aria-controls="tab_item-0" role="tab">New's</li>
                <li class="resp-tab-item " aria-controls="tab_item-1" role="tab"> Selling'</li>
                <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"> Promotion Price</li>
            </ul>
            <div class="resp-tabs-container">
                <h2   class="resp-accordion" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span> New's</h2><div class="tab1 resp-tab-content" aria-labelledby="tab_item-0">
                    @foreach ($new_product as $product)
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{$product->image() ? asset( $product->image()->url): 'http://placehold.it/100x100'}}" width="128" height="300" alt="" class="pro-image-front">
                                <img src="{{$product->image() ? asset( $product->image()->url): 'http://placehold.it/100x100'}}" width="128" height="300"  alt="" class="pro-image-back">

                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="detail/{{$product->id}}" class="link-product-add-cart">Quick View</a>
                                    </div>

                                </div>
                                <span class="product-new-top">New</span>

                            </div>
                            <div class="item-info-product ">
                                <h4><a href="#">{{$product->name}}</a></h4>                          
                                <div class="info-product-price">
                                    <span class="item_price">${!! number_format($product->last_price()->unit_price,0)!!}</span>
                                    <del>${!! number_format($product->last_price()->promotion_price, 0)!!}</del>

                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                    <form>
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="business" value=" ">
                                            <input type="hidden" name="id" value="{{$product->id}}">
                                            <input type="hidden" name="item_name" value="{{$product->name}}">
                                            <input type="hidden" name="amount" value="{{$product->last_price()->unit_price}}">
                                            <input type="hidden" name="discount_amount" value="{{$product->last_price()->promotion_price}}">
                                            <input type="hidden" name="currency_code" value="USD">
                                            <input type="hidden" name="return" value=" ">
                                            <input type="hidden" name="cancel_return" value=" ">
                                            <input type="button" name="submit" pro_id="{{$product->id}}" value="Add to cart" class="button">

                                        </fieldset>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="row">
                        <div class="col-lg-6 col-sm-offset-5">
                            {{ $new_product->render() }}
                        </div>

                    </div>
                    <div class="clearfix"></div>
                </div>


                <!--//tab_one-->
                <!--/tab_two-->
                <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span> Selling</h2><div class="tab2 resp-tab-content" aria-labelledby="tab_item-1">
                    @foreach ($bestSellProducts as $product)
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{$product->image() ? asset( $product->image()->url): 'http://placehold.it/100x100'}}"  width="128" height="300" alt="" class="pro-image-front">
                                <img src="{{$product->image() ? asset( $product->image()->url): 'http://placehold.it/100x100'}}"   width="128" height="300" alt="" class="pro-image-back">

                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="detail/{{$product->id}}" class="link-product-add-cart">Quick View</a>                                    </div>
                                </div>
                                <span class="product-new-top">New</span>

                            </div>
                            <div class="item-info-product ">
                                <h4><a href="#">{{$product->name}}</a></h4>                 
                                <div class="info-product-price">
                                    <span class="item_price">${!! number_format($product->last_price()->unit_price,0)!!}</span>
                                    <del>${!! number_format($product->last_price()->promotion_price, 0)!!}</del>

                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                    <form>
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="business" value=" ">
                                            <input type="hidden" name="id" value="{{$product->id}}">
                                            <input type="hidden" name="item_name" value="{{$product->name}}">
                                            <input type="hidden" name="amount" value="{{$product->last_price()->unit_price}}">
                                            <input type="hidden" name="discount_amount" value="{{$product->last_price()->promotion_price}}">
                                            <input type="hidden" name="currency_code" value="USD">
                                            <input type="hidden" name="return" value=" ">
                                            <input type="hidden" name="cancel_return" value=" ">
                                            <input type="button" name="submit" pro_id="{{$product->id}}" value="Add to cart" class="button">

                                        </fieldset>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                  <div class="row">
                        <div class="col-lg-6 col-sm-offset-5">
                            {{ $bestSellProducts->render() }}
                        </div>

                    </div>
                    <div class="clearfix"></div>
                </div>

                    <h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span> Promotion Price</h2><div class="tab3 resp-tab-content" aria-labelledby="tab_item-2">

                    @foreach ($promotion_price as $product)
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{$product->image() ? asset( $product->image()->url): 'http://placehold.it/100x100'}}" width="128" height="300" alt="" class="pro-image-front">
                                <img src="{{$product->image() ? asset( $product->image()->url): 'http://placehold.it/100x100'}}" width="128" height="300"  alt="" class="pro-image-back">

                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="detail/{{$product->id}}" class="link-product-add-cart">Quick View</a>
                                    </div>

                                </div>
                                <span class="product-new-top">New</span>

                            </div>
                            <div class="item-info-product ">
                                <h4><a href="#">{{$product->name}}</a></h4>                          

                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                    <form>
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="business" value=" ">
                                            <input type="hidden" name="id" value="{{$product->id}}">
                                            <input type="hidden" name="item_name" value="{{$product->name}}">
                                            <input type="hidden" name="currency_code" value="USD">
                                            <input type="hidden" name="return" value=" ">
                                            <input type="hidden" name="cancel_return" value=" ">
                                            <input type="button" name="submit" pro_id="{{$product->id}}" value="Add to cart" class="button">

                                        </fieldset>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    
                    @endforeach
                    <div class="row">
                        <div class="col-lg-6 col-sm-offset-5">
                            {{ $promotion_price->render() }}
                        </div>

                    </div>
                    <div class="clearfix"></div>
           
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="sale-w3ls">
    <div class="container">
        <h6>We Offer Flat <span>40%</span> Discount</h6>

        <a class="hvr-outline-out button2" href="#">Shop Now </a>
    </div>
</div>


@endsection
@section('script')
<script src="js/modernizr.custom.js"></script>
<script src="js/easy-responsive-tabs.js"></script>
<script src="confirm-form/notifier.script.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
    type: 'default', //Types: default, vertical, accordion           
    width: 'auto', //auto or any width like 600px
    fit: true, // 100% fit in a container
    closed: 'accordion', // Start closed if in accordion view
    activate: function (event) { // Callback function if tab is switched
        var $tab = $(this);
        var $info = $('#tabInfo');
        var $name = $('span', $info);
        $name.text($tab.text());
        $info.show();
    }
});
$('#verticalTab').easyResponsiveTabs({
    type: 'vertical',
    width: 'auto',
    fit: true
});
});
</script>
<!-- //script for responsive tabs -->		
<!-- stats -->
@endsection
