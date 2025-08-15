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
        
        <div class="mb-3">
            <label>Assign Professor</label>
            <select class="form-control" name="professor_id">
                <option value="">Select a Professor</option>
                @foreach($professors as $professor)
                    <option value="{{ $professor->id }}" {{ $course->professor_id == $professor->id ? 'selected' : '' }}>
                        {{ $professor->name }}
                    </option>
                @endforeach
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('courses.index') }}">Back</a>
    </form>
@endsection