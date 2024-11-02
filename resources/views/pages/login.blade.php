<x-layout.home>

    <x-slot:title>
        Sign in
    </x-slot:title>

    <div class="bg-gray-100 dark:bg-gray-900 flex justify-center items-stretch min-h-screen">

        <div class="w-1/2 max-md:hidden bg-cover bg-center"
            style="background-image: url('https://images7.alphacoders.com/134/1344394.png')">
        </div>

        <div class= "w-full lg:w-1/2 md:w-4/5 flex flex-col justify-between">

            <div class="p-3 flex flex-wrap items-center justify-between">
                <a href="/" class="flex items-center text-red-600" wire:navigate>
                    <span class="dark:text-red-300">
                        <x-svg.laravel-logo class="block h-9 fill-current mr-2" />
                    </span>
                    <span
                        class="self-center max-sm:hidden text-xl font-semibold whitespace-nowrap dark:text-white">Laravel</span>
                </a>
                <div class="flex items-center">
                    <x-button.dark-switch
                        class="rounded-lg p-2 text-gray-800 dark:text-white bg-gray-100 hover:bg-gray-200 dark:bg-gray-900  dark:hover:bg-gray-700" />
                    <x-link.button href="#" color="rose" class="ml-3">Register Now</x-link.button>
                </div>
            </div>

            <div class="max-w-md w-full mx-auto p-7">
                <h1 class="text-xl font-normal mb-6 text-center">
                    <span class="text-gray-600 dark:text-gray-400">Sign in to </span>
                    <span class="text-gray-800 dark:text-gray-300 font-semibold">{{ config('app.name') }}</span>
                </h1>

                <form action="#">
                    <x-form.input id="userNameEmail" title="Email or Username" class="mb-2" />
                    <x-form.input id="userPassword" title="Password" type="password" class="mb-8" />

                    <button type="button" x-data="{ 'isHover': false }" @mouseover="isHover=true" @mouseout="isHover=false"
                        class="flex justify-center bg-blue-600 dark:bg-blue-700 hover:bg-blue-700 dark:hover:bg-blue-600 text-white rounded-lg py-2 px-4 w-full">
                        <span class="my-auto font-semibold">Sign in</span>
                        <x-svg.login class="block h-5 fill-current my-auto ml-2" x-show="isHover" />
                    </button>
                </form>

                <div class="mt-3 text-center">
                    <a href="#"
                        class="text-blue-600 dark:text-blue-500 hover:text-blue-400 dark:hover:text-blue-600">
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

            <div class="p-3 text-center text-gray-700 dark:text-gray-400">
                <p class="text-sm">&copy; {{ date('Y') }} <a href="https://hasan282.github.io/"
                        class="font-semibold text-blue-700 dark:text-blue-600 hover:text-blue-500 dark:hover:text-blue-700"
                        target="_blank">hasan282</a> All Rights Reserved</p>
            </div>
        </div>
    </div>

</x-layout.home>
