
@foreach ($products as $product)
<div class="col-md-3 product-men single">
    <div class="men-pro-item simpleCart_shelfItem">
        <div class="men-thumb-item">
            <img style="height: 250px" src="{{$product->image() ? asset( $product->image()->url): 'http://placehold.it/100x100'}}"  alt="" class="pro-image-front">
            <img style="height: 250px" src="{{$product->image() ? asset( $product->image()->url): 'http://placehold.it/100x100'}}"  alt="" class="pro-image-back">
            <div class="men-cart-pro">
                <div class="inner-men-cart-pro">
                    <a href="detail/{{$product->id}}" class="link-product-add-cart">Quick View</a>
                </div>
            </div>
            <span class="product-new-top">New</span>

        </div>
        <div class="item-info-product ">
            <h4><a href="single.html">{{$product->name}}</a></h4>
            <div class="info-product-price">
                <span class="item_price">${!! number_format($product->last_price()->unit_price,0)!!}</span>
                <del>${!! number_format($product->last_price()->promotion_price, 0)!!}</del>
            </div>
            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                <form action="#" method="post">
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
                        <input type="submit" name="submit" pro_id="{{$product->id}}" value="Add to cart" class="button">
                    </fieldset>
                </form>
            </div>

        </div>
    </div>
</div>
@endforeach
<div class="clearfix"></div>
<div class="row">
    <div class="col-lg-6 col-sm-offset-5">
        {{ $products->render() }}
    </div>
</div>