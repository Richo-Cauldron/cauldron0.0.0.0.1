<?php

use App\Http\Livewire\Pages\Login;
use App\Http\Livewire\Pages\Home;
use App\Http\Livewire\Pages\Register;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.homepage');

// Route::get('/', Home::class);
Route::get('/login', Login::class);
Route::get('/register', Register::class);




