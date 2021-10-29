@props([
    'title' => $title,
    'type' => 'submit',
    'text' => 'black',
])

<button {{$attributes->merge(['class' => "
                        w-full
                        block
                        $text
                        rounded-lg
                        duration-300
                        px-4
                        py-3
                        mt-6
                        dark:text-gray-300
                "])}}

        type="{{$type}}">

    {{$title}}
</button>
