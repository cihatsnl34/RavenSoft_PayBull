@extends('admin/layouts.admin')

@section("content")

<div class="max-w-4xl p-6 sm:p-10 mx-auto bg-coolGray-50 rounded-lg">
  <h1>Şirket ismi : {{$data->companyName}}</h1><br><br>
    <form action="{{ route('admin.admin_documents_add',['applications_id'=>$data->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="flex flex-wrap -mx-4 mb-8">
        <div class="w-full md:w-1/2 px-4 mb-8 md:mb-0">
          <label class="block mb-2 text-coolGray-800 font-medium leading-6" for="">Firma Yetkilisinin Arkalı Önlü Kimlik Fotokopisi</label>
          <input class="block h-12 w-full py-2 px-3 appearance-none border border-coolGray-200 rounded-lg shadow-md text-coolGray-300 leading-6 placeholder-coolGray-300 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50" name = "firmaYetkiliKimlik" type="file" placeholder="Dosya Seçilmedi"></div>
        <div class="w-full md:w-1/2 px-4">
          <label class="block mb-2 text-coolGray-800 font-medium leading-6" for="">Diğer Firma Yetkilisinin Arkalı Önlü Kimlik Fotokopisi</label>
          <input class="block h-12 w-full py-2 px-3 appearance-none border border-coolGray-200 rounded-lg shadow-md text-coolGray-300 leading-6 placeholder-coolGray-300 focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-green-500 focus:ring-opacity-50" name = "digerYetkiliKimlik" type="file" placeholder="Dosya Seçilmedi"></div>
      </div>
      <div class="mb-8">
        <label class="block mb-2 text-coolGray-800 font-medium leading-6" for="">Adres Belgesi</label>
        <input class="block h-12 w-full py-2 px-3 appearance-none border border-coolGray-200 rounded-lg shadow-md text-coolGray-300 leading-6 placeholder-coolGray-300 focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-green-500 focus:ring-opacity-50" name = "adresBelgesi" type="file" placeholder="Dosya Seçilmedi"></div>
      <div class="flex flex-wrap -mx-4 mb-8">
        <div class="w-full md:w-1/3 px-4 mb-8 md:mb-0">
          <label class="block mb-2 text-coolGray-800 font-medium leading-6" for="">İmza Sirküleri</label>
          <input name = "imzaSirküleri" class="block h-12 w-full py-2 px-3 appearance-none border border-coolGray-200 rounded-lg shadow-md text-coolGray-300 leading-6 placeholder-coolGray-300 focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-green-500 focus:ring-opacity-50" type="file" placeholder="Dosya Seçilmedi"></div>
        <div class="w-full md:w-1/3 px-4 mb-8 md:mb-0">
          <label class="block mb-2 text-coolGray-800 font-medium leading-6" for="">Vergi Levhası</label>
          <input name = "vergiLevhasi" class="block h-12 w-full py-2 px-3 appearance-none border border-coolGray-200 rounded-lg shadow-md text-coolGray-300 leading-6 placeholder-coolGray-300 focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-green-500 focus:ring-opacity-50" type="file" placeholder="Dosya Seçilmedi"></div>
      </div>
      
      <button type="submit" class="block py-5 px-10 mx-auto w-full md:max-w-max text-xl leading-6 text-white font-medium tracking-tighter font-heading text-center bg-blue-500 hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 rounded-xl">Send</button>
    </form>
  </div>
@endsection