<section>
    <div class="px-6 lg:px-12 py-6 bg-darkBlueGray-600">
        <nav class="flex justify-between">
            <div class="flex w-full items-center">
                <a href="#">
                    <img class="h-12" src="{{asset('assets')}}/admin/images/vy.png" alt=""></a>
                <ul class="hidden xl:flex px-4 ml-14 2xl:ml-40 mr-auto">
                    <li class="mr-8 2xl:mr-14">
                        <a class="flex items-center font-heading font-medium text-white hover:text-blueGray-100" href="#">
                            <span>Ana Portal personal</span>
                        </a>
                    </li>
                </ul>
                <div class="hidden xl:flex items-center">

                    <form method="POST" action="{{ route('personal.logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('personal.logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>

                </div>

            </div>
        </nav>
    </div>
</section>