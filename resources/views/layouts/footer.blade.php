<footer id="myFooter">

    <div class="container">

        <div class="row">
            <div class="col-sm-2" >
                <img class="logo_footer" src="{{$panel[0]->logo2}}" alt="Logo">
            </div>
            <div class="col-sm-1">
            </div>
            <div class="col-sm-2">
                <h4><b>El nostre centre</b></h4>
                <ul>
                    <li><a href="#">Qui som</a></li>
                    <li><a href="{{route('weare')}}/#place">On som</a></li>
                    <li><a href="{{route('weare')}}/#Junta">Junta directiva</a></li>
                    <li><a href="#">El nostre bar</a></li>
                    <li><a href="#">Lloguers de sales</a></li>
                </ul>
            </div>
            <div class="col-sm-1">
            </div>
            <div class="col-sm-2">
                <h4><b>Activitats</b></h4>
                <ul>
                    <li><a href="{{route('activities')}}">Tallers i activitats</a></li>
                    <li><a href="#">L'estel de natzaret</a></li>
                    <li><a href="#">Esbart montseny</a></li>
                    <li><a href="#">Aula de música</a></li>
                    <li><a href="#">Cant coral</a></li>
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