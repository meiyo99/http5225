@extends('layouts.app')

@section('content')
    <h1>Course Details</h1>
    
    <p><strong>Name:</strong> {{ $course->name }}</p>
    <p><strong>Description:</strong> {{ $course->description }}</p>
    <p><strong>Professor:</strong> 
        @if($course->professor)
            {{ $course->professor->name }}
        @else
            No professor
        @endif
    </p>
    
    <p><strong>Students:</strong></p>
    @if($course->students->count() > 0)
        @foreach($course->students as $student)
            <p>{{ $student->fname }} {{ $student->lname }}</p>
        @endforeach
    @else
        <p>No students</p>
    @endif
    
    <a href="{{ route('courses.edit', $course->id) }}">Edit</a>
    <a href="{{ route('courses.index') }}">Back</a>
@endsection