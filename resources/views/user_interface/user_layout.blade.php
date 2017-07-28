<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Dien tu dien lanh</title>
<link rel="stylesheet" type="text/css" href="{{URL::asset('public/user_interface/css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('public/user_interface/css/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('public/user_interface/css/etalage.css')}}">
<!--theme-style-->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script type="text/javascript" src="{{URL::asset('public/user_interface/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('public/user_interface/js/jquery.etalage.min.js')}}"></script>

<!--script-->
<script>
	jQuery(document).ready(function($){

		$('#etalage').etalage({
			thumb_image_width: 300,
			thumb_image_height: 400,
			source_image_width: 900,
			source_image_height: 1200,
			show_hint: true,
			click_callback: function(image_anchor, instance_id){
			}
		});

	});
</script>
<script type="text/javascript" src="{{URL::asset('public/user_interface/js/jquery.flexisel.js')}}"></script>
</head>
<body>
	<!--header-->
	<div class="header">
		<div class="top-header">
			<div class="container">
				<div class="top-header-right">
					<ul class="support">
						<li><a ><label> </label></a></li>
						<li><a >0989 677 020</span></a></li>
					</ul>
					<ul class="support">
						<li class="van"><a href="#"><label> </label></a></li>
						<li><a>Free shipping nội thành<span class="live"></span></a></li>
					</ul>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="bottom-header">
			<div class="container">
				<div class="header-bottom-left">
					<div class="logo">
						<h3><a href="{{route('home')}}">Trang chủ</a></h3>
					</div>
					<div class="search">
						<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
						<input type="submit"  value="SEARCH">

					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="header-bottom-right">
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!---->
	<div class="container">

		@yield('content')
	    <div class="sub-cate">
			<div class=" top-nav rsidebar span_1_of_left">
				<h3 class="cate" align="center">DANH MỤC</h3>
		        <ul class="menu">
					<li class="item1"><a href="#">BÁN HÀNG<img class="arrow-img" src="/dientudandung/public/user_interface/images/arrow1.png" alt=""/> </a>
						<ul class="cute">
							<li class="subitem1"><a href="{{route('banhang.dienmay')}}">Điện Máy </a></li>
							<li class="subitem2"><a href="{{route('banhang.vanphong')}}">Văn Phòng</a></li>
							<li class="subitem3"><a href="{{route('banhang.dogiadung')}}">Đồ Gia Dụng</a></li>
						</ul>
					</li>
					<li class="item2"><a href="{{route('suachua.all')}}">SUA CHUA <img class="arrow-img " src="/dientudandung/public/user_interface/images/arrow1.png" alt=""/></a>
						<ul class="cute">
							<li class="subitem1"><a href="{{route('suachua.dieuhoa')}}">Sữa Chữa Điều Hòa </a></li>
							<li class="subitem2"><a href="{{route('suachua.tulanh')}}">Sữa Chữa Tủ Lạnh </a></li>
							<li class="subitem3"><a href="{{route('suachua.maygiat')}}">Sữa Chữa Máy Gịăt </a></li>
							<li class="subitem3"><a href="{{route('suachua.lovisong')}}">Sữa Chữa Lò Vi Sóng </a></li>
						</ul>
					</li>
					<li class="item2"><a href="{{route('lapgiativi.all')}}">LAP GIA TIVI <img class="arrow-img " src="/dientudandung/public/user_interface/images/arrow1.png" alt=""/></a>
						<ul class="cute">
							<li class="subitem1"><a href="{{route('lapgiativi.all')}}">Lắp gía tivi gía rẻ </a></li>
						</ul>
					</li>
					<li class="item2"><a href="{{route('muabandocu.all')}}">MUA BAN DO CU <img class="arrow-img " src="/dientudandung/public/user_interface/images/arrow1.png" alt=""/></a>
						<ul class="cute">
							<li class="subitem1"><a href="{{route('muabandocu.bandocu')}}">Bán Đồ Cũ </a></li>
							<li class="subitem2"><a href="{{route('muabandocu.muadocu')}}">Mua Đồ Cũ </a></li>
						</ul>
					</li>
					<li class="item2"><a href="{{route('lienhe')}}">LIEN HE <img class="arrow-img " src="/dientudandung/public/user_interface/images/arrow1.png" alt=""/></a>
						<ul class="cute">
							<li class="subitem1"><a href="{{route('lienhe')}}">Liên hệ với chúng tôi </a></li>
						</ul>
					</li>
				</ul>
			</div>
			<!--initiate accordion-->
			<script type="text/javascript">
				$(function() {
				    var menu_ul = $('.menu > li > ul'),
				           menu_a  = $('.menu > li > a');
				    menu_ul.hide();
				    menu_a.click(function(e) {
				        e.preventDefault();
				        if(!$(this).hasClass('active')) {
				            menu_a.removeClass('active');
				            menu_ul.filter(':visible').slideUp('normal');
				            $(this).addClass('active').next().stop(true,true).slideDown('normal');
				        } else {
				            $(this).removeClass('active');
				            $(this).next().stop(true,true).slideUp('normal');
				        }
				    });
				});
			</script>
		</div>
	    <div class="clearfix"> </div>
	</div>	<!---->
	<div class="footer">
		<div class="footer-top">
			<div class="container">
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="footer-bottom-cate">
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</body>
</html>