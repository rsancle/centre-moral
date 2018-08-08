@extends('layouts.base')

@section('content')

    @include('nav.welcomenav')
    
    <title>Home | Centre Moral i Cultural del Poblenou</title>
    
    <div class="row">

      <div class="col-lg-12 full_screen">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">

          <ol class="carousel-indicators">

            @php
              $hola = 0;
            @endphp

            @foreach ($sliders as $slider)

              @if ($hola == 0)

                <li data-target="#myCarousel" data-slide-to="{{$hola}}" class="active"></li>
                @php
                  $hola++;
                @endphp

              @else

                <li data-target="#myCarousel" data-slide-to="{{$hola}}"></li>
                @php
                  $hola++;
                @endphp

              @endif

            @endforeach

          </ol>

          <div class="carousel-inner">

            @foreach ($sliders as $slider)

              @if ($slider->id == 1)

                <div class="item active">
                  <div class="carousel_img" style="background-image: url('{{$slider->image}}')">
                  </div>
                  <div class="carousel-caption d-none d-md-block">
                    <div class="div_space_slider">
                      <h5 class="text_slider">{{$slider->text}}</h5>
                    </div>
                    <div class="div_space_slider">
                      <p><a class="button_link_slider center" href="{{$slider->link}}">Veure informació</a></p>
                    </div>
                  </div>
                </div>

              @else

                <div class="item">
                  <div class="carousel_img" style="background-image: url('{{$slider->image}}')">
                  </div>
                  <div class="carousel-caption d-none d-md-block">
                    <div class="div_space_slider">
                      <h5 class="text_slider">{{$slider->text}}</h5>
                    </div>
                    <div class="div_space_slider">
                      <p><a class="button_link_slider center" href="{{$slider->link}}">Veure informació</a></p>
                    </div>
                  </div>
                </div>  

              @endif

            @endforeach

          </div>

        </div>

      </div>

    </div>

    <div class="header_temp">

      <div class="row">

        <div class="col-lg-12">

          <div class="col-lg-4">
            
            <div class="header_title">

            <span class="temp_icon base_icon"><i class="fas fa-map"></i></span>
            <h1>TEMPORADA</h1>

            </div>

          </div>

          <div class="col-lg-8">

            <div class="header_category">

              @foreach ($clasifications as $clasification)

                @if ($clasification->id == 1)

                    <a class="active" data-toggle="tab" href="#menu{{$clasification->id}}"><h5>{{$clasification->name}}</h5></a>
                @else

                    <a data-toggle="tab" href="#menu{{$clasification->id}}"><h5>{{$clasification->name}}</h5></a>

                @endif

              @endforeach
             
            </div>

          </div>

        </div>

      </div>

    </div>

    <div class="body_temp">

      <div class="row">

        <div class="col-lg-12">

          <div class="tab-content">

            @foreach ($clasifications as $clasification)

              @foreach ($clasification->shows as $show)

                @if ($clasification->id == 1)

                  <div class="tab-pane fade in active" id="menu{{$clasification->id}}">

                @else

                  <div class="tab-pane fade" id="menu{{$clasification->id}}">

                @endif

                    <div class="col-lg-3">
                      <div class="container">
                      <img class="temp_image image" src="{{$show->image2}}" alt="{{$show->title}}">
                        <div class="middle">
                          <div class="text"><p>{{$show->title}}</p></div>
                          <a class="button_info" href="{{route('billboard')}}/{{$show->id}}">MÉS INFO</a>
                        </div>
                      </div>
                    </div>
                  
                  </div>       

              @endforeach 

            @endforeach      

          </div>

        </div>

      </div>

    </div>

    <div class="header_temp">

      <div class="row">

        <div class="col-lg-12">

          <div class="col-lg-4">
            
            <div class="header_title">

            <span class="temp_icon base_icon"><i class="fas fa-book"></i></span>
            <h1>NOTICIES</h1>

            </div>

          </div>

        </div>

      </div>

    </div>
    
    <div class="body_temp">

      <div class="row">

        <div class="col-lg-8">

          @foreach ($news as $new)
           

            <a href="{{route('post')}}/{{$new->id}}">

              <div class="col-lg-6">

                <div class="post">

                  <div class="img_post" style="background-image: url({{$new->image}})">
                  </div>

                  <div class="cc">
                    <div class="cat_post">
                      {{$new->category}}
                    </div>
                    <div class="title_post">
                      {{$new->title}}
                    </div>
                  </div>

                </div>

              </div> 

            </a>

          @endforeach

        </div>          
 
        <div class="col-lg-4" style="padding-left:0px">

          <div class="row">

            <div class="col-lg-12" class="hola" style="padding-left:0px">
              <div class="fb-page" 
              data-tabs="timeline,events,messages"
              data-href="https://www.facebook.com/ElCentreCMC"
          
              data-hide-cover="false">
              </div>
            </div>
          </div>

          <div class="row">

            <div class="col-lg-12" class="hola" style="padding-left:0px">
              <a class="twitter-timeline" href="https://twitter.com/ElCentreCMC?ref_src=twsrc%5Etfw">Tweets by ElCentreCMC</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          </div>

        </div>


  

            
        


      </div>

      <div class="row">

        <div class="col-lg-8 pagination">
            {!! $news->links(); !!}
        </div>

      </div>

    </div>

  <div class="row">

    <div class="col-lg-12">

      @foreach ($banners as $banner)

      <div class="col-lg-3">

        <div class="banner_img" style="background-image: url({{$banner->banner}})" alt="{{$banner->title}}"></div>

      </div>

      @endforeach

    </div>

  </div>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
       
@stop
