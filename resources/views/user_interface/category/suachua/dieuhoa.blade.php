
	@extends('user_interface.user_layout')

	@section('content')

	<div class="container-fluid">
		<div class="row fh5co-post-entry single-entry">
			@foreach($suachua_dieuhoa as $suachua_dieuhoa)
			<article class="">
				<h4 class="fh5co-article-title animate-box"><a style="font-size: 40px">{!! convert_tittle($suachua_dieuhoa->tittle) !!}</a></h4>
				<div class="text-left content-article">
					<div class="row">
						<div class=" cp-r animate-box">
							{!! $suachua_dieuhoa->introduce !!}
						</div>
					</div>
				</div>
			</article>
			@endforeach
		</div>
	</div>
	@stop