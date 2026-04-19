<x-layout>
    <div class="flex justify-center items-center pt-10">
        <form method="post" action="/search" class="grid grid-cols-5 gap-2">
            @csrf
            <label class="input col-span-3">
                <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" fill="none"
                        stroke="currentColor">
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="m21 21-4.3-4.3"></path>
                    </g>
                </svg>
                <input name="word" type="search" class="grow" placeholder="Search" />
            </label>
            <button class="btn btn-primary col-span-1" type="submit">Search</button>
        </form>
    </div>
    <div class="mx-auto max-w-2xl">
        <x-element :words="$words"></x-element>
    </div>
</x-layout>
