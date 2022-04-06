@extends('home/layouts.home')
@section('title','Linkle Ödeme ile Websiteniz Olmadan Ödeme Alın - PayBull')
@section('description', 'PayBull Link ile Ödeme Alma sayesinde işiniz artık çok kolay. Üstelik bu servisimiz için bir şirket sahibi olmanıza da gerek yok. Hemen keşfetin.')
@section('canonical','https://paybull.com/link-ile-odeme-alma') 
@section('content')
<main>
    <section class="lg:py-5 md:py-32 overflow-x-hidden container">
        
        <div class="col-md-6 col-12 d-md-none">
            <div class="abouts-img w-full">
                 <img src="{{asset('assets')}}/frontEnd/img/general/link-ile-odeme.webp" alt="" />
            </div>
        </div>
        
      <div class="flex flex-row text-left lg:pt-40 w-full lg:px-4">
        <div class="flex justify-center flex-col items-center  sm:items-start">
          <h5 style="color: #152daa" class="section-span text-center">
           PAYBULL LİNK İLE ÖDEME ALMA
          </h5>
          <h1 class="section-title text-left">
            Web Siteniz Olmadan Tek Link ile Satış Yapabilirsiniz!
          </h1>
          <p class="text-lg font-thin leading-10 text-left">
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
        <div class="abouts-img   d-none d-md-block">
          <img src="{{asset('assets')}}/frontEnd/img/general/link-ile-odeme.webp" alt="" />
        </div>
      </div>
    </section>
    <section class="section_link pt-10">
      <div class="container">
        <div class="section-span text-center">PAYBULL İLE İŞİNİZİ BÜYÜTÜN</div>
        <h2 class="section-title text-center">
          Link ile ödeme almak çok kolay!
        </h2>
        <div class="row">
          <div class="col-xl-6 col-12">
            <div class="link-odeme-img">
              <img src="{{asset('assets')}}/frontEnd/img/contact-img2.png" alt="" />
            </div>
          </div>
          <div class="col-xl-6 col-12 pb-5">
            <div class="row">
              <div class="col-md-6 col-12">
                <div class="linkBox flex justify-center items-center flex-col sm:items-start px-2">
                  <div class="linkBox__icon">
                    <img src="{{asset('assets')}}/frontEnd/img/icons/link-olustur.svg" alt="" />
                  </div>
                  <div class="linkBox__title">Link Oluşturun</div>
                  <div class="linkBox__text">
                    <p>
                      Tek bir panelden, verdiğiniz hizmetin ya da ürünün bilgilerini girerek linki oluşturun.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="linkBox flex justify-center items-center flex-col sm:items-start px-2">
                  <div class="linkBox__icon">
                    <img src="{{asset('assets')}}/frontEnd/img/icons/musterilerine-gonder.svg" alt="" />
                  </div>
                  <div class="linkBox__title">Müşterilerinize gönderin</div>
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
                    <img src="{{asset('assets')}}/frontEnd/img/icons/odemini-aninda-al.svg" alt="" />
                  </div>
                  <div class="linkBox__title">Ödemenizi anında alın</div>
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
                              <input type="text" name="fullname" placeholder="Adınız Soyadınız" required />
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
                                      <option selected value="" disabled>Aylık Beklenen Ciro</option>
                                      <option value="0 - 100.000 TL">0 - 100.000 TL</option>
                                      <option value="100.000 TL - 250.000 TL">100.000 TL - 250.000 TL</option>
                                      <option value="250.000 TL - 500.000 TL">250.000 TL - 500.000 TL</option>
                                       <option value="500.000 TL +">500.000 TL +</option>
                                  </select>
                              </div>
                          </div>
                          <div class="col-xl-4 col-md-6 col-12 mt-xl-0 mt-3">
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
                          <input type="checkbox" name="checkbox3" id="checkbox3" />
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
  </main>
@endsection
