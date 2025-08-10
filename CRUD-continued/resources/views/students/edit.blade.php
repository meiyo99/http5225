@extends('layouts.app')

@section('content')
    <h1>Edit Student</h1>
    
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label>First Name</label>
            <input type="text" class="form-control" name="fname" value="{{ $student->fname }}">
        </div>
        
        <div class="mb-3">
            <label>Last Name</label>
            <input type="text" class="form-control" name="lname" value="{{ $student->lname }}">
        </div>
        
        <div class="mb-3">
            <label>Email</label>
            <input type="email" class="form-control" name="email" value="{{ $student->email }}">
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('students.index') }}">Back</a>
    </form>
@endsection