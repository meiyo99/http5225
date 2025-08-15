@extends('layouts.app')

@section('content')
    <h1>Edit Professor</h1>
    
    <form action="{{ route('professors.update', $professor->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="{{ $professor->name }}">
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('professors.index') }}">Back</a>
    </form>
@endsection