
@include('master_layout.modal_login')
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Best Responsive job portal template build on Latest Bootstrap.">
    <meta name="keywords" content="job, nob board, job portal, job listing">
    <meta name="robots" content="index,follow">
    <title>Cổng tuyển dụng việc làm</title>
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/bootstrap-wysihtml5.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/prettify.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/owl.theme.css')}}">
    <link href="{{asset('asset/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/line-font.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/bootsnav.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">
    <link type="text/css" rel="stylesheet" id="jssDefault" href="{{asset('asset/css/colors/green-style.css')}}">
    <link href="{{asset('asset/css/responsiveness.css')}}" rel="stylesheet"> 
</head>
<body>
    <div class="wrapper">
        <nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav" style="position: fixed;">
            <div class="container">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"><i class="fa fa-bars"></i></button>
                <div class="navbar-header"> <a class="navbar-brand" href="{{route('home')}}"><img src="asset/img/footer-logo1.png" class="logo logo-display" alt=""><img src="asset/img/footer-logo1.png" class="logo logo-scrolled" alt=""></a> </div>
                <div class="collapse navbar-collapse" id="navbar-menu">


                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        

                        <li><a href="{{route('home.singin')}}" >Đăng Nhập</a></li>
                        <li><a href="{{route('home.register')}}">Đăng Ký</a></li>

                        <li class="left-br"><a href="{{route('tuyendung')}}" class="signin">Nhà tuyển dụng</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="clearfix"></div>
        <div class="banner">
            <div class="container">
                <div class="banner-caption">
                    <div class="col-md-12 col-sm-12 banner-text">
                        <h1>7,000+ công việc đang chờ bạn</h1>
                        <form class="form-horizontal">
                            <div class="col-md-4 no-padd">
                                <div class="input-group">
                                    <input type="text" class="form-control right-bor" placeholder="Tên công việc"> </div>
                                </div>
                                <div class="col-md-3 no-padd">
                                    <div class="input-group">
                                        <select class="selectpicker form-control" multiple title="Ngành Nghề">
                                                <option>Hà Nội</option>
                                                <option>Hà Tĩnh</option>
                                            </select>
                                    </div>
                                </div>
                                    <div class="col-md-3 no-padd">
                                        <div class="input-group">
                                            <select class="selectpicker form-control" multiple title="Địa Điểm">
                                                <option>Hà Nội</option>
                                                <option>Hà Tĩnh</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2 no-padd">
                                        <div class="input-group">
                                            <a class="btn btn-primary" href="{{route('vieclam.index')}}">Tìm kiếm</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="company-brand">
                        <div class="container">
                            <div id="company-brands" class="owl-carousel">
                                <div class="brand-img"><img src="asset/img/microsoft-home.png" class="img-responsive" alt="" /></div>
                                <div class="brand-img"><img src="asset/img/img-home.png" class="img-responsive" alt="" /></div>
                                <div class="brand-img"><img src="asset/img/mothercare-home.png" class="img-responsive" alt="" /></div>
                                <div class="brand-img"><img src="asset/img/paypal-home.png" class="img-responsive" alt="" /></div>
                                <div class="brand-img"><img src="asset/img/serv-home.png" class="img-responsive" alt="" /></div>
                                <div class="brand-img"><img src="asset/img/xerox-home.png" class="img-responsive" alt="" /></div>
                                <div class="brand-img"><img src="asset/img/yahoo-home.png" class="img-responsive" alt="" /></div>
                                <div class="brand-img"><img src="asset/img/mothercare-home.png" class="img-responsive" alt="" /></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>

            </div>
        <script type="text/javascript" src="{{asset('asset/js/jquery.min.js')}}"></script>
        <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('asset/js/bootsnav.js')}}"></script>
        <script src="{{asset('asset/js/viewportchecker.js')}}"></script>
        <script src="{{asset('asset/js/bootstrap-select.min.js')}}"></script>
        <script src="{{asset('asset/js/wysihtml5-0.3.0.js')}}"></script>
        <script src="{{asset('asset/js/bootstrap-wysihtml5.js')}}"></script>
        <script src="{{asset('asset/js/jQuery.style.switcher.js')}}"></script>
        <script type="text/javascript" src="{{asset('asset/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('asset/js/custom.js')}}"></script>
</body>

</html>