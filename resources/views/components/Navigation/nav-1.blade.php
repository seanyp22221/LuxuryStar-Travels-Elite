@props([
   'title' => 'Unnamed Nav',
   'logout' => true,
   'center' => false,
   'end' => false,
])

<div {{$attributes->merge(['class' => 'shadow-sm bg-gray-800'])}}>
    <header>
        <div class="py-3.5 px-4 sm:px-2 w-screen">
            <div class="flex items-center justify-between space-x-4 lg:space-x-10">
                @if ($title)
                    <div class="flex lg:w-0 lg:flex-1">
                        <p class="text-2xl text-gray-100 hover:text-gray-300 duration-300 font-bold">
                            {{$title}}
                        </p>
                    </div>
                @endif


                @if ($center)
                        <nav class="hidden space-x-8 md:flex">
                            {{$center}}
                        </nav>
                @endif


                <div class="items-center justify-end flex-1 hidden space-x-2 sm:flex">

                    @if ($end)
                        <div>
                            {{$end}}
                        </div>
                    @endif


                    @if ($logout)
                        <x-Navigation.nav-1-logout/>
                    @endif

                </div>

                <div class="lg:hidden">
                    <button
                        class="px-2 py-4  text-sm font-medium hover:text-white bg-gray-600 text-gray-100 hover:bg-blue-600 transition duration-300 rounded-lg" type="button">
                        <span class="sr-only">Menu</span>
                        <i class="gg-menu"></i>
                    </button>
                </div>

            </div>
        </div>
    </header>
</div>
