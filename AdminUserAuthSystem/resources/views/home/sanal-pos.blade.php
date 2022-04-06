@extends('home/layouts.home')
@section('content')
<main>
    <section class="py-5 md:py-32 overflow-x-hidden container">
      <div class="text-left pt-20 w-full flex flex-row px-4">
        <div class="flex justify-center flex-col items-center md:items-start  w-full ">
          <h5 class="section-span text-center sm:text-left">PAYBULL SANAL POS İLE</h5>
          <h2 class="section-title text-left  ">
            Ödemeleri hızlı, kolay ve güvenli bir şekilde kabul edin
          </h2>
          <p class="text-sm font-thin leading-10 text-left  ">
            Paybull Sanal POS ile bankalarla tek tek anlaşma yapmanıza gerek kalmadan, en uygun komisyon oranlarıyla
            ertesi gün ödeme alabilirsiniz. 24 saat içinde uygun komisyon oranları ile online satış yapmaya başlayın!
          </p>
          <a href="{{route('basvuru')}}" class="why-btn about-btn mb-xl-4 mb-0 mt-8">
            <div class="flex flex-row">
              <span>Hemen Başvuru Yap</span>
              <img class="ps-2" src="{{asset('assets')}}/frontEnd/img/document-text2.svg" alt="">
            </div>
          </a>
        </div>

        <div class="abouts-img hidden lg:block w-full">
          <img src="{{asset('assets')}}/frontEnd/img/contact-img2.png" alt="" />
        </div>
      </div>
    </section>
    <section class="py-5 md:py-32 overflow-x-hidden container">
      <div class="text-left pt-20 w-full flex flex-row px-4">
        <div class="abouts-img hidden lg:block w-full h-full">
          <img src="{{asset('assets')}}/frontEnd/img/paybull-satis.png" alt="" />
        </div>
        <div class="flex justify-center flex-col items-center md:items-start  w-full">
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
                <div class="linkBox__title">Kazandıklarınızdan daha fazlasını biriktirin</div>
                <div class="linkBox__text">
                  <p>
                    Ödeme işlemlerinde basit, şeffaf fiyatlandırma ile, garip veya gizli ücretler veya sonradan çıkan
                    aidatlar olmadan tasarruf edin.
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
                    Ödemeleri hemen almaya başlayın - banka ziyaretleri, arka plan kontrolleri gerekmez. Hesap oluşturma
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

                    Paybull’un kullanıcı dostu panele anında erişin. Bir sonraki iş günü içinde harici bir banka
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
                <div class="linkBox__title">İş verilerinizi güvende tutun</div>
                <div class="linkBox__text">
                  <p>
                    Güvenlik, ürünlerimizde en öncelikli olarak tasarlanmıştır. Bütün verileriniz Paybull ile güvende.
                  </p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <section class="py-20 lg:bg-contain bg-top bg-no-repeat"
      style="background-image: url('metis-assets/backgrounds/intersect.svg');">
      <div class="container mx-auto px-4">
        <div class="max-w-sm mx-auto mb-12 text-center">
          <h2 class="mb-4 text-3xl md:text-4xl font-bold font-heading">Sıkça Sorulan Sorular</h2>
        </div>
        <div class="max-w-3xl mx-auto">
          <ul class="space-y-4">
            <li class="px-6 py-4 bg-white rounded shadow">
              <button class="w-full flex justify-between items-center text-left font-bold font-heading ">
                <span class="text-blueGray-600 font-semibold tracking-wide">Sanal POS Nedir?</span>
                <svg class="w-4 h-4 ml-2 text-blueGray-500" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
              </button>
              <p class="mt-2 text-blueGray-400 font-normal leading-loose">Sanal POS, fiziksel POS cihazlarının bir
                alternatifi olarak, müşteri kredi kartına fiziksel olarak erişiminiz olmayan online, mobil, çağrı
                merkezi vb. kanallarda veya fiziksel POS bulundurmanızın zor olduğu saha satış, teslimat ekipleri vb.
                hizmet noktalarınızda, müşteri banka kartı veya kredi kartı bilgilerini güvenli şekilde alarak, bankaya
                online bir teknik entegrasyon üzerinden ödeme ve kart bilgilerini iletmenize ve işlemin sonucunu aynı
                yolla almanıza imkan veren altyapıdır.<br><br>


                Sanal POS, internet üzerinden yaptığınız alışverişlerin sonunda ödeme yaptığınız alan, yani dijital bir
                ödeme noktası. Sanal POS, POS cihazları ile aynı mantıkla çalışıyor. Sanal POS'un POS cihazından tek
                farkı, kartınızı bir cihaza okutmak yerine kart bilgilerinizi dijital ekranda belirtilen alanlara
                girmeniz.
              </p>
            </li>
            <li class="px-6 py-4 bg-white rounded shadow">
              <button class="w-full flex justify-between items-center text-left font-bold font-heading ">
                <span class="text-blueGray-600 font-semibold tracking-wide">Sanal POS’a Nasıl Başvurulur?</span>
                <svg class="w-4 h-4 ml-2 text-blueGray-500" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
              </button>
              <p class="mt-2 text-blueGray-400 font-normal leading-loose">Müşterileriniz almak istedikleri ürünleri
                sepete ekledikten sonra, sitenizdeki ödeme sayfası adımında PayBull ödeme ekranı formunu görür.
                Kullanımı kolay arayüz ile müşterileriniz açılan forma kart bilgilerini girer ve PayBull’un sizler için
                sağladığı güvenilir ve hızlı Sanal POS altyapısı aracılığıyla ödeme işlemini gerçekleştirir. Yapılan
                ödeme, saniyeler içinde PayBull’un sistemi tarafından incelenerek onaylanır ve alışveriş süreci
                başarıyla tamamlanır.<br><br>


                Başvuru aşamasında talep edilen evraklar temel olarak; nüfus cüzdan örneği, vergi levhası, imza
                sirküleri, vergi levhası, ticaret sicil gazetesinin fotokopisi, imza sirküleridir.

              </p>
            </li>
            <li class="px-6 py-4 bg-white rounded shadow">
              <button
                class="w-full flex justify-between items-center text-left font-bold font-heading hover:text-blueGray-700">
                <span class="text-blueGray-600 font-semibold tracking-wide">Paybull Sanal POS Komisyon Ücreti Ne
                  Kadar?</span>
                <svg class="w-4 h-4 ml-2 text-blueGray-300" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </button>
              <p class="hidden mt-2 text-blueGray-400 font-normal leading-loose">Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Vivamus quis ultricies est. Duis nec hendrerit magna. Ut vel orci gravida, hendrerit
                enim non, gravida turpis. Praesent non lectus porttitor, scelerisque nulla nec, ornare neque. Integer
                massa libero, ornare ut leo nec, scelerisque rutrum elit. Morbi et massa id ipsum lobortis rhoncus.
                Aenean sit amet porta nulla, quis varius risus. Suspendisse ultrices ut lectus non laoreet. Etiam ornare
                laoreet tortor quis porttitor. Suspendisse tempus erat non dui volutpat eleifend.</p>
            </li>
            <li class="px-6 py-4 bg-white rounded shadow">
              <button
                class="w-full flex justify-between items-center text-left font-bold font-heading hover:text-blueGray-700">
                <span class="text-blueGray-600 font-semibold tracking-wide">Hangi Bankalarla Çalışılıyor?</span>
                <svg class="w-4 h-4 ml-2 text-blueGray-300" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </button>
              <p class="hidden mt-2 text-blueGray-400 font-normal leading-loose">Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Vivamus quis ultricies est. Duis nec hendrerit magna. Ut vel orci gravida, hendrerit
                enim non, gravida turpis. Praesent non lectus porttitor, scelerisque nulla nec, ornare neque. Integer
                massa libero, ornare ut leo nec, scelerisque rutrum elit. Morbi et massa id ipsum lobortis rhoncus.
                Aenean sit amet porta nulla, quis varius risus. Suspendisse ultrices ut lectus non laoreet. Etiam ornare
                laoreet tortor quis porttitor. Suspendisse tempus erat non dui volutpat eleifend.</p>
            </li>
            <li class="px-6 py-4 bg-white rounded shadow">
              <button
                class="w-full flex justify-between items-center text-left font-bold font-heading hover:text-blueGray-700">
                <span class="text-blueGray-600 font-semibold tracking-wide">Başka Hangi Avantajlar Var?</span>
                <svg class="w-4 h-4 ml-2 text-blueGray-300" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </button>
              <p class="hidden mt-2 text-blueGray-400 font-normal leading-loose">Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Vivamus quis ultricies est. Duis nec hendrerit magna. Ut vel orci gravida, hendrerit
                enim non, gravida turpis. Praesent non lectus porttitor, scelerisque nulla nec, ornare neque. Integer
                massa libero, ornare ut leo nec, scelerisque rutrum elit. Morbi et massa id ipsum lobortis rhoncus.
                Aenean sit amet porta nulla, quis varius risus. Suspendisse ultrices ut lectus non laoreet. Etiam ornare
                laoreet tortor quis porttitor. Suspendisse tempus erat non dui volutpat eleifend.</p>
            </li>
          </ul>
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
  </main>

@endsection
