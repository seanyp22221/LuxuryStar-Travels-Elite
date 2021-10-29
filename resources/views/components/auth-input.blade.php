@props([
    'title' => 'Unnamed Text Input',
    'name' => false,
    'label' => true,
    'id' => false,
    'placeholder' => false,
    'value' => false,

])

{{--Label--}}
@if ($label !== false)
    <label {{$attributes->merge()}}

        @if($id !== false)
           for="{{$id}}"
           @endif

           class="block text-sm mb-1 font-medium text-neutral-600 dark:text-gray-300"> {{$title}}

    </label>
@endif
{{--End Label--}}




    <input {{$attributes->merge(['class' => 'block
                          w-full
                          form-input
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
                          focus:outline-none
                          focus:border-transparent
                          focus:ring-2
                          focus:ring-gray-400
                          focus:ring-offset-2
                          focus:ring-offset-gray-900
                          placeholder-gray-400
                          dark:bg-gray-600
                          dark:text-gray-100
                          dark:placeholder-gray-200

                          '])}}

        @if ($id !== false)
        id="{{$id}}"
        @endif

        @if ($value !== false)
        value="{{$value}}"
        @endif


        @if ($name !== false)
        name="{{$name}}"
        @endif


        @if ($placeholder !== false)
        placeholder="{{$placeholder}}"
        @endif

    autocomplete="off"
    >
