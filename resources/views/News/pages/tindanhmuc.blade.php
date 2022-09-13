@extends('News.layout.master')
@section('noidung')
<style>
    .container {max-width: 1080px;}
</style>

	<!-- Post -->
	<section class="bg0 p-b-25">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 p-b-80">
					<div class="row">
						<div class="col-sm-6 p-r-25 p-r-15-sr991">
							<!-- Item -->
						@if (isset($listTin))	
                        @for ($i=0;$i<count($listTin);$i+=2)
							<div class="p-b-53">
								<a href="/tin/{{$listTin[$i]->id}}" class="wrap-pic-w hov1 trans-03">
									<img src="{{asset('images/tin/'.$listTin[$i]->tin_anhBia)}}" alt="IMG">
								</a>

								<div class="flex-col-s-c p-t-16">
									<h5 class="p-b-5 txt-center">
										<a href="/tin/{{$listTin[$i]->id}}" class="f1-m-3 cl2 hov-cl10 trans-03 tieude">
											{{$listTin[$i]->tin_tieuDe}}
										</a>
									</h5>

									<div class="cl8 txt-center p-b-17">
										<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
											{{$listTin[$i]->User->name}}
										</a>

										<span class="f1-s-3 m-rl-3">
											-
										</span>

										<span class="f1-s-3">
											{{$listTin[$i]->tin_ngayDang}}
										</span>
									</div>

									<p class="f1-s-11 cl6 txt-center p-b-16 tomtat">
										{{$listTin[$i]->tin_tomTat}}
									</p>

									<a href="/tin/{{$listTin[$i]->id}}" class="f1-s-1 cl9 hov-cl10 trans-03">
										Read More
										<i class="m-l-2 fa fa-long-arrow-alt-right"></i>
									</a>
								</div>
							</div>
                        @endfor	
						</div>
						<div class="col-sm-6 p-r-25 p-r-15-sr991">
							<!-- Item -->							
                        @for ($i=1;$i<count($listTin);$i+=2)
							<div class="p-b-53">
								<a href="/tin/{{$listTin[$i]->id}}" class="wrap-pic-w hov1 trans-03">
									<img src="{{asset('images/tin/'.$listTin[$i]->tin_anhBia)}}" alt="IMG">
								</a>

								<div class="flex-col-s-c p-t-16">
									<h5 class="p-b-5 txt-center">
										<a href="/tin/{{$listTin[$i]->id}}" class="f1-m-3 cl2 hov-cl10 trans-03 tieude">
											{{$listTin[$i]->tin_tieuDe}}
										</a>
									</h5>

									<div class="cl8 txt-center p-b-17">
										<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
											{{$listTin[$i]->User->name}}
										</a>

										<span class="f1-s-3 m-rl-3">
											-
										</span>

										<span class="f1-s-3">
											{{$listTin[$i]->tin_ngayDang}}
										</span>
									</div>

									<p class="f1-s-11 cl6 txt-center p-b-16 tomtat">
										{{$listTin[$i]->tin_tomTat}}
									</p>

									<a href="{{$listTin[$i]->id}}" class="f1-s-1 cl9 hov-cl10 trans-03">
										Read More
										<i class="m-l-2 fa fa-long-arrow-alt-right"></i>
									</a>
								</div>
							</div>
                        @endfor	
						@else
						<h3>Không tìm thấy kết quả</h3>
						@endif
						</div>
						
					</div>

					<!-- Pagination -->
					<div class="flex-wr-c-c m-rl--7 p-t-28">
						<a href="#" class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7 pagi-active">1</a>
						<a href="#" class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7">2</a>
					</div>
				</div>

				<div class="col-md-10 col-lg-4 p-b-80">
					<div class="p-l-10 p-rl-0-sr991">
						<!-- Banner -->
						<div class="flex-c-s p-b-60">
							<a href="#">
								<img class="max-w-full" src="{{asset('images/banner-02.jpg')}}" alt="IMG">
							</a>
						</div>
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
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection