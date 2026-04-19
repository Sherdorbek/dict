<div>
    <p
        class="text-2xl font-bold mt-4
        {{ match ($meaning['partOfSpeech']) {'verb' => 'text-blue-300','noun' => 'text-amber-300',default => 'text-green-300'} }}">
        {{ $meaning['partOfSpeech'] }}</p>
    <ul class="list-disc">
        @foreach ($meaning['definitions'] as $definition)
            <li>{{ $definition['definition'] }}</li>
        @endforeach
    </ul>
</div>
