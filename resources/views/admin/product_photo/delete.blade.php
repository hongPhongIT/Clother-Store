@extends('layouts.admin')

@section('content')
<h1>Photos</h1>
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>url </th>
            <th>product_id</th>
            <th>Delete</th>

    <tbody>
        @if($product_photos)    

        @foreach($product_photos as $product_photo)
        <tr>
            <td>{{$product_photo->id}}</td>
            <td><img style=" width:100px; height:100px;" src="{{$product_photo ? asset( $product_photo->url): 'http://placehold.it/50x50'}}" alt="" class="img-responsive img-rounded">
            </td>
             <td>{{$product_photo->product_id}}</td>

            <td><form action="{{ route('product_photo.destroy',$product_photo->id) }}" method="POST" >
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                    <div class="form-group">
                        <input type="submit" class="btn btn-danger" value="Delete photo" />
                    </div>
                </form></td>

        </tr>


        @endforeach      

        @endif


        @stop