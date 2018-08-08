@extends('layouts.base')

@section('content')

@include('nav.welcomenav')

<title>Butlletí | Centre Moral i Cultural del Poblenou</title>

<div class="block_title_page">BUTLLETÍ</div>

<div class="body_butlleti">

  <div class="row">

    <div class="col-lg-12">    

      <div class="butlleti_page">

        <div class="ccc_page">

          @foreach ($butlleti as $butlleti)

            <div class="box">
              
              <div class="butlleti_img" style="background-image: url('/images/mosaic.jpg')"></div>
            
              <div class="info_butlleti">
                <h1>{{$butlleti->title}}</h1>
                <h4><i class="fas fa-clock-o"></i> {{$butlleti->created_at}}</h4>
                <h4><i class="fas fa-info-circle"></i> Num. {{$butlleti->number}}</h4>
              </div>
              
              <div>
                <a href="{{$butlleti->download}}" target="_blank">
                  <div class="button_butlleti">
                    <i class="fas fa-cloud-download-alt"></i>
                  </div>
                </a>
              </div>

            </div>

          @endforeach

        </div>

      </div>

    </div>

  </div>     

</div>

@stop