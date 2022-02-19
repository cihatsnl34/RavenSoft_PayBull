@extends('admin/layouts.admin')

@section("content")
<form role="form" action="{{ route('admin.admin_about_add') }}" method="POST">
    @csrf
    <div class="mt-10 py-16 px-6 border-2 border-gray-50 rounded-4xl">
      <div class="max-w-md mx-auto">

        <input class="w-full mb-6 py-5 px-12 text-xl border-2 border-blue-400 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50" id="title" name="title" type="text">
        <input class="w-full mb-6 py-5 px-12 text-xl border-2 border-blue-400 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50" type="text" placeholder="description" name="description" id="description">
        <button type="submit" class="block py-5 px-10 mx-auto w-full md:max-w-max text-xl leading-6 text-white font-medium tracking-tighter font-heading text-center bg-blue-500 hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 rounded-xl"><a href="#">Add About</a></button>
      </div>
    </div>
  </form>
@endsection
