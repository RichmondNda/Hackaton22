<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hackaton 2022</title>
        <link rel="icon" href="{{asset('images/app/logoSDI-PhotoRoom.png')}}" type="image/icon type">
        
        <link rel="stylesheet" href="{{asset('css/inscription.css')}}" />
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        
        @livewireStyles
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

    </head>
    <body >
        
        <div class="navbar">
            <div class="logo">
                <a href="{{route('welcome',  null, false)}}"><img src="{{asset('images/app/logoHackathon-PhotoRoom.png')}}" class="logoH"></a>
            </div>
            <div class="nav">
                <ul>
                    <li><a href="{{route('welcome',  null, false)}}">acceuil</a></li>
                    <li><a href="{{route('login',  null, false)}}">connexion</a></li>
                </ul>
            </div>
        </div>
        <div class="content">
            
            <div x-data="Tabsetup()"  >
                        
                @livewire('participants.enregistrement')
                
            </div>
        </div>


        <script>
            function Tabsetup() {
                return {
                activeTab: 0,
                tabs:['groupe', 'participants', ]
                
                };
            };
        </script>
        @livewireScripts
    </body>
</html>
