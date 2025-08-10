@extends('layouts.app')

@section('content')
    <h1>Add Course</h1>
    
    <form action="{{ route('courses.store') }}" method="POST">
        @csrf
        
        <div class="mb-3">
            <label>Course Name</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
            @error('name')
                <span style="color:red;">{{ $message }}</span>
            @enderror
        </div>
        
        <div class="mb-3">
            <label>Description</label>
            <textarea class="form-control" name="description">{{ old('description') }}</textarea>
            @error('description')
                <span style="color:red;">{{ $message }}</span>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Add</button>
        <a href="{{ route('courses.index') }}">Back</a>
    </form>
@endsection