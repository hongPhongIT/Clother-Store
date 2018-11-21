@extends('layouts.app')

@section('content')


@section('script')
<script type="text/javascript">
   
$(document).ready(function(){
  $('form').submit(function(){     
  var formdata = $(this).serialize();       
    $.ajax({
      url: '/addcomment',
      type: "POST",
      data: {formdata, '_token': $('input[name=_token]').val()},
      success: function(response){
        alert('works');
      }
    });      
  }); 
});

</script>




@endsection
@if(count($comments) > 0)
@foreach($comments as $comment)
<div class="col-md-12" style="padding: 5px 10px 10px 10px; border-bottom: 1px #ddd solid; background-color: #f8f8f8" >
    <div class="col-md-9">
        <h4 style="font-weight: bold" class="text-success"> {{$comment->author}}</h4>
    </div>
    <div class="col-md-3 pull-right">
        {{$comment->created_at->diffForHumans()}}
    </div>
    <div class="col-md-12">
        {{$comment->body}}
    </div>
    @if(Auth::check())
    <div class="col-md-12">
        <button data-toggle="collapse" data-target="#reply-{{$comment->id}}" class="btn btn-info">
            <i class="fa fa-reply" aria-hidden="true"></i>
            Reply
        </button>
        <div id="reply-{{$comment->id}}" class="collapse">
            <form method="POST" action="">
                <h4>Leave a Comment:</h4>
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                <input type="hidden" name="post_id" value="{{$post->id}}">
                <input type="hidden" name="parent_id" value="{{$comment->id}}">
                <div class="form-group">
                    <textarea class="form-control" rows="5" id="comment" name="body"></textarea>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Create Post" />
                </div>
            </form>
        </div>
    </div>
    @endif

</div>
@endforeach
<div class="row">
    <div class="col-lg-6 col-sm-offset-5">
        {{ $comments->render() }}
    </div>
</div>
@endif

