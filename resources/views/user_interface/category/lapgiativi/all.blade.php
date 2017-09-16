

	@extends('user_interface.user_layout')

	@section('content')
		<div class="women-product">
			<div class=" w_content">
			</div>
			<!-- grids_of_4 -->
			<div class="grid-product">
				@foreach ($lapgiativi_all as $lapgiativi_all)
				<div class="  product-grid">
					<div class="content_box" style="width: 85%;">
						<a href="{{route('detail_lapgiativi',[tittle($lapgiativi_all->tittle)])}}">
						   	<div class="left-grid-view grid-view-left">
						   	   	<img style="cursor: pointer;" src="/giadungvanphong/{{$lapgiativi_all->image_path}}" class="img-responsive watch-right" alt=""/>
						   	   	<div class="mask">
			                        <div class="info"></div>
					            </div>
							</div>
				   	    </a>
					    <h4>
					    	<a href="{{route('detail_lapgiativi',[tittle($lapgiativi_all->tittle)])}}"> <h4 align="center">{{convert_tittle($lapgiativi_all->tittle)}}</h4></a>
					    </h4>
					    <p align="center" style="font-size: 16px;">{{$lapgiativi_all->cost}}</p>
				   	</div>
	            </div>
			    @endforeach
				<div class="clearfix"> </div>
			</div>
		</div>
	@stop