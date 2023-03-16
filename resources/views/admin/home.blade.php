@extends('main')
@section('noidung')
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

            <nav class="navbar navbar-main navbar-expand-lg position-sticky mt-4 top-1 px-0 mx-4 shadow-none border-radius-xl z-index-sticky"
                id="navbarBlur" data-scroll="true">
                <div class="container-fluid py-1 px-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                            <li class="breadcrumb-item text-sm">
                                <a class="opacity-3 text-dark" href="javascript:;">
                                    <svg width="12px" height="12px" class="mb-1" viewBox="0 0 45 40"
                                        version="1.1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <title>shop </title>
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g transform="translate(-1716.000000, -439.000000)" fill="#252f40"
                                                fill-rule="nonzero">
                                                <g transform="translate(1716.000000, 291.000000)">
                                                    <g transform="translate(0.000000, 148.000000)">
                                                        <path
                                                            d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z">
                                                        </path>
                                                        <path
                                                            d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                            </li>
                            
                            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Trang chủ</li>
                        </ol>
                        <h6 class="font-weight-bolder mb-0">Trang chủ</h6>
                    </nav>
                    
                    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                            <div class="input-group input-group-outline">
                                <label class="form-label">Search here</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="container-fluid py-4">
                <div class="row mt-4">
                    <div class="col-xl-7">
                        <div class="card h-100">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="tab-content shadow-dark border-radius-lg" id="v-pills-tabContent">
                                    <div class="tab-pane fade show position-relative active height-400 border-radius-lg"
                                        id="cam1" role="tabpanel" aria-labelledby="cam1"
                                        style="background-image: url('{{url('template/admin')}}/assets/img/bg-smart-home-1.jpg'); background-size:cover;"
                                        loading="lazy">
                                        <div class="position-absolute d-flex top-0 w-100">
                                            <p class="text-white font-weight-normal p-3 mb-0"></p>
                                            <div class="ms-auto p-3">
                                                <span class="badge badge-secondary">
                                                    
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade position-relative height-400 border-radius-lg"
                                        id="cam2" role="tabpanel" aria-labelledby="cam2"
                                        style="background-image: url('{{url('template/admin')}}/assets/img/nastuh.jpg'); background-size:cover;"
                                        loading="lazy">
                                        <div class="position-absolute d-flex top-0 w-100">
                                            <p class="text-white font-weight-normal p-3 mb-0"></p>
                                            <div class="ms-auto p-3">
                                                <span class="badge badge-secondary">
                                                    
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade position-relative height-400 border-radius-lg"
                                        id="cam3" role="tabpanel" aria-labelledby="cam3"
                                        style="background-image: url('{{url('template/admin')}}/assets/img/office-dark.jpg'); background-size:cover;"
                                        loading="lazy">
                                        <div class="position-absolute d-flex top-0 w-100">
                                            <p class="text-white font-weight-normal p-3 mb-0"></p>
                                            <div class="ms-auto p-3">
                                                <span class="badge badge-secondary"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body d-flex p-3 mt-2">
                                <h6 class="my-auto">Cameras</h6>
                                <div class="nav-wrapper position-relative ms-auto w-50">
                                    <ul class="nav nav-pills nav-fill p-1" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#cam1"
                                                role="tab" aria-controls="cam1" aria-selected="true">
                                                Kitchen
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam2"
                                                role="tab" aria-controls="cam2" aria-selected="false">
                                                Living
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam3"
                                                role="tab" aria-controls="cam3" aria-selected="false">
                                                Attic
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="dropdown pt-2">
                                    <a href="javascript:;" class="text-secondary ps-4" id="dropdownCam"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end me-sm-n4 p-2"
                                        aria-labelledby="dropdownCam">
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Pause</a></li>
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Stop</a></li>
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Schedule</a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item border-radius-md text-danger"
                                                href="javascript:;">Remove</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 ms-auto mt-xl-0 mt-5">
                        <div class="card h-100">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-8 my-auto">
                                                <div class="numbers">
                                                    <p
                                                        class="text-white text-sm mb-0 text-capitalize font-weight-bold opacity-7">
                                                        Thời tiết</p>
                                                    <h5 class="text-white font-weight-bolder mb-0">
                                                        HaNoi - 29°C
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="col-4 text-end">
                                                <img class="w-50" src="{{url('template/admin')}}/assets/img/small-logos/icon-sun-cloud.png"
                                                    alt="image sun">
                                                <h5 class="mb-0 text-white text-end me-3">Nắng rải rác</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <div class="chart pt-3">
                                    <canvas id="chart-cons-week" class="chart-canvas" height="320"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-3 col-sm-6 col-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <h1 class="text-gradient text-primary"><span id="status1" countto="21">21</span>
                                    <span class="text-lg ms-n2">°C</span></h1>
                                <h6 class="mb-0 font-weight-bolder">Nhiệt độ</h6>
                                <p class="opacity-8 mb-0 text-sm">Phòng khách</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <h1 class="text-gradient text-primary"> <span id="status2" countto="44">44</span>
                                    <span class="text-lg ms-n1">%</span></h1>
                                <h6 class="mb-0 font-weight-bolder">Độ ẩm</h6>
                                <p class="opacity-8 mb-0 text-sm">Bên ngoài</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6 mt-4 mt-md-0">
                        <div class="card">
                            <div class="card-body text-center">
                                <h1 class="text-gradient text-primary"><span id="status3" countto="87">87</span>
                                    <span class="text-lg ms-n2">m³</span></h1>
                                <h6 class="mb-0 font-weight-bolder">Nước</h6>
                                <p class="opacity-8 mb-0 text-sm">Mức tiêu thụ</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6 mt-4 mt-md-0">
                        <div class="card">
                            <div class="card-body text-center">
                                <h1 class="text-gradient text-primary"><span id="status4" countto="417">417</span>
                                    <span class="text-lg ms-n2">GB</span></h1>
                                <h6 class="mb-0 font-weight-bolder">Internet</h6>
                                <p class="opacity-8 mb-0 text-sm">Tất cả kết nối</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    @endsection
