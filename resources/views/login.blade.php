@extends('layouts.canvas')
    @section('canvas-login')

<style type = "text/css">
  

    </style>
  
    <!-- Not touch first div-->
    <div class = "container-canvas">


          <div class="imagelogo">
            <img src="{{ asset('late.png') }}" alt="" class = "rounded-circle support">
          </div>

      <div class = "boot-form-container  shadow p-3 mb-5 rounded"> 

        <br>
         <h4 class = "center-title">Ingresa</h4><br>
         
         <form action="">
        <input class="form-control form-control-lg" type="text" placeholder="Matricula"><br>
        <input class="form-control form-control-lg" type="password" placeholder="Contraseña"><br>
        <button type="submit" class="btn btn-login btn-lg btn-block rounded-pill">Ingresa</button>
        </form><br>
        <div class="linesection"></div><br>
        <p class = "lead center-register">¿Aún no tienes cuenta? <a href="role" role = "button" class = "btn btn-link">Registrate</a></p>
      </div>
      
    </div>
    @endsection
    