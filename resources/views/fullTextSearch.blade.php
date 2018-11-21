@extends('layouts.home-post')
@section('content')

@section('search')
<!-- / Search Results  -->
@if(count($products) > 0)
<div class="new_arrivals_agile_w3ls_info"> 
    <div class="container">
        <h3 class="wthree_text_info">Search results for keyword <span> "{{$keyword}}" </span></h3> 
        <div class="resp-tabs-container">     

            {!!$view!!}    

        </div>
        @endsection('search')


    </div>
</div>
@else
<div class="new_arrivals_agile_w3ls_info"> 
    <div class="container">
        <h3 class="wthree_text_info" ">There is no result for keyword <span> "{{$keyword}}" </span></h3>		
    </div>
</div>
@endif
<div class="clearfix"></div>


@endsection('content')

@section('script')
<script type="text/javascript">
	$(document).ready(function(){
		$.ajaxSetup({
			headers: {
			    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		$('#search').keyup(function(){
			var search = $('#search').val();
			if(search==""){
				$("#memList").html("");
				$('#result').hide();
			}
			else{
				$.get("{{ URL::to('search') }}",{search:search}, function(data){
					$('#memList').empty().html(data);
					$('#result').show();
				})
			}
		});
	});
</script>
@endsection