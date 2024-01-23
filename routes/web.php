<?php

use App\Livewire\Produk;
use App\Livewire\Welcome;
use Illuminate\Support\Facades\Route;


Route::get('/', Welcome::class);
Route::get('/produk', Produk::class);
