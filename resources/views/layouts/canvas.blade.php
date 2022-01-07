<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.header') 
</head>
<body>

    <!-- Todo -->
    @yield('canvas-register')
    @yield('canvas-login')
    @yield('role-register')
    @yield('canvas-admin')
    @yield('canvas-student')
    @yield('canvas-teacher')
    <!-- SlideBars -->
    @yield('forAdmins')
    @yield('forStudents')
    @yield('forTeachers')
    <!-- Forms -->
    @yield('Login')
    @yield('FormRegisterStudent')
    @yield('FormRegisterTeacher')

    
</body>
</html>


<!-- HTML when is necessary in each HTML file 
canvas and file canvas when is necessay HTML 
code-->



