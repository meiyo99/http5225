<!DOCTYPE html>
<html>
<head>
    <title>Student Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/">Home</a>
            <div class="navbar-nav">
                <a class="nav-link" href="{{ route('students.index') }}">Students</a>
                <a class="nav-link" href="{{ route('courses.index') }}">Courses</a>
            </div>
        </div>
    </nav>
    
    <div class="container">
        @yield('content')
    </div>
</body>
</html>