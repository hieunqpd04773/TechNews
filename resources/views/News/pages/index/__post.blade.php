@php
    extract($data)
@endphp
<section class="bg0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="p-b-20">
                    <!-- Điện thoại -->
                    <div class="tab01 p-b-20">
                        <div class="tab01-head how2 how2-cl1 bocl12 flex-s-c m-r-10 m-r-0-sr991">
                            <!-- Brand tab -->
                            <h3 class="f1-m-2 cl12 tab01-title">
                                Điện Thoại
                            </h3>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tab1-1" role="tab">All</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab1-2" role="tab">Celebrity</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab1-3" role="tab">Movies</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab1-4" role="tab">Music</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab1-5" role="tab">Games</a>
                                </li>

                                <li class="nav-item-more dropdown dis-none">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        
                                    </ul>
                                </li>
                            </ul>

                            <!--  -->
                            <a href="category-01.html" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
                                View all
                                <i class="fs-12 m-l-5 fa fa-caret-right"></i>
                            </a>
                        </div>
                            

                        <!-- Tab panes -->
                        <div class="tab-content p-t-35">
                            <!-- - -->
                            <div class="tab-pane fade show active" id="tab1-1" role="tabpanel">
                                <div class="row">
                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        
                                        <!-- Item post -->	
                                        <div class="m-b-30">
                                            <a href="tin/{{$listTinDienThoai[0]->tinID}}" class="wrap-pic-w hov1 trans-03">
                                                <img src="images/tin/{{$listTinDienThoai[0]->tin_anhBia}}" alt="IMG">
                                            </a>

                                            <div class="p-t-20">
                                                <h5 class="p-b-5">
                                                    <a href="tin/{{$listTinDienThoai[0]->tinID}}" class="f1-m-3 cl2 hov-cl10 trans-03">
                                                        {{$listTinDienThoai[0]->tin_tieuDe}} 
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                                        by {{$listTinDienThoai[0]->User->name}}
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        {{date_format($listTinDienThoai[0]->tin_ngayDang,'Y-m-d')}}
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->
                                        @for($i=1;$i<count($listTinDienThoai);$i++)	
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="tin/{{$listTinDienThoai[$i]->tinID}}" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="images/tin/{{$listTinDienThoai[$i]->tin_anhBia}}" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="tin/{{$listTinDienThoai[$i]->tinID}}" class="f1-s-5 cl3 hov-cl10 trans-03 tieude">
                                                        {{$listTinDienThoai[$i]->tin_tieuDe}}
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        {{$listTinDienThoai[$i]->User->name}}
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        {{date_format($listTinDienThoai[$i]->tin_ngayDang,'Y-m-d')}}
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        @endfor
                                        
                                    </div>
                                </div>
                            </div>

                            <!-- - -->
                            <div class="tab-pane fade" id="tab1-2" role="tabpanel">
                                <div class="row">
                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->	
                                        <div class="m-b-30">
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="images/post-09.jpg" alt="IMG">
                                            </a>

                                            <div class="p-t-20">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                                                        American live music lorem ipsum dolor sit amet consectetur 
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 18
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="images/post-08.jpg" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Celebrity
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 12
                                                    </span>
                                                </span>
                                            </div>
                                        </div>

                                        <!-- Item post -->	
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="images/post-06.jpg" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 17
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        
                                        <!-- Item post -->
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="images/post-07.jpg" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Game
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 16
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- - -->
                            <div class="tab-pane fade" id="tab1-3" role="tabpanel">
                                <div class="row">
                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->	
                                        <div class="m-b-30">
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="images/post-08.jpg" alt="IMG">
                                            </a>

                                            <div class="p-t-20">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                                                        American live music lorem ipsum dolor sit amet consectetur 
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 18
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="images/post-07.jpg" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Celebrity
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 12
                                                    </span>
                                                </span>
                                            </div>
                                        </div>

                                        <!-- Item post -->	
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="images/post-06.jpg" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 17
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        
                                        <!-- Item post -->
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="images/post-05.jpg" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Game
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 16
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- - -->
                            <div class="tab-pane fade" id="tab1-4" role="tabpanel">
                                <div class="row">
                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->	
                                        <div class="m-b-30">
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="images/post-06.jpg" alt="IMG">
                                            </a>

                                            <div class="p-t-20">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                                                        American live music lorem ipsum dolor sit amet consectetur 
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 18
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="images/post-09.jpg" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Celebrity
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 12
                                                    </span>
                                                </span>
                                            </div>
                                        </div>

                                        <!-- Item post -->	
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="images/post-07.jpg" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 17
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        
                                        <!-- Item post -->
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="images/post-08.jpg" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Game
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 16
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- - -->
                            <div class="tab-pane fade" id="tab1-5" role="tabpanel">
                                <div class="row">
                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->	
                                        <div class="m-b-30">
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="images/post-07.jpg" alt="IMG">
                                            </a>

                                            <div class="p-t-20">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                                                        American live music lorem ipsum dolor sit amet consectetur 
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 18
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="images/post-08.jpg" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Celebrity
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 12
                                                    </span>
                                                </span>
                                            </div>
                                        </div>

                                        <!-- Item post -->	
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="images/post-06.jpg" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 17
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        
                                        <!-- Item post -->
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="images/post-09.jpg" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Game
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 16
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Social -->
                    <div class="tab01 p-b-20">
                        <div class="tab01-head how2 how2-cl1 bocl12 flex-s-c m-r-10 m-r-0-sr991">
                            <!-- Brand tab -->
                            <h3 class="f1-m-2 cl12 tab01-title">
                                Social
                            </h3>

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tab1-1" role="tab">All</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab1-2" role="tab">Celebrity</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab1-3" role="tab">Movies</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab1-4" role="tab">Music</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab1-5" role="tab">Games</a>
                                </li>

                                <li class="nav-item-more dropdown dis-none">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        
                                    </ul>
                                </li>
                            </ul>

                            <!--  -->
                            <a href="category-01.html" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
                                View all
                                <i class="fs-12 m-l-5 fa fa-caret-right"></i>
                            </a>
                        </div>
                            

                        <!-- Tab panes -->
                        <div class="tab-content p-t-35">
                            <!-- - -->
                            <div class="tab-pane fade show active" id="tab1-1" role="tabpanel">
                                <div class="row">
                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        
                                        <!-- Item post -->	
                                        <div class="m-b-30">
                                            <a href="tin/{{$listTinSocial[0]->tinID}}" class="wrap-pic-w hov1 trans-03">
                                                <img src="images/tin/{{$listTinSocial[0]->tin_anhBia}}" alt="IMG">
                                            </a>

                                            <div class="p-t-20">
                                                <h5 class="p-b-5">
                                                    <a href="tin/{{$listTinSocial[0]->tinID}}" class="f1-m-3 cl2 hov-cl10 trans-03 tieude">
                                                        {{$listTinSocial[0]->tin_tieuDe}} 
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                                        by {{$listTinSocial[0]->User->name}}
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        {{date_format($listTinSocial[0]->tin_ngayDang,'Y-m-d')}}
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->
                                        @for($i=1;$i<count($listTinSocial);$i++)	
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="tin/{{$listTinSocial[$i]->tinID}}" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="images/tin/{{$listTinSocial[$i]->tin_anhBia}}" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="tin/{{$listTinSocial[$i]->tinID}}" class="f1-s-5 cl3 hov-cl10 trans-03 tieude">
                                                        {{$listTinSocial[$i]->tin_tieuDe}}
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        {{$listTinSocial[$i]->tk_hoTen}}
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        {{date_format($listTinSocial[$i]->tin_ngayDang,'Y-m-d')}}
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        @endfor
                                        
                                    </div>
                                </div>
                            </div>

                            <!-- - -->
                            <div class="tab-pane fade" id="tab1-2" role="tabpanel">
                                <div class="row">
                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->	
                                        <div class="m-b-30">
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="images/post-09.jpg" alt="IMG">
                                            </a>

                                            <div class="p-t-20">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                                                        American live music lorem ipsum dolor sit amet consectetur 
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 18
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="images/post-08.jpg" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Celebrity
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 12
                                                    </span>
                                                </span>
                                            </div>
                                        </div>

                                        <!-- Item post -->	
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="images/post-06.jpg" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 17
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        
                                        <!-- Item post -->
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="images/post-07.jpg" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Game
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 16
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- - -->
                            <div class="tab-pane fade" id="tab1-3" role="tabpanel">
                                <div class="row">
                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->	
                                        <div class="m-b-30">
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="images/post-08.jpg" alt="IMG">
                                            </a>

                                            <div class="p-t-20">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                                                        American live music lorem ipsum dolor sit amet consectetur 
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 18
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="images/post-07.jpg" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Celebrity
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 12
                                                    </span>
                                                </span>
                                            </div>
                                        </div>

                                        <!-- Item post -->	
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="images/post-06.jpg" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 17
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        
                                        <!-- Item post -->
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="images/post-05.jpg" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Game
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 16
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- - -->
                            <div class="tab-pane fade" id="tab1-4" role="tabpanel">
                                <div class="row">
                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->	
                                        <div class="m-b-30">
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="images/post-06.jpg" alt="IMG">
                                            </a>

                                            <div class="p-t-20">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                                                        American live music lorem ipsum dolor sit amet consectetur 
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 18
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="images/post-09.jpg" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Celebrity
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 12
                                                    </span>
                                                </span>
                                            </div>
                                        </div>

                                        <!-- Item post -->	
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="images/post-07.jpg" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 17
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        
                                        <!-- Item post -->
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="images/post-08.jpg" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Game
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 16
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- - -->
                            <div class="tab-pane fade" id="tab1-5" role="tabpanel">
                                <div class="row">
                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->	
                                        <div class="m-b-30">
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="images/post-07.jpg" alt="IMG">
                                            </a>

                                            <div class="p-t-20">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                                                        American live music lorem ipsum dolor sit amet consectetur 
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 18
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="images/post-08.jpg" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Celebrity
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 12
                                                    </span>
                                                </span>
                                            </div>
                                        </div>

                                        <!-- Item post -->	
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="images/post-06.jpg" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 17
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        
                                        <!-- Item post -->
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="images/post-09.jpg" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Game
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 16
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blockchain -->
                    <div class="tab01 p-b-20">
                        <div class="tab01-head how2 how2-cl1 bocl12 flex-s-c m-r-10 m-r-0-sr991">
                            <!-- Brand tab -->
                            <h3 class="f1-m-2 cl12 tab01-title">
                                Blockchain
                            </h3>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tab1-1" role="tab">All</a>
                                </li>
                    
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab1-2" role="tab">Celebrity</a>
                                </li>
                    
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab1-3" role="tab">Movies</a>
                                </li>
                    
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab1-4" role="tab">Music</a>
                                </li>
                    
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab1-5" role="tab">Games</a>
                                </li>
                    
                                <li class="nav-item-more dropdown dis-none">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </a>
                    
                                    <ul class="dropdown-menu">
                                        
                                    </ul>
                                </li>
                            </ul>
                    
                            <!--  -->
                            <a href="category-01.html" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
                                View all
                                <i class="fs-12 m-l-5 fa fa-caret-right"></i>
                            </a>
                        </div>
                            
                    
                        <!-- Tab panes -->
                        <div class="tab-content p-t-35">
                            <!-- - -->
                            <div class="tab-pane fade show active" id="tab1-1" role="tabpanel">
                                <div class="row">
                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        
                                        <!-- Item post -->	
                                        <div class="m-b-30">
                                            <a href="tin/{{$listTinBlockChain[0]->tinID}}" class="wrap-pic-w hov1 trans-03">
                                                <img src="images/tin/{{$listTinBlockChain[0]->tin_anhBia}}" alt="IMG">
                                            </a>
                    
                                            <div class="p-t-20">
                                                <h5 class="p-b-5">
                                                    <a href="tin/{{$listTinBlockChain[0]->tinID}}" class="f1-m-3 cl2 hov-cl10 trans-03">
                                                        {{$listTinBlockChain[0]->tin_tieuDe}} 
                                                    </a>
                                                </h5>
                    
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                                        by {{$listTinBlockChain[0]->User->name}}
                                                    </a>
                    
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                    
                                                    <span class="f1-s-3">
                                                        {{date_format($listTinBlockChain[0]->tin_ngayDang,'Y-m-d')}}
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                    
                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->
                                        @for($i=1;$i<count($listTinBlockChain);$i++)	
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="tin/{{$listTinBlockChain[$i]->tinID}}" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="images/tin/{{$listTinBlockChain[$i]->tin_anhBia}}" alt="IMG">
                                            </a>
                    
                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="tin/{{$listTinBlockChain[$i]->tinID}}" class="f1-s-5 cl3 hov-cl10 trans-03 tieude">
                                                        {{$listTinBlockChain[$i]->tin_tieuDe}}
                                                    </a>
                                                </h5>
                    
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        {{$listTinBlockChain[$i]->User->name}}
                                                    </a>
                    
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                    
                                                    <span class="f1-s-3">
                                                        {{date_format($listTinBlockChain[$i]->tin_ngayDang,'Y-m-d')}}
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        @endfor
                                        
                                    </div>
                                </div>
                            </div>
                    
                            <!-- - -->
                            <div class="tab-pane fade" id="tab1-2" role="tabpanel">
                                <div class="row">
                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->	
                                        <div class="m-b-30">
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="images/post-09.jpg" alt="IMG">
                                            </a>
                    
                                            <div class="p-t-20">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                                                        American live music lorem ipsum dolor sit amet consectetur 
                                                    </a>
                                                </h5>
                    
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>
                    
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                    
                                                    <span class="f1-s-3">
                                                        Feb 18
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                    
                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="images/post-08.jpg" alt="IMG">
                                            </a>
                    
                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>
                    
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Celebrity
                                                    </a>
                    
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                    
                                                    <span class="f1-s-3">
                                                        Feb 12
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                    
                                        <!-- Item post -->	
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="images/post-06.jpg" alt="IMG">
                                            </a>
                    
                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>
                    
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>
                    
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                    
                                                    <span class="f1-s-3">
                                                        Feb 17
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        
                                        <!-- Item post -->
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="images/post-07.jpg" alt="IMG">
                                            </a>
                    
                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>
                    
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Game
                                                    </a>
                    
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                    
                                                    <span class="f1-s-3">
                                                        Feb 16
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- - -->
                            <div class="tab-pane fade" id="tab1-3" role="tabpanel">
                                <div class="row">
                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->	
                                        <div class="m-b-30">
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="images/post-08.jpg" alt="IMG">
                                            </a>
                    
                                            <div class="p-t-20">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                                                        American live music lorem ipsum dolor sit amet consectetur 
                                                    </a>
                                                </h5>
                    
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>
                    
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                    
                                                    <span class="f1-s-3">
                                                        Feb 18
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                    
                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="images/post-07.jpg" alt="IMG">
                                            </a>
                    
                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>
                    
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Celebrity
                                                    </a>
                    
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                    
                                                    <span class="f1-s-3">
                                                        Feb 12
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                    
                                        <!-- Item post -->	
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="images/post-06.jpg" alt="IMG">
                                            </a>
                    
                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>
                    
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>
                    
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                    
                                                    <span class="f1-s-3">
                                                        Feb 17
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        
                                        <!-- Item post -->
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="images/post-05.jpg" alt="IMG">
                                            </a>
                    
                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>
                    
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Game
                                                    </a>
                    
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                    
                                                    <span class="f1-s-3">
                                                        Feb 16
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- - -->
                            <div class="tab-pane fade" id="tab1-4" role="tabpanel">
                                <div class="row">
                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->	
                                        <div class="m-b-30">
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="images/post-06.jpg" alt="IMG">
                                            </a>
                    
                                            <div class="p-t-20">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                                                        American live music lorem ipsum dolor sit amet consectetur 
                                                    </a>
                                                </h5>
                    
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>
                    
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                    
                                                    <span class="f1-s-3">
                                                        Feb 18
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                    
                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="images/post-09.jpg" alt="IMG">
                                            </a>
                    
                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>
                    
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Celebrity
                                                    </a>
                    
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                    
                                                    <span class="f1-s-3">
                                                        Feb 12
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                    
                                        <!-- Item post -->	
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="images/post-07.jpg" alt="IMG">
                                            </a>
                    
                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>
                    
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>
                    
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                    
                                                    <span class="f1-s-3">
                                                        Feb 17
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        
                                        <!-- Item post -->
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="images/post-08.jpg" alt="IMG">
                                            </a>
                    
                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>
                    
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Game
                                                    </a>
                    
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                    
                                                    <span class="f1-s-3">
                                                        Feb 16
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- - -->
                            <div class="tab-pane fade" id="tab1-5" role="tabpanel">
                                <div class="row">
                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->	
                                        <div class="m-b-30">
                                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                <img src="images/post-07.jpg" alt="IMG">
                                            </a>
                    
                                            <div class="p-t-20">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                                                        American live music lorem ipsum dolor sit amet consectetur 
                                                    </a>
                                                </h5>
                    
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>
                    
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                    
                                                    <span class="f1-s-3">
                                                        Feb 18
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                    
                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="images/post-08.jpg" alt="IMG">
                                            </a>
                    
                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>
                    
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Celebrity
                                                    </a>
                    
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                    
                                                    <span class="f1-s-3">
                                                        Feb 12
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                    
                                        <!-- Item post -->	
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="images/post-06.jpg" alt="IMG">
                                            </a>
                    
                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>
                    
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>
                    
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                    
                                                    <span class="f1-s-3">
                                                        Feb 17
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        
                                        <!-- Item post -->
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="images/post-09.jpg" alt="IMG">
                                            </a>
                    
                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>
                    
                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Game
                                                    </a>
                    
                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>
                    
                                                    <span class="f1-s-3">
                                                        Feb 16
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('News.partials.__sidebar')
        </div>
    </div>
</section>