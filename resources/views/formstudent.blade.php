@extends('layouts.canvas')
@section('canvas')

<!-- Not Touch Div -->

<div class="container-canvas">

   <div class="imagelogo inrole">
            <img src="{{ asset('late.png') }}" alt="" class = "rounded-circle support">
    </div>

          <div class = "boot-form-container  shadow p-3 mb-5 rounded"> 
            <br>
        
        <div class="linesection"></div><br>
         
    <form action="">
        <div class="col-auto input-group mb-3">
            <input type="text" class = "form-control" placeholder = "Nombre">
            <input type="text" class="form-control" placeholder = "Apellido paterno">
            <input type="text" class="form-control" placeholder = "Apellido maternos">
            <input type="text" class = "form-control" placeholder = "Edad">
        </div>    
        <div class="col-auto input-group mb-3">
            <input type="text" class="form-control" placeholder = "Username">
            <input type="text" class="form-control" placeholder = "E-Mail">
        </div>
        <div class="col-auto input-group mb-3">
            <input type="password" class="form-control" placeholder = "Password">
            <input type="password" class="form-control" placeholder = "Confirmation">
        </div>
        <div class="col-auto input-group mb-3">
            <div class="input-group-append">
                <span class="input-group-text">País</span>
            </div>
                <input type="text" class = "form-control">
        </div>
        <div class="col-auto input-group mb-3">
            <div class="input-group-append">
                <span class = "input-group-text">¿Que te interesa?</span>
            </div>
            <select class="form-control">
                <option value=""></option>    
                <option value="">Mantenimiento a equipos de cómputo</option>
                <option value="">Reparación de smartphones, tabletas...</option>
                <option value="">Reparación componentes electrónicos, microcomponentes...</option>
                <option value="">Reparación de electrodomésticos</option>
                <option value=""></option>
            </select>
        </div>
            <button type="submit" class="btn btn-login btn-lg btn-block rounded-pill">Crear</button>
     </form><br>
        <div class="linesection"></div><br>
            <p class = "lead center-register">¿Ya tienes una cuenta? <a href="login" role = "button" class = "btn btn-link">Ingresa</a></p>
        </div>

    </div>

@endsection