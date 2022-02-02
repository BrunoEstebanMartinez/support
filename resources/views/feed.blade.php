@extends('layouts.canvas')
    @section('canvas')

<!-- Not Touch Div -->

<div class="container-canvas">
        <div class = "containerteacher">
            <div class="ranking-challenge-test shadow p-3 mb-5 bg-white rounded border-right">
                    <div class = "ranking">
                        <div class = "title-ranking"><p><strong>{{ __('Ranking - Clasificación') }}</strong></p></div>
                        <div class = "scroll-container-ranking">
                            <div class = "title-materia"><p><small>{{ __('Content') }}</small></p></div>
                            <div class="icons-ranking">
                                <div class="icon-arrow-up ">
                                <div class="number-arrow-up "><p class = "text-success" ><small>{{__('0')}} {{ __('positions') }}</small></p></div>    
                                    <div class="arrow-up "><img src="{{ asset('angle-double-up.png') }}" alt=""></div>
                                </div>
                                <div class="number-ranking-title "><p class = "lead text-secondary" >{{__('0')}} {{ __('position') }}</p></div>
                                <div class="icon-arrow-down ">
                                     <div class="number-arrow-up "><p class = "text-danger" ><small>{{__('0')}} {{ __('positions') }}</small></p></div>    
                                    <div class="arrow-up "><img src="{{ asset('angle-double-down.png') }}" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class = "challenge">
                        <div class = "title-challenge border-top border-dark">
                                <p><strong>{{ __('Challenge') }}</strong></p>
                                <div>
                                    <a href="" role = "button" class = "btn btn-light btn-sm direction-button-icon rounded-circle"><img src="{{ asset('plus.png') }}" alt="" height = "10"  width = "10" ></a>
                                </div>
                                 
                        </div>
                        <div class = "scroll-container-challenge">
                                <div class="content-challenges">
                                    <div class="my-challenge-user-up"><p><small>{{ __('Content') }}</small></p></div>
                                        <div class="three-content-see">
                                            <div class="difficult-see-challenge ">
                                                <div class="number-diffucult "><p class = "lead text-secondary" >{{__('0')}} {{ __('^') }}</p></div>
                                                <div class="icon-difficult "><img src="{{ asset('brain.png') }}" alt=""></div>
                                            </div>
                                            <div class="accept-challenge ">
                                                <div class="number-accept "><p class = "lead text-secondary" >{{__('0')}} {{ __('%') }}</p></div>
                                                <div class="icon-accepted "><img src="{{ asset('check.png') }}" alt=""></div>
                                            </div>
                                            <div class="deny-challenge ">
                                                <div class="number-deny "><p class = "lead text-secondary" >{{__('0')}} {{ __('%') }}</p></div>
                                                <div class="icon-deny"><img src="{{ asset('times.png') }}" alt=""></div>
                                            </div>
                                        </div>
                                </div>
                        </div>
                    </div>

                    <div class = "test">
                        <div class = "title-test border-top border-dark">
                                <p><strong>{{ __('Test') }}</strong></p>
                                <div>
                                    <a href="" role = "button" class = "direction-button-test btn btn-light btn-sm rounded-circle"><img src="{{ asset('plus.png') }}" alt="" height = "10"  width = "10" ></a>
                                </div>
                        </div>
                        <div class = "scroll-container-test">
                        <div class="content-challenges">
                                    <div class="my-challenge-user-up"><p><small>{{ __('Content') }}</small></p></div>
                                        <div class="three-content-see">
                                            <div class="difficult-see-challenge ">
                                                <div class="number-diffucult "><p class = "lead text-secondary" >{{__('0')}} {{ __('^') }}</p></div>
                                                <div class="icon-difficult "><img src="{{ asset('brain.png') }}" alt=""></div>
                                            </div>
                                            <div class="accept-challenge ">
                                                <div class="number-accept "><p class = "lead text-secondary" >{{__('0')}} {{ __('%') }}</p></div>
                                                <div class="icon-accepted "><img src="{{ asset('nerd.png') }}" alt=""></div>
                                            </div>
                                            <div class="deny-challenge ">
                                                <div class="number-deny "><p class = "lead text-secondary" >{{__('0')}} {{ __('%') }}</p></div>
                                                <div class="icon-deny"><img src="{{ asset('unamused.png') }}" alt=""></div>
                                            </div>
                                        </div>
                                </div>
                        </div>
                    </div>

            </div>
            <div class="todo-hilo-questions-offer">
                
                    <div class="container-create shadow p-3 mb-5 bg-white rounded">
                            <div class="col-auto input-group input-group-lg">
                                
                                <a href="{{ route('Post.index') }}" role = "button" class = "btn btn-outline-light"><span class="lead">
                                {{  __('Comparte tu conocimiento...')  }}
                                </span></a>
                                <div class="input-group-prepend">
                                    <img src="{{ asset('pen.png') }}" alt="pen" class = "input-group-text">
                                </div>
                            </div>
                    </div>
                    
                    <div class="scroll-temas shadow p-3 mb-5 bg-white rounded">
                        <div class="hello-post">
                            <div class="my-info-user">
                                <div class="image-user-info rounded-circle border border-dark">
                                    <img src=" {{ asset('user.png') }}" alt="user" height = "48" width = "48" >
                                </div>
                                    <div class="header-user-image">
                                        <div class="name-user-info border border-dark"><span>{{ __('Here content') }}</span></div>
                                        <div class="role-user-info border border-dark"><span>{{ __('Here content') }}</span></div>
                                        <div class="int-user-info border border-dark"><span>{{ __('Here content') }}</span></div>
                                        <div class="date-info-user border border-dark"><span>{{ __('Here content') }}</span></div>
                                </div>
                               
                            </div>
                            <div class="posted-user">
                                <div class="title-posted border border-dark"><span class = "lead">{{ __('Here content') }}</span></div>
                                <div class="previo-posted border border-dark"><span class = "lead">{{ __('Here content') }}</span></div>
                                <div class="image-option border border-dark"><span class = "lead">{{ __('Here content') }}</span></div>
                            </div>
                        </div>
                     
                    </div>
                    
                   
            </div>
            <div class="red-friends shadow p-3 mb-5 bg-white rounded border-left">
                <div class="redteacher">
                    <div class="title-red-friends"><p><strong>{{ __('Red') }}</strong></p></div>
                    <div class="searchred">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <img src="{{ asset('book-reader.png') }}" alt="" class = "input-group-text">
                                </div>
                                <input type="text" class = "form-control" placeholder = "Busca a un compañer@..." name = "searching">
                            </div>
                    </div>
                    <div class="scroll-redteacher">
                        <div class="container-mypartner">
                            
                                <div class="larger-butt">
                                     <div class="content-contact-add ">
                                        <div class = "name-add-user "><p><small><strong>{{  __('Name')  }}</strong></small></p></div>
                                        <div class="inter-add-user "><p><small><strong>{{ __('Inter') }}</strong></small></p></div>
                                        <div class="experience-add-user "><p><small><strong>{{ __('Experience') }}</strong></small></p></div>
                                    </div>
                                    <div class="reference-add-user ">
                                        <div class="container-one-add">
                                            <div class="ranking-add-user "><p><small><strong>{{  __('0')  }}</strong></small></p></div>
                                            <div class="exams-past-add " ><p><small><strong>{{  __('0')  }}</strong></small></p></div>
                                            <div class="test-past-add "><p><small><strong>{{  __('0')  }}</strong></small></p></div>
                                        </div>
                                        <div class="container-two-add">
                                            <div class="ranking-add-user "><img src="{{ asset('arrow-growth.png') }}" alt="" height = "15" width = "15"></div>
                                            <div class="exams-past-add " ><img src="{{ asset('nerd.png') }}" alt="" height = "15" width = "15"></div>
                                            <div class="test-past-add "><img src="{{ asset('check.png') }}" alt="" height = "15" width = "15"></div>
                                        </div>
                                    </div>   
                                </div>
                                
                                <a href="" class = "text-primary tit-add-ser"><p><small><strong>Add</strong></small></p></a>
                                                           
                        </div>
                    </div>
                </div>
                <div class="groups-red">
                    <div class="title-gr border-top border-dark "><p><strong>{{ __('Grupos') }}</strong></p></div>
                    <div class="scroll-gr">
                              <div class="container-mypartner">
                                    <div class="larger-butt">
                                        <div class="content-contact-add">
                                            <div class = "name-add-user "><p><small><strong>{{  __('Name-Group')  }}</strong></small></p></div>
                                            <div class="inter-add-user "><p><small><strong>{{ __('Creator-group') }}</strong></small></p></div>
                                            <div class="experience-add-user "><p><small><strong>{{ __('FinGroup') }}</strong></small></p></div>
                                        </div>
                                        <div class="reference-add-user">
                                            <div class="container-one-add">
                                                <div class="ranking-add-user "><p><small><strong>{{  __('0')  }}</strong></small></p></div>
                                                <div class="exams-past-add " ><p><small><strong>{{  __('0')  }}</strong></small></p></div>
                                                <div class="test-past-add "><p><small><strong>{{  __('0')  }}</strong></small></p></div>
                                            </div>
                                            <div class="container-two-add">
                                                <div class="ranking-add-user "><img src="{{ asset('arrow-growth.png') }}" alt="" height = "15" width = "15"></div>
                                                <div class="exams-past-add " ><img src="{{ asset('nerd.png') }}" alt="" height = "15" width = "15"></div>
                                                <div class="test-past-add "><img src="{{ asset('check.png') }}" alt="" height = "15" width = "15"></div>
                                            </div>  
                                        </div>
                                    </div>
                                    <a href="" class = "text-primary tit-add-ser"><p><small><strong>Join</strong></small></p></a>
                              </div>
                   </div>
                </div>
            </div>
    </div>




</div>

@endsection