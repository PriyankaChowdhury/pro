@extends('layouts.app')
@section('content')
<div class="coloumn">
<div class="row">
@foreach($blogs as $blog)
<div class="col-md-6">
	<div class="card">
		<div class="card-header">
			<a href="{{route('blog_path',['blog'=>$blog->id])}}">{{$blog->title}}</a>
	
	</div>
		
	<div class="card-body">

{{$blog->content}}
<br>
<br>
<br>
<p clas="lead">
	posted
	{{$blog->created_at->diffForHumans()}}
</p>
<a href="{{route('blog_path',['blog'=>$blog->id])}}" class="btn btn-outline-primary">View Post</a>

</div>
</div>
</div>

@endforeach
</div>
@endsection