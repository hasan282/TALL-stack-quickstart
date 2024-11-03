<header class="fixed w-full">
    <nav class="bg-white border-gray-200 py-3 dark:bg-gray-900 shadow-md" x-data="{ 'navOpen': false }">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">

            <a href="/" class="flex items-center text-red-600">
                <span class="dark:text-red-300">
                    <x-svg.laravel-logo class="block h-9 fill-current mr-2" />
                </span>
                <span
                    class="self-center max-sm:hidden text-xl font-semibold whitespace-nowrap dark:text-white">Laravel</span>
            </a>

            <div class="flex items-center lg:order-2">
                <x-button.dark-switch
                    class="rounded-lg p-2 text-gray-800 dark:text-white bg-white hover:bg-gray-200 dark:bg-gray-900  dark:hover:bg-gray-700" />

                <a href="{{ route('login') }}" wire:navigate
                    class="px-2 sm:px-4 py-2 mr-1 text-gray-800 dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700 font-semibold rounded-lg text-sm focus:outline-none">
                    <span class="max-sm:hidden">Sign in</span>
                    <span class="sm:hidden">
                        <x-svg.login class="block h-5 w-5 fill-current mr-1" />
                    </span>
                </a>

                <x-link.button href="#" color="rose">Register Now</x-link.button>

                <button type="button" @click="navOpen = !navOpen" @click.outside="if(navOpen)navOpen=false"
                    class="p-2 ml-1 rounded-lg lg:hidden focus:outline-none text-gray-700 hover:bg-gray-200 dark:text-gray-100 dark:hover:bg-gray-700">

                    <span class="sr-only">Open main menu</span>
                    <x-svg.span x-show="navOpen" class="block w-5 h-5 fill-current" />
                    <x-svg.list x-show="!navOpen" class="block w-5 h-5 fill-current" />
                </button>
            </div>

            <div class="items-center justify-between w-full lg:flex lg:w-auto lg:order-1"
                x-bind:class="{ 'hidden': !navOpen }">
                <ul class="flex flex-col mt-4 font-normal lg:flex-row lg:space-x-8 lg:mt-0">

                    <x-link.navbar color="red" href="#about" :active='false'>About</x-link.navbar>
                    <x-link.navbar color="red" href="#team" :active='false'>Team</x-link.navbar>
                    <x-link.navbar color="red" href="#business" :active='false'>Business</x-link.navbar>
                    <x-link.navbar color="red" href="#service" :active='false'>Service</x-link.navbar>
                    <x-link.navbar color="red" href="#contact" :active='false'>Contact</x-link.navbar>

                </ul>
            </div>
        </div>
    </nav>
</header>
