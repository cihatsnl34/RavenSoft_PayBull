<!DOCTYPE html>
<html lang="en">

<head>
  <title>Personal Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap">
  <link rel="stylesheet" href="{{asset('assets')}}/adminLogin/css/tailwind/tailwind.min.css">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-tailwind.png">
  <script src="{{asset('assets')}}/adminLogin/js/main.js"></script>
  <link rel="shortcut icon" href="{{asset('assets')}}/admin/images/PaybullLogo.png">
</head>

<body class="antialiased bg-body text-body font-body">
  <div class="">

    <section class="pb-24">
      <div class="pt-24 pb-64 xl:pt-52 lg:pb-80 bg-blueGray-100 text-center rounded-b-10xl">
        <div class="container px-4 mx-auto">

          <h2 class="mb-12 text-9xl md:text-10xl xl:text-11xl leading-tight font-heading font-medium"><center><img style="width:40%" src="{{asset('assets')}}/admin/images/PaybullLogo.png"></center> </h2>
          <p class="text-xl text-gray-400">Personal <br>Portal &amp; Takip Sistemi</p>
        </div>
      </div>
      <div class="container px-4 mx-auto">
        <div class="-mt-52 max-w-4xl mx-auto py-10 px-8 bg-white rounded-4xl shadow-lg">
          <div class="flex flex-wrap justify-center -mb-4 -mx-4">
            <div class="w-full md:w-auto px-4 mb-4">
              <a class="flex items-center justify-center py-5 px-5 border-2 border-gray-50 hover:border-gray-100 rounded-xl" href="#">
                <img class="w-6 h-6 mr-4" src="{{asset('assets')}}/adminLogin/uinel-assets/images/sign-up/google.svg" alt="">
                <p class="font-bold uppercase">Google</p>
              </a>
            </div>
            <div class="w-full md:w-auto px-4 mb-4">
              <a class="flex items-center justify-center py-5 px-5 border-2 border-gray-50 hover:border-gray-100 rounded-xl" href="#">
                <img class="w-6 h-6 mr-4" src="{{asset('assets')}}/adminLogin/uinel-assets/images/sign-up/apple.svg" alt="">
                <p class="font-bold uppercase">Apple</p>
              </a>
            </div>
            <div class="w-full md:w-auto px-4 mb-4">
              <a class="flex items-center justify-center py-5 px-5 border-2 border-gray-50 hover:border-gray-100 rounded-xl" href="#">
                <img class="w-6 h-6 mr-4" src="{{asset('assets')}}/adminLogin/uinel-assets/images/sign-up/facebook.svg" alt="">
                <p class="font-bold uppercase">Facebook</p>
              </a>
            </div>
          </div>
          <br>
          <!-- Session Status -->
          <x-auth-session-status class="mb-4" :status="session('status')" />

          <!-- Validation Errors -->
          <x-auth-validation-errors class="mb-4" :errors="$errors" />

          <form method="post" action="{{ route('personal.personallogin') }}">
            <div class="mt-10 py-16 px-6 border-2 border-gray-50 rounded-4xl">
              <div class="max-w-md mx-auto">

                @csrf
                <input class="w-full mb-6 py-5 px-12 text-xl border-2 border-blue-400 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50" id="email" name="email" type="email" placeholder="Your Email">
                <input class="w-full mb-6 py-5 px-12 text-xl border-2 border-blue-400 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50" type="password" placeholder="Password" required autocomplete="current-password" name="password" id="password">
                <button type="submit" class="block py-5 px-10 mx-auto w-full md:max-w-max text-xl leading-6 text-white font-medium tracking-tighter font-heading text-center bg-blue-500 hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 rounded-xl">Giriş Yap</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="{{asset('assets')}}/adminLogin/js/charts-demo.js"></script>
</body>

</html>