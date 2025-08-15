@extends('layouts.app')

@section('content')
    <h1>Add Student</h1>
    
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        
        <div class="mb-3">
            <label>First Name</label>
            <input type="text" class="form-control" name="fname" value="{{ old('fname') }}">
            @error('fname')
                <span style="color:red;">{{ $message }}</span>
            @enderror
        </div>
        
        <div class="mb-3">
            <label>Last Name</label>
            <input type="text" class="form-control" name="lname" value="{{ old('lname') }}">
            @error('lname')
                <span style="color:red;">{{ $message }}</span>
            @enderror
        </div>
        
        <div class="mb-3">
            <label>Email</label>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
            @error('email')
                <span style="color:red;">{{ $message }}</span>
            @enderror
        </div>
        
        <div class="mb-3">
            <label>Courses</label>
            @foreach ($courses as $course)
                <div>
                    <input type="checkbox" name="courses[]" value="{{ $course->id }}">
                    {{ $course->name }}
                </div>
            @endforeach
        </div>
        
        <button type="submit" class="btn btn-primary">Add</button>
        <a href="{{ route('students.index') }}">Back</a>
    </form>
@endsection