@props(['href'])

<a href="{{ $href }}"
    class="px-4 py-2 flex items-center text-sm rounded text-gray-600 hover:bg-gray-200 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white"
    role="menuitem">{{ $slot }}</a>
