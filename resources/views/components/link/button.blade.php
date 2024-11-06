@props(['color' => 'blue'])

@php
    $classList = [
        'red' =>
            'bg-red-700 dark:bg-red-800 hover:bg-red-800 dark:hover:bg-red-700 focus:ring-red-300 dark:focus:ring-red-900',
        'sky' =>
            'bg-sky-700 dark:bg-sky-800 hover:bg-sky-800 dark:hover:bg-sky-700 focus:ring-sky-300 dark:focus:ring-sky-900',
        'blue' =>
            'bg-blue-700 dark:bg-blue-800 hover:bg-blue-800 dark:hover:bg-blue-700 focus:ring-blue-300 dark:focus:ring-blue-900',
        'purple' =>
            'bg-purple-700 dark:bg-purple-800 hover:bg-purple-800 dark:hover:bg-purple-700 focus:ring-purple-300 dark:focus:ring-purple-900',
        'zinc' =>
            'bg-zinc-700 dark:bg-zinc-800 hover:bg-zinc-800 dark:hover:bg-zinc-700 focus:ring-zinc-300 dark:focus:ring-zinc-900',
        'gray' =>
            'bg-gray-700 dark:bg-gray-800 hover:bg-gray-800 dark:hover:bg-gray-700 focus:ring-gray-300 dark:focus:ring-gray-900',
        'cyan' =>
            'bg-cyan-700 dark:bg-cyan-800 hover:bg-cyan-800 dark:hover:bg-cyan-700 focus:ring-cyan-300 dark:focus:ring-cyan-900',
        'green' =>
            'bg-green-700 dark:bg-green-800 hover:bg-green-800 dark:hover:bg-green-700 focus:ring-green-300 dark:focus:ring-green-900',
        'rose' =>
            'bg-rose-700 dark:bg-rose-800 hover:bg-rose-800 dark:hover:bg-rose-700 focus:ring-rose-300 dark:focus:ring-rose-900',
        'teal' =>
            'bg-teal-700 dark:bg-teal-800 hover:bg-teal-800 dark:hover:bg-teal-700 focus:ring-teal-300 dark:focus:ring-teal-900',
        'lime' =>
            'bg-lime-700 dark:bg-lime-800 hover:bg-lime-800 dark:hover:bg-lime-700 focus:ring-lime-300 dark:focus:ring-lime-900',
    ];
    if (!array_key_exists($color, $classList)) {
        $color = 'blue';
    }
    $classes =
        $classList[$color] . ' text-white focus:ring-2 focus:outline-none font-medium rounded-lg text-sm px-4 py-2';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</a>
