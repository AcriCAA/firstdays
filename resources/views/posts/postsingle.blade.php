@extends('layout')

@section('content')

<div class="row mt-3">

 <div class="col px-3 border">
 	<h2 class="mt-2 text-center">{{$post->timelogged}}</h2>
 	<div class="row pt-1">
	  	<div class="col">
	  		@if($post->pee == 1)
	    	<p class="text-center"><i class="fas fa-3x fa-oil-can"></i></p>
	    	<p class="text-center small">pee!</p>
	    	@else 
	    		<p class="text-center"><i class="fas fa-3x fa-times"></i></p>
	    		<p class="text-center small">(no pee)</p>
	    	@endif

		</div>
		<div class="col">
			@if ($post->poop == 1)
	    	<p class="text-center"><i class="fas fa-3x fa-poo"></i></p>
	    	<p class="text-center small">poop!</p>
	    	@else 
	    		<p class="text-center"><i class="fas fa-3x fa-times"></i></p>
	    		<p class="text-center small">(no poop)</p>
	    	@endif
		</div>
	</div>
  
</div>
</div>

@endsection