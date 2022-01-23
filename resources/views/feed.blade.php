@extends('layouts.canvas')
    @section('canvas')

<!-- Not Touch Div -->

<div class="container-canvas">
    <nav class = "navbar navbar-light bg-light">
          <a href="teacherup" class="navbar-brand">
              <img src="{{ asset('latefon.png') }}" alt="" class="d-inline-block align-top" width = "30" height = "30">
        S U P P O R T</a>
         <ul class="nav nav-pills justify-content-end">
             <li class="nav-item">
                 <a href="" class= "nav-item btn btn-outline-dark" role = "button">Perfil</a>
                 <a href="" class= "nav-item btn btn-outline-dark" role = "button">Cerrar sesión</a>
             </li>
         </ul>
    </nav>

        <div class = "containerteacher">
            <div class="ranking-challenge-test">
                    <div class = "ranking">
                        <div class = "title-ranking"></div>
                        <div class = "scroll-container-ranking">
                            <div class = "title-materia"></div>
                            <div class="icons-ranking"></div>
                        </div>
                    </div>
                    <div class = "challenge">
                        <div class = "title-challenge"></div>
                        <div class = "scroll-container-challenge">

                        </div>
                    </div>
                    <div class = "test">
                        <div class = "title-test"></div>
                        <div class = "scroll-container-test">

                        </div>
                    </div>

            </div>
            <div class="todo-hilo-questions-offer">
                    <div class="container-create rounded">

                    </div>
                    <div class="scroll-temas shadow p-3 mb-5 bg-white rounded">
                        
                    </div>
            </div>
            <div class="red-friends">
                <div class="redteacher">
                    <div class="title-red-friends"></div>
                    <div class="searchred">

                    </div>
                    <div class="scroll-redteacher">

                    </div>
                </div>
                <div class="groups-red">
                    <div class="title-gr"></div>
                    <div class="scroll-gr">

                    </div>
                </div>
            </div>
    </div>




</div>

@endsection