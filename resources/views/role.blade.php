@extends('layouts.canvas')
    @section('canvas')

<!-- Not touch first div-->


        <div class="imagelogo inrole">
            <img src="{{ asset('late.png') }}" alt="" class = "rounded-circle support">
        </div>

        <div class = "selectyourrole shadow p-3 mb-5 rounded">

            <div class="teacher rounded-left">
                <p class="h4 text-center" >{{ __('¿Quieres ayudar a resolver problemas de soporte técnico?') }}</p><br>
                    <form action="{{ route ('UpUser') }}" method = "GET">
                        @csrf
                        <input type="submit" class="btn btn-login btn-lg btn-block rounded-pill" name = "docente" value = "Empieza como docente">
                    </form>
            </div>

        <div class="student rounded-right" >
             <p class="h4 text-center">{{ __('¿Quieres consultar y aprender a la marcha de trabajar?') }}</p><br>

                <form action=" {{ route ('UpUser') }} " method = "GET">
                    @csrf
                    <input type = "submit" class="btn btn-login btn-lg btn-block rounded-pill" name = "alumno" value = "Empieza como alumno">
                </form>
        </div>

@endsection



