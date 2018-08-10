@extends('layouts.base')

@section('content')

@include('nav.welcomenav')

<title></title>

<div class="block_title_page">{{$show->title}}</div>

<div class="body_show">

  <div class="row">

    <div class="col-lg-12 none_margin_15">    

      <div class="img_show_1" style="background-image: url({{$show->image1}})">
       </div>

    </div>

  </div>  

      <div class="navbar-right section_do do_ticket">
      <a href="#">
        <div>
          <button class="do_partner text_do">RESERVAR</button>
        </div>
      </a>
    </div> 

  <div class="row">

    <div class="col-lg-12 none_margin_15">  

    	<div class="col-lg-4">

    		<div class="img_show_2" style="background-image: url({{$show->image2}})">
       		</div>

    	</div>

    	<div class="col-lg-8">

    		<div>

	    		<div>

	    			<h1>{{$show->title}}</h1>

	    		</div>
	    		<div>

	    			{{$show->description}}

	    		</div>
	    		<div>

		    		{{$show->gender}}
		    		{{$show->duration}}
		    		{{$show->director}}
		    		{{$show->casting}}
		    		{{$show->takeres}}

		    	</div>

	    	</div>

	    	<div class="panel panel-default">
          
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#{{$show->id}}" aria-expanded="true" aria-controls="category">  
            <div class="panel-heading nobox_dash" role="tab" id="headingOne">
                <h4 class="panel-title ca_title_page">
                    HORARIS
                </h4>
            </div>
          </a>
          
          

          <div id="{{$show->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
            
            <div class="panel-body">
              
              <div class="col-lg-12">

                <div class="container">

                  <ul class="nav nav-tabs">
                    
                    @foreach ($show->timetables as $timetable)

                      @if ($timetable->id == 1)

              
                        <li class="active"><a data-toggle="tab" href="#home">{{$timetable->dayweek}}. {{$timetable->day}}</a></li>

                      @else

                        <li><a data-toggle="tab" href="#menu{{$timetable->id}}">{{$timetable->dayweek}}. {{$timetable->day}}</a></li>

                      @endif

                    @endforeach

                  </ul>

                  <div class="tab-content">

                    @foreach ($show->timetables as $key=>$timetable)

                      @if ($key == 0)

                        <div id="home" class="tab-pane fade in active">
                          <h3>{{$timetable->hour}}</h3>
                        </div>

                      @else

                        <div id="menu{{$timetable->id}}" class="tab-pane fade">
                          <h3>{{$timetable->hour}}</h3>
                        </div>

                      @endif

                    @endforeach
    
                  </div>

                </div>

              </div>

            </div>
                                  
          </div>

        </div>

    	</div>  

    </div>

  </div>

  <div class="row">

    <div class="col-lg-12 none_margin_15">  

    	<div class="col-lg-4">

    	</div>

    	<div class="col-lg-8">

	    	<div>

		    	<div class="col-lg-6">

		    		<div class="img_show_ads" style="background-image: url('/images/ads.jpg')">
	       			</div>

		    	</div>

		    	<div class="col-lg-6">

		    		<div class="img_show_ads" style="background-image: url('/images/ads.jpg')">
	       			</div>

		    	</div>

	    	</div>

    	</div>  

    </div>

  </div>     

</div>

@stop