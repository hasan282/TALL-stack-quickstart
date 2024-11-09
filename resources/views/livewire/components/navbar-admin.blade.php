<nav class="fixed top-0 z-30 w-full md:pl-60 bg-white dark:bg-gray-800">

    <div class="h-14 flex items-center px-4">

        <button type="button" @click="hideSide=false"
            class="p-2 rounded-lg text-gray-800 dark:text-gray-100 hover:bg-gray-200 dark:hover:bg-gray-700">
            <span class="sr-only">open sidebar</span>
            <x-svg.list class="w-6 h-6 fill-current" />
        </button>

        <x-button.dark-switch
            class="rounded-lg ml-auto p-2 text-gray-800 dark:text-gray-100 hover:bg-gray-200 dark:hover:bg-gray-700" />

        <div x-data="{ isOpen: false }" class="relative ml-2">

            <button type="button" @click="isOpen=!isOpen"
                class="align-middle cursor-pointer rounded-full transition focus:ring-4 bg-gray-300 dark:bg-gray-600 focus:ring-gray-200 dark:focus:ring-gray-700"
                aria-haspopup="true" :aria-expanded="isOpen">

                <div class="w-9 h-9 rounded-[100%] overflow-hidden bg-cover bg-center"
                    style="background-image: url('https://hasan282.github.io/resource/img/me-bricks.jpg')"></div>
            </button>

            <div x-cloak x-show="isOpen" x-transition @click.outside="isOpen=false"
                class="p-2 min-w-40 absolute top-11 right-0 flex flex-col overflow-hidden rounded-md bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700"
                role="menu">

                <x-link.dropdown-item href="#">
                    <x-svg.list class="w-4 h-4 fill-current mr-3" />Profile
                </x-link.dropdown-item>

                <x-link.dropdown-item href="#">
                    <x-svg.list class="w-4 h-4 fill-current mr-3" />Settings
                </x-link.dropdown-item>

                <x-link.dropdown-item href="#">
                    <x-svg.list class="w-4 h-4 fill-current mr-3" />Tasks
                </x-link.dropdown-item>

                <x-link.dropdown-item href="#">
                    <x-svg.list class="w-4 h-4 fill-current mr-3" />Subscription
                </x-link.dropdown-item>

                <button wire:click="logout"
                    class="px-4 py-2 flex items-center text-left text-sm rounded text-gray-600 hover:bg-gray-200 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white"
                    role="menuitem"><x-svg.login class="w-4 h-4 fill-current mr-3" />Sign Out</button>
            </div>
        </div>
    </div>

</nav>
