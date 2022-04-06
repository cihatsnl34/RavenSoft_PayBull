<footer>
    <div class="container">
        <h2 class="section-title text-center footer-title">
            Sanal pos ile ödeme almanın kolay yolu!
        </h2>
        <p class="section-text text-center footer-text">
            PayBull Sanal POS ile bankalarla tek tek anlaşmanıza gerek kalmaz!
        </p>
        <div class="text-center">
            <a href="{{route('basvuru')}}" class="why-btn footer-btn">
                Hemen Başvuru Yap
                <img class="ps-2 d-inline" src="{{asset('assets')}}/frontEnd/img/document-text.svg" alt="" />
            </a>
        </div>
        <div class="row align-items-center footerAdd">
            <div class="col-md-6 col-12">
                <div class="d-md-flex align-items-center justify-content-between">
                    <a href="#"><img src="{{asset('assets')}}/frontEnd/img/footer-logo.svg" alt="" /></a>
                    <div class="footerAdress my-md-0 my-3 flex flex-row items-center">
                        <img class="px-2" src="{{asset('assets')}}/frontEnd/img/map.svg" alt="" />
                        Altunizade, Kuşbakışı Cd. , 34662 Üsküdar/İstanbul
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="footerCall flex flex-row items-center">
                        <img class="px-2" src="{{asset('assets')}}/frontEnd/img/customer-service-2-line.svg" alt="" />
                        0850 241 84 18
                    </div>
                    <nav class="footerNav">
                        <ul class="d-flex align-items-center">
                            <li>
                                <a href="#">
                                    <img src="{{asset('assets')}}/frontEnd/img/facebook-circle-line.svg" alt="" />
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{asset('assets')}}/frontEnd/img/twitter-line.svg" alt="" />
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{asset('assets')}}/frontEnd/img/instagram-line.svg" alt="" />
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{asset('assets')}}/frontEnd/img/linkedin-box-line.svg" alt="" />
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row justify-content-around">
            <div class="col-xl-2 col-md-6 col-12">
                <div class="footerMenuTitle">Ürünlerimiz</div>
                <ul class="footerMenu">
                    <li><a href="{{route('sanal-pos')}}">Sanal Pos</a></li>
                    <li><a href="{{route('link-odeme')}}">Link ile Ödeme Alma</a></li>
                    <li><a href="{{route('mobil-pos')}}">Mobil Pos</a></li>
                    <li><a href="{{route('manuel-pos')}}">Manuel Pos</a></li>
                </ul>
            </div>
            <div class="col-xl-2 col-md-6 col-12">
                <div class="footerMenuTitle">Hakkımızda</div>
                <ul class="footerMenu">
                    <li><a href="{{route('hakkimizda')}}">Biz Kimiz?</a></li>
                    <li><a href="{{route('sertifikalarimiz')}}">Sertifikalarımız</a></li>
                    <li><a href="http://blog.paybull.com/">Blog</a></li>
                    <li><a href="{{route('iletisim')}}">Bize Ulaşın</a></li>
                    <li><a href="https://developer.paybull.com/tr">Geliştirici Sayfa</a></li>
                </ul>
            </div>
            <div class="col-xl-2 col-md-6 col-12">
                <div class="footerMenuTitle">Yasal Koşullar</div>
                <ul class="footerMenu">
                    <li><a href="#">Gizlilik Politikası</a></li>
                    <li><a href="#">Kvkk</a></li>
                    <li><a href="#">Çerez Politikası</a></li>
                    <li><a href="#">Kullanıcı Sözleşmesi</a></li>
                </ul>
            </div>
            <div class="col-xl-2 col-md-6 col-12">
                <div class="footerMenuTitle">Entegrasyon</div>
                <ul class="footerMenu">
                    <li><a href="{{route('entegrasyonlar')}}">Hazır E-ticaret Modülleri</a></li>
                    <li><a href="http://api.paybull.com/">Api Sistemi</a></li>
                </ul>
            </div>
            <div class="col-xl-3 col-md-6 col-">
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





<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="{{asset('assets')}}/frontEnd/js/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.selectric/1.11.1/jquery.selectric.min.js"></script>
<script src="{{asset('assets')}}/frontEnd/js/script.js"></script>
<script src="{{asset('assets')}}/frontEnd/js/selectScript.js"></script>
    <script>
        const sliderOne = new Swiper(".sliderOne", {
            slidesPerView: 1,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
        const sliderTwo = new Swiper(".sliderTwo", {
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                500: {
                    slidesPerView: 1
                },
                998: {
                    slidesPerView: 2
                },
                1200: {
                    slidesPerView: 3
                }
            },
        });
    </script>

<script>
    const sliderOne = new Swiper(".sliderOne", {
        slidesPerView: 1,
        speed: 1200,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
    const sliderTwo = new Swiper(".sliderTwo", {
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            500: {
                slidesPerView: 1
            },
            998: {
                slidesPerView: 2
            },
            1200: {
                slidesPerView: 3
            }
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