@extends('layout')



@section('content')


@foreach($posts as $post)

         @include('posts.post')

@endforeach

<div class="row mt-5">
	<div class="col">
		<p class="text-center">
			<a class="btn btn-primary" href="/create">
				<i class="btn btn-primary fas fa-3x fa-plus"></i>
			</a>
		</p>
	</div>
</div>

@endsection

