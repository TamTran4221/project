@extends('main')
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
        <nav class="navbar navbar-main navbar-expand-lg position-sticky mt-4 top-1 px-0 mx-4 border-radius-xl z-index-sticky shadow-none"
            id="navbarBlur" data-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <h4 class="font-weight-bolder mb-0">Danh sách đơn hàng</h4>
                </nav>
                
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group input-group-outline">
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
                    </div>
                </div>
            </div>
        </nav>

        <div class="container-fluid py-4">
            <div class="d-sm-flex justify-content-between">
                <div>
                    <a href="" class="btn btn-icon bg-gradient-primary">
                        Đơn hàng mới
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="table-responsive">
                            <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                                   
                                <div class="dataTable-container">
                                    <table class="table table-flush dataTable-table" id="datatable-search">
                                        <thead class="thead-light">
                                            <tr>
                                                <th data-sortable="" style="width: 17.0683%;"><a href="#"
                                                        class="dataTable-sorter">Đơn hàng</a></th>
                                                <th data-sortable="" style="width: 15.9639%;"><a href="#"
                                                        class="dataTable-sorter">Ngày đặt</a></th>
                                                <th data-sortable="" style="width: 15.4618%;"><a href="#"
                                                        class="dataTable-sorter">Trạng thái</a></th>
                                                <th data-sortable="" style="width: 19.2771%;"><a href="#"
                                                        class="dataTable-sorter">Người đặt</a></th>
                                                <th data-sortable="" style="width: 21.1847%;"><a href="#"
                                                        class="dataTable-sorter">Địa chỉ giao hàng</a></th>
                                                <th data-sortable="" style="width: 11.0442%;"><a href="#"
                                                        class="dataTable-sorter">Ghi chú</a></th>
                                                        <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            @foreach ($order as $item)
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="customCheck1">
                                                        </div>
                                                        <p class="text-xs font-weight-normal ms-2 mb-0">{{$item->id}}</p>
                                                    </div>
                                                </td>
                                                <td class="font-weight-normal">
                                                    <span class="my-2 text-xs">{{$item->created_at->diffForHumans()}}</span>
                                                </td>
                                                <td class="text-xs font-weight-normal">
                                                    @if ($item->status == 0)
                                                    <span>Đơn hàng đã nhận</span>
                                                @elseif($item->status == 1)
                                                <span>Đang chuẩn bị</span>
                                                @elseif($item->status == 2)
                                                <span>Đã giao cho đơn vị vận chuyển</span>
                                                @elseif($item->status == 3)
                                                <span>Đang vận chuyển</span>
                                                @else 
                                                <span>Đã giao hàng</span>
                                                @endif
                                                </td>
                                                <td class="text-xs font-weight-normal">
                                                    <div class="d-flex align-items-center">
                                                        <span>{{$item->user->name}}</span>
                                                    </div>
                                                </td>
                                                <td class="text-xs font-weight-normal">
                                                    <span class="my-2 text-xs">{{$item->address}}</span>
                                                </td>
                                                <td class="text-xs font-weight-normal">
                                                    <span class="my-2 text-xs">{{$item->note}}</span>
                                                </td>
                                                <td>
                                                    <a href="{{route('order.detail',$item->id)}}" class="btn btn-sm btn-danger">Chi tiết đơn hàng</a>
                                                </td>
                                                <td>
                                                    <a href="{{route('order.edit',$item)}}" class="btn btn-primary">Sửa</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{$order->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
