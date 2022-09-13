<div class="col-md-10 col-lg-4">
    <div class="p-l-10 p-rl-0-sr991 p-b-20">
        <!--  -->
        <div>
            <div class="how2 how2-cl4 flex-s-c">
                <h3 class="f1-m-2 cl3 tab01-title">
                    Phổ biến nhất
                </h3>
            </div>

            <ul class="p-t-35">
                @for($i=0;$i<count($tinPhoBien);$i++)
                <li class="flex-wr-sb-s p-b-22">
                    <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
                        {{$i+1}}
                    </div>

                    <a href="tin/{{$tinPhoBien[$i]->id}}" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03 tieude">
                        {{$tinPhoBien[$i]->tin_tieuDe}}
                    </a>
                </li>
                @endfor
            </ul>
        </div>

        <!--  -->
        <div class="flex-c-s p-t-8">
            <a href="#">
                <img class="max-w-full" src="images/banner-02.jpg" alt="IMG">
            </a>
        </div>
        
        <!--  -->
        <div class="p-t-50">
            <div class="how2 how2-cl4 flex-s-c">
                <h3 class="f1-m-2 cl3 tab01-title">
                    Stay Connected
                </h3>
            </div>

            <ul class="p-t-35">
                <li class="flex-wr-sb-c p-b-20">
                    <a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-facebook fs-16 cl0 hov-cl0">
                        <span class="fab fa-facebook-f"></span>
                    </a>

                    <div class="size-w-3 flex-wr-sb-c">
                        <span class="f1-s-8 cl3 p-r-20">
                            6879 Fans
                        </span>

                        <a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
                            Like
                        </a>
                    </div>
                </li>

                <li class="flex-wr-sb-c p-b-20">
                    <a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-twitter fs-16 cl0 hov-cl0">
                        <span class="fab fa-twitter"></span>
                    </a>

                    <div class="size-w-3 flex-wr-sb-c">
                        <span class="f1-s-8 cl3 p-r-20">
                            568 Followers
                        </span>

                        <a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
                            Follow
                        </a>
                    </div>
                </li>

                <li class="flex-wr-sb-c p-b-20">
                    <a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-youtube fs-16 cl0 hov-cl0">
                        <span class="fab fa-youtube"></span>
                    </a>

                    <div class="size-w-3 flex-wr-sb-c">
                        <span class="f1-s-8 cl3 p-r-20">
                            5039 Subscribers
                        </span>

                        <a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
                            Subscribe
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>