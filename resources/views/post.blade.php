@extends('layouts.canvas')
@section('canvas')

<!--Not touch Div --> 

<div class="container-canvas">

    <div class="description-tags-instructions">
        <div class="leyendainstruction">
            <h3>¡Aumenta tu red!</h3>
            <p class = "text-justify">Un tag te ayudará a llegar a más personas.</p>
            <p class="text-justify">Escribe un verbo y/o adjetivo que esté relacionado con tu publicación y... ¡Listo! Tu comunidad aprenderá de ti.</p>
        </div>
    </div>
    <div class="tags-user">
        <div class="tags">
             <div class="input-group">
                 <div class="input-group-prepend">
                     <span class="input-group-text">Tags</span>
                 </div>
                 <form action="" method = "post">
                 <input type="text" class = "form-control" placeholder = "Escribe un tag">
                 <input type="submit" class = "btn btn-outline-success" value = "Agregar">
                 </form>
                 
             </div>
        </div>
        <div class="user-content-tags">
                <div class="content-tags">

                </div>
                <div class="alldisusers">
                    
                </div>
        </div>
    </div>
    <div class="scroll-post-canvas shadow-lg p-3 mb-5 bg-white rounded">
            <div class="container-title-post">
                <div class = "title-post">

                </div>
            </div>
            <div class="container-subtitle-post">
                <div class = "subtitle-post"></div>
            </div>
            <div class="container-autor-post">
                <div class = "autor"></div>
            </div>
            <div class="body-description">
                <div class="mybodypost">

                </div>
            </div>
            
           
            

    </div>


</div>


@endsection