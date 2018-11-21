@extends('layouts.home-post')

@section('content')
<div class="page-head_agile_info_w3l">
    <div class="container">
        <h3>Men's <span>Wear  </span></h3>
        <!--/w3_short-->
        <div class="services-breadcrumb">
            <div class="agile_inner_breadcrumb">

                <ul class="w3_short">
                    <li><a href="index.html">Home</a><i>|</i></li>
                    <li>Men's Wear</li>
                </ul>
            </div>
        </div>
        <!--//w3_short-->
    </div>
</div>
<div class="banner-bootom-w3-agileits">
    <div class="container">
        <!-- mens -->
        <div class="col-md-4 products-left">
            <div class="filter-price">
                <h3>Filter By <span>Price</span></h3>
                <ul class="dropdown-menu6">
                    <li>                
                        <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 11.1111%; width: 66.6667%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 11.1111%;"></a><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 77.7778%;"></a></div>							
                        <input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;">
                    </li>			
                </ul>
            </div>
            <div class="css-treeview">
                <h4>Categories</h4>
                <ul class="tree-list-pad">
                    <li><input type="checkbox" checked="checked" id="item-0"><label for="item-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Men's Wear</label>
                        <ul>
                            <li><input type="checkbox" id="item-0-0"><label for="item-0-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Ethnic Wear</label>
                                <ul>
                                    <li>@include('includes.home_categories_widget')</li>

                                </ul>
                            </li>
                            <li><input type="checkbox" id="item-0-1"><label for="item-0-1"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Party Wear</label>
                                <ul>
                                    <li>@include('includes.home_categories_widget')</li>

                                </ul>
                            </li>
                            <li><input type="checkbox" id="item-0-2"><label for="item-0-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Casual Wear</label>
                                <ul>
                                    <li>@include('includes.home_categories_widget')</li>

                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><input type="checkbox" id="item-1" checked="checked"><label for="item-1"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Best Collections</label>
                        <ul>
                            <li><input type="checkbox" checked="checked" id="item-1-0"><label for="item-1-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> New Arrivals</label>
                                <ul>
                                    <li>@include('includes.home_categories_widget')</li>

                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li><input type="checkbox" checked="checked" id="item-2"><label for="item-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Best Offers</label>
                        <ul>
                            <li><input type="checkbox" id="item-2-0"><label for="item-2-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Summer Discount Sales</label>
                                <ul>
                                    <li>@include('includes.home_categories_widget')</li>

                                </ul>
                            </li>
                            <li><input type="checkbox" id="item-2-1"><label for="item-2-1"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Exciting Offers</label>
                                <ul>
                                    <li>@include('includes.home_categories_widget')</li>

                                </ul>
                            </li>
                            <li><input type="checkbox" id="item-2-2"><label for="item-2-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Flat Discounts</label>
                                <ul>
                                    <li>@include('includes.home_categories_widget')</li>

                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-8 products-right">
            <h5>Product <span>Compare(0)</span></h5>
            <div class="sort-grid">
                <div class="sorting">
                    <h6>Sort By</h6>
                    <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
                        <option value="null">Default</option>
                        <option value="null">Name(A - Z)</option> 
                        <option value="null">Name(Z - A)</option>
                        <option value="null">Price(High - Low)</option>
                        <option value="null">Price(Low - High)</option>	
                        <option value="null">Model(A - Z)</option>
                        <option value="null">Model(Z - A)</option>					
                    </select>
                    <div class="clearfix"></div>
                </div>
                <div class="sorting">
                    <h6>Showing</h6>
                    <select id="country2" onchange="change_country(this.value)" class="frm-field required sect">
                        <option value="null">7</option>
                        <option value="null">14</option> 
                        <option value="null">28</option>					
                        <option value="null">35</option>								
                    </select>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="men-wear-top">

                <div id="top" class="callbacks_container">
                    <ul class="rslides callbacks callbacks1" id="slider3">
                        <li id="callbacks1_s0" class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
                            <img class="img-responsive" src="images/banner2.jpg" alt=" ">
                        </li>
                        <li id="callbacks1_s1" class="callbacks1_on" style="display: block; float: left; position: relative; opacity: 1; z-index: 2; transition: opacity 500ms ease-in-out;">
                            <img class="img-responsive" src="images/banner5.jpg" alt=" ">
                        </li>
                        <li id="callbacks1_s2" class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
                            <img class="img-responsive" src="images/banner2.jpg" alt=" ">
                        </li>

                    </ul><ul class="callbacks_tabs callbacks1_tabs"><li class="callbacks1_s1"><a href="#" class="callbacks1_s1">1</a></li><li class="callbacks1_s2 callbacks_here"><a href="#" class="callbacks1_s2">2</a></li><li class="callbacks1_s3"><a href="#" class="callbacks1_s3">3</a></li></ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="men-wear-bottom">
                <div class="col-sm-4 men-wear-left">
                    <img class="img-responsive" src="images/bb2.jpg" alt=" ">
                </div>
                <div class="col-sm-8 men-wear-right">
                    <h4>Exclusive Men's <span>Collections</span></h4>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae 
                        ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                        explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                        odit aut fugit. </p>
                </div>
                <div class="clearfix"></div>
            </div>


        </div>

        <div class="clearfix"></div>
        <div class="single-pro">
            @foreach ($products  as $product)
            <div class="col-md-3 product-men">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item">
                        <img src="{{$product->image() ? asset( $product->image()->url): 'http://placehold.it/100x100'}}"  width="150" height="250" alt="" class="pro-image-front">
                        <img src="{{$product->image() ? asset( $product->image()->url): 'http://placehold.it/100x100'}}"   width="150" height="250" alt="" class="pro-image-back">

                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="detail/{{$product->id}}" class="link-product-add-cart">Quick View</a>                                                                </div>
                        </div>
                        <span class="product-new-top">New</span>
                    </div>
                    <div class="item-info-product ">
                        <h4><a href="single.html">{{$product->name}}</a></h4>                       
                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                            <form action="#" method="post">
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

                                    </form>
                                    </div>

                                    </div>
                                    </div>
                                    </div>
                                    @endforeach
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-offset-5">
                                            {{ $products->render() }}
                                        </div>

                                    </div>
                                    <div class="clearfix"></div>
                                    </div>
                                    </div>
                                    </div>
                                    @endsection
                                    @section('script')
                                    <script>
                                        $(document).ready(function () {
                                            $("#country2").change(function () {
                                                var item = $('#country2').val();

                                                $.ajax({
                                                    url: "men/show",
                                                    type: "POST",
                                                    data: {
                                                        item: item,
                                                    },
                                                    success: function (data) {
                                                        if (data.resuilt.name != undefined) {
                                                            $('.single-pro').html(data.resuilt.name[0]);
                                                        }
                                                    }
                                                });
                                            });
                                        });
                                    </script>
                                    <!-- //script for responsive tabs -->		
                                    <!-- stats -->
                                    @endsection