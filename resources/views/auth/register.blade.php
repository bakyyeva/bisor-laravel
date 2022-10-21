<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BÖTE</title>
    <link rel="stylesheet" href="{{ asset('assets/style/signup.css') }}">
</head>
<body>
<main>
    <div class="login-box">
        <h2>Kullanıcı Kaydı</h2>
        <form action="" method="POST">
            @csrf
            <div class="user-box" style="margin-top: 25px;">
                <input type="text" name="username" placeholder="Kullanıcı adı" value="{{ old('username') }}" required>
                @error('username')
                <p style='text-align: left; color: red; font-size: 1.6rem;'> {{ $message }} </p>
                @enderror
            </div>
            <div class="user-box">
                <input type="text" name="name" placeholder="Ad" value="{{ old('name') }}" required>
                @error('name')
                <p style='text-align: left; color: red; font-size: 1.6rem;'> {{ $message }} </p>
                @enderror
            </div>
            <div class="user-box">
                <input type="text" name="surname" placeholder="Soyad" value="{{ old('surname') }}" required>
                @error('surname')
                <p style='text-align: left; color: red; font-size: 1.6rem;'> {{ $message }} </p>
                @enderror
            </div>
            <div class="user-box">
                <input type="email" name="email" placeholder="E-Posta" value="{{ old('email') }}" required>
                @error('email')
                <p style='text-align: left; color: red; font-size: 1.6rem;'> {{ $message }} </p>
                @enderror
            </div>
            <div class="user-box">
                <input type="password" name="password" placeholder="Şifre" required>
                @error('password')
                <p style='text-align: left; color: red; font-size: 1.6rem;'> {{ $message }} </p>
                @enderror
            </div>
            <div class="user-box">
                <input type="password" name="password_confirmation" placeholder="Şifre(Tekrar)" required>
            </div>
            <div class="login-row" style="margin-top: 40px;">
                <div class="login-left">
                    <a href="{{ route('login') }}">Giriş sayfası</a>
                </div>
                <div class="login-right"><input type="submit" name="submit" value="Kayıt ol"></div>
            </div>
        </form>
    </div>
</main>
</body>
</html>
