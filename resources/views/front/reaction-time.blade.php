@extends('layout.master')

@push('plugin-styles')
    {!! Html::style('assets/css/loader.css') !!}
    {!! Html::style('plugins/apex/apexcharts.css') !!}
    {!! Html::style('assets/css/dashboard/dashboard_1.css') !!}
    {!! Html::style('plugins/flatpickr/flatpickr.css') !!}
    {!! Html::style('plugins/flatpickr/custom-flatpickr.css') !!}
    {!! Html::style('assets/css/elements/tooltip.css') !!}
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
                                <li class="breadcrumb-item active" aria-current="page"><span> {{__('Reaction Time')}}</span></li>
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
            <p class="text-center mt-4">Measure your Central Nervous System core capabilities with the Quest Vitality CNS Screen.</p>
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
    </style>
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <!-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-chart-one">
                    <div class="widget-heading test-section">
                        <div class="css-42wpoy e19owgy79">
                            <div class="anim-slide-fade-in">
                                <div class="css-1qvtbrk e19owgy78">
                                    <div class="css-1qvtbrk e19owgy78">
                                        <center>
                                            <i class="fa fa-line-chart"></i>
                                        </center>
                                    </div>
                                    <div class="css-1qvtbrk e19owgy78">
                                        <div style="opacity: 1; transition: all 1s linear 0s;">
                                            <center><h1>CNS Benchmarks</h1></center>
                                        </div>
                                        <div style="opacity: 1; transition: all 1s linear 0s;">
                                            <center><h2>Measure your Central Nervous System core capabilities with the Quest Vitality CNS Screen.</h2></center>
                                        </div>
                                    </div><br>
                                    <div class="arrow-container">
                                        <div class="arrow-down"></div>
                                    </div><br>
                                    <div class="css-1qvtbrk e19owgy78">
                                        <center><a style="color: white;" href="{{ route('reaction-test') }}">Click to play now!</a></center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <style>
                .css-saet2v.view-splash{
                    background: rgb(43, 135, 209);
                }
                .css-saet2v{
                    position: relative;
                    color: white;
                    overflow: hidden;
                    text-align: center;
                    cursor: pointer;
                    user-select: none;
                }
                .css-42wpoy{
                    display: flex;
                    flex-direction: column;
                    -webkit-box-pack: center;
                    justify-content: center;
                    margin: 0px auto;
                    max-width: 1010px;
                    position: relative;
                }
                .css-1gr1qbh .anim-slide-fade-in{
                    animation-name: slideFadeIn;
                    animation-duration: 0.5s;
                    animation-timing-function: ease-out;
                }
                .css-1gr1qbh .hero-icon{
                    width: 100px;
                    height: 100px;
                }
                .css-1gr1qbh .pulse-faint{
                    animation: 1s ease-in-out 0s infinite alternate none running pulse-faint;
                }
                .css-1qvtbrk + .css-1qvtbrk{
                    margin: 30px 0px 0px;
                }
                .css-1qvtbrk h1, h2{
                    color: white;
                }
                .test-section{
                    background-color: #2262c6;
                    border-radius: 20px;
                }
                .pulse-faint{
                    color: white;
                }
                .widget-chart-one .widget-heading{
                    padding: 30px;
                }
                .css-1qvtbrk + .css-1qvtbrk{
                    margin: 30px 0px 0px;
                }
                .css-1gr1qbh a{
                    cursor: pointer;
                }
                .css-de05nr{
                    padding: 12px 30px;
                    background: rgb(255, 209, 84);
                    display: inline-block;
                    border: none;
                    border-radius: 3px;
                    transition: background 0.1s linear 0s;
                    font-weight: bold;
                    font-size: inherit;
                    font-family: inherit;
                    line-height: inherit;
                    color: rgb(51, 51, 51) !important;
                    text-decoration: none !important;
                }
                .css-de05nr:hover{
                    background-color: white;
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
            </style> -->

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
                        <img src="{{ asset('assets/img/profile-21.jpg') }}" alt="Avatar" class="img-thumbnail rounded-circle mb-3">
                        <h5 class="mb-0 stronger"> Guest User</h5>
                        <a class="text-primary" href="#">@oliver_murphy</a>
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
    <script>
        $(document).ready(function(){
            $('.startNow').on('click',function(){
                // $(this).text('Please Wait...');
                window.location.href = "{{ route('reaction-test') }}";
            })
        })
    </script>
@endpush
