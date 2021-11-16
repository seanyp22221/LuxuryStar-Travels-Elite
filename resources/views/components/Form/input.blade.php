@props([
    'title' => 'Unnamed Text Input',
    'label' => false,
    'id' => false,
    'error' => false


])
<div class="flex flex-col">

{{--Label--}}
@if ($label !== false)
    <label

        @if($id !== false)
        for="{{$id}}"
        @endif

        class="block text-sm mb-1 text-left font-medium text-gray-300"> {{$title}}

    </label>
@endif
{{--End Label--}}

@php

    $class = 'block
                      w-full
                      px-4
                      py-2
                      transition
                      duration-500
                      ease-in-out
                      transform
                      border border-gray-200
                      rounded
                          focus:outline-none
                          focus:ring-orange-400
                          focus:ring-offset-gray-900
                          placeholder-gray-400
                          bg-gray-600
                          text-gray-100
                          placeholder-gray-200
                   ';


    if ($error) {
        $class .=' focus:border-transparent
                      focus:ring-2
                       border-red-300
                        focus:ring-red-300
                         focus:ring-offset-red-400';
        }
    else{
        $class .=' focus:border-transparent
                      focus:ring-2
                      focus:ring-white
                      focus:ring-offset-2
                      focus:ring-offset-gray-300';
    }
@endphp


<input {{$attributes->merge(['class' => $class])}}

       @if ($id !== false)
       id="{{$id}}"
    @endif

>
</div>
