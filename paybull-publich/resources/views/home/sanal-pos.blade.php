@extends('home/layouts.home')
@section('title','En Uygun Komisyonlu Sanal POS – PayBull')
@section('description', '2 Saatte Sanal POS, Ödemelerinizi ertesi gün alın, hiçbir işlem ücreti olmadan en uygun Sanal POS komisyon oranları ile hemen alın, kazançlı çıkın!')
@section('canonical','https://paybull.com/sanal-pos') 
@section('content')
<main>
    <section class="lg:py-5 md:py-32 overflow-x-hidden container">
        <div class="col-md-6 col-12 d-md-none">
            <div class="abouts-img w-full">
                <img src="{{asset('assets')}}/frontEnd/img/general/sanal-pos.webp" alt="" />
            </div>
        </div>
        
      <div class="text-left lg:pt-40 w-full flex flex-row lg:px-4">
        <div class="flex justify-center flex-col items-center md:items-start  w-full ">
          
          <h5 class="section-span text-center sm:text-left">PAYBULL SANAL POS</h5>
          <h1 class="section-title text-left  ">
           En Uygun Komisyon Oranları ile Ertesi Gün <br> Satış Yapmaya Başlayın!
          </h1>
          <p class="text-lg  font-thin leading-10 text-left  ">
            PayBull Sanal POS ile bankalarla tek tek anlaşma yapmanıza gerek kalmadan, en uygun komisyon oranlarıyla
            ertesi gün ödeme alabilirsiniz. 24 saat içinde uygun komisyon oranları ile online satış yapmaya başlayın!
          </p>
          <a href="{{route('hizli-basvuru')}}" class="why-btn about-btn mb-xl-4 mb-0 mt-8">
            <div class="flex flex-row">
              <span>Hemen Başvuru Yap</span>
              <img class="ps-2" src="{{asset('assets')}}/frontEnd/img/document-text2.svg" alt="">
            </div>
          </a>
        </div>
    
            <div class="abouts-img w-full pl-6 d-none d-md-block">
                <img src="{{asset('assets')}}/frontEnd/img/general/sanal-pos.webp" alt="" />
            </div>
        
      </div>
    </section>
    <section class="py-5 md:py-32 overflow-x-hidden container">
        
        <div class="col-md-6 col-12 d-md-none">
            <div class="abouts-img w-full">
                <img src="{{asset('assets')}}/frontEnd/img/general/sanal-pos-xl.jpg" alt="" />
            </div>
        </div>
        
      <div class="text-left w-full flex flex-row lg:px-4">
          
        <div class="abouts-img hidden lg:block w-full h-full">
          <img src="{{asset('assets')}}/frontEnd/img/general/sanal-pos-vert.webp" alt="" />
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
              <div class="linkBox flex justify-center items-center flex-col sm:items-start">
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
    <section class="py-15 md:py-10 lg:bg-contain bg-top bg-no-repeat"
      style="background-image: url('metis-assets/backgrounds/intersect.svg');">
      <div class="container mx-auto lg:px-4">
        <div class=" mx-auto mb-12 text-center">
          <h2 class="mb-4 text-lg text-center font-bold section-semi-title ">SIKÇA SORULAN SORULAR</h2>
        </div>
        <div class="max-w-3xl mx-auto">
              <div class="sssAccordion accordion">
                        <div class="sssAccordion__item accordion-item px-6 py-4 bg-white rounded shadow">
                            <div class="toggle">
                                <span class="sssAccordion__item--header">
                                   PayBull Sanal POS nedir?
                                </span>
                                <img class="toggle__arrow" src="{{asset('assets')}}/frontEnd/img/bottom-arrow.svg" alt="">
                            </div>
                            <div class="sssAccordion__item--text inner mt-2 text-blueGray-400 font-normal leading-loose">
                               PayBull Sanal POS, e-ticaret ile satış yapmak isteyen web sitesi
sahiplerinin hızlı ve güvenli bir şekilde, uygun komisyon oranları ile
online ödeme almalarına imkân tanıyan bir servistir. PayBull tarafından
web sitelerine kolayca entegre edilerek, 24 saat içinde kullanıma
açılabilmektedir.
                            </div>
                        </div>
                        <div class="sssAccordion__item accordion-item px-6 py-4 bg-white rounded shadow">
                            <div class="toggle">
                               <span class="sssAccordion__item--header">
                                  PayBull Sanal POS’u işimde nasıl kullanırım?
                                </span>
                                <img class="toggle__arrow" src="{{asset('assets')}}/frontEnd/img/bottom-arrow.svg" alt="">
                            </div>
                            <div class="sssAccordion__item--text inner mt-2 text-blueGray-400 font-normal leading-loose">
                                Müşterileriniz almak istedikleri ürünleri sepete ekledikten sonra,
sitenizdeki ödeme sayfası adımında PayBull ödeme ekranı formunu görür.
Kullanımı kolay arayüz ile müşterileriniz açılan forma kart bilgilerini girer
ve PayBull’un sizler için sağladığı güvenilir ve hızlı Sanal POS altyapısı
aracılığıyla ödeme işlemini gerçekleştirir. Yapılan ödeme, saniyeler içinde
PayBull’un sistemi tarafından incelenerek onaylanır ve alışveriş süreci
başarıyla tamamlanır.
                            </div>
                        </div>
                        <div class="sssAccordion__item accordion-item px-6 py-4 bg-white rounded shadow">
                            <div class="toggle">
                               <span class="sssAccordion__item--header">
                                     PayBull Sanal POS komisyon oranları nedir?
                                </span>
                                <img class="toggle__arrow" src="{{asset('assets')}}/frontEnd/img/bottom-arrow.svg" alt="">
                            </div>
                            <div class="sssAccordion__item--text inner mt-2 text-blueGray-400 font-normal leading-loose">
                                Komisyon oranı için aylık işlem hacminiz/yıllık ciro hedefiniz ve web
sitenizin iş modeli gibi parametreler değerlendirilerek değerlendirme
sonrası size uygun en avantajlı komisyon oranları belirlenmekte ve işinize
özel avantajlı teklif sunulmaktadır.
Komisyon oranınızı öğrenmek için www.paybull.com adresinden hemen
başvur bölümünden, online başvuru formunu doldurmanız yeterli.
Başvurunuz sonrası satış birimimiz, başvurunuzu en hızlı şekilde
değerlendirmeye alıp size özel avantajlı teklifinizi iletecektir.
                            </div>
                        </div>
                        <div class="sssAccordion__item accordion-item px-6 py-4 bg-white rounded shadow">
                            <div class="toggle">
                               <span class="sssAccordion__item--header">
                                     PayBull Sanal POS avantajları nedir?
                                </span>
                                <img class="toggle__arrow" src="{{asset('assets')}}/frontEnd/img/bottom-arrow.svg" alt="">
                            </div>
                            <div class="sssAccordion__item--text inner mt-2 text-blueGray-400 font-normal leading-loose">
                                  PayBull Sanal POS hizmetlerimiz sayesinde tüm bankalarla tek tek
anlaşma yapma zorunluluğunuzu ortadan kaldırıyoruz. Tüm banka kartları
ve kredi kartlarıyla avantajlı oranlardan ödemelerinizi ertesi gün uygun
komisyon oranları ile alabilirsiniz. PayBull Sanal POS’ta yıllık POS ücreti,
ek POS ücreti, kurulum ücreti ve işlem ücreti bulunmaz. Sürpriz ücretlere
maruz kalmadan PayBull Sanal POS’un uygun komisyon oranları ile
işinizi büyütürsünüz.
                            </div>
                        </div>
                        <div class="sssAccordion__item accordion-item px-6 py-4 bg-white rounded shadow">
                            <div class="toggle">
                               <span class="sssAccordion__item--header">
                                     PayBull Sanal POS hangi kart programları ile çalışıyor?
                                </span>
                                <img class="toggle__arrow" src="{{asset('assets')}}/frontEnd/img/bottom-arrow.svg" alt="">
                            </div>
                            <div class="sssAccordion__item--text inner mt-2 text-blueGray-400 font-normal leading-loose">
                                 PayBull Sanal POS ertesi gün ödeme alma avantajıyla, Axess, Advantage, Bonus, Card Finans, Combo, Maximum, MaxiMiles, Miles&Smiles Paraf, Sağlam Kart, Shop&Fly World ve Wings kart programlarıyla uyumlu entegre bir şekilde çalışmaktadır. PayBull altyapısı sayesinde ödemelerinizi sorunsuz bir şekilde alarak işinizi hızlıca büyütürsünüz.
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
