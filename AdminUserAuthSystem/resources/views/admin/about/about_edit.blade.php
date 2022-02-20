@extends('admin/layouts.admin')

@section("content")
<h3>Edit About</h3>
<form role="form" action="{{ route('admin.admin_about_update',['id'=>$AboutData->id]) }}" method="POST">
  @csrf
  <div class="mt-10 py-16 px-6 border-2 border-gray-50 rounded-4xl">
    <div class="max-w-md mx-auto">

      <input class="w-full mb-6 py-5 px-12 text-xl border-2 border-blue-400 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50" id="title" value="{{$AboutData->title}}" name="title" type="text">
      <input class="w-full mb-6 py-5 px-12 text-xl border-2 border-blue-400 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50" type="text"value="{{$AboutData->description}}" name="description" id="description">
      <button type="submit" class="block py-5 px-10 mx-auto w-full md:max-w-max text-xl leading-6 text-white font-medium tracking-tighter font-heading text-center bg-blue-500 hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 rounded-xl">Update About</button>
    </div>
  </div>
</form>
@endsection