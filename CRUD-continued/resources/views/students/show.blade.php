@extends('layouts.app')

@section('content')
    <h1>Student Details</h1>
    
    <p><strong>Name:</strong> {{ $student->fname }} {{ $student->lname }}</p>
    <p><strong>Email:</strong> {{ $student->email }}</p>
    
    <a href="{{ route('students.edit', $student->id) }}">Edit</a>
    <a href="{{ route('students.index') }}">Back</a>
@endsection