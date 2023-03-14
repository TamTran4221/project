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

<?php //Hiển thị danh sách sản phẩm?>
    <!-- Left col -->
   
    <section class="col-lg-12 connectedSortable">
        <!-- content -->
        <div class="row">
            <div class="col-12">
                    <div class="card-body">
                        <div class="search" style="display: flex;flex-direction: row-reverse;align-items: center;justify-content: space-between;">
                            <form action="">
                                <div class="input-group">
                                    <input type="search" class="form-control form-control-lg" placeholder="Nhập từ khóa tìm kiếm" name="key">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-lg btn-default">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <table id="example2" class="table table-bordered table-hover w-full">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên khách hàng</th>
                                    <th>Địa chỉ</th>
                                    <th>Số điện thoại</th>
                                    <th>Email</th>
                                    <th>Ngày đặt hàng</th>
                                    <th>Trạng thái</th>
                                    <th>Ghi chú</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->user->name }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{$item->phone}}</td>
                                    <td>{{ $item->user->email }}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>
                                        @if ($item->status == 0)
                                            <span>Chờ duyệt</span>
                                        @elseif($item->status == 1)
                                        <span>Đang giao hàng</span>
                                        @elseif($item->status == 2)
                                        <span>Đã giao hàng</span>
                                        @else 
                                        <span>Đã hủy</span>
                                        @endif
                    
                                    </td>
                                    <td>{{ $item->note}}</td>
                                    <td>
                                        <a href="{{route('detail.index')}}" class="btn btn-sm btn-danger">Chi tiết đơn hàng</a>
                                    </td>
                                    <td>
                                        <a href="{{route('order.edit',$item)}}" class="btn btn-primary">Edit</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                       
                    </div>
            </div>  
        </div>
        <!-- /.card-body -->
        
        <!-- /.card -->
    </section>
@endsection
