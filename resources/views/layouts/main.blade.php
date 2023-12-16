<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Laravel Blade</title>
</head>
<div class="wrapper">
    <header class="header">
        <div class="header__container">
            <a class="header__logo" href=""><img width="50" height="50" src={{asset('./storage/img/group31.svg')}}
                                                 alt=""></a>
            <ul class="header-menu__body"
            >
                <li class=""><a href="{{route('main.index')}}">Main</a></li>
                <li class=""><a href="{{route('about.index')}}">About</a></li>
                <li class=""><a href="{{route('contact.index')}}">Contact</a></li>
                <li class=""><a href="{{route('post.index')}}">Posts</a></li>
            </ul>
            <button>
                <img src="{{asset('./storage/img/feather_menu.svg')}}" alt="">
            </button>
        </div>
    </header>
    <main class="page">
        <div class="page__container"> @yield('content')</div>
    </main>
    <footer class="footer p-5 text-white bg-dark">
        footer
    </footer>
</div>
</body>
</html>
