@extends('layouts.canvastudent')
    @section('canvas-student')
    
    <div class="records-Phones">
     @if($phone -> count())
    <table>
        <thead>
        <tr>
            <th>Empresa</th>
            <th>Nombre</th>
            <th>Modelo</th>
            <th>Fallo</th>
            <th>Causa</th>
            <th>Solución</th> 
            <th>Mano de obra</th>
            <th>Total</th>
            <th>Acción</th>
        </tr>
</thead>
<tbody>
    @foreach($phone as $vista)
        <tr>
            <th>{{$vista->enterprise}}</th>
            <th>{{$vista->name}}</th>
            <th>{{$vista->model}}</th>
            <th>{{$vista->failure}}</th>
            <th>{{$vista->cause}}</th>
            <th>{{$vista->solution}}</th>
            <th>{{$vista->workforce}}</th>
            <th>{{$vista->total}}</th>
            
            <th>
                <a href="{{action('PhoneController@edit', $vista->id_phone)}}"><input type="button" value = "Modificar" name = "FormEditStudent"></a>
            <th>
            <th>
                <form action="{{action('PhoneController@destroy', $vista->id_phone)}}" method="post">
                {{csrf_field()}}
                <input type="hidden" name = "_method" value = "DELETE">    
                <input type="submit" value="Eliminar" class = "button-non">
                </form>
            </th>
        </tr>
        @endforeach
<tbody>
    </table>
    @else
    <p>No hay registros</p><br>
    @endif        
     </div>
     <div>
    
     </div>
     @endsection
     @section('forms-student')
     
     <form method = "post" action="{{route('store')}}" >
     
     {{ csrf_field() }} 
     
     <input type="text" name="enterprise" value = "" placeholder ="Empresa" class = "forms-this-1" required>
     <input type="text" name="name" value = "" placeholder ="Nombre" class = "forms-this-1" required>
     <input type="text" name="model" value = "" placeholder ="Modelo" class = "forms-this-1" required>
     <input type="text" name="failure" value = "" placeholder ="Fallo" class = "forms-this-1" required>
     <input type="text" name="cause" value = "" placeholder ="Causa" class = "forms-this-1" required>
     <input type="text" name="solution" value = "" placeholder ="Solución" class = "forms-this-1" required>   
     <input type="number" name="workforce" value = "" placeholder ="Mano de obra" class = "forms-this-1" required>
     <input type="number" name="total" value = "" placeholder ="Total" class = "forms-this-1" required>   
     <input type="submit" value="Crear" name = "" class = "forms-this-1"> 
</form>    
@endsection