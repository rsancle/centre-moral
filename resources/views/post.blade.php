@extends('layouts.base')

@section('content')

@include('nav.welcomenav')

<title>Noticia | Centre Moral i Cultural del Poblenou</title>
 
<div class="body_post">

  <div class="row">

    <div class="col-lg-12">

      <div class="post_page">

        <div class="img_post_page" style="background-image: url({{$news->image}})">
        </div>

        <div class="cc_page">
          <div class="title_post_page">                 
            <h1>{{$news->title}}</h1>
          </div>
          <div class="info_post_page">
            <input id="date" type="hidden" value="{{$news->created_at}}">
            <span id="new_date"></span><br>
            Autor: <b>{{$news->author}}</b>
          </div>
          <div class="text_post_page">
            <p>{{$news->text}}</p>
          </div>
        </div>

      </div>

    </div>

  </div>     

</div>

<script type="text/javascript">

  window.onload = function()
  {
    format();
  }

  function format()
  {

    var ca = moment.defineLocale('ca', {
    months : {
        standalone: 'gener_febrer_març_abril_maig_juny_juliol_agost_setembre_octubre_novembre_desembre'.split('_'),
        format: 'de gener_de febrer_de març_d\'abril_de maig_de juny_de juliol_d\'agost_de setembre_d\'octubre_de novembre_de desembre'.split('_'),
        isFormat: /D[oD]?(\s)+MMMM/
            },
            monthsShort : 'gen._febr._març_abr._maig_juny_jul._ag._set._oct._nov._des.'.split('_'),
            monthsParseExact : true,
            weekdays : 'diumenge_dilluns_dimarts_dimecres_dijous_divendres_dissabte'.split('_'),
            weekdaysShort : 'dg._dl._dt._dc._dj._dv._ds.'.split('_'),
            weekdaysMin : 'dg_dl_dt_dc_dj_dv_ds'.split('_'),
            weekdaysParseExact : true,
            longDateFormat : {
                LT : 'H:mm',
                LTS : 'H:mm:ss',
                L : 'DD/MM/YYYY',
                LL : 'D MMMM [de] YYYY',
                ll : 'D MMM YYYY',
                LLL : 'D MMMM [de] YYYY [a les] H:mm',
                lll : 'D MMM YYYY, H:mm',
                LLLL : 'dddd D MMMM [de] YYYY [a les] H:mm',
                llll : 'ddd D MMM YYYY, H:mm'
            }});

    moment.locale('ca'); 
    var date = document.getElementById('date').value;
    var new_date_format = moment(date).format('LL');
    
    $('#new_date').append(new_date_format);
  }

</script>

@stop