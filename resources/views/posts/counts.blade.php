@extends('layout')

@section('content')

      <div class="row mt-3">
            <div class="col">

              <p class="float-left"> <a class="btn btn-primary btn-sm" href="/">
          back</i>
        </a></p>
            </div>
          </div>
	<h1 class="mt-2">Counts</h1>
{{-- <div class="row mt-3"> --}}





<ul class="nav nav-tabs mt-3" id="myTab" role="tablist">
  
  <li class="nav-item">
    <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fas fa-3x fa-swimmer"></i><p class="small text-center">Swim</p></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-3x fa-circle"></i><p class="small text-center">Run</p></a>
  </li>
</ul>
<div class="tab-content mt-2" id="myTabContent">

  <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">@foreach($peecounts as $pee)
 	<h2>{{$pee->month}} {{$pee->day}}</h2>
 	<p>
 	@for ($i = 0; $i < $pee->pee; $i++)
    <i class="fas fa-2x fa-swimmer"></i>
	@endfor
 	 <span class="badge badge-dark">{{$pee->pee}}</span>
 	</p>
 	@endforeach
 	</div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
  	@foreach($poopcounts as $poop)
 	<h2>{{$poop->month}} {{$poop->day}}</h2>
 	<p>@for ($i = 0; $i < $poop->poop; $i++)
    <i class="fas fa-2x fa-circle"></i>
	@endfor <span class="badge badge-dark">{{$poop->poop}}</span></p>
 	@endforeach

</div>

@endsection