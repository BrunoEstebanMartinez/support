@extends('layouts.canvas')
    @section('canvas-login')
    <div>
      <div>
        <h3>Bienvenido</h3>
      </div>
      <div>
        <form action="" method = "head">
          <input type="text" placeholder = "matricula" requires><br><br>
          <input type="password" placeholder = "contraseña" required><br><br><br>
          <a href="/pruebaderuta"><input type="button" value = "Ingreso"></a>
        </form>
      </div>
      
    </div>
    @endsection
    