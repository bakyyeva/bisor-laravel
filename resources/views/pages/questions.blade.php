<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BÖTE</title>
    <link rel="stylesheet" href="{{ asset('assets/style/sorular.css') }}">
</head>
<body>
<header>
    <div class="logo">
        <a href="/"><p>BÖTE</p>
            <p style="font-size: 1.2rem; margin-top: 0;">öğrencileri</p> </a>
    </div>
    <nav>
        <ul class="nav-list">
            <form action="" method="GET" class="search">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Aranacak ifade...">
                <input type="submit" value="Ara">
            </form>
            <li>
                <a href="{{ route('index') }}">Anasayfa</a>
            </li>
            <li>
                <a href="{{ route('about') }}">Hakkımda</a>
            </li>
            <li>
                <a href="{{ route('questions') }}">Sorular</a>
            </li>
            <li>
                <p style="font-size: 3rem;"> | </p>
            </li>
            @guest
                <li>
                    <a href="{{ route('login') }}">Giriş</a>
                </li>
                <li>
                    <a href="{{ route('register') }}">Üye ol</a>
                </li>
            @else
                <li>
                    <p class="nav-login">
                        <a href="javascript:void(0)" style="margin-right: 1.5rem;">
                            {{ auth()->user()->name }} {{ auth()->user()->surname }}
                        </a>
                        <a href="javascript:void(0)" onclick="event.preventDefault();
                            document.getElementById('logout').submit();">
                            <img src={{ asset('assets/images/logout.png') }}>
                        </a>
                    </p>
                    <form action="{{ route('logout') }}" method="POST" id="logout">
                        @csrf
                    </form>
                </li>
            @endguest
        </ul>
    </nav>
</header>
<main>
    <div class="baslik">
        <h1>Sorular</h1>
 <p>3 adet soru var</p>
    </div>
    <hr style="height:1px;border-width:0;color:cyan;background-color:lightgray; margin: 20px 40px;">
    @foreach($questions as $question)
        <div class='sonuc'>
            <a href="questions/{{ $question->id }}">{{ $question->title }}</a>
             <p>{{ $question->description }}</p>
            @auth
                @if($question->user->id === auth()->user()->id)
                    <span>
                      <form action="{{ route('update-form') }}" method="POST">
                          @csrf
                        <input type="hidden" name="update_id" value="{{ $question->id }}">
                        <input type="submit" name="formdangelen" value="Düzelt">
                      </form>
                      <form action="{{ route('delete') }}" method="POST">
                          @csrf
                            <input type="hidden" name="delete_id" value="{{ $question->id }}">
                            <input type="submit" name="formdangelen" value="Sil">
                       </form>
                    </span>
                @endif
            @endauth
        </div>
    @endforeach
</main>
</body>
</html>
