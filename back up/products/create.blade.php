@extends('layouts.admin')


@section('content')
    @include('includes.tinyeditor')

    <h1>Add Product</h1>

    <div class="row">
         
        <form action="" method="post" enctype='multipart/form-data'>
            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

        

            <div class=" form-group ">
                    <label for="title">Name:</label>
                    <input type="text" id="title" name="title" class="form-control" placeholder="Enter title" value="">
                    <span class="text-danger"></span>
            </div>        
            <div class=" form-group ">
                    <label for="category_id">Category:</label>
                    <select class="form-control" id="category_id" name="category_id" >
                     
                       <option value=""></option>
                    
                     </select>                
                    <span class="text-danger"></span>
            </div>  
            
            
            <div class="  form-group ">
                <label for="photo_id">Thumnail:</label>
                <input type="file" id="photo_id" name="photo_id" class="form-control" value="">
                <span class="text-danger"></span>
           </div> 
            
            
           <div class=" form-group ">
                    <label for="body">Title:</label>
                     <textarea class="form-control" rows="5" id="body" name="body"></textarea>
                    <span class="text-danger"></span>
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