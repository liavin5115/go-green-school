<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('pages.home'))->name('home');
Route::get('/about', fn () => view('pages.about'))->name('about');
Route::get('/developers', fn () => view('pages.developers'))->name('developers');
Route::get('/programs', fn () => view('pages.programs'))->name('programs');
Route::get('/learn', fn () => view('pages.learn'))->name('learn');
Route::get('/gallery', fn () => view('pages.gallery'))->name('gallery');
Route::get('/news', fn () => view('pages.news'))->name('news');
Route::get('/news/{slug}', fn ($slug) => view('pages.news-detail', ['slug' => $slug]))->name('news.show');
Route::get('/calculator', fn () => view('pages.calculator'))->name('calculator');
Route::get('/join', fn () => view('pages.join'))->name('join');
Route::get('/contact', fn () => view('pages.contact'))->name('contact');
