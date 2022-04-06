@extends('home/layouts.home')
@section('content')
<main>
    <section class="py-20">
      <div class="container mx-auto px-4">
        <h2 class="mb-3 text-sm font-bold font-heading pos-title text-gray-400">ANLAŞMALI BANKALAR</h2>
        <div class="flex flex-wrap -mx-4">
          <div class="w-full mb-3 sm:w-1/2 md:w-1/3 lg:w-1/6 px-4 mb-6 lg:mb-0">
            <div class="py-12 px-2 rounded-md shadow-xl">
              <img class="mx-auto h-6" src="{{asset('assets')}}/frontEnd/img/banks/akbank.png" alt="">
            </div>
          </div>
          <div class="w-full mb-3 sm:w-1/2 md:w-1/3 lg:w-1/6 px-4 mb-6 lg:mb-0">
            <div class="py-12 px-2 rounded-md shadow-xl">
              <img class="mx-auto h-6" src="{{asset('assets')}}/frontEnd/img/banks/alternatifbank.png" alt="">
            </div>
          </div>
          <div class="w-full mb-3 sm:w-1/2 md:w-1/3 lg:w-1/6 px-4 mb-6 lg:mb-0">
            <div class="py-12 px-2 rounded-md shadow-xl">
              <img class="mx-auto h-6" src="{{asset('assets')}}/frontEnd/img/banks/anadolubank.png" alt="">
            </div>
          </div>
          <div class="w-full mb-3 sm:w-1/2 md:w-1/3 lg:w-1/6 px-4 mb-6 md:mb-0">
            <div class="py-12 px-2 rounded-md shadow-xl">
              <img class="mx-auto h-6" src="{{asset('assets')}}/frontEnd/img/banks/vakifbank.png" alt="">
            </div>
          </div>
          <div class="w-full mb-3 sm:w-1/2 md:w-1/3 lg:w-1/6 px-4 mb-6 md:mb-0">
            <div class="py-12 px-2 rounded-md shadow-xl">
              <img class="mx-auto h-6" src="{{asset('assets')}}/frontEnd/img/banks/denizbank.png" alt="">
            </div>
          </div>
          <div class="w-full mb-3 sm:w-1/2 md:w-1/3 lg:w-1/6 px-4">
            <div class="py-12 px-2 rounded-md shadow-xl">
              <img class="mx-auto h-6" src="{{asset('assets')}}/frontEnd/img/banks/halkbank.png" alt="">
            </div>
          </div>
          <div class="w-full mb-3 sm:w-1/2 md:w-1/3 lg:w-1/6 px-4">
            <div class="py-12 px-2 rounded-md shadow-xl">
              <img class="mx-auto h-6" src="{{asset('assets')}}/frontEnd/img/banks/hsbc.png" alt="">
            </div>
          </div>
          <div class="w-full mb-3 sm:w-1/2 md:w-1/3 lg:w-1/6 px-4">
            <div class="py-12 px-2 rounded-md shadow-xl">
              <img class="mx-auto h-6" src="{{asset('assets')}}/frontEnd/img/banks/isbankasi.png" alt="">
            </div>
          </div>
          <div class="w-full mb-3 sm:w-1/2 md:w-1/3 lg:w-1/6 px-4">
            <div class="py-12 px-2 rounded-md shadow-xl">
              <img class="mx-auto h-6" src="{{asset('assets')}}/frontEnd/img/banks/kuveytturk.png" alt="">
            </div>
          </div>
          <div class="w-full mb-3 sm:w-1/2 md:w-1/3 lg:w-1/6 px-4">
            <div class="py-12 px-2 rounded-md shadow-xl">
              <img class="mx-auto h-6" src="{{asset('assets')}}/frontEnd/img/banks/ptt.png" alt="">
            </div>
          </div>
          <div class="w-full mb-3 sm:w-1/2 md:w-1/3 lg:w-1/6 px-4">
            <div class="py-12 px-2 rounded-md shadow-xl">
              <img class="mx-auto h-6" src="{{asset('assets')}}/frontEnd/img/banks/sekerbank.png" alt="">
            </div>
          </div>
          <div class="w-full mb-3 sm:w-1/2 md:w-1/3 lg:w-1/6 px-4">
            <div class="py-12 px-2 rounded-md shadow-xl">
              <img class="mx-auto h-6" src="{{asset('assets')}}/frontEnd/img/banks/teb.png" alt="">
            </div>
          </div>
          <div class="w-full mb-3 sm:w-1/2 md:w-1/3 lg:w-1/6 px-4">
            <div class="py-12 px-2 rounded-md shadow-xl">
              <img class="mx-auto h-6" src="{{asset('assets')}}/frontEnd/img/banks/yapikredi.png" alt="">
            </div>
          </div>
          <div class="w-full mb-3 sm:w-1/2 md:w-1/3 lg:w-1/6 px-4">
            <div class="py-12 px-2 rounded-md shadow-xl">
              <img class="mx-auto h-6" src="{{asset('assets')}}/frontEnd/img/banks/ziraat.png" alt="">
            </div>
          </div>
          <div class="w-full mb-3 sm:w-1/2 md:w-1/3 lg:w-1/6 px-4">
            <div class="py-12 px-2 rounded-md shadow-xl">
              <img class="mx-auto h-6" src="{{asset('assets')}}/frontEnd/img/banks/qnb.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-20">
      <div class="container mx-auto px-4">
        <h2 class="mb-3 text-sm font-bold font-heading pos-title text-gray-400">PROGRAM ORTAKLARI</h2>
        <div class="flex flex-wrap -mx-4 justify-between">
          <div class="w-full mb-3 sm:w-1/2 md:w-1/3 lg:w-1/6 px-4 mb-6 lg:mb-0">
            <div class="py-12 px-2 rounded-md shadow-xl">
              <img class="mx-auto h-6" src="{{asset('assets')}}/frontEnd/img/card/advantage.png" alt="">
            </div>
          </div>
          <div class="w-full mb-3 sm:w-1/2 md:w-1/3 lg:w-1/6 px-4 mb-6 lg:mb-0">
            <div class="py-12 px-2 rounded-md shadow-xl">
              <img class="mx-auto h-6" src="{{asset('assets')}}/frontEnd/img/card/american.png" alt="">
            </div>
          </div>
          <div class="w-full mb-3 sm:w-1/2 md:w-1/3 lg:w-1/6 px-4 mb-6 lg:mb-0">
            <div class="py-12 px-2 rounded-md shadow-xl">
              <img class="mx-auto h-6" src="{{asset('assets')}}/frontEnd/img/card/axess.png" alt="">
            </div>
          </div>
          <div class="w-full mb-3 sm:w-1/2 md:w-1/3 lg:w-1/6 px-4 mb-6 md:mb-0">
            <div class="py-12 px-2 rounded-md shadow-xl">
              <img class="mx-auto h-6" src="{{asset('assets')}}/frontEnd/img/card/bonus.png" alt="">
            </div>
          </div>
          <div class="w-full mb-3 sm:w-1/2 md:w-1/3 lg:w-1/6 px-4 mb-6 md:mb-0">
            <div class="py-12 px-2 rounded-md shadow-xl">
              <img class="mx-auto h-6" src="{{asset('assets')}}/frontEnd/img/card/cardfinans.png" alt="">
            </div>
          </div>
          <div class="w-full mb-3 sm:w-1/2 md:w-1/3 lg:w-1/6 px-4">
            <div class="py-12 px-2 rounded-md shadow-xl">
              <img class="mx-auto h-6" src="{{asset('assets')}}/frontEnd/img/card/express.png" alt="">
            </div>
          </div>
          <div class="w-full mb-3 sm:w-1/2 md:w-1/3 lg:w-1/6 px-4">
            <div class="py-12 px-2 rounded-md shadow-xl">
              <img class="mx-auto h-6" src="{{asset('assets')}}/frontEnd/img/card/mastercard.png" alt="">
            </div>
          </div>
          <div class="w-full mb-3 sm:w-1/2 md:w-1/3 lg:w-1/6 px-4">
            <div class="py-12 px-2 rounded-md shadow-xl">
              <img class="mx-auto h-6" src="{{asset('assets')}}/frontEnd/img/card/masterpass.png" alt="">
            </div>
          </div>
          <div class="w-full mb-3 sm:w-1/2 md:w-1/3 lg:w-1/6 px-4">
            <div class="py-12 px-2 rounded-md shadow-xl">
              <img class="mx-auto h-6" src="{{asset('assets')}}/frontEnd/img/card/maximum.png" alt="">
            </div>
          </div>
          <div class="w-full mb-3 sm:w-1/2 md:w-1/3 lg:w-1/6 px-4">
            <div class="py-12 px-2 rounded-md shadow-xl">
              <img class="mx-auto h-6" src="{{asset('assets')}}/frontEnd/img/card/miles.png" alt="">
            </div>
          </div>
          <div class="w-full mb-3 sm:w-1/2 md:w-1/3 lg:w-1/6 px-4">
            <div class="py-12 px-2 rounded-md shadow-xl">
              <img class="mx-auto h-6" src="{{asset('assets')}}/frontEnd/img/card/paraf.png" alt="">
            </div>
          </div>
          <div class="w-full mb-3 sm:w-1/2 md:w-1/3 lg:w-1/6 px-4">
            <div class="py-12 px-2 rounded-md shadow-xl">
              <img class="mx-auto h-6" src="{{asset('assets')}}/frontEnd/img/card/saglamcard.png" alt="">
            </div>
          </div>
          <div class="w-full mb-3 sm:w-1/2 md:w-1/3 lg:w-1/6 px-4">
            <div class="py-12 px-2 rounded-md shadow-xl">
              <img class="mx-auto h-6" src="{{asset('assets')}}/frontEnd/img/card/troy.png" alt="">
            </div>
          </div>
          <div class="w-full mb-3 sm:w-1/2 md:w-1/3 lg:w-1/6 px-4">
            <div class="py-12 px-2 rounded-md shadow-xl">
              <img class="mx-auto h-6" src="{{asset('assets')}}/frontEnd/img/card/visa.png" alt="">
            </div>
          </div>
          <div class="w-full mb-3 sm:w-1/2 md:w-1/3 lg:w-1/6 px-4">
            <div class="py-12 px-2 rounded-md shadow-xl">
              <img class="mx-auto h-6" src="{{asset('assets')}}/frontEnd/img/card/wings.png" alt="">
            </div>
          </div>
          <div class="w-full mb-3 sm:w-1/2 md:w-1/3 lg:w-1/6 px-4">
            <div class="py-12 px-2 rounded-md shadow-xl">
              <img class="mx-auto h-6" src="{{asset('assets')}}/frontEnd/img/card/world.png" alt="">
            </div>
          </div>
          <div class="w-full mb-3 sm:w-1/2 md:w-1/3 lg:w-1/6 px-4">
            <div class="py-12 px-2 rounded-md shadow-xl">
              <img class="mx-auto h-6" src="{{asset('assets')}}/frontEnd/img/card/ziraat-card.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-20">
      <div class="container mx-auto px-4">
        <h2 class="mb-3 text-sm font-bold font-heading pos-title text-gray-400">İŞ ORTAKLARI</h2>
        <div class="flex flex-wrap -mx-4 justify-between">
          <div class="w-full mb-3 sm:w-1/2 md:w-1/3 lg:w-1/6 px-4 mb-6 lg:mb-0">
            <div class="py-12 px-2 rounded-md shadow-xl">
              <img class="mx-auto h-6" src="{{asset('assets')}}/frontEnd/img/companies/dokuz-yazilim.png" alt="">
            </div>
          </div>
          <div class="w-full mb-3 sm:w-1/2 md:w-1/3 lg:w-1/6 px-4 mb-6 lg:mb-0">
            <div class="py-12 px-2 rounded-md shadow-xl">
              <img class="mx-auto h-6" src="{{asset('assets')}}/frontEnd/img/companies/hipotenus.png" alt="">
            </div>
          </div>
          <div class="w-full mb-3 sm:w-1/2 md:w-1/3 lg:w-1/6 px-4 mb-6 lg:mb-0">
            <div class="py-12 px-2 rounded-md shadow-xl">
              <img class="mx-auto h-6" src="{{asset('assets')}}/frontEnd/img/companies/projesoft.png" alt="">
            </div>
          </div>
          <div class="w-full mb-3 sm:w-1/2 md:w-1/3 lg:w-1/6 px-4 mb-6 md:mb-0">
            <div class="py-12 px-2 rounded-md shadow-xl">
              <img class="mx-auto h-6" src="{{asset('assets')}}/frontEnd/img/companies/kursoft.png" alt="">
            </div>
          </div>
          <div class="w-full mb-3 sm:w-1/2 md:w-1/3 lg:w-1/6 px-4 mb-6 md:mb-0">
            <div class="py-12 px-2 rounded-md shadow-xl">
              <img class="mx-auto h-6" src="{{asset('assets')}}/frontEnd/img/companies/platinmarket.png" alt="">
            </div>
          </div>
          <div class="w-full mb-3 sm:w-1/2 md:w-1/3 lg:w-1/6 px-4">
            <div class="py-12 px-2 rounded-md shadow-xl">
              <img class="mx-auto h-6" src="{{asset('assets')}}/frontEnd/img/companies/oduyo.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

@endsection