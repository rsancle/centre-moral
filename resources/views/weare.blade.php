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
              <h4><b>Història del Centre, més de cent anys</b></h4>
              El Centre Moral i Cultural del Poblenou, “el Centre”, és una associació que es va crear en aquest popular barri barceloní el 1910 i que des d’aleshores ha dut aterme una tasca ininterrompuda, fins i tot en els moments difícils viscuts pel nostre país, en els camps educatiu, cultural, esportiu i d’esbarjo.

              També organitzava activitats recreatives com teatre, un grup de caramelles, jocs infantils...

              <br>

              <a class="button_activity border_ac center" href="">Llegir més...</a>

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

        <div class="col-lg-12">

            <div class="col-lg-6">
              <div class="section_1_teatre_img" style="background-image: url('/images/teatre.jpg')">
              </div>
            </div>

            <div class="col-lg-1">
            </div>

            <div class="col-lg-6">

              <div class="section_1_teatre_text">
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

            <div class="section_2_teatre_img" style="background-image: url('/images/award.jpg')">
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
              <h4><b>Història del Centre, més de cent anys</b></h4>
              El Centre Moral i Cultural del Poblenou, “el Centre”, és una associació que es va crear en aquest popular barri barceloní el 1910 i que des d’aleshores ha dut aterme una tasca ininterrompuda, fins i tot en els moments difícils viscuts pel nostre país, en els camps educatiu, cultural, esportiu i d’esbarjo.

              També organitzava activitats recreatives com teatre, un grup de caramelles, jocs infantils...

              <br>

              <a class="button_activity border_ac center" href="">Llegir més...</a>

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

              Quan el 1989 es va fer l’homenatge a Francesc de B. Comes, que va ser director de l’Esbart Montseny en una de les èpoques de més esplendor de la secció, a uns quants antics dansaires els va picar el cuquer de tornar a ballar aquelles danses que havien portat arreu de Catalunya, i també a fora, durant tants anys.

              La il·lusió es va començar a materialitzar el 1990, quan es va constituir la Secció d’Antics...

              <br>

              <a class="button_activity border_ac center" href="">Llegir més...</a>

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