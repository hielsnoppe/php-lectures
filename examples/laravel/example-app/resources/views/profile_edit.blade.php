@extends('base')
@section('content')
<h1>Update Profile</h1>
{{ $profile->name }}
<img src="{{ $profile->image }}">
<form action="/profile/edit" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="image">
    <input type="submit" value="Submit">
</form>
@endsection