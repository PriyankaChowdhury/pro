@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Patients | <a href="{{ url('create') }}">Add new patient</a> </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach($records as $record)
                       <li> <a href="{{url('show', $record->id)}}">{{$record->name}}</a> - <a href="{{url('edit', $record->id)}}">Edit</a> -
                       <form id="destroy-form-{{ $record->id }}" method="post" action="{{ url('destroy', $record->id) }}" style="display: none">
                                {{csrf_field()}}
                                {{ method_field('DELETE') }}
                            </form>
                            <a href="" onclick="
                                    if(confirm('Are you sure, You want to Delete this ??'))
                                    {
                                    event.preventDefault();
                                    document.getElementById('destroy-form-{{ $record->id }}').submit();
                                    }
                                    else {
                                    event.preventDefault();
                                    }">
                                Delete </a>
                        </li>
                        @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<style type="text/css">
    .container{
        color:green;
        font-size:25px;

    }
   *{
    background-color:   #00FFFF;
font-family:Arial;
   }
   .col-md-8{
    text-align:center;
   }
</style>
