@extends('home/layouts.home')
@section('title','Avantajlı Sanal POS ile Ödeme Al - PayBull')
@section('description', 'PayBull ile kolayca ödeme alın, 2 saatte tek entegrasyon ile satışa başlayın, linkle ve ertesi gün ödeme seçenekleriyle, hemen PayBull Sanal POS’a başvur.')
@section('canonical','https://paybull.com/') 
@section('content')
<main>
    <section id="header-slide">
        <div class="container">
            <div class="headerSlider">
                <div class="swiper sliderOne">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide swiper-slide-one">
                            <div class="row g-0 align-items-center">
                                <div class="col-xl-5 col-12">
                                    <div class="slide-span mb-4"><h1>SANAL POS İLE ÖDEME ALMANI KOLAYLAŞTIR</h1></div>
                                    <h1 class="slide-title mb-4">
                                        Online Ödeme Almanın Güvenli ve Hızlı Yolu!
                                    </h1>
                                    <p class="slide-text mb-4">
                                     En uygun komisyon oranları ile 12 aya varan taksit imkanı sunan PayBull Sanal POS ile 24 saat içinde ödeme almaya başlayabilirsin!
                                    </p>
                                     <div class="slide-bottom d-md-flex align-items-center">
                                  
                                        <div onclick="location.href='{{route('hizli-basvuru')}}'" class="d-flex flex-direction-row slide-btn mb-xl-0 mb-3 hoverclass justify-content-center" >
                                            <span>Şimdi Başvur</span>
                                            <img src="{{asset('assets')}}/frontEnd/img/top-right-arrow.svg" alt="">
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="col-xl-7 col-12">
                                    <img src="{{asset('assets')}}/frontEnd/img/famale.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-two">
                            <div class="row g-0 align-items-center">
                                <div class="col-xl-5 col-12">
                                    <div class="slide-span mb-4">SANAL POS İLE ÖDEME ALMANI KOLAYLAŞTIR</div>
                                    <h1 class="slide-title mb-4">
                                       Açık Kaynak ve Hazır Altyapılar ile Güvenli Ödeme Alın!
                                    </h1>
                                    <p class="slide-text mb-4">
                                       PayBull’un WordPress, OpenCart, Joomla, Magento ve PrestaShop eklentileri ile güvenli bir şekilde ödeme almaya başlayabilirsiniz!
                                    </p>
                                    <div class="slide-bottom d-md-flex align-items-center">
                                         <div onclick="location.href='{{route('entegrasyonlar')}}'" class="d-flex flex-direction-row slide-btn mb-xl-0 mb-3 hoverclass justify-content-center" >
                                            <span>Hızlı Entegrasyon</span>
                                            <img src="{{asset('assets')}}/frontEnd/img/top-right-arrow.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-12">
                                    <img src="{{asset('assets')}}/frontEnd/img/male.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                      <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="discover ">
        <div class="container">
            <div class="section-span text-center">PAYBULL İLE ÖDEME ALMANI KOLAYLAŞTIR</div>
            <h2 class="section-title text-center">
               PayBull’u Şimdi Keşfedin!
            </h2>
            <p class="section-text text-center">
                PayBull Sanal POS’un uygun komisyon oranları ve 12 aya varan taksit imkanıyla kârınızı artırın. Hemen başvurun, 24 saat içinde ödeme almaya başlayın!
            </p>
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="disc-box">
                  <img class="disc-b" src="{{asset('assets')}}/frontEnd/img/icons/link-ile-odeme-alma.svg" alt="" width="88" height="88">
                        <img class="disc-h" src="{{asset('assets')}}/frontEnd/img/icons/link-ile-odeme-alma.svg" alt="" width="88" height="88">
                        <h3>Link ile Ödeme Alma</h3>
                        <p>Oluşturduğunuz linki müşterilerinizle paylaşın, anında ödeme alın.
                        </p>
                        <a href="{{route('link-odeme')}}" class="disc-btn">
                            Keşfet
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="disc-box">
                        <img class="disc-b" src="{{asset('assets')}}/frontEnd/img/icons/mobil-pos.svg" alt="" width="88" height="88">
                        <img class="disc-h" src="{{asset('assets')}}/frontEnd/img/icons/mobil-pos.svg" alt="" width="88" height="88">
                        <h3>Mobil POS</h3>
                        <p>Dilediğiniz zaman, dilediğiniz yerden hızlıca ödemelerinizi alın.</p>
                        <a href="{{route('mobil-pos')}}" class="disc-btn">
                            Keşfet
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="disc-box">
                        <img class="disc-b" src="{{asset('assets')}}/frontEnd/img/icons/manuel-pos.svg" alt="" width="88" height="88">
                        <img class="disc-h" src="{{asset('assets')}}/frontEnd/img/icons/manuel-pos.svg" alt="" width="88" height="88">
                        <h3>Manuel POS</h3>
                        <p>Müşterilerinizin kart bilgilerini manuel girerek kolayca ödeme alın.</p>
                        <a href="{{route('manuel-pos')}}" class="disc-btn">
                            Keşfet
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="account lg:pt-20">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-12">
                    <div class="accountMain-img">
                        <img src="{{asset('assets')}}/frontEnd/img/general/anasayfa-link.webp" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="section-span">LİNK OLUŞTUR, GÖNDER, ÖDEME AL</div>
                    <h2 class="section-title">Link ile Ödeme Alma</h2>
                    <p class="section-text">
                       Dünyanın her yerine satış yapabilir, saniyeler içinde farklı para birimleriyle ödeme alabilirsiniz. Müşteriniz için link oluşturun, gönderin, ödemeniz anında gerçekleşsin!
                    </p>
                    <div class="d-flex justify-content-start align-items-center flex-direction-row">
                        <div onclick="location.href='{{route('hizli-basvuru')}}'" class="d-flex flex-direction-row join-btn me-3 hoverclass" >
                            <span>Aramıza Katıl!</span>
                            <img class="px-2" src="{{asset('assets')}}/frontEnd/img/join-icon.svg" alt="">
                        </div>
                        <a href="{{route('hakkimizda')}}" class="why-btn">
                            Neden PayBull?
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="link-pay lg:pt-20">
        <div class="container">
            <div class="row g-0 align-items-center">
                <div class="col-md-6 col-12 d-md-none">
                    <div class="linkPay-img">
                        <img src="{{asset('assets')}}/frontEnd/img/general/anasayfa-mobil-pos.webp" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="section-span">MOBİL POS İLE ÖDEMENİ AL</div>
                    <h2 class="section-title">Mobil POS ile Dilediğiniz Yerden Ödeme Alın!</h2>
                    <p class="section-text">
                        PayBull Mobil POS ile fiziki POS’a ihtiyaç duymadan, IOS veya Android cihazlarınızdan tüm kart programlarına ulaşabilir ve 12 aya varan taksit imkanıyla ödeme almaya başlayabilirsiniz.
                    </p>
                    <div class="d-flex justify-content-start align-items-center flex-direction-row w-100">
                        <div onclick="location.href='{{route('hizli-basvuru')}}'" class="d-flex flex-direction-row appl-btn me-3 hoverclass" >
                            <span>Hemen Başvuru Yap</span>
                            <img class="px-2" src="{{asset('assets')}}/frontEnd/img/appl-icon.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 d-none d-md-block">
                    <div class="linkPay-img">
                        <img src="{{asset('assets')}}/frontEnd/img/general/anasayfa-mobil-pos.webp" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

 
    <section class="integration lg:pt-20">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-12 pb-5">
                    <div class="integration-img max-w-screen-lg mx-auto ">
                        <img src="{{asset('assets')}}/frontEnd/img/general/anasayfa-entegrasyonlar.webp" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="section-span">PAYBULL ENTEGRASYON DÜNYASI</div>
                    <h2 class="section-title">
                        Entegrasyonları Keşfedin!
                    </h2>
                    <p class="section-text">
                        Dünyanın her yerinden kolayca ödeme alacağınız, taksitli satış yapabileceğiniz PayBull ile tanışın! Siz işlerinize odaklanırken ödemeleriniz güvenle cebinize gelsin.
                    </p>
                    <div class="d-flex justify-content-start align-items-center flex-direction-row w-100">
                        <div onclick="location.href='{{route('entegrasyonlar')}}'" class="d-flex flex-direction-row why-btn hoverclass" >
                            <span>Entegrasyonları Keşfet</span>
                            <img class="ps-2" src="{{asset('assets')}}/frontEnd/img/entegre-btn.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <section class="payment lg:pt-10 pb-10">
        <div class="container ">
            <div class="row align-items-center">
                <div class="col-md-6 col-12 d-md-none">
                    <div class="payment-img max-w-screen-lg mx-auto">
                        <img src="{{asset('assets')}}/frontEnd/img/payment-img.webp" alt="">
                    </div>
                </div>
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
                                <span><img src="{{asset('assets')}}/frontEnd/img/manuel-pos-icon.svg" alt=""/>
                                    Manuel POS
                                </span>
                                <img class="toggle__arrow" src="{{asset('assets')}}/frontEnd/img/bottom-arrow.svg" alt=""/>
                            </div>
                            <div class="payAccordion__item--text inner">
                                PayBull Manuel POS ile müşterilerinizin kart bilgisini manuel girerek kolayca ödeme alın.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 d-none d-md-block">
                    <div class="payment-img">
                        <img src="{{asset('assets')}}/frontEnd/img/payment-img.webp" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection
