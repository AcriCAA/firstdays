@extends('layout')

@section('content')
	<h1>Counts</h1>
<div class="row mt-3">


 <div class="col px-3 border">
 	<p class="text-center"><i class="fas fa-3x fa-oil-can"></i></p>
 	@foreach($peecounts as $pee)
 	<h2>{{$pee->month}} {{$pee->day}}</h2>
 	<p>Pee: {{$pee->pee}}</p>
 	@endforeach
 	
  
</div>

 <div class="col px-3 border">
 	<p class="text-center"><i class="fas fa-3x fa-poop"></i></p>
 	@foreach($poopcounts as $poop)
 	<h2>{{$poop->month}} {{$poop->day}}</h2>
 	<p>Poop: {{$poop->poop}}</p>
 	@endforeach
 	
  
</div>
</div>

@endsection