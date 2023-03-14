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
<div class="card-body">
    <form method="POST" action="{{route('user.update',$user)}}">
        @csrf
        @method('PUT')
        <div class="input-group mb-3">
            <label for="" class="">Tên tài khoản</label>
        </div>
        <div class="input-group mb-3">
        <input type="hidden" value="{{$user->id}}" name="id">
            <input type="name" value="{{$user->name}}" name="name" class="form-control">
        </div>
        <div class="input-group mb-3">
            <label for="" class="">Tài khoản</label>
        </div>

        <div class="input-group mb-3">
            <input type="text" class="form-control" value="{{$user->email}}" name="email">
        </div>
        <div class="input-group mb-3">
            <label for="" class="">Quyền</label>
        </div>
        <div class="input-group">
            <select class="form-control" name="status" id="">
                    <option value="1" {{$user->status == 1 ? 'selected' : ''}}>
                        Người quản trị
                    </option>
                    <option value="2" {{$user->status == 2 ? 'selected' : ''}}>
                        Người dùng
                    </option>
              </select>
        </div>
        <div class="input-group mb-3">
            <label for="" class="">Mật khẩu cũ*</label>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Mật khẩu cũ..." name="old_password">
        </div>
        <div class="input-group mb-3">
            <label for="" class="">Mật khẩu mới*</label>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Mật khẩu mới..." name="password">
        </div>
        <div class="input-group mb-3">
            <label for="" class="">Xác nhận mật khẩu*</label>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Xác nhận mật khẩu..." name="confim_password">
        </div>
        <span class="input-group-append">
            <button type="submit" id="btn_submit" class="btn btn-info btn-flat">Go!</button>
        </span>
    </form>
</div>
@endsection