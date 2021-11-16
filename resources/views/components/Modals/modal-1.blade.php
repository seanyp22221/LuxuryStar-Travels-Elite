@props([
    'alphName' => false,
    'title' => false,
])

{{--Modal: --}}

{{--Ideal Spacing - space-y-4--}}

{{--Single Input - Left In Open--}}

{{--Double Input - <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">--}}

{{--Triple Input - <div class="text-center grid grid-cols-1 gap-4 sm:grid-cols-3">--}}


{{--End Modal--}}



<section x-show="{{$alphName}}"
         x-transition.enter.duration.300ms.origin.bottom
         x-transition.out.duration.1000ms.origin.top.opacity
         class="bg-black bg-opacity-90 text-center justify-center  overflow-y-auto flex items-center z-50 inset-0 fixed">



    <div
        {{$attributes->merge(['class' => 'px-4 mx-auto py-5 my-auto  w-full lg:w-7/12 sm:px-6 lg:px-2'])}}>
        <div class="grid grid-cols-1 gap-x-16 gap-y-8 lg:grid-cols-3">

            <div
                 @keyup.esc.window="{{$alphName}} = false"
                 class="p-8 bg-gray-800 rounded-lg shadow-lg lg:p-12 lg:col-span-3">

                <h1 class="lg:text-4xl text-gray-50 lg:text-center md:text-center md:text-3xl text-2xl text-left font-bold -mt-5 mb-10">
                    {{$title}}
                </h1>

                {{$body}}

            </div>
        </div>
    </div>
</section>
@push('styles')
    <style>
        .scroll-hidden::-webkit-scrollbar {
            height: 0;
            background: transparent; /* make scrollbar transparent */
        }
    </style>
@endpush
