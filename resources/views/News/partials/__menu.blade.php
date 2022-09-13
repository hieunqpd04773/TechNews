<div class="wrap-main-nav">
    <div class="main-nav">
        <!-- Menu desktop -->
        <nav class="menu-desktop">
            <a class="logo-stick" href="/">
                <img src="{{ URL::asset('images/icons/logo-01.png')}}" alt="LOGO">
            </a>

            <ul class="main-menu">
                <li class="main-menu-item">
                    <a href="/">Home</a>
                </li>
            @foreach ($allDanhMuc as $danhMuc)
                @if (isset($listTin))
                    @if ($danhMuc->id==$listTin[0]->danhMuc_id)
                        <li class="main-menu-active">
                            <a href="{{route('getTinByDanhMuc',$danhMuc->id)}}">{{$danhMuc->danhMuc_ten}}</a>  
                        </li>
                    @else
                        <li class="main-menu-item">
                            <a href="{{route('getTinByDanhMuc',$danhMuc->id)}}">{{$danhMuc->danhMuc_ten}}</a>  
                        </li>
                    @endif
                @else
                    <li class="main-menu-item">
                        <a href="{{route('getTinByDanhMuc',$danhMuc->id)}}">{{$danhMuc->danhMuc_ten}}</a>  
                    </li>
                @endif
                
            @endforeach
            </ul>
        </nav>
    </div>
</div>	