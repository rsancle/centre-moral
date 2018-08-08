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
                
                <div class="col-lg-4">

                @foreach ($show->timetables as $timetable)

                {{$timetable->day}}

                @endforeach
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