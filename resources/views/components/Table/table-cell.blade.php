@props([
    'title' => false
])

<td  {{$attributes->merge(['class' => "px-5 py-5 border-b border-gray-400 bg-gray-800 text-gray-100 text-center text-sm"])}}>
    <div class="ml-3">
        <p class=" w-11/12 truncate overflow-hidden font-medium">
           {{$title}}
        </p>
    </div>
</td>
