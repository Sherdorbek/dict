@props(['data'])
<x-layout>
    <div class="w-full flex">
        <div class="mx-auto max-w-2xl py-4">
            <div class="flex flex-row gap-4 items-center">
                <a href="{{ route('index') }}" class="btn btn-soft btn-secondary mr-4">&#8592</a>
                <div>
                    <p class="text-5xl mb-2">{{ $data['word'] }}</p>
                    <p class="text-lg text-secondary ">{{ $data['phonetic'] ?? '' }}</p>
                </div>
            </div>
            @foreach ($data['meanings'] as $meaning)
                <x-meaning :meaning="$meaning" />
            @endforeach
        </div>
    </div>
</x-layout>
