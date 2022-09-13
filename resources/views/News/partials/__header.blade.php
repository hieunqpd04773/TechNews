@php
    use Illuminate\Support\Facades\Auth;
@endphp
<header>
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <div class="topbar">
            <div class="content-topbar container h-100">
                <div class="left-topbar">
                    <span class="left-topbar-item flex-wr-s-c">
                        <span>
                            Da Nang, VN
                        </span>

                        <img class="m-b-1 m-rl-8" src="{{ URL::asset('images/icons/icon-night.png')}}" alt="IMG">

                        <span>
                            @php
                            use Carbon\Carbon;
                                $date= Carbon::now('Asia/Ho_Chi_Minh');
                                echo $date->toDayDateTimeString();
                                
                            @endphp
                        </span>
                    </span>

                    <a href="#" class="left-topbar-item">
                        Giới Thiệu
                    </a>

                    <a href="#" class="left-topbar-item">
                        Liên Hệ
                    </a>
                    @if (Auth::check()) 
                        <a href="" class="left-topbar-item">
                            Xin Chào {{Auth::user()->name}}
                        </a>
                        <a href="/logout" class="left-topbar-item">
                            Đăng Xuất
                        </a>
                    @else
                        <a href="/register" class="left-topbar-item">
                            Đăng ký
                        </a>

                        <a href="/login" class="left-topbar-item">
                            Đăng nhập
                        </a>
                    @endif
                    
                </div>

                <div class="right-topbar">
                    <a href="#">
                        <span class="fab fa-facebook-f"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-twitter"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-pinterest-p"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-vimeo-v"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-youtube"></span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Header Mobile -->
        <div class="wrap-header-mobile">
            <!-- Logo moblie -->		
            <div class="logo-mobile">
                <a href="index.html"><img src="{{ URL::asset('images/icons/logo-01.png')}}" alt="IMG-LOGO"></a>
            </div>

            <!-- Button show menu -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>

        <!-- Menu Mobile -->
        <div class="menu-mobile">
            <ul class="topbar-mobile">
                <li class="left-topbar">
                    <span class="left-topbar-item flex-wr-s-c">
                        <span>
                            Ha Noi, VN
                        </span>

                        <img class="m-b-1 m-rl-8" src="{{ URL::asset('images/icons/icon-night.png')}}" alt="IMG">

                        <span>
                            @php
                                echo $date->toDayDateTimeString();
                                
                            @endphp
                        </span>
                    </span>
                </li>

                <li class="left-topbar">
                    <a href="#" class="left-topbar-item">
                        Giới thiệu
                    </a>

                    <a href="#" class="left-topbar-item">
                        Liên hệ
                    </a>

                    <a href="#" class="left-topbar-item">
                        Đăng nhập
                    </a>

                    <a href="#" class="left-topbar-item">
                        Đăng ký
                    </a>
                </li>

                <li class="right-topbar">
                    <a href="#">
                        <span class="fab fa-facebook-f"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-twitter"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-pinterest-p"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-vimeo-v"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-youtube"></span>
                    </a>
                </li>
            </ul>

            <ul class="main-menu-m">
                <li>
                    <a href="/">Home</a>

                    <span class="arrow-main-menu-m">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </span>
                </li>

                <li>
                    <a href="category-01.html">News</a>
                </li>

                <li>
                    <a href="category-02.html">Entertainment </a>
                </li>

                <li>
                    <a href="category-01.html">Business</a>
                </li>

                <li>
                    <a href="category-02.html">Travel</a>
                </li>

                <li>
                    <a href="category-01.html">Life Style</a>
                </li>

                <li>
                    <a href="category-02.html">Video</a>
                </li>


            </ul>
        </div>
        
        <!--  -->
        <div class="wrap-logo container">
            <!-- Logo desktop -->		
            <div class="logo">
                <a href="/"><img src="{{ URL::asset('images/icons/logo-01.png')}}" alt="LOGO"></a>
            </div>	

            <!-- Banner -->
            <div class="banner-header">
                <a href="https://themewagon.com/themes/free-bootstrap-4-html5-news-website-template-magnews2/"><img src="{{ URL::asset('images/banner-01.jpg')}}" alt="IMG"></a>
            </div>
        </div>	
        
        <!-- Menu -->
        @include('News.partials.__menu')
    </div>
</header>