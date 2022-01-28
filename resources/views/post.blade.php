@extends('layouts.canvas')
@section('canvas')

<!--Not touch Div --> 

<div class="container-canvas">

    <nav class = "navbar navbar-light bg-light shadow-sm p-3 mb-5 bg-white-rounded">
            <a href="teacherup" class="navbar-brand">
              <img src="{{ asset('latefon.png') }}" alt="" class="d-inline-block align-top" width = "30" height = "30">
                S U P P O R T
            </a>
        <ul class="nav nav-pills justify-content-end">
             <li class="nav-item">
                 <a href="" class= "nav-item btn btn-outline-dark" role = "button">{{ __('Perfil') }}</a>
                 <a href="" class= "nav-item btn btn-outline-dark" role = "button">{{ __('Cerrar sesión') }}</a>
             </li>
        </ul>
    </nav>

    <div class="canverfeed border" >
      <div class="container-posted ">
            <div class="up-button-posted ">
                <form action="">
                    <input type="submit" class = "btn btn-login" value = "Compartir">
                
            </div>
            <div class="vista-post-tools  shadow-lg p-3 mb-5 bg-white rounded">
                <div class="my-title-up-post ">
                   <input type="text" class="form-control form-control-lg" placeholder = "Titulo...">                    
                </div>
                <div class="menu-tools-post border-top border-dark">

                </div>
            </div>
            
            <div class="write-user-here  shadow-lg p-3 mb-5 bg-white rounded">
                    <textarea class = "form-control" name="" id="" rows="10" placeholder = "¿Que estas creando? ..."></textarea>
            </div>
            </form>
        </div>


        <div class="tg-information-check border-left">
            <div class="info-today-check ">
                 <div class="reedme-tod-year border-bottom border-dark">
                        <p class="h5"><strong>{{ __('¡Hola!, ¿Eres nuevo?') }}</strong></p>
                 </div>
                <div class="reedme-inform-year">
                        <div class="subtit-inform-y1">
                                <p class="lead"><small>{{ __('Bienvenido a LATE SOPORTE: Name') }}</small></p>
                        </div>
                        <div class="textt-large-inform-y2">
                                <p class="lead text-muted text-break"><small>{{ __('Aquí aprenderemos todo lo 
                                    relacionado para aumentar tu red, grupos, mediante ') }}<strong>{{  __('Tags')  }}</strong>. No te preocupes 
                                    si te pierdes, este <strong>{{ __('Banner') }}</strong> te ayudará a crecer cada que publiques. <strong>{{  __('¡En hora buena!')  }}</strong></small></p>
                        </div>
                </div>
            </div>
            <div class="tg-relation-p">
                    <div class="tg-relation-p1 border-bottom border-dark">
                             <p class="h5"><strong>{{ __('Relacionados') }}</strong></p>   
                    </div>
                    <div class="tg-relation-glob-p01">
                        <div class="tg-relation-p2">
                             <p class="lead"><small>{{ __('En tu ') }}<strong><a href="">{{  __('especialidad') }}</a></strong> hay popularidad de crecimiento en ...</small></p>
                        </div>
                        <div class="tg-relation-p3">
                           
                                    <div class="check-tag1">
                                        <div class="t1 ">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label for="" class="form-check-label">{{ __('Name') }}</label>
                                            </div>
                                        </div>
                                        <div class="t2 ">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label for="" class="form-check-label">{{ __('Name') }}</label>
                                            </div>
                                        </div>
                                        <div class="t3 ">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label for="" class="form-check-label">{{ __('Name') }}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="check-tag2 ">
                                        <div class="t1 ">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label for="" class="form-check-label">{{ __('Name') }}</label>
                                            </div>
                                        </div>
                                        <div class="t2 ">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label for="" class="form-check-label">{{ __('Name') }}</label>
                                            </div>
                                        </div>
                                        <div class="t3 ">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label for="" class="form-check-label">{{ __('Name') }}</label>
                                            </div>
                                        </div>
                                    </div>

                                
                        </div>
                    </div>
                    
            </div>
            <div class="tg-other-relation-p ">
                         <div class="tg-relation-p1 border-bottom border-dark">
                                <p class="h5"><strong>{{ __('Más usados') }}</strong></p>
                         </div>
                                <div class="tg-relation-glob-p01 ">
                                    <div class="tg-relation-p2 ">
                                         <p class="lead"><small>{{ __('Sigue creciendo con tus ') }}<strong><a href="">{{  __('Tags')  }}</a></strong> {{ __('favoritos.') }}</small></p>
                                    </div>
                                    <div class="tg-relation-p3 ">
                                        <div class="check-tag1 ">
                                            <div class="t1 ">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input">
                                                    <label for="" class="form-check-label">{{ __('Name') }}</label>
                                                </div>
                                            </div>
                                        <div class="t2 ">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label for="" class="form-check-label">{{ __('Name') }}</label>
                                            </div>
                                        </div>
                                        <div class="t3 ">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label for="" class="form-check-label">{{ __('Name') }}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="check-tag2">
                                        <div class="t1">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label for="" class="form-check-label">{{ __('Name') }}</label>
                                            </div>
                                        </div>
                                        <div class="t2">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label for="" class="form-check-label">{{ __('Name') }}</label>
                                            </div>
                                        </div>
                                        <div class="t3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label for="" class="form-check-label">{{ __('Name') }}</label>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
            </div>
        </div>
    

    </div>  
        

</div>


@endsection