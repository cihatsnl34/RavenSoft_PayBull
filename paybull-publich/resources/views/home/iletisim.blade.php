@extends('home/layouts.home')
@section('title','Desteğe ihtiyacınız olduğu her an sizin için buradayız! İletişim – PayBull')
@section('description','Yalnızca yardıma ihtiyacınız olduğunuz anlar için değil, düşünce ve görüşleriniz için de buradayız.')
@section('canonical','https://paybull.com/iletisim') 
@section('content')
<main>
    <section class="section-contact">
        <div class="contact text-center">
            <div class="section-span text-center">PAYBULL İLE ÖDEME ALMANI KOLAYLAŞTIR</div>
            <h2 class="section-title text-center px-2">
                Yardıma mı ihtiyacınız var?
            </h2>
            <p class="section-text text-center mb-0 px-2">
                Desteğe ihtiyacınız olduğu her an sizin için buradayız!
            </p>
        </div>
    </section>
    <section class="contact-us">
        <div class="container">
            <div class="contactBox">
                <div class="contactBox__title">
                   İletişim Formu
                </div>
                <p class="contactBox__text">
                    Yalnızca yardıma ihtiyacınız olduğunuz anlar için değil, düşünce ve görüşleriniz için de buradayız.
                </p>
                <div class="row">
                    <div class="col-xl-8 col-12">
                        <form class="contactBox__form" action="{{route('email')}}" method="POST">
                            @csrf
                            <div class="contactBox__form-item row">
                                <div class="col-xl-6 col-12">
                                    <input type="text" name="name" placeholder="Adınız Soyadınız" required />
                                </div>
                                <div class="col-xl-6 col-12">
                                    <input type="email" name="mail" placeholder="E-Posta Adresiniz" required />
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
                            <textarea placeholder="Mesajınız" class="form-control mb-3" style="color:black" name="content"  required></textarea>  
                            <button class="contactBox__form-btn login-btn" type="submit">
                                Mesajı Gönder
                            </button>
                        </form>
                    </div>
                    <div class="col-xl-4 col-12">
                        <div class="contact-img">
                            <img src="{{asset('assets')}}/frontEnd/img/group21.png" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         
    </section>
    <section >
        <div class="container mt-6">
            <div class="text-center">
                <div class="section-span text-center">7/24 DESTEK!</div>
                <h2 class="section-title text-center">
                    Size yardımcı olmaktan mutluluk duyuyoruz!
                </h2>
                <p class="section-text text-center mb-2">
                    Merak ettiğiniz sorular ve yaşadığınız problemler için aşağıdaki iletişim bilgilerinden bize ulaşabilirsiniz.
                </p>
            </div>
            <div class="row align-items-center mb-5">
                <div class="col-xl-4 col-md-6 col-12 mb-xl-0 mb-3">
                    <div class="contactItem d-flex align-items-center">
                        <div class="contactItem__icon me-3">
                            <img src="{{asset('assets')}}/frontEnd/img/customer-service-2-line.svg" alt="">
                        </div>
                        <div class="contactItem__text">
                            <span>Telefon ile Destek Alın</span>
                            <div><a href="tel:+0850 2 418 418" target="_blank">0850 2 418 418</a> </div>
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
                            <div><a href="mailto:info@paybull.com" target="_blank">info@paybull.com</a></div>
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
                                Merkez Ofis: <span>Altunizade Mah. <br> Kuşbakışı Cad. No: 7A Kat: -1 34662 Üsküdar/İstanbul </span>
                            </div>
                        </div>
                    </div>
                </div>
                 
            </div>
        </div>
        </section>
             <div class="w-full">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12040.362758907504!2d29.0456959!3d41.0232718!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x878bab99962d9a1a!2sPayBull%20%C3%96deme%20Hizmetleri%20A.%C5%9E.!5e0!3m2!1str!2str!4v1647618458270!5m2!1str!2str" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
  
</main>
@endsection