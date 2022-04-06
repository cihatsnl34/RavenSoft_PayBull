@extends('home/layouts.home')
@section('title','Periyodik Ödeme Alan Müşterilerinize Çözümler Sunun! – PayBull')
@section('description', ' PayBull’un güvenli kart saklama özelliği sayesinde, müşterileriniz her alışverişinde kart bilgisini yeniden girmek zorunda kalmaz!')
@section('canonical','https://paybull.com/abonelik-yontemi') 
@section('content')
<main>
   <section class="py-5 md:py-32 overflow-x-hidden container">
       <div class="pt-20 col-md-6 col-12 d-md-none">
        <div class="abouts-img  w-full">
                <img src="{{asset('assets')}}/frontEnd/img/general/abonelik-yontemi.webp" alt="" />
            </div>
            </div>
        <div class="text-left lg:pt-40 w-full flex flex-row px-4">

           <div class="abouts-img  w-full  px-3 d-none d-md-block">
                <img src="{{asset('assets')}}/frontEnd/img/general/abonelik-yontemi.webp" alt="" />
            </div>
            <div class="flex justify-center flex-col items-center md:items-start  w-full ">
                <h5 class="section-span text-center sm:text-left">ABONELİK YÖNTEMİ</h5>
                <h2 class="section-title text-left  ">
                    Periyodik Ödeme Alan<br>
                    Müşterilerinize Çözümler Sunun!
                </h2>
                <p class="text-lg font-thin leading-10 text-left  ">

                    PayBull’un güvenli kart saklama özelliği sayesinde, müşterileriniz her alışverişinde kart bilgisini yeniden girmek zorunda kalmaz, siz de ödemelerinizi hızlı ve basit bir şekilde düzenli periyotlarla alabilirsiniz.


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
  </main>

@endsection
