@extends('layouts.app')

@section('content')
    <h1>Edit Course</h1>
    
    <form action="{{ route('courses.update', $course->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label>Course Name</label>
            <input type="text" class="form-control" name="name" value="{{ $course->name }}">
        </div>
        
        <div class="mb-3">
            <label>Description</label>
            <textarea class="form-control" name="description">{{ $course->description }}</textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('courses.index') }}">Back</a>
    </form>
@endsection