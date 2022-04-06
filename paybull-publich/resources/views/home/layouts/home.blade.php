<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="description" content="@yield('description')">
    
    <meta name="google-site-verification" content="WBYCpUcYN5S3ywEv2rhihocPDq8ISTVsetYvIlNfqBc" />
    <meta name="msvalidate.01" content="FFF47E818ACA9F94727BF8AF988204F0" />
    
    <link rel="canonical" href="@yield('canonical')"/>
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="{{asset('assets')}}/frontEnd/css/bootstrap.css">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/frontEnd/css/tailwind.min.css" />
    <!-- Css Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/frontEnd/css/main.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/frontEnd/css/selectCss.css">
     <link rel="shortcut icon" href="{{asset('assets')}}/admin/images/favicon.png">
     
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-JXSDV25414"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-JXSDV25414');
</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5VN4SZ2');</script>
<!-- End Google Tag Manager -->
</head>

<body>
    @include('home._header')

    @yield('content')
  
    @include('home._footer') 

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5VN4SZ2"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</body>
</html>