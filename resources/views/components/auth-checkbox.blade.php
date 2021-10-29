@props([
    'title' => 'Unnamed Checkbox',
    'name' => false,
    'label' => true,
    'id' => false,
    'value' => false,

])

<div class="flex items-center">

    <input
        {{$attributes->merge(
                        ['class' => '
                          w-4
                          h-4
                          form-checkbox
                          text-blue-400
                          border-gray-200
                          rounded
                          focus:ring-blue-500
                          ']
                          )}}
        @if($id !== false) id="{{$id}}" @endif
        value="{{$value}}"
        name="{{$name}}"
        type="checkbox">

    <label
        {{$attributes->merge(['class'=> 'block ml-2 text-sm text-neutral-600 dark:text-gray-300'])}}
        @if($id !== false) for="remember-me" @endif>
        {{$title}}
    </label>

</div>
