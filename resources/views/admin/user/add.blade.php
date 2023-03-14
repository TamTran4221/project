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

<?php //Form thêm mớisản phẩm?>
    <div class="card-body">
        <div class="tab-description p-0">
            <form action="{{route('user.store')}}" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <label for="" class="">Tên tài khoản *</label>
                </div>
                <div class="input-group mb-3">
                    <input type="name" placeholder="Tên tài khoản..." name="name" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <label for="" class="">Tài khoản*</label>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Tài khoản..." name="email">
                </div>
                <div class="input-group mb-3">
                    <label for="" class="">Mật khẩu*</label>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Mật khẩu..." name="password">
                </div>
                <div class="input-group mb-3">
                    <label for="" class="">Quyền của tài khoản *</label>
                </div>
                <div class="input-group mb-3">
                    <select class="form-control" name="status" id="">
                        <option value="1" selected>
                            Người quản trị
                        </option>
                        <option value="2">
                            Người dùng
                        </option>
                    </select>
                </div>
                <span class="input-group-append mt-3">
                    <button type="submit" class="btn btn-primary">Add</button>
                </span>
            </form>
        </div>
    </div>
@endsection