
	@extends('user_interface.user_layout')

	@section('content')
	<div class="container-fluid">
		<div class="women-product">
			<div class=" w_content">
				<div class="women">
					<h4 style="float: left;font-family: fantasy;">Bán Đồ Cũ</h4>
					<a><h4 style="float: right;text-transform: capitalize;">Tổng sản phẩm - <span>{{$total_product}} sản phẩm</span> </h4></a>
				     <div class="clearfix"> </div>
				</div>
			</div>
			<!-- grids_of_4 -->
			<div class="row fh5co-post-entry">
				@foreach ($muabandocu_bandocu as $banhang)
				<article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box">
					<figure>
						<a href="{{route('detail_banhang',[tittle($banhang->tittle)])}}"><img src="http://localhost/giadungvanphong/{{$banhang->image_path}}" alt="Image" class="img-responsive"></a>
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
					<span class="fh5co-meta fh5co-date">{{$banhang->cost_discount}}</span>
					<span class="fh5co-meta fh5co-date" style="text-decoration: line-through;">{{$banhang->cost}}</span>
				</article>
			    @endforeach
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	@stop