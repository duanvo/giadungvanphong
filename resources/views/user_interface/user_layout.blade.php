<!DOCTYPE html>
<html class="no-js">
<head>
	<title>Dien tu dien lanh</title>
	<link rel="shortcut icon" href="{!! asset('/storage/uploads/interface_images/icon.ico') !!}"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />

	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic|Roboto:400,300,700' rel='stylesheet' type='text/css'>
	<!-- Animate -->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('/public/user_interface/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('/public/user_interface/css/flexslider.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('/public/user_interface/css/animate.css')}}">
	<!-- Icomoon -->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('/public/user_interface/css/icomoon.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('/public/user_interface/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('/public/user_interface/css/style_user.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('/public/user_interface/css/etalage.css')}}">
	<!-- Bootstrap  -->

	<!-- jQuery -->
	<script type="text/javascript" src="{{URL::asset('/public/user_interface/js/jquery.min.js')}}"></script>
	<!-- Modernizr JS -->
	<script type="text/javascript" src="{{URL::asset('/public/user_interface/js/modernizr-2.6.2.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script type="text/javascript" src="{{URL::asset('/public/user_interface/js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script type="text/javascript" src="{{URL::asset('/public/user_interface/js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script type="text/javascript" src="{{URL::asset('/public/user_interface/js/jquery.waypoints.min.js')}}"></script>
	<!--script-->
	<!-- Main JS -->
	<script type="text/javascript" src="{{URL::asset('/public/user_interface/js/main.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('public/user_interface/js/jquery.flexisel.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('public/user_interface/js/jquery.etalage.min.js')}}"></script>

</head>

<body>
	<nav class="navbar navbar-default fix_top">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="{{route('home')}}" style="font-weight: 600; margin-right: 150px; color: rgba(226, 1, 1, 0.72);">GIA DỤNG VĂN PHÒNG</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li class=""><a href="{{route('home')}}">Trang chủ</a></li>
	      <li class="dropdown">
	        <a class="dropdown-toggle" data-toggle="dropdown" href="{{route('banhang.all')}}">Bán Hàng
	        <span class="caret"></span></a>
	        <ul class="dropdown-menu">
	          <li><a href="{{route('banhang.all')}}">Tất cả</a></li>
	          <li><a href="{{route('banhang.dienmay')}}">Điện máy</a></li>
	          <li><a href="{{route('banhang.vanphong')}}">Văn phòng</a></li>
	          <li><a href="{{route('banhang.dogiadung')}}">Đồ gia dụng</a></li>
	        </ul>
	      </li>
	      <li><a href="{{route('lapgiativi.all')}}">Lắp giá tivi</a></li>
	      <li class="dropdown">
	        <a class="dropdown-toggle" data-toggle="dropdown" href="{{route('suachua.all')}}">Sữa chữa
	        <span class="caret"></span></a>
	        <ul class="dropdown-menu">
	          <li><a href="{{route('suachua.all')}}">Tất cả</a></li>
	          <li><a href="{{route('suachua.dieuhoa')}}">Sữa chữa điều hòa</a></li>
	          <li><a href="{{route('suachua.tulanh')}}">Sữa chữa tủ lạnh</a></li>
	          <li><a href="{{route('suachua.maygiat')}}">Sữa chữa máy giặt</a></li>
	          <li><a href="{{route('suachua.lovisong')}}">Sữa chữa lò vi sóng</a></li>
	          <li><a href="{{route('suachua.diennuoc')}}">Sữa chữa điện nước</a></li>
	        </ul>
	      </li>
	      <li class="dropdown">
	        <a class="dropdown-toggle" data-toggle="dropdown" href="{{route('muabandocu.all')}}">Mua bán đồ cũ
	        <span class="caret"></span></a>
	        <ul class="dropdown-menu">
	          <li><a href="{{route('muabandocu.all')}}">Tất cả</a></li>
	          <li><a href="{{route('muabandocu.muadocu')}}">Mua đồ cũ</a></li>
	          <li><a href="{{route('muabandocu.bandocu')}}">Bán đồ cũ</a></li>
	        </ul>
	      </li>
	    </ul>
	  </div>
	</nav>
	<div class="contact1">
		@foreach($lienhe as $lienhe2)
			<span style="font-style: initial;color:rgb(12, 119, 109)">SĐT: </span>{{$lienhe2->sdt}} <br>
			<span style="font-style: initial;color:rgb(12, 119, 109)">Địa chỉ: </span>{{$lienhe2->diachi}}
		@endforeach
	</div>
	<div class="container-fluid" style="width:85%; background-color: rgba(102, 51, 153, 0.08);margin-top: 90px; margin-bottom: 50px;">
		<div id="fh5co-offcanvas">
			<a href="#" class="fh5co-close-offcanvas js-fh5co-close-offcanvas"><span><i class="icon-cross3"></i> <span>Close</span></span></a>
			<div class="fh5co-bio">
				<figure>
					<img src="http://localhost/giadungvanphong/storage/images/avatar.jpg" alt="" class="img-responsive">
				</figure>
				<h3 class="heading">Về chúng tôi</h3>
				<h2>Gia Dụng Văn Phòng</h2>
				<p>Chuyên cung cấp đồ gia dụng, đồ điện. Cung cấp dịch vụ sữa chữa chất lượng, uy tín, gía thành hợp lý. </p>
				<ul class="fh5co-social">
					<li><a href="#"><i class="icon-facebook"></i></a></li>
				</ul>
			</div>

			<div class="fh5co-menu">
				<div class="fh5co-box">
					<h3 class="heading">Danh mục</h3>
					<ul>
						<li class="active"><a href="{{route('home')}}">Trang chủ</a></li>
						<li><a href="{{route('banhang.all')}}">Bán Hàng</a></li>
						<li><a href="{{route('lapgiativi.all')}}">Lắp giá Tivi</a></li>
						<li><a href="{{route('suachua.all')}}">Sữa chữa</a></li>
						<li><a href="{{route('muabandocu.muadocu')}}">Mua đồ cũ</a></li>
						<li><a href="{{route('muabandocu.all')}}">Bán đồ cũ</a></li>
					</ul>
				</div>
				<div class="contact">
					@foreach($lienhe as $lienhe1)
						<span style="font-style: initial;color:rgb(12, 119, 109)">SĐT: </span>{{$lienhe2->sdt}} <br>
						<span style="font-style: initial;color:rgb(12, 119, 109)">Địa chỉ: </span>{{$lienhe2->diachi}}
					@endforeach
				</div>
			</div>
		</div>
		<!-- END #fh5co-offcanvas -->
		<header id="fh5co-header">
			<div class="container-fluid">
				<div class="row">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
				</div>
			</div>
		</header>

		<!-- END #fh5co-header -->
		@yield('content')

	</div>
	<footer id="fh5co-footer">
		<p>&copy; 2017. Mua bán, sữa chữa đồ điện gia dụng - Chất lượng - Giá cả hợp lý.</p>
	</footer>
	<script>
     $(function() {
        $('#nav ul li').click(function() {
           $('#nav li').removeClass();
           $($(this).attr('href')).addClass('active');
        });
        $("span img").addClass('embed-responsive-Item img');
     });
	</script>
	<style type="text/css">
	  	span .img{
		    width: 70%;
    		margin-left: 135px;
	  	}
	  	@media(max-width: 800px){
	  		span .img{
			    max-width: 400px;
		    	width: 100%;
		    	margin-left: 0px;
		    	margin:auto;
	  		}
	  	}
	</style>
</body>
</html>