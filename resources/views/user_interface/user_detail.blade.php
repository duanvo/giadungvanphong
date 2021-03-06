

	@extends('user_interface.user_layout')

	@section('content')

		<div class=" single_top">
	      <div class="single_grid">
				<div class="grid images_3_of_2">
					<ul id="etalage">
						<li>
							<a href="optionallink.html">
								<img class="etalage_thumb_image" src="/giadungvanphong/public/user_interface/images/tulanh.jpg" class="img-responsive" />
								<img class="etalage_source_image" src="/giadungvanphong/public/user_interface/images/tulanh.jpg" class="img-responsive" title="" />
							</a>
						</li>
						<li>
							<img class="etalage_thumb_image" src="/giadungvanphong/public/user_interface/images/giativi.jpg" class="img-responsive" />
							<img class="etalage_source_image" src="/giadungvanphong/public/user_interface/images/giative.jpg" class="img-responsive" title="" />
						</li>
						<li>
							<img class="etalage_thumb_image" src="/giadungvanphong/public/user_interface/images/suadieuhoa.jpg" class="img-responsive"  />
							<img class="etalage_source_image" src="/giadungvanphong/public/user_interface/images/suadieuhoa.jpg.jpg" class="img-responsive"  />
						</li>
					    <li>
							<img class="etalage_thumb_image" src="/giadungvanphong/public/user_interface/images/tulanhcu.jpg" class="img-responsive"  />
							<img class="etalage_source_image" src="/giadungvanphong/public/user_interface/images/tulanhcu.jpg" class="img-responsive"  />
						</li>
					</ul>
					<div class="clearfix"> </div>
				</div>
				<div class="desc1 span_3_of_2">
					<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4>
					<div class="cart-b">
						<div class="left-n ">$329.58</div>
					    <a class="now-get get-cart-in" href="#">ADD TO CART</a>
					    <div class="clearfix"></div>
					</div>
				    <h6>100 items in stock</h6>
			   		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
		   			<div class="share">
						<h5>Share Product :</h5>
						<ul class="share_nav">
							<li><a href="#"><img src="/giadungvanphong/public/user_interface/images/facebook.png" title="facebook"></a></li>
							<li><a href="#"><img src="/giadungvanphong/public/user_interface/images/twitter.png" title="Twiiter"></a></li>
							<li><a href="#"><img src="/giadungvanphong/public/user_interface/images/rss.png" title="Rss"></a></li>
							<li><a href="#"><img src="/giadungvanphong/public/user_interface/images/gpluse.png" title="Google+"></a></li>
			    		</ul>
					</div>
				</div>

          	    <div class="clearfix"> </div>
          	    <div class="toogle">
			     	<h3 class="m_3">Product Details</h3>
			     	<p class="m_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
		        </div>
          	</div>

          	<ul id="flexiselDemo1">
				<li><img src="/giadungvanphong/public/user_interface/images/tulanh.jpg" /><div class="grid-flex"><a href="{{route('detail')}}">Bloch</a><p>Rs 850</p></div></li>

				<li><img src="/giadungvanphong/public/user_interface/images/suadieuhoa.jpg" /><div class="grid-flex"><a href="{{route('detail')}}">Capzio</a><p>Rs 850</p></div></li>

				<li><img src="/giadungvanphong/public/user_interface/images/giativi.jpg" /><div class="grid-flex"><a href="{{route('detail')}}">Zumba</a><p>Rs 850</p></div></li>

				<li><img src="/giadungvanphong/public/user_interface/images/tulanhcu.jpg" /><div class="grid-flex"><a href="{{route('detail')}}">Bloch</a><p>Rs 850</p></div></li>

				<li><img src="/giadungvanphong/public/user_interface/images/pi4.jpg" /><div class="grid-flex"><a href="#">Capzio</a><p>Rs 850</p></div></li>
			</ul>

		    <script type="text/javascript">
			$(window).load(function() {
				$("#flexiselDemo1").flexisel({
					visibleItems: 5,
					animationSpeed: 1000,
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
			</script>
  	    </div>
	@stop