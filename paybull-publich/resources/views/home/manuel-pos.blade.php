@extends('home/layouts.home')
@section('title','Müşterilerinizden Anında Ödeme Alın – PayBull')
@section('description', 'PayBull Manuel POS ile hiçbir entegrasyona ihtiyaç duymadan direkt olarak üye iş yeri panelinizden ödemelerinizi yönetebilirsiniz.')
@section('canonical','https://paybull.com/manuel-pos') 
@section('content')
<main>
    <section class="lg:py-5 md:py-32 overflow-x-hidden container">
        <div class="col-md-6 col-12 d-md-none">
            <div class="abouts-img w-full">
                <img  src="{{asset('assets')}}/frontEnd/img/general/manuel-pos.webp" alt="" />
            </div>
        </div>
        <div class="text-left lg:pt-40 w-full flex flex-row lg:px-4">
            
            <div class="flex justify-center flex-col items-center md:items-start  w-full ">
                <h5 class="section-span text-center sm:text-left">PAYBULL MANUEL POS</h5>
                <h2 class="section-title text-left  ">
                    Müşterilerinizden Anında Ödeme Alın!
                </h2>
                <p class="text-lg font-thin leading-10 text-left  ">
                    PayBull Manuel POS ile hiçbir entegrasyona ihtiyaç duymadan direkt olarak üye iş yeri panelinizden ödemelerinizi yönetebilirsiniz. 3D güvenliğin şart olduğu bu ödeme yöntemiyle fiziksel POS masrafından kurtularak işinizi PayBull güvencesiyle büyütün.
                </p>
                <a href="{{route('hizli-basvuru')}}" class="why-btn about-btn mb-xl-4 mb-0 mt-8">
                    <div class="flex flex-row">
                        <span>Hemen Başvuru Yap</span>
                        <img class="ps-2" src="{{asset('assets')}}/frontEnd/img/document-text2.svg" alt="">
                    </div>
                </a>
            </div>
 
            <div class="abouts-img  w-full d-none d-md-block">
                <img src="{{asset('assets')}}/frontEnd/img/general/manuel-pos.webp" alt="" />
            </div>
        </div>
    </section>
    <section class="py-5 md:py-32 overflow-x-hidden container">
        <div class="col-md-6 col-12 d-md-none">
            <div class="abouts-img w-full">
                <img  src="{{asset('assets')}}/frontEnd/img/general/manuel-pos-xl.jpg" alt="" />
            </div>
        </div>
      <div class="text-left w-full flex flex-row lg:px-4">
          
        <div class="abouts-img hidden lg:block w-full h-full">
          <img src="{{asset('assets')}}/frontEnd/img/general/manuel-pos-vert-2.webp" alt="" />
        </div>
        
        <div class="flex justify-center flex-col items-center md:items-start  w-full lg:pl-6">
          <h1 class="section-span text-center sm:text-left">EN AVANTAJLI SANAL POS</h1>
          <h2 class="section-title text-left  ">
           PayBull ile Satış Yapmaya Başlamak için Birçok Neden Var!
          </h2>
          <div class="row py-10">
            <div class="col-md-6 col-12">
              <div class="linkBox flex justify-center items-center flex-col sm:items-start px-2">
                 
               
                    <div class="linkBox__icon">
                    <img src="{{asset('assets')}}/frontEnd/img/icons/guvenli-ve-hizli.svg" alt="" width="48" height="48"/>
                    </div>
                   <div class="linkBox__title">  Güvenli ve Hızlı Kurulum </div>
                   
                <div class="linkBox__text">
                    
                  <p>
                    PayBull Sanal POS’un uygun komisyon oranları ile başvurunuzu yaptıktan 24 saat sonra ödeme almaya başlayabilirsiniz.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-12">
              <div class="linkBox flex justify-center items-center flex-col sm:items-start px-2">
                <div class="linkBox__icon">
                  <img src="{{asset('assets')}}/frontEnd/img/icons/taksitli-satis-imkani.svg" alt="" width="48" height="48"/>
                </div>
                <div class="linkBox__title">Taksitli Satış İmkanı</div>
                <div class="linkBox__text">
                  <p>
                   Tek entegrasyon ile tüm banka kartlarından 12 aya varan taksitlerle ödeme alabilirsiniz.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-12">
              <div class="linkBox flex justify-center items-center flex-col sm:items-start px-2">
                <div class="linkBox__icon">
                  <img src="{{asset('assets')}}/frontEnd/img/icons/ertesi-gun-odeme.svg" alt="" width="48" height="48" />
                </div>
                <div class="linkBox__title">Ertesi Gün Ödeme Alma</div>
                <div class="linkBox__text">
                  <p>

                    PayBull’un hızlı ve güvenli altyapısı sayesinde ertesi gün ödeme almaya başlayarak işinizi büyütebilirsiniz.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-12">
              <div class="linkBox flex justify-center items-center flex-col sm:items-start px-2">
                <div class="linkBox__icon">
                  <img src="{{asset('assets')}}/frontEnd/img/icons/24-saat.svg" alt="24 Saat İçinde Online Satış" width="48" height="48" />
                </div>
                <div class="linkBox__title">24 Saat İçinde Online Satış</div>
                <div class="linkBox__text">
                  <p>
                    PayBull Sanal POS ile 24 saat içinde en uygun komisyon oranları ile online satış yapmaya başlayabilirsiniz.
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
                            <input type="text" name="fullname" placeholder="Adınız Soyadınız" required />
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <input type="tel" name="phone" id="gsm" placeholder="Cep Telefonu" required />
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <input type="email" name="email" placeholder="E-Posta Adresi" required />
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
                        <input type="checkbox" name="checkbox3" id="checkbox3" required />
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
