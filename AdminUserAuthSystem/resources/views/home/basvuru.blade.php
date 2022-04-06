@extends('home/layouts.home')
@section('content')
<main class="app-section">
    <section class="py-20 2xl:py-40 overflow-hidden">
        <div class="container px-4 mx-auto">
            <div class="max-w-5xl mx-auto">
                <div class="flex flex-wrap items-center -mx-10">
                    <div class="w-full lg:w-1/2 px-10">
                        <div class="px-6 lg:px-16 py-12 lg:py-20 bg-white shadow-2xl rounded-lg">
                            <form action="{{route("basvuru_add")}}" method="POST" class="applicate">
                                @csrf
                                <h3 class="mb-10 text-2xl font-bold font-heading">Sanal Pos Ön Başvuru Formu</h3>
                                <div
                                    class="flex items-center pl-4 mb-3 border border-gray-50 bg-white rounded-full">
                                    <input
                                        class="w-full pr-6 pl-4 py-3 font-bold placeholder-gray-900 rounded-full focus:outline-none"
                                        type="name" required name="fullname" placeholder="Adınız Soyadınız">
                                </div>
                                <div
                                    class="flex items-center pl-4 mb-3 border border-gray-50 bg-white rounded-full">
                                    <input
                                        class="w-full pr-6 pl-4 py-3 font-bold placeholder-gray-900 rounded-full focus:outline-none"
                                        type="email" required name="email" placeholder="E-posta Adresiniz">
                                </div>
                                <div
                                    class="flex items-center pl-4 mb-3 border border-gray-50 bg-white rounded-full">
                                    <input
                                        class="w-full pr-6 pl-4 py-3 font-bold placeholder-gray-900 rounded-full focus:outline-none"
                                        type="text" required name="companyName" placeholder="Firma Adınız">
                                </div>
                                <div
                                    class="flex items-center pl-4 mb-3 border border-gray-50 bg-white rounded-full">
                                    <input
                                        class="w-full pr-6 pl-4 py-3 font-bold placeholder-gray-900 rounded-full focus:outline-none"
                                        type="number" required name="ciro" placeholder="Aylık Sanal Pos Ciro Beklentiniz">
                                </div>
                               
                                
                               
                                
                                <div
                                    class="flex items-center pl-4 mb-3 border border-gray-50 bg-white rounded-full">
                                    <input
                                        class="w-full pr-6 pl-4 py-3 font-bold placeholder-gray-900 rounded-full focus:outline-none"
                                        type="text" required name="webSite" placeholder="Web Site Link">
                                </div>
                                <div class="app-border items-center  mb-3 bg-white rounded-full">
                                    <div class="integrations_item-select">
                                        <select name="platform" class="selectric-select selectsec " id="nicer-select-id" required>
                                            <option value="" disabled selected>Platform</option>
                                            <option value="website">Website</option>
                                            <option value="instagramSatis">İnstagram Satışı</option>
                                            <option value="linkOdeme">Linkle Ödeme</option>
                                            <option value="diger">Diğer</option>
                                        </select>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center pl-4 mb-6 border border-gray-50 bg-white rounded-full">
                                    <input id="phone"
                                        class="w-full pr-6 pl-4 py-3 font-bold placeholder-gray-900 rounded-full focus:outline-none"
                                        type="tel" name="phone" placeholder="Telefon Numarası" required />
                                </div>
                                <div class="inline-flex mb-10">
                                    <input class="mr-4" type="checkbox">
                                    <p class="-mt-2 text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. <a href="#">Veritatis, accusamus!</a></p>
                                </div>
                                <button
                                    class="py-3 w-full bg-blue-500 hover:bg-blue-600 text-white font-bold rounded-full transition duration-200">Gönder</button>
                            </form>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 px-10 mb-16 lg:mb-0  lg:order-last">
                        <div class="max-w-md">

                            <h2 class="mt-8 mb-12 text-5xl font-bold font-heading">Ödeme Almanı Kolaylaştır!</h2>
                            <p class="text-lg text-gray-500">
                                <span>Tüm kartlara taksit yapmak için tek entegrasyon yeterli! Şimdi Paybull Sanal
                                    Pos’a başvurun,
                                    uygun komisyon oranlarıyla ertesi gün ödemelerinizi almaya başlayın</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="container px-4 mx-auto">
            <h2 class="mb-12 text-center text-xl font-bold font-heading">Onlar bize güvendi</h2>
            <div class="flex flex-wrap -m-4">
                <div class="w-full md:w-1/2 lg:w-1/5 p-4">
                    <div class="flex w-full h-32 items-center justify-center shadow-2xl rounded-lg">
                        <img class="h-16" src="{{asset('assets')}}/frontEnd/img/banks/kuveytturk.png" alt="">
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/5 p-4">
                    <div class="flex w-full h-32 items-center justify-center shadow-2xl rounded-lg">
                        <img class="h-6" src="{{asset('assets')}}/frontEnd/img/banks/akbank.png" alt="">
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/5 p-4">
                    <div class="flex w-full h-32 items-center justify-center shadow-2xl rounded-lg">
                        <img class="h-6" src="{{asset('assets')}}/frontEnd/img/banks/anadolubank.jpeg" alt="">
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/5 p-4">
                    <div class="flex w-full h-32 items-center justify-center shadow-2xl rounded-lg">
                        <img class="h-12" src="{{asset('assets')}}/frontEnd/img/banks/halkbank.png" alt="">
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/5 p-4">
                    <div class="flex w-full h-32 items-center justify-center shadow-2xl rounded-lg">
                        <img class="h-6" src="{{asset('assets')}}/frontEnd/img/banks/denizbank.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection