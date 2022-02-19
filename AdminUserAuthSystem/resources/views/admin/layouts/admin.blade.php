<!DOCTYPE html>
<html lang="en">

<head>
  <title>Admin | dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap">
  <link rel="stylesheet" href="{{asset('assets')}}/admin/css/tailwind/tailwind.min.css">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-tailwind.png">
  <script src="{{asset('assets')}}/admin/js/main.js"></script>
  @yield('css')
  @yield('javascript')
</head>

<body class="antialiased bg-body text-body font-body">

  @include('admin._header')

  @yield('content')
  @include('admin._footer')
  @yield('footer')

</body>

</html>