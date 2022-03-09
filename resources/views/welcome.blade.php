<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hackaton 2022</title>

        
        <link rel="stylesheet" href="{{asset('css/acceuil.css')}}" />


    </head>
    <body >
        
        <div class="couv">
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
                                <a href="{{route('dashboard')}}"><button type="button"> <span></span> Mon profile</button></a>
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

    </body>
</html>
