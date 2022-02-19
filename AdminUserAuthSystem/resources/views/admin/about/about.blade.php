@extends('admin/layouts.admin')

@section("content")
@foreach ($aboutList as $rs)
<p>This is about {{$rs->title}}</p>
@endforeach
@endsection
