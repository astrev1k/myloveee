<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

// Halaman password
Route::get('/unlock', function () {
    if (Session::get('anniversary_unlocked')) {
        return redirect()->route('home');
    }

    return view('password');
})->name('password');

// Proses password
Route::post('/unlock', function (Request $request) {

    $request->validate([
        'password' => ['required', 'string', 'max:200'],
    ]);

    if ($request->input('password') !== config('anniversary.password')) {
        return back()->withErrors([
            'password' => 'Wrong password, sayang. Try again ♡',
        ]);
    }

    $request->session()->regenerate();

    $request->session()->put('anniversary_unlocked', true);

    return redirect()->route('home');

})->middleware('throttle:5,1')->name('unlock');

// Halaman logout
Route::post('/lock', function (Request $request) {
    $request->session()->forget('anniversary_unlocked');
    $request->session()->regenerateToken();

    return redirect()->route('password');
})->name('lock');

// Middleware untuk lindungi semua halaman
Route::middleware('anniversary')->group(function () {

    Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::get('/our-story', function () {
        return view('story');
    })->name('story');

    Route::get('/memories', function () {
        return view('memories');
    })->name('memories');

    Route::get('/love-letter', function () {
        return view('letter');
    })->name('letter');

    Route::get('/surprise', function () {
        return view('surprise');
    })->name('surprise');

});
