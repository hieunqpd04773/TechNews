@extends('News.layout.master')
@section('noidung')
<section class="bg0 p-b-140 p-t-10">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 p-b-30">
                <div class="p-r-10 p-r-0-sr991">
                    <!-- Blog Detail -->
                    <div class="p-b-70">
                        <a href="#" class="f1-s-10 cl2 hov-cl10 trans-03 text-uppercase">
                            {{$chitiettin->DanhMuc->danhMuc_ten}}
                        </a>

                        <h3 class="f1-l-3 cl2 p-b-16 p-t-33 respon2">
                            {{$chitiettin->tin_tieuDe}}
                        </h3>
                        
                        <div class="flex-wr-s-s p-b-40">
                            <span class="f1-s-3 cl8 m-r-15">
                                <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                    {{$chitiettin->User->name}}
                                </a>

                                <span class="m-rl-3">-</span>

                                <span>
                                    {{$chitiettin->tin_ngayDang}}
                                </span>
                            </span>

                            <span class="f1-s-3 cl8 m-r-15">
                                {{$chitiettin->tin_luotXem}} Lượt Xem
                            </span>

                            <a href="#" class="f1-s-3 cl8 hov-cl10 trans-03 m-r-15">
                                0 Comment
                            </a>
                        </div>

                        <div class="wrap-pic-max-w p-b-30">
                            <img src="{{asset('images/tin/'.$chitiettin->tin_anhBia)}}" alt="IMG">
                        </div>

                        <p class="f1-s-11 cl6 p-b-25">
                            {{$chitiettin->tin_noiDung}}
                        </p>

                        <!-- Tag -->
                        <div class="flex-s-s p-t-12 p-b-15">
                            <span class="f1-s-12 cl5 m-r-8">
                                Tags:
                            </span>
                            
                            <div class="flex-wr-s-s size-w-0">
                                <a href="#" class="f1-s-12 cl8 hov-link1 m-r-15">
                                    Streetstyle
                                </a>

                                <a href="#" class="f1-s-12 cl8 hov-link1 m-r-15">
                                    Crafts
                                </a>
                            </div>
                        </div>

                        <!-- Share -->
                        <div class="flex-s-s">
                            <span class="f1-s-12 cl5 p-t-1 m-r-15">
                                Share:
                            </span>
                            
                            <div class="flex-wr-s-s size-w-0">
                                <a href="#" class="dis-block f1-s-13 cl0 bg-facebook borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                                    <i class="fab fa-facebook-f m-r-7"></i>
                                    Facebook
                                </a>

                                <a href="#" class="dis-block f1-s-13 cl0 bg-twitter borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                                    <i class="fab fa-twitter m-r-7"></i>
                                    Twitter
                                </a>

                                <a href="#" class="dis-block f1-s-13 cl0 bg-google borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                                    <i class="fab fa-google-plus-g m-r-7"></i>
                                    Google+
                                </a>

                                <a href="#" class="dis-block f1-s-13 cl0 bg-pinterest borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                                    <i class="fab fa-pinterest-p m-r-7"></i>
                                    Pinterest
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Leave a comment -->

                    <div>
                        <h4 style="font-size: 20px" class="f1-s-10 cl2 hov-cl10 trans-03 text-uppercase ">Bình Luận:</h4>
                    @foreach ($binhLuan as $bl)
                        <p style="margin-top: 8px; " class="f1-s-12 cl8 hov-cl10 trans-03">{{$bl->User->name}}: <i class="cl8" style="font-weight: normal;">{{$bl->bl_noiDung}}</i></p>
                    @endforeach

                        @if (Auth::check()) 
                        <form method="POST" action="{{route('addComment')}}">
                            @csrf
                            <input type="hidden" name="tin_id" value="{{$chitiettin->id}}">
                            <input type="hidden" name="nguoiDung_id" value="{{Auth::user()->id}}">
                            <textarea class="bo-1-rad-3 bocl13 size-a-15 f1-s-13 cl5 plh6 p-rl-18 p-tb-14 m-b-20" name="bl_noiDung" placeholder="Comment..."></textarea>

                            <button class="size-a-17 bg2 borad-3 f1-s-12 cl0 hov-btn1 trans-03 p-rl-15 m-t-10">
                                Post Comment
                            </button>
                        </form>
                        @endif
                    </div>
                    
                </div>
            </div>
            
            <!-- Sidebar -->
            <div class="col-md-10 col-lg-4 p-b-30">
                <div class="p-l-10 p-rl-0-sr991 p-t-70">						
                    <!-- Category -->
                    <div class="p-b-60">
                        <div class="how2 how2-cl4 flex-s-c">
                            <h3 class="f1-m-2 cl3 tab01-title">
                                Danh Mục
                            </h3>
                        </div>

                        <ul class="p-t-35">
                            @foreach ($allDanhMuc as $danhMuc)
                            <li class="how-bor3 p-rl-4">
                                <a href="danhmuc/{{$danhMuc->id}}" class="dis-block f1-s-10 text-uppercase cl2 hov-cl10 trans-03 p-tb-13">
                                    {{$danhMuc->danhMuc_ten}}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>


                    <!-- Popular Posts -->
                    <div class="p-b-30">
                        <div class="how2 how2-cl4 flex-s-c">
                            <h3 class="f1-m-2 cl3 tab01-title">
                                Tin Phổ Biến
                            </h3>
                        </div>

                        <ul class="p-t-35">
                            @foreach ($tinPhoBien as $tin)
                            <li class="flex-wr-sb-s p-b-30">
                                <a href="tin/{{$tin->id}}" class="size-w-10 wrap-pic-w hov1 trans-03">
                                    <img src="{{asset('images/tin/'.$tin->tin_anhBia)}}" alt="IMG">
                                </a>

                                <div class="size-w-11">
                                    <h6 class="p-b-4">
                                        <a href="tin/{{$tin->id}}" class="f1-s-5 cl3 hov-cl10 trans-03 tieude">
                                            {{$tin->tin_tieuDe}}
                                        </a>
                                    </h6>

                                    <span class="cl8 txt-center p-b-24">
                                        <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                            {{$tin->DanhMuc->danhMuc_ten}}
                                        </a>

                                        <span class="f1-s-3 m-rl-3">
                                            -
                                        </span>

                                        <span class="f1-s-3">
                                            {{$tin->tin_ngayDang}}
                                        </span>
                                    </span>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
