<!doctype html>
<html lang="en" dir="ltr">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- TITLE -->
    <title>@yield('title')</title>


    @include('auth.partials.styles')


</head>


<body class="ltr login-img">

    @include('auth.partials.switcher')



    @yield('content')

@include('auth.partials.scripts')
</body>


</html>
