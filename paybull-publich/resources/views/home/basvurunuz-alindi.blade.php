@extends('home/layouts.home')
@section('content')

    <main>
    <section style="background-color: #F8FBFF;">
        <div class="pt-20 col-md-12 col-12 text-center pb-40">

            <div class="lg:pt-40 w-full">
                <h1 class="section-title text-center">{{ __('Başvurunuz Alınmıştır.')}}</h1>
                <h3 class="section-semi-title text-center  ">
                    {{ __('En kısa sürede tarafınıza dönüş sağlanacaktır.')}}
                </h3>
                <h3 class="section-text text-center  ">
                    {{ __('5 Saniye içerisinde Anasayfaya yönlendirileceksiniz.')}}
                </h3>
            </div>
        </div>


    </section>
        <script>
            setTimeout(function() {
                window.location.href = "/"
            }, 5000); // 5 second
        </script>
    </main>

@endsection
