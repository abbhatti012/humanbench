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
        .apexcharts-legend-text{
            color: white !important;
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
                        <h3>{{ $data['personal_average_reaction'] }} ms</h3>
                        <p class="font-17 text-primary mb-0 redirectTo" data-route = "reaction-time">{{ __('Reaction Time') }} </p>
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
                <div id="Average Report" class="widget widget-chart-one">
                    <div class="widget-heading">
                        <h5 class=""> {{ __('Average Reports') }}</h5>
                        <form action="{{ route('dashboard') }}" method="post">
                            @csrf
                            <ul class="tabs tab-pills">
                                <li class="nav-item more-dropdown">
                                    <div class="input-group input-group-sm">
                                        <input id="rangeCalendarFlatpickr" name="date" class="form-control flatpickr flatpickr-input active" type="text" placeholder="{{__('Select Date')}}">
                                        <div class="input-group-append">
                                            <span class="input-group-text bg-primary border-primary" id="basic-addon2">
                                                <i class="lar la-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item custom-dropdown-icon">
                                    <a href="javascript: void(0);" data-original-title="{{__('Filter By')}}" data-placement="bottom" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-primary dash-btn btn-sm ml-2 bs-tooltip">
                                        <i class="las la-filter"></i>
                                    </a>
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
                                </li>
                                <li class="nav-item more-dropdown">
                                    <button type="submit" data-original-title="{{__('Reload Data')}}"data-placement="bottom" class="btn btn-primary dash-btn btn-sm ml-2 bs-tooltip"><i class="las la-sync"></i></button>
                                </li>
                            </ul>
                        <form>
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
                        @if($user)
                            <small class="ml-1">{{ date("F j, Y, g:i a",strtotime($user->created_at))  }}</small>
                        @else
                            <small class="ml-1">{{ date("F j, Y, g:i a",strtotime(date("Y/m/d")))  }}</small>
                        @endif
                    </h6>
                    <div class="progress mb-0">
                        <div role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-light-primary text-primary font-11 strong" style="width: 100%;"></div>
                        <!-- <div role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-light-success text-success-teal font-11 strong" style="width: 20%;"> 20%</div> -->
                        <!-- <div role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-light-info text-info font-11 strong" style="width: 35%;"> 35%</div> -->
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
                                    <th><div class="th-content"> {{__('Personal Average Reaction')}}(<i class="fa fa-info" title="Average of last five score"></i>)</div></th>
                                    <th><div class="th-content"> {{__('Percentile')}}(<i class="fa fa-info" title="Percentile from average last five score"></i>)</div></th>
                                    <th><div class="th-content"> {{__('Best Time')}}</div></th>
                                    <th><div class="th-content"> {{__('Bad Day')}}</div></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Reaction Time</td>
                                    <td>
                                        <a href="{{ route('reaction-test') }}" class="bs-tooltip font-20 text-muted" title="Test Now"><i class="las la-play"></i> Test Now</a>
                                    </td>
                                    <td>
                                        <a href="#Average Report" class="bs-tooltip font-20 text-primary ml-2" title="{{__('Stats')}}"><i class="las la-map"></i> Stats</a>
                                    </td>
                                    <td><b>{{ $data['personal_average_reaction'] }}</b> ms</td>
                                    <td><b>{{ $data['percentile'] }}</b></td>
                                    <td><b>{{ $data['best_time'] }}</b> ms</td>
                                    <td><b>0</b></td>
                                </tr>
                                <tr>
                                    <td>Visual Memory</td>
                                    <td>
                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-muted" title="Test Now"><i class="las la-play"></i> Test Now</a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary ml-2" title="{{__('Stats')}}"><i class="las la-map"></i> Stats</a>
                                    </td>
                                    <td><b>0</b> ms</td>
                                    <td><b>0</b> %</td>
                                    <td><b>0</b></td>
                                    <td><b>0</b></td>
                                </tr>
                                <tr>
                                    <td>Number Memory</td>
                                    <td>
                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-muted" title="Test Now"><i class="las la-play"></i> Test Now</a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary ml-2" title="{{__('Stats')}}"><i class="las la-map"></i> Stats</a>
                                    </td>
                                    <td><b>0</b> ms</td>
                                    <td><b>0</b> %</td>
                                    <td><b>0</b></td>
                                    <td><b>0</b></td>
                                </tr>
                                <tr>
                                    <td>Verbal Memory</td>
                                    <td>
                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-muted" title="Test Now"><i class="las la-play"></i> Test Now</a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary ml-2" title="{{__('Stats')}}"><i class="las la-map"></i> Stats</a>
                                    </td>
                                    <td><b>0</b> ms</td>
                                    <td><b>0</b> %</td>
                                    <td><b>0</b></td>
                                    <td><b>0</b></td>
                                </tr>
                                <tr>
                                    <td>Typing</td>
                                    <td>
                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-muted" title="Test Now"><i class="las la-play"></i> Test Now</a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary ml-2" title="{{__('Stats')}}"><i class="las la-map"></i> Stats</a>
                                    </td>
                                    <td><b>0</b> ms</td>
                                    <td><b>0</b> %</td>
                                    <td><b>0</b></td>
                                    <td><b>0</b></td>
                                </tr>
                                <tr>
                                    <td>Aim Trainer</td>
                                    <td>
                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-muted" title="Test Now"><i class="las la-play"></i> Test Now</a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary ml-2" title="{{__('Stats')}}"><i class="las la-map"></i> Stats</a>
                                    </td>
                                    <td><b>0</b> ms</td>
                                    <td><b>0</b> %</td>
                                    <td><b>0</b></td>
                                    <td><b>0</b></td>
                                </tr>
                                <tr>
                                    <td>Chimp Test</td>
                                    <td>
                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-muted" title="Test Now"><i class="las la-play"></i> Test Now</a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary ml-2" title="{{__('Stats')}}"><i class="las la-map"></i> Stats</a>
                                    </td>
                                    <td><b>0</b> ms</td>
                                    <td><b>0</b> %</td>
                                    <td><b>0</b></td>
                                    <td><b>0</b></td>
                                </tr>
                                <tr>
                                    <td>Sequence Memory</td>
                                    <td>
                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-muted" title="Test Now"><i class="las la-play"></i> Test Now</a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary ml-2" title="{{__('Stats')}}"><i class="las la-map"></i> Stats</a>
                                    </td>
                                    <td><b>0</b> ms</td>
                                    <td><b>0</b> %</td>
                                    <td><b>0</b></td>
                                    <td><b>0</b></td>
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
    <!-- {!! Html::script('assets/js/dashboard/dashboard_1.js') !!} -->
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
    <script>
        (function($) {
            $(document).on('click','.redirectTo',function(){
                var route = $(this).data('route');
                window.location.href = "/"+route;
            })
            "use strict";
            try {
                var options = {
                    chart: {
                        fontFamily: 'Poppins, sans-serif',
                        height: 320,
                        type: 'area',
                        zoom: {
                            enabled: false
                        },
                        dropShadow: {
                            enabled: true,
                            opacity: 0.2,
                            blur: 5,
                            left: -7,
                            top: 22
                        },
                        toolbar: {
                            show: false
                        },
                        events: {
                            mounted: function(ctx, config) {
                                const highest1 = ctx.getHighestValueInSeries(0);
                                const highest2 = ctx.getHighestValueInSeries(1);
                                ctx.addPointAnnotation({
                                    x: new Date(ctx.w.globals.seriesX[0][ctx.w.globals.series[0].indexOf(highest1)]).getTime(),
                                    y: highest1,
                                    label: {
                                        style: {
                                            cssClass: 'd-none'
                                        }
                                    },
                                    customSVG: {
                                        SVG: '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="#009688" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>',
                                        cssClass: undefined,
                                        offsetX: -8,
                                        offsetY: 5
                                    }
                                })
                                ctx.addPointAnnotation({
                                    x: new Date(ctx.w.globals.seriesX[1][ctx.w.globals.series[1].indexOf(highest2)]).getTime(),
                                    y: highest2,
                                    label: {
                                        style: {
                                            cssClass: 'd-none'
                                        }
                                    },
                                    customSVG: {
                                        SVG: '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="#e7515a" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>',
                                        cssClass: undefined,
                                        offsetX: -8,
                                        offsetY: 5
                                    }
                                })
                            },
                        }
                    },
                    colors: ['#009688', '#e7515a'],
                    dataLabels: {
                        enabled: false
                    },
                    markers: {
                        discrete: [{
                            seriesIndex: 0,
                            dataPointIndex: 7,
                            fillColor: '#000',
                            strokeColor: '#000',
                            size: 5
                        }, {
                            seriesIndex: 2,
                            dataPointIndex: 11,
                            fillColor: '#000',
                            strokeColor: '#000',
                            size: 4
                        }]
                    },
                    subtitle: {
                        text: '',
                        align: 'left',
                        margin: 0,
                        offsetX: -10,
                        offsetY: 35,
                        floating: false,
                        style: {
                            fontSize: '14px',
                            color:  '#888ea8'
                        }
                    },
                    title: {
                        text: '',
                        align: 'left',
                        margin: 0,
                        offsetX: -10,
                        offsetY: 0,
                        floating: false,
                        style: {
                            fontSize: '25px',
                            color:  '#515365'
                        },
                    },
                    stroke: {
                        show: true,
                        curve: 'smooth',
                        width: 2,
                        lineCap: 'square'
                    },
                    series: [{
                        name: 'Average Score Per Day',
                        data: [
                            <?php foreach($graph_data['statAverageTime'] as $par): ?>
                                "<?php echo $par; ?>",
                            <?php endforeach; ?>
                        ]
                    }, {
                        name: 'Percentile Per Day',
                        data: [
                            <?php foreach($graph_data['statPercentile'] as $percent): ?>
                                <?= $percent ?>,
                            <?php endforeach; ?>
                        ]
                    }],
                    labels: [
                        <?php foreach($graph_data['statLabel'] as $label): ?>
                            "<?php echo $label; ?>",
                        <?php endforeach; ?>
                    ],
                    xaxis: {
                        axisBorder: {
                            show: false
                        },
                        axisTicks: {
                            show: false
                        },
                        crosshairs: {
                            show: true
                        },
                        labels: {
                            offsetX: 0,
                            offsetY: 5,
                            style: {
                                fontSize: '12px',
                                fontFamily: 'Poppins, sans-serif',
                                cssClass: 'apexcharts-xaxis-title',
                            },
                        }
                    },
                    yaxis: {
                        labels: {
                            formatter: function(value, index) {
                                // return (value / 1000) + 'K'
                                return value;
                            },
                            offsetX: -22,
                            offsetY: 0,
                            style: {
                                fontSize: '12px',
                                fontFamily: 'Poppins, sans-serif',
                                cssClass: 'apexcharts-yaxis-title',
                            },
                        }
                    },
                    grid: {
                        borderColor: '#e0e6ed',
                        strokeDashArray: 8,
                        xaxis: {
                            lines: {
                                show: true
                            }
                        },
                        yaxis: {
                            lines: {
                                show: true,
                            }
                        },
                        padding: {
                            top: 0,
                            right: 0,
                            bottom: 0,
                            left: -10
                        },
                    },
                    legend: {
                        position: 'top',
                        horizontalAlign: 'right',
                        offsetY: -50,
                        fontSize: '13px',
                        fontFamily: 'Poppins, sans-serif',
                        markers: {
                            width: 10,
                            height: 10,
                            strokeWidth: 0,
                            strokeColor: '#fff',
                            fillColors: undefined,
                            radius: 12,
                            onClick: undefined,
                            offsetX: 0,
                            offsetY: 0
                        },
                        itemMargin: {
                            horizontal: 0,
                            vertical: 20
                        }
                    },
                    tooltip: {
                        theme: 'dark',
                        marker: {
                            show: true,
                        },
                        x: {
                            show: false,
                        }
                    },
                    fill: {
                        type:"gradient",
                        gradient: {
                            type: "vertical",
                            shadeIntensity: 1,
                            inverseColors: !1,
                            opacityFrom: .28,
                            opacityTo: .05,
                            stops: [45, 100]
                        }
                    },
                    responsive: [{
                        breakpoint: 575,
                        options: {
                            legend: {
                                offsetY: -30,
                            },
                        },
                    }]
                }
               
                document.getElementById('transactionsMonthly').innerHTML = '';
                var chart1 = new ApexCharts(
                    document.querySelector("#transactionsMonthly"),
                    options
                );
                chart1.render();

                $(document).ready(function(){
                    $("#showToDoinput").on('click', function(){
                        $("#toDoInputContainer").slideToggle();
                    });
                });
                /*************************** Other Script ************************** /
                 /* Date Range Picker */
                var f3 = flatpickr(document.getElementById('rangeCalendarFlatpickr'), {
                    mode: "range",
                });
            } catch(e) {
                console.log(e);
            }
            })(jQuery);

    </script>
@endpush
