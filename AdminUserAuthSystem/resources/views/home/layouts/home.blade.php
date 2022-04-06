<!DOCTYPE html>
<html lang="tr">

<head>
    <title>PAYBULL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="{{asset('assets')}}/frontEnd/css/bootstrap.css">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/frontEnd/css/tailwind.min.css" />
    <!-- Css Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/frontEnd/css/main.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/frontEnd/css/selectCss.css">
    <link rel="shortcut icon" href="{{asset('assets')}}/admin/images/PaybullLogo.png">

</head>

<body>
    @include('home._header')

    @yield('content')
  
    @include('home._footer') 

</body>
</html>