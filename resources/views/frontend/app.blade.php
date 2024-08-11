<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0,maximum-scale=1.0"
    />
    <title>@yield('title')</title>

    <!-- Css -->
    @include('frontend.partials.style')
</head>
<body>
<!-- =============== NAVBAR STARTS =============== -->
@include('frontend.partials.navbar')
<!-- =============== NAVBAR ENDS =============== -->

@yield('content')

<!-- =============== FOOTER STARTS =============== -->
@include('frontend.partials.footer')
<!-- =============== FOOTER ENDS =============== -->

@include('frontend.partials.scripts')


</body>
</html>
