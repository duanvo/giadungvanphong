

	@extends('user_interface.user_layout')

	@section('content')

	<div class="container-fluid">
		<div class="row fh5co-post-entry single-entry">
			@foreach($detail_lapgiativi as $detail_lapgiativi)
			<article class="">
				<h4 class="fh5co-article-title animate-box"><a style="font-size: 40px">{!! convert_tittle($detail_lapgiativi->tittle) !!}</a></h4>
				<div class="text-left content-article">
					<div class="row">
						<div class=" cp-r animate-box">
							{!! $detail_lapgiativi->introduce !!}
						</div>
					</div>
				</div>
			</article>
			@endforeach
		</div>
	</div>
	@stop