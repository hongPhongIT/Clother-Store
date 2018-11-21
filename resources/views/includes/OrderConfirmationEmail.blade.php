<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">
        <link href="{{asset('css/orderStyle.css')}}" rel="stylesheet" type="text/css" media="all" />
    </head>
    <body>
        <div class="container">
            <div class="col-sm-8 col-md-8 col-lg-8">
                <div  id="product_customer"></div>
                <div class="order_info_form table-responsive" style="border:0px">
                    <div id="notification-content"></div>
                    <table class="table table-hover">
                        <thead style="background-color: white">
                            <tr>
                                <th>Name</th>
                                <th>Quanlity</th>
                                <th>Unit Price</th>
                                <th>promotion Price</th>
                                <th>Unit total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr class="item{{$product['item']['id']}}" style="background-color: white">
                                <td>
                                    <p style="font-size: 15px; color: black; text-align: left;margin-bottom: 10px">{{ $product['item']  ['name'] }}</p>
                                </td>
                                <td style="text-align: center;">
                                    <p class="qty{{$product['item']['id']}}">{{ $product['qty'] }}</p> 
                                </td>
                                <td>
                                    <h5 class="">{{ $product['item_price'].'    ' }}USD</h5>
                                </td>
                                <td>
                                    <del class=""><h5>{{ $product['promotion_price'].'    ' }}USD</h5></del> 
                                </td>
                                <td class="price{{$product['item']['id']}}">{{ $product['price'].'    '}}USD</td>
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
                                <th>
                                    <span>Delivery To:</span>
                                    </br></br>
                                    {{$user->name}}
                                    </br>
                                    <span>{{$bill->address}}</span><br>
                                    <span>{{$bill->phone}}</span></th>
                                <th>
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
                </div>
            </div>
            <div class="clearfix"></div>
            <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
            <script type="text/javascript" src="js/bootstrap.js"></script>
    </body>
</html>