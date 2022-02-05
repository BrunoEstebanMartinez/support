@extends('layouts.canvas')
@section('canvas')

<!-- Not Touch Div -->

   <div class="imagelogo inrole">
            <img src="{{ asset('late.png') }}" alt="" class = "rounded-circle support">
    </div>

          <div class = "boot-form-container  shadow p-3 mb-5 rounded"> 
            <br>
        
        <div class="linesection"></div><br>
         
    <form action = "{{ route('register') }}" method = "POST">
        @csrf
        <div class="col-auto input-group mb-3">
            <input type="text" class = "form-control" name = "Names" placeholder = "Nombre">
            <input type="text" class="form-control" name = "Last_Name" placeholder = "Apellido paterno">
            <input type="text" class="form-control" name = "MLast_Name" placeholder = "Apellido maternos">
        </div>    
        <div class="col-auto input-group mb-3">
            <input type="email" class="form-control" name = "email" placeholder = "E-Mail">
        </div>
        <div class="col-auto input-group mb-3">
            <input type="password" class="form-control" name = "password" placeholder = "Password">
            <input type="password" class="form-control" name = "password_confirmation" placeholder = "Confirmation">
        </div>
        <div class="col-auto input-group mb-3">
            <div class="input-group-append">
                <span class="input-group-text">País</span>
            </div>
                <input type="text" name = "Country" class = "form-control">
        </div>
        <input type="hidden" name = "roleuser" value = "2">
            <input type="submit" class="btn btn-login btn-lg btn-block rounded-pill" value  = "Continuar" > 
    </form><br>
        <div class="linesection"></div><br>
            <p class = "lead center-register">¿Ya tienes una cuenta? <a href="login" role = "button" class = "btn btn-link">Ingresa</a></p>
        </div>

        <!--- Only error test validation--->

        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <!-- Only error test validation -->
    

    

@endsection