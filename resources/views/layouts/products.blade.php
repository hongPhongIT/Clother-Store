@extends('layouts.home-post')

@section('content')

<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
    <div class="container">
        <h3>Single <span>Page </span></h3>
        <!--/w3_short-->
        <div class="services-breadcrumb">
            <div class="agile_inner_breadcrumb">

                <ul class="w3_short">
                    <li><a href="index.html">Home</a><i>|</i></li>
                    <li>Single Page</li>
                </ul>
            </div>
        </div>
        <!--//w3_short-->
    </div>
</div>

<!-- banner-bootom-w3-agileits -->
<div class="banner-bootom-w3-agileits">
    <div class="container">
        <div class="col-md-4 single-right-left ">
            <div class="grid images_3_of_2">
                <div class="flexslider">

                    <ul class="slides">
                        <li data-thumb="images/d2.jpg">
                            <div class="thumb-image"> <img src="images/d2.jpg" data-imagezoom="true" class="img-responsive"> </div>
                        </li>
                        <li data-thumb="images/d1.jpg">
                            <div class="thumb-image"> <img src="images/d1.jpg" data-imagezoom="true" class="img-responsive"> </div>
                        </li>	
                        <li data-thumb="images/d3.jpg">
                            <div class="thumb-image"> <img src="images/d3.jpg" data-imagezoom="true" class="img-responsive"> </div>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>	
            </div>
        </div>
        <div class="col-md-8 single-right-left simpleCart_shelfItem">
            <h3>Big Wing Sneakers  (Navy)</h3>
            <p><span class="item_price">$650</span> <del>- $900</del></p>
            <div class="rating1">
                <span class="starRating">
                    <input id="rating5" type="radio" name="rating" value="5">
                    <label for="rating5">5</label>
                    <input id="rating4" type="radio" name="rating" value="4">
                    <label for="rating4">4</label>
                    <input id="rating3" type="radio" name="rating" value="3" checked="">
                    <label for="rating3">3</label>
                    <input id="rating2" type="radio" name="rating" value="2">
                    <label for="rating2">2</label>
                    <input id="rating1" type="radio" name="rating" value="1">
                    <label for="rating1">1</label>
                </span>
            </div>
            <div class="description">
                <h5>Check delivery, payment options and charges at your location</h5>
                <form action="#" method="post">
                    <input type="text" value="Enter pincode" onfocus="this.value = '';" onblur="if (this.value == '') {
                                this.value = 'Enter pincode';
                            }" required="">
                    <input type="submit" value="Check">
                </form>
            </div>
            <div class="color-quality">
                <div class="color-quality-right">
                    <h5>Quality :</h5>
                    <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
                        <option value="null">5 Qty</option>
                        <option value="null">6 Qty</option> 
                        <option value="null">7 Qty</option>					
                        <option value="null">10 Qty</option>								
                    </select>
                </div>
            </div>
            <div class="occasional">
                <h5>Types :</h5>
                <div class="colr ert">
                    <label class="radio"><input type="radio" name="radio" checked=""><i></i>Casual Shoes</label>
                </div>
                <div class="colr">
                    <label class="radio"><input type="radio" name="radio"><i></i>Sneakers </label>
                </div>
                <div class="colr">
                    <label class="radio"><input type="radio" name="radio"><i></i>Formal Shoes</label>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="occasion-cart">
                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                    <form action="#" method="post">
                        <fieldset>
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="add" value="1">
                            <input type="hidden" name="business" value=" ">
                            <input type="hidden" name="item_name" value="Wing Sneakers">
                            <input type="hidden" name="amount" value="650.00">
                            <input type="hidden" name="discount_amount" value="1.00">
                            <input type="hidden" name="currency_code" value="USD">
                            <input type="hidden" name="return" value=" ">
                            <input type="hidden" name="cancel_return" value=" ">
                            <input type="submit" name="submit" value="Add to cart" class="button">
                        </fieldset>
                    </form>
                </div>

            </div>
            <ul class="social-nav model-3d-0 footer-social w3_agile_social single_page_w3ls">
                <li class="share">Share On : </li>
                <li><a href="#" class="facebook">
                        <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                <li><a href="#" class="twitter"> 
                        <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                <li><a href="#" class="instagram">
                        <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
                <li><a href="#" class="pinterest">
                        <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
            </ul>

        </div>
        <div class="clearfix"> </div>
        <!-- /new_arrivals --> 
        <div class="responsive_tabs_agileits"> 
            <div id="horizontalTab">
                <ul class="resp-tabs-list">
                    <li>Description</li>
                    <li>Reviews</li>
                    <li>Information</li>
                </ul>
                <div class="resp-tabs-container">
                    <!--/tab_one-->
                    <div class="tab1">

                        <div class="single_page_agile_its_w3ls">
                            <h6>Lorem ipsum dolor sit amet</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>
                            <p class="w3ls_para">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <!--//tab_one-->
                    <div class="tab2">

                        <div class="single_page_agile_its_w3ls">
                            <div class="bootstrap-tab-text-grids">
                                <section class="comment-list">
                                    <!-- First Comment -->
                                    @foreach ($comments as $comment)
                                    @if($comment->parenid == 0)
                                    <article class="row">
                                        <div class="col-md-2 col-sm-2 hidden-xs">
                                            <figure class="thumbnail">
                                                <img src="images/t1.jpg" alt=" " width="100" height="100" class="img-responsive">
                                                <figcaption class="text-center">{{$comment->user->name}}</figcaption>
                                            </figure>
                                        </div>
                                        <div class="col-md-10 col-sm-10">
                                            <div class="panel panel-default arrow left">
                                                <div class="panel-body">
                                                    <header class="text-left">
                                                        <div class="comment-user"><i class="fa fa-user"></i> {{$comment->user->name}}</div>
                                                        <time class="comment-date" datetime="{{$comment->created_at}}"><i class="fa fa-clock-o"></i> {{$comment->created_at ? $comment->created_at->diffForHumans() : 'no date'}}</time>
                                                    </header>
                                                    <div class="comment-post">
                                                        <p>
                                                            {{$comment->comment}}
                                                        </p>
                                                    </div>
                                                    <p class="text-right"><button class="btn btn-default btn-sm " product_id="{{$products->id}}" comment_id="{{$comment->id}}"><i class="fa fa-reply"></i> reply</button></p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <div class="{{ $comment->id }}"></div>
                                    <!-- Second Comment Reply -->
                                    @endif
                                    @endforeach
                                </section>
                                <div class="add-review">
                                    <h4>add a review</h4>
                                    <form action="" method="post">
                                        <textarea name="body" required=""></textarea>
                                        <input type="submit" value="SEND">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab3">

                        <div class="single_page_agile_its_w3ls">
                            <h6>Big Wing Sneakers (Navy)</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>
                            <p class="w3ls_para">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>	
        </div>
        <!-- //new_arrivals --> 
        <!--/slider_owl-->

        <div class="w3_agile_latest_arrivals">
            <h3 class="wthree_text_info">Featured <span>Arrivals</span></h3>	
            <div class="col-md-3 product-men single">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item">
                        <img src="images/w2.jpg" alt="" class="pro-image-front">
                        <img src="images/w2.jpg" alt="" class="pro-image-back">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                        <span class="product-new-top">New</span>

                    </div>
                    <div class="item-info-product ">
                        <h4><a href="single.html">Sleeveless Solid Blue Top</a></h4>
                        <div class="info-product-price">
                            <span class="item_price">$140.99</span>
                            <del>$189.71</del>
                        </div>
                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                            <form action="#" method="post">
                                <fieldset>
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="business" value=" ">
                                    <input type="hidden" name="item_name" value="Sleeveless Solid Blue Top">
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
                        <img src="images/w4.jpg" alt="" class="pro-image-front">
                        <img src="images/w4.jpg" alt="" class="pro-image-back">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                        <span class="product-new-top">New</span>

                    </div>
                    <div class="item-info-product ">
                        <h4><a href="single.html">Black Basic Shorts</a></h4>
                        <div class="info-product-price">
                            <span class="item_price">$120.99</span>
                            <del>$189.71</del>
                        </div>
                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                            <form action="#" method="post">
                                <fieldset>
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="business" value=" ">
                                    <input type="hidden" name="item_name" value="Black Basic Shorts">
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
                        <img src="images/s6.jpg" alt="" class="pro-image-front">
                        <img src="images/s6.jpg" alt="" class="pro-image-back">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                        <span class="product-new-top">New</span>

                    </div>
                    <div class="item-info-product ">
                        <h4><a href="single.html">Aero Canvas Loafers  </a></h4>
                        <div class="info-product-price">
                            <span class="item_price">$120.99</span>
                            <del>$199.71</del>
                        </div>
                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                            <form action="#" method="post">
                                <fieldset>
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="business" value=" ">
                                    <input type="hidden" name="item_name" value="Aero Canvas Loafers">
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
            <div class="clearfix"> </div>
            <!--//slider_owl-->
        </div>
    </div>
</div>


@endsection
@section('script')
<script>
    $(document).ready(function () {
        $(".btn-sm").click(function () {
            var comment_id = $(this).attr('comment_id');
            var product_id = $(this).attr('product_id');


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "commentForm",
                type: "POST",
                data: {
                    parentid: comment_id,
                    product_id: product_id,
                },
                success: function (data) {
                    $('.' + comment_id).html(data);
                }
            });
        });
        $(document).ready(function () {
            $(".sent").click(function () {
                var comment_id = $(this).attr('comment_id');
                var comment = $('comment').val();
                var product_id = $('product_id').val();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "addComment",
                    type: "POST",
                    data: {
                        parentid: comment_id,
                        product_id: product_id,
                        comment: comment,
                    },
                    success: function (data) {
                        $('.' + comment_id).html(data);
                    }
                });
            });
        });
    });
</script>
@endsection