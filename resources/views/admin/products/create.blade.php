@extends('layouts.admin')


@section('content')
@include('includes.tinyeditor')

<h1>Add Product</h1>

<div class="row">

    <form action="{{ route('products.store') }}" method="post" enctype='multipart/form-data'>
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>



        <div class=" form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            <label for="Product Name">Product Name:</label>
            <input type="text" id="title" name="name" class="form-control" placeholder="Enter title" value="{{ old('name') }}">
            <span class="text-danger">{{ $errors->first('name') }}</span>
        </div> 

        <div class=" form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">
            <label for="category_id">Category:</label>
            <select class="form-control" id="category_id" name="category_id" >
                @foreach ($categories as $id => $name  )
                <option value="{{$id}}">{{$name}}</option>
                @endforeach   
            </select>                
            <span class="text-danger">{{ $errors->first('category_id') }}</span>
        </div>  


        <div class=" form-group {{ $errors->has('unit_ price') ? 'has-error' : '' }}">
            <label for="unit_ price">Unit price:</label>
            <input class="form-control" type="number" name="unit_price"value="{{ old('unit_ price') }}" placeholder="">   
            <span class="text-danger">{{ $errors->first('unit_ price') }}</span>
        </div>  

        <div class=" form-group {{ $errors->has('promotion_price') ? 'has-error' : '' }}">
            <label for="promotion_price">Promotion price:</label>
            <input class="form-control" type="number" name="promotion_price" value="{{ old('promotion_price') }}" placeholder="">
            <span class="text-danger">{{ $errors->first('promotion_price') }}</span>
        </div>  

        <div class=" form-group {{ $errors->has('unit') ? 'has-error' : '' }}">
            <label for="unit">Unit:</label>
            <select class="form-control" name="unit" >
                <option value="">--choose unit---</option>
                <option value="cai">Cai</option>
                <option value="chiec">Chiec</option>} 
            </select>  
            <span class="text-danger">{{ $errors->first('unit') }}</span>
        </div> 

          <div class="  form-group {{ $errors->has('photo_id') ? 'has-error' : '' }}">
                <label for="photo_id">Thumnail:</label>
                <input type="file" id="photo_id" name="photo_id" class="form-control" value="{{ old('photo_id') }}">
                <span class="text-danger">{{ $errors->first('photo_id') }}</span>
        </div> 

        <div class=" form-group {{ $errors->has('description') ? 'has-error' : '' }}">
            <label for="Description">Body:</label>
            <textarea class="form-control" rows="5" id="body" name="description">{{ old('description') }}</textarea>
            <span class="text-danger">{{ $errors->first('description') }}</span>
        </div> 

        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Create Post" />
        </div>
    </form>



</div>


<div class="row">


    @include('includes.form_error')



</div>




@stop