<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BÖTE</title>
    <link rel="stylesheet" href="{{ asset('assets/style/soru.css') }}">
</head>
<body>
@include('layouts.menu')
<div class='left'>
    <h1>{{ $question->title }}</h1>
    <p class='name'> Soru soran:
        <span>{{ $question->user->name }} {{ $question->user->surname }}</span>
    </p>
    <p class='name'> Zaman:
        <span>{{ $question->created_at->diffForHumans() }}</span>
    </p>
    <hr style='height:1px;border-width:0;color:lightgray;background-color:lightgray; margin:20px 30px'>
    <div class='sorag'>
        <img src="{{ asset('storage/'. $question->file) }}" alt="">
        <p>{{ $question->description }}</p>
    </div>
</div>
    <div class="right">
        <p>Senin Cevabın</p>
        <form action="{{ route('answer') }}" method="POST">
            @csrf
            <input type="hidden" name="questionID" value="{{ $question->id }}">
            <textarea name="answer"></textarea>
            @auth
            <input type="submit" name="cevapform" value="Cevabını Gönder">
            @else
                <p style='color: rgb(175, 37, 37); font-size: 1.6rem; margin-left: 20px; margin-bottom: 20px;'> Cevap vermek için giriş yapınız! </p>
            @endauth
        </form>
    </div>
    @foreach($answers as $answer)
        <div class='cevap'>
                <p>
                    <span style="font-weight: bold; color:#7e4722; font-size: 1.5rem">Cevaplayan: </span>
                    {{ $answer->user->name }} {{ $answer->user->surname }}
                </p>
                <p>
                    <span style="font-weight: bold; color:#7e4722; font-size: 1.5rem">Zaman: </span>
                    {{ $answer->created_at->diffForHumans() }}
                </p>
                <p style="margin-bottom: 10px;"> <span style="font-weight: bold; color:#7e4722; font-size: 1.5rem;">Cevap: </span>
                    {{ $answer->answer }}
                </p>
        </div>
    @endforeach
</main>
</body>
</html>
