<footer>
    <div class="container">
        <h2 class="section-title text-center footer-title">
           24 Saat İçinde Online Satış Yapmaya Başlayın!
        </h2>
        <p class="section-text text-center footer-text">
            PayBull Sanal POS ile bankalarla tek tek anlaşmanıza gerek kalmaz!
        </p>
        <div class="text-center">
            <a href="{{route('hizli-basvuru')}}" class="why-btn footer-btn">
                Hemen Başvuru Yap
                <img class="ps-2 d-inline" src="{{asset('assets')}}/frontEnd/img/document-text.svg" alt="" />
            </a>
        </div>
        <div class="row align-items-center footerAdd">
            <div class="col-md-8 col-12">
                <div class="d-md-flex align-items-center justify-content-between">
                     
                     <div class="text-center sm:text-left">
                    <a href="#"><img class="text-center sm:text-left inline" src="{{asset('assets')}}/frontEnd/img/logo-footer.png" alt="PayBull Sanal POS" height=48px width=147px /></a>
                    </div>
                    
                    <div class="footerAdress my-md-0 my-3 flex flex-row items-center ">
                        <img class="px-2" src="{{asset('assets')}}/frontEnd/img/map.svg" alt="" />
                        <a href="https://www.google.com/maps?ll=41.023272,29.045696&z=16&t=m&hl=tr&gl=TR&mapclient=embed&cid=9767088893020969498" style="color:white !important;" target="_blank">Altunizade Mah. Kuşbakışı Cad. 
                        No: 7A Kat: -1  34662 Üsküdar/İstanbul</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="d-flex align-items-center justify-content-between">
                    
                    <div class="footerCall flex flex-row items-center">
                        <img class="px-2" src="{{asset('assets')}}/frontEnd/img/customer-service-2-line.svg" alt="" />
                       <a href="tel:+0850 2 418 418" style="color:white !important;" target="_blank">0850 2 418 418</a> 
                    </div>
                    <nav class="footerNav">
                        <ul class="d-flex align-items-center">
                            
                            <li>
                                <a href="https://facebook.com/paybullcom" rel="nofollow" target="_blank">
                                    <img src="{{asset('assets')}}/frontEnd/img/facebook-circle-line.svg" alt="" />
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/paybullcom" rel="nofollow" target="_blank">
                                    <img src="{{asset('assets')}}/frontEnd/img/twitter-line.svg" alt="" />
                                </a>
                            </li>
                            <li>
                                <a href="https://instagram.com/paybullcom" rel="nofollow" target="_blank">
                                    <img src="{{asset('assets')}}/frontEnd/img/instagram-line.svg" alt="" />
                                </a>
                            </li>
                            <li>
                                <a href="https://tr.linkedin.com/company/paybull" rel="nofollow" target="_blank">
                                    <img src="{{asset('assets')}}/frontEnd/img/linkedin-box-line.svg" alt="" />
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row justify-content-around">
            <div class="col-xl-2 col-md-6 col-6">
                <div class="footerMenuTitle">Ürünlerimiz</div>
                <ul class="footerMenu">
                    <li><a href="{{route('sanal-pos')}}">Sanal POS</a></li>
                    <li><a href="{{route('link-odeme')}}">Link ile Ödeme Alma</a></li>
                    <li><a href="{{route('mobil-pos')}}">Mobil POS</a></li>
                    <li><a href="{{route('manuel-pos')}}">Manuel POS</a></li>
                    <li><a href="{{route('abonelik-yontemi')}}">Abonelik Yöntemi</a></li>


                </ul>
            </div>
            <div class="col-xl-2 col-md-6 col-6">
                <div class="footerMenuTitle">Hakkımızda</div>
                <ul class="footerMenu">
                    <li><a href="{{route('hakkimizda')}}">Biz Kimiz?</a></li>
                    <li><a href="http://blog.paybull.com/" target="_blank">Blog</a></li>
                    <li><a href="{{route('iletisim')}}">Bize Ulaşın</a></li>
                   
                </ul>
            </div>
            <div class="col-xl-2 col-md-6 col-6">
                <div class="footerMenuTitle">Yasal Koşullar</div>
                <ul class="footerMenu">
                     <li><a href="{{route('kullanici-sozlesmesi')}}">Kullanıcı Sözleşmesi</a></li>
                     <li><a href="{{route('kvkk')}}">KVKK</a></li>
                    <li><a href="{{route('gizlilik-politikasi')}}">Gizlilik Politikası</a></li>
                    <li><a href="{{route('cerez-politikasi')}}">Çerez Politikası</a></li>
                   
                </ul>
            </div>
            <div class="col-xl-2 col-md-6 col-6">
                <div class="footerMenuTitle">Geliştirici</div>
                <ul class="footerMenu">
                      <li><a href="https://developer.paybull.com/tr" target="_blank">Geliştirici Sayfa</a></li>
                    <li><a  href="{{route('entegrasyonlar')}}" target="_blank">Hazır E-ticaret Modülleri</a></li>
                   <!-- <li><a href="http://api.paybull.com/">Api Sistemi</a></li>-->
                   
                </ul>
            </div>
            <div class="col-xl-3 col-md-6 col-12">
                <div class="row g-0">
                    <div class="col-6">
                        <img src="{{asset('assets')}}/frontEnd/img/pci-logo.svg" alt="">
                        <img src="{{asset('assets')}}/frontEnd/img/mb-logo1.svg" alt="">
                    </div>
                    <div class="col-6">
                        <div id="ETBIS">
                            <div id="3151472420317631"><a
                                    href=https://etbis.eticaret.gov.tr/sitedogrulama/3151472420317631
                                    target="_blank">
                                    <img src="{{asset('assets')}}/frontEnd/img/etbis.svg" style='width:100px; height:120px' alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright text-center">
            © 2022. Paybull.com - Tüm Hakları Saklıdır.
        </div>
    </div>
</footer>


<script src="{{asset('assets')}}/frontEnd/js/modalScript.js" ></script>


<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="{{asset('assets')}}/frontEnd/js/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.selectric/1.11.1/jquery.selectric.min.js"></script>
<script src="{{asset('assets')}}/frontEnd/js/script.js"></script>
<script src="{{asset('assets')}}/frontEnd/js/selectScript.js"></script>
    <script>
       const slider = document.querySelector('.sliderOne');
    const sl = new Swiper(slider, {
        slidesPerView: 'auto',
        loop: true,
        speed: 3000,
        spaceBetween: 10,
        slidesPerView: '1',

        autoplay: {
            delay: 4000
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },

    });
    </script>


<script>
    //Phone Mask
    let phoneInput = document.querySelector("#gsm");
    phoneInput.addEventListener("keydown", function (event) {
        if (
            !(
                event.key == "ArrowLeft" ||
                event.key == "ArrowRight" ||
                event.key == "Backspace" ||
                event.key == "Tab"
            )
        ) {
            event.preventDefault();
        }

        let mask = "+90 (111) 111-11-11";

        if (/[0-9\+\ \-\(\)]/.test(event.key)) {
            var currentString = this.value;
            var currentLength = currentString.length;

            if (/[0-9]/.test(event.key)) {
                if (mask[currentLength] == "1") {
                    this.value = currentString + event.key;
                } else {
                    for (var i = currentLength; i < mask.length; i++) {
                        if (mask[i] == "1") {
                            this.value = currentString + event.key;
                            break;
                        }
                        currentString += mask[i];
                    }
                }
            }
        }
    });
</script>
<script>
    //Phone Mask
    let phoneInput = document.querySelector("#gsm");
    phoneInput.addEventListener("keydown", function (event) {
      if (
        !(
          event.key == "ArrowLeft" ||
          event.key == "ArrowRight" ||
          event.key == "Backspace" ||
          event.key == "Tab"
        )
      ) {
        event.preventDefault();
      }

      let mask = "+90 (111) 111-11-11";

      if (/[0-9\+\ \-\(\)]/.test(event.key)) {
        var currentString = this.value;
        var currentLength = currentString.length;

        if (/[0-9]/.test(event.key)) {
          if (mask[currentLength] == "1") {
            this.value = currentString + event.key;
          } else {
            for (var i = currentLength; i < mask.length; i++) {
              if (mask[i] == "1") {
                this.value = currentString + event.key;
                break;
              }
              currentString += mask[i];
            }
          }
        }
      }
    });
  </script>
  <script>
    //Phone Mask
    let phoneInput = document.querySelector("#gsm");
    phoneInput.addEventListener("keydown", function (event) {
        if (
            !(
                event.key == "ArrowLeft" ||
                event.key == "ArrowRight" ||
                event.key == "Backspace" ||
                event.key == "Tab"
            )
        ) {
            event.preventDefault();
        }

        let mask = "+90 (111) 111-11-11";

        if (/[0-9\+\ \-\(\)]/.test(event.key)) {
            var currentString = this.value;
            var currentLength = currentString.length;

            if (/[0-9]/.test(event.key)) {
                if (mask[currentLength] == "1") {
                    this.value = currentString + event.key;
                } else {
                    for (var i = currentLength; i < mask.length; i++) {
                        if (mask[i] == "1") {
                            this.value = currentString + event.key;
                            break;
                        }
                        currentString += mask[i];
                    }
                }
            }
        }
    });
</script>