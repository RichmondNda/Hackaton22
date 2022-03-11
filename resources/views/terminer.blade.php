<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merci | C2E</title>
    <link rel="stylesheet" href="{{asset('css/terminer.css')}}">
    <link rel="icon" href="{{asset('images/app/logoSDI-PhotoRoom.png')}}" type="image/icon type">
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <a href="{{route('welcome', null, false)}}"><img src="{{asset('images/app/logoHackathon-PhotoRoom.png')}}" class="logoH"></a>
        </div>
        <div class="nav">
            <ul>
                <li><a href="{{route('welcome',  null, false)}}">acceuil</a></li>
                <li><a href="{{route('login',  null, false)}}">connexion</a></li>
            </ul>
        </div>
    </div>
    <div class="content">
            <h1>Votre inscription est validée</h1>
            <h4>Merci et bonne chance !</h4> <br>
            <a href="{{route('welcome',  null, false)}}"><button type="button"> Quitter</button></a>
            
    </div>
</body>
<footer>

</footer>
</html>