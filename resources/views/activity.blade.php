@extends('layouts.base')

@section('content')

@include('nav.welcomenav')

<title>Cursos i tallers | Centre Moral i Cultural del Poblenou</title>

<div class="block_title_page">CURSOS I TALLERS</div>

@foreach ($categories as $category)

  <div class="body_activity"> 

    <div class="row">

      <div class="col-lg-12">

        <div class="panel panel-default">
          
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#{{$category->id}}" aria-expanded="true" aria-controls="category">  
            <div class="panel-heading nobox_dash" role="tab" id="headingOne">
                <h4 class="panel-title ca_title_page">
                    {{$category->category}}
                </h4>
            </div>
          </a>
          
          
          <div id="{{$category->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
            
            <div class="panel-body">

              @foreach ($category->activities as $activity)
              
              <div class="col-lg-4">

                <div class="activity_post border_ac">

                  <div class="img_activity" style="background-image: url('/images/funda_gafas.jpg')">
                  </div>

                  <div class="cccc">

                    <div class="i_activity">
                      <div class="col-lg-2">
                        <i class="fas fa-male"></i>
                      </div>
                      <div class="col-lg-10">
                        <p class="text_activity left">{{$activity->teacher}}</p>
                      </div>
                      <div class="col-lg-2">
                        <i class="fas fa-euro-sign"></i>
                      </div>
                      <div class="col-lg-10">
                        <p class="text_activity left">{{$activity->price}}</p>
                      </div>
                      <div class="col-lg-2">
                        <i class="fas fa-map-marker-alt"></i>
                      </div>
                      <div class="col-lg-10">
                        <p class="text_activity left">{{$activity->place}}</p>
                      </div>
                      <div class="col-lg-2">
                        <i class="far fa-calendar-alt"></i>
                      </div>
                      <div class="col-lg-10">
                        <p class="text_activity left">{{$activity->timetable}}</p>
                      </div>

                      @if ($activity->status == 1)

                        <a class="button_activity border_ac" data-toggle="modal" data-target="#modal{{$category->id}}{{$activity->id}}">Sol·licitar informació</a>

                        <div class="modal" tabindex="-1" role="dialog" id="modal{{$category->id}}{{$activity->id}}">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header modal-header_img" style="background-image: url('/images/mosaic.jpg')">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <h4>{{$activity->name}}</h4>

                                <form>
                                  <div class="form_activity">
                                    <div class="form-group">
                                      <input type="email" class="form-control" id="email" placeholder="Nom" required="">
                                    </div>
                                    <div class="form-group">
                                      <input type="email" class="form-control" id="email" placeholder="Cognoms" required="">
                                    </div>
                                    <div class="form-group">
                                      <input type="email" class="form-control" id="email" placeholder="Correu" required="">
                                    </div>
                                    <div class="form-group">
                                      <input type="password" class="form-control" id="pwd" placeholder="Telèfon" required="">
                                    </div>
                                  
                                    <div class="checkbox">
                                      <input type="checkbox" required=""><span class="accept_text">Acceptar <a href="">política de privacitat</a>.</span>
                                    </div>

                                  </div>   
                                  
                                </form>

                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Enviar</button>
                              </div>
                            </div>
                          </div>
                        </div>

                      @else

                        <a class="button_activity border_ac">Sol·licitut tancada</a>

                      @endif

                    </div>

                  </div>

                </div> 
               
              </div>

              @endforeach

            </div>
                                  
          </div>

        </div>

      </div>

    </div>

  </div>

@endforeach  


@stop