@extends('admin/layouts.admin')

@section("content")
<h3>About</h1>
<a class href="{{route('admin.admin_about_add')}}">Add About</a><br>
@foreach ($aboutList as $rs)
<tr>
    <td>This is about {{$rs->title}}</td>
    <td><a href="{{route('admin.admin_about_edit',['id' =>$rs->id])}}">Edit</a></td>
    <td><a href="{{route('admin.admin_about_delete',['id' =>$rs->id])}}" onclick="return confirm('Delete ! Are you sure ?')">Delete</a></td><br>
</tr>
@endforeach
@endsection
