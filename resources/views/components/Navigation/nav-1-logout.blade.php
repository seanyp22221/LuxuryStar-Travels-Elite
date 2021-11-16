<form method="post" action="{{route('logout-do')}}">
    @csrf
    <button
        {{$attributes->merge(['class' => 'px-4 py-2 text-sm font-medium hover:text-white bg-gray-500 hover:bg-red-600 dark:bg-gray-600 dark:text-gray-100 dark:hover:bg-red-600 transition duration-300 rounded-lg'])}}>
        Logout
    </button>
</form>
