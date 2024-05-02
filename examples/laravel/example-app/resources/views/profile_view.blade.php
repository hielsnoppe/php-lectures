@extends('base')
@section('content')
<h1>View Profile</h1>
{{ $profile->name }}
<img src="{{ $profile->image }}">
<a href="/profile/edit">Edit profile</a>
@endsection