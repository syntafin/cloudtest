<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::controller(PostController::class)
    ->group(function() {
        Route::get('/', 'index')->name('home');
        Route::get('/posts/{post:slug}', 'show')->name('posts.show');
    });

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
