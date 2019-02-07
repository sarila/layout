<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link href="css/mystyle.css" rel="stylesheet" type="text/css" />
        <script src="js/myscripts.js"></script>
    </head>
    <body>
        @yield('sidebar')
            This is the master sidebar.

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
