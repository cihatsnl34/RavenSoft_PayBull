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
      <div class="flex flex-wrap justify-center items-center">
        <div class="mb-6 w-full md:w-1/2 lg:w-1/3 px-3">
          <div class=" bg-white rounded shadow text-center">
            <img class="mx-auto mb-8 w-full h-full object-cover" id="sertifikaImg1" src="{{asset('assets')}}/frontEnd/img/sertifika/sertifika1.jpeg" alt="">
          </div>
        </div>
        <div class="mb-6 w-full md:w-1/2 lg:w-1/3 px-3">
          <div class=" bg-white rounded shadow text-center">
            <img class="mx-auto mb-8 w-full h-full object-cover" id="sertifikaImg2" src="{{asset('assets')}}/frontEnd/img/sertifika/sertifika2.jpeg" alt="">
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

  <!-----MODALS------>
  <div id="sertifika1Modal" class="hidden" >
   <div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
    <div class="relative inline-block  bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-10 sm:align-middle sm:max-w-lg sm:w-full">
      <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        <div class="sm:flex sm:justify-end sm:flex-col sm:items-end">
           <button onclick="closeModel('sertifika1Modal')" class="bg-red-600 m-2 w-8 h-8 rounded-full text-white" >x</button>
           <img class="mx-auto mb-8 w-full h-full object-cover" src="{{asset('assets')}}/frontEnd/img/sertifika/sertifika1.jpeg" alt="">
        </div>
      </div>
    </div>
  </div>
   </div>
   </div>


  <div id="sertifika2Modal" class="hidden" >
   <div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
    <div class="relative inline-block  bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-10 sm:align-middle sm:max-w-lg sm:w-full">
      <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        <div class="sm:flex sm:justify-end sm:flex-col sm:items-end">
        <button onclick="closeModel('sertifika2Modal')" class="bg-red-600 m-2 w-8 h-8 rounded-full text-white" >x</button>
           <img class="mx-auto mb-8 w-full h-full object-cover" src="{{asset('assets')}}/frontEnd/img/sertifika/sertifika2.jpeg" alt="">
        </div>
      </div>
    </div>
  </div>
   </div>
   </div>
    
</section>
</main>
@endsection