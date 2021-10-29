@extends('Prøxïmïtÿ.Auth.auth-layout')

@section('page_title','Prøxïmïtÿ Login')

@section('content')
    <div class="bg-gray-100 dark:bg-gray-900 w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
        flex items-center justify-center">




        <div class="w-full flex justify-evenly flex-col h-full">


            <h1 class="text-2xl  md:text-4xl font-bold leading-tight mt-12 dark:text-gray-200 ">Registration </h1>

            <x-form class="space-y-3" action="{{route('prox-on-register')}}">

                <x-slot name="body">


                    <div class="flex gap-5">
                        <x-auth-input :label="false" name="first_nm" placeholder="First Name" autofocus/>
                        <x-auth-input :label="false" name="last_nm" placeholder="Last Name"/>
                    </div>

                    <x-auth-input :label="false" name="email" placeholder="Email"/>


                    <x-auth-select :label="false">
                        <x-slot name="options">
                            <x-select-options selected disabled  title="Select Gender"/>
                            <x-select-options value="Male" title="Male"/>
                            <x-select-options value="Female" title="Female"/>
                        </x-slot>
                    </x-auth-select>

                    <x-date-input name="dob"/>

                    <div class="flex gap-5">
                        <x-auth-input :label="false" name="password" placeholder="Password"/>
                        <x-auth-input :label="false" name="password_confirmation" placeholder="Verify Password"/>
                    </div>


                    <x-auth-button class="bg-purple-600 font-semibold text-gray-300 hover:bg-purple-700 hover:text-white" title="Register"/>
                </x-slot>

            </x-form>

            <div>
                <hr class="my-6 border-gray-500 w-full">

                <p class="text-center mt-8 dark:text-gray-200">Already Have an account?<br>
                    <a href="{{url('/login')}}"
                       class="text-purple-500 dark:text-gray-200 duration-300 dark:hover:text-purple-500 hover:text-purple-700  font-semibold">
                        Login To Your Account
                    </a>
                </p>
            </div>


        </div>
    </div>
@endsection

