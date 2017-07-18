
	@extends('user_interface.user_layout')

	@section('content')
		<div class="shoes-grid">
   		    <div class="products">
   		     	<h5 class="latest-product">BÁN HÀNG</h5>
   		     	  <a class="view-all" href="{{route('product')}}">Xem tất cả sản phẩm<span> </span></a>
   		    </div>
   		    <div class="product-left">
   		     	<div class="col-md-4 chain-grid">
   		     		<a href="{{route('detail')}}"><img class="img-responsive chain" src="/dientudandung/public/user_interface/images/tulanh.jpg" alt=" " /></a>
   		     		<div class="grid-chain-bottom">
   		     			<h6><a href="{{route('detail')}}">Tủ lạnh Hitachi</a></h6>
   		     			<div class="star-price">
   		     				<div class="dolor-grid">
	   		     				<span class="actual">8.000.000 đ</span>
   		     				</div>
   		     				<div class="clearfix"> </div>
						</div>
   		     		</div>
   		     	</div>
   		    </div>

   		    <div class="products">
   		     	<h5 class="latest-product">SUA CHUA</h5>
   		     	  <a class="view-all" href="product">Xem tất cả<span> </span></a>
   		    </div>

   		    <div class="product-left">
   		     	<div class="col-md-4 chain-grid">
   		     		<a href="{{route('detail')}}"><img class="img-responsive chain" src="/dientudandung/public/user_interface/images/suadieuhoa.jpg" alt=" " /></a>
   		     		<div class="grid-chain-bottom">
   		     			<h6><a href="{{route('detail')}}">Sữa chữa điều hòa</a></h6>
   		     			<div class="star-price">
   		     				<div class="dolor-grid">
	   		     				<span class="actual">500.000 đ</span>
   		     				</div>
   		     				<div class="clearfix"> </div>
						</div>
   		     		</div>
   		     	</div>
   		     	 <div class="clearfix"> </div>
   		     </div>

   		      <div class="products">
   		     	<h5 class="latest-product">LAP GIA TIVI</h5>
   		     	  <a class="view-all" href="{{route('product')}}">Xem tất cả<span> </span></a>
   		    </div>

   		    <div class="product-left">
   		     	<div class="col-md-4 chain-grid">
   		     		<a href="{{route('detail')}}"><img class="img-responsive chain" src="/dientudandung/public/user_interface/images/giativi.jpg" alt=" " /></a>
   		     		<div class="grid-chain-bottom">
   		     			<h6><a href="{{route('detail')}}">Lắp gía Tivi gía rẻ</a></h6>
   		     			<div class="star-price">
   		     				<div class="dolor-grid">
	   		     				<span class="actual">500.000 đ</span>
   		     				</div>
   		     				<div class="clearfix"> </div>
						</div>
   		     		</div>
   		     	</div>
   		     	 <div class="clearfix"> </div>
   		     </div>

   		      <div class="products">
   		     	<h5 class="latest-product">Mua Bán Đồ Cũ</h5>
   		     	  <a class="view-all" href="{{route('product')}}">Xem tất cả<span> </span></a>
   		    </div>

   		    <div class="product-left">
   		     	<div class="col-md-4 chain-grid">
   		     		<a href="{{route('detail')}}"><img class="img-responsive chain" src="/dientudandung/public/user_interface/images/tulanhcu.jpg" alt=" " /></a>
   		     		<div class="grid-chain-bottom">
   		     			<h6><a href="{{route('detail')}}">Tủ lạnh cũ</a></h6>
   		     			<div class="star-price">
   		     				<div class="dolor-grid">
	   		     				<span class="actual">2.000.000 đ</span>
   		     				</div>
   		     				<div class="clearfix"> </div>
						</div>
   		     		</div>
   		     	</div>
   		     	<div class="clearfix"> </div>
   		    </div>
   		    <div class="clearfix"> </div>
		   </div>
    @stop