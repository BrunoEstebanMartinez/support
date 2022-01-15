@extends('layouts.canvas')
@section('canvas')

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

                                            <input type="text" class = "form-control" placeholder = "Nombre(s)">
                                            <input type="text" class = "form-control" placeholder = "Apellido Paterno">
                                            <input type="text" class = "form-control" placeholder = "Apellido Materno">

                                        </div>

                                        <div class="col-auto input-group mb-3">
                                            
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Fecha de nacimiento</span>
                                            </div>
                                            <input type="text" class = "form-control" placeholder = "Día">
                                            <input type="text" class = "form-control" placeholder = "Mes">
                                            <input type="text" class = "form-control" placeholder = "Año" value = "0000">
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

                                        <div class="col-auto input-group mb-3">
                                       
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
                    <div class = "OneHeader"><h3>Comparte tu conocimiento</h3></div>
                            
                        <div class="directionform">
                           <h4>¿En que te especializas?</h4>

                                <form action="" class = "needs-validation" novalidate>
                                    <div class="col-auto form-check mb-3">
                                       <input type = "radio" class="form-check-input" name="exampleRadios">
                                       <label class="form-check-label">Mantenimiento a equipos de cómputo</label>
                                    </div>
                                    <div class="col-auto form-check mb-3">
                                        <input type="radio" class="form-check-input" name="exampleRadios">
                                        <label class="form-check-label">Reparación de SmartPhones, Tabletas...</label>
                                    </div>
                                    <div class="col-auto form-check mb-3">
                                        <input type="radio" class="form-check-input" name="exampleRadios">
                                        <label class="form-check-label">Reparación de componentes eléctronicos, microcomponentes...</label>
                                    </div>
                                    <div class="col-auto form-check mb-3">
                                        <input type="radio" class="form-check-input" name="exampleRadios">
                                        <label class="form-check-label">Reperación de electrodomésticos</label>
                                    </div>

                                    <div class="col-auto input-group mb-3">
                                        <div class="input-group-append">
                                            <span class="input-group-text">Experiencia</span>
                                        </div>
                                        <input type="text" id = "thisinputempresa" class = "form-control" placeholder = "Empresa, Freelance...">
                                     
                                    <div class="input-group-append">
                                         
                                            <select name="" id="" class="form-control">
                                                <option>Años</option>
                                                <option value="2">1-5</option>
                                                <option value="3">6-10</option>
                                                <option value="4">10 a más</option>
                                            </select>

                                            <button type = "button" class = "btn btn-outline-success">Agregar</button>
                                            <!--<button type = "button" class= "btn btn-outline-danger">Eliminar</button>-->
                                     </div>

                                    </div>
                                    <button class = "btn btn-primary other-button" type = "submit">Continuar</button>
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