@extends('layouts.app')

@section('content')
    <h1>Student Management System</h1>
    
    <h3>Students</h3>
    <a href="{{ route('students.index') }}">View Students</a>
    <a href="{{ route('students.create') }}">Add Student</a>
    
    <h3>Courses</h3>
    <a href="{{ route('courses.index') }}">View Courses</a>
    <a href="{{ route('courses.create') }}">Add Course</a>
@endsection