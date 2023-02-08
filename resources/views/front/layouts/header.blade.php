<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>{{ !empty($title)?$title:' | المصنع السعودى'}}</title>
	<!-- Bootstrap font-aweasome css -->
	<link href="{{asset('front/font-awesome/css/all.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('front/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/responsive.css')}}"/>
</head>
<body>
<!--=====================================================================-->
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="all-menu">
                    <div class="col-md-4 col-sm-4 col-xs-8">
                        <div class="logo">
                            <img src="{{asset('front/images/logo.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-4">
                        <div class="the-menu">
                            <ul>
                                <li><a href="{{route('home')}}">الرئيسية</a></li>
                                <li><a href="{{route('about')}}">من نحن</a></li>
                                <li><a href="{{route('products')}}">منتجاتنا</a></li>
                                <li><a href="{{route('contact_us')}}">اتصل بنا</a></li>
                                <li class="search-ic"><a data-toggle="modal" data-target="#exampleModal"><i class="fa fa-search"></i></a></li>
                            </ul>
                        </div>
                        <div class="hidden-xx">
                            <i class="fa fa-bars" onclick="openNav()"></i>
                            <a data-toggle="modal" data-target="#exampleModal"><i class="fa fa-search"></i></a>

                        </div>

                    </div>
                </div>

            </div>

            @if (Route::getCurrentRoute()->uri() == '/')
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h4 class="head"></h4>
            </div>
            @else
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h4 class="head">{{$title}}</h4>
            </div>
            @endif


            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="main-slider">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">

                        @if (Route::getCurrentRoute()->uri() == '/')
                         <!-- Indicators -->
                         <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            @foreach ($sliders as $slider)
                            <div class="item @if($loop->first) active @endif">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="content-slider">
                                        <h2>{{$slider->title}}</h2>
                                        <p>{{$slider->desc}}</p>
                                        <div class="links">
                                            <a href="{{route('contact_us')}}">اتصل بنا</a>
                                            <a href="{{route('products')}}">المنتجات  </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="pic-slider">
                                        <img src="{{asset('uploads/sliders/'.$slider->image)}}" class="image_thumbnail image-preview" alt="">
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!--=====================================================================-->
<div class="after">
    <img src="{{asset('front/images/hr.png')}}" alt="">
</div>
<!--=====================================================================-->
<!-- Modal -->
<div class="modal searching" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog wow animated slideInDown" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <input name="search" id="search" type="text" placeholder="اكتب ما تبحث عنه">
                    <button><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--=====================================================================-->
<div id="mySidenav" class="sidenav">
    <div class="col-xs-12">
        <a href="javascript:void(0)" class="closebtn"  onclick="closeNav()"><i class="fa fa-times" aria-hidden="true"></i></a>
    </div>

    <div class="col-xs-12">
        <div class="logo">
            <a href=""><img src="{{asset('front/images/logo.png')}}" alt=""></a>
        </div>
    </div><!--col-xs-12-->
    <div class="col-xs-12">
        <div class="sidenav-menu">
            <ul>
                <li><a href="{{route('home')}}">الرئيسية</a></li>
                <li><a href="{{route('about')}}">من نحن</a></li>
                <li><a href="{{route('products')}}">منتجاتنا</a></li>
                <li><a href="{{route('contact_us')}}">اتصل بنا</a></li>
                @foreach ($settings as $setting)
                <li class="whats"><a href="{{$setting->whats_num}}"><i class="fab fa-whatsapp"></i></a></li>
                <li class="call"><a href="{{$setting->phone_1}}"><i class="fa fa-phone-alt"></i></a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div><!--sidenav-->
<!--=====================================================================-->
