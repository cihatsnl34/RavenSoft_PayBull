@extends('home/layouts.home')
@section('title','E-Ticaret\'e Hızlı Bir Giriş Yapın – PayBull')
@section('description','PayBull Sanal POS’un uygun komisyon oranları ve 12 aya varan taksit imkanıyla kârınızı artırın. Hemen başvurun, 24 saat içinde ödeme almaya başlayın!')
@section('canonical','https://paybull.com/hizli-basvuru') 
@section('content')
<main>
        <section class="section-contact">
            <div class="contact text-center">
                <div class="section-span text-center">E-TİCARETE HIZLI BİR GİRİŞ YAPIN!</div>
                <h2 class="section-title text-center mx-4 md:mx-8">
                    Başvuru formu ile bize ulaşın!
                </h2>
                <p class="section-text text-center mb-0 mx-4 md:mx-8">
                    PayBull hızlı başvuru formunu doldurun, 24 saat içinde ödeme almaya başlayın!
                </p>
            </div>
        </section>
        <section class="contact-us">
            <div class="container">
                <div class="contactBox">
                    <div class="contactBox__title">
                        Hızlı başvuru formu
                    </div>
                 
                    <div class="row pt-5">
                        <div class="col-12">
                            <form class="contactBox__form" action="{{route('hizli_basvuru_add')}}" method="POST">
                                @csrf
                                <div class="contactBox__form-item row mb-xl-0 mb-4">
                                    <div class="col-xl-4 col-md-6 col-12">
                                        <input type="text" name="companyName" placeholder="İşletme/Marka adınız" required />
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-12">
                                        <input type="text" name="fullname" placeholder="Adınız Soyadınız" required />
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-12">
                                        <input type="tel" name="phone" id="gsm" placeholder="Cep Telefonunuz" required />
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-12">
                                        <input type="email" name="email" placeholder="E-Posta Adresiniz" required />
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-12">
                                        <input type="text" name="webSite" id="gsm" placeholder="Websiteniz" />
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-12">
                                        <div class="integrations_item-select">
                                            <select class="selectric-select selectsec" name="ciro" id="nicer-select-id" required>
                                                <option selected value="" disabled>Aylık Beklenen Ciro</option>
                                                <option value="0 - 100.000 TL">0 - 100.000 TL</option>
                                                <option value="100.000 TL - 250.000 TL">100.000 TL - 250.000 TL</option>
                                                <option value="250.000 TL - 500.000 TL">250.000 TL - 500.000 TL</option>
                                                <option value="500.000 TL +">500.000 TL +
                                                        </option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-12  mt-xl-0 mt-3">
                                        <div class="integrations_item-select">
                                            <select class="selectric-select selectsec" name="platform" id="nicer-select-id" required>
                                                <option value="Platform" disabled selected>Platform</option>
                                                <option value="Website">Website</option>
                                                <option value="Instagram Satışı">Instagram Satışı</option>
                                                <option value="Link ile Ödeme Alma">Link ile Ödeme Alma</option>
                                                <option value="Diğer">Diğer</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="fm-checkx mb-3 mt-3">
                                    <input type="checkbox" name="checkbox3" id="checkbox3" required/>
                                    <label for="checkbox3"><a href="{{route('kvkk')}}" target="_blank">KVKK Açık Rıza Metni</a>'ni okudum,
                                        onaylıyorum.</label>
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
                    <div class="section-span text-center">7/24 DESTEK</div>
                    <h2 class="section-title text-center">
                       Size yardımcı olmaktan mutluluk duyuyoruz!
                    </h2>
                    <p class="section-text text-center mb-0">
                        Merak ettiğiniz sorular ve yaşadığınız problemler için aşağıdaki iletişim bilgilerinden bize ulaşabilirsiniz.
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
                                    Merkez Ofis: <span> Altunizade Mah. <br> Kuşbakışı Cad.  No:  7A  Kat: -1 <br> 34662  Üsküdar/İstanbul</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection