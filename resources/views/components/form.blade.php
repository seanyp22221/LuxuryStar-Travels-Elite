@props([
    'method' => 'post',
    'action' => '#'
])

<form
    {{$attributes->merge()}}
    method="{{$method}}" action="{{$action}}">
    @csrf

    {{$body}}

</form>
