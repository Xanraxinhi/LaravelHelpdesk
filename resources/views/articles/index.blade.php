@extends ('layouts.master')

@section('haed.title')
Tiêu đề của bài viết
@stop

@section('body.content')
	<div class="container">
		@foreach ($articles as $a)
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<h2>{{ $a->title  }}</h2>  
				<p class="lead"> {{ $a->content }} </p>
				<p class="w3-text-red"> <a href ="{{ route('article.show', $a->id) }}">read more</a> </p>
			</div>	
		</div>
		@endforeach
	</div>
@stop	