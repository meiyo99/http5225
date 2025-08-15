@extends('layouts.app')

@section('content')
    <h1>Professor Details</h1>
    
    <p><strong>Name:</strong> {{ $professor->name }}</p>
    <p><strong>Assigned Course:</strong> 
        @if($professor->course)
            {{ $professor->course->name }}
        @else
            No course assigned
        @endif
    </p>
    
    <a href="{{ route('professors.edit', $professor->id) }}">Edit</a>
    <a href="{{ route('professors.index') }}">Back</a>
@endsection