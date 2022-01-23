@extends('layouts.canvas')
    @section('canvas')

      <!-- Not touch first div-->
 

          <div class="imagelogo inrole">
            <img src="{{ asset('late.png') }}" alt="" class = "rounded-circle support">
          </div>

      <div class = "boot-form-container  shadow p-3 mb-5 rounded"> 

        <br>
         <h4 class = "center-title">{{ __('Ingresa') }}</h4><br>
         
         <form action="">
        <input class="form-control form-control-lg" type="text" placeholder="E-Mail"><br>
        <input class="form-control form-control-lg" type="password" placeholder="Contraseña"><br>
        <button type="submit" class="btn btn-login btn-lg btn-block rounded-pill">Ingresa</button>
        </form><br>
        <div class="linesection"></div><br>
        <p class = "lead center-register">{{ __('¿Aún no tienes cuenta?') }} <a href="{{ route ('Choose') }}" role = "button" class = "btn btn-link">Registrate</a></p>
      </div>
      
   
    @endsection
    
    
