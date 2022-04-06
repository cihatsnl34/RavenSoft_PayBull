@extends('home/layouts.home')
@section('content')
<main>
    <section class="py-5 md:py-32 overflow-x-hidden container">
      <div class="flex flex-row text-left pt-20 w-full px-4">
        <div class="flex justify-center flex-col items-center  sm:items-start">
          <h5 style="color: #152daa" class="section-span text-center">
            PAYBULL LİNK İLE ÖDEME SAYESİNDE
          </h5>
          <h2 class="section-title text-left">
            Web Siteniz Olmadan Tek Linkle Satış Yapabilirsiniz
          </h2>
          <p class="text-sm font-thin leading-10 text-left">
            Web sitesine ya da hiçbir entegrasyona gerek kalmadan sosyal medya
            veya tüm dijital platformlardan satış yapabilir ve ödeme
            alabilirsiniz.
          </p>
          <div class="flex items-start">
            <a href="{{route('hizli-basvuru')}}" class="why-btn about-btn mb-xl-4 mb-0 mt-8">
              <div class="flex flex-row">
                <span>Hemen Başvuru Yap</span>
                <img class="ps-2" src="{{asset('assets')}}/frontEnd/img/document-text2.svg" alt="" />
              </div>
            </a>
          </div>
        </div>
        <div class="abouts-img hidden lg:block w-full">
          <img src="{{asset('assets')}}/frontEnd/img/contact-img2.png" alt="" />
        </div>
      </div>
    </section>
    <section class="section_link py-12">
      <div class="container">
        <div class="section-span text-center">PROFESYONEL ÇÖZÜMLER</div>
        <h2 class="section-title text-center">
          Link ile ödeme almak çok kolay!
        </h2>
        <div class="row">
          <div class="col-xl-6 col-12">
            <div class="link-odeme-img">
              <img src="{{asset('assets')}}/frontEnd/img/link-odeme-img.png" alt="" />
            </div>
          </div>
          <div class="col-xl-6 col-12">
            <div class="row">
              <div class="col-md-6 col-12">
                <div class="linkBox flex justify-center items-center flex-col sm:items-start px-2">
                  <div class="linkBox__icon">
                    <img src="{{asset('assets')}}/frontEnd/img/future1.png" alt="" />
                  </div>
                  <div class="linkBox__title">Link Oluştur</div>
                  <div class="linkBox__text">
                    <p>
                      Tek bir panelden, verdiğiniz hizmetin ya da ürünün bilgilerini girerek linki oluştur.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="linkBox flex justify-center items-center flex-col sm:items-start px-2">
                  <div class="linkBox__icon">
                    <img src="{{asset('assets')}}/frontEnd/img/future2.png" alt="" />
                  </div>
                  <div class="linkBox__title">Müşterine Gönder</div>
                  <div class="linkBox__text">
                    <p>
                      Oluşturduğunuz linki hızlı ve güvenli bir şekilde müşterilerinizle paylaşın.

                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="linkBox flex justify-center items-center flex-col sm:items-start px-2">
                  <div class="linkBox__icon">
                    <img src="{{asset('assets')}}/frontEnd/img/future3.png" alt="" />
                  </div>
                  <div class="linkBox__title">Ödemeni Anında Al</div>
                  <div class="linkBox__text">
                    <p>

                      Müşterilerinize sunduğunuz link üzerinden anında ödeme almaya başlayın.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
  </main>
@endsection
