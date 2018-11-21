@extends('layouts.admin')

@section('content')
@include('includes.tinyeditor')

<h1>Edit Product</h1>



<div class="row">
    <form action="{{ route('products.update', $product->id) }}" method="post" enctype='multipart/form-data'>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="PUT">

        <div class=" form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            <label for="Product Name">Product Name:</label>
            <input type="text" id="title" name="name" class="form-control" placeholder="Enter title" value="{{$product->name }}">
            <span class="text-danger">{{ $errors->first('name') }}</span>
        </div> 

        <div class=" form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">
            <label for="category_id">Category:</label>
            <select class="form-control" id="category_id" name="category_id" >
                @foreach ($categories AS $id => $name  )
                <option value="{{$id}}">{{$name}}</option>
                @endforeach   
            </select>                
            <span class="text-danger">{{ $errors->first('category_id') }}</span>
        </div>  

        <div class="form-group " style="width:  200px">
            @foreach ($photos as $photo)
            <img style=" width:100px; height:100px;" src="{{$photo ? asset( $photo->url): 'http://placehold.it/50x50'}}" alt="" class="img-responsive img-rounded">

            <a class="remove_photo btn btn-danger" data-id="{{ $photo->id }}" >
                remove_photo
            </a>
            @endforeach  
        </div> 
        <div class="  form-group {{ $errors->has('photo_id') ? 'has-error' : '' }}">
            <label for="photo_id">Thumnail:</label>
            <input type="file" id="photo_id" name="photo_id" class="form-control" value="">
            <span class="text-danger">{{ $errors->first('photo_id') }}</span>
        </div> 

        <div class=" form-group {{ $errors->has('unit_price') ? 'has-error' : '' }}">
            <label for="unit_price">Unit price:</label>
            <input class="form-control" type="number" name="unit_price"value="{{$product->last_price()->unit_price}}" placeholder="">   
            <span class="text-danger">{{ $errors->first('unit_price') }}</span>
        </div>  

        <div class=" form-group {{ $errors->has('promotion_price') ? 'has-error' : '' }}">
            <label for="promotion_price">Promotion price:</label>
            <input class="form-control" type="number" name="promotion_price" value="{{ $product->last_price()->promotion_price }}" placeholder="">
            <span class="text-danger">{{ $errors->first('promotion_price') }}</span>
        </div>  

        <div class=" form-group {{ $errors->has('unit') ? 'has-error' : '' }}">
            <label for="unit">Unit:</label>
            <select class="form-control" name="unit" value="{{$product->unit}} >

                <option value="">--choose unit---</option>
                <option value="cai">Cai</option>
                <option value="chiec">Chiec</option>

            </select>  
            <span class="text-danger">{{ $errors->first('unit') }}</span>
        </div> 



        <div class=" form-group {{ $errors->has('description') ? 'has-error' : '' }}">
            <label for="Description">Body:</label>
            <textarea class="form-control" rows="5" id="body" name="description">{{ $product->description }}</textarea>
            <span class="text-danger">{{ $errors->first('description') }}</span>
        </div> 

        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-success" value="Edit products" />
        </div>
    </form>

    @foreach ($photos as $photo)
    <form id="form_{{$photo->id}}" action="{{ route('product_photo.destroy',$photo->id) }}" method="POST" style="display: none">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    </form>
    @endforeach 

</div>


<div class="row">






</div>

<script src="{{ asset("js/projectjs.js") }}"




@stop