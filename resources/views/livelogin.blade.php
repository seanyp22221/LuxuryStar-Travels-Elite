@extends('layouts.app')
@section('title_section')
Test Livewire Login
@endsection

@section('content')
<div>
    @livewire('login-controller')

    @livewireScripts
</div>
@endsection