@extends('layout.master')

@push('plugin-styles')
    {!! Html::style('assets/css/loader.css') !!}
    {!! Html::style('plugins/dropify/dropify.min.css') !!}
    {!! Html::style('assets/css/pages/profile_edit.css') !!}
@endpush
<style>
    option{
        background-color: black;
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
                                <li class="breadcrumb-item"><a href="javascript:void(0);">{{__('Dashboard')}}</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>{{__('Profile Edit')}}</span></li>
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
        <div class="account-settings-container layout-top-spacing">
            <div class="account-content">
                <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <div id="general-info" class="section general-info">
                                <div class="info">
                                    <div class="d-flex mt-2">
                                        <div class="profile-edit-left">
                                            <div class="tab-options-list">
                                                <div class="nav flex-column nav-pills mb-sm-0 mb-3   text-center mx-auto" id="v-border-pills-tab" role="tablist" aria-orientation="vertical">
                                                    <a class="nav-link active" id="v-border-pills-general-tab" data-toggle="pill" href="#v-border-pills-general" role="tab" aria-controls="v-border-pills-general" aria-selected="true"><i class="las la-info"></i> {{__('General Information')}}</a>
                                                    <a class="nav-link  text-center" id="v-border-pills-contact-tab" data-toggle="pill" href="#v-border-pills-contact" role="tab" aria-controls="v-border-pills-contact" aria-selected="false"><i class="las la-lock"></i> {{__('Change Password')}}</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-edit-right">
                                            <div class="tab-content" id="v-border-pills-tabContent">
                                                @if(Session::has('message'))
                                                    <div class="alert alert-{{session('message')['type']}}">
                                                        {{session('message')['text']}}
                                                    </div>
                                                @endif
                                                <div class="tab-pane fade show active" id="v-border-pills-general" role="tabpanel" aria-labelledby="v-border-pills-general-tab">
                                                    <form action="{{ route('save-profile') }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-xl-3 col-lg-12 col-md-12">
                                                                <div class="upload text-center img-thumbnail">
                                                                    @if($user->avatar)
                                                                        <input type="file" id="input-file-max-fs" class="dropify" name="avatar" data-default-file="{{ asset($user->avatar) }}" data-max-file-size="2M" accept="image/*" />
                                                                    @else
                                                                        <input type="file" id="input-file-max-fs" class="dropify" name="avatar" data-default-file="{{ asset('assets/img/profile-21.jpg') }}" data-max-file-size="2M" accept="image/*" />
                                                                    @endif
                                                                    <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> {{__('Upload Picture')}}</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-9 col-lg-12 col-md-12 mt-md-0 mt-4">
                                                                <div class="form">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <label for="fullName">{{__('Full Name')}}</label>
                                                                                <input type="text" class="form-control mb-4" name="name" placeholder="{{__('Your Full Name')}}" value="{{ Auth::user()->name }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <label for="age">{{__('Age')}}</label>
                                                                                <input type="number" class="form-control mb-4" name="age" placeholder="{{__('Your Age')}}" min="18" value="{{ Auth::user()->age }}" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <label for="gender">{{__('Gender')}}</label>
                                                                                <select name="gender" class="form-control mb-4">
                                                                                    <option <?php if($user->gender == 'male'){echo 'selected';} ?> value="male">Male</option>
                                                                                    <option <?php if($user->gender == 'female'){echo 'selected';} ?> value="female">Female</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <label for="fullName">{{__('Email')}}</label>
                                                                                <input type="email" disabled class="form-control mb-4" placeholder="{{__('Your Email')}}" value="{{ Auth::user()->email }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-3">
                                                                    <button type="submit" id="multiple-messages" class="btn btn-primary btn-sm">{{__('Save')}}</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                
                                            
                                                <div class="tab-pane fade" id="v-border-pills-contact" role="tabpanel" aria-labelledby="v-border-pills-contact-tab">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <form action="{{ route('update-password') }}" method="POST">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="password">{{__('Old Password')}}</label>
                                                                            <input type="password" class="form-control mb-4" name="old_password" placeholder="{{__('Old Password')}}">
                                                                            @error('old_password')
                                                                                <span class="text-danger">{{ $message }}</span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="new_password">{{__('New Password')}}</label>
                                                                            <input type="password" name="new_password" class="form-control mb-4" placeholder="{{__('New Password')}}">
                                                                            @error('new_password')
                                                                                <span class="text-danger">{{ $message }}</span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="confirm_password">{{__('Confirm New Password')}}</label>
                                                                            <input type="password" name="new_password_confirmation" class="form-control mb-4" placeholder="{{__('Confirm New Password')}}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-3">
                                                                    <button type="submit" id="multiple-messages" class="btn btn-primary btn-sm">{{__('Save')}}</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
    {!! Html::script('plugins/dropify/dropify.min.js') !!}
    {!! Html::script('assets/js/pages/profile_edit.js') !!}
@endpush

@push('custom-scripts')

@endpush
