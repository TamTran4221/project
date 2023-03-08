@extends('layout')
@section('title', 'Danh mục')
@section('layout')
<div class="container lg:w-11/12 w-full lg:mx-auto mx-0 mt-14">
    <!-- content header -->
    <div class="flex justify-between">
        <div class="lg:flex hidden gap-4">
            <div class="text-2xl home uppercase"><a href="">trang chủ</a></div>
            <div class="text-2xl">/</div>
            
            <div class="text-2xl uppercase">
                
            </div>
        </div>
        <div class="lg:mx-0 mx-auto">
            <label class="text-lg lg:inline hidden" for="">Xem tất cả 9 kết quả</label>
            <select class="select">
                <option value="">Thứ tự mặc định</option>
                <option value="">Theo thứ tự phổ biến</option>
                <option value="">Theo đánh giá</option>
                <option value="">Theo sản phẩm mới</option>
                <option value="">Theo giá sản phẩm: từ cao đến thấp</option>
                <option value="">Theo giá sản phẩm: từ thấp đến cao</option>
            </select>
        </div>
    </div>

    <!-- content body -->
    <div class="flex mt-8 gap-2">
        <div class="category lg:block hidden w-3/12">
            <div class="flex">
                <input class="input-category" type="text" placeholder="Search ...">
                <span class="input-category_icon">
                    <i class=" fa-solid fa-magnifying-glass"></i>
                </span>
            </div>
            <div>
                <h3 class="mb-5 mt-5 text-2xl uppercase ">Danh mục sản phẩm</h3>
                <ul>
                    @foreach ($category as $value)
                    <li class="pt-4 pb-4 border-t flex items-center uppercase"><a href="{{route('category',['slug'=> $value->slug])}}">{{$value->name}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div>
                <h3 class="mb-5 mt-5 text-2xl uppercase ">sản phẩm</h3>
                <ul>
                    @foreach ($products as $value)
                    <li class="flex gap-4 items-center mb-3">
                        <a href=""><img class="w-16 h-16" src="{{url('uploads')}}/{{$value->image}}" alt=""></a>
                        <div>
                            <h4 class="text-xl product-title"><a href="">{{$value->name}}</a></h4>
                            <strong>{{number_format($value->price)}}đ</strong>
                        </div>
                    </li>
                    @endforeach
                    
                </ul>
            </div>
        </div>
        <div class="product-sofa-table-tivi">
            <div class="grid lg:grid-cols-3 grid-cols-2 gap-2">
                @foreach ($product as $value)
                <div class="product_item">
                    <a href="{{route('detail',['id'=>$value->id])}}">
                        <div> <img src="{{url('uploads')}}/{{$value->image}}" alt=""></div>
                    </a>
                    <a class="product_link" href="">
                        <i class="absolute -bottom-20 left-8 fa-solid fa-cart-plus lg:text-2xl lg:block hidden"></i>
                    </a>
                    <div class=" lg:mt-20 mt-2   mx-auto text-center">
                        <P class="text-xs opacity-60">{{$value->category->name}}</P>
                        <a class="link_sofa" href="{{route('detail',['id'=>$value->id])}}">
                            <h4>{{$value->name}}</h4>
                        </a>
                        <strong>{{number_format($value->price)}}đ</strong>
                    </div>
                </div>
                @endforeach
                

            </div>
        </div>
    </div>
</div>
@endsection