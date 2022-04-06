@extends('home/layouts.home')
@section('content')
<main>
        <section class="section-contact">
            <div class="contact text-center">
                <div class="section-span text-center">E-TİCARETE HIZLI BİR GİRİŞ YAPIN!</div>
                <h2 class="section-title text-center">
                    Başvuru formu ile bize ulaşın!
                </h2>
                <p class="section-text text-center mb-0">
                    PayBull le üye işyeri paneliniz üzerinden, satacağınız ürünler için link üreterek 24 saat içinde
                    ödeme almaya başlayın!
                </p>
            </div>
        </section>
        <section class="contact-us">
            <div class="container">
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
            </div>
        </section>
        <section>
            <div class="container">
                <div class="text-center mb-5">
                    <div class="section-span text-center">7/24/365 GÜN DESTEK</div>
                    <h2 class="section-title text-center">
                        Sizlere yardımcı olmaktan mutluluk duyuyoruz.
                    </h2>
                    <p class="section-text text-center mb-0">
                        Merak ettiğiniz soruları ya da yaşadığınız problemleri yardım merkezinde arayabilir <br> ya da
                        aşağıdaki seçeneklerden bize ulaşabilirsiniz.
                    </p>
                </div>
                <div class="row align-items-center contact-bottom">
                    <div class="col-xl-4 col-md-6 col-12 mb-xl-0 mb-3">
                        <div class="contactItem d-flex align-items-center">
                            <div class="contactItem__icon me-3">
                                <img src="{{asset('assets')}}/frontEnd/img/customer-service-2-line.svg" alt="">
                            </div>
                            <div class="contactItem__text">
                                <span>Telefon ile Destek Alın</span>
                                <div>0850 2 418 418</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12 mb-xl-0 mb-3">
                        <div class="contactItem d-flex align-items-center">
                            <div class="contactItem__icon me-3">
                                <img src="{{asset('assets')}}/frontEnd/img/sms-edit.svg" alt="">
                            </div>
                            <div class="contactItem__text">
                                <span>E-Posta ile Destek Alın</span>
                                <div>info@paybull.com</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="contactItem d-flex align-items-center">
                            <div class="contactItem__icon me-3">
                                <img src="{{asset('assets')}}/frontEnd/img/map.svg" alt="">
                            </div>
                            <div class="contactItem__text">
                                <div class="contactItem__text-address">
                                    Merkez Ofis: <span>Altunizade, Kuşbakışı Cd. <br>
                                        34662 Üsküdar/İstanbul</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection