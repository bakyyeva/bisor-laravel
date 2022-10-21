<header>
    <div class="logo">
        <a href="/">
            <p>BÖTE</p>
            <p style="font-size: 1.2rem; margin-top: 0;">öğrencileri</p>
        </a>
    </div>
    <nav>
        <ul class="nav-list">
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
