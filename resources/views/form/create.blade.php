@extends('form.master')
@section ('content')
<div class="row">
<div class="col-md-12">
	<br />
	<h3 aling="center">Add Data</h3>
	<br />
	
 
	<form action="/form" method="POST">
	<div class="form-group">
		{{csrf_field()}}
	<input type="text" name="name" class="form-control" placeholder="Name"/>
	</div>
	<div class="form-group">
	<input type="text" email="email" name="email" class="form-control" placeholder="email"/>
	</div>
<div class="form-group">
	<input type="mediumtext" name="your_message" class="form-control" placeholder="message"/>
</div>
<div class="button">
	<button type="submit" class="btn btn-primary">Send</button>
</div>
</form>

		


</div>
</div>
 <!--@if(\Session::has('success'))
  <div class="alert alert-success">
   <p>{{ \Session::get('success') }}</p>
  </div>
  @endif -->
@endsection