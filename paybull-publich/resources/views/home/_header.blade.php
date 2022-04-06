<header id="header">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between header">
            <div class="header-left d-flex align-items-center">
                <div class="logo">
                    <a href="{{route('home')}}">
                        <img src="{{asset('assets')}}/frontEnd/img/logo.svg" alt="">
                    </a>
                </div>
                <nav class="navMenu">
                    <ul class="navMenu__list d-flex align-items-center">
                        <li class="d-flex align-items-center">
                            <span class="me-2">Ürünler</span>
                            <img src="{{asset('assets')}}/frontEnd/img/bottom-arrow.svg" alt="" />
                            <ul>
                                <li><a href="{{route('sanal-pos')}}">Sanal POS</a></li>
                                <li><a href="{{route('link-odeme')}}">Link ile Ödeme Alma</a></li>
                                <li><a href="{{route('mobil-pos')}}">Mobil POS</a></li>
                                <li><a href="{{route('manuel-pos')}}">Manuel POS</a></li>
                                 <li><a href="{{route('abonelik-yontemi')}}">Abonelik Yöntemi</a></li>

                            </ul>
                        </li>
                       
                        <li class="d-flex align-items-center">
                            <span class="me-2"
                                onclick="window.location.href='{{route('hakkimizda')}}'">Hakkımızda</a></span>
                            
                        </li>
                        <li><a href="{{route('is-ortaklari')}}">İş Ortaklıkları</a></li>
                        <li><a href="http://blog.paybull.com/" >Blog</a></li>
                        <li><a href="{{route('iletisim')}}">İletişim</a></li>
                    </ul>
                </nav>
                <div class="navMenu-mobile">
                    <span class="mb-3 text-sm font-bold  text-gray-400 ">ÜRÜNLER</span>
                    <div class="d-md-grid">
                        <ul>
                            <li ><a href="{{route('sanal-pos')}}">Sanal POS</a></li>
                            <li><a href="{{route('link-odeme')}}">Link ile Ödeme Alma</a></li>
                            <li><a href="{{route('mobil-pos')}}">Mobil POS</a></li>
                            <li><a href="{{route('manuel-pos')}}">Manuel POS</a></li>
                            <li><a href="{{route('abonelik-yontemi')}}">Abonelik Yöntemi</a></li>
                        </ul>
                    </div>
                    <hr>
                    <br>
                     <span class="mb-3 text-sm font-bold  text-gray-400">BİZ KİMİZ?</span>
                    <div class="d-md-grid">
                        <ul>  
                        <li ><a href="{{route('hakkimizda')}}">Hakkımızda</a></li>
                        <li><a href="{{route('is-ortaklari')}}">İş Ortaklıkları</a></li>
                        <li><a href="http://blog.paybull.com/">Blog</a></li>
                        <li><a href="{{route('iletisim')}}">İletişim</a></li>
                        </ul>
                    </div>
                

                    <footer class="navMenuFooterMobile">

                        <div class="d-flex align-items-center justify-content-center">
                            <a href="https://app.paybull.com/merchant/login" class="shopping-login  me-3">
                                <img class="me-2" src="{{asset('assets')}}/frontEnd/img/magaza.svg" alt="" />
                                <span onclick="window.location.href='login.html'">Mağaza Girişi</span>
                            </a>
                            <ul class="lang d-flex align-items-center">
                                <li class="lang-click">
                                    <a href="#">
                                        <img class="me-2" src="{{asset('assets')}}/frontEnd/img/turkey-icon.svg" alt="" />
                                        <span> TR</span>
                                    </a>
                                    <ul class="lang-open">
                                        <li>
                                            <a href="english.html">
                                                <img class="me-2" src="{{asset('assets')}}/frontEnd/img/en.png" alt="" />
                                                <span>EN</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <img src="{{asset('assets')}}/frontEnd/img/bottom-arrow.svg" alt="" />
                            </ul>
                        </div>
                    </footer>

                </div>
            </div>
            <div class="header-right d-flex align-items-center">
                <a href="https://app.paybull.com/merchant/login" class="shopping-login d-flex align-items-center me-3">
                    <img class="me-2" src="{{asset('assets')}}/frontEnd/img/magaza.svg" alt="" />
                    <span>Mağaza Girişi</span>
                </a>
                <ul class="lang d-flex align-items-center">
                    <li class="lang-click">
                        <a href="#">
                            <img class="me-2" src="{{asset('assets')}}/frontEnd/img/turkey-icon.svg" alt="" />
                           <span>TR</span>
                        </a>
                        <ul class="lang-open">
                            <li>
                                <a href="#">
                                    <img class="me-2" src="{{asset('assets')}}/frontEnd/img/en.png" alt="" />
                                 <span>EN</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <img src="{{asset('assets')}}/frontEnd/img/bottom-arrow.svg" alt="" />
                </ul>
            </div>
            <div class="mobileMenu-icon">
                <img src="{{asset('assets')}}/frontEnd/img/mobile-menu.svg" alt="">
            </div>
        </div>
    </div>
</header>