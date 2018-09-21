@extends('layout')



@section('content')

<div class="row">
	<div class="col">
	<div class="mt-3 float-left">
			<a class="btn btn-primary" href="/create">
				<i class="btn btn-primary fas fa-2x fa-plus"></i>
			</a>
		
	</div>
</div>

<div class="col">
	<div class="mt-3 float-right">
	 		<a href="/counts"><button class="mt-3 btn btn-success">Counts</button></a>
	 </div>
</div>

</div>

@foreach($posts as $post)

         @include('posts.post')

@endforeach

{{-- <div class="row mt-5">
	<div class="col">
		<p class="text-center">
			<a class="btn btn-primary" href="/create">
				<i class="btn btn-primary fas fa-3x fa-plus"></i>
			</a>
		</p>
	</div>
</div> --}}

@endsection

