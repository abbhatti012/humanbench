@extends('layout.master-auth')

@push('plugin-styles')
    {!! Html::style('assets/css/loader.css') !!}
    {!! Html::style('plugins/owl-carousel/owl.carousel.min.css') !!}
    {!! Html::style('plugins/owl-carousel/owl.theme.default.min.css') !!}
    {!! Html::style('assets/css/authentication/auth_1.css') !!}
@endpush

@section('content')
    <!-- Main Body Starts -->
    <div class="forget-one">
        <div class="container-fluid login-one-container">
            <div class="p-30 h-100" >
                <div class="row main-login-one h-100">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 p-0">
                        <div class="login-one-start">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <h6 class="mt-2 text-primary text-center font-20">{{__('Forget Password ?')}}</h6>
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="form-1">
                                    <p class="text-center text-muted mt-3 mb-3 font-14">{{__('Email Address')}}</p>
                                    <div class="login-one-inputs mt-5">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Please Enter Your Email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                        <i class="las la-envelope"></i>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="login-one-inputs mt-5">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="New Password" required autocomplete="new-password">
                                        <i class="las la-lock"></i>

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="login-one-inputs mt-5">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm New Password" autocomplete="new-password">
                                        <i class="las la-lock"></i>
                                    </div>
                                    <div class="login-one-inputs mt-4">
                                        <button class="ripple-button ripple-button-primary btn-lg btn-login" type="submit">
                                            <div class="ripple-ripple js-ripple">
                                                <span class="ripple-ripple__circle"></span>
                                            </div>
                                            {{__('Reset Password')}}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-6 col-md-6 d-none d-md-block p-0">
                        <div class="slider-half">
                            <div class="slide-content">
                                <div class="top-sign-up ">
                                    <div class="about-comp text-white mt-2">{{__('QUEST VITALITY')}}</div>
                                    <div class="for-sign-up">
                                        <p class="text-white font-12 mt-2 font-weight-300">{{__('Don\'t have an account ?')}}</p>
                                        <a href="{{url('/signup')}}">{{__('Sign Up')}}</a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="owl-carousel owl-theme">
                                    <div class="item">
                                        <i class="lar la-grin-alt font-45 text-white"></i>
                                        <h2 class="font-30 text-white mt-2">{{__('Start your journey')}}</h2>
                                        <p class="summary-count text-white font-12 mt-2 slide-text" >{{__('Everyone has been made for some particular work, and the desire for that work has been put in every heart')}}</p>
                                    </div>
                                    <div class="item">
                                        <i class="lar la-clock font-45 text-white"></i>
                                        <h2 class="font-30 text-white mt-2">{{__('Save your time')}}</h2>
                                        <p class="summary-count text-white font-12 mt-2 slide-text" >{{__('Everyone has been made for some particular work, and the desire for that work has been put in every heart')}}</p>
                                    </div>
                                    <div class="item">
                                        <i class="las la-hand-holding-usd font-45 text-white"></i>
                                        <h2 class="font-30 text-white mt-2">{{__('Save your money')}}</h2>
                                        <p class="summary-count text-white font-12 mt-2 slide-text" >{{__('Everyone has been made for some particular work, and the desire for that work has been put in every heart')}}</p>
                                    </div>
                                </div>
                            </div>
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
    {!! Html::script('assets/js/libs/jquery-3.6.0.min.js') !!}
    {!! Html::script('plugins/owl-carousel/owl.carousel.min.js') !!}
    {!! Html::script('plugins/owl-carousel/owl.carousel.js') !!}
    {!! Html::script('plugins/bootstrap/js/bootstrap.min.js') !!}
    {!! Html::script('assets/js/authentication/auth_1.js') !!}
@endpush

@push('custom-scripts')

@endpush
