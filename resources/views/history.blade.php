@extends('layouts.home-post')
@section('link')
<link href="{{asset('confirm-form/notifier.style.css')}}" rel="stylesheet">
<link href="{{asset('css/orderStyle.css')}}" rel="stylesheet" type="text/css" media="all" />
@endsection
@section('content')
<div class="container-fluid" style="background-color: #d4d0d2;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4"></div>
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div id="notification-content"></div>
                <div id="horizontalTab" style="">
                    <ul class="resp-tabs-list" style="font-size: 12px;margin-top: 20px;background-color: white">
                        <li style="background-color: white"> Wait for pay</li>
                        <li style="background-color: white"> Delivered</li>
                        <li style="background-color: white"> Assiged</li>
                        <li style="background-color: white"> Cancelled</li>
                    </ul>
                    <div class="resp-tabs-container">
                        <!--/tab_one-->
                        <div class="tab1">

                            <table class="table" style="background-color:#ffffff">
                                <tbody>
                                    @foreach($bills as $bill)
                                    @if($bill->status == 0)
                                    @foreach($bill->bill_details as $item)
                                    <tr class="{{$bill->id}}">
                                        <td>
                                            <p style="font-weight: bold">{{ $item->product->name }}</p></br>
                                            <img style=" width:100px; height:100px;" src="{{$item->product->image() ? asset($item->product->image()->url) : 'http://placehold.it/50x50'}}"/>
                                        </td>
                                        <td>
                                            <p style="font-weight: bold">{!! $item->product->description !!}</p></br>
                                            <p>x{{ $item->quantity }}</p>
                                        </td>
                                        <td>@foreach($item->product->price_updates as $price)
                                            <del>{{$price->promotion_price}}USD</del>
                                            <p>{{$price->unit_price}}USD</p>
                                            @endforeach
                                    </tr>
                                    @endforeach
                                    <tr class="{{$bill->id}}">
                                        <td><input class="cancel_bill" type="button" style="background-color: #2fdab8;border: 0px;height: 40px;color: white;font-weight: bold" bill_id="{{$bill->id}}" value="Cancel order"></td>
                                        <td><input class="bill" type="button" style="background-color: #2fdab8;border: 0px;height: 40px;color: white;font-weight: bold" bill_id="{{$bill->id}}" value="View line items"></td>
                                        <td><h4 style="font-weight: bold">Total:{{$bill->total}}USD</h4></td>
                                    </tr>
                                    <tr id="info_order{{$bill->id}}" class="hidden {{$bill->id}}">
                                        <td style="font-weight: bold">{{$bill->user->name}}</td>
                                        <td style="font-weight: bold">{{$bill->address}}</td>
                                        <td style="font-weight: bold">{{$bill->phone}}</td>
                                    </tr>
                                    <tr style="background-color: #d4d0d2;height: 5px" class="{{$bill->id}}"><td></td><td></td><td></td></tr>
                                    @else
                                    <tr class="{{$bill->id}}" style="height: 200px;background-color: white"><td></td><td><b><p style="position: relative;top: 100px;left: 170px">You don't have bill wait for pay</p></b></td><td></td></tr>
                                    @endif
                                    @break
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="tab2">

                            <table class="table" style="background-color:#ffffff">
                                <tbody>
                                    @foreach($bills as $bill)
                                    @if($bill->status == 2)
                                    @foreach($bill->bill_details as $item)
                                    <tr class="{{$bill->id}}">
                                        <td>
                                            <p style="font-weight: bold">{{ $item->product->name }}</p></br>
                                            <img style=" width:100px; height:100px;" src="{{$item->product->image() ? asset($item->product->image()->url) : 'http://placehold.it/50x50'}}"/>
                                        </td>
                                        <td>
                                            <p style="font-weight: bold">{!! $item->product->description !!}</p></br>
                                            <p>x{{ $item->quantity }}</p>
                                        </td>
                                        <td>@foreach($item->product->price_updates as $price)
                                            <del>{{$price->promotion_price}}USD</del>
                                            <p>{{$price->unit_price}}USD</p>
                                            @endforeach
                                    </tr>
                                    @endforeach
                                    <tr class="{{$bill->id}}">
                                        <td><input class="bill" type="button" style="background-color: #2fdab8;border: 0px;height: 40px;color: white;font-weight: bold" bill_id="{{$bill->id}}" value="View line items"></td>
                                        <td><h4 style="font-weight: bold">Total:{{$bill->total}}USD</h4></td>
                                    </tr>
                                    <tr id="info_order{{$bill->id}}" class="hidden {{$bill->id}}">
                                        <td style="font-weight: bold">{{$bill->user->name}}</td>
                                        <td style="font-weight: bold">{{$bill->address}}</td>
                                        <td style="font-weight: bold">{{$bill->phone}}</td>
                                    </tr>
                                    <tr style="background-color: #d4d0d2;height: 5px" class="{{$bill->id}}"><td></td><td></td><td></td></tr>
                                    @else
                                    <tr class="{{$bill->id}}" style="height: 200px;background-color: white"><td></td><td><b><p style="position: relative;top: 100px;left: 170px">You don't have bill wait for pay</p></b></td><td></td></tr>
                                    @endif
                                    @break
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="tab3">

                            <table class="table" style="background-color:#ffffff">
                                <tbody>
                                    @foreach($bills as $bill)
                                    @if($bill->status == 3)
                                    @foreach($bill->bill_details as $item)
                                    <tr class="{{$bill->id}}">
                                        <td>
                                            <p style="font-weight: bold">{{ $item->product->name }}</p></br>
                                            <img style=" width:100px; height:100px;" src="{{$item->product->image() ? asset($item->product->image()->url) : 'http://placehold.it/50x50'}}"/>
                                        </td>
                                        <td>
                                            <p style="font-weight: bold">{!! $item->product->description !!}</p></br>
                                            <p>x{{ $item->quantity }}</p>
                                        </td>
                                        <td>@foreach($item->product->price_updates as $price)
                                            <del>{{$price->promotion_price}}USD</del>
                                            <p>{{$price->unit_price}}USD</p>
                                            @endforeach
                                    </tr>
                                    @endforeach
                                    <tr class="{{$bill->id}}">
                                        <td><input class="bill" type="button" style="background-color: #2fdab8;border: 0px;height: 40px;color: white;font-weight: bold" bill_id="{{$bill->id}}" value="View line items"></td>
                                        <td><h4 style="font-weight: bold">Total:{{$bill->total}}USD</h4></td>
                                    </tr>
                                    <tr id="info_order{{$bill->id}}" class="hidden {{$bill->id}}">
                                        <td style="font-weight: bold">{{$bill->user->name}}</td>
                                        <td style="font-weight: bold">{{$bill->address}}</td>
                                        <td style="font-weight: bold">{{$bill->phone}}</td>
                                    </tr>
                                    <tr style="background-color: #d4d0d2;height: 5px" class="{{$bill->id}}"><td></td><td></td><td></td></tr>
                                    @else
                                    <tr class="{{$bill->id}}" style="height: 200px;background-color: white"><td></td><td><b><p style="position: relative;top: 100px;left: 170px">You don't have bill wait for pay</p></b></td><td></td></tr>
                                    @endif
                                    @break
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="tab4">

                            <table class="table" style="background-color:#ffffff">
                                <tbody>
                                    @foreach($bills as $bill)
                                    @if($bill->status == 5)
                                    @foreach($bill->bill_details as $item)
                                    <tr class="{{$bill->id}}">
                                        <td>
                                            <p style="font-weight: bold">{{ $item->product->name }}</p></br>
                                            <img style=" width:100px; height:100px;" src="{{$item->product->image() ? asset($item->product->image()->url) : 'http://placehold.it/50x50'}}"/>
                                        </td>
                                        <td>
                                            <p style="font-weight: bold">{!! $item->product->description !!}</p></br>
                                            <p>x{{ $item->quantity }}</p>
                                        </td>
                                        <td>@foreach($item->product->price_updates as $price)
                                            <del>{{$price->promotion_price}}USD</del>
                                            <p>{{$price->unit_price}}USD</p>
                                            @endforeach
                                    </tr>
                                    @endforeach
                                    <tr class="{{$bill->id}}">
                                        <td><input class="bill" type="button" style="background-color: #2fdab8;border: 0px;height: 40px;color: white;font-weight: bold" bill_id="{{$bill->id}}" value="View line items"></td>
                                        <td><h4 style="font-weight: bold">Total:{{$bill->total}}USD</h4></td>
                                    </tr>
                                    <tr id="info_order{{$bill->id}}" class="hidden {{$bill->id}}">
                                        <td style="font-weight: bold">{{$bill->user->name}}</td>
                                        <td style="font-weight: bold">{{$bill->address}}</td>
                                        <td style="font-weight: bold">{{$bill->phone}}</td>
                                    </tr>
                                    <tr style="background-color: #d4d0d2;height: 5px" class="{{$bill->id}}"><td></td><td></td><td></td></tr>
                                    @else
                                    <tr class="{{$bill->id}}" style="height: 200px;background-color: white"><td></td><td><b><p style="position: relative;top: 100px;left: 170px">You don't have bill wait for pay</p></b></td><td></td></tr>
                                    @endif
                                    @break
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div  id="product_customer"></div>
                <div id="notification-content"></div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
@endsection
@section('script')
<script src="{{asset('confirm-form/notifier.script.js')}}"></script>
<script src="{{asset('js/shoppingCart.js')}}"></script>
<script src="{{asset('js/customer.js')}}"></script>
<script src="{{asset('js/viewCart.js')}}"></script>
@endsection