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
                            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark"
                                    href="javascript:;">Pages</a></li>
                            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Smart Home</li>
                        </ol>
                        <h6 class="font-weight-bolder mb-0">Smart Home</h6>
                    </nav>
                    <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none ">
                        <a href="javascript:;" class="nav-link text-body p-0">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </div>
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
                                            <p class="text-white font-weight-normal p-3 mb-0">17.05.2021 4:34PM</p>
                                            <div class="ms-auto p-3">
                                                <span class="badge badge-secondary">
                                                    <i class="fas fa-dot-circle text-danger"></i>
                                                    Recording</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade position-relative height-400 border-radius-lg"
                                        id="cam2" role="tabpanel" aria-labelledby="cam2"
                                        style="background-image: url('{{url('template/admin')}}/assets/img/nastuh.jpg'); background-size:cover;"
                                        loading="lazy">
                                        <div class="position-absolute d-flex top-0 w-100">
                                            <p class="text-white font-weight-normal p-3 mb-0">17.05.2021 4:35PM</p>
                                            <div class="ms-auto p-3">
                                                <span class="badge badge-secondary">
                                                    <i class="fas fa-dot-circle text-danger"></i>
                                                    Recording</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade position-relative height-400 border-radius-lg"
                                        id="cam3" role="tabpanel" aria-labelledby="cam3"
                                        style="background-image: url('{{url('template/admin')}}/assets/img/office-dark.jpg'); background-size:cover;"
                                        loading="lazy">
                                        <div class="position-absolute d-flex top-0 w-100">
                                            <p class="text-white font-weight-normal p-3 mb-0">17.05.2021 4:57PM</p>
                                            <div class="ms-auto p-3">
                                                <span class="badge badge-secondary">
                                                    <i class="fas fa-dot-circle text-danger"></i>
                                                    Recording</span>
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
                                                        Wheather today</p>
                                                    <h5 class="text-white font-weight-bolder mb-0">
                                                        San Francisco - 29°C
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="col-4 text-end">
                                                <img class="w-50" src="{{url('template/admin')}}/assets/img/small-logos/icon-sun-cloud.png"
                                                    alt="image sun">
                                                <h5 class="mb-0 text-white text-end me-3">Sunny</h5>
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
                                <h6 class="mb-0 font-weight-bolder">Living Room</h6>
                                <p class="opacity-8 mb-0 text-sm">Temperature</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <h1 class="text-gradient text-primary"> <span id="status2" countto="44">44</span>
                                    <span class="text-lg ms-n1">%</span></h1>
                                <h6 class="mb-0 font-weight-bolder">Outside</h6>
                                <p class="opacity-8 mb-0 text-sm">Humidity</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6 mt-4 mt-md-0">
                        <div class="card">
                            <div class="card-body text-center">
                                <h1 class="text-gradient text-primary"><span id="status3" countto="87">87</span>
                                    <span class="text-lg ms-n2">m³</span></h1>
                                <h6 class="mb-0 font-weight-bolder">Water</h6>
                                <p class="opacity-8 mb-0 text-sm">Consumption</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6 mt-4 mt-md-0">
                        <div class="card">
                            <div class="card-body text-center">
                                <h1 class="text-gradient text-primary"><span id="status4" countto="417">417</span>
                                    <span class="text-lg ms-n2">GB</span></h1>
                                <h6 class="mb-0 font-weight-bolder">Internet</h6>
                                <p class="opacity-8 mb-0 text-sm">All devices</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-6">
                        <div class="card h-100">
                            <div class="card-header pb-0 p-3">
                                <h6 class="text-start">Device limit</h6>
                            </div>
                            <div class="card-body p-3 py-1">
                                <div class="row">
                                    <div class="col-5 text-center">
                                        <round-slider value="21" valueLabel="Temperature"></round-slider>
                                        <h4 class="font-weight-bold mt-md-n7 mt-n6"><span class="text-dark"
                                                id="value">21</span><span class="text-body">°C</span></h4>
                                        <p class="ps-1 mt-md-5 mt-4 mb-0"><span class="text-xs">16°C</span><span
                                                class="px-3">Temperature</span><span class="text-xs">38°C</span></p>
                                    </div>
                                    <div class="col-7 my-auto">
                                        <div class="table-responsive">
                                            <table class="table align-items-center mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex px-2 py-0">
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <h6 class="mb-0 text-sm">Current Temperature</h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle text-center text-sm">
                                                            <span class="text-xs"> 21°C </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex px-2 py-0">
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <h6 class="mb-0 text-sm">Humidity</h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle text-center text-sm">
                                                            <span class="text-xs"> 57% </span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="card">
                            <div class="card-header pb-0 p-3">
                                <div class="d-flex align-items-center">
                                    <h6 class="mb-0">Consumption by room</h6>
                                    <button type="button"
                                        class="btn btn-icon-only btn-rounded btn-outline-secondary mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center ms-auto"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="See the consumption per room">
                                        <i class="fas fa-info"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-5 text-center">
                                        <div class="chart">
                                            <canvas id="chart-consumption" class="chart-canvas"
                                                height="197"></canvas>
                                        </div>
                                        <h4 class="font-weight-bold mt-n8">
                                            <span>471.3</span>
                                            <span class="d-block text-body text-sm">WATTS</span>
                                        </h4>
                                    </div>
                                    <div class="col-7">
                                        <div class="table-responsive">
                                            <table class="table align-items-center mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex px-2 py-0">
                                                                <span class="badge bg-gradient-primary me-3"> </span>
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <h6 class="mb-0 text-sm">Living Room</h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle text-center text-sm">
                                                            <span class="text-xs"> 15% </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex px-2 py-0">
                                                                <span class="badge bg-gradient-secondary me-3"> </span>
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <h6 class="mb-0 text-sm">Kitchen</h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle text-center text-sm">
                                                            <span class="text-xs"> 20% </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex px-2 py-0">
                                                                <span class="badge bg-gradient-info me-3"> </span>
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <h6 class="mb-0 text-sm">Attic</h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle text-center text-sm">
                                                            <span class="text-xs"> 13% </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex px-2 py-0">
                                                                <span class="badge bg-gradient-success me-3"> </span>
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <h6 class="mb-0 text-sm">Garage</h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle text-center text-sm">
                                                            <span class="text-xs"> 32% </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex px-2 py-0">
                                                                <span class="badge bg-gradient-warning me-3"> </span>
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <h6 class="mb-0 text-sm">Basement</h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle text-center text-sm">
                                                            <span class="text-xs"> 20% </span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="horizontal dark my-5">
                <div class="row">
                    <div class="col-lg-2 col-sm-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="d-flex mb-4">
                                    <p class="mb-0">Off</p>
                                    <div class="form-check form-switch ms-auto">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckHumidity">
                                    </div>
                                </div>
                                <svg width="60" viewBox="0 0 296 179" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter1_f)">
                                        <path
                                            d="M165.907 34.625C165.907 34.625 156.143 47.861 148.512 47.425C138.946 46.863 137.312 35.325 128.444 34.625C119.166 34.764 118.219 46.725 108.163 47.425C99.1529 47.264 95.3359 34.843 86.7469 34.625C78.1579 34.407 69.0029 47.425 69.0029 47.425"
                                            stroke="#CED4DA" stroke-width="16" stroke-linecap="round" />
                                        <path
                                            d="M154.919 102.625C154.919 102.625 140.219 115.861 128.726 115.425C114.326 114.863 111.855 103.325 98.508 102.625C84.538 102.764 83.108 114.725 67.969 115.425C54.403 115.262 48.655 102.842 35.719 102.625C22.783 102.408 9 115.425 9 115.425"
                                            stroke="#CED4DA" stroke-width="16" stroke-linecap="round" />
                                        <path
                                            d="M238.919 156.625C238.919 156.625 224.219 169.861 212.726 169.425C198.326 168.863 195.855 157.325 182.508 156.625C168.538 156.764 167.108 168.725 151.969 169.425C138.403 169.262 132.655 156.842 119.719 156.625C106.783 156.408 93 169.425 93 169.425"
                                            stroke="#CED4DA" stroke-width="16" stroke-linecap="round" />
                                        <path
                                            d="M264.076 1.00001C261.378 1.03054 234 43.7744 234 60.3879C234 68.3648 237.169 76.015 242.809 81.6555C248.45 87.296 256.1 90.4648 264.077 90.4648C272.054 90.4648 279.704 87.296 285.344 81.6555C290.985 76.015 294.154 68.3648 294.154 60.3879C294.154 43.7744 266.775 0.970878 264.076 1.00001Z"
                                            fill="#CED4DA" />
                                        <path
                                            d="M282.441 49.6635C279.436 50.5823 278.383 55.8514 280.089 61.4324C281.796 67.0134 285.615 70.7928 288.62 69.874C291.625 68.9553 292.678 63.6862 290.972 58.1052C289.266 52.5242 285.446 48.7448 282.441 49.6635Z"
                                            fill="white" />
                                        <path
                                            d="M207.411 61C205.49 61.0222 186 91.4522 186 103.278C186 108.956 188.256 114.402 192.271 118.418C196.287 122.433 201.733 124.689 207.411 124.689C213.09 124.689 218.536 122.433 222.552 118.418C226.567 114.402 228.823 108.956 228.823 103.278C228.823 91.4522 209.332 60.9792 207.411 61Z"
                                            fill="#CED4DA" />
                                        <path
                                            d="M219.337 96.8934C217.197 97.5476 216.447 101.299 217.662 105.272C218.877 109.245 221.596 111.936 223.736 111.282C225.876 110.627 226.626 106.876 225.411 102.903C224.196 98.9298 221.477 96.2392 219.337 96.8934Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <filter id="filter1_f" x="0" y="0" width="295.154"
                                            height="178.435" filterUnits="userSpaceOnUse"
                                            color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix"
                                                result="shape" />
                                            <feGaussianBlur stdDeviation="0.5" result="effect1_foregroundBlur" />
                                        </filter>
                                    </defs>
                                </svg>
                                <p class="mt-4 mb-0 font-weight-bold">Humidity</p>
                                <span class="text-xs">Inactive since: 2 days</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 mt-md-0 mt-4">
                        <div class="card bg-gradient-primary h-100">
                            <div class="card-body">
                                <div class="d-flex mb-3">
                                    <p class="mb-0 text-white">On</p>
                                    <div class="form-check form-switch ms-auto">
                                        <input class="form-check-input" checked type="checkbox"
                                            id="flexSwitchCheckTemperature">
                                    </div>
                                </div>
                                <svg width="40" viewBox="0 0 217 342" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter3_f)">
                                        <path
                                            d="M67 178.583C93.5097 178.583 115 157.092 115 130.583C115 104.073 93.5097 82.5825 67 82.5825C40.4903 82.5825 19 104.073 19 130.583C19 157.092 40.4903 178.583 67 178.583Z"
                                            fill="white" />
                                        <path
                                            d="M67 188.583C99.0325 188.583 125 162.615 125 130.583C125 98.55 99.0325 72.5825 67 72.5825C34.9675 72.5825 9 98.55 9 130.583C9 162.615 34.9675 188.583 67 188.583Z"
                                            stroke="white" stroke-width="10" stroke-linecap="round"
                                            stroke-dasharray="1 66" />
                                        <g filter="url(#filter3_f)">
                                            <path
                                                d="M61.6224 120.764C78.6362 111.727 88.2605 96.5543 83.1189 86.8741C77.9773 77.1939 60.0169 76.6723 43.0031 85.7091C25.9894 94.7458 16.3651 109.919 21.5067 119.599C26.6482 129.279 44.6087 129.801 61.6224 120.764Z"
                                                fill="white" />
                                        </g>
                                    </g>
                                    <g filter="url(#filter2_d)">
                                        <path
                                            d="M83.768 199.054L83.768 63.0005C83.768 53.7179 87.4555 44.8155 94.0192 38.2518C100.583 31.688 109.485 28.0005 118.768 28.0005C128.051 28.0005 136.953 31.688 143.517 38.2518C150.08 44.8155 153.768 53.7179 153.768 63.0005L153.768 201.97C162.845 209.089 169.677 218.673 173.448 229.574C177.219 240.475 177.768 252.232 175.03 263.438C172.291 274.643 166.382 284.822 158.008 292.755C149.634 300.689 139.152 306.041 127.815 308.17C123.7 309.262 119.422 309.601 115.187 309.17C102.415 308.838 90.0831 304.437 79.9858 296.609C69.8886 288.781 62.5533 277.935 59.0477 265.649C55.5422 253.364 56.0495 240.28 60.4957 228.302C64.9419 216.325 73.095 206.079 83.768 199.056V199.054Z"
                                            fill="url(#paint0_linear)" />
                                        <path
                                            d="M57.7443 249.189C57.7443 257.029 59.257 264.644 62.2406 271.821C65.1226 278.754 69.2556 285.005 74.5247 290.402C77.1201 293.061 79.9789 295.485 83.0218 297.609C86.0911 299.75 89.3762 301.605 92.7861 303.122C99.8678 306.273 107.414 307.971 115.213 308.169L115.251 308.17L115.289 308.174C116.437 308.291 117.607 308.35 118.769 308.35C121.749 308.35 124.707 307.964 127.558 307.203L127.595 307.193L127.632 307.186C134.372 305.929 140.788 303.521 146.701 300.029C152.492 296.61 157.625 292.258 161.958 287.096C166.323 281.896 169.728 276.046 172.078 269.71C174.511 263.153 175.745 256.248 175.745 249.189C175.745 244.564 175.208 239.958 174.149 235.501C173.12 231.169 171.592 226.949 169.607 222.957C167.658 219.036 165.262 215.323 162.485 211.919C159.725 208.536 156.585 205.453 153.151 202.757L152.769 202.457V201.97L152.769 63.0001C152.769 58.4096 151.87 53.957 150.097 49.766C148.385 45.7174 145.933 42.0811 142.81 38.9583C139.688 35.8355 136.051 33.3839 132.003 31.6715C127.812 29.8988 123.359 29 118.769 29C114.178 29 109.726 29.8988 105.535 31.6715C101.486 33.3839 97.8497 35.8355 94.7269 38.9583C91.6041 42.0811 89.1524 45.7174 87.44 49.766C85.6674 53.957 84.7686 58.4096 84.7686 63.0001L84.7686 199.055V199.593L84.3189 199.89C76.3153 205.164 69.6443 212.384 65.0268 220.769C62.6796 225.031 60.8688 229.575 59.6449 234.275C58.3838 239.117 57.7443 244.135 57.7443 249.189ZM56.7443 249.189C56.7443 228.231 67.4872 209.785 83.7686 199.055L83.7686 63.0001C83.7686 43.6699 99.4385 28 118.769 28C138.099 28 153.769 43.6699 153.769 63.0001L153.769 201.97C167.757 212.955 176.745 230.023 176.745 249.189C176.745 278.544 155.665 302.975 127.816 308.169C124.93 308.94 121.898 309.35 118.769 309.35C117.559 309.35 116.366 309.289 115.188 309.169C82.7694 308.344 56.7443 281.806 56.7443 249.189Z"
                                            fill="white" fill-opacity="0.5" />
                                    </g>
                                    <path
                                        d="M72.6179 250.554C72.616 242.091 74.9489 233.792 79.3597 226.569C83.7705 219.347 90.0883 213.481 97.6179 209.617V85.5544H139.618V209.616C146.888 213.347 153.032 218.946 157.421 225.838C161.809 232.73 164.282 240.667 164.586 248.832C164.89 256.998 163.014 265.096 159.15 272.296C155.286 279.495 149.574 285.536 142.602 289.796C135.63 294.056 127.648 296.382 119.479 296.535C111.31 296.688 103.247 294.662 96.1202 290.666C88.9933 286.67 83.0595 280.848 78.9288 273.798C74.7982 266.748 72.6199 258.725 72.6179 250.554Z"
                                        fill="white" />
                                    <defs>
                                        <filter id="filter30_f" x="2" y="65.5825" width="130"
                                            height="130" filterUnits="userSpaceOnUse"
                                            color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix"
                                                result="shape" />
                                            <feGaussianBlur stdDeviation="1" result="effect1_foregroundBlur" />
                                        </filter>
                                        <filter id="filter30_f" x="0.122314" y="59.2585" width="104.381"
                                            height="87.9562" filterUnits="userSpaceOnUse"
                                            color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix"
                                                result="shape" />
                                            <feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur" />
                                        </filter>
                                        <filter id="filter2_d" x="36.7441" y="0" width="180.001"
                                            height="341.351" filterUnits="userSpaceOnUse"
                                            color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                            <feOffset dx="10" dy="2" />
                                            <feGaussianBlur stdDeviation="15" />
                                            <feColorMatrix type="matrix"
                                                values="0 0 0 0 0.501961 0 0 0 0 0.501961 0 0 0 0 0.501961 0 0 0 0.302 0" />
                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                result="effect1_dropShadow" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow"
                                                result="shape" />
                                        </filter>
                                        <linearGradient id="paint0_linear" x1="161.625" y1="141.948"
                                            x2="43.5768" y2="169.912" gradientUnits="userSpaceOnUse">
                                            <stop offset="1" stop-color="white" stop-opacity="0.596" />
                                            <stop offset="1" stop-color="#F7F7F7" stop-opacity="0.204" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <p class="mt-2 mb-0 font-weight-bold text-white">Temperature</p>
                                <span class="text-xs text-white">Active</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 mt-lg-0 mt-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="d-flex mb-4">
                                    <p class="mb-0">Off</p>
                                    <div class="form-check form-switch ms-auto">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckAc">
                                    </div>
                                </div>
                                <svg width="70" viewBox="0 0 306 180" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_f)">
                                        <path
                                            d="M165.907 35.625C165.907 35.625 156.143 48.861 148.512 48.425C138.946 47.863 137.312 36.325 128.444 35.625C119.166 35.764 118.219 47.725 108.163 48.425C99.1529 48.264 95.3359 35.843 86.7469 35.625C78.1579 35.407 69.0029 48.425 69.0029 48.425"
                                            stroke="#CED4DA" stroke-width="16" stroke-linecap="round" />
                                        <path
                                            d="M154.919 103.625C154.919 103.625 140.219 116.861 128.726 116.425C114.326 115.863 111.855 104.325 98.508 103.625C84.538 103.764 83.108 115.725 67.969 116.425C54.403 116.262 48.655 103.842 35.719 103.625C22.783 103.408 9 116.425 9 116.425"
                                            stroke="#CED4DA" stroke-width="16" stroke-linecap="round" />
                                        <path
                                            d="M238.919 157.625C238.919 157.625 224.219 170.861 212.726 170.425C198.326 169.863 195.855 158.325 182.508 157.625C168.538 157.764 167.108 169.725 151.969 170.425C138.403 170.262 132.655 157.842 119.719 157.625C106.783 157.408 93 170.425 93 170.425"
                                            stroke="#CED4DA" stroke-width="16" stroke-linecap="round" />
                                        <path d="M220.25 19.4441L257.266 111.061" stroke="#CED4DA" stroke-width="10"
                                            stroke-linecap="round" />
                                        <path d="M229.482 41.7656L207.122 31.8528" stroke="#CED4DA" stroke-width="10"
                                            stroke-linecap="round" />
                                        <path d="M229.482 41.7655L239.189 18.897" stroke="#CED4DA" stroke-width="10"
                                            stroke-linecap="round" />
                                        <path d="M249.223 90.6272L240.025 113.29" stroke="#CED4DA" stroke-width="10"
                                            stroke-linecap="round" />
                                        <path d="M249.223 90.6271L272.091 100.334" stroke="#CED4DA" stroke-width="10"
                                            stroke-linecap="round" />
                                        <path d="M190.205 58.6675L288.055 72.4195" stroke="#CED4DA" stroke-width="10"
                                            stroke-linecap="round" />
                                        <path d="M214.151 61.834L194.387 76.2415" stroke="#CED4DA" stroke-width="10"
                                            stroke-linecap="round" />
                                        <path d="M214.151 61.834L199.2 41.9931" stroke="#CED4DA" stroke-width="10"
                                            stroke-linecap="round" />
                                        <path d="M266.338 69.1682L281.365 88.4654" stroke="#CED4DA" stroke-width="10"
                                            stroke-linecap="round" />
                                        <path d="M266.338 69.1682L286.179 54.217" stroke="#CED4DA" stroke-width="10"
                                            stroke-linecap="round" />
                                        <path d="M209.151 104.299L269.986 26.4342" stroke="#CED4DA" stroke-width="10"
                                            stroke-linecap="round" />
                                        <path d="M223.866 85.1443L226.461 109.465" stroke="#CED4DA" stroke-width="10"
                                            stroke-linecap="round" />
                                        <path d="M223.866 85.1442L199.208 88.1718" stroke="#CED4DA" stroke-width="10"
                                            stroke-linecap="round" />
                                        <path d="M256.311 43.6169L280.536 40.2513" stroke="#CED4DA" stroke-width="10"
                                            stroke-linecap="round" />
                                        <path d="M256.311 43.6168L253.283 18.9585" stroke="#CED4DA" stroke-width="10"
                                            stroke-linecap="round" />
                                        <circle cx="239.321" cy="66.5" r="8.5" fill="white" />
                                    </g>
                                    <defs>
                                        <filter id="filter0_f" x="0" y="10.9402" width="294.703"
                                            height="168.495" filterUnits="userSpaceOnUse"
                                            color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix"
                                                result="shape" />
                                            <feGaussianBlur stdDeviation="0.5" result="effect1_foregroundBlur" />
                                        </filter>
                                    </defs>
                                </svg>
                                <p class="mt-4 mb-0 font-weight-bold">Air Conditioner</p>
                                <span class="text-xs">Inactive since: 1 hour</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 mt-lg-0 mt-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="d-flex mb-4">
                                    <p class="mb-0">Off</p>
                                    <div class="form-check form-switch ms-auto">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckLights">
                                    </div>
                                </div>
                                <svg width="72" viewBox="0 0 301 157" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_f)">
                                        <mask mask-type="alpha" maskUnits="userSpaceOnUse" x="0"
                                            y="0" width="301" height="156">
                                            <rect width="301" height="156" fill="#C4C4C4" />
                                        </mask>
                                        <g mask="url(#mask0)">
                                            <path
                                                d="M150 250.825C209.094 250.825 257 202.92 257 143.825C257 84.7307 209.094 36.8252 150 36.8252C90.9055 36.8252 43 84.7307 43 143.825C43 202.92 90.9055 250.825 150 250.825Z"
                                                fill="#CED4DA" />
                                            <path
                                                d="M150 277.825C224.006 277.825 284 217.831 284 143.825C284 69.819 224.006 9.8252 150 9.8252C75.9938 9.8252 16 69.819 16 143.825C16 217.831 75.9938 277.825 150 277.825Z"
                                                stroke="#CED4DA" stroke-width="10" stroke-linecap="round"
                                                stroke-dasharray="1 66" />
                                            <g filter="url(#filter1_f)">
                                                <path
                                                    d="M135.743 126.588C166.447 110.28 183.244 81.824 173.262 63.0298C163.28 44.2355 130.297 42.22 99.5936 58.528C68.8901 74.8359 52.0924 103.292 62.0748 122.086C72.0573 140.88 105.04 142.896 135.743 126.588Z"
                                                    fill="white" />
                                            </g>
                                            <path d="M182 143.435H122V156.435H182V143.435Z" fill="white" />
                                            <path d="M6.5 151.935H124.063L151.927 133.325L180.5 151.935H294.5"
                                                stroke="#CED4DA" stroke-width="10" stroke-linecap="round" />
                                        </g>
                                    </g>
                                    <defs>
                                        <filter id="filter0_f" x="0.5" y="3.8252" width="300"
                                            height="153.175" filterUnits="userSpaceOnUse"
                                            color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix"
                                                result="shape" />
                                            <feGaussianBlur stdDeviation="0.5" result="effect1_foregroundBlur" />
                                        </filter>
                                        <filter id="filter1_f" x="24" y="9" width="187.337"
                                            height="167.116" filterUnits="userSpaceOnUse"
                                            color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix"
                                                result="shape" />
                                            <feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur" />
                                        </filter>
                                    </defs>
                                </svg>
                                <p class="mt-4 font-weight-bold mb-0">Lights</p>
                                <span class="text-xs">Inactive since: 27 min</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 mt-lg-0 mt-4">
                        <div class="card bg-gradient-primary h-100">
                            <div class="card-body">
                                <div class="d-flex mb-4">
                                    <p class="mb-0 text-white">On</p>
                                    <div class="form-check form-switch ms-auto">
                                        <input class="form-check-input" type="checkbox" id="flexwifiCheckDefault"
                                            checked>
                                    </div>
                                </div>
                                <svg width="45px" viewBox="0 0 41 31" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <title>wifi</title>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                        fill-rule="evenodd">
                                        <g id="wifi" transform="translate(3.000000, 3.000000)">
                                            <path
                                                d="M7.37102658,14.6156105 C12.9664408,9.02476091 22.0335592,9.02476091 27.6289734,14.6156105"
                                                stroke="#FFFFFF" stroke-width="5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <circle id="Oval" fill="#FFFFFF" cx="17.5039082" cy="22.7484921"
                                                r="4.9082855"></circle>
                                            <path
                                                d="M0,7.24718945 C9.66583791,-2.41572982 25.3341621,-2.41572982 35,7.24718945"
                                                stroke="#FFFFFF" stroke-width="5" opacity="0.398982558"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </g>
                                    </g>
                                </svg>
                                <p class="font-weight-bold mt-4 mb-0 text-white">Wi-fi</p>
                                <span class="text-xs text-white">Active</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 mt-lg-0 mt-4">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column justify-content-center text-center">
                                <a href="javascript:;">
                                    <i class="fa fa-plus text-secondary mb-3" aria-hidden="true"></i>
                                    <h5 class="text-secondary"> New device </h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer py-4  ">
                    <div class="container-fluid">
                        <div class="row align-items-center justify-content-lg-between">
                            <div class="col-lg-6 mb-lg-0 mb-4">
                                <div class="copyright text-center text-sm text-muted text-lg-start">
                                    ©
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script>,
                                    made with <i class="fa fa-heart"></i> by
                                    <a href="https://www.creative-tim.com" class="font-weight-bold"
                                        target="_blank">Creative Tim</a>
                                    for a better web.
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                                    <li class="nav-item">
                                        <a href="https://www.creative-tim.com" class="nav-link text-muted"
                                            target="_blank">Creative Tim</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted"
                                            target="_blank">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://www.creative-tim.com/blog" class="nav-link text-muted"
                                            target="_blank">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted"
                                            target="_blank">License</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </main>
        <div class="fixed-plugin">
            <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
                <i class="material-icons py-2">settings</i>
            </a>
            <div class="card shadow-lg">
                <div class="card-header pb-0 pt-3">
                    <div class="float-start">
                        <h5 class="mt-3 mb-0">Material UI Configurator</h5>
                        <p>See our dashboard options.</p>
                    </div>
                    <div class="float-end mt-4">
                        <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                            <i class="material-icons">clear</i>
                        </button>
                    </div>

                </div>
                <hr class="horizontal dark my-1">
                <div class="card-body pt-sm-3 pt-0">

                    <div>
                        <h6 class="mb-0">Sidebar Colors</h6>
                    </div>
                    <a href="javascript:void(0)" class="switch-trigger background-color">
                        <div class="badge-colors my-2 text-start">
                            <span class="badge filter bg-gradient-primary active" data-color="primary"
                                onclick="sidebarColor(this)"></span>
                            <span class="badge filter bg-gradient-dark" data-color="dark"
                                onclick="sidebarColor(this)"></span>
                            <span class="badge filter bg-gradient-info" data-color="info"
                                onclick="sidebarColor(this)"></span>
                            <span class="badge filter bg-gradient-success" data-color="success"
                                onclick="sidebarColor(this)"></span>
                            <span class="badge filter bg-gradient-warning" data-color="warning"
                                onclick="sidebarColor(this)"></span>
                            <span class="badge filter bg-gradient-danger" data-color="danger"
                                onclick="sidebarColor(this)"></span>
                        </div>
                    </a>

                    <div class="mt-3">
                        <h6 class="mb-0">Sidenav Type</h6>
                        <p class="text-sm">Choose between 2 different sidenav types.</p>
                    </div>
                    <div class="d-flex">
                        <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark"
                            onclick="sidebarType(this)">Dark</button>
                        <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent"
                            onclick="sidebarType(this)">Transparent</button>
                        <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white"
                            onclick="sidebarType(this)">White</button>
                    </div>
                    <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>

                    <div class="mt-3 d-flex">
                        <h6 class="mb-0">Navbar Fixed</h6>
                        <div class="form-check form-switch ps-0 ms-auto my-auto">
                            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed"
                                onclick="navbarFixed(this)">
                        </div>
                    </div>
                    <hr class="horizontal dark my-3">
                    <div class="mt-2 d-flex">
                        <h6 class="mb-0">Sidenav Mini</h6>
                        <div class="form-check form-switch ps-0 ms-auto my-auto">
                            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarMinimize"
                                onclick="navbarMinimize(this)">
                        </div>
                    </div>
                    <hr class="horizontal dark my-3">
                    <div class="mt-2 d-flex">
                        <h6 class="mb-0">Light / Dark</h6>
                        <div class="form-check form-switch ps-0 ms-auto my-auto">
                            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version"
                                onclick="darkMode(this)">
                        </div>
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
    @endsection
