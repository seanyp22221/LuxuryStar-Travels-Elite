@extends('layouts.app')
@section('title_section')
Dashboard
@endsection

@section('content')
@if (!Auth::guest())
<div class="text-blue-500 font-medium">
    Welcome to dashboard
</div>
@else
<div class="text-red-500 font-medium">
    <a href="/livelogin"> You are not logged in. Click here to login </a>
</div>
@endif
@endsection