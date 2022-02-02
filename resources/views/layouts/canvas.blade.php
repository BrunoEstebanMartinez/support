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
    <nav class = "navbar navbar-light bg-light border-bottom">
          <a href="teacherup" class="navbar-brand">
              <img src="{{ asset('latefon.png') }}" alt="" class="d-inline-block align-top" width = "30" height = "30">
        S U P P O R T</a>
         <ul class="nav nav-pills justify-content-end">
             <li class="nav-item">
                 <a href="" class= "nav-item btn btn-light" role = "button">Perfil</a>
                 <form action = "{{ route('logout') }}" method = "post">
                     @csrf
                     <button class= "nav-item btn btn-light" type = "submit">Cerrar sesión</button>
                 </form>
                 
             </li>
         </ul>
    </nav>
    @endauth

   
   
    <main class="container-canvas">
        @yield('canvas')
    </main>
   
       
</body>
</html>
<!-- HTML when is necessary in each HTML file 
canvas and file canvas when is necessay HTML 
code-->



