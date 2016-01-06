<html>
    <head>
        <title>App Name - @yield('title')</title>
        <script type="text/javascript" href="{{URL::asset('assets/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript"></script>
        <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
    </head>
    <body>
        <section class="container">
            @section('sidebar')
                <h1>Uber ltd.</h1>
            @show

            <div class="">
                @yield('content')
            </div>
        </section>
       
    </body>
</html>