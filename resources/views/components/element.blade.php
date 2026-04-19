@props(['words'])
<div class="mt-4">
    <ul class="list bg-base-100 rounded-box shadow-md">

        <li class="p-4 pb-2 text-xs opacity-60 tracking-wide">Search history</li>
        @foreach ($words as $word)
            <li class="list-row">
                <div></div>
                <div>
                    <div>{{ $word->word }}</div>
                    <div class="text-xs opacity-60">{{ $word->created_at->diffForHumans() }}</div>
                </div>
                <form method="post" action="/search">
                    @csrf
                    <input name="word" type="hidden" value="{{ $word->word }}">
                    <button class="btn btn-square btn-ghost">&#8594</button>
                </form>
                <form method="post" action="/">
                    @csrf
                    <input name="word" type="hidden" value="{{ $word->id }}">
                    <button class="btn btn-square btn-ghost">&#128465</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
