@extends('personal/layouts.app')
@section("content")

<div class="max-w-4xl p-6 sm:p-10 mx-auto bg-coolGray-50 rounded-lg">
    <form role="form" action="{{ route('personal.personal_application_update',['id'=>$ApplicationData->id]) }}" method="POST">
        @csrf
        <div class="flex flex-wrap -mx-4 mb-8">
          <div class="w-full md:w-1/2 px-4 mb-8 md:mb-0">
            <label class="block mb-2 text-coolGray-800 font-medium leading-6" for="">Name</label>
            <input required value="{{$ApplicationData->fullname}}" class="block h-12 w-full py-2 px-3 appearance-none border border-coolGray-200 rounded-lg shadow-md text-coolGray-300 leading-6 placeholder-coolGray-300 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50" name = "fullname" type="text" placeholder="Your Name"></div>
          <div class="w-full md:w-1/2 px-4">
            <label class="block mb-2 text-coolGray-800 font-medium leading-6" for="">Email</label>
            <input required value="{{$ApplicationData->email}}" class="block h-12 w-full py-2 px-3 appearance-none border border-coolGray-200 rounded-lg shadow-md text-coolGray-300 leading-6 placeholder-coolGray-300 focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-green-500 focus:ring-opacity-50" name = "email" type="email" placeholder="Your Email"></div>
        </div>
        <div class="mb-8">
          <label class="block mb-2 text-coolGray-800 font-medium leading-6" for="">Company Name</label>
          <input required value="{{$ApplicationData->companyName}}" name = "companyName" class="block h-12 w-full py-2 px-3 appearance-none border border-coolGray-200 rounded-lg shadow-md text-coolGray-300 leading-6 placeholder-coolGray-300 focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-green-500 focus:ring-opacity-50" type="text" placeholder="Your Company Name"></div>
          <div class="mb-8">
            <label class="block mb-2 text-coolGray-800 font-medium leading-6" for="">Phone</label>
            <input required value="{{$ApplicationData->phone}}" name = "phone" class="block h-12 w-full py-2 px-3 appearance-none border border-coolGray-200 rounded-lg shadow-md text-coolGray-300 leading-6 placeholder-coolGray-300 focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-green-500 focus:ring-opacity-50" type="tel" placeholder="Phone">
          </div>
  
          <div class="mb-8">
            <label class="block mb-2 text-coolGray-800 font-medium leading-6" for="">Web Site</label>
            <input required value="{{$ApplicationData->webSite}}" name = "webSite" class="block h-12 w-full py-2 px-3 appearance-none border border-coolGray-200 rounded-lg shadow-md text-coolGray-300 leading-6 placeholder-coolGray-300 focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-green-500 focus:ring-opacity-50" type="text" placeholder="Web Site">
          </div>
          <div class="mb-8">
            <label class="block mb-2 text-coolGray-800 font-medium leading-6" for="">Ciro</label>
            <input required value="{{$ApplicationData->ciro}}" name = "ciro" class="block h-12 w-full py-2 px-3 appearance-none border border-coolGray-200 rounded-lg shadow-md text-coolGray-300 leading-6 placeholder-coolGray-300 focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-green-500 focus:ring-opacity-50" type="text" placeholder="ciro">
          </div>
          <div class="mb-8">
            <label class="block mb-2 text-coolGray-800 font-medium leading-6" for="">Platform</label>
            <div class="integrations_item-select">
              <select class="selectric-select selectsec" name="platform" id="nicer-select-id" required>
                  <option value="{{$ApplicationData->platform}}" selected>{{$ApplicationData->platform}}</option>
                  <option value="Website">Website</option>
                  <option value="İnstagram Satışı">İnstagram Satışı</option>
                  <option value="Linkle Ödeme">Linkle Ödeme</option>
                  <option value="Diğer">Diğer</option>
              </select>
          </div> 
        </div> 
        <button type="submit" class="block py-5 px-10 mx-auto w-full md:max-w-max text-xl leading-6 text-white font-medium tracking-tighter font-heading text-center bg-blue-500 hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 rounded-xl">Edit</button>
       </form>
  </div>
@endsection