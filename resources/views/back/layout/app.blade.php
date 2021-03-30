<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">

    <link rel="shortcut icon" href="{{asset('front/assets/img/icon.png')}}" type="image/x-icon" />
    <link rel="icon" href="{{asset('front/assets/img/icon.png')}}" type="image/x-icon" />

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <link href="{{asset('back/css/main.css')}}" rel="stylesheet">
    <script src="{{asset('back/js/jquery.min.js')}}"></script>
    <script src="{{asset('back/js/bootstrap.min.js')}}"></script>
    <style>
        .doctoronline-logo {
            height: 25px !important;
        }

    </style>
</head>

<body>
    <div id="app" class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src doctoronline-logo"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                            data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button"
                        class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            class="p-0 btn">
                                            <img class="rounded-circle" src="{{asset('front/images/logo.png')}}"
                                                alt="" width="42">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                            class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right"
                                            style="padding-bottom:0;">
                                            <div class="dropdown-menu-header" style="margin-bottom: 0;">
                                                <div class="dropdown-menu-header-inner bg-info">
                                                    <div class="menu-header-image opacity-2"
                                                        style="background-image: url('<?php echo asset('back/assets/images/dropdown-header/city3.jpg'); ?>');">
                                                    </div>
                                                    <div class="menu-header-content text-left">
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-3">
                                                                    <img class="rounded-circle"
                                                                        src="{{asset('back/assets/images/boss.png')}}"
                                                                        alt="" width="42">
                                                                </div>
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">Doctor Online Admin</div>
                                                                </div>
                                                                <div class="widget-content-right mr-2"
                                                                    style="text-align: right;">
                                                                    <a href="{{route('admin.logout')}}"
                                                                        class="btn-pill btn-shadow btn-shine btn btn-danger"
                                                                        style="width: 130px;">Logout</a>
                                                                    <button
                                                                        class="btn-pill btn-shadow btn-shine btn btn-focus"
                                                                        style="margin-top:8px;" data-toggle="modal"
                                                                        data-target="#passwordModal">Change
                                                                        Password</button>
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
        </div>

        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src doctoronline-logo"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                                data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button"
                            class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">Website Content</li>
                            <li class="{{(request()->routeIs('admin.slider*') or request()->routeIs('admin.testimonial*') or request()->routeIs('admin.service*') or request()->routeIs('admin.about*')  or request()->routeIs('admin.info*') or request()->routeIs('admin.team*') or request()->routeIs('admin.department*') or request()->routeIs('admin.faq*') or request()->routeIs('admin.counter*') ) ? 'mm-active' : ''}}">
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-home"></i>Home Page
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{route('admin.slider.index')}}"
                                            class="{{request()->routeIs('admin.slider*') ? 'mm-active' : ''}}">
                                            <i class="metismenu-icon"></i> Sliders
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('admin.testimonial.index')}}"
                                            class="{{request()->routeIs('admin.testimonial*') ? 'mm-active' : ''}}">
                                            <i class="metismenu-icon pe-7s-comment"></i>Testimonials
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('admin.service.index')}}"
                                            class="{{request()->routeIs('admin.service*') ? 'mm-active' : ''}}">
                                            <i class="metismenu-icon pe-7s-comment"></i>Services
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('admin.department.index')}}"
                                            class="{{request()->routeIs('admin.department*') ? 'mm-active' : ''}}">
                                            <i class="metismenu-icon pe-7s-comment"></i>Departments
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('admin.about.index')}}"
                                            class="{{request()->routeIs('admin.about*') ? 'mm-active' : ''}}">
                                            <i class="metismenu-icon pe-7s-comment"></i>About
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('admin.info.index')}}"
                                            class="{{request()->routeIs('admin.info*') ? 'mm-active' : ''}}">
                                            <i class="metismenu-icon pe-7s-comment"></i>Info
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('admin.teamMember.index')}}"
                                            class="{{request()->routeIs('admin.team*') ? 'mm-active' : ''}}">
                                            <i class="metismenu-icon pe-7s-comment"></i>Team Members
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('admin.faq.index')}}"
                                            class="{{request()->routeIs('admin.faq*') ? 'mm-active' : ''}}">
                                            <i class="metismenu-icon pe-7s-comment"></i>FAQ
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('admin.counter.index')}}"
                                            class="{{request()->routeIs('admin.counter*') ? 'mm-active' : ''}}">
                                            <i class="metismenu-icon pe-7s-comment"></i>Counters
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="app-sidebar__heading">Contacts</li>
                            <li>
                                <a href="{{route('admin.contact.index')}}"
                                    class="{{request()->routeIs('admin.contact*') ? 'mm-active' : ''}}">
                                    <i class="metismenu-icon pe-7s-mail"></i>Messages
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    @yield('content')
                </div>
            </div>
            <div class="scrollbar-container"></div>
        </div>
    </div>
    <div class="modal fade" id="passwordModal" tabindex="-1" role="dialog" aria-labelledby="passwordModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="passwordModalLabel">Change Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('admin.password.change')}}">
                        @csrf
                        <div class="position-relative form-group">
                            <label for="oldPassword" class="">Old Password</label>
                            <input name="oldPassword" id="oldPassword" placeholder="********" type="password"
                                class="form-control" required>
                            <span classs="text-danger">{{$errors->first('oldPassword')}}</span>
                        </div>
                        <div class="position-relative form-group">
                            <label for="password" class="">New Password</label>
                            <input name="password" id="password" placeholder="********" type="password"
                                class="form-control" required>
                        </div>
                        <div class="position-relative form-group">
                            <label for="password_confirmation" class="">Confirm New Password</label>
                            <input name="password_confirmation" id="password_confirmation" placeholder="********"
                                type="password" class="form-control" required>
                            <span classs="text-danger">{{$errors->first('password_confirmation')}}</span>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Change</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    @if(NULL !== session('passwordChange'))
    <div class="modal fade" id="passwordChange" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4
                        class="modal-title {{session('passwordChange') == 'success' ? 'text-success' : 'text-danger'}} ">
                        {{session('passwordChange') == 'success' ? 'Success' : 'Error'}}</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>{{session('passwordChange') == 'success' ? 'Password was changed Successfully' : 'There was an error changing the password, please try accurately.'}}
                    </p>
                </div>
            </div>

        </div>
    </div>
    @endif

    <script type="text/javascript" src="{{asset('back/js/main.js')}}"></script>
    <script src="https://cdn.tiny.cloud/1/mnutthw8cmqzoshv2ow3yr3jx5wxr2ix5t9237iecoirckm9/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: '.tiny'
        });

    </script>

    <script type="text/javascript">
        $(window).on('load', function () {
            $('#passwordChange').modal('show');
        });

    </script>
    @yield('scripts')
</body>

</html>
