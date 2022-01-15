@extends('layouts.canvas')
@section('canvas')

<!-- Not touch first div-->

<div class = "container-canvas">

<div class="imagelogo inrole">
            <img src="{{ asset('late.png') }}" alt="" class = "rounded-circle support">
          </div>

<div class = "selectyourrole shadow p-3 mb-5 rounded">

        <div class="teacher rounded-left">
            <p class="h4 text-center" >¿Quieres ayudar a resolver problemas de soporte técnico?</p><br>
            <a href = "Formteacher" role = "button" class="btn btn-login btn-lg btn-block rounded-pill">Empieza como docente</a>
        </div>
        <div class="student rounded-right" >
             <p class="h4 text-center">¿Quieres consultar y aprender a la marcha de trabajar?</p><br>
            <a href = "Formstudent" role = "button" class="btn btn-login btn-lg btn-block rounded-pill">Empieza como alumno</a>   
        </div>
</div>


</div>