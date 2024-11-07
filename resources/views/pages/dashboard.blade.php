<x-layout.home>

    <x-slot:title>Dashboard</x-slot:title>

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

    <div class="h-screen bg-gray-200 dark:bg-gray-800">

    </div>

</x-layout.home>
