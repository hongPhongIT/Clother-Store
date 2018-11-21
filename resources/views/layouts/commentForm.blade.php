@foreach($comments as $comment)
<article class="row">
    <div class="col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-0 hidden-xs">
        <figure class="thumbnail">
            <img src="images/t1.jpg" alt=" " width="100" height="100" class="img-responsive">
            <figcaption class="text-center">{{$comment->user->name}}</figcaption>
        </figure>
    </div>
    <div class="col-md-9 col-sm-9">
        <div class="panel panel-default arrow left">
            <div class="panel-heading right">Reply</div>
            <div class="panel-body">
                <header class="text-left">
                    <div class="comment-user"><i class="fa fa-user"></i> {{$comment->user->name}}</div>
                    <time class="comment-date" datetime="{{$comment->created_at}}"><i class="fa fa-clock-o"></i> {{$comment->created_at ? $comment->created_at->diffForHumans() : 'no date'}}</time>
                </header>
                <div class="comment-post">
                    <p>
                        {{$comment->comment}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</article>
<div class="clearfix"> </div>
@endforeach
<article class="row">
    <div class="col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-0 hidden-xs">
        <figure class="thumbnail">
            <img src="images/t1.jpg" alt=" " width="100" height="100" class="img-responsive">
            <figcaption class="text-center">username</figcaption>
        </figure>
    </div>
    <div class="col-md-9 col-sm-9">
        <div class="panel panel-default arrow left">
            <div class="panel-heading right">Reply</div>
            <form method="POST" action="#">
                <div class="panel-body">
                    <header class="text-left">
                        <div class="comment-user"><i class="fa fa-user"></i> That Guy</div>
                    </header>
                    <div class="comment-post">
                        <textarea name="comment" class="form-control" id="comment" rows="5" ></textarea>
                        <input type="hidden" id="product_id" name="product_id" value="{{$product->id}}">
                        @if(isset($_GET['parentid']))
                        <input type="hidden" id="parenid"  name="parenid" value="{{$_GET['parentid']}}">
                        @endif
                        @if(!isset($_GET['parentid']))
                        <input type="hidden" id="parenid"  name="parenid" value="{{$_POST['parentid']}}">
                        @endif
                    </div>
                    <p class="text-right">@if(isset($_GET['parentid']))<button type="button" class="btn btn-default btn-sm sent"  comment_id="{{$_GET['parentid']}}"><i class="fa fa-reply"></i> Sent</button>@endif @if(isset($_POST['parentid'])) <button type="submit" class="btn btn-default btn-sm sent"  comment_id="{{$_POST['parentid']}}"><i class="fa fa-reply"></i> Sent</button>@endif</p>
                </div>
            </form>
        </div>
    </div>
</article>
<div class="clearfix"> </div>
