@extends('layouts.base')

@section('content')

@include('nav.welcomenav')

<title>El Centre | Centre Moral i Cultural del Poblenou</title>

<div class="block_title_page">TEATRE</div>

<div class="body_teatre">

  <div class="row">

    <div class="col-lg-12 button_section_weare">

      <div class="">

        <div class="col-lg-2 center">
          <a class="button_weare " onclick="panel(0)">Història</a>
        </div>
        <div class="col-lg-2 center">
          <a class="button_weare " onclick="panel(1)">L'estel de natzaret</a>
        </div>
        <div class="col-lg-2 center">
          <a class="button_weare" onclick="panel(2)">Cant Coral</a>
        </div>
        <div class="col-lg-2 center">
          <a class="button_weare" onclick="panel(3)">Esbart Montseny</a>
        </div>
        <div class="col-lg-2 center">
          <a class="button_weare" onclick="panel(4)">Junta Directiva</a>
        </div>
        <div class="col-lg-2 center">
          <a class="button_weare" onclick="panel(5)">Contacte</a>
        </div>

      </div>

    </div>

  </div>

  <hr style="margin: 10px; border-top: 1px solid #e9e8ed;">

  <section id="history">

    <div class="box_section_teatre">

      <div class="row">

        <div class="col-lg-12">

            <div class="col-lg-6">
              <div class="section_1_teatre_img" style="background-image: url('/images/teatre.jpg')">
              </div>
            </div>

            <div class="col-lg-1">
            </div>

            <div class="col-lg-6">

              <div class="section_1_teatre_text">
                <h4><b>Història del Centre, més de cent anys</b></h4>
                El Centre Moral i Cultural del Poblenou, el Centre, és una associació que es va crear en aquest popular barri barceloní l’any 1910 i des d’aleshores ha dut a terme una tasca ininterrompuda en els camps social, educatiu, cultural, esportiu i d’esbarjo, mantenint les nostres tradicions i afavorint la relació entre veïns.

                En temps difícils per al nostre poble, el Centre ha fet possible que la torxa de la cultura catalana no s’hagi apagat mai del tot al nostre barri.

                Més de 100 anys de vida, més de 1.000 socis i un munt de col·laboradors fan possible un present molt engrescador que ens permet assegurar un bon futur per a l’Entitat.
              </div>
            </div>

          </div>

      </div>

      <div class="row">

        <div class="col-lg-12">

          <div class="col-lg-6">
            
            <div class="section_1_teatre_text">
              La nostra trajectòria ha rebut el reconeixement de diverses institucions públiques i privades. L’any 1975 la regidoria del districte ens va atorgar el Premi Sant Martí. El 2010, amb motiu de la celebració del Centenari de l’entitat, ens va ser lliurada la Medalla d’Or al Mèrit Cívic de l’Ajuntament de Barcelona, el 2013 la Generalitat de Catalunya ens distingia amb la Creu de Sant Jordi, i el 2016 la SGAE concedia a la nostra Secció de Teatre el Premi Max al Teatre Aficionat.
            </div>

          </div>

          <div class="col-lg-1">
          </div>

          <div class="col-lg-6">

            <div class="section_1_teatre_img2" style="background-image: url('/images/award.jpg')">
            </div>

          </div>

        </div>

      </div>

      <div class="row">

        <div class="col-lg-12">

          <div class="col-lg-6">
            <div class="section_1_teatre_img" style="background-image: url('/images/teatre.jpg')">
            </div>
          </div>

          <div class="col-lg-1">
          </div>

          <div class="col-lg-6">

            <div class="section_1_teatre_text">
              
              Més de 100 anys de vida al barri i un present molt engrescador ens permeten assegurar un bon futur per a la nostra entitat. Més de 1.000 socis i un munt de col·laboradors fan possible aquesta realitat que és el Centre, un ambient on es pot fer i/o gaudir de representacions i lectures teatrals, cant coral, concerts de música clàssica i moderna, sardanes, tertúlies literàries, excursions, xerrades i col·loquis, campionats de dòmino, arts manuals, dibuix, pintura, patchwork, puntes al coixí, reunions de Vida Creixent…

              <br>

              <a class="button_activity border_ac center" target="_blank" href="/images/weare/cent_anys_historia.pdf">Llegir més...</a>

            </div>

          </div>

        </div>
        
      </div>

    </div> 

  </section>

  <section id="estel">

    <div class="box_section_teatre">

      <div class="row">

        <div class="col-lg-12">
          
          <div class="col-lg-4">
            <div class="center">
              <div >
                <p class="circle"><i class="fas fa-phone line"></i></p>
              </div>
              <div class="contact">
                <p>93 221 70 03</p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-12">

          <div class="">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2992.755541694604!2d2.1979812150823355!3d41.40111497926286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4a33e165ef9fb%3A0xee7555260fb5e6f0!2sCentre+Moral+i+Cultural+del+Poblenou!5e0!3m2!1sca!2ses!4v1533649598750" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>

        </div>

      </div>

    </div> 

  </section>

  <section id="coral">

    <div class="box_section_teatre">

      <div class="row">

        <div class="col-lg-12 margin_10">

          <div class="col-lg-6">
            <div class="section_1_teatre_img" style="background-image: url('/images/teatre.jpg')">
            </div>
          </div>

          <div class="col-lg-1">
          </div>

          <div class="col-lg-6">

            <div class="section_1_teatre_text">

              <h4><b>Història del Cor</b></h4>
              El Cor Poblenou és el resultat d’un llarg camí iniciat l’any 1991 quan uns vint-i-cinc actors de la Secció de Teatre del Centre van decidir, entusiasmats, fer de cor en el muntatge de l’opereta El Mikado. Després van venir l’òpera-rock Jesucrist Superstari el recital Això és Broadway! L’any 1995 presenta el muntatge Màrtir de la pau (evocació de Martin Luther King) i participa en una gala operística feta al Centre amb solistes i orquestra...

              <br>

              <a class="button_activity border_ac center" target="_blank" href="/images/weare/historia_del_cor.pdf">Llegir més...</a>

            </div>

          </div>

        </div>
        
      </div>

      <div class="row">

        <div class="col-lg-12 margin_10">

          <div class="col-lg-6">
            <div class="section_1_teatre_img" style="background-image: url('/images/teatre.jpg')">
            </div>
          </div>

          <div class="col-lg-1">
          </div>

          <div class="col-lg-6">

            <div class="section_1_teatre_text">

              <h4><b>Antecedents del Cor</b></h4>
              La presència de la música al Centre és tan antiga com la mateixa entitat ja que des dels seus inicis es representa l’espectacle nadalenc L’Estel de Natzaret que, com tots sabem, conté un bon nombre de pàgines musicals. I encara, fent un salt en el temps de quaranta anys, ens trobem que la primera actuació feta en el Centre reconstruït després de la guerra és un concert de l’Orfeó Virolai que va tenir lloc el dia...

              <br>

              <a class="button_activity border_ac center" target="_blank" href="/images/weare/antecedents_del_cor.pdf">Llegir més...</a>

            </div>

          </div>

        </div>
        
      </div>

    </div> 

  </section>

  <section id="Esbart">

    <div class="box_section_teatre">

      <div class="row">

        <div class="col-lg-12 margin_10">

          <div class="col-lg-6">
            <div class="section_1_teatre_img" style="background-image: url('/images/teatre.jpg')">
            </div>
          </div>

          <div class="col-lg-1">
          </div>

          <div class="col-lg-6">

            <div class="section_1_teatre_text">

              <h4><b>Història de l’Esbart</b></h4>
              Quan el 1989 es va fer l’homenatge a Francesc de B. Comes, que va ser director de l’Esbart Montseny en una de les èpoques de més esplendor de la secció, a uns quants antics dansaires els va picar el cuquer de tornar a ballar aquelles danses que havien portat arreu de Catalunya, i també a fora, durant tants anys.

              La il·lusió es va començar a materialitzar el 1990, quan es va constituir la Secció d’Antics...

              <br>

              <a class="button_activity border_ac center" target="_blank" href="/images/weare/historia_de_esbart.pdf">Llegir més...</a>

            </div>

          </div>

        </div>
        
      </div>

      <div class="row">

        <div class="col-lg-12 margin_10">

          <div class="col-lg-6">
            <div class="section_1_teatre_img" style="background-image: url('/images/teatre.jpg')">
            </div>
          </div>

          <div class="col-lg-1">
          </div>

          <div class="col-lg-6">

            <div class="section_1_teatre_text">

              <h4><b>Inicis de l’Esbart Montseny</b></h4>
              “El Montseny era exactament el mateix que l’Esbart Santa Maria”, afirmava Jaume Masjuan; un pur canvi de nom obligat per qüestions governatives degudes als temps que corrien. Al traslladar-se al local del carrer Pujades, i amb la necessitat de constituir-se en societat amb tots els permisos pertinents, a l’hora d’intentar registrar el nom d’Esbart Santa Maria el funcionari de torn els va dir: “No se puede aceptar el nombre de Santa Maria...

              <br>

              <a class="button_activity border_ac center" target="_blank" href="/images/weare/inicis_de_esbart_montseny.pdf">Llegir més...</a>

            </div>

          </div>

        </div>
        
      </div>

    </div> 

  </section>

  <section id="Junta">

    <div class="box_section_teatre">

      <div class="row">

        <div class="col-lg-12">

          @foreach ($directives as $directive)

            <div class="col-lg-6 list_directive">

              <div class="col-lg-4 none_margin_15">

                <div class="list_directive_img" style="background-image: url('{{$directive->image}}')">
                </div>

              </div>

              <div class="col-lg-8">

                <p class="list_directive_text">{{$directive->name}}</p>
        
                <p>{{$directive->text}}</p>

              </div>

            </div>

          @endforeach

        </div>
        
      </div>

    </div> 

  </section>

  <section id="contacte">

    <div class="box_section_teatre">

      <div class="row">

        <div class="col-lg-12">
          
          <div class="col-lg-3">
            
            <div class="contact_section">
              <div class="icon_contact_section">
                <i class="fas fa-phone"></i>
              </div>
              <div class="contact_section_text">
                <p>Truca'ns</p>
              </div>
              <div class="contact_section_text_2">
                <p>93 485 36 99</p>
              </div>
            </div>

          </div>

          <div class="col-lg-3">
            
            <div class="contact_section">
              <div class="icon_contact_section">
                <i class="fas fa-envelope"></i>
              </div>
              <div class="contact_section_text">
                <p>Envia'ns un correu</p>
              </div>
              <div class="contact_section_text_2">
                <p>info@elcentrepoblenou.cat</p>
              </div>
            </div>

          </div>

          <div class="col-lg-3">
            
            <div class="contact_section">
              <div class="icon_contact_section">
                <i class="fas fa-headset"></i>
              </div>
              <div class="contact_section_text">
                <p>Secretaria</p>
              </div>
              <div class="contact_section_text_2">
                <p>Feiners, 18.00 a 20.00</p>
              </div>
            </div>

          </div>

          <div class="col-lg-3">
            
            <div class="contact_section">
              <div class="icon_contact_section">
                <i class="fas fa-"></i>
              </div>
              <div class="contact_section_text">
                <p>Troba'ns a</p>
              </div>
              <div class="contact_section_text_2">
                <p>Pujades, 176-178, Barcelona</p>
              </div>
            </div>
            
          </div>

        </div>



        <div class="col-lg-12">

          <hr>

          <div class="">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2992.755541694604!2d2.1979812150823355!3d41.40111497926286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4a33e165ef9fb%3A0xee7555260fb5e6f0!2sCentre+Moral+i+Cultural+del+Poblenou!5e0!3m2!1sca!2ses!4v1533649598750" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>

        </div>

      </div>

    </div>  

  </section>

</div>

<script type="text/javascript">

  window.onload = function()
  {
      $('#history').show();
      $('#estel').hide();
      $('#coral').hide();
      $('#Esbart').hide();
      $('#Junta').hide();
      $('#contacte').hide();
  };

  function panel(key)
  {
      switch(key) 
      {
          case 0:
              $('#history').show("fast");
              $('#estel').hide();
              $('#coral').hide();
              $('#Esbart').hide();
              $('#Junta').hide();
              $('#contacte').hide();
          break;
          case 1:
              $('#history').hide();
              $('#estel').show("fast");
              $('#coral').hide();
              $('#Esbart').hide();
              $('#Junta').hide();
              $('#contacte').hide();
          break;
          case 2:
              $('#history').hide();
              $('#estel').hide();
              $('#coral').show("fast");
              $('#Esbart').hide();
              $('#Junta').hide();
              $('#contacte').hide();
          break;
          case 3:
              $('#history').hide();
              $('#estel').hide();
              $('#coral').hide();
              $('#Esbart').show("fast");
              $('#Junta').hide();
              $('#contacte').hide();
          break;
          case 4:
              $('#history').hide();
              $('#estel').hide();
              $('#coral').hide();
              $('#Esbart').hide();
              $('#Junta').show("fast");
              $('#contacte').hide();
          break;
          case 5:
              $('#history').hide();
              $('#estel').hide();
              $('#coral').hide();
              $('#Esbart').hide();
              $('#Junta').hide();
              $('#contacte').show("fast");
          break;

      }
  }

</script>

@stop