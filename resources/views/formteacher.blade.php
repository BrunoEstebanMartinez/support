@extends('layouts.canvas')
@section('FormRegisterTeacher')

<!-- Not Touch Div -->

<div class="container-canvas">

    <div class="containerregister">
        
         <div class="formscrollcontent">
                    
                <div class = "NumberHeader">
                    
                    <div class = "ForceVertical">
                        <a href = "#PersonalInformationTeacher" role = "button" class="btn btn-primary btn-sm rounded-circle">1</a><br><br>
                        <a href = "#ReferencialInformationTeacher" role = "button" class="btn btn-primary btn-sm rounded-circle">2</a>
                     </div>
                        
                </div>

                <scroll-container>

                    <scroll-page id = "PersonalInformationTeacher">
                        <div class = "OneHeader"><h3>Información personal</h3></div>
                        
                            <div class="directionform">
                            
                                <form action="" class = "needs-validation" novalidate>
                                    <div class="form-row align-items-center">
                                    
                                        <div class="col-auto input-group mb-3">

                                            <input type="text" aria-label= "Día" class = "form-control" placeholder = "Nombre(s)">
                                            <input type="text" aria-label= "Mes" class = "form-control" placeholder = "Apellido Paterno">
                                            <input type="text" aria-label = "Año" class = "form-control" placeholder = "Apellido Materno">

                                        </div>

                                        <div class="col-auto input-group mb-3">
                                            
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Fecha de nacimiento</span>
                                            </div>
                                            <input type="text" aria-label= "Día" class = "form-control">
                                            <input type="text" aria-label= "Mes" class = "form-control">
                                            <input type="text" aria-label = "Año" class = "form-control">
                                        </div>

                                        <div class="col-auto input-group mb-3">
                                            
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Genero</span>
                                            </div>
                                            <input type="text" aria-label= "Masculino" class = "form-control" placeholder = "Femenino o masculino">
                                            <input type="text" aria-label = "Prefiero no decirlo" class = "form-control" placeholder = "Prefiero no decirlo o escribe uno">
                                        
                                        </div>
                                        
                                        <div class="col-auto input-group mb-3">

                                            <input type="text" class="form-control" placeholder = "E-mail">
                                            <input type="text" class = "form-control" placeholder = "Password">
                                            <input type="text" class="form-control" placeholder = "Confirmation">
                                        
                                        </div>

                                        <div class="col-auto input-group mb-3">
                                            
                                            <input type="text" class="form-control" placeholder = "Telefono 1">
                                            <input type="text" class = "form-control" placeholder = "Telefeno 2">
                                        
                                        </div>

                                        <div class=" col-out input-group mb-3">
                                       
                                            <input type="text" class="form-control" placeholder = "País">
                                            <input type="text" class = "form-control" placeholder = "Estado">
                                            <input type="text" class="form-control" placeholder = "Código Postal">
                                        
                                        </div>
                                    
                                        <div class="col-auto input-group mb-3">
                                            
                                            <div class="input-group-prepend">
                                                <span class = "input-group-text">Dirección</span>
                                            </div>
                                             <input type="text" class="form-control" placeholder = "Colonia, Mza, Lte, No ...">
                                          
                                        
                                        </div>

                                    </div>
                                        
                                        <button class = "btn btn-primary other-button" type = "submit">Continuar</button>
                                        
                                </form>
                    
                            </div>

                    </scroll-page>

                    
                    <scroll-page id = "ReferencialInformationTeacher">
                        <div class = "OneHeader"><h3>Información referencial</h3></div>
                            
                            <div class="directionform">
                            
                                <form action="">
                                    <div class="formgroup col-md-6">
                                        <label for="Nombres">Nombre(s)</label>
                                        <input type="email" class="form-control" id="Nombres">
                                    </div>
                                </form>
                
                            </div>   

                    
                    </scroll-page>

                </scroll-container>
                    
                 
        </div>
    
    <div class = "welcomeimage">
                <img src="{{ asset('welcome.jpg') }}" class = "welcomepeople">    
    </div>
                     
    </div>




</div>

@endsection