<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.header') 
</head>
<body>
    <!-- Todo -->
    <!-- Slides -->
    <!-- User is not authenticated -->
    @auth
        <nav class = "navbar navbar-light bg-light shadow-sm p-3 mb-5 bg-white-rounded">
                <a href="teacherup" class="navbar-brand">
                    <img src="{{ asset('latefon.png') }}" alt="" class="d-inline-block align-top" width = "30" height = "30">
                    S U P P O R T
                </a>
                <ul class="nav nav-pills justify-content-end">
                    <li class="nav-item">
                        <a href="" class= "nav-item btn btn-outline-dark" role = "button">Perfil</a>
                        <a href="" class= "nav-item btn btn-outline-dark" role = "button">Cerrar sesión</a>
                    </li>
                </ul>
        </nav>
    @endauth
    
   
   
    <main class="py-4">
        @yield('canvas')
    </main>
   
       
</body>
</html>
<!-- HTML when is necessary in each HTML file 
canvas and file canvas when is necessay HTML 
code-->



