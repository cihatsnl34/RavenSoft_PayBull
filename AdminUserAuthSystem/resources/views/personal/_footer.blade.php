<section>
    <div class="border-t border-gray-100 py-9">
        <div class="container px-4 mx-auto">

        </div>
    </div>
    <div class="bg-blueGray-100 py-8">
        <div class="container px-4 mx-auto">
            <div class="lg:flex lg:justify-between lg:items-center">
                <div class="sm:flex sm:justify-between sm:items-center mb-14 lg:mb-0">
                    <a href="#">
                        <img class="h-12" src="{{asset('assets')}}/admin/images/PaybullLogo.png" alt=""></a>

                </div>
                <ul class="sm:flex">
                    <li>
                        <form method="POST" action="{{ route('personal.logout') }}">
                            @csrf

                            <x-responsive-nav-link :href="route('personal.logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
</div>
