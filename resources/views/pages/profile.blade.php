@extends('layouts.app')

@section('title', 'Profile')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/summernote/dist/summernote-bs4.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/bootstrap-social/assets/css/bootstrap.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Profile</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Profile</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Hi, {{ auth()->user()->name }}!</h2>
                <p class="section-lead">
                    Change information about yourself on this page.
                </p>

                <div class="row mt-sm-4">
                    <div class="col-12 col-md-12 col-lg-5">
                        <div class="card profile-widget">
                            <div class="profile-widget-header">
                                <img alt="image"
                                    src="{{ asset('img/avatar/avatar-1.png') }}"
                                    class="rounded-circle profile-widget-picture">
                                <div class="profile-widget-items">
                                    <div class="profile-widget-item">
                                        <div class="profile-widget-item-label">Posts</div>
                                        <div class="profile-widget-item-value">187</div>
                                    </div>
                                    <div class="profile-widget-item">
                                        <div class="profile-widget-item-label">Followers</div>
                                        <div class="profile-widget-item-value">6,8K</div>
                                    </div>
                                    <div class="profile-widget-item">
                                        <div class="profile-widget-item-label">Following</div>
                                        <div class="profile-widget-item-value">2,1K</div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-widget-description">
                                <div class="profile-widget-name">{{ auth()->user()->name }} <div
                                        class="text-muted d-inline font-weight-normal">
                                        <div class="slash"></div> Web Developer
                                    </div>
                                </div>
                                {{ auth()->user()->bio }}
                            </div>
                            <div class="card-footer text-center">
                                <div class="font-weight-bold mb-2">Follow Ujang On</div>
                                <a href="#"
                                    class="btn btn-social-icon btn-facebook mr-1">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#"
                                    class="btn btn-social-icon btn-twitter mr-1">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#"
                                    class="btn btn-social-icon btn-github mr-1">
                                    <i class="fab fa-github"></i>
                                </a>
                                <a href="#"
                                    class="btn btn-social-icon btn-instagram">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>

                        <div class="card">
                            <form method="post"
                                action="{{ route('user-profile-information.update') }}"
                                class="needs-validation"
                                novalidate="">
                                @csrf
                                @method('PUT')
                                <div class="card-header">
                                    <h4>Edit Password</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-12 col-12">
                                            <label>Current Password</label>
                                            <input type="password"
                                                name="current_password"
                                                class="form-control @error('phone', 'updateProfileInformation') is-invalid @enderror"
                                                value="">
                                                @error('phone', 'updateProfileInformation')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                               @enderror
                                        </div>
                                        <div class="form-group col-md-12 col-12">
                                            <label>New Password</label>
                                            <input type="password"
                                                name="password"
                                                class="form-control @error('name', 'updateProfileInformation') is-invalid @enderror"
                                                value=""
                                                required="">
                                           @error('name', 'updateProfileInformation')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                           @enderror
                                        </div>
                                        <div class="form-group col-md-12 col-12">
                                            <label>Password Confirmation</label>
                                            <input type="password"
                                                name="password_confirmation"
                                                class="form-control @error('name', 'updateProfileInformation') is-invalid @enderror"
                                                value=""
                                                required="">
                                           @error('name', 'updateProfileInformation')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                           @enderror
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary" type="submit">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-7">
                        <div class="card">
                            <form method="post"
                                action="{{ route('user-profile-information.update') }}"
                                class="needs-validation"
                                novalidate="">
                                @csrf
                                @method('PUT')
                                <div class="card-header">
                                    <h4>Edit Profile</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-12 col-12">
                                            <label>Name</label>
                                            <input type="text"
                                                name="name"
                                                class="form-control @error('name', 'updateProfileInformation') is-invalid @enderror"
                                                value="{{ auth()->user()->name }}"
                                                required="">
                                           @error('name', 'updateProfileInformation')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                           @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12 col-12">
                                            <label>Email</label>
                                            <input type="email"
                                                name="email"
                                                class="form-control @error('email', 'updateProfileInformation') is-invalid @enderror"
                                                value="{{ auth()->user()->email }}"
                                                required="">
                                                @error('email', 'updateProfileInformation')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                               @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12 col-12">
                                            <label>Phone</label>
                                            <input type="tel"
                                                name="phone"
                                                class="form-control @error('phone', 'updateProfileInformation') is-invalid @enderror"
                                                value="{{ auth()->user()->phone }}">
                                                @error('phone', 'updateProfileInformation')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                               @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label>Bio</label>
                                            <textarea class="form-control summernote-simple" name="bio">{{ auth()->user()->bio }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary" type="submit">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/summernote/dist/summernote-bs4.js') }}"></script>

    <!-- Page Specific JS File -->
@endpush
