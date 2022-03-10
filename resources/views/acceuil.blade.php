<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>C2E | HACKATON</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" media="screen" href="{{asset('css/particles1.css')}}">
  <link rel="icon" href="{{asset('images/app/logoSDI-PhotoRoom.png')}}" type="image/icon type">
  <link rel="stylesheet" href="{{asset('css/acceuil.css')}}" />

  
</head>
<body>

    <div class="couv"   style="position:fixed;">
        <div class="couv" >
            <div class="logo">
                <img src=" {{asset('images/app/logoEsatic-PhotoRoom.png')}} " class="logoE">
                <img src=" {{asset('images/app/logoC2E-PhotoRoom.png')}} " class="logoC">
            </div>
            <div class="content">
                <div class="imag">
                    <img src="{{asset('images/app/logoSDI-PhotoRoom.png')}}" class="logoS">
                    <img src="{{asset('images/app/logoHackathon-PhotoRoom.png')}}" class="logoH">
                </div>
               
                <div class="champs">
                    @if (Route::has('login'))
                    
                        @auth
                            <div class="b1">
                                <a href="{{route('Participants.inscription')}}"><button type="button">  INSCRIPTION</button></a>
                            </div>
                            <div class="b2">
                                <a href="{{route('dashboard')}}"><button type="button"> <span></span> MON PROFIL</button></a>
                            </div>
                            
                        @else
                            <div class="b1">
                                <a href="{{route('Participants.inscription')}}"><button type="button">  INSCRIPTION</button></a>
                            </div>
                            <div class="b2">
                                <a href="{{route('login')}}"><button type="button"><span></span> CONNEXION</button></a>  
                            </div> 
                        @endauth
                    
                    @endif
    
                </div>
            </div>
        </div>
    </div>

<!-- particles.js container -->
<div id="particles-js">
    
    
</div>

<!-- scripts -->
<script src="{{asset('js/particles.js')}}" ></script>
<script src="{{asset('js/app-particles1.js')}}"></script>


</body>
</html>