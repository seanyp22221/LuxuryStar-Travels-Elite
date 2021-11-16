@props([
    'label' => false,
    'title' => false,
    'id' => false,
    'options' => false,
    'error' => false,
    'field' => false,
    'even' => false

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

    @php

        $class = 'block
                          form-select
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


    <select
        {{$attributes->merge(['class' => $class])}}

        @if ($id)
        id="{{$id}}"
        @endif
    >
        @if ($options)

            @forelse ($options as $key => $label)

                @if ($even)
                    @if ($loop->first)

                        <option disabled selected>Selected</option>

                        <option value="{{$label->$field}}">{{$label->$field}}</option>

                    @else

                        <option value="{{$label->$field}}">{{$label->$field}}</option>

                    @endif
                @else
                    @if ($loop->first)

                        <option disabled selected>Selected</option>

                        <option value="{{$label->id}}">{{$label->$field}}</option>

                    @else

                        <option value="{{$label->id}}">{{$label->$field}}</option>

                    @endif
                @endif

            @empty
                <option>No Data Available</option>
            @endforelse

        @else

            {{$slot}}

        @endif

    </select>
</div>
