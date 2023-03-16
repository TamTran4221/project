@extends('main')
@section('noidung')
<?php //Hiển thị thông báo thành công?>
@if ( Session::has('success') )
	<div class="alert alert-success alert-dismissible" role="alert">
		<strong>{{ Session::get('success') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif

<?php //Hiển thị thông báo lỗi?>
@if ( Session::has('error') )
	<div class="alert alert-danger alert-dismissible" role="alert">
		<strong>{{ Session::get('error') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif

<?php //Hiển thị form sửa sản phẩm?>
@include('alert')
<div class="card-body">
    <form method="POST" action="{{route('order.update',$order)}}" enctype= "multipart/form-data">
        @csrf
        @method('PUT')
        <div class="input-group mb-3">
            <label for="" class="">Tên khách hàng</label>
        </div>
        <div class="input-group mb-3">
            <span>{{$order->user->name}}</span>
            <input type="hidden" value="{{$order->user_id}}" name="user_id" class="form-control">
        </div>
        <div class="input-group mb-3">
            <label for="" class="">Địa chỉ</label>
        </div>

        <div class="input-group mb-3">
            
            <input type="text" class="form-control" value="{{$order->address}}" name="address">
            
        </div>
        <div class="input-group mb-3">
            <label for="" class="">Số điện thoại</label>
        </div>

        <div class="input-group mb-3">
            <input type="text" class="form-control" value="{{$order->phone}}" name="phone">
            
        </div>
        <div class="input-group mb-3">
            <label for="" class="">Trạng thái</label>
        </div>

        <div class="input-group">
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="status" id="" value="0"{{$order->status == 0 ? 'checked': ''}}> Đơn hàng đã nhận
                </label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="status" id="" value="1"{{$order->status == 1 ? 'checked': ''}}> Tạo đơn hàng
                </label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="status" id="" value="2"{{$order->status == 2 ? 'checked': ''}}> Đã giao cho đơn vị vận chuyển
                </label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="status" id="" value="2"{{$order->status == 3 ? 'checked': ''}}> Đang vận chuyển
                </label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="status" id="" value="3"{{$order->status == 4 ? 'checked': ''}}> Đã giao hàng
                </label>
            </div>
        </div>

        <!-- /input-group -->

        <div class="input-group mb-3">
            <label for="" class="">Ghi chú</label>
        </div>
        <div class="input-group input-group-sm">
            <textarea class="form-control" name="description" id="" cols="30" rows="15" value="{{$order->note }}">{{$order->note }}</textarea>

        </div> <span class="input-group-append">
            <button  class="btn btn-info btn-flat">Go!</button>
        </span>
    </form>
</div>
@endsection