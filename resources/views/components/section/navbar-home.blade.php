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
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-white bg-purple-700 rounded lg:bg-transparent lg:text-purple-700 lg:p-0 dark:text-white"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Company</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Marketplace</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Features</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Team</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
</header>
