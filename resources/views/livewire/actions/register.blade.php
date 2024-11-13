<div class="max-w-md w-full mx-auto p-7">

    <a href="#" class="text-center font-semibold text-gray-700 dark:text-gray-200">
        <div
            class="border-2 p-3 rounded-lg border-gray-300 dark:border-gray-700 hover:bg-gray-200 dark:hover:bg-gray-800 flex justify-center">
            <x-svg.google class="block h-6" />
            <span class="ml-3 my-auto">Continue with Google</span>
        </div>
    </a>

    <div class="flex items-center py-3">
        <hr class="flex-1 border border-gray-200 dark:border-gray-800">
        <span class="font-normal px-2 text-gray-300 dark:text-gray-700">OR</span>
        <hr class="flex-1 border border-gray-200 dark:border-gray-800">
    </div>

    <form wire:submit="register">

        <div class="grid grid-cols-2 gap-2 mb-3">

            <x-form.input id="firstName" title="First Name">{{ $firstName }}</x-form.input>
            <x-form.input id="lastName" title="Last Name">{{ $lastName }}</x-form.input>

        </div>

        <x-form.input id="emailAddress" title="Email Address">{{ $emailAddress }}</x-form.input>

        <div class="h-10 flex items-center">
            <p class="mb-0 text-red-600 text-sm mx-auto hidden">Error Message Displayed Here</p>
            {{ var_dump($errors->all()) }}
        </div>

        <x-button.submit>
            <span class="font-semibold my-auto">Create New Account</span>
            <x-svg.person-plus class="block w-5 my-auto ml-2 fill-current" wire:loading.remove />
            <x-svg.spinner-ellipse class="block w-5 my-auto ml-2 animate-spin opacity-70" wire:loading />
        </x-button.submit>

    </form>

    {{ var_dump([$firstName, $lastName, $emailAddress]) }}

</div>
