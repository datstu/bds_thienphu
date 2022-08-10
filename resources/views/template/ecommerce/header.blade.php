<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>NGA THINKPAD - Kho Laptop dòng máy Thinkpad, xuất xứ Nhật Bản </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


    {{-- SEO --}}
    <meta name="description" content="{{$meta_desc}}">
    <meta name="keywords" content="{{$meta_keywords}}" />
    <meta name="robots" content="INDEX,FOLLOW" />
    <link rel="canonical" href="{{$url_canonical}}" />
    <meta property="og:title" content="{{$meta_title}}" />

    <meta property="og:description" content="{{$meta_desc}}" />
    <meta property="og:title" content="{{$meta_title}}" />
    <meta property="og:url" content="{{$url_canonical}}" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="ngathinkpad.com" />


    {{-- AND SEO --}}
    <!-- Favicon -->
    <link rel="icon" href="{{asset('public/frontend/images/faviconico.png')}}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/frontend/images/faviconico.png')}}" />

    <!-- Google Fonts -->
    <link href="{{asset('public/ecommerce/fonts/font-google.css')}}" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="{{asset('public/ecommerce/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{asset('public/ecommerce/lib/slick/slick.css')}}" rel="stylesheet">
    <link href="{{asset('public/ecommerce/lib/slick/slick-theme.css')}}" rel="stylesheet">


    <!-- Template Stylesheet -->
    <link href="{{asset('public/ecommerce/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('public/ecommerce/css/sweetalert.css')}}" rel="stylesheet">
    <link href="{{asset('public/ecommerce/css/cart-mobile.css')}}" rel="stylesheet">
</head>
<style>

</style>

<body>

    <!-- Top bar Start -->
    <div class="top-bar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <i class="fa fa-envelope"></i>
                    nguyenhongnga256153@gmail.com
                </div>
                <div class="col-sm-6">
                    <i class="fa fa-phone-alt"></i>
                    +(84) 779 444 222
                </div>
            </div>
        </div>
    </div>
    <!-- Top bar End -->

    <!-- Nav Bar Start -->
    <div class="nav" id="menu-scroll">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                <button type="button" style="padding: 0; " class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="logo-mobile">
                    <a href="{{URL::to('trang-chu')}}"><img src="{{asset('public/frontend/images/new-logo-mobile.png')}}" alt="Nga Thinkpad laptop sách tay Nhật Bản"></a>
                </div>

                <form action="{{URL::to('/search-home')}}" method="get">
                    <div id="search-center-mobile" style="display: none">
                        <div class="search">
                            <input type="text" name="searchFE" placeholder="Tìm sản phẩm, thương hiệu, dịch vụ">

                        </div>
                    </div>
                </form>
                <a href="{{URL::to('/gio-hang')}}" class="btn cart mobile-lea">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="qty-lea-mobile">
                        <?php
                        $content = Cart::getContent();
                        if (count($content) > 0) {
                        ?>
                        <?php echo count($content);
                        } else {
                            echo '0';
                        } ?> </span>

                </a>
                <?php $active = '';
                $activeMenu = 0;
                $uri = $_SERVER['REQUEST_URI'];
                switch (trim($uri)) {
                        //case '/trang-chu': $activeMenu = 0; break;
                    case '/danh-sach-san-pham':
                        $activeMenu = 1;
                        break;
                    case '/tra-cuu-don-hang':
                        $activeMenu = 2;
                        break;
                    case '/ve-chung-toi':
                        $activeMenu = 3;
                        break;
                    default:
                        $activeMenu = 0;
                }

                ?>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto">
                        <a href="{{URL::to('/trang-chu')}}" class="nav-item nav-link <?php echo ($activeMenu == 0) ? 'active' : ''; ?>">Trang chủ</a>
                        <a href="{{URL::to('/danh-sach-san-pham')}}" class="nav-item nav-link <?php echo ($activeMenu == 1) ? 'active' : ''; ?>">Sản phẩm </a>
                        <!-- <a href="{{URL::to('/tin-tuc')}}" class="nav-item nav-link">Tin tức</a> -->
                        <a href="{{URL::to('/tra-cuu-don-hang')}}" class="nav-item nav-link <?php echo ($activeMenu == 2) ? 'active' : ''; ?>">Tra cứu đơn hàng </a>
                        <a href="{{URL::to('/ve-chung-toi')}}" class="nav-item nav-link <?php echo ($activeMenu == 3) ? 'active' : ''; ?>">Giới thiệu</a>

                    </div>
                    <div class="navbar-nav ml-auto">
                        <div class="nav-item dropdown">


                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Tài khoản</a>


                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Nav Bar End -->

    <!-- Bottom Bar Start -->
    <div class="bottom-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <div class="logo">
                        <a href="{{URL::to('trang-chu')}}"><img src="{{asset('public/frontend/images/logo-desk.png')}}" alt="Nga Thinkpad chuyên laptop sách tay"></a>
                    </div>


                </div>

                <div class="col-md-6">
                    <form action="{{URL::to('/search-home')}}" method="get">
                        @csrf
                        <div class="search">
                            <input id="search-lea-input" name="searchFE" type="text" placeholder="Tìm sản phẩm, thương hiệu, dịch vụ">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>

                <div class="col-md-3">
                    <div class="user user-mobile">
                        <a href="#" class="btn wishlist">
                            <i class="fa fa-heart"></i>
                            <span>(0)</span>
                        </a>
                        <a href="{{URL::to('/gio-hang')}}" class="btn cart">
                            <i class="fa fa-shopping-cart"></i>
                            <?php
                            $content = Cart::getContent();
                            if (count($content) > 0) {
                            ?>
                                <span id="count-item"><?php echo count($content);
                                                    } else {
                                                        echo '(0)';
                                                    } ?> </span>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bottom Bar End -->