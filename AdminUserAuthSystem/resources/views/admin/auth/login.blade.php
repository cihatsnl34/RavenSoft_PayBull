<x-guest-layout>
    <x-auth-card>

        <x-slot name="logo">
            <div class="pt-24 pb-64 xl:pt-52 lg:pb-80 bg-blueGray-100 text-center rounded-b-10xl">
                <div class="container px-4 mx-auto">

                    <h1 style="font-size:60pt;font-family:Verdana, Geneva, Tahoma, sans-serif;" class="mb-12 text-9xl md:text-10xl xl:text-11xl leading-tight font-heading font-medium">Paybull </h1>
                    <p class="text-xl text-gray-400">Portal &amp; Takip Sistemi</p>
                    <p class="text-xl text-gray-400">admin giriş ekranı</p>
                </div>
            </div>
        </x-slot>
        <div class="flex items-center justify-center mb-4">


            <x-button style="background-color: transparent; color:black; border:1px solid #ECEDEF;" class="ml-3">
                <a class="flex items-center justify-center py-5 px-5 border-2 border-gray-50 hover:border-gray-100 rounded-xl" href="#">
                    <img class="w-6 h-6 mr-4" src="{{asset('assets')}}/admin/uinel-assets/images/sign-up/google.svg" alt="">
                    <b>
                        <p style="padding: 2px;" class="font-bold uppercase">Google</p>
                    </b>
                </a>
            </x-button>
            <x-button style="background-color: transparent; color:black; border:1px solid #ECEDEF;" class="ml-3">
                <a class="flex items-center justify-center py-5 px-5 border-2 border-gray-50 hover:border-gray-100 rounded-xl" href="#">
                    <img class="w-6 h-6 mr-4" src="{{asset('assets')}}/admin/uinel-assets/images/sign-up/apple.svg" alt="">
                    <b>
                        <p style="padding: 2px;" class="font-bold uppercase">Apple</p>
                    </b>
                </a>
            </x-button>
            <x-button style="background-color: transparent; color:black; border:1px solid #ECEDEF;" class="ml-3">
                <a class="flex items-center justify-center py-5 px-5 border-2 border-gray-50 hover:border-gray-100 rounded-xl" href="#">
                    <img class="w-6 h-6 mr-4" src="{{asset('assets')}}/admin/uinel-assets/images/sign-up/facebook.svg" alt="">
                    <b>
                        <p style="padding: 2px;" class="font-bold uppercase">Facebook</p>
                    </b>
                </a>
            </x-button>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('admin.adminlogin') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Mail Adresi:')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Şifre:')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <!-- Remember Me
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Beni Hatırla') }}</span>
                </label>
            </div>
             -->
            <div class="flex items-center justify-center mt-4">
                @if (Route::has('password.request'))
                <!--
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Şifrenizi unuttunuz mu?') }}
                    </a>
                -->
                @endif

                <x-button style="background-color: #2D60E6;" class="ml-3">
                    {{ __('Giriş Yap') }}
                </x-button>
            </div>
        </form>

    </x-auth-card>
</x-guest-layout>