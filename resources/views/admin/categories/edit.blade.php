@extends('layouts.admin')

@section('content')
<h1 style="color: #0099CC; text-align: center; margin-top: 10px;">Categories</h1>
<div class="container">
    <form action="{{route('admin.categories.update', $category->id)}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="PUT">

        <div class="row col-md-2 form-group {{ $errors->has('name') ? 'has-error' : '' }} ">           
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Enter name" value="{{ $category->name}}">
            <span class="text-danger">{{ $errors->first('name') }}</span>

            <label for="parent">Chứa trong:</label>
            <select class="form-control" id="category_id" name="parentid" >
                <option value="{{$category->parentid}}">{{$category->name}}</option>                
            </select>          

            <label for="description" style="margin-top: 20px;">Description:</label>
            <input type="text" id="description" name="description" class="form-control" placeholder="Enter description" value="{{$category->description}}">
            <span class="text-danger">{{ $errors->first('description') }}</span> 

            <div class="form-group" style="margin-top: 5px;">
                <input type="submit" class="btn btn-success" value="Update" />
                
            </div>
            
            
        </div>
        <div class="row col-md-8 form-group" style="margin-left: 10px;">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Parent ID</th>  
                        <th>Created date</th> 
                        <th>Updated date</th>
                </thead>
                <tbody>

                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{ str_limit($category->description, 30) }}</td>
                        <td>{{$category->parentid}}</td>                       
                        <td>{{$category->created_at}}</td>
                        <td>{{$category->updated_at}}</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </form>
    <div class="row col-md-4 pull-left" style="margin-top:90px;">
         <a href="{{URL::previous()}}"><button class="btn btn-success">Back</button></a>
    </div>
   
</div>
@endsection
