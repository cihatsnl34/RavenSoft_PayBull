<section>
  <div class="px-6 lg:px-12 py-6 bg-darkBlueGray-600">
    <nav class="flex justify-between">
      <div class="flex w-full items-center">
        <a href="#">
          <img class="h-12" src="{{asset('assets')}}/admin/images/vy.png" alt=""></a>
        <ul class="hidden xl:flex px-4 ml-14 2xl:ml-40 mr-auto">
          <li class="mr-8 2xl:mr-14">
            <a class="flex items-center font-heading font-medium text-white hover:text-blueGray-100" href="{{ route('admin.dashboard') }}">
              <span>Ana Portal</span>
            </a>
          </li>
          <li class="mr-6 2xl:mr-12">
            <a class="flex items-center font-heading font-medium text-white hover:text-blueGray-100" href="{{route('admin.admin_personals')}}">
              <span>Personel</span>
            </a>
          </li>
          <li class="mr-6 2xl:mr-12">
            <a class="flex items-center font-heading font-medium text-white hover:text-blueGray-100" href="{{route('admin.admin_application')}}">
              <span>Başvurular</span>
              <!--<svg width="8" height="5" viewbox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.97291 0.193232C7.20854 -0.0644107 7.58938 -0.0644107 7.82328 0.193232C8.05804 0.450875 8.05978 0.867141 7.82328 1.12478L4.42529 4.80677C4.19053 5.06441 3.81056 5.06441 3.57406 4.80677L0.176073 1.12478C-0.0586909 0.868102 -0.0586909 0.450875 0.176073 0.193232C0.411706 -0.0644107 0.792544 -0.0644107 1.02644 0.193232L4.00098 3.21284L6.97291 0.193232Z" fill="#8C949F"></path>
              </svg>
              -->
            </a>
          </li>
         <!-- <li class="mr-6 2xl:mr-12">
            <a class="flex items-center font-heading font-medium text-white hover:text-blueGray-100" href="{{route('admin.admin_about')}}">
              <span>Hakkımızda</span>
            </a>
          </li>
          <li class="mr-6 2xl:mr-12">
            <a class="flex items-center font-heading font-medium text-white hover:text-blueGray-100" href="#">
              <span>Ayarlar</span>
              <svg width="8" height="5" viewbox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.97291 0.193232C7.20854 -0.0644107 7.58938 -0.0644107 7.82328 0.193232C8.05804 0.450875 8.05978 0.867141 7.82328 1.12478L4.42529 4.80677C4.19053 5.06441 3.81056 5.06441 3.57406 4.80677L0.176073 1.12478C-0.0586909 0.868102 -0.0586909 0.450875 0.176073 0.193232C0.411706 -0.0644107 0.792544 -0.0644107 1.02644 0.193232L4.00098 3.21284L6.97291 0.193232Z" fill="#8C949F"></path>
              </svg>
              
            </a>
          </li>
          <li class="mr-6 2xl:mr-12">
            <a class="flex items-center font-heading font-medium text-white hover:text-blueGray-100" href="#">
              <span>Canlı Destek</span>
            </a>
          </li>-->
          <li class="mr-6 2xl:mr-12">
            <a class="flex items-center font-heading font-medium text-white hover:text-blueGray-100" href="{{route('admin.logout')}}">
              <span>Çıkış Yap</span>
            </a>
          </li>



        </ul>
        <div class="hidden xl:flex items-center">
          <a class="relative inline-block text-darkBlueGray-300 hover:text-darkBlueGray-400" href="#">
            <!--
            <div class="absolute bottom-0 right-0 flex items-center justify-center -mr-2 -mb-1 w-4 h-4 text-xs text-white bg-red-500 rounded-full">1</div>
              <svg width="20" height="23" viewbox="0 0 20 23" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M17.5219 18.016H2.70312V8.5933C2.70313 6.719 3.48375 4.92147 4.87328 3.59614C6.2628 2.27081 8.1474 1.52625 10.1125 1.52625C12.0776 1.52625 13.9622 2.27081 15.3517 3.59614C16.7412 4.92147 17.5219 6.719 17.5219 8.5933V18.016Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              <path d="M1 18.0121H19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              <path d="M8.87891 22H10.8789" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            -->
          </a>
          <div class="flex-shrink-0 w-px h-12 bg-darkBlueGray-400 bg-opacity-50 ml-9 mr-10"></div>
          <div class="dropdown">
            <div class="text-right">
              <span class="block font-heading font-medium leading-tight text-white">{{session('username')}}</span>
              <span class="font-heading font-medium text-xs text-darkBlueGray-300 uppercase leading-tight">Yönetici</span>

            </div>
            

            <!--
            <svg width="8" height="5" viewbox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M6.97291 0.193232C7.20854 -0.0644107 7.58938 -0.0644107 7.82328 0.193232C8.05804 0.450875 8.05978 0.867141 7.82328 1.12478L4.42529 4.80677C4.19053 5.06441 3.81056 5.06441 3.57406 4.80677L0.176073 1.12478C-0.0586909 0.868102 -0.0586909 0.450875 0.176073 0.193232C0.411706 -0.0644107 0.792544 -0.0644107 1.02644 0.193232L4.00098 3.21284L6.97291 0.193232Z" fill="#8C949F"></path>
            </svg>
            -->

          </div>
        </div>
      </div>
      <button class="navbar-burger self-center xl:hidden text-white">
        <svg width="25" height="16" viewbox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect width="25" height="2" fill="currentColor"></rect>
          <rect y="14" width="25" height="2" fill="currentColor"></rect>
        </svg>
      </button>
    </nav>
  </div>
  <!-- Menu kısmı  -->
  @include('admin._topmenu')

  <div class="navbar-menu hidden fixed top-0 left-0 bottom-0 w-full sm:w-5/6 max-w-max z-50">
    <div class="navbar-backdrop fixed inset-0 bg-darkGray-800 opacity-80"></div>
    <nav class="relative flex flex-col py-20 px-10 h-full w-full bg-darkBlueGray-500 overflow-y-auto"><button class="navbar-close absolute top-10 right-10">
        <svg width="14" height="13" viewbox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
          <line x1="13.495" y1="0.494975" x2="1.49498" y2="12.495" stroke="#326BFF" stroke-width="1.4"></line>
          <line x1="12.505" y1="12.495" x2="0.505026" y2="0.494976" stroke="#326BFF" stroke-width="1.4"></line>
        </svg></button>
      <a class="inline-block mb-12" href="#">
        <img class="h-12" src="{{asset('assets')}}/admin/images/vy.png" alt=""></a>
      <ul class="mb-16">
        <li>
          <a class="flex items-center pl-10 pr-24 py-4 bg-white rounded-3xl font-medium font-heading" href="{{ route('admin.dashboard') }}">
            <img class="mr-5" src="{{asset('assets')}}/admin/uinel-assets/elements/dashboard-navigations/dashboards.svg" alt=""><span>Dashboard</span>
          </a>
        </li>
       
      
      <ul class="mb-16">
       
        <li>
          <a class="flex items-center pl-10 pr-24 py-4 text-white bg-transparent rounded-3xl font-medium font-heading" href="{{route('admin.admin_personals')}}">
            <img class="mr-5" src="{{asset('assets')}}/admin/uinel-assets/elements/dashboard-navigations/document.svg" alt=""><span>Personel</span>
          </a>
        </li>
        <li>
          <a class="flex items-center pl-10 pr-24 py-4 text-white bg-transparent rounded-3xl font-medium font-heading" href="{{route('admin.admin_application')}}">
            <img class="mr-5" src="{{asset('assets')}}/admin/uinel-assets/elements/dashboard-navigations/document.svg" alt=""><span>Başvurular</span>
          </a>
        </li>
      </ul>
     
      
    </nav>
  </div>
</section>