@extends('admin')
@section('content')
    <aside
        class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark ps ps--active-y bg-white"
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0"
                href=" https://demos.creative-tim.com/material-dashboard-pro/pages/dashboards/analytics.html "
                target="_blank">
                <img src="{{url('template/admin')}}/assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold text-white">Material Dashboard 2 PRO</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse w-auto h-auto ps" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item mb-2 mt-0">
                    <a data-bs-toggle="collapse" href="#ProfileNav" class="nav-link text-white" aria-controls="ProfileNav"
                        role="button" aria-expanded="false">
                        <img src="{{url('template/admin')}}/assets/img/team-3.jpg" class="avatar">
                        <span class="nav-link-text ms-2 ps-1">Brooklyn Alice</span>
                    </a>
                </li>
                <hr class="horizontal light mt-0">
                <li class="nav-item">
                    
                        <ul class="nav ">
                            <li class="nav-item ">
                                <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false"
                                    href="#profileExample">
                                    <span class="sidenav-mini-icon"> C </span>
                                    <span class="sidenav-normal  ms-2  ps-1"> Qu???n l?? danh m???c <b class="caret"></b></span>
                                </a>
                                <div class="collapse " id="profileExample">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link text-white "
                                                href="{{route('category.create')}}">
                                                <span class="sidenav-mini-icon"> A </span>
                                                <span class="sidenav-normal  ms-2  ps-1"> Th??m m???i danh m???c </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white "
                                                href="{{route('category.index')}}">
                                                <span class="sidenav-mini-icon"> L </span>
                                                <span class="sidenav-normal  ms-2  ps-1"> Danh s??ch danh m???c </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false"
                                    href="#usersExample">
                                    <span class="sidenav-mini-icon"> U </span>
                                    <span class="sidenav-normal  ms-2  ps-1"> Ng?????i d??ng <b class="caret"></b></span>
                                </a>
                                <div class="collapse " id="usersExample">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link text-white " href="">
                                                <span class="sidenav-mini-icon"> A </span>
                                                <span class="sidenav-normal  ms-2  ps-1"> Th??m m???i ng?????i d??ng </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white " href="">
                                                <span class="sidenav-mini-icon"> L </span>
                                                <span class="sidenav-normal  ms-2  ps-1"> Danh s??ch ng?????i d??ng </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false"
                                    href="#accountExample">
                                    <span class="sidenav-mini-icon"> P </span>
                                    <span class="sidenav-normal  ms-2  ps-1"> Qu???n l?? d???n ph???m <b class="caret"></b></span>
                                </a>
                                <div class="collapse " id="accountExample">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link text-white "
                                                href="{{ route('product.create') }}">
                                                <span class="sidenav-mini-icon"> A </span>
                                                <span class="sidenav-normal  ms-2  ps-1"> Th??m m???i s???n ph???m </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white " href="{{ route('product.index') }}">
                                                <span class="sidenav-mini-icon"> L </span>
                                                <span class="sidenav-normal  ms-2  ps-1"> Danh s??ch s???n ph???m </span>
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false"
                                    href="#projectsExample">
                                    <span class="sidenav-mini-icon"> B </span>
                                    <span class="sidenav-normal  ms-2  ps-1"> Qu???n l?? ????n h??ng <b class="caret"></b></span>
                                </a>
                                <div class="collapse " id="projectsExample">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link text-white "
                                                href="{{route('cart.index')}}">
                                                <span class="sidenav-mini-icon"> L </span>
                                                <span class="sidenav-normal  ms-2  ps-1"> Danh s??ch ????n h??ng </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white "
                                                href="">
                                                <span class="sidenav-mini-icon"> T </span>
                                                <span class="sidenav-normal  ms-2  ps-1"> Timeline </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            
                            
                        </ul>
                    
                </li>
               
            </ul>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; right: 0px;">
                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
            </div>
        </div>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 905px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 885px;"></div>
        </div>
    </aside>
    @yield('noidung')
@endsection
