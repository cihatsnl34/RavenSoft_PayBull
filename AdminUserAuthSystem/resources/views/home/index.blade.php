@extends('home/layouts.home')
@section('content')
<main>
    <section id="header-slide">
        <div class="container">
            <div class="headerSlider">
                <div class="swiper sliderOne">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="row g-0 align-items-center">
                                <div class="col-xl-5 col-12">
                                    <div class="slide-span mb-4">SANAL POS İLE ÖDEME ALMANI KOLAYLAŞTIR</div>
                                    <h1 class="slide-title mb-4">
                                        Online ödeme almanın <br> güvenli ve hızlı yolu
                                    </h1>
                                    <p class="slide-text mb-4">
                                        PayBull Sanal POS ile bankalarla tek tek anlaşmanıza gerek kalmadan, en
                                        uygun komisyon oranlarıyla 24 saat içinde ödeme almaya başlayın.
                                    </p>
                                    <div class="slide-bottom d-md-flex align-items-center">
                                  
                                        <div onclick="location.href='{{route('hizli-basvuru')}}'" class="d-flex flex-direction-row slide-btn mb-xl-0 mb-3 hoverclass" >
                                            <span>Şimdi Başvur</span>
                                            <img src="{{asset('assets')}}/frontEnd/img/top-right-arrow.svg" alt="">
                                        </div>
                                        <div>
                                            Üstelik ‘ertesi gün ödeme alma’ avantajı <br> ve 12 aya kadar taksit
                                            imkanıyla!
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-12">
                                    <img src="{{asset('assets')}}/frontEnd/img/famale.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row g-0 align-items-center">
                                <div class="col-xl-5 col-12">
                                    <div class="slide-span mb-4">SANAL POS İLE ÖDEME ALMANI KOLAYLAŞTIR</div>
                                    <h1 class="slide-title mb-4">
                                        Açık Kaynak ve Hazır altyapılar ile güvenli ödeme alın
                                    </h1>
                                    <p class="slide-text mb-4">
                                        Paybull’un Wordpress, Opencart, Joomla, Magento ve Prestashop eklentileri
                                        ile güvenli bir şekilde ödeme almaya başlayın.
                                    </p>
                                    <div class="slide-bottom d-md-flex align-items-center">
                                       
                                        <div onclick="location.href='{{route('entegrasyonlar')}}'" class="d-flex flex-direction-row slide-btn mb-xl-0 mb-3 hoverclass" >
                                            <span>Hızlı Entegrasyon</span>
                                            <img src="{{asset('assets')}}/frontEnd/img/top-right-arrow.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-12">
                                    <img src="{{asset('assets')}}/frontEnd/img/famale.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="discover">
        <div class="container">
            <div class="section-span text-center">ANINDA HESAP AÇ, ÜCRETSİZ PARA GÖNDER</div>
            <h2 class="section-title text-center">
                Paybull ‘u şimdi keşfedin!
            </h2>
            <p class="section-text text-center">
                Anında hesap aç, ücretsiz para gönder, kartınla harcama yap ve cashback kazan! <br>
                Paybull ile oyunda, eğlencede, alışverişte, seyahatte her zaman öne geç.
            </p>
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="disc-box">
                        <img class="disc-b" src="{{asset('assets')}}/frontEnd/img/link-icon.svg" alt="">
                        <img class="disc-h" src="{{asset('assets')}}/frontEnd/img/link2-icon.svg" alt="">
                        <h3>Link ile Ödeme Alın</h3>
                        <p>Yaptığınız tüm satışları tek bir link ile paylaş, <br> paranız hesabınıza hemen geçsin
                        </p>

                        <a href="{{route('link-odeme')}}" class="disc-btn">
                            Keşfet
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="disc-box hover">
                        <img class="disc-b" src="{{asset('assets')}}/frontEnd/img/money2-icon.svg" alt="">
                        <img class="disc-h" src="{{asset('assets')}}/frontEnd/img/money-icon.svg" alt="">
                        <h3>B2B – Bayi Kanalı</h3>
                        <p>Tüm kart programlarına tek bir panelden 12 taksite kadar ödeme imkanı sağlar</p>
                        <a href="#" class="disc-btn">
                            Keşfet
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="disc-box">
                        <img class="disc-b" src="{{asset('assets')}}/frontEnd/img/pay-icon.svg" alt="">
                        <img class="disc-h" src="{{asset('assets')}}/frontEnd/img/pay2-icon.svg" alt="">
                        <h3>Mobil Pos</h3>
                        <p>Paybull mobil uygulamasını telefonunuza indirerek dilediğiniz zaman, dilediğiniz yerden
                            NFC ile hızlıca ödeme al</p>
                        <a href="{{route('mobil-pos')}}" class="disc-btn">
                            Keşfet
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="account">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-12">
                    <div class="accountMain-img">
                        <img src="{{asset('assets')}}/frontEnd/img/account-img.png" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="section-span">KOLAY BAŞLANGIÇ</div>
                    <h2 class="section-title">Link ile sitenizden ödeme alın</h2>
                    <p class="section-text">
                        Ürünlerinizi dünyanın her yerine satmak ve saniyeler içinde farklı para birimleriyle ödeme
                        almak şimdi kolay.
                    </p>
                    <div class="d-flex justify-content-start align-items-center flex-direction-row">
                        <div onclick="location.href='{{route('hizli-basvuru')}}'" class="d-flex flex-direction-row join-btn me-3 hoverclass" >
                            <span>Aramıza Katılın</span>
                            <img class="px-2" src="{{asset('assets')}}/frontEnd/img/join-icon.svg" alt="">
                        </div>
                        <a href="{{route('hakkimizda')}}" class="why-btn">
                            Neden Paybull?
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <section class="link-pay">
        <div class="container">
            <div class="row g-0 align-items-center">
                <div class="col-md-6 col-12">
                    <div class="section-span">BAĞLANTIYI KOPYALAYIN VE GÖNDERİN!</div>
                    <h2 class="section-title">Dilediğiniz yerden ödeme alın</h2>
                    <p class="section-text">
                        Paybull Mobil Pos ile fiziksel POS’a ihtiyaç duymadan, IOS ve Android cihazlarınızdan 12
                        taksit’e kadar tüm kart programlarına tek panelden ödeme imkanı sağlar.
                    </p>
                    <div class="d-flex justify-content-start align-items-center flex-direction-row w-50">
                        <div onclick="location.href='{{route('basvuru')}}'" class="d-flex flex-direction-row appl-btn me-3 hoverclass" >
                            <span>Hemen Başvuru Yap</span>
                            <img class="px-2" src="{{asset('assets')}}/frontEnd/img/appl-icon.svg" alt="">
                        </div>
                    </div>
                   
                    
                </div>
                <div class="col-md-6 col-12">
                    <div class="linkPay-img">
                        <img src="{{asset('assets')}}/frontEnd/img/linkpay-img.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="future">
        <div class="container">
            <div class="section-span text-center">KULLANICILARIMIZ NELER DİYOR?</div>
            <h2 class="section-title text-center">
                Paybull ile işinizi geleceğe taşıyın!
            </h2>
            <p class="section-text text-center">
                İnternetten alışveriş deneyimini hem alıcılar hem de satıcılar için kolaylaştıran bir finansal teknolojiler şirketiyiz.
            </p>
            <div class="swiper sliderTwo">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="commentBox">
                            <div class="commentBox__header row g-0 align-items-center">
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <img src="{{asset('assets')}}/frontEnd/img/comment-img.svg" alt="">
                                        <div class="commentBox__header--name ps-3">
                                            <span>Berkay Erdinç</span>
                                            <div>UI UX Specialist</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <img src="{{asset('assets')}}/frontEnd/img/stars.svg" alt="">
                                </div>
                            </div>
                            <p class="commentBox__text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempus metus massa, ut luctus metus pretium at. Aliquam elementum finibus augue, sit amet maximus tortor viverra in. Pellentesque eu ultricies felis,
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="commentBox">
                            <div class="commentBox__header row g-0 align-items-center">
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <img src="{{asset('assets')}}/frontEnd/img/comment-img.svg" alt="">
                                        <div class="commentBox__header--name ps-3">
                                            <span>Berkay Erdinç</span>
                                            <div>UI UX Specialist</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <img src="{{asset('assets')}}/frontEnd/img/stars.svg" alt="">
                                </div>
                            </div>
                            <p class="commentBox__text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempus metus massa, ut luctus metus pretium at. Aliquam elementum finibus augue, sit amet maximus tortor viverra in. Pellentesque eu ultricies felis,
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="commentBox">
                            <div class="commentBox__header row g-0 align-items-center">
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <img src="{{asset('assets')}}/frontEnd/img/comment-img.svg" alt="">
                                        <div class="commentBox__header--name ps-3">
                                            <span>Berkay Erdinç</span>
                                            <div>UI UX Specialist</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <img src="{{asset('assets')}}/frontEnd/img/stars.svg" alt="">
                                </div>
                            </div>
                            <p class="commentBox__text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempus metus massa, ut luctus metus pretium at. Aliquam elementum finibus augue, sit amet maximus tortor viverra in. Pellentesque eu ultricies felis,
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="commentBox">
                            <div class="commentBox__header row g-0 align-items-center">
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <img src="{{asset('assets')}}/frontEnd/img/comment-img.svg" alt="">
                                        <div class="commentBox__header--name ps-3">
                                            <span>Berkay Erdinç</span>
                                            <div>UI UX Specialist</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <img src="{{asset('assets')}}/frontEnd/img/stars.svg" alt="">
                                </div>
                            </div>
                            <p class="commentBox__text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempus metus massa, ut luctus metus pretium at. Aliquam elementum finibus augue, sit amet maximus tortor viverra in. Pellentesque eu ultricies felis,
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="commentBox">
                            <div class="commentBox__header row g-0 align-items-center">
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <img src="{{asset('assets')}}/frontEnd/img/comment-img.svg" alt="">
                                        <div class="commentBox__header--name ps-3">
                                            <span>Berkay Erdinç</span>
                                            <div>UI UX Specialist</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <img src="{{asset('assets')}}/frontEnd/img/stars.svg" alt="">
                                </div>
                            </div>
                            <p class="commentBox__text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempus metus massa, ut luctus metus pretium at. Aliquam elementum finibus augue, sit amet maximus tortor viverra in. Pellentesque eu ultricies felis,
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section> -->

    <section class="integration pt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-12">
                    <div class="integration-img text-center">
                        <img src="{{asset('assets')}}/frontEnd/img/entegre-img2.png" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="section-span">PAYBULL UYGULAMALAR DÜNYASI</div>
                    <h2 class="section-title">
                        Entegrasyonlara göz atın!
                    </h2>
                    <p class="section-text">
                        Paybull ile dünyanın her yerinden kolayca ödeme alın; taksitli satışlar yapın. Siz
                        işlerinize odaklanırken ödemelerinizi bize bırakın.
                    </p>
                    <div class="d-flex justify-content-start align-items-center flex-direction-row w-50">
                        <div onclick="location.href='{{route('basvuru')}}'" class="d-flex flex-direction-row why-btn hoverclass" >
                            <span>Uygulama Dünyasını Keşfet</span>
                            <img class="ps-2 px-2" src="{{asset('assets')}}/frontEnd/img/entegre-btn.svg" alt="">
                        </div>
                    </div>
                    
                    <a href="entegrasyonlar.html" class="why-btn">
                        Uygulama Dünyasını Keşfet
                        <img class="ps-2" src="{{asset('assets')}}/frontEnd/img/entegre-btn.svg" alt="">
                    </a>
                </div>
            </div>
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
                                    B2B – Bayi Kanalı
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
                        <img src="{{asset('assets')}}/frontEnd/img/payment-img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection
