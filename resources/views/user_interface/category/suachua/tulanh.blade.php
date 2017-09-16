
	@extends('user_interface.user_layout')

	@section('content')

	<div class="container-fluid">
		<div class="row fh5co-post-entry single-entry">
			@foreach($suachua_tulanh as $suachua_tulanh)
			<article class="">
				<h4 class="fh5co-article-title animate-box"><a style="font-size: 40px">{!! convert_tittle($suachua_tulanh->tittle) !!}</a></h4>
				<div class="text-left content-article">
					<div class="row">
						<div class=" cp-r animate-box">
							{!! $suachua_tulanh->introduce !!}
						</div>
					</div>
				</div>
			</article>
			@endforeach
		</div>
	</div>
	@stop