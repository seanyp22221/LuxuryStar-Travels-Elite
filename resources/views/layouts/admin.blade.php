<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <link href='https://css.gg/css' rel='stylesheet'>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>@yield("page_title")</title>
    @yield("script_block")
</head>

<body>
<div class="flex flex-col w-screen h-screen">

    <x-Navigation.nav-1 style="height: 10vh">

        <x-slot name="title">
            <div class="flex items-center gap-3">

                <div
                    class="flex relative -mt-2 sm:m-0  w-10 h-10 justify-center items-center  text-xl rounded-full text-white">
                    <img class="rounded-full " alt="A" src="https://randomuser.me/api/portraits/women/68.jpg">
                </div>
                <span class="font-semibold text-gray-50">Welcome User</span>
            </div>
        </x-slot>

        <x-slot name="end">


            <div class="flex gap-3">

                <div x-data="{modal2:false}">
                    <x-Navigation.nav-1-button class="px-3.5 bg-gray-500 py-1">

                        <x-slot name="title">
                            <span  @click="modal2 = true">Open Modal 1</span>
                        </x-slot>

                    </x-Navigation.nav-1-button>

                    <x-Modals.modal-1 title="Modal Title" alphName="modal2">
                        <x-slot name="body">
                            <form class="space-y-4">
                                <x-Form.input placeholder="Email"/>

                                <div class="text-center grid grid-cols-1 gap-4 sm:grid-cols-2">
                                    <x-Form.input placeholder="First Name"/>
                                    <x-Form.input placeholder="Last Name"/>
                                </div>
                            </form>

                            <div class=" flex-col sm:flex-row flex mt-10 justify-center items-center gap-5">

                                <button
                                    class="py-2 px-4 rounded bg-gray-400 font-semibold text-gray-900 hover:text-white  hover:bg-yellow-600 duration-300">
                                    Modal Send
                                </button>
                                <button
                                    @click.prevent="modal2 = false"
                                    class="py-2 px-4 rounded bg-gray-400 font-semibold text-gray-900 hover:text-white hover:bg-red-600 duration-300">
                                    Cancel
                                </button>
                            </div>
                        </x-slot>
                    </x-Modals.modal-1>
                </div>

                <div x-data="{modal:false}">
                    <x-Navigation.nav-1-button class="px-3.5  bg-gray-500 py-1">

                        <x-slot name="title">
                            <span @click="modal = true">Open Modal 2</span>
                        </x-slot>

                    </x-Navigation.nav-1-button>

                    <x-Modals.modal-2 alphName="modal">
                        <form class="space-y-4">
                            <x-Form.input placeholder="Email"/>

                            <div class="text-center grid grid-cols-1 gap-4 sm:grid-cols-2">
                                <x-Form.input placeholder="First Name"/>
                                <x-Form.input placeholder="Last Name"/>
                            </div>

                            <div class="text-center grid grid-cols-1 gap-4 sm:grid-cols-3">
                                <x-Form.input placeholder="First Name"/>
                                <x-Form.input placeholder="Last Name"/>
                                <x-Form.input placeholder="Last Name"/>
                            </div>

                            <div class="text-center grid grid-cols-1 gap-4 sm:grid-cols-4">
                                <x-Form.input placeholder="First Name"/>
                                <x-Form.input placeholder="Last Name"/>
                                <x-Form.input placeholder="Last Name"/>
                                <x-Form.input placeholder="Last Name"/>
                            </div>

                            <div class="text-center grid grid-cols-1 gap-4 sm:grid-cols-5">
                                <x-Form.input placeholder="First Name"/>
                                <x-Form.input placeholder="Last Name"/>
                                <x-Form.input placeholder="Last Name"/>
                                <x-Form.input placeholder="Last Name"/>
                                <x-Form.input placeholder="Last Name"/>
                            </div>

                            <div class="text-center grid grid-cols-1 gap-4 sm:grid-cols-6">
                                <x-Form.input placeholder="First Name"/>
                                <x-Form.input placeholder="Last Name"/>
                                <x-Form.input placeholder="Last Name"/>
                                <x-Form.input placeholder="Last Name"/>
                                <x-Form.input placeholder="Last Name"/>
                                <x-Form.input placeholder="Last Name"/>
                            </div>

                            <div class="text-center grid grid-cols-1 gap-4 sm:grid-cols-7">
                                <x-Form.input placeholder="First Name"/>
                                <x-Form.input placeholder="Last Name"/>
                                <x-Form.input placeholder="Last Name"/>
                                <x-Form.input placeholder="Last Name"/>
                                <x-Form.input placeholder="Last Name"/>
                                <x-Form.input placeholder="Last Name"/>
                                <x-Form.input placeholder="Last Name"/>
                            </div>

                            <div class="text-center grid grid-cols-1 gap-4 sm:grid-cols-8">
                                <x-Form.input placeholder="First Name"/>
                                <x-Form.input placeholder="Last Name"/>
                                <x-Form.input placeholder="Last Name"/>
                                <x-Form.input placeholder="Last Name"/>
                                <x-Form.input placeholder="Last Name"/>
                                <x-Form.input placeholder="Last Name"/>
                                <x-Form.input placeholder="Last Name"/>
                                <x-Form.input placeholder="Last Name"/>
                            </div>


                        </form>

                        <div class=" flex-col sm:flex-row flex mt-10 justify-center items-center gap-5">

                            <button
                                class="py-2 px-4 rounded bg-gray-400 font-semibold text-gray-900 hover:text-white  hover:bg-yellow-600 duration-300">
                                Modal Send
                            </button>
                            <button
                                @click.prevent="modal = false"
                                class="py-2 px-4 rounded bg-gray-400 font-semibold text-gray-900 hover:text-white hover:bg-red-600 duration-300">
                                Cancel
                            </button>
                        </div>
                    </x-Modals.modal-2>

                </div>



                <div x-data="{notification:false}" class="relative inline-block ">
                    <!-- Dropdown toggle button -->

                    <button @mouseover="notification = true"
                            :class="notification ? 'bg-yellow-500 animate-pulse' : '' "
                            class="relative animate z-10 block px-3.5 py-2.5 pb-3 text-black hover:text-gray-100 bg-gray-500 hover:bg-yellow-600  transition duration-300 rounded-lg">
                        <i class="gg-bell"></i>
                    </button>

                    <!-- Dropdown menu -->
                    <div x-show="notification"
                         x-transition.enter.duration.300ms.origin.top
                         x-transition.leave.duration.300ms.origin.top
                         @mouseleave="notification = false"
                         @click.away.window="notification = !notification"
                         class="absolute border border-gray-500 right-0 z-20 mt-2 overflow-hidden rounded-md shadow-2xl w-80 bg-gray-700">
                        <div>
                            <a href="#"
                               class="flex items-center px-4 py-3 -mx-2 transition-colors duration-200 transform border-b hover:bg-gray-600 border-gray-700">
                                <img class="flex-shrink-0 object-cover w-8 h-8 mx-1 rounded-full"
                                     src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80"
                                     alt="avatar"/>
                                <p class="mx-2 text-sm text-white"><span class="font-bold" href="#">Sara Salah</span>
                                    replied on the <span class="font-bold text-blue-500" href="#">Upload Image</span>
                                    artical . 2m</p>
                            </a>
                        </div>
                        <a href="#"
                           class="block py-2 font-bold text-center text-white bg-gray-800 dark:bg-gray-700 hover:underline">See
                            all notifications</a>
                    </div>
                </div>
            </div>
        </x-slot>


    </x-Navigation.nav-1>

    <div style="height: 90vh" class="flex w-screen">

        <div
            class="flex flex-col left-0 w-14 hover:w-64 md:w-64 bg-gray-900 h-full text-white transition-all duration-300 border-none z-10"
        >
            <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
                <ul class="flex flex-col py-4 space-y-1">

                    <li class="px-3 hidden md:block">
                        <div class="flex flex-row items-center h-8">
                            <div class="text-sm font-light hidden md:block tracking-wide text-gray-400 uppercase">Main</div>
                        </div>
                    </li>

                    <li>
                        <a href="{{ route('admin-dashboard-show')}}" class=" @if(Route::is('admin-dashboard-show')) bg-gray-400 @endif relative flex flex-row items-center duration-300 h-11 focus:outline-none hover:bg-yellow-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-gray-800 pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                    </svg>
                                </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
                        </a>
                    </li>
                    <!-- Entry Form -->
                    <li>
                        <a href="{{ route('admin-entryform-show')}}" class=" @if(Route::is('admin-entryform-show')) bg-gray-400 @endif relative flex flex-row items-center h-11 focus:outline-none hover:bg-yellow-600 text-white-600 duration-300 hover:text-white-800 border-l-4 border-transparent hover:border-gray-800 pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                                    </svg>
                                </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Entry Form</span>
                            <span class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-blue-500 bg-indigo-50 rounded-full">New</span>
                        </a>
                    </li>
                    <!-- Payments -->
                    <li>
                        <a href="{{ route('admin-paymentsform-show')}}" class="relative flex flex-row items-center duration-300 h-11 focus:outline-none hover:bg-yellow-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-gray-800 pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.423,9.141H3.565c-0.237,0-0.429,0.192-0.429,0.429s0.192,0.429,0.429,0.429h0.858c0.237,0,0.429-0.192,0.429-0.429S4.66,9.141,4.423,9.141 M6.997,16.861H6.139c-0.237,0-0.429,0.192-0.429,0.43s0.192,0.429,0.429,0.429h0.858c0.237,0,0.429-0.191,0.429-0.429S7.234,16.861,6.997,16.861 M4.423,16.861H3.565c-0.237,0-0.429,0.192-0.429,0.43s0.192,0.429,0.429,0.429h0.858c0.237,0,0.429-0.191,0.429-0.429S4.66,16.861,4.423,16.861M13.861,9.998h0.857c0.236,0,0.429-0.192,0.429-0.429s-0.192-0.429-0.429-0.429h-0.857c-0.237,0-0.43,0.192-0.43,0.429S13.624,9.998,13.861,9.998 M14.719,16.861h-0.857c-0.237,0-0.43,0.192-0.43,0.43s0.192,0.429,0.43,0.429h0.857c0.236,0,0.429-0.191,0.429-0.429S14.955,16.861,14.719,16.861 M15.576,13.001c-0.236,0-0.429,0.192-0.429,0.43c0,0.236,0.192,0.429,0.429,0.429c0.237,0,0.43-0.192,0.43-0.429C16.006,13.193,15.813,13.001,15.576,13.001 M6.997,9.141H6.139c-0.237,0-0.429,0.192-0.429,0.429s0.192,0.429,0.429,0.429h0.858c0.237,0,0.429-0.192,0.429-0.429S7.234,9.141,6.997,9.141M12.145,9.141h-0.857c-0.236,0-0.429,0.192-0.429,0.429s0.193,0.429,0.429,0.429h0.857c0.237,0,0.43-0.192,0.43-0.429S12.382,9.141,12.145,9.141 M17.722,10.856V7.424c0-0.948-0.769-1.716-1.716-1.716h-0.617l-1.038-3.873c-0.245-0.916-1.186-1.458-2.101-1.213L3.592,2.912C2.676,3.157,2.133,4.098,2.378,5.014l0.186,0.695H2.278c-0.947,0-1.716,0.768-1.716,1.716V17.72c0,0.947,0.769,1.716,1.716,1.716h13.728c0.947,0,1.716-0.769,1.716-1.716v-1.716c0.947,0,1.716-0.769,1.716-1.716v-1.716C19.438,11.624,18.669,10.856,17.722,10.856 M16.006,6.566c0.473,0,0.857,0.384,0.857,0.858v0.238c-0.253-0.146-0.544-0.238-0.857-0.238h-0.157l-0.229-0.858H16.006z M14.41,5.372l0.55,2.053H6.67L14.41,5.372z M3.814,3.741l8.657-2.29c0.458-0.123,0.928,0.149,1.051,0.607l0.222,0.828L3.43,5.621l-0.223-0.83C3.084,4.333,3.356,3.863,3.814,3.741M1.42,7.424c0-0.474,0.384-0.858,0.858-0.858h0.517l0.229,0.858H2.278c-0.314,0-0.605,0.091-0.858,0.238V7.424z M16.863,17.72c0,0.474-0.385,0.858-0.857,0.858H2.278c-0.474,0-0.858-0.385-0.858-0.858V9.141c0-0.474,0.384-0.858,0.858-0.858h13.728c0.473,0,0.857,0.384,0.857,0.858v1.715h-1.716c-0.947,0-1.716,0.768-1.716,1.716v1.716c0,0.947,0.769,1.716,1.716,1.716h1.716V17.72z M18.58,14.288c0,0.474-0.385,0.857-0.858,0.857h-2.574c-0.474,0-0.857-0.384-0.857-0.857v-1.716c0-0.474,0.384-0.858,0.857-0.858h2.574c0.474,0,0.858,0.385,0.858,0.858V14.288z M9.571,16.861H8.713c-0.237,0-0.429,0.192-0.429,0.43s0.192,0.429,0.429,0.429h0.858c0.236,0,0.429-0.191,0.429-0.429S9.808,16.861,9.571,16.861M12.145,16.861h-0.857c-0.236,0-0.429,0.192-0.429,0.43s0.193,0.429,0.429,0.429h0.857c0.237,0,0.43-0.191,0.43-0.429S12.382,16.861,12.145,16.861 M9.571,9.141H8.713c-0.237,0-0.429,0.192-0.429,0.429s0.192,0.429,0.429,0.429h0.858C9.808,9.998,10,9.806,10,9.569S9.808,9.141,9.571,9.141"></path>
                                    </svg>
                                </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Payments</span>
                        </a>
                    </li>
                    <!-- Claims -->
                    <li>
                        <a href="{{ route('admin-claims-show')}}" class="relative flex flex-row items-center duration-300 h-11 focus:outline-none hover:bg-yellow-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-gray-800 pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M14.781,14.347h1.738c0.24,0,0.436-0.194,0.436-0.435v-1.739c0-0.239-0.195-0.435-0.436-0.435h-1.738c-0.239,0-0.435,0.195-0.435,0.435v1.739C14.347,14.152,14.542,14.347,14.781,14.347 M18.693,3.045H1.307c-0.48,0-0.869,0.39-0.869,0.869v12.17c0,0.479,0.389,0.869,0.869,0.869h17.387c0.479,0,0.869-0.39,0.869-0.869V3.915C19.562,3.435,19.173,3.045,18.693,3.045 M18.693,16.085H1.307V9.13h17.387V16.085z M18.693,5.653H1.307V3.915h17.387V5.653zM3.48,12.608h7.824c0.24,0,0.435-0.195,0.435-0.436c0-0.239-0.194-0.435-0.435-0.435H3.48c-0.24,0-0.435,0.195-0.435,0.435C3.045,12.413,3.24,12.608,3.48,12.608 M3.48,14.347h6.085c0.24,0,0.435-0.194,0.435-0.435s-0.195-0.435-0.435-0.435H3.48c-0.24,0-0.435,0.194-0.435,0.435S3.24,14.347,3.48,14.347"></path>
                                    </svg>
                                </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Claims</span>
                        </a>
                    </li>
                    <!-- Email Center -->
                    <li>
                        <a href="{{ route('admin-emailcenter-show')}}" class="relative flex flex-row items-center duration-300 h-11 focus:outline-none hover:bg-yellow-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-gray-800 pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg class="animate-pulse text-yellow-500 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17.388,4.751H2.613c-0.213,0-0.389,0.175-0.389,0.389v9.72c0,0.216,0.175,0.389,0.389,0.389h14.775c0.214,0,0.389-0.173,0.389-0.389v-9.72C17.776,4.926,17.602,4.751,17.388,4.751 M16.448,5.53L10,11.984L3.552,5.53H16.448zM3.002,6.081l3.921,3.925l-3.921,3.925V6.081z M3.56,14.471l3.914-3.916l2.253,2.253c0.153,0.153,0.395,0.153,0.548,0l2.253-2.253l3.913,3.916H3.56z M16.999,13.931l-3.921-3.925l3.921-3.925V13.931z"></path>
                                    </svg>
                                </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Email Center</span>
                            <span class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-red-500 bg-red-50 rounded-full">1.2k</span>
                        </a>
                    </li>
                    <!-- My Profile -->
                    <li>
                        <a href="{{ route('admin-editmyprofile-show')}}" class="relative flex flex-row items-center duration-300 h-11 focus:outline-none hover:bg-yellow-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-gray-800 pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                </span>
                            <span class="ml-2 text-sm tracking-wide truncate">My Profile</span>
                        </a>
                    </li>
                    <!-- Reports -->
                    <li>
                        <a href="{{ route('admin-reports-show')}}" class="relative flex flex-row items-center duration-300 h-11 focus:outline-none hover:bg-yellow-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-gray-800 pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M14.467,1.771H5.533c-0.258,0-0.47,0.211-0.47,0.47v15.516c0,0.414,0.504,0.634,0.802,0.331L10,13.955l4.136,4.133c0.241,0.241,0.802,0.169,0.802-0.331V2.241C14.938,1.982,14.726,1.771,14.467,1.771 M13.997,16.621l-3.665-3.662c-0.186-0.186-0.479-0.186-0.664,0l-3.666,3.662V2.711h7.994V16.621z"></path>
                                    </svg>
                                </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Reports</span>
                        </a>
                    </li>
                    <!-- MAINTENANCE -->
                    <li class="px-5 hidden md:block md:block">
                        <div class="flex flex-row items-center mt-2 h-8">
                            <div class="text-sm  font-light tracking-wide truncate text-gray-400 uppercase">Maintenance</div>
                        </div>
                    </li>
                    <!-- Create User Profile -->
                    <li>
                        <a href="{{ route('admin-entryform-show')}}" class="relative flex flex-row items-center duration-300 h-11 focus:outline-none hover:bg-yellow-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-gray-800 pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15.573,11.624c0.568-0.478,0.947-1.219,0.947-2.019c0-1.37-1.108-2.569-2.371-2.569s-2.371,1.2-2.371,2.569c0,0.8,0.379,1.542,0.946,2.019c-0.253,0.089-0.496,0.2-0.728,0.332c-0.743-0.898-1.745-1.573-2.891-1.911c0.877-0.61,1.486-1.666,1.486-2.812c0-1.79-1.479-3.359-3.162-3.359S4.269,5.443,4.269,7.233c0,1.146,0.608,2.202,1.486,2.812c-2.454,0.725-4.252,2.998-4.252,5.685c0,0.218,0.178,0.396,0.395,0.396h16.203c0.218,0,0.396-0.178,0.396-0.396C18.497,13.831,17.273,12.216,15.573,11.624 M12.568,9.605c0-0.822,0.689-1.779,1.581-1.779s1.58,0.957,1.58,1.779s-0.688,1.779-1.58,1.779S12.568,10.427,12.568,9.605 M5.06,7.233c0-1.213,1.014-2.569,2.371-2.569c1.358,0,2.371,1.355,2.371,2.569S8.789,9.802,7.431,9.802C6.073,9.802,5.06,8.447,5.06,7.233 M2.309,15.335c0.202-2.649,2.423-4.742,5.122-4.742s4.921,2.093,5.122,4.742H2.309z M13.346,15.335c-0.067-0.997-0.382-1.928-0.882-2.732c0.502-0.271,1.075-0.429,1.686-0.429c1.828,0,3.338,1.385,3.535,3.161H13.346z"></path>
                                    </svg>
                                </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Create Profile</span>
                        </a>
                    </li>
                    <!-- Settings -->
                    <li>
                        <a href="{{ route('admin-entryform-show')}}" class="relative flex flex-row items-center duration-300 h-11 focus:outline-none hover:bg-yellow-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-gray-800 pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Settings</span>
                        </a>
                    </li>
                </ul>
                <p class=" px-5 py-4  hidden md:block text-center truncate text-xs">Copyright @2021 LuxuryStar Travels</p>
            </div>

        </div>

        <div class="overflow-y-auto bg-gray-700 w-full">
            @yield('content')
        </div>
    </div>

</div>


    @yield('footer')
</body>
@yield("script_block_2")

</html>
