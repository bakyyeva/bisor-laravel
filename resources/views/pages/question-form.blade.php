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
    <div class="container-question">
        <h1>Yardım al</h1>
        <form enctype="multipart/form-data" action="" method="POST">
            @csrf
            <div class="form-item">
                <label for="title">Başlık giriniz</label>
                <input type="text" name="title" id="title" value="{{ old('title') }}" required>
                @error('title')
                <p style='text-align: start; color: red; font-size: 1.6rem;'> {{ $message }} </p>
                @enderror
            </div>
            <div class="form-item">
                <label for="description">Açıklama giriniz</label>
                <textarea name="description" id="description" required> {{ old('description') }} </textarea>
                @error('description')
                <p style='text-align: start; color: red; font-size: 1.6rem;'> {{ $message }} </p>
                @enderror
            </div>
            <div class="form-item">
                <label for="file">Dosya yükle</label>
                <input type="file" name="uploadedFile" id="file">
            </div>
            <div class="form-item" style="margin-top: 20px">
                <input type="submit" name="formdangelen" value="Yükle">
            </div>
        </form>
    </div>
</main>
</body>
</html>
