@props([
    'title' => false,
    'type' => 'success',
])

@php

$class = 'px-2 py-1.5 rounded-2xl font-semibold w-full ';

if ($type === 'success') {
$class.= 'bg-green-600 text-green-200';
}

if ($type === 'warning'){
$class.= 'bg-yellow-600 text-yellow-200';
}

if ($type === 'error'){
$class.= 'bg-red-600 text-red-200';
}

@endphp
<td class="px-5 py-5 border-b border-gray-400 bg-gray-800  text-center text-sm">
    <span {{$attributes->merge(['class' => $class])}}>{{$title}}</span>
</td>
