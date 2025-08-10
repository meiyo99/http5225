@extends('layouts.app')

@section('content')
    <h1>Students</h1>
    <a href="{{ route('students.create') }}" class="btn btn-primary">Add Student</a>
    <br><br>
    
    <table class="table">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->fname }}</td>
                <td>{{ $student->lname }}</td>
                <td>{{ $student->email }}</td>
                <td>
                    <a href="{{ route('students.show', $student->id) }}">View</a>
                    <a href="{{ route('students.edit', $student->id) }}">Edit</a>
                    <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection