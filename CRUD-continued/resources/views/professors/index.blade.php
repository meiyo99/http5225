@extends('layouts.app')

@section('content')
    <h1>Professors</h1>
    <a href="{{ route('professors.create') }}" class="btn btn-primary">Add Professor</a>
    <br><br>
    
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Assigned Course</th>
            <th>Actions</th>
        </tr>
        @foreach ($professors as $professor)
            <tr>
                <td>{{ $professor->name }}</td>
                <td>
                    @if($professor->course)
                        {{ $professor->course->name }}
                    @else
                        No course assigned
                    @endif
                </td>
                <td>
                    <a href="{{ route('professors.show', $professor->id) }}">View</a>
                    <a href="{{ route('professors.edit', $professor->id) }}">Edit</a>
                    <form action="{{ route('professors.destroy', $professor->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection