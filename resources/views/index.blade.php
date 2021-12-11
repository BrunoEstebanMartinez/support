<!DOCTYPE html>
<html lang="en">
<?php include("../public/header.php") ?>    
<body>
<div class = "header-container-vertical">
    <div class = "box-menu-1">
       
        <a class = "box-icon-1" href = "#workspace" >
        <svg xmlns="http://www.w3.org/2000/svg" 
        class="icon-tabler-book"
        
        width="27" height="27" 
        viewBox="0 0 24 24" 
        stroke-width="1" 
        stroke="#ffffff" 
        fill="none" 
        stroke-linecap="round" 
        stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <rect x="2" y="6" width="20" height="12" rx="2" />
  <line x1="6" y1="10" x2="6" y2="10" />
  <line x1="10" y1="10" x2="10" y2="10" />
  <line x1="14" y1="10" x2="14" y2="10" />
  <line x1="18" y1="10" x2="18" y2="10" />
  <line x1="6" y1="14" x2="6" y2="14.01" />
  <line x1="18" y1="14" x2="18" y2="14.01" />
  <line x1="10" y1="14" x2="14" y2="14" />
    </svg><br><span class = "icon-works">Workspace</span>
</a>

        <a class = "box-icon-2"      href = "#library">
        <svg xmlns="http://www.w3.org/2000/svg" 
         class="icon-tabler-book"
        width="27" 
        height="27" 
        viewBox="0 0 24 24" 
        stroke-width="1" 
        stroke="#ffffff" 
        fill="none" 
        stroke-linecap="round" 
        stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
    <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
    <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
    <line x1="3" y1="6" x2="3" y2="19" />
    <line x1="12" y1="6" x2="12" y2="19" />
    <line x1="21" y1="6" x2="21" y2="19" />
    </svg><br><span class = "icon-works-1">Library</span>
</a>

        <a class = "box-icon-3"  href = "#teams">
        <svg xmlns="http://www.w3.org/2000/svg" 
        class="icon-tabler-book" 
        href = "#teams"
        width="27" 
        height="27" 
        viewBox="0 0 24 24" 
        stroke-width="1" 
        stroke="#ffffff" 
        fill="none" 
        stroke-linecap="round" 
        stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <circle cx="9" cy="7" r="4" />
  <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
  <path d="M16 3.13a4 4 0 0 1 0 7.75" />
  <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
</svg><br><span class = "icon-works-2">Teams</span>
</a>
        
        <a class = "box-icon-4"  href = "#analitics">
        <svg xmlns="http://www.w3.org/2000/svg" 
        class="icon-tabler-book"
        
        width="27" 
        height="27" 
        viewBox="0 0 24 24" 
        stroke-width="1" 
        stroke="#ffffff" 
        fill="none" 
        stroke-linecap="round" 
        stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <circle cx="7" cy="7" r="4" />
  <path d="M7 3v4h4" />
  <line x1="9" y1="17" x2="9" y2="21" />
  <line x1="17" y1="14" x2="17" y2="21" />
  <line x1="13" y1="13" x2="13" y2="21" />
  <line x1="21" y1="12" x2="21" y2="21" />
</svg><br><span class = "icon-works-3">Analitics</span>
</a>

        
    </div>
</div>
   
    

   
  <div class = "header-container-horizontal">
      <div class = "image-container-1">
      <svg xmlns="http://www.w3.org/2000/svg"  
      width="34" height="34" 
      viewBox="0 0 24 24" 
      stroke-width="1" 
      stroke="#2c3e50" 
      fill="none" 
      stroke-linecap="round" 
      stroke-linejoin="round">
      <path 
    stroke="none" 
    d="M0 0h24v24H0z" 
    fill="none"/>
    <circle 
    cx="12" cy="7" r="4" />
    <path 
    d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />    
    </svg></div> 
    <svg xmlns="http://www.w3.org/2000/svg" 
    class="icon-tabler-layout-grid" 
    width="27" 
    height="27" 
    viewBox="0 0 24 24" 
    stroke-width="1" 
    stroke="#ffffff" 
    fill="none" 
    stroke-linecap="round" 
    stroke-linejoin="round">
  <path 
  stroke="none" 
  d="M0 0h24v24H0z" 
  fill="none"/>
  <rect x="4" y="4" width="6" height="6" rx="1" />
  <rect x="14" y="4" width="6" height="6" rx="1" />
  <rect x="4" y="14" width="6" height="6" rx="1" />
  <rect x="14" y="14" width="6" height="6" rx="1" />
</svg> 
      <div class = "Label-Name-Header"><h1 class = "Label-Name-1">S u p p o r t - </h1></div>
</div>

<scroll-container>


  <scroll-page id="workspace">
  <div class = "canvas">
     
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
               <a href="{{action('PhoneController@edit', $vista->id_phone)}}"> <button value = "mod">Modificar</button></a>              
            </th>
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

     <div class="forms-client">
        @include("save")
     </div>
    
     
  </div>
  </scroll-page>


  <scroll-page id="library">
  <div class = "canvas" >
     
    </div>
  </scroll-page>


  <scroll-page id="teams">
    <div class="canvas">
  
    </div>
  </scroll-page>

  <scroll-page id="analitics">
    <div class="canvas">
   
    </div>
  </scroll-page>


  </scroll-container>



   
</body>
</html>