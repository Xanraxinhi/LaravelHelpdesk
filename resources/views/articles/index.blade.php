@extends ('layouts.master')

@section('body.content')
	 <!-- <div class="container">
		@foreach ($articles as $a)
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<h2>{{ $a->title  }}</h2>
				<p class="w3-text-red"> <a href ="{{ route('article.show', $a->id) }}">read more</a> </p>
			</div>	
		</div>
		@endforeach
	</div> --> 
		
		<div class="w3-container">
			<div class="w3-panel w3-card w3-light-grey">
				
				<div class="col-sm-12 ">
					<h2>FAQ</h2>
				<div class="w3-code cssHigh notranslate">
				@foreach ($articles as $a)
					<button onclick="myAccordion('Demo{{ $a->id }}')" class="w3-btn w3-block w3-panel w3-left-align w3-card-4"><h3 >{{ $a->title }}</h3></button>
						<div id="Demo{{ $a->id }}" class="w3-container w3-hide">
						  <h4 >{{ $a->content }}</h4>
						</div>
				@endforeach

				</div>	
				</div>
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3">
						{!! $articles->render() !!}
					</div>	
				</div>
				</div>	
			</div>
					
@stop	