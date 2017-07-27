

	@extends('user_interface.user_layout')

	@section('content')
		<div class="women-product">
			<div class=" w_content">
				<div class="women">
					<a><h4>Tổng sản phẩm - <span>{{$total_product}} sản phẩm</span> </h4></a>
				     <div class="clearfix"> </div>
				</div>
			</div>
			<!-- grids_of_4 -->
			<div class="grid-product">
				@foreach ($muabandocu_bandocu as $muabandocu_bandocu)
				<div class="  product-grid">
					<div class="content_box" style="width: 85%;">
						<a href="{{route('detail_muabandocu',[tittle($muabandocu_bandocu->tittle)])}}">
						   	<div class="left-grid-view grid-view-left">
						   	   	<img style="cursor: pointer;" src="/dientudandung/{{$muabandocu_bandocu->image_path}}" class="img-responsive watch-right" alt=""/>
						   	   	<div class="mask">
			                        <div class="info"></div>
					            </div>
							</div>
				   	    </a>
					    <h4>
					    	<a href="{{route('detail_muabandocu',[tittle($muabandocu_bandocu->tittle)])}}"> <h4 align="center">{{convert_tittle($muabandocu_bandocu->tittle)}}</h4></a>
					    </h4>
					    <p align="center" style="font-size: 16px;">{{$muabandocu_bandocu->cost}}</p>
				   	</div>
	            </div>
			    @endforeach
				<div class="clearfix"> </div>
			</div>
		</div>
	@stop