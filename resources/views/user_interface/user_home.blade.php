
	@extends('user_interface.user_layout')

	@section('content')
		<div class="shoes-grid">
   		    <div class="products">
   		     	<h5 class="latest-product">BÁN HÀNG</h5>
   		     	  <a class="view-all" href="{{route('banhang.all')}}">Xem tất cả sản phẩm<span> </span></a>
   		    </div>
   		    <div class="product-left">
               @foreach($banhang as $banhang)
   		     	<div class="col-md-4 chain-grid">
   		     		<a href="{{route('detail_banhang',[tittle($banhang->tittle)])}}"><img class="img-responsive chain" src="{{$banhang->image_path}}" alt=" " /></a>
   		     		<div class="grid-chain-bottom">
   		     			<h6><a href="{{route('detail_banhang',[tittle($banhang->tittle)])}}">{{convert_tittle($banhang->tittle)}}</a></h6>
   		     			<div class="star-price">
   		     				<div class="dolor-grid">
	   		     				<span class="actual">{{$banhang->cost}}</span>
   		     				</div>
   		     				<div class="clearfix"> </div>
						</div>
   		     		</div>
   		     	</div>
               @endforeach
   		    </div>

   		    <div class="products">
   		     	<h5 class="latest-product">SUA CHUA</h5>
   		     	  <a class="view-all" href="{{route('suachua.all')}}">Xem tất cả<span> </span></a>
   		    </div>

   		    <div class="product-left">
               @foreach($suachua as $suachua)
               <div class="col-md-4 chain-grid">
                  <a href="{{route('detail_suachua',[tittle($suachua->tittle)])}}"><img class="img-responsive chain" src="{{$suachua->image_path}}" alt=" " /></a>
                  <div class="grid-chain-bottom">
                     <h6><a href="{{route('detail_suachua',[tittle($suachua->tittle)])}}">{{convert_tittle($suachua->tittle)}}</a></h6>
                     <div class="star-price">
                        <div class="dolor-grid">
                           <span class="actual">{{$suachua->cost}}</span>
                        </div>
                        <div class="clearfix"> </div>
                  </div>
                  </div>
               </div>
               @endforeach
             </div>

   		      <div class="products">
   		     	<h5 class="latest-product">LAP GIA TIVI</h5>
   		     	  <a class="view-all" href="{{route('lapgiativi.all')}}">Xem tất cả<span> </span></a>
   		    </div>

   		    <div class="product-left">
               @foreach($lapgiativi as $lapgiativi)
               <div class="col-md-4 chain-grid">
                  <a href="{{route('detail_lapgiativi',[tittle($lapgiativi->tittle)])}}"><img class="img-responsive chain" src="{{$lapgiativi->image_path}}" alt=" " /></a>
                  <div class="grid-chain-bottom">
                     <h6><a href="{{route('detail_lapgiativi',[tittle($lapgiativi->tittle)])}}">{{convert_tittle($lapgiativi->tittle)}}</a></h6>
                     <div class="star-price">
                        <div class="dolor-grid">
                           <span class="actual">{{$lapgiativi->cost}}</span>
                        </div>
                        <div class="clearfix"> </div>
                  </div>
                  </div>
               </div>
               @endforeach
             </div>

   		      <div class="products">
   		     	<h5 class="latest-product">Mua Bán Đồ Cũ</h5>
   		     	  <a class="view-all" href="{{route('muabandocu.all')}}">Xem tất cả<span> </span></a>
   		    </div>

   		    <div class="product-left">
               @foreach($muabandocu as $muabandocu)
               <div class="col-md-4 chain-grid">
                  <a href="{{route('detail_muabandocu',[tittle($muabandocu->tittle)])}}"><img class="img-responsive chain" src="{{$muabandocu->image_path}}" alt=" " /></a>
                  <div class="grid-chain-bottom">
                     <h6><a href="{{route('detail_muabandocu',[tittle($muabandocu->tittle)])}}">{{convert_tittle($muabandocu->tittle)}}</a></h6>
                     <div class="star-price">
                        <div class="dolor-grid">
                           <span class="actual">{{$muabandocu->cost}}</span>
                        </div>
                        <div class="clearfix"> </div>
                  </div>
                  </div>
               </div>
               @endforeach
             </div>
   		    <div class="clearfix"> </div>
		   </div>
    @stop