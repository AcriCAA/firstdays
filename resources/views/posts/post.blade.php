{{-- @extends('layout')

@section('content')
 --}}
<div class="row mt-3">

 <div class="col px-3 border">
 	{{-- <div class="row pt-1"> --}}

 	{{-- </div> --}}
 	<h2 class="mt-2 text-center">{{$post->timelogged}}</h2>
 	
 	<div class="row pt-1">
	  	<div class="col">
	  		@if($post->pee == 1)
	    	<p class="text-center"><i class="fas fa-3x fa-swimmer"></i></p>
	    	<p class="text-center small">swim!</p>
	    	@else 
	    		<p class="text-center"><i class="fas fa-3x fa-times"></i></p>
	    		<p class="text-center small">(no swim)</p>
	    	@endif

		</div>
		<div class="col">
			@if ($post->poop == 1)
	    	<p class="text-center"><i class="fas fa-3x fa-circle"></i></p>
	    	<p class="text-center small">run!</p>
	    	@else 
	    		<p class="text-center"><i class="fas fa-3x fa-times"></i></p>
	    		<p class="text-center small">(no run)</p>
	    	@endif
		</div>
	</div>
	 	<div class="float-right">
 		<a href="/edit/{{$post->id}}"><button class="m-4 btn btn-light btn-sm">Edit</button></a>
 	</div>
  
</div>
</div>

{{-- @endsection --}}