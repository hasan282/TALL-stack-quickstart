<button x-on:click="darkMode = !darkMode" type="button" {{ $attributes }}>

    <x-svg.moon-outline x-show="darkMode" class="block w-5 h-5 fill-current" />
    <x-svg.sun-outline x-show="!darkMode" class="block w-5 h-5 fill-current" />

</button>
