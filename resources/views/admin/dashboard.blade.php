@extends('layouts.admin')
@section('title_section')
LuxuryStarTravels Elite CRM - Admin Dashboard
@endsection

@section('content')
    <div class="h-full w-full ">

    <!-- Statistics Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 p-4 gap-4">
        <div class="bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-gray-600 text-white font-medium group">
            <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
            </div>
            <!-- Visitor Arrivals -->
            <div class="text-right">
                <p class="text-2xl">0</p>
                <p>Transported</p>
            </div>
            <!-- // End Visitor Arrivals -->
        </div>
        <div class="bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-gray-600 text-white font-medium group">
            <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                </svg>
            </div>
            <div class="text-right">
                <p class="text-2xl">0</p>
                <p>Follow Up (This Month)</p>
            </div>
        </div>
        <div class="bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-gray-600 text-white font-medium group">
            <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                </svg>
            </div>
            <div class="text-right">
                <p class="text-2xl">$0.00</p>
                <p>Payments</p>
            </div>
        </div>
        <div class="bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-gray-600 text-white font-medium group">
            <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <div class="text-right">
                <p class="text-2xl">$0.00</p>
                <p>Balances</p>
            </div>
        </div>
    </div>
    <!-- ./Statistics Cards -->

    <div class="grid grid-cols-1 lg:grid-cols-2 p-4 gap-4">

        <!-- Driver Traffic -->
        <div class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-800 w-full shadow-lg rounded">
            <div class="rounded-t mb-0 px-0 border-0">
                <div class="flex flex-wrap items-center px-4 py-2">
                    <div class="relative w-full max-w-full flex-grow flex-1">
                        <h3 class="font-semibold text-base text-gray-50">Driver Traffic</h3>
                    </div>
                    <div class="relative w-full max-w-full flex-grow flex-1 text-right">
                        <button class="bg-gray-100  active:bg-blue-600 text-gray-800 active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">See all</button>
                    </div>
                </div>
                <div class="block w-full overflow-x-auto">
                    <table class="items-center w-full bg-transparent border-collapse">
                        <thead>
                            <tr>
                                <th class="px-4 bg-gray-600 text-gray-100 align-middle border border-solid border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Driver</th>
                                <th class="px-4 bg-gray-600 text-gray-100 align-middle border border-solid border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Description</th>
                                <th class="px-4 bg-gray-600 text-gray-100 align-middle border border-solid border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Date</th>
                                <th class="px-4 bg-gray-600 text-gray-100 align-middle border border-solid border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left min-w-140-px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-gray-100">
                                <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                    <div>
                                        <p class="font-semibold">Sullavan Biersay</p>
                                        <p class="text-xs text-gray-400">Suburban #1</p>
                                    </div>
                                </th>
                                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    <div>
                                        <p class="font-semibold">Hans Burger</p>
                                        <p class="text-xs text-gray-400">Airport Transport</p>
                                        <p class="text-xs text-gray-400"> -> Hyatt Ziva</p>
                                    </div>
                                </td>
                                <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                    <div>
                                        <p class="font-semibold">Oct-24-2021</p>
                                        <p class="text-xs text-gray-400">Pickup @ 11:30 AM</p>
                                    </div>
                                </th>
                                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    <div>
                                        <a href="#" class="px-4 py-1 text-xs text-white rounded-lg bg-yellow-500">View</A>
                                    </div>
                                </td>

                            </tr>
                            <tr class="text-gray-100">
                                <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                    <div>
                                        <p class="font-semibold">Sullavan Biersay</p>
                                        <p class="text-xs text-gray-400">Suburban #1</p>
                                    </div>
                                </th>
                                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    <div>
                                        <p class="font-semibold">Hans Burger</p>
                                        <p class="text-xs text-gray-400">Airport Transport</p>
                                        <p class="text-xs text-gray-400"> -> Hyatt Ziva</p>
                                    </div>
                                </td>
                                <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                    <div>
                                        <p class="font-semibold">Oct-24-2021</p>
                                        <p class="text-xs text-gray-400">Pickup @ 11:30 AM</p>
                                    </div>
                                </th>
                                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    <div>
                                        <a href="#" class="px-4 py-1 text-xs text-white rounded-lg bg-yellow-500">View</A>
                                    </div>
                                </td>

                            </tr>
                            <tr class="text-gray-100">
                                <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                    <div>
                                        <p class="font-semibold">Sullavan Biersay</p>
                                        <p class="text-xs text-gray-400">Suburban #1</p>
                                    </div>
                                </th>
                                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    <div>
                                        <p class="font-semibold">Hans Burger</p>
                                        <p class="text-xs text-gray-400">Airport Transport</p>
                                        <p class="text-xs text-gray-400"> -> Hyatt Ziva</p>
                                    </div>
                                </td>
                                <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                    <div>
                                        <p class="font-semibold">Oct-24-2021</p>
                                        <p class="text-xs text-gray-400">Pickup @ 11:30 AM</p>
                                    </div>
                                </th>
                                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    <div>
                                        <a href="#" class="px-4 py-1 text-xs text-white rounded-lg bg-yellow-500">View</A>
                                    </div>
                                </td>

                            </tr>
                            <tr class="text-gray-100">
                                <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                    <div>
                                        <p class="font-semibold">Sullavan Biersay</p>
                                        <p class="text-xs text-gray-400">Suburban #1</p>
                                    </div>
                                </th>
                                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    <div>
                                        <p class="font-semibold">Hans Burger</p>
                                        <p class="text-xs text-gray-400">Airport Transport</p>
                                        <p class="text-xs text-gray-400"> -> Hyatt Ziva</p>
                                    </div>
                                </td>
                                <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                    <div>
                                        <p class="font-semibold">Oct-24-2021</p>
                                        <p class="text-xs text-gray-400">Pickup @ 11:30 AM</p>
                                    </div>
                                </th>
                                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    <div>
                                        <a href="#" class="px-4 py-1 text-xs text-white rounded-lg bg-yellow-500">View</A>
                                    </div>
                                </td>

                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- ./Social Traffic -->

        <!-- Recent Notifications -->
        <div class="relative flex flex-col min-w-0 break-words bg-gray-800 w-full shadow-lg rounded">
            <div class="rounded-t mb-0 px-0 border-0">
                <div class="flex flex-wrap items-center px-4 py-2">
                    <div class="relative w-full max-w-full flex-grow flex-1">
                        <h3 class="font-semibold text-base text-gray-50">Recent Service Bookings</h3>
                    </div>
                    <div class="relative w-full max-w-full flex-grow flex-1 text-right">
                        <button class="bg-gray-100  active:bg-blue-600 text-gray-800 active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">See all</button>
                    </div>
                </div>
                <div class="block w-full">
                    <div class="px-4 bg-gray-600 text-gray-100 align-middle border border-solid border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Recent Notifications
                    </div>
                    <ul class="my-1">
                        <!-- Notification -->
                        <li class="flex px-4">
                            <!-- Icon for Notification -->
                            <div class="w-9 h-9 rounded-full flex-shrink-0 bg-indigo-500 my-2 mr-3">
                                <svg class="w-9 h-9 fill-current text-indigo-50" viewBox="0 0 36 36">
                                    <path d="M18 10c-4.4 0-8 3.1-8 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L18.9 22H18c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                                </svg>
                            </div>
                            <!-- // End Icon for Notification -->
                            <div class="flex-grow flex items-center border-b border-gray-400 text-sm text-gray-100 py-2">
                                <div class="flex-grow flex justify-between items-center">
                                    <div class="self-center">
                                        <a class="font-medium hover:text-gray-600 duration-300 text-gray-50 " href="#0" style="outline: none;">Sullavan Biersay</a> needs approval for a stop <a class="font-medium text-gray-50 hover:text-gray-100" href="#0" style="outline: none;">At Rick's Cafe</a> in Negril
                                    </div>
                                    <div class="flex-shrink-0 ml-2">
                                        <a class="flex items-center font-medium text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-500" href="#0" style="outline: none;">
                                            View<span><svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor" class="transform transition-transform duration-500 ease-in-out">
                                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                                </svg></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="flex px-4">
                            <!-- Icon for Notification -->
                            <div class="w-9 h-9 rounded-full flex-shrink-0 bg-indigo-500 my-2 mr-3">
                                <svg class="w-9 h-9 fill-current text-indigo-50" viewBox="0 0 36 36">
                                    <path d="M18 10c-4.4 0-8 3.1-8 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L18.9 22H18c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                                </svg>
                            </div>
                            <!-- // End Icon for Notification -->
                            <div class="flex-grow flex items-center border-b border-gray-400 text-sm text-gray-100 py-2">
                                <div class="flex-grow flex justify-between items-center">
                                    <div class="self-center">
                                        <a class="font-medium hover:text-gray-600 duration-300 text-gray-50 " href="#0" style="outline: none;">Sullavan Biersay</a> needs approval for a stop <a class="font-medium text-gray-50 hover:text-gray-100" href="#0" style="outline: none;">At Rick's Cafe</a> in Negril
                                    </div>
                                    <div class="flex-shrink-0 ml-2">
                                        <a class="flex items-center font-medium text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-500" href="#0" style="outline: none;">
                                            View<span><svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor" class="transform transition-transform duration-500 ease-in-out">
                                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                                </svg></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="flex px-4">
                            <!-- Icon for Notification -->
                            <div class="w-9 h-9 rounded-full flex-shrink-0 bg-indigo-500 my-2 mr-3">
                                <svg class="w-9 h-9 fill-current text-indigo-50" viewBox="0 0 36 36">
                                    <path d="M18 10c-4.4 0-8 3.1-8 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L18.9 22H18c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                                </svg>
                            </div>
                            <!-- // End Icon for Notification -->
                            <div class="flex-grow flex items-center border-b border-gray-400 text-sm text-gray-100 py-2">
                                <div class="flex-grow flex justify-between items-center">
                                    <div class="self-center">
                                        <a class="font-medium hover:text-gray-600 duration-300 text-gray-50 " href="#0" style="outline: none;">Sullavan Biersay</a> needs approval for a stop <a class="font-medium text-gray-50 hover:text-gray-100" href="#0" style="outline: none;">At Rick's Cafe</a> in Negril
                                    </div>
                                    <div class="flex-shrink-0 ml-2">
                                        <a class="flex items-center font-medium text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-500" href="#0" style="outline: none;">
                                            View<span><svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor" class="transform transition-transform duration-500 ease-in-out">
                                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                                </svg></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="flex px-4">
                            <!-- Icon for Notification -->
                            <div class="w-9 h-9 rounded-full flex-shrink-0 bg-indigo-500 my-2 mr-3">
                                <svg class="w-9 h-9 fill-current text-indigo-50" viewBox="0 0 36 36">
                                    <path d="M18 10c-4.4 0-8 3.1-8 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L18.9 22H18c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                                </svg>
                            </div>
                            <!-- // End Icon for Notification -->
                            <div class="flex-grow flex items-center border-b border-gray-400 text-sm text-gray-100 py-2">
                                <div class="flex-grow flex justify-between items-center">
                                    <div class="self-center">
                                        <a class="font-medium hover:text-gray-600 duration-300 text-gray-50 " href="#0" style="outline: none;">Sullavan Biersay</a> needs approval for a stop <a class="font-medium text-gray-50 hover:text-gray-100" href="#0" style="outline: none;">At Rick's Cafe</a> in Negril
                                    </div>
                                    <div class="flex-shrink-0 ml-2">
                                        <a class="flex items-center font-medium text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-500" href="#0" style="outline: none;">
                                            View<span><svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor" class="transform transition-transform duration-500 ease-in-out">
                                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                                </svg></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- // End Notification -->

                    </ul>
                    <div class="px-4 bg-gray-600 text-gray-100 align-middle border border-solid border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Last Week Summary
                    </div>
                    <ul class="my-1">
                        <li class="flex px-4">
                            <!-- Icon for Notification -->
                            <div class="w-9 h-9 rounded-full flex-shrink-0 bg-indigo-500 my-2 mr-3">
                                <svg class="w-9 h-9 fill-current text-indigo-50" viewBox="0 0 36 36">
                                    <path d="M18 10c-4.4 0-8 3.1-8 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L18.9 22H18c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                                </svg>
                            </div>
                            <!-- // End Icon for Notification -->
                            <div class="flex-grow flex items-center border-b border-gray-400 text-sm text-gray-100 py-2">
                                <div class="flex-grow flex justify-between items-center">
                                    <div class="self-center">
                                        <a class="font-medium hover:text-gray-600 duration-300 text-gray-50 " href="#0" style="outline: none;">Sullavan Biersay</a> needs approval for a stop <a class="font-medium text-gray-50 hover:text-gray-100" href="#0" style="outline: none;">At Rick's Cafe</a> in Negril
                                    </div>
                                    <div class="flex-shrink-0 ml-2">
                                        <a class="flex items-center font-medium text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-500" href="#0" style="outline: none;">
                                            View<span><svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor" class="transform transition-transform duration-500 ease-in-out">
                                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                                </svg></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ./Recent Notifications -->
    </div>


    <!-- Client Table -->
    <div class="mt-4 mx-4">
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-black uppercase border-b dark:border-yellow-700 bg-yellow-500 dark:text-blue-100 dark:bg-yellow-600">
                            <th class="px-4 py-3">Client</th>
                            <th class="px-4 py-3">Description</th>
                            <th class="px-4 py-3">Date</th>
                            <th class="px-4 py-3">Status</th>
                            <th class="px-4 py-3">Amount</th>
                            <th class="px-4 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

                        <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                            <!-- Client -->
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                        <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                    </div>
                                    <div>
                                        <p class="font-semibold">Hans Burger</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">1x0 VIP Transportation</p>
                                    </div>
                                </div>
                            </td>
                            <!-- Description -->
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                        <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                    </div>
                                    <div>
                                        <p class="font-semibold">Hyat Zillara</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">-> Kingston</p>
                                    </div>
                                </div>
                            </td>
                            <!-- Date -->
                            <td class="px-4 py-3 text-sm">15-01-2021</td>
                            <!-- Status -->
                            <td class="px-4 py-3 text-xs">
                                <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"> Approved </span>
                            </td>
                            <!-- Amount -->
                            <td class="px-4 py-3 text-sm">$855.85</td>
                            <!-- Action Column -->
                            <td class="px-4 py-3 text-xs">
                                <span class="px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-300 rounded-full dark:bg-yellow-700 dark:text-yellow-300"> View </span>
                            </td>
                        </tr>
                        <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                            <!-- Client -->
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                        <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                    </div>
                                    <div>
                                        <p class="font-semibold">Hans Burger</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">1x0 VIP Transportation</p>
                                    </div>
                                </div>
                            </td>
                            <!-- Description -->
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                        <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                    </div>
                                    <div>
                                        <p class="font-semibold">Hyat Zillara</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">-> Kingston</p>
                                    </div>
                                </div>
                            </td>
                            <!-- Date -->
                            <td class="px-4 py-3 text-sm">15-01-2021</td>
                            <!-- Status -->
                            <td class="px-4 py-3 text-xs">
                                <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"> Approved </span>
                            </td>
                            <!-- Amount -->
                            <td class="px-4 py-3 text-sm">$855.85</td>
                            <!-- Action Column -->
                            <td class="px-4 py-3 text-xs">
                                <span class="px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-300 rounded-full dark:bg-yellow-700 dark:text-yellow-300"> View </span>
                            </td>
                        </tr>
                        <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                            <!-- Client -->
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                        <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                    </div>
                                    <div>
                                        <p class="font-semibold">Hans Burger</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">1x0 VIP Transportation</p>
                                    </div>
                                </div>
                            </td>
                            <!-- Description -->
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                        <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                    </div>
                                    <div>
                                        <p class="font-semibold">Hyat Zillara</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">-> Kingston</p>
                                    </div>
                                </div>
                            </td>
                            <!-- Date -->
                            <td class="px-4 py-3 text-sm">15-01-2021</td>
                            <!-- Status -->
                            <td class="px-4 py-3 text-xs">
                                <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"> Approved </span>
                            </td>
                            <!-- Amount -->
                            <td class="px-4 py-3 text-sm">$855.85</td>
                            <!-- Action Column -->
                            <td class="px-4 py-3 text-xs">
                                <span class="px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-300 rounded-full dark:bg-yellow-700 dark:text-yellow-300"> View </span>
                            </td>
                        </tr>
                        <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                            <!-- Client -->
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                        <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                    </div>
                                    <div>
                                        <p class="font-semibold">Hans Burger</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">1x0 VIP Transportation</p>
                                    </div>
                                </div>
                            </td>
                            <!-- Description -->
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                        <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                    </div>
                                    <div>
                                        <p class="font-semibold">Hyat Zillara</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">-> Kingston</p>
                                    </div>
                                </div>
                            </td>
                            <!-- Date -->
                            <td class="px-4 py-3 text-sm">15-01-2021</td>
                            <!-- Status -->
                            <td class="px-4 py-3 text-xs">
                                <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"> Approved </span>
                            </td>
                            <!-- Amount -->
                            <td class="px-4 py-3 text-sm">$855.85</td>
                            <!-- Action Column -->
                            <td class="px-4 py-3 text-xs">
                                <span class="px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-300 rounded-full dark:bg-yellow-700 dark:text-yellow-300"> View </span>
                            </td>
                        </tr>
                        <!-- End Data Row -->
                    </tbody>
                </table>
            </div>
            <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                <span class="flex items-center col-span-3"> Showing 21-30 of 100 </span>
                <span class="col-span-2"></span>

                <!-- Pagination -->
                <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                    <nav aria-label="Table navigation">
                        <ul class="inline-flex items-center">
                            <li>
                                <button class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple" aria-label="Previous">
                                    <svg aria-hidden="true" class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                        <path d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">1</button>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">2</button>
                            </li>
                            <li>
                                <button class="px-3 py-1 text-white dark:text-gray-800 transition-colors duration-150 bg-blue-600 dark:bg-gray-100 border border-r-0 border-blue-600 dark:border-gray-100 rounded-md focus:outline-none focus:shadow-outline-purple">3</button>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">4</button>
                            </li>
                            <li>
                                <span class="px-3 py-1">...</span>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">8</button>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">9</button>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple" aria-label="Next">
                                    <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                                        <path d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </li>
                        </ul>
                    </nav>
                </span>
                <!-- END PAGINATION -->
            </div>
        </div>
    </div>
    <!-- ./Client Table -->

</div>

@endsection
