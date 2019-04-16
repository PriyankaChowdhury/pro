@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Name: {{ $record->name }}</div>

                <div class="card-body">
                    
                    <p>Disability: {{ $record->disability }}</p>
                    <p>Description: {{ $record->description }}</p>
                    <p>Create at: {{ $record->created_at }}</p>
                   
                        
                    
                </div>
                <p><a href="{{ url('record') }}">Back to the list</a> </p>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
<style>
    .container{
        color:green;
   
    }
    *{
        background-color:#00FFFF;
        font-size:25px;
        font-family:Arial;
    }
    </style>
