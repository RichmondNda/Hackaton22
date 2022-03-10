<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>C2E | HACKATON</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" media="screen" href="{{asset('css/particles.css')}}">

  <link rel="icon" href="{{asset('images/app/logoSDI-PhotoRoom.png')}}" type="image/icon type">
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}" defer></script>

</head>
<body>

<!-- particles.js container -->
<div id="particles-js">
    <div class="flex flex-col items-center justify-center w-full min-h-screen font-bold text-center " style="position:fixed">
        
        <span class=" text-white text-7xl" style="font-size:33px">
            Technovore Hackaton 2022
        </span>   
        <span class="text-black text-2xl " >
            Les Inscriptions seront bientôt disponible
        </span>   
        <br>

        <a class="flex pt-2 text-white text-xl" href="{{route('welcome')}}">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            Accueil
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        </a>

    </div>
</div>

<!-- scripts -->
<script src="{{asset('js/particles.js')}}" ></script>
<script src="{{asset('js/app-particles.js')}}"></script>


</body>
</html>