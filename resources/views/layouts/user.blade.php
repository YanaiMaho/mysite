<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
         {{-- 後の章で説明します --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- 各ページごとにtitleタグを入れるために@yieldで空けておきます。 --}}
        <title>@yield('title')</title>

        <!-- Scripts -->
         {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
        <script src="{{ secure_asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        {{-- Laravel標準で用意されているCSSを読み込みます --}}
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/index.css') }}" rel="stylesheet">
        {{-- この章の後半で作成するCSSを読み込みます --}}
        <link href="{{ secure_asset('css/user.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            {{-- 画面上部に表示するナビゲーションバーです。 --}}
         
           <header>
                <div class="bar">
                     <a href="{{ url('/') }}"><img src="images/logo.png" alt="ロゴ">
                </div>
                <div class="bar">
                     <p>観光スポット検索・投稿サイト</p>
                </div>
                <div class="bar">
                    <nav class="navbar">
                    <ul class="nav-link">
                        <li><a href="index">Home</a></li>
                        <li><a href="menu.html">お気に入り</a></li>
                        <li><a href="contact.html">my投稿</a></li>
                        <li><a href="create">新規投稿</a></li>
                        <li><a href="contact.html">ヘルプ</a></li>
                      </ul>
                </nav>
                </div>
                
            </header>
            
            
                

            <main class="py-4">
                <div class="main">
                {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
                @yield('content')
                </div>
            </main>
        </div>
        <footer>
                <p><small>&copy; 2020</small></p>
        </footer>
        
    </body>
</html>
