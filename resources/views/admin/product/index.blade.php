@extends('main')
@section('title','Danh sách sản phẩm')
@section('noidung')
    <?php //Hiển thị thông báo thành công
    ?>

    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <strong>{{ Session::get('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
        </div>
    @endif

    <?php //Hiển thị thông báo lỗi
    ?>
    @if (Session::has('error'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <strong>{{ Session::get('error') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
        </div>
    @endif

    <?php //Hiển thị danh sách sản phẩm
    ?>
    <!-- Left col -->

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-header pb-0">
                        <div class="d-lg-flex">
                            <div>
                                <h5 class="mb-0">Tất cả dản phẩm</h5>

                            </div>
                            <div class="ms-auto my-auto mt-lg-0 mt-4">
                                <div class="ms-auto my-auto">
                                    <a href="{{ route('product.create') }}" class="btn bg-gradient-primary btn-sm mb-0"
                                        target="_blank">+&nbsp; Thêm mới dản phẩm</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-0">
                        <div class="table-responsive">
                            <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                                <div class="dataTable-top">
                                    <div class="dataTable-search"><input name="key" class="dataTable-input"
                                            placeholder="Search..." type="text"></div>
                                </div>
                                <div class="dataTable-container">
                                    <table class="table table-flush dataTable-table" id="products-list">
                                        <thead class="thead-light">
                                            <tr>
                                                <th data-sortable=""><a href="#" class="dataTable-sorter">Sản phẩm</a>
                                                </th>
                                                <th data-sortable="" style="width: 11.747%;"><a href="#"
                                                        class="dataTable-sorter">Danh mục</a></th>
                                                <th data-sortable="" style="width: 9.03614%;"><a href="#"
                                                        class="dataTable-sorter">Giá</a></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($products as $item)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">

                                                            <img class="w-10 ms-3"
                                                                src="{{ url('uploads') }}/{{ $item->image }}"
                                                                alt="">
                                                            <h6 class="ms-3 my-auto">{{ $item->name }}</h6>
                                                        </div>
                                                    </td>
                                                    <td class="text-sm">{{ $item->category->name }}</td>
                                                    <td class="text-sm">{{ $item->price }}</td>
                                                    <td class="text-sm">
                                                        <a href="{{ route('product.edit', $item) }}" class="btn btn-primary">Edit</a>
                                                        <form action="{{ route('product.destroy', $item) }}" method="POST"
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
                                </div>
                                {{ $products->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
