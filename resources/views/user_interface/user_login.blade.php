

	@extends('user_interface.user_layout')

	@section('content')

 	<div class="account_grid">
		<div class=" login-right">
			<form class="form-horizontal" role="form" method="POST" action="{{route('login')}}">
				@if(Session::has('message'))
					<div style="width: 250px; margin:auto;"><span class="alert alert-danger" style="color: #a94442">{{Session::get('message')}}</span></div>
				@endif
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			    <div>
     				<span>Username<label>*</label></span>
				    <input type="text" name="username" id="username" value="{{old('name')}}">
				    <span class="help-block">
						<i>{{$errors->first('name')}}</i>
					</span>
			    </div>
			    <div>
				<span>Password<label>*</label></span>
					<input type="password" name="password" id="password" value="{{old('password')}}">
					<span class="help-block">
						<i>{{$errors->first('password')}}</i>
					</span>
			    </div>
			    <input type="submit" value="Đăng nhập">
		    </form>
	    </div>
	    <div class="clearfix"> </div>
	</div>

	@stop
