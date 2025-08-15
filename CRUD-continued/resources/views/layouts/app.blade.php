<!DOCTYPE html>
<html>
<head>
    <title>Laravel LMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/">Laravel LMS</a>
            <div class="navbar-nav">
                <a class="nav-link" href="/students">Students</a>
                <a class="nav-link" href="/courses">Courses</a>
                <a class="nav-link" href="/professors">Professors</a>
            </div>
        </div>
    </nav>
    
    <div class="container">
        @yield('content')
    </div>
</body>
</html>