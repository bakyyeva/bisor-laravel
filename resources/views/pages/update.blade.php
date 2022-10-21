<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BÖTE</title>
    <link rel="stylesheet" href="{{ asset('assets/style/style.css') }}">
</head>
<body>
@include('layouts.menu')
<main>
    <div class="container-upt">
        <h1>Soruyu düzelt</h1>
        <form enctype="multipart/form-data" action="{{ route('update') }}" method="POST" id="duzelt">
            @csrf
            @method('PUT')
            <input type="hidden" name="update_id" value="{{ $question->id }}">
            <div class="form-item">
                <label for="title">Başlık giriniz</label>
                <input type="text" name="title" id="title" value="{{ $question->title}}">
            </div>
            <div class="form-item">
                <label for="description">Açıklama giriniz</label>
                <textarea name="description" id="description"> {{ $question->description }}</textarea>
            </div>
            <div class="form-item" style="margin-top: 20px">
                <input type="submit" name="formdangelen" value="Düzelt">
            </div>
        </form>
    </div>
</main>
</body>
</html>
