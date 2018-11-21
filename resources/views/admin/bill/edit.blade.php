@extends('layouts.admin')

@section('content')
<section class="content-header">
    <section class="content">
    @if (Session::has('message'))
    <div class="alert alert-info"> {{ Session::get('message') }}</div>
    @endif
    <h1>
        Chi tiết đơn hàng
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Bill</a></li>
        <li class="active">List</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <div class="row">
                <div class="col-md-12">
                    <div class="container123  col-md-6"   style="">
                        <h4></h4>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="col-md-4">User Information</th>
                                    <th class="col-md-6"></th>
                                </tr>
                            </thead>
                            <tbody> 
                                <tr>
                                    <td>User Name</td>
                                    <td>{{ $billInfo->name }}</td>
                                </tr>
                                <tr>
                                    <td>Create at</td>
                                    <td>{{ $billInfo->created_at }}</td>
                                </tr>

                                <tr>
                                    <td>Phone Number</td>
                                    <td>{{ $billInfo->phone }}</td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td>{{ $billInfo->address }}</td>
                                </tr>

                                <tr>
                                    <td>Email</td>
                                    <td>{{ $billInfo->email }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <table id="myTable" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting col-md-1" >STT</th>
                                <th class="sorting_asc col-md-4">Tên sản phẩm</th>
                                <th class="sorting col-md-2">Số lượng</th>
                                                          

                        </thead>
                        <tbody>
                            @foreach($billDetails as $key => $bill)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $bill->product_name }}</td>
                                <td>{{ $bill->quantity }}</td>
                               
                            </tr>

                            <tr>
                                <td colspan="2"><b>Tổng tiền</b></td>
                                <td colspan="1"><b class="text-red"> <b class="text-red">{{ $billInfo->total.' ' }}</b> VNĐ</b></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-12">
                <form action="{{ url('admin/bill') }}/{{ $billInfo->id }}" method="POST">
                    <input type="hidden" name="_method" value="PUT">
                    {{ csrf_field() }}
                    <div class="col-md-8"></div>
                    <div class="col-md-4">
                        <div class="form-inline">
                            <label>Trạng thái giao hàng: </label>
                            <select name="status" class="form-control input-inline" style="width: 200px">
                                <option value="1" @if ($billInfo->status == 1) selected @endif>Chờ xử lí</option>
                                <option value="2" @if ($billInfo->status == 2) selected @endif>Đang giao</option>
                                <option value="3" @if ($billInfo->status == 3) selected @endif>Đã giao</option>
                                <option value="4" @if ($billInfo->status == 3) selected @endif>Hủy</option>
                            </select>

                            <input type="submit" value="Xử lý" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

