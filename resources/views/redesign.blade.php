@extends('redesign-layout')
@section('page_title','Edit Form')
@section('content')
    <div class="h-full w-full ">

        <div class=" p-2 bg-red-600 sticky z-10 top-0  w-full">

            <div class="flex sm:p-2 justify-between h-full flex-col space-y-1">
                <h3 class="font-semibold text-xl text-gray-50">Booking Operations Center</h3>

                <div class="flex sm:flex-row flex-col gap-5">
                    <div class="flex flex-col">
                        <h1 class="font-semibold text-white">Booking#: LT-10001 </h1>
                        <h1 class="font-semibold text-white">Status: BOOKED </h1>
                        <h1 class="font-semibold text-white">Follow-Up: NEEDED </h1>
                    </div>


                    <div
                        class="relative justify-evenly sm:justify-end sm:items-end  flex w-full max-w-full flex-grow flex-1">
                        <a class=" px-4 py-2 bg-blue-500 text-white  active:text-gray-700 text-xs font-bold uppercase rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">Confirm</a>
                        <a class=" px-4 py-2 bg-green-500 text-white  active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">Follow
                            Up</a>
                        <a class=" px-4 py-2 bg-purple-500 text-white  active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                            Claim</a>
                    </div>
                </div>

            </div>

        </div>

        <div class="w-full">
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-1 ">
                <div class=" h-full">
                    <div class="my-4 mx-4 flex flex-row gap-1">
                        <div
                            class="pb-2 relative flex flex-col flex-grow min-w-0 mb-0 lg:mb-0 break-words bg-gray-800 w-full shadow-lg rounded">
                            <div class="rounded-t mb-1 px-0 border-0 ">
                                <div class="flex flex-row items-center px-4 py-2 bg-gray-600 rounded-t ">
                                    <div class="relative w-full max-w-full flex-grow flex-1 ">
                                        <h3 class="font-semibold text-base text-gray-50">Service Entry Form</h3>
                                    </div>

                                    <div class="flex-shrink-0 flex ml-2 text-right">
                                        <a href="#" class="flex outline-none gap-1 items-center font-medium text-lg duration-300 text-gray-400 hover:text-yellow-500 dark:hover:shadow-1">
                                            <span>Save</span>

                                            <span>
                                                <svg width="20" height="20" viewBox="0 0 20 20"
                                                     fill="currentColor"
                                                     class="transform transition-transform duration-500 ease-in-out">
                                    <path fill-rule="evenodd"
                                          d="M17.064,4.656l-2.05-2.035C14.936,2.544,14.831,2.5,14.721,2.5H3.854c-0.229,0-0.417,0.188-0.417,0.417v14.167c0,0.229,0.188,0.417,0.417,0.417h12.917c0.229,0,0.416-0.188,0.416-0.417V4.952C17.188,4.84,17.144,4.733,17.064,4.656M6.354,3.333h7.917V10H6.354V3.333z M16.354,16.667H4.271V3.333h1.25v7.083c0,0.229,0.188,0.417,0.417,0.417h8.75c0.229,0,0.416-0.188,0.416-0.417V3.886l1.25,1.239V16.667z M13.402,4.688v3.958c0,0.229-0.186,0.417-0.417,0.417c-0.229,0-0.417-0.188-0.417-0.417V4.688c0-0.229,0.188-0.417,0.417-0.417C13.217,4.271,13.402,4.458,13.402,4.688"
                                          clip-rule="evenodd">
                                    </path>
                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>

                                <div class=" rounded-lg  lg:col-span-3 ">
                                    <!-- Form Here -->
                                    <form class="space-y-4 lg:p-5 p-3" method="post" action="">
                                    @csrf
                                    <!-- Name,Email -->
                                        <div class="space-y-4">
                                            <div class="text-center grid grid-cols-1 gap-4 sm:grid-cols-3">
                                                <x-Form.input :label="true" title="First Name"
                                                              placeholder="First Name"/>
                                                <x-Form.input :label="true" title="Last Name"
                                                              placeholder="Last Name"/>
                                                <x-Form.input :label="true" title="Email Address"
                                                              placeholder="Email Address"/>
                                            </div>

                                            <div class="text-center grid grid-cols-1 gap-4 sm:grid-cols-3">
                                                <x-Form.input :label="true" title="Mobile #"
                                                              placeholder="Mobile #"/>

                                                <x-Form.select :label="true" title="Service Type">
                                                    <x-Form.select-options selected disabled title="Select One"/>
                                                    <x-Form.select-options value="Airport Transfer"
                                                                           title="Airport Transfer"/>
                                                    <x-Form.select-options value="EXCURSION" title="EXCURSION"/>
                                                    <x-Form.select-options value="TRANSPORT" title="TRANSPORT"/>
                                                    <x-Form.select-options value="SITE INSPECTION"
                                                                           title="SITE INSPECTION"/>
                                                    <x-Form.select-options value="VIP TRANSPORT" title="VIP TRANSPORT"/>
                                                </x-Form.select>

                                                <x-Form.select :label="true" title="How Did You Hear About Us">
                                                    <x-Form.select-options selected disabled title="Select One"/>
                                                    <x-Form.select-options title="USED PREVIOUSLY"
                                                                           value="USED PREVIOUSLY"/>
                                                    <x-Form.select-options title="WEBSITE" value="WEBSITE"/>
                                                    <x-Form.select-options class="uppercase" title="Social Media"
                                                                           value="Social Media"/>
                                                    <x-Form.select-options class="uppercase" title="Search Engine"
                                                                           value="Search Engine"/>
                                                </x-Form.select>
                                            </div>

                                            <div class="text-center grid grid-cols-1 gap-4 sm:grid-cols-3">
                                                <x-Form.input :label="true" title="Passenger"
                                                              placeholder="Passenger"/>

                                                <x-Form.select :label="true" title="Billing Type">
                                                    <x-Form.select-options selected disabled title="Select One"/>
                                                    <x-Form.select-options value="CUSTOMER" title="CUSTOMER"/>
                                                    <x-Form.select-options value="INVOICE" title="INVOICE"/>
                                                    <x-Form.select-options value="AFFILIATE" title="AFFILIATE"/>
                                                    <x-Form.select-options value="COMPLIMENTARY" title="COMPLIMENTARY"/>
                                                </x-Form.select>

                                                <x-Form.input :label="true" title="Total Cost"
                                                              placeholder="Total Cost"/>
                                            </div>
                                        </div>


                                        <div class="space-y-4 pt-10 ">
                                            <div class="text-center grid grid-cols-1 gap-4 sm:grid-cols-3">
                                                <x-Form.select :label="true" title="Booking Type">
                                                    <x-Form.select-options selected disabled title="Select One"/>
                                                    <x-Form.select-options value="MAIN BOOKING" title="MAIN BOOKING"/>
                                                    <x-Form.select-options value="ADDITIONAL" title="ADDITIONAL"/>
                                                    <x-Form.select-options value="SINGLE" title="SINGLE"/>
                                                </x-Form.select>

                                                <x-Form.select :label="true" title="Driver">
                                                    <x-Form.select-options selected disabled title="Select One"/>
                                                    <x-Form.select-options value="SULLAVAN BIERSAY"
                                                                           title="SULLAVAN BIERSAY"/>
                                                    <x-Form.select-options value="HIRE DRIVER" title="HIRE DRIVER"/>
                                                </x-Form.select>

                                                <x-Form.select :label="true" title="Vehicle">
                                                    <x-Form.select-options selected disabled title="Select One"/>
                                                    <x-Form.select-options value="SUBURBAN" title="SUBURBAN"/>
                                                    <x-Form.select-options value="HIRE VEHICLE" title="HIRE VEHICLE"/>
                                                </x-Form.select>
                                            </div>

                                            <x-Form.input :label="true" title="Notes"
                                                          placeholder="Notes"/>
                                        </div>

                                        <div class="font-bold py-4 text-white">Movement Information [FROM]</div>

                                        <div class="space-y-4 ">

                                            <div class="text-center grid grid-cols-1 gap-4 sm:grid-cols-3">
                                                <x-Form.select :label="true" title="Location">
                                                    <x-Form.select-options selected disabled title="Select One"/>
                                                    <x-Form.select-options value="MBJ AIRPORT" title="MBJ AIRPORT"/>
                                                    <x-Form.select-options value="NMI AIRPORT" title="NMI AIRPORT"/>
                                                    <x-Form.select-options value="HYATT ZIVA" title="HYATT ZIVA"/>
                                                    <x-Form.select-options value="ROUND HILL RESORT"
                                                                           title="ROUND HILL RESORT"/>
                                                    <x-Form.select-options value="ROUND HILL RESORT"
                                                                           title="ROUND HILL RESORT"/>
                                                    <x-Form.select-options value="HILTON ROSEHALL"
                                                                           title="HILTON ROSEHALL"/>
                                                    <x-Form.select-options value="PORTLAND" title="PORTLAND"/>
                                                    <x-Form.select-options value="NEGRIL" title="NEGRIL"/>
                                                    <x-Form.select-options value="SOUTH COAST" title="SOUTH COAST"/>
                                                    <x-Form.select-options value="OCHI RIOS" title="OCHI RIOS"/>
                                                    <x-Form.select-options value="MOBAY HOTELS" title="MOBAY HOTELS"/>
                                                </x-Form.select>
                                                <x-Form.input :label="true" title="Passengers"
                                                              placeholder="Passengers"/>

                                                <x-Form.input type="date" :label="true" title="Travel Date"
                                                              placeholder="Travel Date"/>
                                            </div>

                                            <div class="text-center grid grid-cols-1 gap-4 sm:grid-cols-2">
                                                <x-Form.input type="time" :label="true" title="Travel Time"
                                                              placeholder="Travel Time"/>
                                                <x-Form.input :label="true" title="Notes"
                                                              placeholder="Notes"/>

                                            </div>
                                        </div>

                                        <div class="font-bold py-4 text-white">Movement Information [TO]</div>

                                        <div class="space-y-4 ">
                                            <div class="text-center grid grid-cols-1 gap-4 sm:grid-cols-3">
                                                <x-Form.select :label="true" title="Location">
                                                    <x-Form.select-options selected disabled title="Select One"/>
                                                    <x-Form.select-options value="MBJ AIRPORT" title="MBJ AIRPORT"/>
                                                    <x-Form.select-options value="NMI AIRPORT" title="NMI AIRPORT"/>
                                                    <x-Form.select-options value="HYATT ZIVA" title="HYATT ZIVA"/>
                                                    <x-Form.select-options value="ROUND HILL RESORT"
                                                                           title="ROUND HILL RESORT"/>
                                                    <x-Form.select-options value="ROUND HILL RESORT"
                                                                           title="ROUND HILL RESORT"/>
                                                    <x-Form.select-options value="HILTON ROSEHALL"
                                                                           title="HILTON ROSEHALL"/>
                                                    <x-Form.select-options value="PORTLAND" title="PORTLAND"/>
                                                    <x-Form.select-options value="NEGRIL" title="NEGRIL"/>
                                                    <x-Form.select-options value="SOUTH COAST" title="SOUTH COAST"/>
                                                    <x-Form.select-options value="OCHI RIOS" title="OCHI RIOS"/>
                                                    <x-Form.select-options value="MOBAY HOTELS" title="MOBAY HOTELS"/>
                                                </x-Form.select>
                                                <x-Form.input :label="true" title="Passengers"
                                                              placeholder="Passengers"/>

                                                <x-Form.input type="date" :label="true" title="Travel Date"
                                                              placeholder="Travel Date"/>
                                            </div>

                                            <div class="text-center grid grid-cols-1 gap-4 sm:grid-cols-2">
                                                <x-Form.input type="time" :label="true" title="Travel Time"
                                                              placeholder="Travel Time"/>
                                                <x-Form.input :label="true" title="Notes"
                                                              placeholder="Notes"/>

                                            </div>
                                        </div>
                                        <!-- End Form -->
                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div>
                        <div class="w-full">
                            <div class="grid grid-cols-1 gap-4 sm:grid-cols-1 ">
                                <div class=" h-full">
                                    <div class="my-4 mx-4 flex flex-row gap-1">
                                        <div
                                            class="pb-2 relative flex flex-col flex-grow min-w-0 mb-0 lg:mb-0 break-words bg-gray-800 w-full shadow-lg rounded">
                                            <div class="rounded-t mb-1 px-0 border-0 ">
                                                <div
                                                    class="flex flex-row items-center px-4 py-2 bg-gray-600 rounded-t ">
                                                    <div class="relative w-full max-w-full flex-grow flex-1 ">
                                                        <h3 class="font-semibold text-base text-gray-50">Service Entry
                                                            Form</h3>
                                                    </div>
                                                </div>

                                                <div class=" rounded-lg  lg:col-span-3 ">
                                                    <div class="pt-3 px-3">
                                                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-4">

                                                            <div class="flex items-center gap-3">
                                                                <div
                                                                    class="w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0 bg-red-600 my-2">
                                                                    <svg
                                                                        class="animate-pulse w-8 h-8 fill-current text-black"
                                                                        viewBox="0 -1 22 22">
                                                                        <path
                                                                            d="M5.109,8.392H4.249c-0.238,0-0.43,0.193-0.43,0.431c0,0.238,0.192,0.431,0.43,0.431h0.861c0.238,0,0.43-0.193,0.43-0.431C5.54,8.585,5.347,8.392,5.109,8.392 M4.249,4.088h11.19c0.238,0,0.431-0.192,0.431-0.43c0-0.238-0.192-0.431-0.431-0.431H4.249c-0.238,0-0.43,0.192-0.43,0.431C3.818,3.896,4.011,4.088,4.249,4.088 M2.527,5.81H17.16c0.238,0,0.431-0.192,0.431-0.43c0-0.238-0.192-0.431-0.431-0.431H2.527c-0.238,0-0.43,0.192-0.43,0.431C2.097,5.617,2.289,5.81,2.527,5.81 M18.452,6.67H1.236c-0.476,0-0.861,0.385-0.861,0.861v8.608c0,0.475,0.385,0.86,0.861,0.86h17.216c0.475,0,0.86-0.386,0.86-0.86V7.531C19.312,7.056,18.927,6.67,18.452,6.67 M1.666,7.531c0.238,0,0.431,0.192,0.431,0.431c0,0.238-0.192,0.43-0.431,0.43c-0.238,0-0.43-0.192-0.43-0.43C1.236,7.724,1.428,7.531,1.666,7.531 M1.666,16.14c-0.238,0-0.43-0.192-0.43-0.431c0-0.237,0.192-0.431,0.43-0.431c0.238,0,0.431,0.193,0.431,0.431C2.097,15.947,1.904,16.14,1.666,16.14 M18.021,16.14c-0.238,0-0.431-0.192-0.431-0.431c0-0.237,0.192-0.431,0.431-0.431s0.431,0.193,0.431,0.431C18.452,15.947,18.26,16.14,18.021,16.14 M18.452,14.496c-0.136-0.048-0.279-0.078-0.431-0.078c-0.714,0-1.291,0.578-1.291,1.291c0,0.151,0.03,0.295,0.078,0.431H2.878c0.048-0.136,0.079-0.279,0.079-0.431c0-0.713-0.579-1.291-1.292-1.291c-0.151,0-0.295,0.03-0.43,0.078V9.174c0.135,0.048,0.279,0.079,0.43,0.079c0.713,0,1.292-0.578,1.292-1.291c0-0.152-0.031-0.295-0.079-0.431h13.93C16.761,7.667,16.73,7.81,16.73,7.962c0,0.713,0.577,1.291,1.291,1.291c0.151,0,0.295-0.031,0.431-0.079V14.496z M18.021,8.392c-0.238,0-0.431-0.192-0.431-0.43c0-0.238,0.192-0.431,0.431-0.431s0.431,0.192,0.431,0.431C18.452,8.2,18.26,8.392,18.021,8.392 M15.438,14.418h-0.86c-0.238,0-0.431,0.192-0.431,0.43c0,0.238,0.192,0.431,0.431,0.431h0.86c0.238,0,0.431-0.192,0.431-0.431C15.869,14.61,15.677,14.418,15.438,14.418 M9.844,8.392c-1.901,0-3.443,1.542-3.443,3.443s1.542,3.443,3.443,3.443s3.443-1.542,3.443-3.443S11.745,8.392,9.844,8.392 M11.233,13.271c-0.071,0.162-0.169,0.297-0.292,0.403c-0.124,0.108-0.268,0.189-0.434,0.246c-0.166,0.058-0.295,0.089-0.488,0.097v0.4H9.673v-0.4c-0.208-0.004-0.35-0.037-0.522-0.099c-0.174-0.063-0.322-0.151-0.445-0.267s-0.219-0.257-0.286-0.424c-0.067-0.168-0.099-0.361-0.095-0.579h0.659c-0.003,0.256,0.052,0.459,0.168,0.608c0.115,0.147,0.257,0.226,0.522,0.233v-1.417c-0.158-0.042-0.265-0.094-0.422-0.154c-0.156-0.061-0.297-0.139-0.422-0.234c-0.125-0.095-0.226-0.215-0.303-0.36c-0.077-0.144-0.115-0.323-0.115-0.538c0-0.187,0.035-0.352,0.106-0.494c0.072-0.143,0.168-0.261,0.289-0.357c0.121-0.096,0.261-0.168,0.419-0.22C9.383,9.665,9.5,9.64,9.673,9.64V9.256h0.348V9.64c0.173,0,0.287,0.023,0.441,0.07c0.154,0.047,0.288,0.117,0.401,0.211c0.114,0.093,0.204,0.212,0.272,0.356c0.067,0.145,0.101,0.312,0.101,0.503h-0.659c-0.008-0.199-0.059-0.351-0.153-0.457c-0.095-0.105-0.197-0.158-0.404-0.158V11.4c0.173,0.048,0.293,0.103,0.459,0.165c0.166,0.062,0.312,0.142,0.439,0.239c0.127,0.098,0.229,0.219,0.306,0.363c0.077,0.144,0.116,0.321,0.116,0.532C11.341,12.919,11.305,13.109,11.233,13.271M10.458,12.332c-0.067-0.051-0.143-0.092-0.228-0.123c-0.085-0.031-0.123-0.06-0.21-0.082v1.363c0.208-0.016,0.329-0.076,0.462-0.185c0.133-0.107,0.199-0.277,0.199-0.512c0-0.109-0.02-0.2-0.061-0.275C10.581,12.444,10.526,12.383,10.458,12.332 M9.069,10.74c0,0.094,0.019,0.174,0.058,0.241c0.039,0.066,0.087,0.122,0.148,0.169c0.06,0.047,0.128,0.085,0.208,0.114s0.109,0.054,0.19,0.073v-1.171c-0.208,0-0.32,0.044-0.434,0.132C9.126,10.386,9.069,10.533,9.069,10.74"></path>
                                                                    </svg>
                                                                    <!-- <a class="font-medium text-gray-800 hover:text-gray-900 dark:text-gray-50 dark:hover:text-gray-100" href="#0" style="outline: none;">Configure Email Server</a> -->
                                                                </div>
                                                                <div
                                                                    class="flex-grow flex items-center border-gray-100 text-sm text-gray-50 py-2">
                                                                    <div
                                                                        class="flex-grow flex justify-between items-center">
                                                                        <div class="self-center">
                                                                            <a class="font-medium text-gray-50 outline-none hover:text-gray-100"
                                                                               href="#0">View/Send Estimate</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="flex items-center gap-3">
                                                                <div
                                                                    class="w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0 bg-red-600 my-2">
                                                                    <svg
                                                                        class="animate-pulse w-8 h-8 fill-current text-black"
                                                                        viewBox="0 -1 22 22">
                                                                        <path
                                                                            d="M5.109,8.392H4.249c-0.238,0-0.43,0.193-0.43,0.431c0,0.238,0.192,0.431,0.43,0.431h0.861c0.238,0,0.43-0.193,0.43-0.431C5.54,8.585,5.347,8.392,5.109,8.392 M4.249,4.088h11.19c0.238,0,0.431-0.192,0.431-0.43c0-0.238-0.192-0.431-0.431-0.431H4.249c-0.238,0-0.43,0.192-0.43,0.431C3.818,3.896,4.011,4.088,4.249,4.088 M2.527,5.81H17.16c0.238,0,0.431-0.192,0.431-0.43c0-0.238-0.192-0.431-0.431-0.431H2.527c-0.238,0-0.43,0.192-0.43,0.431C2.097,5.617,2.289,5.81,2.527,5.81 M18.452,6.67H1.236c-0.476,0-0.861,0.385-0.861,0.861v8.608c0,0.475,0.385,0.86,0.861,0.86h17.216c0.475,0,0.86-0.386,0.86-0.86V7.531C19.312,7.056,18.927,6.67,18.452,6.67 M1.666,7.531c0.238,0,0.431,0.192,0.431,0.431c0,0.238-0.192,0.43-0.431,0.43c-0.238,0-0.43-0.192-0.43-0.43C1.236,7.724,1.428,7.531,1.666,7.531 M1.666,16.14c-0.238,0-0.43-0.192-0.43-0.431c0-0.237,0.192-0.431,0.43-0.431c0.238,0,0.431,0.193,0.431,0.431C2.097,15.947,1.904,16.14,1.666,16.14 M18.021,16.14c-0.238,0-0.431-0.192-0.431-0.431c0-0.237,0.192-0.431,0.431-0.431s0.431,0.193,0.431,0.431C18.452,15.947,18.26,16.14,18.021,16.14 M18.452,14.496c-0.136-0.048-0.279-0.078-0.431-0.078c-0.714,0-1.291,0.578-1.291,1.291c0,0.151,0.03,0.295,0.078,0.431H2.878c0.048-0.136,0.079-0.279,0.079-0.431c0-0.713-0.579-1.291-1.292-1.291c-0.151,0-0.295,0.03-0.43,0.078V9.174c0.135,0.048,0.279,0.079,0.43,0.079c0.713,0,1.292-0.578,1.292-1.291c0-0.152-0.031-0.295-0.079-0.431h13.93C16.761,7.667,16.73,7.81,16.73,7.962c0,0.713,0.577,1.291,1.291,1.291c0.151,0,0.295-0.031,0.431-0.079V14.496z M18.021,8.392c-0.238,0-0.431-0.192-0.431-0.43c0-0.238,0.192-0.431,0.431-0.431s0.431,0.192,0.431,0.431C18.452,8.2,18.26,8.392,18.021,8.392 M15.438,14.418h-0.86c-0.238,0-0.431,0.192-0.431,0.43c0,0.238,0.192,0.431,0.431,0.431h0.86c0.238,0,0.431-0.192,0.431-0.431C15.869,14.61,15.677,14.418,15.438,14.418 M9.844,8.392c-1.901,0-3.443,1.542-3.443,3.443s1.542,3.443,3.443,3.443s3.443-1.542,3.443-3.443S11.745,8.392,9.844,8.392 M11.233,13.271c-0.071,0.162-0.169,0.297-0.292,0.403c-0.124,0.108-0.268,0.189-0.434,0.246c-0.166,0.058-0.295,0.089-0.488,0.097v0.4H9.673v-0.4c-0.208-0.004-0.35-0.037-0.522-0.099c-0.174-0.063-0.322-0.151-0.445-0.267s-0.219-0.257-0.286-0.424c-0.067-0.168-0.099-0.361-0.095-0.579h0.659c-0.003,0.256,0.052,0.459,0.168,0.608c0.115,0.147,0.257,0.226,0.522,0.233v-1.417c-0.158-0.042-0.265-0.094-0.422-0.154c-0.156-0.061-0.297-0.139-0.422-0.234c-0.125-0.095-0.226-0.215-0.303-0.36c-0.077-0.144-0.115-0.323-0.115-0.538c0-0.187,0.035-0.352,0.106-0.494c0.072-0.143,0.168-0.261,0.289-0.357c0.121-0.096,0.261-0.168,0.419-0.22C9.383,9.665,9.5,9.64,9.673,9.64V9.256h0.348V9.64c0.173,0,0.287,0.023,0.441,0.07c0.154,0.047,0.288,0.117,0.401,0.211c0.114,0.093,0.204,0.212,0.272,0.356c0.067,0.145,0.101,0.312,0.101,0.503h-0.659c-0.008-0.199-0.059-0.351-0.153-0.457c-0.095-0.105-0.197-0.158-0.404-0.158V11.4c0.173,0.048,0.293,0.103,0.459,0.165c0.166,0.062,0.312,0.142,0.439,0.239c0.127,0.098,0.229,0.219,0.306,0.363c0.077,0.144,0.116,0.321,0.116,0.532C11.341,12.919,11.305,13.109,11.233,13.271M10.458,12.332c-0.067-0.051-0.143-0.092-0.228-0.123c-0.085-0.031-0.123-0.06-0.21-0.082v1.363c0.208-0.016,0.329-0.076,0.462-0.185c0.133-0.107,0.199-0.277,0.199-0.512c0-0.109-0.02-0.2-0.061-0.275C10.581,12.444,10.526,12.383,10.458,12.332 M9.069,10.74c0,0.094,0.019,0.174,0.058,0.241c0.039,0.066,0.087,0.122,0.148,0.169c0.06,0.047,0.128,0.085,0.208,0.114s0.109,0.054,0.19,0.073v-1.171c-0.208,0-0.32,0.044-0.434,0.132C9.126,10.386,9.069,10.533,9.069,10.74"></path>
                                                                    </svg>
                                                                    <!-- <a class="font-medium text-gray-800 hover:text-gray-900 dark:text-gray-50 dark:hover:text-gray-100" href="#0" style="outline: none;">Configure Email Server</a> -->
                                                                </div>
                                                                <div
                                                                    class="flex-grow flex items-center border-gray-100 text-sm text-gray-50 py-2">
                                                                    <div
                                                                        class="flex-grow flex justify-between items-center">
                                                                        <div class="self-center">
                                                                            <a class="font-medium text-gray-50 outline-none hover:text-gray-100"
                                                                               href="#0">View/Send Estimate</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="flex items-center gap-3">
                                                                <div
                                                                    class="w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0 bg-red-600 my-2">
                                                                    <svg
                                                                        class="animate-pulse w-8 h-8 fill-current text-black"
                                                                        viewBox="0 -1 22 22">
                                                                        <path
                                                                            d="M5.109,8.392H4.249c-0.238,0-0.43,0.193-0.43,0.431c0,0.238,0.192,0.431,0.43,0.431h0.861c0.238,0,0.43-0.193,0.43-0.431C5.54,8.585,5.347,8.392,5.109,8.392 M4.249,4.088h11.19c0.238,0,0.431-0.192,0.431-0.43c0-0.238-0.192-0.431-0.431-0.431H4.249c-0.238,0-0.43,0.192-0.43,0.431C3.818,3.896,4.011,4.088,4.249,4.088 M2.527,5.81H17.16c0.238,0,0.431-0.192,0.431-0.43c0-0.238-0.192-0.431-0.431-0.431H2.527c-0.238,0-0.43,0.192-0.43,0.431C2.097,5.617,2.289,5.81,2.527,5.81 M18.452,6.67H1.236c-0.476,0-0.861,0.385-0.861,0.861v8.608c0,0.475,0.385,0.86,0.861,0.86h17.216c0.475,0,0.86-0.386,0.86-0.86V7.531C19.312,7.056,18.927,6.67,18.452,6.67 M1.666,7.531c0.238,0,0.431,0.192,0.431,0.431c0,0.238-0.192,0.43-0.431,0.43c-0.238,0-0.43-0.192-0.43-0.43C1.236,7.724,1.428,7.531,1.666,7.531 M1.666,16.14c-0.238,0-0.43-0.192-0.43-0.431c0-0.237,0.192-0.431,0.43-0.431c0.238,0,0.431,0.193,0.431,0.431C2.097,15.947,1.904,16.14,1.666,16.14 M18.021,16.14c-0.238,0-0.431-0.192-0.431-0.431c0-0.237,0.192-0.431,0.431-0.431s0.431,0.193,0.431,0.431C18.452,15.947,18.26,16.14,18.021,16.14 M18.452,14.496c-0.136-0.048-0.279-0.078-0.431-0.078c-0.714,0-1.291,0.578-1.291,1.291c0,0.151,0.03,0.295,0.078,0.431H2.878c0.048-0.136,0.079-0.279,0.079-0.431c0-0.713-0.579-1.291-1.292-1.291c-0.151,0-0.295,0.03-0.43,0.078V9.174c0.135,0.048,0.279,0.079,0.43,0.079c0.713,0,1.292-0.578,1.292-1.291c0-0.152-0.031-0.295-0.079-0.431h13.93C16.761,7.667,16.73,7.81,16.73,7.962c0,0.713,0.577,1.291,1.291,1.291c0.151,0,0.295-0.031,0.431-0.079V14.496z M18.021,8.392c-0.238,0-0.431-0.192-0.431-0.43c0-0.238,0.192-0.431,0.431-0.431s0.431,0.192,0.431,0.431C18.452,8.2,18.26,8.392,18.021,8.392 M15.438,14.418h-0.86c-0.238,0-0.431,0.192-0.431,0.43c0,0.238,0.192,0.431,0.431,0.431h0.86c0.238,0,0.431-0.192,0.431-0.431C15.869,14.61,15.677,14.418,15.438,14.418 M9.844,8.392c-1.901,0-3.443,1.542-3.443,3.443s1.542,3.443,3.443,3.443s3.443-1.542,3.443-3.443S11.745,8.392,9.844,8.392 M11.233,13.271c-0.071,0.162-0.169,0.297-0.292,0.403c-0.124,0.108-0.268,0.189-0.434,0.246c-0.166,0.058-0.295,0.089-0.488,0.097v0.4H9.673v-0.4c-0.208-0.004-0.35-0.037-0.522-0.099c-0.174-0.063-0.322-0.151-0.445-0.267s-0.219-0.257-0.286-0.424c-0.067-0.168-0.099-0.361-0.095-0.579h0.659c-0.003,0.256,0.052,0.459,0.168,0.608c0.115,0.147,0.257,0.226,0.522,0.233v-1.417c-0.158-0.042-0.265-0.094-0.422-0.154c-0.156-0.061-0.297-0.139-0.422-0.234c-0.125-0.095-0.226-0.215-0.303-0.36c-0.077-0.144-0.115-0.323-0.115-0.538c0-0.187,0.035-0.352,0.106-0.494c0.072-0.143,0.168-0.261,0.289-0.357c0.121-0.096,0.261-0.168,0.419-0.22C9.383,9.665,9.5,9.64,9.673,9.64V9.256h0.348V9.64c0.173,0,0.287,0.023,0.441,0.07c0.154,0.047,0.288,0.117,0.401,0.211c0.114,0.093,0.204,0.212,0.272,0.356c0.067,0.145,0.101,0.312,0.101,0.503h-0.659c-0.008-0.199-0.059-0.351-0.153-0.457c-0.095-0.105-0.197-0.158-0.404-0.158V11.4c0.173,0.048,0.293,0.103,0.459,0.165c0.166,0.062,0.312,0.142,0.439,0.239c0.127,0.098,0.229,0.219,0.306,0.363c0.077,0.144,0.116,0.321,0.116,0.532C11.341,12.919,11.305,13.109,11.233,13.271M10.458,12.332c-0.067-0.051-0.143-0.092-0.228-0.123c-0.085-0.031-0.123-0.06-0.21-0.082v1.363c0.208-0.016,0.329-0.076,0.462-0.185c0.133-0.107,0.199-0.277,0.199-0.512c0-0.109-0.02-0.2-0.061-0.275C10.581,12.444,10.526,12.383,10.458,12.332 M9.069,10.74c0,0.094,0.019,0.174,0.058,0.241c0.039,0.066,0.087,0.122,0.148,0.169c0.06,0.047,0.128,0.085,0.208,0.114s0.109,0.054,0.19,0.073v-1.171c-0.208,0-0.32,0.044-0.434,0.132C9.126,10.386,9.069,10.533,9.069,10.74"></path>
                                                                    </svg>
                                                                    <!-- <a class="font-medium text-gray-800 hover:text-gray-900 dark:text-gray-50 dark:hover:text-gray-100" href="#0" style="outline: none;">Configure Email Server</a> -->
                                                                </div>
                                                                <div
                                                                    class="flex-grow flex items-center border-gray-100 text-sm text-gray-50 py-2">
                                                                    <div
                                                                        class="flex-grow flex justify-between items-center">
                                                                        <div class="self-center">
                                                                            <a class="font-medium text-gray-50 outline-none hover:text-gray-100"
                                                                               href="#0">View/Send Estimate</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="flex items-center gap-3">
                                                                <div
                                                                    class="w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0 bg-red-600 my-2">
                                                                    <svg
                                                                        class="animate-pulse w-8 h-8 fill-current text-black"
                                                                        viewBox="0 -1 22 22">
                                                                        <path
                                                                            d="M5.109,8.392H4.249c-0.238,0-0.43,0.193-0.43,0.431c0,0.238,0.192,0.431,0.43,0.431h0.861c0.238,0,0.43-0.193,0.43-0.431C5.54,8.585,5.347,8.392,5.109,8.392 M4.249,4.088h11.19c0.238,0,0.431-0.192,0.431-0.43c0-0.238-0.192-0.431-0.431-0.431H4.249c-0.238,0-0.43,0.192-0.43,0.431C3.818,3.896,4.011,4.088,4.249,4.088 M2.527,5.81H17.16c0.238,0,0.431-0.192,0.431-0.43c0-0.238-0.192-0.431-0.431-0.431H2.527c-0.238,0-0.43,0.192-0.43,0.431C2.097,5.617,2.289,5.81,2.527,5.81 M18.452,6.67H1.236c-0.476,0-0.861,0.385-0.861,0.861v8.608c0,0.475,0.385,0.86,0.861,0.86h17.216c0.475,0,0.86-0.386,0.86-0.86V7.531C19.312,7.056,18.927,6.67,18.452,6.67 M1.666,7.531c0.238,0,0.431,0.192,0.431,0.431c0,0.238-0.192,0.43-0.431,0.43c-0.238,0-0.43-0.192-0.43-0.43C1.236,7.724,1.428,7.531,1.666,7.531 M1.666,16.14c-0.238,0-0.43-0.192-0.43-0.431c0-0.237,0.192-0.431,0.43-0.431c0.238,0,0.431,0.193,0.431,0.431C2.097,15.947,1.904,16.14,1.666,16.14 M18.021,16.14c-0.238,0-0.431-0.192-0.431-0.431c0-0.237,0.192-0.431,0.431-0.431s0.431,0.193,0.431,0.431C18.452,15.947,18.26,16.14,18.021,16.14 M18.452,14.496c-0.136-0.048-0.279-0.078-0.431-0.078c-0.714,0-1.291,0.578-1.291,1.291c0,0.151,0.03,0.295,0.078,0.431H2.878c0.048-0.136,0.079-0.279,0.079-0.431c0-0.713-0.579-1.291-1.292-1.291c-0.151,0-0.295,0.03-0.43,0.078V9.174c0.135,0.048,0.279,0.079,0.43,0.079c0.713,0,1.292-0.578,1.292-1.291c0-0.152-0.031-0.295-0.079-0.431h13.93C16.761,7.667,16.73,7.81,16.73,7.962c0,0.713,0.577,1.291,1.291,1.291c0.151,0,0.295-0.031,0.431-0.079V14.496z M18.021,8.392c-0.238,0-0.431-0.192-0.431-0.43c0-0.238,0.192-0.431,0.431-0.431s0.431,0.192,0.431,0.431C18.452,8.2,18.26,8.392,18.021,8.392 M15.438,14.418h-0.86c-0.238,0-0.431,0.192-0.431,0.43c0,0.238,0.192,0.431,0.431,0.431h0.86c0.238,0,0.431-0.192,0.431-0.431C15.869,14.61,15.677,14.418,15.438,14.418 M9.844,8.392c-1.901,0-3.443,1.542-3.443,3.443s1.542,3.443,3.443,3.443s3.443-1.542,3.443-3.443S11.745,8.392,9.844,8.392 M11.233,13.271c-0.071,0.162-0.169,0.297-0.292,0.403c-0.124,0.108-0.268,0.189-0.434,0.246c-0.166,0.058-0.295,0.089-0.488,0.097v0.4H9.673v-0.4c-0.208-0.004-0.35-0.037-0.522-0.099c-0.174-0.063-0.322-0.151-0.445-0.267s-0.219-0.257-0.286-0.424c-0.067-0.168-0.099-0.361-0.095-0.579h0.659c-0.003,0.256,0.052,0.459,0.168,0.608c0.115,0.147,0.257,0.226,0.522,0.233v-1.417c-0.158-0.042-0.265-0.094-0.422-0.154c-0.156-0.061-0.297-0.139-0.422-0.234c-0.125-0.095-0.226-0.215-0.303-0.36c-0.077-0.144-0.115-0.323-0.115-0.538c0-0.187,0.035-0.352,0.106-0.494c0.072-0.143,0.168-0.261,0.289-0.357c0.121-0.096,0.261-0.168,0.419-0.22C9.383,9.665,9.5,9.64,9.673,9.64V9.256h0.348V9.64c0.173,0,0.287,0.023,0.441,0.07c0.154,0.047,0.288,0.117,0.401,0.211c0.114,0.093,0.204,0.212,0.272,0.356c0.067,0.145,0.101,0.312,0.101,0.503h-0.659c-0.008-0.199-0.059-0.351-0.153-0.457c-0.095-0.105-0.197-0.158-0.404-0.158V11.4c0.173,0.048,0.293,0.103,0.459,0.165c0.166,0.062,0.312,0.142,0.439,0.239c0.127,0.098,0.229,0.219,0.306,0.363c0.077,0.144,0.116,0.321,0.116,0.532C11.341,12.919,11.305,13.109,11.233,13.271M10.458,12.332c-0.067-0.051-0.143-0.092-0.228-0.123c-0.085-0.031-0.123-0.06-0.21-0.082v1.363c0.208-0.016,0.329-0.076,0.462-0.185c0.133-0.107,0.199-0.277,0.199-0.512c0-0.109-0.02-0.2-0.061-0.275C10.581,12.444,10.526,12.383,10.458,12.332 M9.069,10.74c0,0.094,0.019,0.174,0.058,0.241c0.039,0.066,0.087,0.122,0.148,0.169c0.06,0.047,0.128,0.085,0.208,0.114s0.109,0.054,0.19,0.073v-1.171c-0.208,0-0.32,0.044-0.434,0.132C9.126,10.386,9.069,10.533,9.069,10.74"></path>
                                                                    </svg>
                                                                    <!-- <a class="font-medium text-gray-800 hover:text-gray-900 dark:text-gray-50 dark:hover:text-gray-100" href="#0" style="outline: none;">Configure Email Server</a> -->
                                                                </div>
                                                                <div
                                                                    class="flex-grow flex items-center border-gray-100 text-sm text-gray-50 py-2">
                                                                    <div
                                                                        class="flex-grow flex justify-between items-center">
                                                                        <div class="self-center">
                                                                            <a class="font-medium text-gray-50 outline-none hover:text-gray-100"
                                                                               href="#0">View/Send Estimate</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <x-Table.table>
                            <x-slot name="thead">
                                <x-Table.table-head title="Client"/>
                                <x-Table.table-head title="Description"/>
                                <x-Table.table-head title="Date"/>
                                <x-Table.table-head title="Status"/>
                                <x-Table.table-head title="Amount"/>
                                <x-Table.table-head title="Action"/>
                            </x-slot>

                            <x-slot name="tbody">
                                <x-Table.table-row>
                                    <x-Table.table-cell title="Testing"/>
                                    <x-Table.table-cell title="Testing"/>
                                    <x-Table.table-cell title="Testing"/>
                                    <x-Table.table-status title="Success"/>
                                    <x-Table.table-cell title="Testing"/>
                                    <x-Table.table-status type="warning" title="View"/>
                                </x-Table.table-row>

                                <x-Table.table-row>
                                    <x-Table.table-cell title="Testing"/>
                                    <x-Table.table-cell title="Testing"/>
                                    <x-Table.table-cell title="Testing"/>
                                    <x-Table.table-status type="error" title="Error"/>
                                    <x-Table.table-cell title="Testing"/>
                                    <x-Table.table-status type="warning" title="View"/>
                                </x-Table.table-row>

                                <x-Table.table-row>
                                    <x-Table.table-cell title="Testing"/>
                                    <x-Table.table-cell title="Testing"/>
                                    <x-Table.table-cell title="Testing"/>
                                    <x-Table.table-status type="warning" title="Warning"/>
                                    <x-Table.table-cell title="Testing"/>
                                    <x-Table.table-status type="warning" title="View"/>
                                </x-Table.table-row>

                                <x-Table.table-row>
                                    <x-Table.table-cell title="Testing"/>
                                    <x-Table.table-cell title="Testing"/>
                                    <x-Table.table-cell title="Testing"/>
                                    <x-Table.table-status type="error" title="Error"/>
                                    <x-Table.table-cell title="Testing"/>
                                    <x-Table.table-status type="warning" title="View"/>
                                </x-Table.table-row>
                            </x-slot>

                        </x-Table.table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
