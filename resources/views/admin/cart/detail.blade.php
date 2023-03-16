@extends('main')
@section('title', 'Chi tiết đơn hàng')
@section('noidung')
    <section class="col-lg-12 connectedSortable">
        <!-- content -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card mb-4">
                        <div class="card-header p-3 pb-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="w-50">
                                    <h6>Chi tiết đơn hàng</h6>
                                    <p class="text-sm mb-0">
                                        Mã đơn hàng #120<b>{{ $orders->id }}</b> Từ
                                        <b>{{ $orders->created_at->diffForHumans() }}</b>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3 pt-0">
                            <div class="card">
                                <div class="table-responsive">
                                  <table class="table align-items-center mb-0">
                                    <thead>
                                      <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tên sản phẩm</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Số lượng</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Giá</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($detail as $item)
                                        <tr>
                                            <td>
                                              <div class="d-flex px-2">
                                                <div>
                                                  <img src="{{url('uploads')}}/{{$item->product->image}}" class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                  <h6 class="mb-0 text-xs">{{$item->product->name}}</h6>
                                                </div>
                                              </div>
                                            </td>
                                            <td>
                                              <p class="text-xs font-weight-normal mb-0">{{$item->quantity}}</p>
                                            </td>
                                            <td>
                                              <span class="badge badge-dot me-4">
                                                <i class="bg-info"></i>
                                                <span class="text-dark text-xs">{{number_format($item->product->price)}}đ</span>
                                              </span>
                                            </td>
                                          </tr>
                                        @endforeach
                                     
                              
                                    </tbody>
                                  </table>
                                </div>
                                </div>
                           
                            <hr class="horizontal dark mt-4 mb-4">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-12">
                                    <h6 class="mb-3">Trạng thái</h6>
                                    <div class="timeline timeline-one-side">
                                        @if ($orders->status == 0)
                                            <div class="timeline-block mb-3">
                                                <span class="timeline-step">
                                                    <i class="material-icons text-secondary text-lg">notifications</i>
                                                </span>
                                                <div class="timeline-content">
                                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Đơn hàng đã nhận
                                                    </h6>
                                                    <p class="text-secondary font-weight-normal text-xs mt-1 mb-0">
                                                        {{ $orders->created_at->diffForHumans() }}</p>
                                                </div>
                                            </div>
                                        @elseif($orders->status == 1)
                                            <div class="timeline-block mb-3">
                                                <span class="timeline-step">
                                                    <i class="material-icons text-secondary text-lg">notifications</i>
                                                </span>
                                                <div class="timeline-content">
                                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Đơn hàng đã nhận
                                                    </h6>
                                                    <p class="text-secondary font-weight-normal text-xs mt-1 mb-0">
                                                        {{ $orders->created_at->diffForHumans() }}</p>
                                                </div>
                                            </div>
                                            <div class="timeline-block mb-3">
                                                <span class="timeline-step">
                                                    <i class="material-icons text-secondary text-lg">code</i>
                                                </span>
                                                <div class="timeline-content">
                                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Tạo đơn hàng có mã
                                                        {{ $orders->id }}</h6>
                                                    <p class="text-secondary font-weight-normal text-xs mt-1 mb-0">
                                                        {{ $orders->updated_at->diffForHumans() }}</p>
                                                </div>
                                            </div>
                                        @elseif($orders->status == 2)
                                            <div class="timeline-block mb-3">
                                                <span class="timeline-step">
                                                    <i class="material-icons text-secondary text-lg">notifications</i>
                                                </span>
                                                <div class="timeline-content">
                                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Đơn hàng đã nhận
                                                    </h6>
                                                    <p class="text-secondary font-weight-normal text-xs mt-1 mb-0">
                                                        {{ $orders->created_at->diffForHumans() }}</p>
                                                </div>
                                            </div>
                                            <div class="timeline-block mb-3">
                                                <span class="timeline-step">
                                                    <i class="material-icons text-secondary text-lg">code</i>
                                                </span>
                                                <div class="timeline-content">
                                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Tạo đơn hàng có mã
                                                        {{ $orders->id }}</h6>
                                                    <p class="text-secondary font-weight-normal text-xs mt-1 mb-0">
                                                        {{ $orders->updated_at->diffForHumans() }}</p>
                                                </div>
                                            </div>
                                            <div class="timeline-block mb-3">
                                                <span class="timeline-step">
                                                    <i class="material-icons text-secondary text-lg">shopping_cart</i>
                                                </span>
                                                <div class="timeline-content">
                                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Đơn hàng đã đc giao
                                                        cho đơn vị vận chuyển</h6>
                                                    <p class="text-secondary font-weight-normal text-xs mt-1 mb-0">
                                                        {{ $orders->updated_at->diffForHumans() }}</p>
                                                </div>
                                            </div>
                                        @elseif($orders->status == 3)
                                            <div class="timeline-block mb-3">
                                                <span class="timeline-step">
                                                    <i class="material-icons text-secondary text-lg">notifications</i>
                                                </span>
                                                <div class="timeline-content">
                                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Đơn hàng đã nhận
                                                    </h6>
                                                    <p class="text-secondary font-weight-normal text-xs mt-1 mb-0">
                                                        {{ $orders->created_at->diffForHumans() }}</p>
                                                </div>
                                            </div>
                                            <div class="timeline-block mb-3">
                                                <span class="timeline-step">
                                                    <i class="material-icons text-secondary text-lg">code</i>
                                                </span>
                                                <div class="timeline-content">
                                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Tạo đơn hàng có mã
                                                        {{ $orders->id }}</h6>
                                                    <p class="text-secondary font-weight-normal text-xs mt-1 mb-0">
                                                        {{ $orders->updated_at->diffForHumans() }}</p>
                                                </div>
                                            </div>
                                            <div class="timeline-block mb-3">
                                                <span class="timeline-step">
                                                    <i class="material-icons text-secondary text-lg">shopping_cart</i>
                                                </span>
                                                <div class="timeline-content">
                                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Đơn hàng đã đc giao
                                                        cho đơn vị vận chuyển</h6>
                                                    <p class="text-secondary font-weight-normal text-xs mt-1 mb-0">
                                                        {{ $orders->updated_at->diffForHumans() }}</p>
                                                </div>
                                            </div>
                                            <div class="timeline-block mb-3">
                                                <span class="timeline-step">
                                                    <span
                                                        class="material-icons text-secondary text-lg">local_shipping</span>
                                                </span>
                                                <div class="timeline-content">
                                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Đang vận chuyển</h6>
                                                    <p class="text-secondary font-weight-normal text-xs mt-1 mb-0">
                                                        {{ $orders->updated_at->diffForHumans() }}</p>
                                                </div>
                                            </div>
                                        @else
                                            <div class="timeline-block mb-3">
                                                <span class="timeline-step">
                                                    <i class="material-icons text-secondary text-lg">notifications</i>
                                                </span>
                                                <div class="timeline-content">
                                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Đơn hàng đã nhận
                                                    </h6>
                                                    <p class="text-secondary font-weight-normal text-xs mt-1 mb-0">
                                                        {{ $orders->created_at->diffForHumans() }}</p>
                                                </div>
                                            </div>
                                            <div class="timeline-block mb-3">
                                                <span class="timeline-step">
                                                    <i class="material-icons text-secondary text-lg">code</i>
                                                </span>
                                                <div class="timeline-content">
                                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Tạo đơn hàng có mã
                                                        {{ $orders->id }}</h6>
                                                    <p class="text-secondary font-weight-normal text-xs mt-1 mb-0">
                                                        {{ $orders->updated_at->diffForHumans() }}</p>
                                                </div>
                                            </div>
                                            <div class="timeline-block mb-3">
                                                <span class="timeline-step">
                                                    <i class="material-icons text-secondary text-lg">shopping_cart</i>
                                                </span>
                                                <div class="timeline-content">
                                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Đơn hàng đã đc giao
                                                        cho đơn vị vận chuyển</h6>
                                                    <p class="text-secondary font-weight-normal text-xs mt-1 mb-0">
                                                        {{ $orders->updated_at->diffForHumans() }}</p>
                                                </div>
                                            </div>
                                            <div class="timeline-block mb-3">
                                                <span class="material-icons text-secondary text-lg">local_shipping</span>
                                                <div class="timeline-content">
                                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Đang vận chuyển
                                                    </h6>
                                                    <p class="text-secondary font-weight-normal text-xs mt-1 mb-0">
                                                        {{ $orders->updated_at->diffForHumans() }}</p>
                                                </div>
                                            </div>
                                            <div class="timeline-block mb-3">
                                                <span class="timeline-step">
                                                    <i class="material-icons text-success text-gradient text-lg">done</i>
                                                </span>
                                                <div class="timeline-content">
                                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Đơn hàng dã được
                                                        vận chuyển</h6>
                                                    <p class="text-secondary font-weight-normal text-xs mt-1 mb-0">
                                                        {{ $orders->updated_at->diffForHumans() }}</p>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6 col-12">
                                    <h6 class="mb-3">Phương thức thanh toán</h6>
                                    <div
                                        class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                                        <h6 class="mb-0">Thanh toán khi nhận hàng</h6>
                                    </div>
                                    <h6 class="mb-3 mt-4">THÔNG TIN NGƯỜI NHẬN</h6>
                                    <ul class="list-group">
                                        <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                            <div class="d-flex flex-column">
                                                <span class="mb-2 text-xs">Tên khách hàng <span
                                                        class="text-dark font-weight-bold ms-2">{{ $orders->user->name }}</span></span>
                                                <span class="mb-2 text-xs">Địa chỉ nhận hàng: <span
                                                        class="text-dark ms-2 font-weight-bold">{{ $orders->address }}</span></span>
                                                <span class="text-xs">Số điện thoại: <span
                                                        class="text-dark ms-2 font-weight-bold">{{ $orders->phone }}</span></span>
                                                <span class="text-xs">Ghi chú: <span
                                                        class="text-dark ms-2 font-weight-bold">{{ $orders->note }}</span></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-12 ms-auto">
                                    <h6 class="mb-3">Tổng cộng</h6>
                                    <div class="d-flex justify-content-between mt-4">
                                        <span class="mb-2 text-lg">
                                            Giao hàng miễn phí
                                        </span>
                                        
                                    </div>
                                    <div class="d-flex justify-content-between mt-4">
                                        <span class="mb-2 text-lg">
                                            Tổng cộng:
                                        </span>
                                        <span class="text-dark text-lg ms-2 font-weight-bold">{{number_format($item->subtotal)}}đ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
