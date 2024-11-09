<x-layout.home>

    <x-slot:title>Sign in</x-slot:title>

    <div class="bg-gray-100 dark:bg-gray-900 flex justify-center items-stretch min-h-screen">

        <div class="w-1/2 max-md:hidden bg-cover bg-center blur-md invert dark:invert-0"
            style="background-image: url('https://cdn.pixabay.com/photo/2021/10/11/17/54/technology-6701504_640.jpg')">
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
                    <x-link.button href="{{ route('register') }}" color="rose" class="ml-3">Register
                        Now</x-link.button>
                </div>
            </div>

            <livewire:actions.login />

            <div class="p-3 text-center text-gray-700 dark:text-gray-400">
                <p class="text-sm">&copy; {{ date('Y') }} <a href="https://hasan282.github.io/"
                        class="font-semibold text-blue-700 dark:text-blue-600 hover:text-blue-500 dark:hover:text-blue-700"
                        target="_blank">hasan282</a> All Rights Reserved</p>
            </div>
        </div>
    </div>

</x-layout.home>
