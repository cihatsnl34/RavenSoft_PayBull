@extends('personal/layouts.app')
@section("content")

<div class="max-w-4xl p-6 sm:p-10 mx-auto bg-coolGray-50 rounded-lg">
    <form role="form" action="{{ route('personal.personal_application_update',['id'=>$ApplicationData->id]) }}" method="POST">
        @csrf
      <div class="flex flex-wrap -mx-4 mb-8">
        <div class="w-full md:w-1/2 px-4 mb-8 md:mb-0">
          <label class="block mb-2 text-coolGray-800 font-medium leading-6" for="">Name</label>
          <input value="{{$ApplicationData->fullname}}" class="block h-12 w-full py-2 px-3 appearance-none border border-coolGray-200 rounded-lg shadow-md text-coolGray-300 leading-6 placeholder-coolGray-300 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50" name = "fullname" type="text" placeholder="Your Name"></div>
        <div class="w-full md:w-1/2 px-4">
          <label class="block mb-2 text-coolGray-800 font-medium leading-6" for="">Email</label>
          <input value="{{$ApplicationData->email}}" class="block h-12 w-full py-2 px-3 appearance-none border border-coolGray-200 rounded-lg shadow-md text-coolGray-300 leading-6 placeholder-coolGray-300 focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-green-500 focus:ring-opacity-50" name = "email" type="email" placeholder="Your Email"></div>
      </div>
      <div class="mb-8">
        <label class="block mb-2 text-coolGray-800 font-medium leading-6" for="">Card Details</label>
        <input value="{{$ApplicationData->cardDetails}}" class="block h-12 w-full py-2 px-3 appearance-none border border-coolGray-200 rounded-lg shadow-md text-coolGray-300 leading-6 placeholder-coolGray-300 focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-green-500 focus:ring-opacity-50" name = "cardDetails" type="text" placeholder="XXXX-XXXX-XXXX-XXXX"></div>
      <div class="flex flex-wrap -mx-4 mb-8">
        <div class="w-full md:w-1/3 px-4 mb-8 md:mb-0">
          <label class="block mb-2 text-coolGray-800 font-medium leading-6" for="">Street Number</label>
          <input value="{{$ApplicationData->streetNumber}}" name = "streetNumber" class="block h-12 w-full py-2 px-3 appearance-none border border-coolGray-200 rounded-lg shadow-md text-coolGray-300 leading-6 placeholder-coolGray-300 focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-green-500 focus:ring-opacity-50" type="text" placeholder="Your Street Number"></div>
        <div class="w-full md:w-1/3 px-4 mb-8 md:mb-0">
          <label class="block mb-2 text-coolGray-800 font-medium leading-6" for="">City</label>
          <input value="{{$ApplicationData->city}}" name = "city" class="block h-12 w-full py-2 px-3 appearance-none border border-coolGray-200 rounded-lg shadow-md text-coolGray-300 leading-6 placeholder-coolGray-300 focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-green-500 focus:ring-opacity-50" type="text" placeholder="Your City"></div>
        <div class="w-full md:w-1/3 px-4">
          <label class="block mb-2 text-coolGray-800 font-medium leading-6" for="">Country</label>
          <input value="{{$ApplicationData->country}}" name = "country" class="block h-12 w-full py-2 px-3 appearance-none border border-coolGray-200 rounded-lg shadow-md text-coolGray-300 leading-6 placeholder-coolGray-300 focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-green-500 focus:ring-opacity-50" type="text" placeholder="Your Country"></div>
      </div>
      <div class="mb-8">
        <label class="block mb-2 text-coolGray-800 font-medium leading-6" for="">Company Name</label>
        <input value="{{$ApplicationData->companyName}}" name = "companyName" class="block h-12 w-full py-2 px-3 appearance-none border border-coolGray-200 rounded-lg shadow-md text-coolGray-300 leading-6 placeholder-coolGray-300 focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-green-500 focus:ring-opacity-50" type="text" placeholder="Your Company Name"></div>
      <div class="mb-8">
        <div class="flex mb-3 flex-wrap justify-between items-center">
          
          
        </div>
        <div class="flex mb-4 flex-wrap justify-between items-center">
          
          
        </div>
        <div class="flex flex-wrap justify-between items-center">
          
          
        </div>
      </div>
      <button type="submit" class="block py-5 px-10 mx-auto w-full md:max-w-max text-xl leading-6 text-white font-medium tracking-tighter font-heading text-center bg-blue-500 hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 rounded-xl">Edit</button>
    </form>
  </div>
@endsection