@extends('layouts.canvas')
@section('canvas')

<!-- Not touch first div-->

<div class = "container-canvas">

<div class="imagelogo inrole">
            <img src="{{ asset('late.png') }}" alt="" class = "rounded-circle support">
          </div>

<div class = "selectyourrole shadow p-3 mb-5 rounded">

        <div class="teacher rounded-left">
            <p class="h4 text-center" >¿Quieres ayudar a resolver problemas de soporte técnico?</p><br>
            <form method = "GET">
                <input type = "submit" class="btn btn-login btn-lg btn-block rounded-pill" name = "1" value = "Empieza como docente"> 
            </form>
        </div>
        <div class="student rounded-right" >
             <p class="h4 text-center">¿Quieres consultar y aprender a la marcha de trabajar?</p><br>
            <form method = "GET">
                <input type = "submit" class="btn btn-login btn-lg btn-block rounded-pill" name = "2" value = "Empieza como alumno"> 
                
            </form>
        </div>
</div>


</div>


@if(isset($_GET['1']))


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
                            
                                <form action="{{ route('User.store') }}" method = "POST">
                                {{ csrf_field() }} 
                                    <div class="form-row align-items-center">
                                    
                                        <div class="col-auto input-group mb-3">

                                            <input type="text" name = "Names" class = "form-control" placeholder = "Nombre(s)" required>
                                            <input type="text" name = "Last_Name" class = "form-control" placeholder = "Apellido Paterno" required>
                                            <input type="text" name = "MLast_Name" class = "form-control" placeholder = "Apellido Materno" required>

                                        </div>

                                        <div class="col-auto input-group mb-3">

                                            <input type="text" name = "E_Mail" class="form-control" placeholder = "E-mail" required>
                                            <input type="text" name = "Password" class = "form-control" placeholder = "Password" required>
                                            <input type="text" name = "Confirmation" class="form-control" placeholder = "Confirmation" required>

                                        </div>

                                        <div class="col-auto input-group mb-3">
                                            
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Fecha de nacimiento</span>
                                            </div>
                                            <input type="number" name = "bday" class = "form-control" placeholder = "Día" required>
                                            <input type="text" name = "bmonth" class = "form-control" placeholder = "Mes" required>
                                            <input type="number" name = "byear" class = "form-control" placeholder = "Año" value = "0000" required>
                                        </div>

                                        <div class="col-auto input-group mb-3">
                                            
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Genero</span>
                                            </div>
                                            <input type="text" name = "Gender" aria-label= "Masculino" class = "form-control" placeholder = "Femenino o masculino" required>
                                            <input type="text" name = "GenerPerson" aria-label = "Prefiero no decirlo" class = "form-control" placeholder = "Prefiero no decirlo o escribe uno">
                                        
                                        </div>
                                        

                                        <div class="col-auto input-group mb-3">
                                            
                                            <input type="number" name = "Phone1" class="form-control" placeholder = "Telefono 1" required>
                                            <input type="number" name = "Phone2" class = "form-control" placeholder = "Telefeno 2" value = "">
                                        
                                        </div>

                                        <div class="col-auto input-group mb-3">
                                       
                                            <input type="text" name = "Country" class="form-control" placeholder = "País" required>
                                            <input type="text" name = "State" class = "form-control" placeholder = "Estado" required>
                                            <input type="number" name = "PostCode" class="form-control" placeholder = "Código Postal" required>
                                        
                                        </div>
                                    
                                        <div class="col-auto input-group mb-3">
                                            
                                            <div class="input-group-prepend">
                                                <span class = "input-group-text">Dirección</span>
                                            </div>
                                             <input type="text" name = "DirectionH" class="form-control" placeholder = "Colonia, Mza, Lte, No ..." required>
                                          
                                        
                                        </div>

                                    </div>
                    
                            </div>

                    </scroll-page>

                    
                <scroll-page id = "ReferencialInformationTeacher">
                    <div class = "OneHeader"><h3>Comparte tu conocimiento</h3></div>
                        <br>    
                        <div class="col-auto input-group mb-3">
                            <div class="form-group">
                                
                                <h4>¿En que te especializas?</h4>
                                  

                                    <div class="col-auto form-check mb-3">
                                       <input type = "radio" class="form-check-input" name="namelesson" value = "1">
                                       <label class="form-check-label">Mantenimiento a equipos de cómputo</label>
                                    </div>
                                    <div class="col-auto form-check mb-3">
                                        <input type="radio" class="form-check-input" name="namelesson" value = "2">
                                        <label class="form-check-label">Reparación de SmartPhones, Tabletas...</label>
                                    </div>
                                    <div class="col-auto form-check mb-3">
                                        <input type="radio" class="form-check-input" name="namelesson" value = "3">
                                        <label class="form-check-label">Reparación de componentes eléctronicos, microcomponentes...</label>
                                    </div>
                                    <div class="col-auto form-check mb-3">
                                        <input type="radio" class="form-check-input" name="namelesson" value = "4">
                                        <label class="form-check-label">Reperación de electrodomésticos</label>
                                    </div>
                                    <div class="col-auto form-check mb-3">
                                       <input type="hidden" name = "roleuser" value = "1">
                                    </div>
                            </div>
                                
                        </div>

                           
                                    <input type = "submit" class = "btn btn-primary other-button" value = "Continuar">
                            </form>
                            
                    </scroll-page>

                </scroll-container>
                    
                 
        </div>
    
    <div class = "welcomeimage">
                <img src="{{ asset('welcome.jpg') }}" class = "welcomepeople">    
    </div>
                     
    </div>




</div>

@elseif(isset($_GET['2'])) 



@section('canvas')

<!-- Not Touch Div -->

<div class="container-canvas">

   <div class="imagelogo inrole">
            <img src="{{ asset('late.png') }}" alt="" class = "rounded-circle support">
    </div>

          <div class = "boot-form-container  shadow p-3 mb-5 rounded"> 
            <br>
        
        <div class="linesection"></div><br>
         
    <form action="{{ route('User.store') }}" method = "post"> 
        {{ csrf_field() }}
    <div class="col-auto input-group mb-3">

        <input type="text" name = "Names" class = "form-control" placeholder = "Nombre(s)" required>
        <input type="text" name = "Last_Name" class = "form-control" placeholder = "Apellido Paterno" required>
        <input type="text" name = "MLast_Name" class = "form-control" placeholder = "Apellido Materno" required>

    </div>
        <div class="col-auto input-group mb-3">
            <input type="text" name = "E_Mail"class="form-control" placeholder = "E-Mail">
            <input type="password" name = "Password" class="form-control" placeholder = "Password">
            <input type="password" name = "Confirmation" class="form-control" placeholder = "Confirmation">
        </div>
        <div class="col-auto input-group mb-3">
            <div class="input-group-append">
                <span class="input-group-text">País</span>
            </div>
                <input type="text" name = "Country" class = "form-control">
        </div>
        <div class="col-auto input-group mb-3">
            <div class="input-group-append">
                <span class = "input-group-text">¿Que te interesa?</span>
            </div>
            <select class="form-control" name = "namelesson" >
                <option value=""></option>    
                <option name = "namelesson" value="1">Mantenimiento a equipos de cómputo</option>
                <option name = "namelesson" value="2">Reparación de smartphones, tabletas...</option>
                <option name = "namelesson" value="3">Reparación componentes electrónicos, microcomponentes...</option>
                <option name = "namelesson" value="4">Reparación de electrodomésticos</option>
            </select>
    
           
        </div>
            <input type="hidden" name = "roleuser" value = "2">
            <input type="submit" class="btn btn-login btn-lg btn-block rounded-pill" value = "Crear">
     </form><br>

        <div class="linesection"></div><br>
            <p class = "lead center-register">¿Ya tienes una cuenta? <a href="login" role = "button" class = "btn btn-link">Ingresa</a></p>
        </div>

    </div>

@endsection

@endif
@endsection



