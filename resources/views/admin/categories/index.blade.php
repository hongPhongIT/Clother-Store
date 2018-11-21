@extends('layouts.admin')

@section('content')
<h1 style="color: #0099CC; text-align: center; margin-top: 10px;">Categories</h1>
@if(Session::has('deleted_category'))
<p class="alert alert-success">{{session('deleted_category')}}</p>
@endif
@if(Session::has('updated_category'))
<p class="alert alert-success">{{session('updated_category')}}</p>
@endif
@if(Session::has('created_category'))
<p class="alert alert-success">{{session('created_category')}}</p>
@endif
<div class="container">
    <!--    <form action="" method="post">-->
    <form action="{{route('admin.categories.store')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row col-md-2 form-group {{ $errors->has('name') ? 'has-error' : '' }} ">           
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Enter name" value="{{ old('name') }}">
            <span class="text-danger">{{ $errors->first('name') }}</span><br>
            <label for="parent">Chứa trong:</label>
            <select class="form-control" id="category_id" name="parentid" >
                <option value="0" selected="true">--Parent Category--</option>
                @foreach ($categories as $category  )
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach   
            </select>                
            <span class="text-danger">{{ $errors->first('category_id') }}</span>
            <label for="description" style="margin-top: 20px;">Description:</label>
            <input type="text" id="description" name="description" class="form-control" placeholder="Enter description" value="{{ old('description') }}">
            <span class="text-danger">{{ $errors->first('description') }}</span> 

            <div class="form-group" style="margin-top: 10px;">
                <input type="submit" class="btn btn-success" value="Create Category" />
            </div>
        </div>
    </form>

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
                    <th>Action</th>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{ str_limit($category->description, 30)}}</td>
                    <td>{{$category->parentid}}</td>
                    <td>{{$category->created_at}}</td>
                    <td>{{$category->updated_at}}</td>
                    <td><a href="{{ url('admin/categories/'.$category->id.'/edit') }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></a>
                        <form class="form-group pull-right" action="{{ route('admin.categories.destroy',$category->id) }}" method="POST" class="s">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                            <div class="form-group">
                                <button type="submit" onclick="return confirm('Are you sure to delete this ?')" style="border: none;"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                            </div>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-sm-offset-5">
        {{  $categories->render() }}
    </div>
</div>
@endsection