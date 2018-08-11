@extends('layouts.base')

@section('content')

@include('nav.welcomenav')

<title>{{$show->title}}</title>

<div class="block_title_page">{{$show->title}}</div>

<div class="body_show">

  <div class="row">

    <div class="col-lg-12 none_margin_15">    

      <div class="img_show_portada" style="background-image: url({{$show->portada}})">
       </div>

       <div class="timetable_portada">

          <a data-toggle="modal" data-target="#timetable">  
            <div class="panel-heading nobox_dash" role="tab" id="headingOne">
                <h4 class="panel-title none_padding ca_title_page">
                    HORARIS
                </h4>
            </div>
          </a>

          <div class="modal" tabindex="-1" role="dialog" id="timetable">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header modal-header_img" style="background-image: url('/images/mosaic.jpg')">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body timetable-body">

                  <ul class="nav nav-tabs">
                            
                    @foreach ($show->timetables as $key=>$timetable)

                      @if ($key == 0)

                        <li class="active"><a data-toggle="tab" href="#home">{{$timetable->dayweek}}<br>{{$timetable->day}}</a></li>

                      @else

                        <li><a data-toggle="tab" href="#menu{{$timetable->id}}">{{$timetable->dayweek}}<br>{{$timetable->day}}</a></li>

                      @endif

                    @endforeach

                  </ul>

                  <div class="tab-content">

                    @foreach ($show->timetables as $key=>$timetable)

                      @if ($key == 0)

                        <div id="home" class="tab-pane fade in active">
                          <h3 class="timetable">{{$timetable->hour}} H</h3>
                        </div>

                      @else

                        <div id="menu{{$timetable->id}}" class="tab-pane fade">
                          <h3 class="timetable">{{$timetable->hour}} H</h3>
                        </div>

                      @endif

                    @endforeach
    
                  </div>

                </div>

              </div>

            </div>

          </div>

       </div>

       @if($show->reserved == 1)

         <div class="reserved_portada">

            <a data-toggle="modal" data-target="#reserva">  
              <div class="panel-heading nobox_dash" role="tab" id="headingOne">
                  <h4 class="panel-title none_padding ca_title_page">
                      RESERVAR
                  </h4>
              </div>
            </a>

            <div class="modal" tabindex="-1" role="dialog" id="reserva">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header modal-header_img" style="background-image: url('/images/mosaic.jpg')">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                                  <h4></h4>

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

         </div>

       @endif

    </div>

  </div>  

  <div class="row">

    <div class="col-lg-12 none_margin_15">  

    	<div class="col-lg-4">

        <div class="box_profile_show">

      		<div class="img_show_profile" style="background-image: url({{$show->profile}})">
         	</div>

        </div>

    	</div>

    	<div class="col-lg-8 none_padding">

        <div class="info_billboard">

      		<div class="box_info_billboard">

  	    		<div>

  	    			<h1>{{$show->title}}</h1>

  	    		</div>

  	    		<div class="description_billboard">

  	    			{{$show->description}}

  	    		</div>

  	    		<div class="box_category_billboard">

              <div class="cat_billboard">
  		    		  <b>Gènere:</b> {{$show->gender}}
              </div>
              <div class="cat_billboard">
  		    		  <b>Durada:</b> {{$show->duration}} min
              </div>
              <div class="cat_billboard">
  		    		  <b>Direcció:</b> {{$show->director}}
              </div>
              <div class="cat_billboard">
  		    		  <b>Repartiment:</b> {{$show->casting}}
              </div>
              <div class="cat_billboard">
                <b>Coreografies:</b> {{$show->choreography}}
              </div>
              <div class="cat_billboard">
                <b>Maquillatge:</b> {{$show->makeup}}
              </div>
              <div class="cat_billboard">
                <b>Equip tècnic:</b> {{$show->technical}}
              </div>
              <div class="cat_billboard">
                <b>Escenografia:</b> {{$show->wardrobe}}
              </div>
              <div class="cat_billboard">
  		    		  <b>Descanç:</b> {{$show->takeres}}
              </div>

            </div>

  	    	</div>

        </div>

    	</div>  

    </div>

  </div>   

</div>

@stop