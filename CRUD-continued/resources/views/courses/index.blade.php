@extends('layouts.app')

@section('content')
    <h1>Courses</h1>
    <a href="{{ route('courses.create') }}" class="btn btn-primary">Add Course</a>
    <br><br>
    
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
        @foreach ($courses as $course)
            <tr>
                <td>{{ $course->name }}</td>
                <td>{{ $course->description }}</td>
                <td>
                    <a href="{{ route('courses.show', $course->id) }}">View</a>
                    <a href="{{ route('courses.edit', $course->id) }}">Edit</a>
                    <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection