

	@extends('user_interface.user_layout')

	@section('content')

 	<div class="account_grid">
		<div class=" login-right">
			<form>
			    <div>
     				<span>Email Address<label>*</label></span>
				    <input type="text">
			    </div>
			    <div>
				<span>Password<label>*</label></span>
					<input type="text">
			    </div>
			    <input type="submit" value="Đăng nhập">
		    </form>
	    </div>
	    <div class="clearfix"> </div>
	</div>

	@stop