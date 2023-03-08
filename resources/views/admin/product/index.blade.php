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
                            <div class="add">
                                <a href="{{route('product.create')}}" class="btn btn-success" style="margin: 20px">Thêm mới sản phẩm</a>
                            </div>
                        </div>
                        
                        <table id="example2" class="table table-bordered table-hover w-full">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Name</th>
                                    <th> Price</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Category</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $value)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->price }}</td>
                                        <td><img src="{{url('uploads')}}/{{$value->image}}" alt="" width="100px"></td>
                                        <td>{{ $value->description }}</td>
                                        <td>{{ $value->category->name}}</td>
                                        <td>
                                            <a href="{{ route('product.edit', $value) }}" class="btn btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('product.destroy', $value) }}" method="POST"
                                                onsubmit="return confirm('Bạn thực sự muốn xóa sản phẩm này?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">DELETE</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                        {{ $products->links() }}
                    </div>
            </div>  
        </div>
        <!-- /.card-body -->
        
        <!-- /.card -->
    </section>
@endsection
