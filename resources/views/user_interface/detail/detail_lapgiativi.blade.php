

	@extends('user_interface.user_layout')

	@section('content')

		<div class=" single_top">
	      <div class="single_grid">
		      	@foreach($detail_lapgiativi as $detail_lapgiativi)
					<h4 style="font-size: 26px;font-weight: 500;color: #363399;">{{convert_tittle($detail_lapgiativi->tittle)}}</h4><br>
					{!!htmlspecialchars_decode($detail_lapgiativi->introduce)!!}
		      	@endforeach

          	    <div class="clearfix"> </div>
          	</div>

		    <script type="text/javascript">
			$(window).load(function() {
				$("#flexiselDemo1").flexisel({
					visibleItems: 5,
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
			</script>
  	    </div>
	@stop