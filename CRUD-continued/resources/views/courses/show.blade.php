@extends('layouts.app')

@section('content')
    <h1>Course Details</h1>
    
    <p><strong>Name:</strong> {{ $course->name }}</p>
    <p><strong>Description:</strong> {{ $course->description }}</p>
    
    <a href="{{ route('courses.edit', $course->id) }}">Edit</a>
    <a href="{{ route('courses.index') }}">Back</a>
@endsection