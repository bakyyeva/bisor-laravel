<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BÖTE</title>
    <link rel="stylesheet" href="{{ asset('assets/style/aboutme.css') }}">
</head>
<body>
@include('layouts.menu')
<main>
    <div class="image">
        <div class="profile">
            <img src="{{ asset('assets/images/profile.jpg') }}">
        </div>
        <div class="icon">
            <a href="https://github.com/bakyyeva"><img src="{{ asset('assets/images/github.png') }}"></a>
            <a href="https://www.linkedin.com/in/uzukbakyyeva/"><img src="{{ asset('assets/images/linkedin.png') }}"></a>
            <a href="https://twitter.com/bakyyeva"><img src="{{ asset('assets/images/twitter.png') }}"></a>
        </div>
    </div>
    <div class="text">
        <h2>Hakkımda</h2>
        <p>
            Merhaba ben Uzuk Bakyyeva. Marmara Üniverstesi
            Bilgisayar ve Öğretim Teknolojileri Öğretmenliği bölümü öğrencisiyim.
            Web Tabanlı Programlama dersi kapsamında yaptığım bu web sitesi BÖTE öğrencileri için.
            Bu sitenin amacı, BÖTE öğrencilerinin programlamada
            karşılaştıkları hataları birbirleriyle paylaşarak yardımlaşabilmeleri için.
        </p>
    </div>
</main>
</body>
</html>
