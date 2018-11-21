@extends('layouts.admin')

@section('content')
<section class="content-header">
    <h1>
        Danh sách đơn hàng
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Bill</a></li>
        <li class="active">List</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    @if (Session::has('message'))
    <div class="alert alert-info"> {{ Session::get('message') }}</div>
    @endif
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <div class="row">
                <div class="col-md-12">
                    <table id="myTable" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting col-md-1" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="" >ID</th>
                                <th class="sorting_asc col-md-2" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="">User Name</th>
                                <th class="sorting col-md-1" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Create at</th>
                                <th>Email</th>
                                 <th>Address</th>
                                <th>Status</th>
                                
                                <th class="sorting col-md-1" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Action</th>
                               
                        </thead>
                        <tbody>
                            @foreach($bills as $bill) 

                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td> {{$bill->name}}</td>
                                <td>{{ $bill->created_at }}</td>
                                <td>{{$bill->email}}</td>
                                <td>{{$bill->address}}</td>
                                <td> 
                                    <?php
                                        switch ($bill->status)
                                        {
                                            case 1:
                                                echo 'Chờ xử lí';
                                                break;
                                            case 2:
                                                echo 'Đang giao';
                                                break;
                                            case 3:
                                                echo 'Đã giao';
                                                break;
                                             case 4:
                                                echo 'Hủy';
                                                break;
                                            default:
                                                break;
                                        }
                                    
                                    ?>
                                
                                </td>


                                <td><a href="{{ url('admin/bill')}}/{{ $bill->id }}/edit">Detail</a></td>
                                
                            </tr> 

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


