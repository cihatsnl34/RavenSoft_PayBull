@extends('home/layouts.home')
@section('content')
<main>
    <section class="py-5 md:py-32 overflow-x-hidden container">
        <div class="text-left pt-20 w-full flex flex-col justify-center px-4">
            <div class="flex justify-center flex-col items-center  w-full md:px-64 ">
                <h5 class="section-span text-center sm:text-left">PAYBULL ALTERNATİF ÖDEME YÖNTEMLERİ</h5>
                <h2 class="section-title text-center  ">
                    Ödeme almak hiç bu kadar çeşitli<br>
                    ve kolay olmamıştı.
                </h2>
                <p class="text-sm font-thin leading-10 text-center  ">
                    Paybull Sanal POS ile bankalarla tek tek anlaşma yapmanıza gerek kalmadan, en uygun komisyon
                    oranlarıyla ertesi gün ödeme alabilirsiniz. 24 saat içinde uygun komisyon oranları ile online
                    satış yapmaya başlayın!
                </p>
                <a href="{{route('basvuru')}}" class="why-btn about-btn mb-xl-4 mb-0 mt-8">
                    <div class="flex flex-row">
                        <span>Hemen Başvuru Yap</span>
                        <img class="ps-2" src="{{asset('assets')}}/frontEnd/img/document-text2.svg" alt="">
                    </div>
                </a>
            </div>
            <div class="abouts-img hidden lg:flex w-full  justify-center items-center">
                <img src="{{asset('assets')}}/frontEnd/img/paybull-mobil-pos.png" alt="" />
            </div>
        </div>
    </section>
    <section class="py-5 md:py-32 overflow-x-hidden container">
        <div class="text-left pt-20 w-full flex flex-row px-4">

            <div class="flex justify-center flex-col items-center md:items-start  w-full ">
                <h5 class="section-span text-center sm:text-left">MOBİL POS İLE ÖDEMENİ AL</h5>
                <h2 class="section-title text-left  ">
                    Akıllı telefonlarınız artık<br>
                    POS cihazı
                </h2>
                <p class="text-sm font-thin leading-10 text-left  ">
                    Saha satışlarında ödeme almanın en kolay yolu Paybull Mobil POS’u kullanmak için yapmanız
                    gereken tek şey; Paybull mobil uygulamasını telefonunuza indirmek. POS cihazı ve POS maliyeti
                    olmadan, akıllı telefonunuzu veya tabletinizi POS cihazına çevirebilir, tahsilatlarınızda
                    güvenle kullanabilirsiniz.

                </p>
                <a href="{{route('basvuru')}}" class="why-btn about-btn mb-xl-4 mb-0 mt-8">
                    <div class="flex flex-row">
                        <span>Hemen Başvuru Yap</span>
                        <img class="ps-2" src="{{asset('assets')}}/frontEnd/img/document-text2.svg" alt="">
                    </div>
                </a>
            </div>

            <div class="abouts-img hidden lg:block w-full">
                <img src="{{asset('assets')}}/frontEnd/img/paybull-pos.png" alt="" />
            </div>

        </div>
    </section>
    <section class="py-5 md:py-32 overflow-x-hidden container">
        <div class="text-left pt-20 w-full flex flex-row px-4">
            <div class="abouts-img hidden lg:block w-full">
                <img src="{{asset('assets')}}/frontEnd/img/paybull-satis.png" alt="" />
            </div>
            <div class="flex justify-center flex-col items-center md:items-start  w-full ">
                <h5 class="section-span text-center sm:text-left">EN AVANTAJLI SANAL POS</h5>
                <h2 class="section-title text-left  ">
                    Paybull ile satış yapmaya başlamak için birçok neden var.
                </h2>
                <div class="row py-10">
                    <div class="col-md-6 col-12">
                        <div class="linkBox flex justify-center items-center flex-col sm:items-start px-2">
                            <div class="linkBox__icon">
                                <img src="{{asset('assets')}}/frontEnd/img/future1.png" alt="" />
                            </div>
                            <div class="linkBox__title">Her zaman, her yerden ödeme alma</div>
                            <div class="linkBox__text">
                                <p>
                                    Yılın her günü 24 saat boyunca tahsilat yapabilirsiniz. Konum fark etmeksizin
                                    müşterilerinize link gönderirerek, uzaktan ödeme alabilirsiniz.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="linkBox flex justify-center items-center flex-col sm:items-start px-2">
                            <div class="linkBox__icon">
                                <img src="{{asset('assets')}}/frontEnd/img/future2.png" alt="" />
                            </div>
                            <div class="linkBox__title">Aksiyona geç ve hızlı koş</div>
                            <div class="linkBox__text">
                                <p>
                                    Ödemeleri hemen almaya başlayın - banka ziyaretleri, arka plan kontrolleri
                                    gerekmez. Hesap oluşturma
                                    ve doğrulama birkaç dakika sürer.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="linkBox flex justify-center items-center flex-col sm:items-start px-2">
                            <div class="linkBox__icon">
                                <img src="{{asset('assets')}}/frontEnd/img/future3.png" alt="" />
                            </div>
                            <div class="linkBox__title">Her seferinde hızlı ödeme alın</div>
                            <div class="linkBox__text">
                                <p>

                                    Paybull’un kullanıcı dostu panele anında erişin. Bir sonraki iş günü içinde
                                    harici bir banka
                                    hesabına kazandığınız parayı aktarın.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="linkBox flex justify-center items-center flex-col sm:items-start px-2">
                            <div class="linkBox__icon">
                                <img src="{{asset('assets')}}/frontEnd/img/future3.png" alt="" />
                            </div>
                            <div class="linkBox__title">Markanıza özel arayüz</div>
                            <div class="linkBox__text">
                                <p>
                                    Paybull üye iş yerleri, kendi kurumsal kimliklerine uygun şekilde Mobil POS
                                    uygulamasını düzenleyebilir. Böylece iş yerleri, kendi amblem ve isimleriyle
                                    Paybull POS’u kullanıp tahsilat yapabilir.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <div class="contactBox">
        <div class="contactBox__title">
            Hızlı başvuru formu
        </div>
        <p class="contactBox__text mb-4">
            Yaptığınız tüm satışları tek bir link ile paylaş, paranız hesabınıza hemen geçsin!
        </p>
        <div class="row">
            <div class="col-12">
                <form class="contactBox__form" action="{{route('hizli_basvuru_add')}}" method="POST">
                    @csrf
                    <div class="contactBox__form-item row mb-xl-0 mb-4">
                        <div class="col-xl-4 col-md-6 col-12">
                            <input type="text" name="companyName" placeholder="İşletme/Marka adı" required />
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <input type="text" name="fullname" placeholder="ADINIZ SOYADINIZ" required />
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <input type="tel" name="phone" id="gsm" placeholder="Cep Telefonu" required />
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <input type="email" name="email" placeholder="E-Posta Adresi" required />
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <input type="text" name="webSite" id="gsm" placeholder="Websiteniz" required />
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="integrations_item-select">
                                <select class="selectric-select selectsec" name="ciro" id="nicer-select-id" required>
                                    <option selected value="" disabled>AYLIK BEKLENEN CİRO</option>
                                    <option value="0 - 100.000 TL">0 - 100.000 TL</option>
                                    <option value="100.000 TL - 250.000 TL">100.000 TL - 250.000 TL</option>
                                    <option value="250.000 TL - 500.000 TL">250.000 TL - 500.000 TL</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="integrations_item-select">
                                <select class="selectric-select selectsec" name="platform" id="nicer-select-id" required>
                                    <option value="Platform" disabled selected>Platform</option>
                                    <option value="Website">Website</option>
                                    <option value="İnstagram Satışı">İnstagram Satışı</option>
                                    <option value="Linkle Ödeme">Linkle Ödeme</option>
                                    <option value="Diğer">Diğer</option>
                                </select>
                            </div>
                        </div>
                        
                    </div>
                    <div class="fm-checkx mb-3">
                        <input type="checkbox" name="checkbox3" id="checkbox3" />
                        <label for="checkbox3"><a href="#">KVKK Açık Rıza Metni</a>'ni okudum,
                            onaylıyorum</label>
                    </div>
                    <div class="fm-checkx mb-4">
                        <input type="checkbox" name="checkbox2" id="checkbox2" />
                        <label for="checkbox2"><span>
                                PayBull tarafından; yukarıda yer alan iletişim bilgilerime bilgilendirme,
                                mal ve hizmet tanıtımı, reklam ve promosyon gibi amaçlarla yararlı
                                olabilecek içeriklere ulaşabilmem için ticari elektronik ileti
                                gönderilmesini her zaman reddetme hakkımın saklı olduğunu bilerek onay
                                veriyorum.
                            </span></label>
                    </div>
                    <button class="contactBox__form-btn login-btn">
                        Başvuru Yap
                    </button>
                </form>
            </div>
        </div>
    </div>
    <section class="py-5 md:py-32 overflow-x-hidden container">
        <div class="text-left pt-20 w-full flex flex-row px-4">

            <div class="flex justify-center flex-col items-center md:items-start  w-full">
                <h5 class="section-span text-center sm:text-left">MANUEL POS İLE</h5>
                <h4 class="section-title text-left">
                    Müşterilerinizden Anında<br>
                    Ödeme Alın
                </h4>
                <p class="text-sm font-thin leading-10 text-left  ">
                    PayBull Manuel POS ile hiçbir entegrasyona ihtiyaç duymadan direkt olarak üye iş yeri
                    panelinizden ödemenizi yönetebilirsiniz. 3D güvenliğin şart olduğu bu ödeme yönteminde fiziksel
                    pos masrafından kurtularak işinizi büyütün.

                </p>
                <a href="{{route('basvuru')}}" class="why-btn about-btn mb-xl-4 mb-0 mt-8">
                    <div class="flex flex-row">
                        <span>Hemen Başvuru Yap</span>
                        <img class="ps-2" src="{{asset('assets')}}/frontEnd/img/document-text2.svg" alt="">
                    </div>
                </a>
            </div>

            <div class="abouts-img hidden lg:block w-full">
                <img src="{{asset('assets')}}/frontEnd/img/paybull-taksit.png" alt="" />
            </div>

        </div>
    </section>
    <section class="py-5 md:py-32 overflow-x-hidden container">
        <div class="text-left pt-20 w-full flex flex-row px-4">

            <div class="abouts-img hidden lg:block w-full">
                <img src="{{asset('assets')}}/frontEnd/img/paybull-odeme.png" alt="" />
            </div>
            <div class="flex justify-center flex-col items-center md:items-start  w-full ">
                <h5 class="section-span text-center sm:text-left">ABONELİK YÖNTEMİ İLE</h5>
                <h2 class="section-title text-left  ">
                    Periyodik Ödeme Alan<br>
                    Müşterilerinize Çözümler
                </h2>
                <p class="text-sm font-thin leading-10 text-left  ">

                    Paybull’un güvenli kart saklama özelliği sayesinde, müşterileriniz her alışverişinde kart
                    bilgisini yeniden girmek zorunda kalmaz, siz de ödemelerinizi hızlı ve basit bir şekilde düzenli
                    periyotlarla alabilirsiniz.


                </p>
                <a href="{{route('hizli-basvuru')}}" class="why-btn about-btn mb-xl-4 mb-0 mt-8">
                    <div class="flex flex-row">
                        <span>Hemen Başvuru Yap</span>
                        <img class="ps-2" src="{{asset('assets')}}/frontEnd/img/document-text2.svg" alt="">
                    </div>
                </a>
            </div>


        </div>
    </section>
</main>

@endsection
