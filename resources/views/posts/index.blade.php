@extends('layout')



@section('content')

<div class="row">

	<div class="col">
	<div class="mt-3 float-left">
	 		<a href="/counts"><button class="mt-3 btn btn-success">Counts</button></a>
	 </div>
</div>
	<div class="col">
	<div class="mt-3 float-right">
			<a class="btn btn-primary" href="/create">
				<i class="btn btn-primary fas fa-2x fa-plus"></i>
			</a>
		
	</div>
</div>



</div>

@if (session('status'))
    <div class="alert alert-success mt-2">
        {{ session('status') }}
    </div>
@endif

@foreach($posts as $post)

         @include('posts.post')

@endforeach


@endsection

