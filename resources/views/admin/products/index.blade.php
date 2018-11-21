@extends('layouts.admin')


@section('content')


<h1>Products List</h1>


<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Product's Name</th>
            <th>Photo</th>
            <th>Category</th>
            <th>Description</th>
            <th>Unit</th>
            <th>Unit Price</th>
            <th>Promotion Price</th>  
            <th>Created at</th>
            <th>Update at</th>
            <th></th>
    </thead>
    <tbody>
        @if($products)
        @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td><a href="{{ url('admin/products/'. $product->id.'/edit') }}">{{$product->name}}</a></td>    
            <td><img style=" width:100px; height:100px;" src="{{$product->image() ? asset( $product->image()->url) : 'http://placehold.it/50x50'}}" alt="" class="img-responsive img-rounded">
            <td>{{$product->category ? $product->category->name : 'Uncategorized'}}</td>
            <td>{{ str_limit($product->description, 30)}}</td>
            <td>{{$product->unit}}</td>
            <td>{{$product->last_price()->unit_price}}</td>
            <td>{{$product->last_price()->promotion_price}}</td>  
            <td>{{$product->created_at->diffForhumans()}}</td>
            <td>{{$product->updated_at->diffForhumans()}}</td>
            <td class="center"><form action="{{ route('products.destroy', $product->id) }}" method="POST" >
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                    <div class="form-group">
                        <input type="submit" class="btn btn-danger" value="Delete" />

                    </div>
                </form></td>
        </tr>

        @endforeach

        @endif

    </tbody>
    
    
@if (session('response'))
   <div class="alert {{session('response')["status"] == 'success' ?  'alert-success' : 'alert-danger'}}">
   <strong>{{session('response')["message"]}}</strong> 
 </div>
   @endif
</table>

<div class="row">
    <div class="col-lg-6 col-sm-offset-5">
        {{ $products->render() }}
    </div>

</div>



@stop