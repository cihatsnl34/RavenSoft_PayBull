@extends('home/layouts.home')
@section('title','Online Ödeme Almanının Hızlı ve Güvenli Yolu – PayBull')
@section('description',' 2018 yılı sonunda kurulan PayBull; başta sanal POS olmak üzere müşterilerinin ödeme sistemleri alanındaki tüm ihtiyaçlarını karşılamaya yönelik hizmet sunmaktadır.')
@section('canonical','https://paybull.com/hakkimizda') 
@section('content')
<main>

    <section class="about pt-40">
        <div class="container">
            <h2 class="text-lg text-center font-bold section-semi-title">
                HAKKIMIZDA
            </h2>
            <p class="abouts-text">
                2018 yılı sonunda kurulan PayBull; başta sanal POS olmak üzere müşterilerinin ödeme sistemleri alanındaki tüm ihtiyaçlarını karşılamaya yönelik hizmet sunan ve global yüksek güvenlik standardı olan PCI-DSS sertifikasına sahip bir finansal teknolojiler şirketidir.
            </p>
            <p class="abouts-text">
                19.12.2020 tarihinde 6493 sayılı kanun kapsamında ödeme hizmetleri lisansını alan PayBull Ödeme Hizmetleri A.Ş.’ye 6493 sayılı Ödeme ve Menkul Mutabakat Sistemleri, Ödeme Hizmetleri ve Elektronik Para Kuruluşları Hakkında Kanunun 12’nci maddesinin (1) numaralı fıkrasının (a) ve (b) bentlerinde belirtilen ödeme hizmetlerini sunma ve ödeme hizmetleri kuruluşu olarak faaliyette bulunma izni verildi. PayBull, Türkiye Cumhuriyet Merkez Bankası (“TCMB”) lisansı ile 6493 sayılı kanun çerçevesinde lisanslı ödeme kuruluşu olarak hizmet vermektedir.
            </p>
            <p class="abouts-text">
               Yüksek güvenlikli, hızlı, erişilebilir ve kullanımı kolay arayüzlere sahip ürünleri ile internetten alışverişi kolaylaştırmanın ötesinde, hem son kullanıcılar hem üye iş yerlerini dijitalleşen ekonomiye en doğru ve rekabetçi şekilde adapte etmeyi öncelikli hedefi olarak belirleyen PayBull, e-ticaretin tüm aşamalarında müşterilerini desteklemeye devam ediyor.
            </p>
            <p class="abouts-text">
                <b>TCMB LİSANS</b> - Türkiye Cumhuriyet Merkez Bankası ("TCMB") lisansımız ile 6493 sayılı kanun çerçevesinde lisanslı ödeme kuruluşu olarak hizmet veriyoruz. 
            </p>
             <p class="abouts-text">
              <b>PCI DSS SERTİFİKA</b> - PayBull olarak, PCI Veri Güvenliği Standardı sertifikasyonuna sahibiz.
            </p>
            


        </div>
    </section>

    <section class="payment">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-12">
                    <div class="section-span">PAYBULL İLE HERKES SATIŞ YAPABİLİR!</div>
                    <h2 class="section-title">
                       PayBull’da Alternatif Çok!
                    </h2>
                    <p class="section-text">
                        Sen de binlerce kişi gibi PayBull hesabı açın, <br> internetten satış yapmaya hemen başlayın!
                    </p>
                    <div class="payAccordion">
                        <div class="payAccordion__item">
                            <div class="toggle">
                                <span><img src="{{asset('assets')}}/frontEnd/img/link-ile-odeme-icon.svg" alt="">
                                    Link ile Ödeme Alma
                                </span>
                                <img class="toggle__arrow" src="{{asset('assets')}}/frontEnd/img/bottom-arrow.svg" alt="">
                            </div>
                            <div class="payAccordion__item--text inner">
                                PayBull ile oluşturduğunuz linki müşterilerinizle paylaşın, anında ödeme alın.
                            </div>
                        </div>
                        <div class="payAccordion__item">
                            <div class="toggle">
                                <span><img src="{{asset('assets')}}/frontEnd/img/mobil-pos-icon.svg" alt="">
                                    Mobil POS
                                </span>
                                <img class="toggle__arrow" src="{{asset('assets')}}/frontEnd/img/bottom-arrow.svg" alt="">
                            </div>
                            <div class="payAccordion__item--text inner">
                               PayBull mobil uygulaması ile dilediğiniz zaman, dilediğiniz yerden hızlıca ödemelerinizi alın.
                            </div>
                        </div>
                        <div class="payAccordion__item">
                            <div class="toggle">
                                <span><img src="{{asset('assets')}}/frontEnd/img/manuel-pos-icon.svg" alt="">
                                    Manuel POS
                                </span>
                                <img class="toggle__arrow" src="{{asset('assets')}}/frontEnd/img/bottom-arrow.svg" alt="">
                            </div>
                            <div class="payAccordion__item--text inner">
                                PayBull Manuel POS ile müşterilerinizin kart bilgisini manuel girerek kolayca ödeme alın.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="payment-img">
                        <img src="{{asset('assets')}}/frontEnd/img/payment-img.webp" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection