@extends('main')
@section('title','Chi tiết đơn hàng')
@section('noidung')
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
                                <th>Mã đơn hàng</th>
                                <th>Sản phẩm</th>
                                <th>Ảnh mô tả</th>
                                <th>Số lượng</th>
                                <th>Tổng hóa đơn</th>
                                <th>Trạng thái</th>
                                <th>Ngày đặt hàng</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order_detail as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->order->id}}</td>
                                <td>{{ $item->product->name}}</td>
                                <td><img src="{{url('uploads')}}/{{$item->product->image}}" alt="" width="100px"></td>
                                <td>{{$item->quantity}}</td>
                                <td>{{number_format($item->subtotal)}}đ</td>
                                <td>{{$item->order->status}}</td>
                                <td>{{$item->created_at->diffForHumans()}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                   {{$order_detail->links()}}
                </div>
        </div>  
    </div>
    <!-- /.card-body -->
    
    <!-- /.card -->
</section>
@endsection
