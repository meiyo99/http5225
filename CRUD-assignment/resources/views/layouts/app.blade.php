<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>
<body>
    <a href="{{ route('students.index') }}">All Students</a> | 
    <a href="{{ route('students.create') }}">Add Student</a>
    <hr>
    @yield('content')
</body>
</html>