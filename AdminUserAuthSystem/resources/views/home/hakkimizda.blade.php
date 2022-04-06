@extends('home/layouts.home')
@section('content')
<main>
    <section class="why">
        <div class="about-us text-center">
        <div class="section-span text-center">ANINDA HESAP AÇ, ÜCRETSİZ PARA GÖNDER</div>
        <h2 class="section-title text-center">
            Neden Paybull üyesi olmalıyım?
        </h2>
        <p class="section-text text-center">
            Anında hesap aç, ücretsiz para gönder, kartınla harcama yap ve cashback kazan! <br> Paybull ile oyunda,
            eğlencede, alışverişte, seyahatte her zaman öne geç.
        </p>
        <div  class="w-full flex justify-center items-center">
            <div onclick="location.href='hakkimizda.html';" class="hakkimizda-btn about-btn flex flex-row">
                <span>Hemen Başvuru Yap</span>
                <img class="px-2" src="{{asset('assets')}}/frontEnd/img/document-text2.svg" alt="">
            </div>
        </div>
        <div class="abouts-img flex justify-center items-center">

            <img src="{{asset('assets')}}/frontEnd/img/contact-img.png" alt="" />
        </div>
        </div>
    </section>
    <section class="about">
        <div class="container">
            <h2 class="section-title">
                Hakkımızda
            </h2>
            <p class="abouts-text">
                2018 yılı sonunda kurulan PayBull; başta sanal POS ve dijital cüzdan olmak üzere müşterilerinin
                ödeme sistemleri alanındaki tüm ihtiyaçlarını karşılamaya yönelik hizmet sunan bir finansal
                teknolojiler şirketidir.
            </p>
            <p class="abouts-text">
                19.12.2020 tarihinde 6493 sayılı kanun kapsamında ödeme hizmetleri lisansını alan PayBull Ödeme
                Hizmetleri A.Ş.’ye 6493 sayılı Ödeme ve Menkul Mutabakat Sistemleri, Ödeme Hizmetleri ve Elektronik
                Para Kuruluşları Hakkında Kanunun 12’nci maddesinin (1) numaralı fıkrasının (a) ve (b) bentlerinde
                belirtilen ödeme hizmetlerini sunma ve ödeme hizmetleri kuruluşu olarak faaliyette bulunma izni
                verildi. PayBull, Türkiye Cumhuriyet Merkez Bankası (“TCMB”) lisansımız ile 6493 sayılı kanun
                çerçevesinde lisanslı ödeme kuruluşu olarak hizmet vermektedir.
            </p>
            <p class="abouts-text ab-txt">
                Yüksek güvenlikli, hızlı, erişilebilir ve kullanımı kolay arayüzlere sahip ürünleri ile internetten
                alışverişi kolaylaştırmanın ötesinde, hem son kullanıcılar hem üye iş yerlerini dijitalleşen
                ekonomiye en doğru ve rekabetçi şekilde adapte etmeyi öncelikli hedefi olarak belirleyen PayBull,
                e-ticaretin tüm aşamalarında müşterilerini desteklemeye devam ediyor.
            </p>
        </div>
    </section>

    <section class="payment">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-12">
                    <div class="section-span">PAYBULL İLE HERKES SATIŞ YAPABİLİR!</div>
                    <h2 class="section-title">
                        Ödeme almada alternatifler çok!
                    </h2>
                    <p class="section-text">
                        Sen de binlerce kişi gibi paybull hesabı aç; <br> internetten satış yapmaya hemen başla.
                    </p>
                    <div class="payAccordion">
                        <div class="payAccordion__item">
                            <div class="toggle">
                                <span><img src="{{asset('assets')}}/frontEnd/img/vector1.svg" alt="">
                                    B2B-Bayi Kanalı
                                </span>
                                <img class="toggle__arrow" src="{{asset('assets')}}/frontEnd/img/bottom-arrow.svg" alt="">
                            </div>
                            <div class="payAccordion__item--text inner">
                                Mobil POS ile ödeme almak için yapmanız gereken tek şey Paybull mobil uygulamasını
                                telefonunuza indirmek. Uygulama ile dilediğiniz zaman, dilediğiniz yerden hızlıca
                                ödeme alabilirsiniz.
                            </div>
                        </div>
                        <div class="payAccordion__item">
                            <div class="toggle">
                                <span><img src="{{asset('assets')}}/frontEnd/img/vektor2.svg" alt="">
                                    Mobil Pos ile Ödeme Alın
                                </span>
                                <img class="toggle__arrow" src="{{asset('assets')}}/frontEnd/img/bottom-arrow.svg" alt="">
                            </div>
                            <div class="payAccordion__item--text inner">
                                Mobil POS ile ödeme almak için yapmanız gereken tek şey Paybull mobil uygulamasını
                                telefonunuza indirmek. Uygulama ile dilediğiniz zaman, dilediğiniz yerden hızlıca
                                ödeme alabilirsiniz.
                            </div>
                        </div>
                        <div class="payAccordion__item">
                            <div class="toggle">
                                <span><img src="{{asset('assets')}}/frontEnd/img/vektor3.svg" alt="">
                                    Manuel Pos ile Ödeme Alın
                                </span>
                                <img class="toggle__arrow" src="{{asset('assets')}}/frontEnd/img/bottom-arrow.svg" alt="">
                            </div>
                            <div class="payAccordion__item--text inner">
                                Mobil POS ile ödeme almak için yapmanız gereken tek şey Paybull mobil uygulamasını
                                telefonunuza indirmek. Uygulama ile dilediğiniz zaman, dilediğiniz yerden hızlıca
                                ödeme alabilirsiniz.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="payment-img">
                        <img src="{{asset('assets')}}/frontEnd/img/payment-img.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection