<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{asset('css/sanitize.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
    @yield('css')
</head>
<body>
    <header>
        <div class="header">
            <div class="header__title">
                <h1 class="header__title-logo">FashionablyLate</h1>
            </div>
            <div class="header__link">
                @yield('link')
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>