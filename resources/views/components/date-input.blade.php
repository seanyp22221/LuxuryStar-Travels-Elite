@props([
    'name' => false,
    'label' => false,
    'title' => 'Unnamed Date Input',
    'id' => false,
])
{{--Label--}}
@if ($label !== false)
    <label {{$attributes->merge()}}

           @if($id !== false)
           for="{{$id}}"
           @endif

           class="block text-sm font-medium text-neutral-600"> {{$title}}

    </label>
@endif
{{--End Label--}}
<input {{$attributes->merge(['class' => 'block
                          w-full
                          px-5
                          py-3
                          text-base text-neutral-600
                          placeholder-gray-300
                          transition
                          duration-500
                          ease-in-out
                          transform
                          border border-transparent
                          rounded-lg
                          bg-gray-50
                          text-gray-400
                          focus:outline-none
                          focus:border-transparent
                          focus:ring-2
                           focus:ring-gray-400
                          focus:ring-offset-2
                          focus:ring-offset-gray-900
                          dark:bg-gray-600
                          dark:text-gray-100

                          '])}} name="{{$name}}" type="date">
