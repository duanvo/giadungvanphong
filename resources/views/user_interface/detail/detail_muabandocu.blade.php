
	@extends('user_interface.user_layout')

	@section('content')
	<div class="container-fluid">
		<div class=" single_top">
	        <div class="single_grid">
				<div class="grid images_3_of_2">
					<ul id="etalage">
						@foreach($detail_muabandocu_image as $detail_muabandocu_image)
						<li>
							<a href="">
								<img class="etalage_thumb_image" src="/giadungvanphong/{{$detail_muabandocu_image->image_path}}" class="img-responsive" />
								<img class="etalage_source_image" src="/giadungvanphong/{{$detail_muabandocu_image->image_path}}" class="img-responsive" title="" />
							</a>
						</li>
						@endforeach
					</ul>
					<button type="button" id="detail_product3" class="btn btn-info"><span class="detail_product">Chi tiết kỹ thuật</span></button>
					<div class="detail_product3">
						@foreach($detail_muabandocu as $detail_muabandocu1)
							<div class=" cp-r animate-box">
								<p>{!!htmlspecialchars_decode($detail_muabandocu1->introduce1)!!}</p>
							</div>
						@endforeach
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="desc1 span_3_of_2">
					@foreach($detail_muabandocu as $detail_muabandocu)
					<h4>{{convert_tittle($detail_muabandocu->tittle)}}</h4>
					<div class="cart-b">
						<h4 style="">Giá:</h4> <div style="font-style: italic; color: rgba(255, 0, 0, 0.72);font-size: 21px;">{{$detail_muabandocu->cost}}</div>
					    <div class="clearfix"></div>
					</div>
					<h3 class="m_3">Chi tiết sản phẩm</h3>
					<div class="choose">
						<button type="button" id="detail_product1" class="btn btn-success"><span class="detail_product">Mô tả sản phẩm</span></button>
						<button type="button" id="detail_product2" class="btn btn-info"><span class="detail_product">Chi tiết kỹ thuật</span></button>
					</div>
					<div class="detail_product1">
						<div class=" cp-r animate-box">
		   					<p>{!!htmlspecialchars_decode($detail_muabandocu->introduce)!!}</p>
		   				</div>
					</div>
					<div class="detail_product2">
						<div class=" cp-r animate-box">
							<p>{!!htmlspecialchars_decode($detail_muabandocu->introduce1)!!}</p>
						</div>
					</div>
		   			<div class="share">
						<h5 style="color: #0527e4">Gọi ngay cho chúng tôi :</h5>
						<ul class="share_nav cart-b">
							@foreach($lienhe as $lienhe3)
								<ul class="support">
									<li><a><label> </label></a></li>
									<li><a> {{ $lienhe3->sdt }}</span></a></li>
								</ul>
							@endforeach
			    		</ul>
					</div>
					@endforeach
				</div>
      	    	<div class="clearfix"> </div>
          	</div>
          	<ul id="flexiselDemo1">
				@foreach($relate_muabandocu as $relate)
					<li style="margin-left: 50px; animation: all 0.5s;">
						<a href="{{route('detail_muabandocu',[tittle($relate->tittle)])}}">
							<img class="img-responsive chain" src="/giadungvanphong/{{$relate->image_path}}" alt=" " />
						</a>
						<div class="grid-flex">
							<a href="{{route('detail_muabandocu',[tittle($relate->tittle)])}}"><h4>{{convert_tittle($relate->tittle)}}</h4></a>
						</div>
					</li>
				@endforeach
			</ul>

		    <script type="text/javascript">
				$(window).load(function() {
					$('#etalage').etalage({
						thumb_image_width: 300,
						thumb_image_height: 400,
						source_image_width: 900,
						source_image_height: 1200,
						show_hint: true,
						click_callback: function(image_anchor, instance_id){
						}
					});
					$("#flexiselDemo1").flexisel({
						visibleItems: 7,
						animationSpeed: 2000,
						autoPlay: true,
						autoPlaySpeed: 3000,
						pauseOnHover: true,
						enableResponsiveBreakpoints: true,
				    	responsiveBreakpoints: {
				    		portrait: {
				    			changePoint:480,
				    			visibleItems: 1
				    		},
				    		landscape: {
				    			changePoint:640,
				    			visibleItems: 2
				    		},
				    		tablet: {
				    			changePoint:768,
				    			visibleItems: 3
				    		}
				    	}
				    });
				});
				$('.detail_product1').css({
					'display':'block'
				})
				$('.detail_product2').css({
					'display':'none'
				})
				$('#detail_product1').click(function(){
					$('.detail_product1').css({
						'display':'block'
					})
					$('.detail_product2').css({
						'display':'none'
					})
				})
				$('#detail_product2').click(function(){
					$('.detail_product1').css({
						'display':'none'
					})
					$('.detail_product2').css({
						'display':'block'
					})
				})
			</script>
  	    </div>
  	</div>
	@stop