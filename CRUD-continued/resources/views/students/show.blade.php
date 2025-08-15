@extends('layouts.app')

@section('content')
    <h1>Student Details</h1>
    
    <p><strong>Name:</strong> {{ $student->fname }} {{ $student->lname }}</p>
    <p><strong>Email:</strong> {{ $student->email }}</p>
    
    <p><strong>Courses:</strong></p>
    @if($student->courses->count() > 0)
        @foreach($student->courses as $course)
            <p>{{ $course->name }}</p>
        @endforeach
    @else
        <p>No courses</p>
    @endif
    
    <a href="{{ route('students.edit', $student->id) }}">Edit</a>
    <a href="{{ route('students.index') }}">Back</a>
@endsection