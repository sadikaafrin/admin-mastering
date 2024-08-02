<!doctype html>
<html lang="en" dir="ltr">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords"
        content="">

    <!-- TITLE -->
    <title>@yield('title')</title>


 <!-- BOOTSTRAP CSS -->
  @include('backend.partials.styles')

</head>

<body class="ltr app sidebar-mini">

    @include('backend.partials.switcher')

    @include('backend.partials.loader')

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">


             @include('backend.partials.header')

            @include('backend.partials.sidebar')

            @yield('content')
        </div>

        @include('backend.partials.footer')

    </div>
    <!-- page -->


    @include('backend.partials.scripts')

</body>

</html>
