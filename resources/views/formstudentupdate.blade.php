@extends('layouts.canvastudent')
    @section('forms-student')
        @parent
        <form method = "post" class="formed" action=" {{ route('phone.update', $phone->id_phone) }}">
       {{ csrf_field() }} 
       <input type="hidden" name = "_method" value = "PATCH">
        <input type="text" name="enterprise" value = "{{$phone->enterprise}}" placeholder ="Empresa" class = "forms-this-1" required>
        <input type="text" name="name" value = "{{$phone->name}}" placeholder ="Nombre" class = "forms-this-1" required>
        <input type="text" name="model" value = "{{$phone->model}}" placeholder ="Modelo" class = "forms-this-1" required>
        <input type="text" name="failure" value = "{{$phone->failure}}" placeholder ="Fallo" class = "forms-this-1" required>
        <input type="text" name="cause" value = "{{$phone->cause}}" placeholder ="Causa" class = "forms-this-1" required>
        <input type="text" name="solution" value = "{{$phone->solution}}" placeholder ="Solución" class = "forms-this-1" required>   
        <input type="number" name="workforce" value = "{{$phone->workforce}}" placeholder ="Mano de obra" class = "forms-this-1" required>
        <input type="number" name="total" value = "{{$phone->total}}" placeholder ="Total" class = "forms-this-1" required>
       <input type="submit" value="Modificar" class = "forms-this-1" required>

    </form>
@endsection