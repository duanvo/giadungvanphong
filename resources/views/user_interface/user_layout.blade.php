<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dien tu dien lanh</title>
	<link rel="shortcut icon" href="{!! asset('/storage/uploads/interface_images/icon.ico') !!}"/>

	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic|Roboto:400,300,700' rel='stylesheet' type='text/css'>
	<!-- Animate -->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('/public/user_interface/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('/public/user_interface/css/flexslider.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('/public/user_interface/css/animate.css')}}">
	<!-- Icomoon -->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('/public/user_interface/css/icomoon.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('/public/user_interface/css/style_user.css')}}">
	<!-- Bootstrap  -->

	<!-- Modernizr JS -->
	<script type="text/javascript" src="{{URL::asset('/public/user_interface/js/modernizr-2.6.2.min.js')}}"></script>
	<!-- jQuery -->
	<script type="text/javascript" src="{{URL::asset('/public/user_interface/js/jquery-2.2.4.js')}}"></script>
	<!-- jQuery Easing -->
	<script type="text/javascript" src="{{URL::asset('/public/user_interface/js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script type="text/javascript" src="{{URL::asset('/public/user_interface/js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script type="text/javascript" src="{{URL::asset('/public/user_interface/js/jquery.waypoints.min.js')}}"></script>
	<!-- Main JS -->
	<script type="text/javascript" src="{{URL::asset('/public/user_interface/js/main.js')}}"></script>

</head>
<body>
	<nav class="navbar navbar-default fix_top">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" style="margin-right: 150px;">Gia dung van phong</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li class="active"><a href="#">Trang Chu</a></li>
	      <li class="dropdown">
	        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Ban hang
	        <span class="caret"></span></a>
	        <ul class="dropdown-menu">
	          <li><a href="#">Tat ca</a></li>
	          <li><a href="#">Dien may</a></li>
	          <li><a href="#">Van Phong</a></li>
	          <li><a href="#">Do gia dung</a></li>
	        </ul>
	      </li>
	      <li><a href="#">Lap gia tivi</a></li>
	      <li class="dropdown">
	        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sua chua
	        <span class="caret"></span></a>
	        <ul class="dropdown-menu">
	          <li><a href="#">Tat ca</a></li>
	          <li><a href="#">Sua chua dieu hoa</a></li>
	          <li><a href="#">Sua chua tu lanh</a></li>
	          <li><a href="#">Sua chua may giat</a></li>
	          <li><a href="#">Sua chua lo vi song</a></li>
	          <li><a href="#">Sua chua dien nuoc</a></li>
	        </ul>
	      </li>
	      <li class="dropdown">
	        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Mua ban do cu
	        <span class="caret"></span></a>
	        <ul class="dropdown-menu">
	          <li><a href="#">Tat ca</a></li>
	          <li><a href="#">Mua do cu</a></li>
	          <li><a href="#">Ban do cu</a></li>
	        </ul>
	      </li>
	    </ul>
	  </div>
	</nav>
	<div class="container-fluid" style="width:85%; background-color: rgba(102, 51, 153, 0.08);margin-top: 90px; margin-bottom: 50px;">
		<div id="fh5co-offcanvas">
			<a href="#" class="fh5co-close-offcanvas js-fh5co-close-offcanvas"><span><i class="icon-cross3"></i> <span>Close</span></span></a>
			<div class="fh5co-bio">
				<figure>
					<img src="storage/images/avatar.jpg" alt="" class="img-responsive">
				</figure>
				<h3 class="heading">Về tôi</h3>
				<h2>Vo Khac Duan</h2>
				<p>Chuyên cung cấp đồ gia dụng, đồ điện. Cung cấp dịch vụ sữa chữa chất lượng, uy tín, gía thành hợp lý. </p>
				<ul class="fh5co-social">
					<li><a href="#"><i class="icon-facebook"></i></a></li>
				</ul>
			</div>

			<div class="fh5co-menu">
				<div class="fh5co-box">
					<h3 class="heading">Danh muc</h3>
					<ul>
						<li><a href="#">Ban Hang</a></li>
						<li><a href="#">Lap gia Tivi</a></li>
						<li><a href="#">Sua chua dien lanh</a></li>
						<li><a href="#">Mua Ban do cu</a></li>
						<li><a href="#">Lien He</a></li>
					</ul>
				</div>
				<div class="contact">
					SDT: <br>
					Dia chi:
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

		<footer id="fh5co-footer">
			<p>&copy; 2017. Mua ban, sua chua do dien gia dung.</p>
		</footer>
	</div>
</body>
</html>