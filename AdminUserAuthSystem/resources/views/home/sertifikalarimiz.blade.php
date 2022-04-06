@extends('home/layouts.home')
@section('content')
<main>
    <section>
        <div class="skew skew-top mr-for-radius">
            <svg class="h-8 md:h-12 lg:h-20 w-full text-gray-50" viewBox="0 0 10 10" preserveAspectRatio="none">
                <polygon fill="currentColor" points="0 0 10 10 0 10"></polygon>
            </svg>
        </div>
        <div class="skew skew-top ml-for-radius">
            <svg class="h-8 md:h-12 lg:h-20 w-full text-gray-50" viewBox="0 0 10 10" preserveAspectRatio="none">
                <polygon fill="currentColor" points="0 10 10 0 10 10"></polygon>
            </svg>
        </div>
        <div class="py-20 bg-gray-50 radius-for-skewed">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap">
                    <div class="mb-6 w-full md:w-1/2 lg:w-1/3 px-3">
                        <div class="py-24 bg-white rounded shadow text-center">
                            <img class="mx-auto mb-8 w-24 h-24 rounded-full object-cover"
                                src="https://images.unsplash.com/photo-1580852300654-03c803a14e24?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=600&amp;q=80"
                                alt="">
                            <h4 class="mb-2 text-2xl font-bold font-heading">Danny Bailey</h4>
                            <p class="text-gray-500">CEO</p>
                        </div>
                    </div>
                    <div class="mb-6 w-full md:w-1/2 lg:w-1/3 px-3">
                        <div class="py-24 bg-white rounded shadow text-center">
                            <img class="mx-auto mb-8 w-24 h-24 rounded-full object-cover"
                                src="https://images.unsplash.com/photo-1559548331-f9cb98001426?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=600&amp;q=80"
                                alt="">
                            <h4 class="mb-2 text-2xl font-bold font-heading">Ian Brown</h4>
                            <p class="text-gray-500">Head of Development</p>
                        </div>
                    </div>
                    
                   
                    
                    
                </div>
            </div>
        </div>
        <div class="skew skew-bottom mr-for-radius">
            <svg class="h-8 md:h-12 lg:h-20 w-full text-gray-50" viewBox="0 0 10 10" preserveAspectRatio="none">
                <polygon fill="currentColor" points="0 0 10 0 0 10"></polygon>
            </svg>
        </div>
        <div class="skew skew-bottom ml-for-radius">
            <svg class="h-8 md:h-12 lg:h-20 w-full text-gray-50" viewBox="0 0 10 10" preserveAspectRatio="none">
                <polygon fill="currentColor" points="0 0 10 0 10 10"></polygon>
            </svg>
        </div>
    </section>
</main>
@endsection