@props(['active', 'href' => '#', 'color' => 'blue'])

@php
    $baseClass = 'block py-2 px-5 lg:p-0 rounded-md ';
    $colorClass = [
        'blue' => ['lg:text-blue-700 bg-blue-700', 'lg:hover:text-blue-700'],
        'purple' => ['lg:text-purple-700 bg-purple-700', 'lg:hover:text-purple-700'],
        'red' => ['lg:text-red-700 bg-red-700', 'lg:hover:text-red-700'],
    ];
    if (!array_key_exists($color, $colorClass)) {
        $color = 'blue';
    }
    [$activeClass, $inactiveClass] = $colorClass[$color];
@endphp

<li>
    @if ($active)
        <a href="{{ $href }}"
            class="{{ $baseClass . $activeClass }} text-white dark:text-white lg:bg-transparent font-semibold"
            aria-current="page">{{ $slot }}</a>
    @else
        <hr class="lg:hidden w-11/12 mx-auto border-gray-100 dark:border-gray-800">
        <a href="{{ $href }}"
            class="{{ $baseClass . $inactiveClass }} text-gray-700 dark:text-gray-400 dark:hover:text-white  lg:dark:hover:text-white hover:bg-gray-200 dark:hover:bg-gray-700 lg:hover:bg-transparent lg:dark:hover:bg-transparent">{{ $slot }}</a>
    @endif
</li>
