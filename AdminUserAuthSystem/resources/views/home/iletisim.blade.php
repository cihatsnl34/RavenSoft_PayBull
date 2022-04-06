@extends('home/layouts.home')
@section('content')
<main>
    <section class="section-contact">
        <div class="contact text-center">
            <div class="section-span text-center">ANINDA HESAP AÇ, ÜCRETSİZ PARA GÖNDER</div>
            <h2 class="section-title text-center">
                Yardıma mı ihtiyacınız var?
            </h2>
            <p class="section-text text-center mb-0">
                Desteğe ihtiyacınız olduğu her anda bize ulaşın, sizler için buradayız!
            </p>
        </div>
    </section>
    <section class="contact-us">
        <div class="container">
            <div class="contactBox">
                <div class="contactBox__title">
                    Mesaj Gönderin
                </div>
                <p class="contactBox__text">
                    Her konuda bizimle iletişime geçebilir, düşünce ve görüşlerinizi bizimle paylaşabilirsiniz.
                </p>
                <div class="row">
                    <div class="col-xl-8 col-12">
                        <form class="contactBox__form" action="{{route('mail')}}" method="POST">
                            @csrf
                            <div class="contactBox__form-item row">
                                <div class="col-xl-6 col-12">
                                    <input type="text" name="name" placeholder="Adınız Soyadınız" required />
                                </div>
                                <div class="col-xl-6 col-12">
                                    <input type="email" name="mail" placeholder="E-posta Adresiniz" required />
                                </div>
                            </div>
                            <div class="contactBox__form-item row">
                                <div class="col-xl-6 col-12">
                                    <input type="text" name ="gsm" id="gsm" placeholder="Telefon Numaranız" required />
                                </div>
                                <div class="col-xl-6 col-12">
                                    <input type="text" name="website" placeholder="Websiteniz" required />
                                </div>
                            </div>
                            <textarea class="contactBox__form-area mb-3" name="content" placeholder="Mesajınız"
                                required>  </textarea>
                            <button class="contactBox__form-btn login-btn" type="submit">
                                Mesajı Gönder
                            </button>
                        </form>
                    </div>
                    <div class="col-xl-4 col-12">
                        <div class="contact-img">
                            <img src="{{asset('assets')}}/frontEnd/img/group21.png" alt="">
                        </div>
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