<footer id="myFooter">

    <div class="container">

        <div class="row">
            <div class="col-sm-2" >
                <img class="logo_footer" src="{{$panel[2]->value}}" alt="Logo">
            </div>
            <div class="col-sm-1">
            </div>
            <div class="col-sm-2">
                <h4><b>El nostre centre</b></h4>
                <ul>
                    <li><a href="#">Qui som</a></li>
                    <li><a href="{{route('weare')}}/#contacte">On som</a></li>
                    <li><a href="{{route('weare')}}/#junta">Junta directiva</a></li>
                    <li><a target="_blank" href="https://www.google.es/search?q=el%20bar%20del%20centre&oq=el+bar+del+centre&aqs=chrome..69i57j0l3j69i64.2356j0j7&sourceid=chrome&ie=UTF-8&safe=strict&npsic=0&rflfq=1&rlha=0&rllag=41399784,2185626,1342&tbm=lcl&rldimm=6389039231324155844&ved=2ahUKEwjqg_20-d3cAhUS3xoKHdKEC7MQvS4wAHoECAEQJg&rldoc=1&tbs=lrf:!2m4!1e17!4m2!17m1!1e2!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:9#rlfi=hd:;si:6389039231324155844;mv:!1m3!1d81475.76881327173!2d2.22625865!3d41.4622913!2m3!1f0!2f0!3f0!3m2!1i711!2i327!4f13.1;tbs:lrf:!2m1!1e2!2m1!1e3!2m4!1e17!4m2!17m1!1e2!3sIAE,lf:1,lf_ui:9">El nostre bar</a></li>
                    <li><a href="#">Lloguers de sales</a></li>
                </ul>
            </div>
            <div class="col-sm-1">
            </div>
            <div class="col-sm-2">
                <h4><b>Activitats</b></h4>
                <ul>
                    <li><a href="{{route('activities')}}">Tallers i activitats</a></li>
                    <li><a href="{{route('weare')}}/">L'estel de natzaret</a></li>
                    <li><a href="{{route('weare')}}/">Esbart montseny</a></li>
                    <li><a href="{{route('weare')}}/">Cant coral</a></li>
                </ul>
            </div>
            <div class="col-sm-1">
            </div>
            <div class="col-sm-3">
                <div class="social-networks">
                    <a href="{{$socials[1]->link}}" class="instagram"><i class="fa fa-instagram"></i></a>
                    <a href="{{$socials[1]->link}}" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="{{$socials[2]->link}}" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="{{$socials[3]->link}}" class="google"><i class="fa fa-google-plus"></i></a>
                </div>
                <button type="button" class="btn btn-default">Contacte</button>
            </div>
        </div>
    </div>
    
    <div class="footer-copyright">
        <div class="col-lg-12" style="background-color: #333333;">
            <div class="col-lg-4 center">
                <p>MADE WITH <i class="fa fa-heart" style="color:#b9362b"></i> SSANCLE</p> 
            </div>
            <div class="col-lg-4 center">
                <p>©2018 Centre Moral i Cultural del Poblenou </p>
            </div>
            <div class="col-lg-4 center">
                <p>Pujades, 176-178, Barcelona</p>
            </div>
        </div>
    </div>

</footer> 