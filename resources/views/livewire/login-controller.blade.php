<div>
    <form wire:submit.prevent="onLogin">
        <div class="mx-auto text-center mt-10 w-full">
            @if(session()->has('message'))
            <div class="text-blue-500 text-lg">
                {{ session('message')}}
            </div>
            @endif
            @if(session()->has('error'))
            <div class="text-red-500 text-lg">
                {{ session('error')}}
            </div>
            @endif

            <div class="flex-row">
                <label>Username:</label>
                <input wire:model="lvUsername" type="text" class="border-2 border-blue-500" />
            </div>
            <div class="ml-2 mt-4 flex-row">
                <label>Password:</label>
                <input wire:model="lvPassword" type="password" class="border-2 border-blue-500" />
            </div>
            <div class="ml-2 mt-4 flex-row">
                <button class="border-2 border-blue-500 bg-blue-900 p-2 rounded text-white"> Login </button>
            </div>

        </div>
    </form>
</div>