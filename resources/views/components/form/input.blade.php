@props(['id', 'title', 'type' => 'text'])

<div {{ $attributes }} x-data="{ {{ $id }}: '{{ $slot }}' }">
    <label for="{{ $id }}" class="block text-gray-600 dark:text-gray-300 text-sm ml-2 mb-1"
        x-bind:class="{ 'opacity-0': {{ $id }} == '' }">{{ $title }}</label>
    <input type="{{ $type }}" id="{{ $id }}" x-model="{{ $id }}"
        class="w-full border-2 rounded-lg py-2 px-3 border-gray-200 dark:border-gray-600 dark:bg-slate-700 dark:text-white focus:outline-none focus:border-blue-400 dark:focus:border-blue-600"
        placeholder="{{ $title }}">
</div>
