@extends('layout')

EDIT BLADE
@section('content')

<style>
	
/* Checkboxes */



input[type="checkbox"]{

	position: absolute;
	margin-left: 18px;
	margin-top: 20px;
  
}


</style>

      <div class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">

        	<h1 class="text-center">Pee or Poop? </h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{-- {{\Carbon\Carbon::createFromFormat('Y-m-d H',$post->updated_at, 'America/New_York')->toDateTimeString()}} --}}


{{-- {{$post->updated_at->toDateTimeString()}} --}}




<form method="POST" action="/{{$post->id}}">

{{-- include csrf field in all of our forms for authentication --}}
	 {{ csrf_field() }}
	  {{ method_field('PATCH') }}

<div class="form-group text-center">

	<fieldset>
    <legend>Time and Date</legend>

    <div>
      

        {{-- Have to convert from string to unix using strtotime and then to SQL time --}}
        <input type="datetime-local" id="datetime" name="datetime"
               value="{{date("Y-m-d g:i a", strtotime($post->timelogged))}}"

               min="2018-01-01" max="2018-12-31"	
               required />
 
    </div>
 

</fieldset>
</div>


<div class="form-group text-center">
	 <p class="small">pee?</p>
{{-- <div class="btn-group-toggle" data-toggle="buttons"> --}}
@if($post->pee == 1)
	  <label class="btn btn-primary">
    <input type="checkbox" name="pee" id="pee" checked="checked"  autocomplete="off"><i class="fas fa-3x fa-oil-can"></i>
  </label>
@else
  <label class="btn btn-primary">
    <input type="checkbox" name="pee" id="pee" autocomplete="off"><i class="fas fa-3x fa-oil-can"></i>
  </label>
@endif
</div>
{{-- </div> --}}



<hr>




<div class="form-group text-center">
 
  <p class="small">poop?</p>
{{--   <div class="btn-group-toggle" data-toggle="buttons2"> --}}
@if($post->poop == 1)
<label class="btn btn-primary">
    <input type="checkbox" name="poop" id="poop" checked="checked" autocomplete="off"><i class="fas fa-3x fa-poop"></i>
  </label>
@else
  <label class="btn btn-primary">
    <input type="checkbox" name="poop" id="poop" autocomplete="off"><i class="fas fa-3x fa-poop"></i>
  </label>
@endif
</div>
  
{{-- </div> --}}
  
{{-- 
<div class="form-group text-center">
    <label for="poop"><i class="fas fa-3x fa-poo"></i></label>
    <input type="checkbox" class="form-control form-control-lg" id="poop" name="poop"  >
</div> --}}

<div class="form-group text-center">

  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>



</div> {{-- col --}}
</div> {{-- row --}}

@endsection 