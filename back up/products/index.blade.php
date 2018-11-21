@extends('layouts.admin')


@section('content')


    <h1>Products List</h1>


    <table class="table">
       <thead>
         <tr>
             <th>ID</th>
             <th>Product's Name</th>
             <th>Category</th>
             <th>Photo</th>
             <th>Description</th>
             <th>Unit</th>
             <th>Unit Price</th>
             <th>Promotion Price</th>             
             <th>View Comments</th>
             <th>Created at</th>
             <th>Update at</th>
        </thead>
        <tbody>
        @if($products)
            @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td><a href="{{ url('admin/products/'. $product->id.'/edit') }}">{{$product->name}}</a></td>                
                <td>{{$product->category ? $post->category->name : 'Uncategorized'}}</td>
                <td><img height="50" width="50" src="{{$post->photo ? asset( $post->photo->file ): 'http://placehold.it/400x400'}}" alt="" ></td>           
                <td>{{str_limit($product->description, 30)}}</td>
                <td>{{$product}}</td>
                <td>{{$product->unit_price}}</td>
                <td>{{$product->promotion_price}}</td>
                <td><a href="{{ url('admin/comments/'. $product->id.'/product') }}"> View Comments</a></td>
                <td>{{$product->created_at->diffForhumans()}}</td>
                <td>{{$product->updated_at->diffForhumans()}}</td>

            </tr>

            @endforeach

         @endif

        </tbody>
     </table>


      <div class="row">
        <div class="col-lg-6 col-sm-offset-5">
            {{ $products->render() }}
        </div>
        
    </div>



@stop