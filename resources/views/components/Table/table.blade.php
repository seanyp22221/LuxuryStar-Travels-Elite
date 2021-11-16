@props([
    'title' => false,
    'pagination' => false,
    'button' => false
])
<div class="container shadow-2xl mx-auto px-4 sm:px-4">
    <div class="mt-4">
        @if ($title)
            <div class=" flex items-center justify-between px-5">
                <div>
                    <h2 class="text-2xl font-semibold text-gray-100 leading-tight">{{$title}}</h2>
                </div>

                @if ($button)
                    <div>
                        {{$button}}
                    </div>
                @endif


            </div>
        @endif

        <div class=" py-4 overflow-x-auto">
            <div class="inline-block min-w-full shadow rounded overflow-hidden">
                <table class="min-w-full leading-normal">

                    <thead>
                    <x-Table.table-row>
                        {{$thead}}
                    </x-Table.table-row>

                    </thead>

                    <tbody>

                    {{$tbody}}

                    </tbody>
                </table>
            </div>
            @if($pagination)

                {{$pagination}}

            @endif

        </div>
    </div>
</div>
