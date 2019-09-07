@extends('layout')


@section('content')

<style>
  
.btn-info:not(:disabled):not(.disabled).active, .btn-info:not(:disabled):not(.disabled):active, .show>.btn-info.dropdown-toggle {
color: #fff;
background-color: #03308b;


</style>


      <div class="container">

          <div class="row mt-3">
          <div class="col">

            <p class="float-left"> <a class="btn btn-danger btn-sm" href="/">
        Cancel</i>
      </a></p>
          </div>
        </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

        	<h1 class="text-center">Swim or Run? </h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form method="POST" action="/store">

{{-- include csrf field in all of our forms for authentication --}}
	 {{ csrf_field() }}

<div class="form-group text-center">


  <p><i class="fas fa-3x fa-swimmer"></i></p>
  <p class="small">Swim?</p>

<fieldset data-role="controlgroup" required>

   <div class="btn-group btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-info">
    <input type="radio" name="pee" id="pee" value="1" autocomplete="off"> Yes
  </label>
  <label class="btn btn-info active">
    <input type="radio" name="pee" id="pee" value="0" autocomplete="off"> No
  </label>

  
</div>

</fieldset>

</div>



<hr>

<div class="form-group text-center">
  <p><i class="fas fa-3x fa-running"></i></p>
  <p class="small">Run?</p>
  <fieldset data-role="controlgroup1" required>
   <div class="btn-group btn-group-toggle" data-toggle="buttons">
      <label class="btn btn-info">
        <input type="radio" name="poop" id="poop" value="1" autocomplete="off"> Yes
      </label>
      <label class="btn btn-info active">
        <input type="radio" name="poop" id="poop" value="0" autocomplete="off"> No
      </label>

  
    </div>
   
    </fieldset>
  
</div>
  
{{-- 
<div class="form-group text-center">
    <label for="poop"><i class="fas fa-3x fa-running"></i></label>
    <input type="checkbox" class="form-control form-control-lg" id="poop" name="poop"  >
</div> --}}

<div class="form-group text-center">

  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>



</div> {{-- col --}}
</div> {{-- row --}}

@endsection 