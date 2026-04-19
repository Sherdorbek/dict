<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Http;
use App\Models\wordHistory;

use function PHPUnit\Framework\isEmpty;

Route::get('/', function () {
    return view('index', ['words' => wordHistory::all()->reverse()]);
})->name('index');

Route::post('/', function (Request $request) {
    wordHistory::where('id', $request['word'])->delete();
    return redirect("/");
});

Route::get('/search', function () {
    return view('search');
});

Route::post('/search', function (Request $request) {
    $word = $request['word'];
    $response = Http::get("https://api.dictionaryapi.dev/api/v2/entries/en/" . $word);
    $data = $response->json();

    if (isEmpty($data)) {
        return redirect('/')->with('success', 'word not found');
    }

    $fetchedWord = $data[0]['word'] ?? null;
    if ($fetchedWord) {
        wordHistory::where("word", $fetchedWord)?->delete();
        wordHistory::create(['word' => $fetchedWord]);
    }
    return view('search', ['data' => $data[0]]);
});
