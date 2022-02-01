@extends('layouts.canvas')
    @section('canvas')

      <!-- Not touch first div-->
 

          <div class="imagelogo inrole">
            <img src="{{ asset('late.png') }}" alt="" class = "rounded-circle support">
          </div>

      <div class = "boot-form-container  shadow p-3 mb-5 rounded"> 

        <br>
         <h4 class = "center-title">{{ __('Ingresa') }}</h4><br>
         

         <form action = "{{ route('authusercredentials') }}" method = "POST">
           @csrf
        <input id = "email" class="form-control form-control-lg @error('email') is-invalid @enderror" type="email" placeholder="E-Mail" name = "email"><br>
        @error('email')
          <span class="invalid-feedback" role = "alert" >
              <strong>{{ __('Invalid Credentials') }}</strong>
          </span>
        @enderror
        <input id = "password" class="form-control form-control-lg @error('password') is-invalid @enderror" type="password" name = "password" placeholder="Contraseña"><br>
        @error('password')
          <span class="invalid-feedback" role = "alert">
            <strong> __{{ 'Invalid Credentials' }} </strong>
          </span>
          @enderror
        <button type="submit" class="btn btn-login btn-lg btn-block rounded-pill">Ingresa</button>
        </form><br>
        <div class="linesection"></div><br>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <p class = "lead center-register">{{ __('¿Aún no tienes cuenta?') }} 

          <a href="{{ route ('Choose') }}" role = "button" class = "btn btn-link">Registrate</a></p>
      </div>
      
   
    @endsection
    
    
