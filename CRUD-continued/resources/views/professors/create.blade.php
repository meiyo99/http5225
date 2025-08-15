@extends('layouts.app')

@section('content')
    <h1>Add Professor</h1>
    
    <form action="{{ route('professors.store') }}" method="POST">
        @csrf
        
        <div class="mb-3">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
            @error('name')
                <span style="color:red;">{{ $message }}</span>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Add</button>
        <a href="{{ route('professors.index') }}">Back</a>
    </form>
@endsection