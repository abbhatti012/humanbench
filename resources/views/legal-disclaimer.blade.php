@extends('layout.master')

@push('plugin-styles')
    {!! Html::style('assets/css/loader.css') !!}
    {!! Html::style('plugins/apex/apexcharts.css') !!}
    {!! Html::style('assets/css/dashboard/dashboard_1.css') !!}
    {!! Html::style('plugins/flatpickr/flatpickr.css') !!}
    {!! Html::style('plugins/flatpickr/custom-flatpickr.css') !!}
    {!! Html::style('assets/css/elements/tooltip.css') !!}
<style>
    .my-5{
        margin-top: 3rem!important;
    margin-bottom: 3rem!important;
    }
    @media (min-width: 1400px){
        .container, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
            max-width: 1320px;
        }
    }
    .container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
        width: 100%;
        padding-right: var(--bs-gutter-x,.75rem);
        padding-left: var(--bs-gutter-x,.75rem);
        margin-right: auto;
        margin-left: auto;
    }
    .row {
        --bs-gutter-x: 1.5rem;
        --bs-gutter-y: 0;
        display: flex;
        flex-wrap: wrap;
        margin-top: calc(var(--bs-gutter-y) * -1);
        margin-right: calc(var(--bs-gutter-x)/ -2);
        margin-left: calc(var(--bs-gutter-x)/ -2);
    }
    .reaction-dark-bg {
        background-color: #263036;
        border-radius: 10px;
    }
    .text-white {
        color: #fff!important;
    }
    .text-center {
        text-align: center!important;
    }
    .p-5 {
        padding: 3rem!important;
    }
    .fw-bold {
        font-weight: 700!important;
    }
    @media (min-width: 1200px){
        .h3, h3 {
            font-size: 1.75rem;
        }
    }
    .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
        margin-top: 0;
        margin-bottom: 0.5rem;
        line-height: 1.2;
    }
    hr:not([size]) {
        height: 1px;
    }
    .bg-white {
        background-color: #fff!important;
    }
    .w-100 {
        width: 100%!important;
    }
    hr {
        margin: 1rem 0;
        border: 0;
        opacity: .25;
    }
    p{
        font-size: 15px;
    }
</style>
@endpush

@section('content')
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
                                <li class="breadcrumb-item"><a href="/"> {{__('Dashboard')}}</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span> {{__('Legal Disclaimer')}}</span></li>
                            </ol>
                        </nav>
                    </div>
                </li>
            </ul>
        </header>
    </div>
    <section class="my-5">
        <div class="container">
            <div class="section-mid">
                <div class="text-center text-white reaction-dark-bg p-5">
                <h3 class="fw-bold">Quest Vitality GbR </h3>
                <hr class="w-100 bg-white text-white mb-4">
                    <p>Severinstr. 4</p>
                    <p>83026 Rosenheim</p>
                    <p>Telephone: +49 160 9460 56 19</p>
                    <p>Email: </font></font><a style="color: red;" href="mailto:info@quest-vitality.de"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">info@quest-vitality.de</font></font></a></p>
                    <p>Represented by Dr. Lutz Grauman.</p>
                </div>
            </div>
        </div>
    </section>
  
    <section class="my-5">
        <div class="container">
            <div class="section-mid">
                <div class="text-center text-white reaction-dark-bg p-5">
                <h3 class="fw-bold">Disclaimer </h3>
                <hr class="w-100 bg-white text-white mb-4">
                    <p>The reaction time test is how much time your brain takes to react to visual information. This is considered an essential part of fitness, and with the proper practice, you can also enhance it. </p>
                    <p>You can improve this ability; some include practicing response drills, hand-eye coordination, and other activities that can improve your reaction time. </p>
                    <p>An average human takes up to 250 milliseconds to respond to any action; that means you can react to even sudden information in less than a second! Growing age and physical or mental trauma affect your reaction time.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="my-5">
        <div class="container">
            <div class="section-mid">
                <div class="text-center text-white reaction-dark-bg p-5">
                <h3 class="fw-bold">Copyright</h3>
                    <hr class="w-100 bg-white text-white mb-4">
                    <p>
                        All contents of this website, especially texts and graphics are protected by copyright. The unauthorized use, forwarding or reproduction of individual content or complete pages can be prosecuted under civil and criminal law.
                    </p>
                    <p>
                        Photos: Joshua Earle, Wolfgang Lutz, Yang Song, Bethany Legg, David Di Veroli, Kyle Johnson, unsplash
                        Illustrations: Dominik Weiss
                    </p>
                </div>
            </div>
        </div>
    </section>
   
@endsection

@push('plugin-scripts')
    {!! Html::script('assets/js/loader.js') !!}
    {!! Html::script('plugins/apex/apexcharts.min.js') !!}
    {!! Html::script('plugins/flatpickr/flatpickr.js') !!}
@endpush

@push('custom-scripts')
   
@endpush
