<x-layout>
    @if (session('success'))
        <div class="toast toast-top toast-center z-50">
            <div role="alert" class="alert alert-error alert-soft animate-fade-out">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>{{ session('success') }}</span>
            </div>
        </div>
    @endif
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
