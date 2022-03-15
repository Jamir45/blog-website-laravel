<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutesController;

Route::get('/', [RoutesController::class, 'HomeController']);

Route::get('/post/{postId}', [RoutesController::class, 'PostController']);

Route::get('/create/post', function() {
    return view('createpost');
});

Route::post('/insert/post', [RoutesController::class, 'InsertPost']);
Route::delete('/delete/post/{postId}', [RoutesController::class, 'DeletePost']);
