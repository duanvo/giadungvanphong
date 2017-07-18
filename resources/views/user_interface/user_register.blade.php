

@extends('user_interface.user_layout')

@section('content')
	<div class="register">
  	    <form>
			<div class="  register-top-grid">
				<h3>THÔNG TIN</h3>
				<div class="mation">
					<span>Tên đăng nhập<label>*</label></span>
					<input type="text">
					<span>Email<label>*</label></span>
					<input type="text">
				    <span>Password<label>*</label></span>
					<input type="text">
					<span>Nhập lại Password<label>*</label></span>
					<input type="text">
				</div>
				 <div class="clearfix"> </div>
			</div>
		</form>
		<div class="clearfix"> </div>
		<div class="register-but">
			<form>
				<input type="submit" value="submit">
				<div class="clearfix"> </div>
			</form>
		</div>
	</div>
@stop