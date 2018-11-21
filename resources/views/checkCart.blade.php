@extends('layouts.home-post')
@section('link')
<link href="{{asset('confirm-form/notifier.style.css')}}" rel="stylesheet">
<link href="{{asset('css/orderStyle.css')}}" rel="stylesheet" type="text/css" media="all" />
@endsection
@section('content')
<div class="container-fluid" style="background-color: #d4d0d2;">
    <div class="row">
        <div class="col-lg-1 col-md-1 col-sm-1"></div>
        <div class="col-lg-10 col-md-10 col-sm-10">
            @if(Session::has('cart'))
            <div class="col-sm-8 col-md-8 col-lg-8">
                <div  id="product_customer"></div>
                <div class="order_info_form table-responsive" style="border:0px">
                    <div id="notification-content"></div>
                    <table class="table table-hover">
                        <thead style="background-color: white">
                            <tr>
                                <th></th>
                                <th>Size</th>
                                <th></th>
                                <th>Quantity</th>
                                <th></th>
                                <th>Price</th>
                                <th>Unit total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr class="item{{$product['item']['id']}}" style="background-color: white">
                                <td>
                                    <p style="font-size: 15px; color: black; text-align: left;margin-bottom: 10px">{{ $product['item']  ['name'] }}</p>
                                    <img class="img-responsive" width="150px" height="150px" src="{{ $product['image'] ? asset($product['image']): 'http://placehold.it/400x400'}}">
                                </td>
                                <td>
                                    <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
                                        @foreach ($pro_size->sizes as $size )
                                        <option value="null">{{$size->size}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td style="text-align: right; padding-top: 50px" class="delbyone{{$product['item']['id']}}">
                                    <button style="background-color: #2fdab8; position: relative;left: 30px; width: 20px ;border: 0px;text-align: center;" class="addByOne" pro_id='{{$product['item']['id']}}'> - </button>
                                </td>
                                <td style="text-align: center;">
                                    <p class="qty{{$product['item']['id']}}">{{ $product['qty'] }}</p></br>
                                    <p>Total quantity @foreach ($pro_size->size_quantity as $quantity) @if($quantity->product_id == $product['item']['id']) {{ $quantity->quantity }} @endif @endforeach</p>
                                </td>
                                <td style="text-align: left;">
                                    <button style="background-color: #2fdab8;position: relative;right: 30px; border: 0px ;text-align: center;" class="button" pro_id='{{$product['item']['id']}}'> + </button>
                                </td>
                                <td>
                                    <h5 class="">{{ $product['item_price'].'    ' }}USD</h5>
                                    <del class=""><h6>{{ $product['promotion_price'].'    ' }}USD</h6></del> 
                                </td>
                                <td class="price{{$product['item']['id']}}">{{ $product['price'].'    '}}USD</td>
                                <td>
                                    <button style="background-color: #2fdab8; border: 0px ;text-align: center;" ><span class="glyphicon glyphicon-remove remove_item" pro_id="{{$product['item']['id']}}"></span></button>
                                </td>
                            </tr>
                            <tr class="item{{$product['item']['id']}}" style="background-color: white;height: 10px"></tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="table-responsive order_info_form" style="background-color: white; border: 0px;overflow-x: visible;">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th style="font-size: 15px">Payment and shipping</th>
                                <th></th>
                            </tr>
                            <tr id="delivery">

                            </tr>
                            <tr>
                                <th style="font-size: 15px">Bill Information</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align: left;font-size: 17px;color: black;">Temporary price (<span class="cart_num">{{$totalQty.'  item'}}</span>)</td>
                                <td class="totalPrice" style="text-align: right">{{$totalPrice.'    ' }}USD</td>
                            </tr>
                            <tr>
                                <td style="text-align: left">Delivery charges</td>
                                <td style="text-align: right">2 USD</td>
                            </tr>
                            <tr>
                                <td style="text-align: left">Total</td>
                                <td class="totalPrice" style="color: red;font-weight: bold;text-align: right">{{$totalPrice.'    ' }}USD</td>
                            </tr>
                        </tbody>
                    </table>


                    <div class="row" id="payment">
                        <form>
                            <input type="button" class="btn-danger" id="input-cus-info" style="border: 0px;margin-left: 15px;width: 94%;height: 50px;background-color: #2fdab8;" value="Payment processing">
                        </form>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            @else
            <div class="row" style="height: 400px">
                <div class="col-md-8 col-md-offset-2">
                    <h2 style="margin-top: 150px;text-align: center">The are no products in the shopping cart!</h2>
                </div>
            </div>
            @endif
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1"></div>
        <div class="clearfix"></div>
        <div class="row" style="height: 70px"></div>
    </div>
</div>
@endsection
@section('script')
<script src="{{asset('confirm-form/notifier.script.js')}}"></script>
<script src="{{asset('js/shoppingCart.js')}}"></script>
<script src="{{asset('js/customer.js')}}"></script>
@endsection