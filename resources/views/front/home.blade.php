<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description"
        content="html 5 template, dentist, stomatologist, dental clinic template, medical template, clinic template, surgery clinic theme, plastic surgery template">
    <meta name="author" content="websmirno.site">
    <meta name="format-detection" content="telephone=no">
    <title>Doctor Online</title>
    <!-- Stylesheets -->
    <link href="{{asset('front/vendor/slick/slick.css')}}" rel="stylesheet">
    <link href="{{asset('front/vendor/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('front/icons/style.css')}}" rel="stylesheet">
    <link href="{{asset('front/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('front/color/color.css')}}" rel="stylesheet">
    <!--Favicon-->
    <link rel="icon" href="{{asset('front/images/favicon.png')}}" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <!-- Google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiFdr5Z0WRIXKUOqoRRvzRQ5SkzhkUVjk"></script>
</head>

<body class="shop-page layout-landing">
    <!--header-->
    <header class="header">
        <div class="header-quickLinks js-header-quickLinks d-lg-none">
            <div class="quickLinks-top js-quickLinks-top"></div>
            <div class="js-quickLinks-wrap-m">
            </div>
        </div>
        <div class="header-topline d-none d-lg-flex">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-auto d-flex align-items-center">
                        <div class="header-info"><i class="icon-placeholder2"></i>{{$info->address}}
                        </div>
                        <div class="header-phone"><i class="icon-telephone"></i><a
                                href="tel:{{$info->phone}}">{{$info->phone}}</a> &nbsp; - &nbsp; <a
                                href="tel:{{$info->phoneAlt}}">{{$info->phoneAlt}}</a> </div>
                        <div class="header-info"><i class="icon-black-envelope"></i><a
                                href="mailto:{{$info->email}}">{{$info->email}}</a></div>
                    </div>
                    <div class="col-auto ml-auto d-flex align-items-center">
                        <span class="header-social">
                            <a href="{{$info->facebook}}" class="hovicon"><i class="icon-facebook-logo-circle"></i></a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-content">
            <div class="container">
                <div class="row align-items-lg-center">
                    <button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbarNavDropdown">
                        <span class="icon-menu"></span>
                    </button>
                    <div class="col-lg-auto col-lg-2 d-flex align-items-lg-center">
                        <a href="index.html" class="header-logo"><img src="{{asset('front/images/logo.png')}}" alt=""
                                class="img-fluid"></a>
                    </div>
                    <div class="col-lg ml-auto header-nav-wrap">
                        <div class="header-nav js-header-nav">
                            <nav class="navbar navbar-expand-lg btco-hover-menu">
                                <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link link-inside" href="#aboutSection">About Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link link-inside" href="#departmentsSection">Departments</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link link-inside" href="#servicesSection">Services</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link link-inside" href="#faqSection">FAQ</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link link-inside" href="#specialistsSection">Specialists</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link link-inside" href="#testimonialsSection">Testimonials</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link link-inside" href="#contactSection">Contact Us</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--//header-->
    <div class="page-content">
        <!--section slider-->
        <div class="section mt-0">
            <div id="mainSliderWrapper">
                <div class="loading-content">
                    <div class="inner-circles-loader"></div>
                </div>
                <div class="main-slider mb-0 arrows-white arrows-bottom" id="mainSlider"
                    data-slick='{"arrows": false, "dots": true}'>
                    @foreach($sliders as $slider)
                    <div class="slide">
                        <div class="img--holder" data-bg="{{asset('storage/images/slider/' . $slider->image)}}"></div>
                        <div class="slide-content center">
                            <div class="vert-wrap container">
                                <div class="vert">
                                    <div class="container">
                                        <div class="slide-txt1" data-animation="fadeInDown" data-animation-delay="1s">
                                            <b>{{$slider->title}}</b></div>
                                        <div class="slide-txt2" data-animation="fadeInUp" data-animation-delay="1.5s">
                                            {{$slider->subtitle}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!--//section slider-->

        <!--section about-->
        <div class="section" id="aboutSection">
            <div class="container pt-lg-2">
                <div class="row mt-2 mt-md-3 mt-lg-0">
                    <div class="col-md-6">
                        <div class="title-wrap text-center text-md-left">
                            <h2 class="h1">{{$about->title}}</h2>
                            <div class="h-sub theme-color">{{$about->subtitle}}</div>
                        </div>
                        <div class="pr-xl-1">
                            {!! $about->description !!}
                        </div>
                        <div class="text-center text-md-left mt-2 mt-md-3">
                            <a href="#" class="btn-link" data-toggle="modal" data-target="#modalBookingForm">Booking a
                                visit<i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="video-box">
                            <div class="video-box-poster">
                                <img src="{{asset('storage/images/about/' . $about->image)}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--//section about-->

        <!--section departments-->
        <div class="section" id="departmentsSection">
            <div class="container">
                <div class="title-wrap text-center">
                    <h2 class="h1">Our Departments</h2>
                    <div class="h-decor"></div>
                </div>
                <p class="text-center max-500">Doctor Online specializes in different medical services for the
                    convenience of community:</p>
                <div class="row mt-lg-4">
                    <div class="col-lg-8 col-xl-9">
                        <div class="department-tabs js-department-tabs d-none d-sm-flex">
                            @foreach($departments as $department)
                            <div class="department-tab {{$loop->iteration == 1 ? 'active' : ''}}">
                                <div class="department-tab-icon"><img
                                        src="{{asset('storage/images/department/' . $department->icon)}}" alt=""></div>
                                <div class="department-tab-text">{{$department->title}}</div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3">
                        <div class="department-carousel js-department-carousel">
                            @foreach($departments as $department)
                            <div class="department-item">
                                <h3 data-title="{{$department->title}}"><span>{{$department->title}}</span></h3>
                                <div class="department-tab">
                                    <div class="department-tab-icon"><i class="icon-brain"></i></div>
                                    <div class="department-tab-text">{{$department->title}}</div>
                                </div>
                                <p>{{$department->description}}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--//section  departments-->

        <!--section services-->
        <div class="section" id="servicesSection">
            <div class="container">
                <div class="title-wrap text-center">
                    <h2 class="h1">Our Services</h2>
                    <div class="h-decor"></div>
                </div>
                <div class="row js-service-card-style2-carousel">
                    @foreach($services as $service)
                    <div class="col-md-6 col-lg-4">
                        <div class="service-card-style2">
                            <div class="service-card-icon">
                                <img style="width: auto; margin:0 auto;"
                                    src="{{asset('storage/images/service/' . $service->icon)}}" alt="Service Icon">
                            </div>
                            <h5 class="service-card-name">{{$service->title}}</h5>
                            {!! $service->description !!}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!--//section services-->

        <!--section faq-->
        <div class="section bg-grey py-0" id="faqSection">
            <div class="container-fluid px-0">
                <div class="row no-gutters">
                    <div class="col-xl-6 order-2 order-xl-1">
                        <div class="faq-wrap px-15 px-lg-8">
                            <div class="title-wrap">
                                <h2 class="h1">Frequently Asked Questions</h2>
                            </div>
                            <div class="mt-2 mt-lg-4"></div>
                            @foreach($faq as $item)
                            @if($loop->iteration == 1)
                            <div class="faq-item">
                                <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem1"
                                    aria-expanded="true"><span>1.</span><span>{{$item->question}}</span></a>
                                <div id="faqItem1" class="collapse show faq-item-content" role="tabpanel">
                                    <div>
                                        <p>{{$item->answer}}</p>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="faq-item">
                                <a data-toggle="collapse" data-parent="#faqAccordion{{$loop->iteration}}"
                                    href="#faqItem{{$loop->iteration}}" aria-expanded="false"
                                    class="collapsed"><span>{{$loop->iteration}}.</span><span>{{$item->question}}</span></a>
                                <div id="faqItem{{$loop->iteration}}" class="collapse faq-item-content" role="tabpanel">
                                    <div>
                                        <p>{{$item->answer}}</p>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                            <a href="#" class="btn mt-15 mt-sm-3" data-toggle="modal"
                                data-target="#modalQuestionForm"><i class="icon-right-arrow"></i><span>Ask
                                    Question</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-6 banner-left bg-cover order-1 order-xl-2"
                        style="background-image: url(<?php echo asset('front/images/content/banner-left.jpg') ?>)">
                    </div>
                </div>
            </div>
        </div>
        <!--//section faq-->

        <!--section specialists-->
        <div class="section" id="specialistsSection">
            <div class="container">
                <div class="title-wrap text-center">
                    <div class="h-sub theme-color">Meet the Team</div>
                    <h1>Our Specialists</h1>
                    <div class="h-decor"></div>
                </div>
                <p class="text-center max-600">We offer highly specialised medical care, on one site, from some of the
                    foremost national and international specialists in their fields of medicine.</p>
                <div class="row specialist-carousel js-specialist-carousel">
                    @foreach($members as $member)
                    <div class="col-sm-6 col-md-4">
                        <div class="doctor-box doctor-box-style2 text-center">
                            <div class="doctor-box-photo">
                                <img src="{{asset('storage/images/team/' . $member->image)}}" class="img-fluid"
                                    alt="Doctor Image" style="min-height: 370px;">
                            </div>
                            <div class="doctor-box-top">
                                <h5 class="doctor-box-name">{{$member->name}}</h5>
                                <div class="doctor-box-position">{{$member->title}}</div>
                            </div>
                            <div class="mx-3">
                                {{$member->bio}}
                            </div>
                            <div class="doctor-box-booking">
                                <a href="#" data-toggle="modal" data-target="#modalBookingForm">Booking a visit <i
                                        class="icon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!--//section specialists-->
        <!--section testimonials-->
        <div class="section py-0" id="testimonialsSection">
            <div class="container-fluid px-0">
                <div class="row no-gutters">
                    <div class="col-sm-6 order-1 bg-cover"
                        style="background-image: url(<?php echo asset('front/images/content/reviews-bg.jpg')?>);">
                        <div class="reviews-wrap reviews-style2 d-flex flex-column justify-content-center">
                            <div class="js-reviews-carousel reviews-carousel">
                                @foreach($testimonials as $testimonial)
                                <div class="review">
                                    <p class="review-text">{{$testimonial->saying}}</p>
                                    <p><span class="review-author">- {{$testimonial->name}},</span> <span
                                            class="review-author-position">{{$testimonial->title}}</span></p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 order-0 reviews-photo">
                        <img src="{{asset('front/images/content/testimonials-left.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!--//section testimonials-->

        <!--section online appointment-->
        <div class="section">
            <div class="container-fluid px-0">
                <div class="block-full-appointment bg-cover"
                    style="background-image: url(<?php echo asset('front/images/content/online-appointment-bg.jpg') ?>)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="box-progress">
                                    <div class="box-progress-number">{{$counter->val1}}</div>
                                    <div class="box-progress-text">
                                        <h5>{{$counter->num1}}</h5>
                                        <p>{{$counter->description1}}</p>
                                    </div>
                                </div>
                                <div class="box-progress">
                                    <div class="box-progress-number">{{$counter->val2}}</div>
                                    <div class="box-progress-text">
                                        <h5>{{$counter->num2}}</h5>
                                        <p>{{$counter->description2}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mt-5 mt-md-0 text-center text-md-right">
                                <h2 class="text1">Online Appointments<br>
                                    and Prescriptions</h2>
                                <div class="text2">You can now book a limited amount of doctors’ appointments online
                                </div>
                                <a href="#" class="btn mt-2 mt-sm-3 mt-lg-4" data-toggle="modal"
                                    data-target="#modalBookingForm"><i class="icon-right-arrow"></i><span>Request an
                                        appointment</span><i class="icon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--//section online appointment-->

        <!--section contact-->
        <div class="section" id="contactSection">
            <div class="banner-contact-us"
                style="background-image: url(<?php echo asset('front/images/content/contact-bg.html') ?>)">
                <div class="container">
                    <div class="row no-gutters">
                        <div
                            class="col-sm-6 col-lg-6 order-2 order-sm-1 mt-3 mt-md-0 text-center text-md-right d-flex align-items-end">
                            <img src="{{asset('front/images/content/banner-callus.png')}}" alt="" class="shift-left">
                        </div>
                        <div class="col-sm-6 col-lg-6 order-1 order-sm-2 d-flex">
                            <div class="pt-2 pt-lg-6">
                                <h2 data-title="Looking for a Certified Doctor?"><span>Looking for <br
                                            class="d-lg-none"> a <span class="theme-color">Certified
                                            Doctor?</span></span></h2>
                                <p>We believe in providing the best possible care to all our existing patients and
                                    welcome new patients to sample.</p>
                                <form class="contact-form" id="contactForm" method="post" novalidate="novalidate">
                                    <div class="successform">
                                        <p>Your message was sent successfully!</p>
                                    </div>
                                    <div class="errorform">
                                        <p>Something went wrong, try refreshing and submitting the form again.</p>
                                    </div>
                                    <div>
                                        <input type="text" class="form-control" name="name" placeholder="Your name*">
                                    </div>
                                    <div class="row row-sm-space mt-15">
                                        <div class="col-sm-6"><input type="text" class="form-control" name="phone"
                                                placeholder="Your Phone" required></div>
                                        <div class="col-sm-6 mt-15 mt-sm-0"><input type="text" class="form-control"
                                                name="email" placeholder="Email*"></div>
                                    </div>
                                    <div class="mt-15">
                                        <textarea class="form-control" name="message" placeholder="Message"></textarea>
                                    </div>
                                    <div class="mt-2 mt-lg-4 text-center text-md-left">
                                        <button type="submit" class="btn"><i class="icon-right-arrow"></i><span>Send
                                                request</span><i class="icon-right-arrow"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--//section contact-->
    </div>
    <!--footer-->
    <div class="footer mt-0">
        <div class="container">
            <div class="row py-1 py-md-2 px-lg-0">
                <div class="col-lg-4 footer-col1">
                    <div class="row flex-column flex-md-row flex-lg-column">
                        <div class="col-md col-lg-auto">
                            <div class="footer-logo">
                                <img src="{{asset('front/images/footer-logo.png')}}" alt="Doctor Online Logo" class="img-fluid">
                            </div>
                            <div class="mt-2 mt-lg-0"></div>
                            <div class="footer-social d-none d-md-block d-lg-none">
                                <a href="{{$info->facebook}}" target="blank" class="hovicon"><i
                                        class="icon-facebook-logo"></i></a>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="footer-social d-md-none d-lg-block">
                                <a href="{{$info->facebook}}" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <h3>Services</h3>
                    <div class="h-decor"></div>
                    @foreach($services->take(3) as $service)
                    <div class="footer-post d-flex">
                        <div class="footer-post-photo"><img src="{{asset('storage/images/service/' . $service->icon)}}"
                                alt="service icon" class="img-fluid"></div>
                        <div class="footer-post-text">
                            <div class="footer-post-title mt-1"><a href="#servicesSection">{{$service->title}}</a></div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-sm-6 col-lg-4">
                    <h3>Our Contacts</h3>
                    <div class="h-decor"></div>
                    <ul class="icn-list">
                        <li><i class="icon-placeholder2"></i>{{$info->address}}
                            <br>
                        </li>
                        <li><i class="icon-telephone"></i><b><span class="phone"><span class="text-nowrap"><a
                                            href="tel:{{$info->phone}}">{{$info->phone}}</a></span>, <span
                                        class="text-nowrap"><a
                                            href="tel:{{$info->phoneAlt}}">{{$info->phoneAlt}}</a></span></span></b>
                            <br>(24/7 General inquiry)
                        </li>
                        <li><i class="icon-black-envelope"></i><a href="mailto:{{$info->eamil}}">{{$info->email}}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row text-center text-md-left">
                    <div class="col-sm text-center">Copyright © 2020 Doctor Online<span></span></div>
                </div>
            </div>
        </div>
    </div>
    <!--//footer-->
    <div class="backToTop js-backToTop">
        <i class="icon icon-up-arrow"></i>
    </div>
    <div class="modal modal-form modal-form-sm fade" id="modalQuestionForm">
        <div class="modal-dialog">
            <div class="modal-content">
                <button aria-label='Close' class='close' data-dismiss='modal'>
                    <i class="icon-error"></i>
                </button>
                <div class="modal-body">
                    <div class="modal-form">
                        <h3>Ask a Question</h3>
                        <form class="mt-15" id="questionForm" method="post" novalidate>
                            <div class="successform">
                                <p>Your message was sent successfully!</p>
                            </div>
                            <div class="errorform">
                                <p>Something went wrong, try refreshing and submitting the form again.</p>
                            </div>
                            <div class="input-group">
                                <span>
                                    <i class="icon-user"></i>
                                </span>
                                <input type="text" name="name" class="form-control" autocomplete="off"
                                    placeholder="Your Name*" />
                            </div>
                            <div class="input-group">
                                <span>
                                    <i class="icon-email2"></i>
                                </span>
                                <input type="text" name="email" class="form-control" autocomplete="off"
                                    placeholder="Your Email*" />
                            </div>
                            <div class="input-group">
                                <span>
                                    <i class="icon-smartphone"></i>
                                </span>
                                <input type="text" name="phone" class="form-control" autocomplete="off"
                                    placeholder="Your Phone" />
                            </div>
                            <textarea name="message" class="form-control" placeholder="Your comment*"></textarea>
                            <div class="text-right mt-2">
                                <button type="submit" class="btn btn-sm btn-hover-fill">Ask Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal modal-form fade" id="modalBookingForm">
        <div class="modal-dialog">
            <div class="modal-content">
                <button aria-label='Close' class='close' data-dismiss='modal'>
                    <i class="icon-error"></i>
                </button>
                <div class="modal-body">
                    <div class="modal-form">
                        <h3>Book an Appointment</h3>
                        <form class="mt-15" id="bookingForm" method="post" novalidate>
                            <div class="successform">
                                <p>Your message was sent successfully!</p>
                            </div>
                            <div class="errorform">
                                <p>Something went wrong, try refreshing and submitting the form again.</p>
                            </div>
                            <div class="input-group">
                                <span>
                                    <i class="icon-user"></i>
                                </span>
                                <input type="text" name="bookingname" class="form-control" autocomplete="off"
                                    placeholder="Your Name*" />
                            </div>
                            <div class="row row-xs-space mt-1">
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <span>
                                            <i class="icon-email2"></i>
                                        </span>
                                        <input type="text" name="bookingemail" class="form-control" autocomplete="off"
                                            placeholder="Your Email*" />
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-1 mt-sm-0">
                                    <div class="input-group">
                                        <span>
                                            <i class="icon-smartphone"></i>
                                        </span>
                                        <input type="text" name="bookingphone" class="form-control" autocomplete="off"
                                            placeholder="Your Phone" />
                                    </div>
                                </div>
                            </div>
                            <div class="row row-xs-space mt-1">
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <span>
                                            <i class="icon-birthday"></i>
                                        </span>
                                        <input type="text" name="bookingage" class="form-control" autocomplete="off"
                                            placeholder="Your age" />
                                    </div>
                                </div>
                            </div>
                            <div class="selectWrapper input-group mt-1">
                                <span>
                                    <i class="icon-tooth"></i>
                                </span>
                                <select name="bookingservice" class="form-control">
                                    <option selected="selected" disabled="disabled">Select Service</option>
                                    <option value="Cosmetic Dentistry">Cosmetic Dentistry</option>
                                    <option value="General Dentistry">General Dentistry</option>
                                    <option value="Orthodontics">Orthodontics</option>
                                    <option value="Children`s Dentistry">Children`s Dentistry</option>
                                    <option value="Dental Implants">Dental Implants</option>
                                    <option value="Dental Emergency">Dental Emergency</option>
                                </select>
                            </div>
                            <div class="input-group flex-nowrap mt-1">
                                <span>
                                    <i class="icon-calendar2"></i>
                                </span>
                                <div class="datepicker-wrap">
                                    <input name="bookingdate" type="text" class="form-control datetimepicker"
                                        placeholder="Date" readonly>
                                </div>
                            </div>
                            <div class="input-group flex-nowrap mt-1">
                                <span>
                                    <i class="icon-clock"></i>
                                </span>
                                <div class="datepicker-wrap">
                                    <input name="bookingtime" type="text" class="form-control timepicker"
                                        placeholder="Time">
                                </div>
                            </div>
                            <textarea name="bookingmessage" class="form-control" placeholder="Your comment"></textarea>
                            <div class="text-right mt-2">
                                <button type="submit" class="btn btn-sm btn-hover-fill">Book now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendors -->
    <script src="{{asset('front/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('front/vendor/jquery-migrate/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('front/vendor/cookie/jquery.cookie.js')}}"></script>
    <script src="{{asset('front/vendor/bootstrap-datetimepicker/moment.js')}}"></script>
    <script src="{{asset('front/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{asset('front/vendor/popper/popper.min.js')}}"></script>
    <script src="{{asset('front/vendor/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('front/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('front/vendor/waypoints/sticky.min.js')}}"></script>
    <script src="{{asset('front/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('front/vendor/slick/slick.min.js')}}"></script>
    <script src="{{asset('front/vendor/scroll-with-ease/jquery.scroll-with-ease.min.js')}}"></script>
    <script src="{{asset('front/vendor/countTo/jquery.countTo.js')}}"></script>
    <script src="{{asset('front/vendor/form-validation/jquery.form.js')}}"></script>
    <script src="{{asset('front/vendor/form-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('front/vendor/isotope/isotope.pkgd.min.js')}}"></script>
    <!-- Custom Scripts -->
    <script src="{{asset('front/js/app.js')}}"></script>
    <script src="{{asset('front/color/color.js')}}"></script>
    <script src="{{asset('front/js/app-shop.js')}}"></script>
    <script src="{{asset('front/form/forms.js')}}"></script>

</body>

</html>
