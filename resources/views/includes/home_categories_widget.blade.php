
<div class="agile_inner_drop_nav_info">
    <div class="col-sm-4 multi-gd-img" style="display: block; clear: both">
        <ul class="multi-column-dropdown">
            @foreach($categories as $category)
            <li><a href="{{url('men/category/'.$category->id)}}">{{$category->name}}</a>

            </li>
            @endforeach
        </ul>
    </div>
 
</di
