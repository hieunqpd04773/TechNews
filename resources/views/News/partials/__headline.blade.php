<div class="container">
    <div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
        <div class="f2-s-1 p-r-30 size-w-0 m-tb-6 flex-wr-s-c">
            <span class="text-uppercase cl2 p-r-8">
                Tin nóng:
            </span>

            <span class="dis-inline-block cl6 slide100-txt pos-relative size-w-0" data-in="fadeInDown" data-out="fadeOutDown">
                @foreach ($tinPhoBien as $tin)
                <span class="dis-inline-block slide100-txt-item animated visible-false">
                    {{$tin->tin_tieuDe}}
                </span>
                @endforeach
            </span>
        </div>
        <form action="{{route('search')}}" method="POST">
            @csrf
        <div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">  
                <input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="tukhoa" placeholder="Tìm kiếm">
                <button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">
                    <i class="zmdi zmdi-search"></i>
                </button> 
        </div>
        </form>
    </div>
</div>