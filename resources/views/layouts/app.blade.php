<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title> СНТ Полушкино.</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/new_styles.css')}}" />
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>-->
    <!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->
</head>
<body>
<!-- Page Wrapper -->
<!-- Header -->
    <header id="header" class="header">
        <h1><a href="." class="logo">СНТ Полушкино</a></h1>
        <nav id="nav">
            <ul>
                <li class="special">
                    <a href="#menu" class="menuToggle"><span>МЕНЮ</span></a>
                    <div id="menu">
                        <ul>
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">· Войти</a>
                                    </li>
                                @endif
                                
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">· Зарегистрироваться</a>
                                    </li>
                                @endif
                            @else
                            <li class="nav-item">
                                    <p class="nav-link">
                                        {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}
                                    </p>

                                    <a class="" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        · Выйти
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none" style="display:none">
                                        @csrf
                                    </form>
                                </li>
                            @endguest
                            <li class="nav-item"><a class="nav-link" href="#company" >· Главная</a></li>
                            <li class="nav-item"><a class="nav-link" href="#head" >· Новости</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/upload') }}" >· Уставные документы</a></li>										
                            <li class="nav-item"><a class="nav-link" href="#contacts" >· Контакты</a></li>	
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </header>

    <main class="my-5">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer id="footer">
        <ul class="icons">
            <li><a href="https://www.google.ru/maps/place/Полушкино/@55.5866399,36.5654076,16z/data=!4m8!1m2!2m1!1z0YHQvdGCINC_0L7Qu9GD0YjQutC40L3Qvg!3m4!1s0x0:0x2ba984ef3a8bb2f9!8m2!3d55.585126!4d36.5683003" class="icon fa-map-o"><span class="label">Google maps</span></a></li>
            
            
        </ul>
        <ul class="copyright">
            <li>&copy; </li><li>2020 <a href="http://glavfoto.ru">glavfoto.ru</a></li>
        </ul>
    </footer>

    <!-- Scripts -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.scrollex.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.scrolly.min.js')}}"></script>
    <script src="{{asset('assets/js/skel.min.js')}}"></script>
    <script src="{{asset('assets/js/util.js')}}"></script>
    <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
    <script src="{{asset('assets/js/main.js')}}"></script>

	</body>
</html>
