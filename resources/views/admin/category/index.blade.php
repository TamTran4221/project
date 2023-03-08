@extends('main')
@section('noidung')
    <div class="container" style="margin: 50px" >
        <div>
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
                    <a href="{{route('category.create')}}" class="btn btn-success" style="margin: 20px">Thêm mới</a>
                </div>
            </div>
            <div class="col-lg-10">
                <table class="table" style="text-align: center">
                    <thead class="thead-dark">
                      <tr>
                        <tr>
                            <th>STT</th>
                            <th>Tên danh mục</th>
                            <th>Trạng thái</th>
                            <th></th>
                        </tr>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($cates as $data)
                        <tr>
                            <td scope="row">{{$loop->iteration}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->status ? 'Hiện' : 'Ẩn'}}</td>
                            <td>
                                <a href="{{route('category.edit',$data)}}" class="btn btn-primary">Sửa</a>

                                <form action="{{route('category.destroy',$data)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Xóa</button>
                                </form>
                            </td>
                        </tr>
                       @endforeach
                    </tbody>
                  </table>
                 
                  {{ $cates->links() }}
            </div>
           
        </div>
    </div>
@stop