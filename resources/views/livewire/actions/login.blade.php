<div class="max-w-md w-full mx-auto p-7">

    <h1 class="text-xl font-normal mb-6 text-center">
        <span class="text-gray-600 dark:text-gray-400">Sign in to </span>
        <span class="text-gray-800 dark:text-gray-300 font-semibold">{{ config('app.name') }}</span>
    </h1>

    <form wire:submit="login">
        <x-form.input id="userNameEmail" title="Email or Username" class="mb-2" />
        <x-form.input id="userPassword" title="Password" type="password" class="mb-8" />

        <button type="submit" x-data="{ 'isHover': false }" @mouseover="isHover=true" @mouseout="isHover=false"
            class="flex justify-center bg-blue-600 dark:bg-blue-700 hover:bg-blue-700 dark:hover:bg-blue-600 text-white rounded-lg py-2 px-4 w-full disabled:bg-gray-300 dark:disabled:bg-gray-800 disabled:border-gray-200 dark:disabled:border-gray-700 dark:disabled:text-gray-600 disabled:border">
            <span class="my-auto font-semibold">Sign in</span>
            <x-svg.login class="block h-5 fill-current my-auto ml-1" x-show="isHover" />
        </button>
    </form>

    <div class="mt-3 text-center">
        <a href="#" class="text-blue-600 dark:text-blue-500 hover:text-blue-400 dark:hover:text-blue-600">
            Forgot Password?
        </a>
    </div>

    <hr class="my-3 dark:border-gray-800">

    <a href="#" class="text-center font-semibold text-gray-700 dark:text-gray-200">
        <div
            class="border-2 p-3 rounded-lg border-gray-300 dark:border-gray-700 hover:bg-gray-200 dark:hover:bg-gray-800 flex justify-center">
            <x-svg.google class="block h-6" />
            <span class="ml-3 my-auto">Continue with Google</span>
        </div>
    </a>

</div>
