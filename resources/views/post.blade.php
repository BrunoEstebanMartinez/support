@extends('layouts.canvas')
@section('canvas')

<!--Not touch Div --> 

<div class="container-canvas">

    <nav class = "navbar navbar-light bg-light shadow-sm p-3 mb-5 bg-white-rounded">
            <a href="teacherup" class="navbar-brand">
              <img src="{{ asset('latefon.png') }}" alt="" class="d-inline-block align-top" width = "30" height = "30">
                S U P P O R T
            </a>
        <ul class="nav nav-pills justify-content-end">
             <li class="nav-item">
                 <a href="" class= "nav-item btn btn-outline-dark" role = "button">{{ __('Perfil') }}</a>
                 <a href="" class= "nav-item btn btn-outline-dark" role = "button">{{ __('Cerrar sesión') }}</a>
             </li>
        </ul>
    </nav>
        
    


</div>


@endsection