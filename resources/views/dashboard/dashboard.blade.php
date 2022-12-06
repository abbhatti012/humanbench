@extends('layout.master')

@push('plugin-styles')
    {!! Html::style('assets/css/loader.css') !!}
    {!! Html::style('plugins/apex/apexcharts.css') !!}
    {!! Html::style('assets/css/dashboard/dashboard_1.css') !!}
    {!! Html::style('plugins/flatpickr/flatpickr.css') !!}
    {!! Html::style('plugins/flatpickr/custom-flatpickr.css') !!}
    {!! Html::style('assets/css/elements/tooltip.css') !!}

    <meta name="theme-color" content="#6777ef"/>
    <link rel="apple-touch-icon" href="{{ asset('b.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">

    <style>
        .img-thumbnail{
            width: 134px;
            height: 134px;
        }
    </style>
@endpush

@section('content')
    <!--  Navbar Starts / Breadcrumb Area  -->
    <div class="sub-header-container">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom">
                <i class="las la-bars"></i>
            </a>
            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href=""> {{__('Dashboard')}}</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span> {{__('Dashboard')}}</span></li>
                            </ol>
                        </nav>
                    </div>
                </li>
            </ul>

            <ul class="navbar-nav d-flex align-center ml-auto right-side-filter">
                <li class="nav-item more-dropdown">
                    <div class="input-group input-group-sm">
                        <input id="rangeCalendarFlatpickr" class="form-control flatpickr flatpickr-input active" type="text" placeholder="{{__('Select Date')}}">
                        <div class="input-group-append">
                            <span class="input-group-text bg-primary border-primary" id="basic-addon2">
                                <i class="lar la-calendar"></i>
                            </span>
                        </div>
                    </div>
                </li>
                <li class="nav-item more-dropdown">
                    <a href="javascript: void(0);" data-original-title="{{__('Reload Data')}}"data-placement="bottom" class="btn btn-primary dash-btn btn-sm ml-2 bs-tooltip">
                        <i class="las la-sync"></i>
                    </a>
                </li>
                <li class="nav-item custom-dropdown-icon">
                    <a href="javascript: void(0);" data-original-title="{{__('Filter')}}" data-placement="bottom" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-primary dash-btn btn-sm ml-2 bs-tooltip">
                        <i class="las la-filter"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                        <a class="dropdown-item" href="javascript:void(0);">2022</a>
                        <a class="dropdown-item" href="javascript:void(0);">2023</a>
                        <a class="dropdown-item" href="javascript:void(0);">2024</a>
                        <a class="dropdown-item" href="javascript:void(0);">2025</a>
                        <a class="dropdown-item" href="javascript:void(0);">2026</a>
                        <a class="dropdown-item" href="javascript:void(0);">2027</a>
                        <a class="dropdown-item" href="javascript:void(0);">2028</a>
                        <a class="dropdown-item" href="javascript:void(0);">2029</a>
                        <a class="dropdown-item" href="javascript:void(0);">2030</a>
                    </div>
                </li>
            </ul>
        </header>
    </div>
    <!--  Navbar Ends / Breadcrumb Area  -->
    <!-- Main Body Starts -->
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <a class="widget quick-category">
                    <div class="quick-category-head">
                        <span class="quick-category-icon qc-primary rounded-circle">
                            <i class="las la-play"></i>
                        </span>
                    </div>
                    <div class="quick-category-content">
                        <h3>100 ms</h3>
                        <p class="font-17 text-primary mb-0"> {{ __('Reaction Time') }}</p>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <a class="widget quick-category">
                    <div class="quick-category-head">
                        <span class="quick-category-icon qcompare-danger rounded-circle">
                            <i class="las la-play"></i>
                        </span>
                    </div>
                    <div class="quick-category-content">
                        <h3>0 ms</h3>
                        <p class="font-17 text-danger mb-0"> {{ __('Visual Memory') }}</p>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <a class="widget quick-category">
                    <div class="quick-category-head">
                        <span class="quick-category-icon qc-warning rounded-circle">
                            <i class="las la-play"></i>
                        </span>
                    </div>
                    <div class="quick-category-content">
                        <h3>0 ms</h3>
                        <p class="font-17 text-warning mb-0"> {{ __('Number Memory') }}</p>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <a class="widget quick-category">
                    <div class="quick-category-head">
                        <span class="quick-category-icon qcompare-success rounded-circle">
                            <i class="las la-play"></i>
                        </span>
                    </div>
                    <div class="quick-category-content">
                        <h3>0 ms</h3>
                        <p class="font-17 text-success mb-0"> {{ __('Verbal Memory') }}</p>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <a class="widget quick-category">
                    <div class="quick-category-head">
                        <span class="quick-category-icon qc-primary rounded-circle">
                            <i class="las la-play"></i>
                        </span>
                    </div>
                    <div class="quick-category-content">
                        <h3>0 ms</h3>
                        <p class="font-17 text-primary mb-0"> {{ __('Typing') }}</p>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <a class="widget quick-category">
                    <div class="quick-category-head">
                        <span class="quick-category-icon qcompare-danger rounded-circle">
                            <i class="las la-play"></i>
                        </span>
                    </div>
                    <div class="quick-category-content">
                        <h3>0 ms</h3>
                        <p class="font-17 text-danger mb-0"> {{ __('Aim Trainer') }}</p>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <a class="widget quick-category">
                    <div class="quick-category-head">
                        <span class="quick-category-icon qc-warning rounded-circle">
                            <i class="las la-play"></i>
                        </span>
                    </div>
                    <div class="quick-category-content">
                        <h3>0 ms</h3>
                        <p class="font-17 text-warning mb-0"> {{ __('Chimp Test') }}</p>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <a class="widget quick-category">
                    <div class="quick-category-head">
                        <span class="quick-category-icon qcompare-success rounded-circle">
                            <i class="las la-play"></i>
                        </span>
                    </div>
                    <div class="quick-category-content">
                        <h3>0 ms</h3>
                        <p class="font-17 text-success mb-0"> {{ __('Sequence Memory') }}</p>
                    </div>
                </a>
            </div>
            
            <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-chart-one">
                    <div class="widget-heading">
                        <h5 class=""> {{ __('Average Reports') }}</h5>
                        <ul class="tabs tab-pills">
                            <li>
                                <div class="dropdown  custom-dropdown-icon">
                                    <a class="dropdown-toggle" href="#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span> {{ __('Filter By Test') }}</span> <i class="las la-angle-down"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                                        <a class="dropdown-item" href="javascript:void(0);"> {{ __('Reaction Time') }}</a>
                                        <a class="dropdown-item" href="javascript:void(0);"> {{ __('Visual Memory') }}</a>
                                        <a class="dropdown-item" href="javascript:void(0);"> {{ __('Number Memory') }}</a>
                                        <a class="dropdown-item" href="javascript:void(0);"> {{ __('Verbal Memory') }}</a>
                                        <a class="dropdown-item" href="javascript:void(0);"> {{ __('Typing') }}</a>
                                        <a class="dropdown-item" href="javascript:void(0);"> {{ __('Aim Trainer') }}</a>
                                        <a class="dropdown-item" href="javascript:void(0);"> {{ __('Chimp Test') }}</a>
                                        <a class="dropdown-item" href="javascript:void(0);"> {{ __('Sequence Memory') }}</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="widget-content">
                        <div class="tabs tab-content">
                            <div id="content_1" class="tabcontent">
                                <div id="transactionsMonthly"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-chart-one">
                    <div class="d-flex justify-content-end mb-4">
                    </div>
                    <div class="text-center mb-4">
                        @if($user)
                            @if($user->avatar)
                                <img src="{{ asset($user->avatar) }}" alt="{{ $user->name }}" class="img-thumbnail rounded-circle mb-3">
                            @else
                                <img src="{{ asset('assets/img/profile-21.jpg') }}" alt="{{ $user->name }}" class="img-thumbnail rounded-circle mb-3">
                            @endif
                            <h5 class="mb-0 stronger">{{ $user->name }}</h5>
                            <a class="text-primary" href="{{ route('profile') }}">@<?php echo str_replace(" ","_",$user->name); ?></a>
                        @else
                            <img src="{{ asset('assets/img/profile-21.jpg') }}" alt="Avatar" class="img-thumbnail rounded-circle mb-3">
                            <h5 class="mb-0 stronger">Guest</h5>
                            <a class="text-primary" href="javascript:void(0)">@<span>guest</span></a>
                        @endif
                        <div class="d-flex justify-content-center align-items-center mt-4">
                            <div class="dash-followers mr-4">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button type="button" class="btn bg-light-secondary px-2">
                                        <i class="lar la-user"></i>
                                    </button>
                                    <div class="ml-2">
                                        <a href="{{ url('/login') }}"><h5 class="mb-0"> Log In</h5></a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="dash-ratings">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button type="button" class="btn bg-light-secondary px-2">
                                        <i class="las la-user"></i>
                                    </button>
                                    <div class="ml-2">
                                        <a href="{{ url('/login') }}"><h5 class="mb-0"> Sign Up</h5></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h6 class="mt-4">
                        <span> Joined</span>
                        <small class="ml-1"> 11 Hours ago</small>
                    </h6>
                    <div class="progress mb-0">
                        <div role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-light-primary text-primary font-11 strong" style="width: 30%;"> 30%</div>
                        <div role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-light-success text-success-teal font-11 strong" style="width: 20%;"> 20%</div>
                        <div role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-light-info text-info font-11 strong" style="width: 35%;"> 35%</div>
                    </div>
                </div>
            </div>
          
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget dashboard-table">
                    <div class="widget-heading">
                        <h5 class=""> {{__('Recent Activities')}}</h5>
                        <div class="dropdown custom-dropdown-icon">
                            <a class="font-17 mr-3 pointer"><i class="las la-sync-alt"></i></a>
                        </div>
                    </div>
                    <div class="widget-content">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th><div class="th-content"> {{__('Test')}}</div></th>
                                    <th><div class="th-content"> {{__('Test Now')}}</div></th>
                                    <th><div class="th-content"> {{__('Stats')}}</div></th>
                                    <th><div class="th-content"> {{__('Score')}}</div></th>
                                    <th><div class="th-content"> {{__('Percentile')}}</div></th>
                                    <th><div class="th-content"> {{__('Best Time')}}</div></th>
                                    <th><div class="th-content"> {{__('Bad Day')}}</div></th>
                                    <th><div class="th-content"> {{__('Personal Average Reaction')}}</div></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Reaction Time</td>
                                    <td>
                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-muted" title="Test Now"><i class="las la-play"></i> Test Now</a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary ml-2" title="{{__('Stats')}}"><i class="las la-map"></i> Stats</a>
                                    </td>
                                    <td><b>402</b> ms</td>
                                    <td><b>2.3</b> %</td>
                                    <td><b>2.3</b></td>
                                    <td><b>2.3</b></td>
                                    <td><b>2.3</b></td>
                                </tr>
                                <tr>
                                    <td>Visual Memory</td>
                                    <td>
                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-muted" title="Test Now"><i class="las la-play"></i> Test Now</a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary ml-2" title="{{__('Stats')}}"><i class="las la-map"></i> Stats</a>
                                    </td>
                                    <td><b>402</b> ms</td>
                                    <td><b>2.3</b> %</td>
                                    <td><b>2.3</b></td>
                                    <td><b>2.3</b></td>
                                    <td><b>2.3</b></td>
                                </tr>
                                <tr>
                                    <td>Number Memory</td>
                                    <td>
                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-muted" title="Test Now"><i class="las la-play"></i> Test Now</a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary ml-2" title="{{__('Stats')}}"><i class="las la-map"></i> Stats</a>
                                    </td>
                                    <td><b>402</b> ms</td>
                                    <td><b>2.3</b> %</td>
                                    <td><b>2.3</b></td>
                                    <td><b>2.3</b></td>
                                    <td><b>2.3</b></td>
                                </tr>
                                <tr>
                                    <td>Verbal Memory</td>
                                    <td>
                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-muted" title="Test Now"><i class="las la-play"></i> Test Now</a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary ml-2" title="{{__('Stats')}}"><i class="las la-map"></i> Stats</a>
                                    </td>
                                    <td><b>402</b> ms</td>
                                    <td><b>2.3</b> %</td>
                                    <td><b>2.3</b></td>
                                    <td><b>2.3</b></td>
                                    <td><b>2.3</b></td>
                                </tr>
                                <tr>
                                    <td>Typing</td>
                                    <td>
                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-muted" title="Test Now"><i class="las la-play"></i> Test Now</a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary ml-2" title="{{__('Stats')}}"><i class="las la-map"></i> Stats</a>
                                    </td>
                                    <td><b>402</b> ms</td>
                                    <td><b>2.3</b> %</td>
                                    <td><b>2.3</b></td>
                                    <td><b>2.3</b></td>
                                    <td><b>2.3</b></td>
                                </tr>
                                <tr>
                                    <td>Aim Trainer</td>
                                    <td>
                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-muted" title="Test Now"><i class="las la-play"></i> Test Now</a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary ml-2" title="{{__('Stats')}}"><i class="las la-map"></i> Stats</a>
                                    </td>
                                    <td><b>402</b> ms</td>
                                    <td><b>2.3</b> %</td>
                                    <td><b>2.3</b></td>
                                    <td><b>2.3</b></td>
                                    <td><b>2.3</b></td>
                                </tr>
                                <tr>
                                    <td>Chimp Test</td>
                                    <td>
                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-muted" title="Test Now"><i class="las la-play"></i> Test Now</a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary ml-2" title="{{__('Stats')}}"><i class="las la-map"></i> Stats</a>
                                    </td>
                                    <td><b>402</b> ms</td>
                                    <td><b>2.3</b> %</td>
                                    <td><b>2.3</b></td>
                                    <td><b>2.3</b></td>
                                    <td><b>2.3</b></td>
                                </tr>
                                <tr>
                                    <td>Sequence Memory</td>
                                    <td>
                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-muted" title="Test Now"><i class="las la-play"></i> Test Now</a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary ml-2" title="{{__('Stats')}}"><i class="las la-map"></i> Stats</a>
                                    </td>
                                    <td><b>402</b> ms</td>
                                    <td><b>2.3</b> %</td>
                                    <td><b>2.3</b></td>
                                    <td><b>2.3</b></td>
                                    <td><b>2.3</b></td>
                                </tr>
                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Body Ends -->
@endsection

@push('plugin-scripts')
    {!! Html::script('assets/js/loader.js') !!}
    {!! Html::script('plugins/apex/apexcharts.min.js') !!}
    {!! Html::script('plugins/flatpickr/flatpickr.js') !!}
    {!! Html::script('assets/js/dashboard/dashboard_1.js') !!}
@endpush

@push('custom-scripts')
    <script src="{{ asset('/sw.js') }}"></script>
    <script>
        if ('serviceWorker' in navigator) {
            if (!navigator.serviceWorker.controller) {
                navigator.serviceWorker.register("/sw.js").then(function (reg) {
                    console.log("Service worker has been registered for scope: " + reg.scope);
                });
            }
        }
    </script>
@endpush
