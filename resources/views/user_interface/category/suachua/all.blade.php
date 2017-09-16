	@extends('user_interface.user_layout')

	@section('content')
	<div class="container-fluid">
		<div class="women-product">
			<div class=" w_content">
				<div class="women">
					<h4 style="float: left;font-family: fantasy;">Sữa chữa</h4>
					<a><h4 style="float: right;text-transform: capitalize;">Tổng sản phẩm - <span>{{$total_product}} sản phẩm</span> </h4></a>
				     <div class="clearfix"> </div>
				</div>
			</div>
			<!-- grids_of_4 -->
			<div class="row fh5co-post-entry">
				@foreach ($suachua_all as $banhang)
				<article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box">
					<figure>
						@if($banhang->type == 'dieuhoa')
						 <a href="{{ route('suachua.dieuhoa') }}">
						@endif
						@if($banhang->type == 'tulanh')
						 <a href="{{ route('suachua.tulanh') }}">
						@endif
						@if($banhang->type == 'maygiat')
						 <a href="{{ route('suachua.maygiat') }}">
						@endif
						@if($banhang->type == 'lovisong')
						 <a href="{{ route('suachua.lovisong') }}">
						@endif
						@if($banhang->type == 'diennuoc')
						 <a href="{{ route('suachua.diennuoc') }}">
						@endif
						<img src="http://localhost/giadungvanphong/{{$banhang->image_path}}" alt="Image" class="img-responsive"></a>
					</figure>
					<h2 class="fh5co-article-title">
						@if($banhang->type == 'dieuhoa')
						 <a href="{{ route('suachua.dieuhoa') }}">
						@endif
						@if($banhang->type == 'tulanh')
						 <a href="{{ route('suachua.tulanh') }}">
						@endif
						@if($banhang->type == 'maygiat')
						 <a href="{{ route('suachua.maygiat') }}">
						@endif
						@if($banhang->type == 'lovisong')
						 <a href="{{ route('suachua.lovisong') }}">
						@endif
						@if($banhang->type == 'diennuoc')
						 <a href="{{ route('suachua.diennuoc') }}">
						@endif
						{{convert_tittle($banhang->tittle)}}</a></h2>
				</article>
			    @endforeach
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	@stop
