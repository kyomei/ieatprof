<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>@yield('title') - Instituto Educacional Alto Tietê</title>
        <!-- Latest compiled and minified CSS -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet"  type="text/css" href="{{ asset('public/css/style.css') }}" />
    </head>
    <body>

        @include('layouts.header')

        @include('layouts.navbar')
        
        @include('layouts.carousel')
        <div class="container">

            @yield('conteudo')

        </div>

        @include('layouts.footer')

        <script src="https://ieatprofissionalizante.com.br/assets/js/font-awesome.js"></script>

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 
    </body>
</html>
