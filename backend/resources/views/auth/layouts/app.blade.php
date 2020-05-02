<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>No Naem News</title>

        <!-- Include bootstrap + animate + custom + nprogress -->
        <link href="{{ asset('assets/auth/css/auth.css') }}" rel="stylesheet">
        <!-- Include font-awesome + pace-theme-minimal -->
        <link href="{{ asset('assets/app/css/app.css') }}" rel="stylesheet">
    </head>
    <body class="login">
        <div>
            <div class="login_wrapper">
            <div class="text-center"><h1><i class="fa fa-newspaper-o"></i> No Naem News!</h1></div>
                @yield('content')
            </div>
        </div>
    </body>
</html>
