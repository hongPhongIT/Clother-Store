@extends('layouts.home-post')

@section('content')
<div class="page-head_agile_info_w3l">
    <div class="container">
        <h3>Single <span>Page </span></h3>
        <!--/w3_short-->
        <div class="services-breadcrumb">
            <div class="agile_inner_breadcrumb">

                <ul class="w3_short">
                    <li><a href="home">Home</a><i>|</i></li>
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
                        @foreach($product->product_photos as $photo)
                        <li data-thumb="{{$photo->url ? asset($photo->url) : 'http://placehold.it/100x100'}}">
                            <div class="thumb-image"> <img src="{{$photo->url ? asset($photo->url) : 'http://placehold.it/100x100'}}" data-imagezoom="true" class="img-responsive"> </div>
                        </li>     
                        @endforeach
                    </ul>
                    <div class="clearfix"></div>
                </div>	
            </div>
        </div>
        @foreach($product->price_updates as $product_price)
        <div class="col-md-8 single-right-left simpleCart_shelfItem">
            <h3>{{$product->name}}</h3>
            <p><span class="item_price">${!! number_format($product_price->unit_price, 0)!!}</span> <del>- ${!! number_format($product_price->promotion_price, 0)!!}</del></p>
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
                <form action="#">
                    <input type="text" value="Enter pincode" onfocus="this.value = '';" onblur="if (this.value == '') {
                                this.value = 'Enter pincode';
                            }" required="">
                    <input type="submit" value="Check">
                </form>
            </div>
            <div class="color-quality">
                <div class="color-quality-right">
                    <h5>Size :</h5>
                    @foreach ($product->sizes as $size )
                    <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
                        <option value="null">{{$size->size}}</option>
                    </select>
                    @endforeach
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
                            <input type="button" name="submit" value="Add to cart" pro_id="{{$product->id}}" class="button">
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
        @endforeach
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
                    <!--tab_one-->
                    <div class="tab1">
                        <div class="single_page_agile_its_w3ls">
                            <h6>{{$product->name}}</h6>
                            <p>{{ $product->description }}</p>
                        </div>
                    </div>
                    <!--//tab_one-->
                    <div class="tab2">

                        <div class="single_page_agile_its_w3ls">
                            <div class="bootstrap-tab-text-grids">
                                <div class="bootstrap-tab-text-grid">
                                    <section class="comment-list">
                                        <!-- First Comment -->
                                        @foreach ($comments as $comment)
                                        @if($comment->parentid == 0)
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
                                                        <p class="text-right"><button class="btn btn-default btn-sm " product_id="{{$product->id}}" comment_id="{{$comment->id}}"><i class="fa fa-reply"></i> reply</button></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <div class="{{ $comment->id }} clean"></div>
                                        <!-- Second Comment Reply -->
                                        @endif
                                        @endforeach
                                    </section>
                                </div>
                                <div class="add-review">
                                    <h4>add a review</h4>
                                    <form action="#" method="post">
                                        <input type="hidden" id="parentid" value="0">
                                        <input type="hidden" name="product_id" id="product_id" value="{{$product->id}}"> 
                                        <textarea name="comment" id="comment" required=""></textarea>
                                        <input type="submit" class="sent" value="SEND">
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab3">
                        <div class="single_page_agile_its_w3ls">
                            <h6>{{$product->name}}</h6>
                            <p>{{ $product->description }}</p>
                        </div>
                    </div>
                </div>
            </div>	
        </div>
        <!-- //new_arrivals --> 
        <!--/slider_owl-->

        <div class="w3_agile_latest_arrivals">
            <h3 class="wthree_text_info">Featured<span>Arrivals</span></h3>
            {!!$view!!}
        </div>
    </div>
</div>
<!--//single_page-->

@endsection
@section('script')
<script>
    $(document).ready(function () {
        $(".btn-sm").click(function () {
            $('.clean').html('');
            var comment_id = $(this).attr('comment_id');
            var product_id = $(this).attr('product_id');


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "comment/" + comment_id + "/edit",
                type: "GET",
                data: {
                    parentid: comment_id,
                    product_id: product_id,
                },
                success: function (data) {
                    $('.' + comment_id).html(data);
                }
            });
        });
        $(document).on("click", function (e) {
            $(".sent").click(function () {
                var comment_id = $(this).attr('comment_id');
                var parenid = $('#parenid').val();
                var comment = $('#comment').val();
                var product_id = $('#product_id').val();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "comment",
                    type: "POST",
                    data: {
                        product_id: product_id,
                        comment: comment,
                        parentid: parenid,
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