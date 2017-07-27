
@extends('user_interface.user_layout')

@section('content')
<div class="women-product">
<div class="reservation_top">
	<div class=" contact_right">
		<h3>Contact Form</h3>
		<div class="contact-form">
				<form method="post" action="contact-post.html">
					<input type="text" class="textbox" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
					<input type="text" class="textbox" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
					<textarea value="Message" onfocus="this.value= '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
					<input type="submit" value="Send">
					<div class="clearfix"> </div>
				</form>
				<address class="address">
		@foreach($lienhe as $lienhe)
        <p>{{$lienhe->diachi}}</p>
        <dl>
            <i>Phone:<span> {{$lienhe->sdt}}</span></i>
        </dl>
        @endforeach
    </address>
			</div>
	</div>
</div>
</div>
@stop