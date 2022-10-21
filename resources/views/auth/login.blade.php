<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BÖTE</title>
    <link rel="stylesheet" href="{{ asset('assets/style/login.css') }}">
</head>
<body>
<main>
    <div class="login-box">
        <h2>Kullanıcı Girişi</h2>
        <form action="" method="POST">
            @csrf
            <div class="user-box" style="margin-top: 25px;">
                <input type="text" name="username" placeholder="Kullanıcı adı" required>
                @error('username')
                <p style='text-align: center; color: red; font-size: 1.6rem;'> {{ $message }} </p>
                @enderror
            </div>
            <div class="user-box">
                <input type="password" name="pwd" placeholder="Şifre" required>
                @error('pwd')
                <p style='text-align: center; color: red; font-size: 1.6rem;'> {{ $message }} </p>
                @enderror
            </div>
            <div class="form-check">
                <label style="font-size: 1.2rem">
                    <input type="checkbox" name="remember"> Beni hatırla </label>
            </div>
            <div class="login-row" style="margin-top: 40px;">
                <div class="login-left">
                    <p>Hesabınız yokmu?</p>
                    <p>Hemen <a href="{{ route('register') }}">Üye ol</a></p>
                </div>
                <div class="login-right"><input type="submit" name="submit" value="Giriş yap"></div>
            </div>
        </form>
    </div>
</main>
</body>
</html>
