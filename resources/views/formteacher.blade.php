@extends('layouts.canvas')
    @section('FormRegisterTeacher')

<!-- Not Touch Div -->

<div class="container-canvas">

    <div class="containerregister">
        
         <div class="formscrollcontent">
                    
                <div class = "NumberHeader">
                    
                    <div class = "ForceVertical">
                        <a href = "#PersonalInformationTeacher" role = "button" class="btn btn-login btn-sm rounded-circle">1</a><br><br>
                        <a href = "#ReferencialInformationTeacher" role = "button" class="btn btn-login btn-sm rounded-circle">2</a>
                     </div>
                        
                </div>

                <scroll-container>

                    <scroll-page id = "PersonalInformationTeacher">
                            <div class = "OneHeader"><h3>Información personal</h3></div>
                          <form action="">
                                <div class="formgroup col-md-6">
                                    <label for="Nombres">Nombre(s)</label>
                                    <input type="email" class="form-control" id="Nombres">
                                </div>
                          </form>
                    </scroll-page>

                    <scroll-page id = "ReferencialInformationTeacher">
                    <div class = "OneHeader"><h3>Información referencial</h3></div>
                        <form action="">

                        </form>

                    </scroll-page>

                </scroll-container>
                    
                 
        </div>
    
    <div class = "welcomeimage">
                <img src="{{ asset('welcome.jpg') }}" class = "welcomepeople">    
    </div>
                     
    </div>




</div>

@endsection