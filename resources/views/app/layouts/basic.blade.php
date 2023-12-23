<html lang="pt-br">
    <head>
        <title>Contabilidade Online - @yield('title')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('css/defaultStyle.css')}}">
    </head>

    <body>
        @include('app.layouts.navbar')
        @yield('content')
        @include('app.layouts.footer')
    </body>
  </html>