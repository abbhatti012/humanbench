@extends('layout.master')

@push('plugin-styles')
    {!! Html::style('assets/css/loader.css') !!}
    {!! Html::style('plugins/apex/apexcharts.css') !!}
    {!! Html::style('assets/css/dashboard/dashboard_1.css') !!}
    {!! Html::style('plugins/flatpickr/flatpickr.css') !!}
    {!! Html::style('plugins/flatpickr/custom-flatpickr.css') !!}
    {!! Html::style('assets/css/elements/tooltip.css') !!}
@endpush
<style>
    @media screen and (max-width: 992px) {
        .modal-body{
            max-height: calc(100vh - 200px) !important;
            overflow-y: auto !important;
        }
    }
</style>
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
                                <li class="breadcrumb-item active" aria-current="page"><span> {{__('Number Memory')}}</span></li>
                            </ol>
                        </nav>
                    </div>
                </li>
            </ul>
        </header>
    </div>
    <!--  Navbar Ends / Breadcrumb Area  -->
    <!-- Main Body Starts -->

    <section id="level1start" class="my-5">
        <!-- <div class="css-1qvtbrk e19owgy78">
            <center>
                <i class="fa fa-line-chart"></i>
            </center>
        </div> -->
        <div class="section-title text-center text-white">
            <h1 class="fw-bold">CNS Benchmarks</h1>
            <p class="text-center mt-4">The average person can remember 7 numbers at once. Can you do more?</p>
        </div><br>
        <div class="arrow-container">
            <div class="arrow-down"></div>
        </div>
        <div class="d-flex justify-content-center block-width">
            <div class="circle-container d-flex justify-content-center mt-5">
                <div id="levelone" class="startNow circle color-green d-flex justify-content-center align-items-center">
                    <span class="fs-4 text-white fw-bold">Start Now</span>
                </div>
            </div>
        </div>
    </section>
     <style>
        #status-health{
            display: none;
        }
        .my-5{
            margin-top: 3rem!important;
            margin-bottom: 3rem!important;
        }
        .section-title{
            width: 60%;
            margin: 0 auto;
        }
        .text-white{
            color: #fff!important;
        }
        .text-center{
            text-align: center!important;
        }
        .fw-bold{
            font-weight: 700!important;
        }
        @media (min-width: 1200px){
            .h1, h1 {
                font-size: 2.5rem;
            }
        }
        .text-center{
            text-align: center!important;
        }
        .mt-4{
            margin-top: 1.5rem!important;
        }
        .block-width{
            flex-direction: row;
            flex-wrap: wrap;
            width: 75%;
            margin: 0 auto;
        }
        .d-flex{
            display: flex!important;
        }
        .btn-green, .color-green, .save-btn .btn{
            background-color: #53bf5f!important;
            cursor: pointer;
        }
        .circle{
            width: 200px;
            height: 200px;
            border-radius: 9999px;
            margin: 10px;
            box-shadow: 0 0 0 10px #2c353f;
        }
        @media (min-width: 1200px){
            .fs-4 {
                font-size: 1.5rem!important;
            }
        }
        .text-white{
            color: #fff!important;
        }
        .fa-line-chart{
            font-size: 150px;
            color: white;
        }

        .arrow-container {
            width: 25px;
            animation: bounce 1600ms infinite cubic-bezier(0.445, 0.05, 0.55, 0.95);
            cursor: pointer;
            height: 20px;
            margin-left: 49%;
        }
        .arrow-down {
            height: 6px;
            background: white;
            transform: rotate(45deg);
            transform-origin: 0% 0%;
            border-radius: 5px;
        }
        .arrow-down:after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            bottom: 0;
            left: 100%;
            border-radius: 5px;
            background: white;
            transform: rotate(-90deg);
            transform-origin: 0% 100%;
        }

        @keyframes bounce {
            50% {
                transform: translateY(-15px);
            }
        }
        .img-thumbnail{
            width: 134px;
            height: 134px;
        }
        @media only screen and (max-width: 600px) {
            .apexcharts-xaxis-texts-g {
                display: none;
            }
        }
    </style>
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div id="Average Report" class="widget widget-chart-one">
                    <div class="widget-heading">
                        <h5 class=""> {{ __('Average Reports') }}</h5>
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
                            <h5 class="mb-0 stronger">ID#{{ $user->id }}</h5>
                            <a class="text-primary" href="{{ route('profile') }}">@<?php echo str_replace(" ","_",$user->name); ?></a>
                        @else
                            <img src="{{ asset('assets/img/profile-21.jpg') }}" alt="Avatar" class="img-thumbnail rounded-circle mb-3">
                            <h5 class="mb-0 stronger">Guest</h5>
                            <a class="text-primary" href="javascript:void(0)">@<span>guest</span></a>
                        @endif
                        <div class="d-flex justify-content-center align-items-center mt-4">
                            <div class="dash-followers mr-4">
                                <div class="d-flex justify-content-center align-items-center">
                                @if(!$user)
                                    <button type="button" class="btn bg-light-secondary px-2">
                                        <i class="lar la-user"></i>
                                    </button>
                                @endif
                                    <div class="ml-2">
                                        @if(!$user)
                                        <a href="{{ url('/login') }}"><h5 class="mb-0"> Log In</h5></a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            
                            <div class="dash-ratings">
                                <div class="d-flex justify-content-center align-items-center">
                                @if(!$user)
                                <button type="button" class="btn bg-light-secondary px-2">
                                    <i class="las la-user"></i>
                                </button>
                                @endif
                                <div class="ml-2">
                                        @if(!$user)
                                        <a href="{{ url('/register') }}"><h5 class="mb-0"> Sign Up</h5></a>
                                        @endif
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
                        <div role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-light-primary text-primary font-11 strong" style="width: 100%;"></div>
                        <!-- <div role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-light-success text-success-teal font-11 strong" style="width: 20%;"> 20%</div> -->
                        <!-- <div role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-light-info text-info font-11 strong" style="width: 35%;"> 35%</div> -->
                    </div>
                </div>
            </div>
          
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div id="dashboard-table" class="widget dashboard-table">
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
                                    <th><div class="th-content"> {{__('Digits')}}(<i class="fa fa-info" title="Average of last five score"></i>)</div></th>
                                    <th><div class="th-content"> {{__('Level')}}(<i class="fa fa-info" title="Very least score of five trials"></i>)</div></th>
                                    <th><div class="th-content"> {{__('Percentile')}}(<i class="fa fa-info" title="Percentile from average last five score"></i>)</div></th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($numbers as $number)
                                <tr>
                                    <td>Number Memory</td>
                                    <td><b>{{ $number->level }}</b></td>
                                    <td><b>{{ $number->level }}</b></td>
                                    <td><b>
                                        @if($number->level <= 7)
                                            Below Average
                                        @elseif($number->level >= 8 && $number <= 9)
                                            Average
                                        @elseif($number->level > 9)
                                            Above Average
                                        @endif
                                    </b></td>
                                </tr>
                                @empty
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade show" id="status-health" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" style="padding-right: 17px;" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="{{ route('save-state') }}" method="post">
                        @csrf
                    <div class="modal-body text-white p-5">
                        <style>
                            .darkmode .form-control {
                                border: 1px solid #ffffff !important;
                            }
                        </style>
                        <div class="row form-group status">
                            <h5>Please describe your current cognitive state!</h5>
                                <div class="col-lg-6">
                                    <label for="brain_dead"><input name="state" required id="brain_dead" type="radio" value="Brain Dead">  Brain Dead</label>
                                </div>
                                <div class="col-lg-6">
                                    <label for="fatigued"><input name="state" required id="fatigued" type="radio" value="Fatigued">  Fatigued</label>
                                </div>
                                <div class="col-lg-6">
                                    <label for="Average"><input name="state" required id="Average" type="radio" value="Average">  Average</label>
                                </div>
                                <div class="col-lg-6">
                                    <label for="good"><input name="state" required id="good" type="radio" value="Good">  Good</label>
                                </div>
                                <div class="col-lg-6">
                                    <label for="fully_charged"><input name="state" required id="fully_charged" type="radio" value="Fully Charged">  Fully Charged</label>
                                </div>
                                <br><br>
                                <h5>Please describe your health status!</h5>
                                <div class="col-lg-6">
                                    <label for="Healthy"><input name="status" required id="Healthy" type="radio" value="Healthy">  Healthy</label>
                                </div>
                                <div class="col-lg-6">
                                    <label for="sick"><input name="status" required id="sick" type="radio" value="Sick">  Sick</label>
                                </div>
                                <div class="col-lg-6">
                                    <label for="caffeinated"><input name="status" required id="caffeinated" type="radio" value="Caffeinated">  Caffeinated</label>
                                </div>
                                <div class="col-lg-6">
                                    <label for="sleep_deprived"><input name="status" required id="sleep_deprived" type="radio" value="Sleep Deprived">  Sleep Deprived</label>
                                </div>
                                <div class="col-lg-6">
                                    <label for="alcohol"><input name="status" required id="alcohol" type="radio" value="Alcohol">  Alcohol</label>
                                </div>
                                <div class="col-lg-6">
                                    <label for="medication"><input name="status" required id="medication" type="radio" value="Medication">  Medication</label>
                                </div>
                                <div class="col-lg-6">
                                    <label for="stressed"><input name="status" required id="stressed" type="radio" value="Stressed">  Stressed</label>
                                </div>
                                <div class="col-lg-6">
                                    <label for="depressed"><input name="status" required id="depressed" type="radio" value="Depressed">  Depressed</label>
                                </div>
                        </div>
                        <div class="form-group">
                            <h6>Add an additional comment</h6>
                            <textarea name="description" class="form-control" cols="15" rows="4"></textarea>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-danger mx-3 px-3 closeModal"><i class="mx-2 fa fa-times" width="15" height="15"></i>Close</button>
                            <button type="submit" class="btn btn-primary mx-3 px-3"><i class="mx-2 fa fa-save" width="15" height="15"></i>Save</button>
                        </div>
                    </div>
                    </form>
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
    <script>
        <?php if($status): ?>
            var is_state = "<?= $status->state; ?>";
        <?php else: ?>
            var is_state = 'NOT_EXISTS';
        <?php endif; ?>
        $(document).ready(function(){
            $('.startNow').on('click',function(){
                if(is_state == 'NOT_EXISTS'){
                    $('#status-health').show();
                } else if(is_state == '') {
                    $('#status-health').show();
                } else {
                    window.location.href = "{{ route('number-test') }}";
                }
            })
            $('.closeModal').on('click',function(){
                $('#status-health').hide();
            })
        })
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
                        name: '<?= $graph_data['graph_title1'] ?>',
                        data: [
                            <?php foreach($graph_data['statAverageTime'] as $par): ?>
                                "<?php echo $par; ?>",
                            <?php endforeach; ?>
                        ]
                    }, {
                        name: '<?= $graph_data['graph_title2'] ?>',
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
