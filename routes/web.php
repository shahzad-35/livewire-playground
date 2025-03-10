<?php

use App\Livewire\Search;
use App\Livewire\ShowArticle;
use Illuminate\Support\Facades\Route;

// Route::get('search', Search::class);
Route::get('article/{article}', ShowArticle::class)->name('show-article');

Route::get('/', function () {
    return view('welcome');
});
