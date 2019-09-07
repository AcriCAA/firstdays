@extends('layout')

@section('content')

<div class="row mt-3">

 <div class="col px-3 border">
 	<h2 class="mt-2 text-center">{{$post->timelogged}}</h2>
 	<div class="row pt-1">
	  	<div class="col">
	  		@if($post->pee == 1)
	    	<p class="text-center"><i class="fas fa-3x fa-swimmer"></i></p>
	    	<p class="text-center small">swam!</p>
	    	@else 
	    		<p class="text-center"><i class="fas fa-3x fa-times"></i></p>
	    		<p class="text-center small">(no swim)</p>
	    	@endif

		</div>
		<div class="col">
			@if ($post->poop == 1)
	    	<p class="text-center"><i class="fas fa-3x fa-running"></i></p>
	    	<p class="text-center small">ran!</p>
	    	@else 
	    		<p class="text-center"><i class="fas fa-3x fa-times"></i></p>
	    		<p class="text-center small">(no run)</p>
	    	@endif
		</div>
	</div>
  
</div>
</div>

@endsection