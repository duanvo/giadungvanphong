@extends('user_interface.user_layout')

@section('content')
	<div class="container-fluid">
		<div class="row fh5co-post-entry">
			<div class="products">Bán hàng <a href="{{route('banhang.all')}}" class="view_all">Xem tất cả</a></div>
			<div class="banhang">
				@foreach($banhang as $banhang)
				<article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box">
					<figure>
						<a href="{{route('detail_banhang',[tittle($banhang->tittle)])}}"><img src="{{$banhang->image_path}}" alt="Image" class="img-responsive"></a>
					</figure>
					<span class="fh5co-meta">
						@if($banhang->type == 'dienmay')
						 <a href="{{ route('banhang.dienmay') }}">(Điện máy)</a>
						@endif
						@if($banhang->type == 'vanphong')
						 <a href="{{ route('banhang.vanphong') }}">(Văn phòng)</a>
						@endif
						@if($banhang->type == 'dogiadung')
						 <a href="{{ route('banhang.dogiadung') }}">(Đồ gia dụng)</a>
						@endif
					</span>
					<h2 class="fh5co-article-title"><a href="{{route('detail_banhang',[tittle($banhang->tittle)])}}">{{convert_tittle($banhang->tittle)}}</a></h2>
					<span class="fh5co-meta fh5co-date" style="color: #123ede">{{$banhang->cost_discount}}</span>
					<span class="fh5co-meta fh5co-date" style="text-decoration: line-through;">{{$banhang->cost}}</span>
				</article>
				@endforeach
			</div>

			<div class="products">Mua bán đồ cũ <a href="{{route('muabandocu.all')}}" class="view_all">Xem tất cả</a></div>
			<div class="docu">
				@foreach($muabandocu as $muabandocu)
				<article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box">
					<figure>
						<a href="{{route('detail_muabandocu',[tittle($muabandocu->tittle)])}}"><img class="img-responsive chain" src="{{$muabandocu->image_path}}" alt=" " /></a>
					</figure>
					<span class="fh5co-meta"><a href="">({{convert_tittle($muabandocu->type)}})</a></span>
					<h2 class="fh5co-article-title"><a href="{{route('detail_muabandocu',[tittle($muabandocu->tittle)])}}">Tu lanh cu</a></h2>
					<span class="fh5co-meta fh5co-date">{{$muabandocu->cost}}</span>
				</article>
				@endforeach
			</div>
		</div>
	</div>
@stop